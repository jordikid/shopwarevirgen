<?php declare(strict_types=1);

namespace Shopware\Core\System\NumberRange\Aggregate\NumberRangeSalesChannel;

use Shopware\Core\Framework\DataAbstractionLayer\EntityCollection;

/**
 * @method void                               add(NumberRangeSalesChannelEntity $entity)
 * @method NumberRangeSalesChannelEntity[]    getIterator()
 * @method NumberRangeSalesChannelEntity[]    getElements()
 * @method NumberRangeSalesChannelEntity|null get(string $key)
 * @method NumberRangeSalesChannelEntity|null first()
 * @method NumberRangeSalesChannelEntity|null last()
 */
class NumberRangeSalesChannelCollection extends EntityCollection
{
    protected function getExpectedClass(): string
    {
        return NumberRangeSalesChannelEntity::class;
    }
}
