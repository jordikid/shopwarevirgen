<?php declare(strict_types=1);

namespace Shopware\Core\Framework\DataAbstractionLayer;

use Shopware\Core\Framework\DataAbstractionLayer\Field\Field;
use Shopware\Core\Framework\Struct\Collection;

/**
 * @method void       set(string $key, Field $entity)
 * @method Field|null first()
 * @method Field|null last()
 */
class FieldCollection extends Collection
{
    public function compile(DefinitionInstanceRegistry $registry): CompiledFieldCollection
    {
        /** @var Field $field */
        foreach ($this->elements as $field) {
            $field->compile($registry);
        }

        return new CompiledFieldCollection($registry, $this->elements);
    }

    protected function getExpectedClass(): ?string
    {
        return Field::class;
    }
}
