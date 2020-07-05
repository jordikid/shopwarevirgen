<?php declare(strict_types=1);
/*
 * (c) shopware AG <info@shopware.com>
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Swag\PayPal\Checkout\SPBCheckout;

use Shopware\Core\Checkout\Payment\PaymentMethodCollection;
use Shopware\Core\Framework\Context;
use Shopware\Storefront\Page\Checkout\Confirm\CheckoutConfirmPageLoadedEvent;
use Swag\PayPal\Checkout\ExpressCheckout\ExpressCheckoutController;
use Swag\PayPal\Checkout\SPBCheckout\Service\SPBCheckoutDataService;
use Swag\PayPal\Payment\Handler\AbstractPaymentHandler;
use Swag\PayPal\Payment\Handler\EcsSpbHandler;
use Swag\PayPal\Setting\Exception\PayPalSettingsInvalidException;
use Swag\PayPal\Setting\Service\SettingsServiceInterface;
use Swag\PayPal\Setting\SwagPayPalSettingStruct;
use Swag\PayPal\Util\PaymentMethodUtil;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Contracts\Translation\TranslatorInterface;

class SPBCheckoutSubscriber implements EventSubscriberInterface
{
    public const PAYPAL_SMART_PAYMENT_BUTTONS_DATA_EXTENSION_ID = 'payPalSpbButtonData';

    /**
     * @var SettingsServiceInterface
     */
    private $settingsService;

    /**
     * @var SPBCheckoutDataService
     */
    private $spbCheckoutDataService;

    /**
     * @var PaymentMethodUtil
     */
    private $paymentMethodUtil;

    /**
     * @var Session
     */
    private $session;

    /**
     * @var TranslatorInterface
     */
    private $translator;

    public function __construct(
        SettingsServiceInterface $settingsService,
        SPBCheckoutDataService $spbCheckoutDataService,
        PaymentMethodUtil $paymentMethodUtil,
        Session $session,
        TranslatorInterface $translator
    ) {
        $this->settingsService = $settingsService;
        $this->spbCheckoutDataService = $spbCheckoutDataService;
        $this->paymentMethodUtil = $paymentMethodUtil;
        $this->session = $session;
        $this->translator = $translator;
    }

    public static function getSubscribedEvents(): array
    {
        return [
            CheckoutConfirmPageLoadedEvent::class => 'onCheckoutConfirmLoaded',
        ];
    }

    public function onCheckoutConfirmLoaded(CheckoutConfirmPageLoadedEvent $event): void
    {
        $salesChannelContext = $event->getSalesChannelContext();
        if (!$this->paymentMethodUtil->isPaypalPaymentMethodInSalesChannel($salesChannelContext)) {
            return;
        }

        try {
            $settings = $this->settingsService->getSettings($salesChannelContext->getSalesChannel()->getId());
        } catch (PayPalSettingsInvalidException $e) {
            return;
        }

        if (!$settings->getSpbCheckoutEnabled()
            || $settings->getMerchantLocation() === SwagPayPalSettingStruct::MERCHANT_LOCATION_GERMANY
        ) {
            return;
        }

        $confirmPage = $event->getPage();
        if ($confirmPage->getCart()->getExtension(ExpressCheckoutController::PAYPAL_EXPRESS_CHECKOUT_CART_EXTENSION_ID) !== null) {
            return;
        }

        $requestQuery = $event->getRequest()->query;
        if ($requestQuery->has(EcsSpbHandler::PAYPAL_PAYER_ID_INPUT_NAME)
            && $requestQuery->has(AbstractPaymentHandler::PAYPAL_PAYMENT_ID_INPUT_NAME)
        ) {
            $this->session->getFlashBag()->add('success', $this->translator->trans('smartPaymentButtons.confirmPageHint'));

            return;
        }

        $buttonData = $this->spbCheckoutDataService->getCheckoutData(
            $event->getSalesChannelContext(),
            $settings
        );

        $this->changePaymentMethodDescription($confirmPage->getPaymentMethods(), $event->getContext());

        $confirmPage->addExtension(self::PAYPAL_SMART_PAYMENT_BUTTONS_DATA_EXTENSION_ID, $buttonData);
    }

    private function changePaymentMethodDescription(PaymentMethodCollection $paymentMethods, Context $context): void
    {
        $payPalPaymentMethodId = $this->paymentMethodUtil->getPayPalPaymentMethodId($context);
        if ($payPalPaymentMethodId === null) {
            return;
        }

        $paypalPaymentMethod = $paymentMethods->get($payPalPaymentMethodId);
        if ($paypalPaymentMethod === null) {
            return;
        }

        $paypalPaymentMethod->addTranslated('description', $this->translator->trans('smartPaymentButtons.description'));
    }
}
