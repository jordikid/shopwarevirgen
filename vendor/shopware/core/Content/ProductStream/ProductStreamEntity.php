<?php declare(strict_types=1);

namespace Shopware\Core\Content\ProductStream;

use Shopware\Core\Content\Product\Aggregate\ProductCrossSelling\ProductCrossSellingCollection;
use Shopware\Core\Content\ProductExport\ProductExportCollection;
use Shopware\Core\Content\ProductStream\Aggregate\ProductStreamFilter\ProductStreamFilterCollection;
use Shopware\Core\Content\ProductStream\Aggregate\ProductStreamTranslation\ProductStreamTranslationCollection;
use Shopware\Core\Framework\DataAbstractionLayer\Entity;
use Shopware\Core\Framework\DataAbstractionLayer\EntityIdTrait;

class ProductStreamEntity extends Entity
{
    use EntityIdTrait;

    /**
     * @var string
     */
    protected $name;

    /**
     * @var string|null
     */
    protected $description;

    /**
     * @var array|null
     */
    protected $apiFilter;

    /**
     * @var ProductStreamFilterCollection|null
     */
    protected $filters;

    /**
     * @var bool
     */
    protected $invalid;

    /**
     * @var ProductStreamTranslationCollection|null
     */
    protected $translations;

    /**
     * @var array|null
     */
    protected $customFields;

    /**
     * @var ProductExportCollection|null
     */
    protected $productExports;

    /**
     * @var ProductCrossSellingCollection|null
     */
    protected $productCrossSellings;

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): void
    {
        $this->description = $description;
    }

    public function getApiFilter(): ?array
    {
        return $this->apiFilter;
    }

    public function setApiFilter(?array $apiFilter): void
    {
        $this->apiFilter = $apiFilter;
    }

    public function getFilters(): ?ProductStreamFilterCollection
    {
        return $this->filters;
    }

    public function setFilters(ProductStreamFilterCollection $filters): void
    {
        $this->filters = $filters;
    }

    public function isInvalid(): bool
    {
        return $this->invalid;
    }

    public function setInvalid(bool $invalid): void
    {
        $this->invalid = $invalid;
    }

    public function getTranslations(): ?ProductStreamTranslationCollection
    {
        return $this->translations;
    }

    public function setTranslations(ProductStreamTranslationCollection $translations): void
    {
        $this->translations = $translations;
    }

    public function getCustomFields(): ?array
    {
        return $this->customFields;
    }

    public function setCustomFields(?array $customFields): void
    {
        $this->customFields = $customFields;
    }

    public function getProductExports(): ?ProductExportCollection
    {
        return $this->productExports;
    }

    public function setProductExports(ProductExportCollection $productExports): void
    {
        $this->productExports = $productExports;
    }

    public function getProductCrossSellings(): ?ProductCrossSellingCollection
    {
        return $this->productCrossSellings;
    }

    public function setProductCrossSellings(ProductCrossSellingCollection $productCrossSellings): void
    {
        $this->productCrossSellings = $productCrossSellings;
    }
}
