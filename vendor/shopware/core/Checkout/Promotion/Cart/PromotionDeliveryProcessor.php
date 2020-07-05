<?php declare(strict_types=1);

namespace Shopware\Core\Checkout\Promotion\Cart;

use Shopware\Core\Checkout\Cart\Cart;
use Shopware\Core\Checkout\Cart\CartBehavior;
use Shopware\Core\Checkout\Cart\CartProcessorInterface;
use Shopware\Core\Checkout\Cart\LineItem\CartDataCollection;
use Shopware\Core\Checkout\Cart\LineItem\LineItemCollection;
use Shopware\Core\System\SalesChannel\SalesChannelContext;

class PromotionDeliveryProcessor implements CartProcessorInterface
{
    /**
     * @var PromotionDeliveryCalculator
     */
    private $calculator;

    public function __construct(PromotionDeliveryCalculator $calculator)
    {
        $this->calculator = $calculator;
    }

    public function process(CartDataCollection $data, Cart $original, Cart $toCalculate, SalesChannelContext $context, CartBehavior $behavior): void
    {
        // if there is no collected promotion we may return - nothing to calculate!
        if (!$data->has(PromotionProcessor::DATA_KEY)) {
            return;
        }

        // if we are in recalculation,
        // we must not re-add any promotions. just leave it as it is.
        if ($behavior->isRecalculation()) {
            return;
        }

        /** @var LineItemCollection $discountLineItems */
        $discountLineItems = $data->get(PromotionProcessor::DATA_KEY);

        // calculate the whole cart with the
        // new list of created promotion discount line items
        $this->calculator->calculate(
            new LineItemCollection($discountLineItems),
            $original,
            $toCalculate,
            $context
        );
    }
}
