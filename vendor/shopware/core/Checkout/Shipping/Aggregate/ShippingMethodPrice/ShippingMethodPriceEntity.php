<?php declare(strict_types=1);

namespace Shopware\Core\Checkout\Shipping\Aggregate\ShippingMethodPrice;

use Shopware\Core\Checkout\Shipping\ShippingMethodEntity;
use Shopware\Core\Content\Rule\RuleEntity;
use Shopware\Core\Framework\DataAbstractionLayer\Entity;
use Shopware\Core\Framework\DataAbstractionLayer\EntityIdTrait;
use Shopware\Core\System\Currency\CurrencyEntity;

class ShippingMethodPriceEntity extends Entity
{
    use EntityIdTrait;

    /**
     * @var string
     */
    protected $shippingMethodId;

    /**
     * @var string
     */
    protected $currencyId;

    /**
     * @var string|null
     */
    protected $ruleId;

    /**
     * @var int|null
     */
    protected $calculation;

    /**
     * @var float|null
     */
    protected $quantityStart;

    /**
     * @var float|null
     */
    protected $quantityEnd;

    /**
     * @var float
     */
    protected $price;

    /**
     * @var ShippingMethodEntity|null
     */
    protected $shippingMethod;

    /**
     * @var array|null
     */
    protected $customFields;

    /**
     * @var RuleEntity|null
     */
    protected $rule;

    /**
     * @var CurrencyEntity|null
     */
    protected $currency;

    /**
     * @var string|null
     */
    protected $calculationRuleId;

    /**
     * @var RuleEntity|null
     */
    protected $calculationRule;

    public function getShippingMethodId(): string
    {
        return $this->shippingMethodId;
    }

    public function setShippingMethodId(string $shippingMethodId): void
    {
        $this->shippingMethodId = $shippingMethodId;
    }

    public function getQuantityStart(): ?float
    {
        return $this->quantityStart;
    }

    public function setQuantityStart(float $quantityStart): void
    {
        $this->quantityStart = $quantityStart;
    }

    public function getQuantityEnd(): ?float
    {
        return $this->quantityEnd;
    }

    public function setQuantityEnd(float $quantityEnd): void
    {
        $this->quantityEnd = $quantityEnd;
    }

    public function getPrice(): float
    {
        return $this->price;
    }

    public function setPrice(float $price): void
    {
        $this->price = $price;
    }

    public function getCalculation(): ?int
    {
        return $this->calculation;
    }

    public function setCalculation(int $calculation): void
    {
        $this->calculation = $calculation;
    }

    public function getShippingMethod(): ?ShippingMethodEntity
    {
        return $this->shippingMethod;
    }

    public function setShippingMethod(ShippingMethodEntity $shippingMethod): void
    {
        $this->shippingMethod = $shippingMethod;
    }

    public function getCustomFields(): ?array
    {
        return $this->customFields;
    }

    public function setCustomFields(?array $customFields): void
    {
        $this->customFields = $customFields;
    }

    public function getCurrencyId(): string
    {
        return $this->currencyId;
    }

    public function setCurrencyId(string $currencyId): void
    {
        $this->currencyId = $currencyId;
    }

    public function getRuleId(): ?string
    {
        return $this->ruleId;
    }

    public function setRuleId(string $ruleId): void
    {
        $this->ruleId = $ruleId;
    }

    public function getRule(): ?RuleEntity
    {
        return $this->rule;
    }

    public function setRule(?RuleEntity $rule): void
    {
        $this->rule = $rule;
    }

    public function getCurrency(): ?CurrencyEntity
    {
        return $this->currency;
    }

    public function setCurrency(?CurrencyEntity $currency): void
    {
        $this->currency = $currency;
    }

    public function getCalculationRuleId(): ?string
    {
        return $this->calculationRuleId;
    }

    public function setCalculationRuleId(?string $calculationRuleId): void
    {
        $this->calculationRuleId = $calculationRuleId;
    }

    public function getCalculationRule(): ?RuleEntity
    {
        return $this->calculationRule;
    }

    public function setCalculationRule(?RuleEntity $calculationRule): void
    {
        $this->calculationRule = $calculationRule;
    }
}
