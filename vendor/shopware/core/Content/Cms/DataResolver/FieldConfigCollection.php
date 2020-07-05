<?php declare(strict_types=1);

namespace Shopware\Core\Content\Cms\DataResolver;

use Shopware\Core\Framework\Struct\Collection;

/**
 * @method void             set(string $key, FieldConfig $entity)
 * @method FieldConfig[]    getIterator()
 * @method FieldConfig[]    getElements()
 * @method FieldConfig|null get(string $key)
 * @method FieldConfig|null first()
 * @method FieldConfig|null last()
 */
class FieldConfigCollection extends Collection
{
    /**
     * @param FieldConfig $element
     */
    public function add($element): void
    {
        $this->set($element->getName(), $element);
    }

    protected function getExpectedClass(): ?string
    {
        return FieldConfig::class;
    }
}
