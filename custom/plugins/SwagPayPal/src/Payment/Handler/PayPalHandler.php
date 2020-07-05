<?php declare(strict_types=1);
/*
 * (c) shopware AG <info@shopware.com>
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Swag\PayPal\Payment\Handler;

use Shopware\Core\Checkout\Customer\CustomerEntity;
use Shopware\Core\Checkout\Payment\Cart\AsyncPaymentTransactionStruct;
use Shopware\Core\Checkout\Payment\Exception\AsyncPaymentProcessException;
use Shopware\Core\Framework\DataAbstractionLayer\EntityRepositoryInterface;
use Shopware\Core\System\SalesChannel\SalesChannelContext;
use Swag\PayPal\Payment\Builder\OrderPaymentBuilderInterface;
use Swag\PayPal\Payment\Patch\PayerInfoPatchBuilder;
use Swag\PayPal\Payment\Patch\ShippingAddressPatchBuilder;
use Swag\PayPal\PayPal\Api\Payment;
use Swag\PayPal\PayPal\Api\Payment\PaymentInstruction;
use Swag\PayPal\PayPal\PartnerAttributionId;
use Swag\PayPal\PayPal\PaymentIntent;
use Swag\PayPal\PayPal\Resource\PaymentResource;

class PayPalHandler extends AbstractPaymentHandler
{
    /**
     * @var OrderPaymentBuilderInterface
     */
    private $paymentBuilder;

    /**
     * @var PayerInfoPatchBuilder
     */
    private $payerInfoPatchBuilder;

    /**
     * @var ShippingAddressPatchBuilder
     */
    private $shippingAddressPatchBuilder;

    public function __construct(
        PaymentResource $paymentResource,
        EntityRepositoryInterface $orderTransactionRepo,
        OrderPaymentBuilderInterface $paymentBuilder,
        PayerInfoPatchBuilder $payerInfoPatchBuilder,
        ShippingAddressPatchBuilder $shippingAddressPatchBuilder
    ) {
        parent::__construct($paymentResource, $orderTransactionRepo);
        $this->paymentBuilder = $paymentBuilder;
        $this->payerInfoPatchBuilder = $payerInfoPatchBuilder;
        $this->shippingAddressPatchBuilder = $shippingAddressPatchBuilder;
    }

    /**
     * @throws AsyncPaymentProcessException
     */
    public function handlePayPalPayment(
        AsyncPaymentTransactionStruct $transaction,
        SalesChannelContext $salesChannelContext,
        CustomerEntity $customer,
        bool $payUponInvoice = false
    ): Payment {
        $payment = $this->paymentBuilder->getPayment($transaction, $salesChannelContext);
        if ($payUponInvoice) {
            $payment->setIntent(PaymentIntent::SALE);
            $payment->getPayer()->setExternalSelectedFundingInstrumentType(PaymentInstruction::TYPE_INVOICE);
            $payment->getApplicationContext()->setLocale('de_DE');
        }

        $salesChannelId = $salesChannelContext->getSalesChannel()->getId();
        $orderTransactionId = $transaction->getOrderTransaction()->getId();

        try {
            $response = $this->paymentResource->create(
                $payment,
                $salesChannelId,
                PartnerAttributionId::PAYPAL_CLASSIC
            );
        } catch (\Exception $e) {
            throw new AsyncPaymentProcessException(
                $orderTransactionId,
                'An error occurred during the communication with PayPal' . PHP_EOL . $e->getMessage()
            );
        }

        $paypalPaymentId = $response->getId();
        $patches = [
            $this->shippingAddressPatchBuilder->createShippingAddressPatch($customer),
            $this->payerInfoPatchBuilder->createPayerInfoPatch($customer),
        ];

        $this->patchPayPalPayment($patches, $paypalPaymentId, $salesChannelId, $orderTransactionId);

        $context = $salesChannelContext->getContext();
        $this->addPayPalTransactionId($transaction, $paypalPaymentId, $context);

        return $response;
    }
}
