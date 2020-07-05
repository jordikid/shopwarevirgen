<?php declare(strict_types=1);

namespace Shopware\Core\Content\Product\Aggregate\ProductCrossSelling;

use Shopware\Core\Content\Product\Aggregate\ProductCrossSellingTranslation\ProductCrossSellingTranslationDefinition;
use Shopware\Core\Content\Product\ProductDefinition;
use Shopware\Core\Content\ProductStream\ProductStreamDefinition;
use Shopware\Core\Framework\Api\Context\SalesChannelApiSource;
use Shopware\Core\Framework\DataAbstractionLayer\EntityDefinition;
use Shopware\Core\Framework\DataAbstractionLayer\Field\BoolField;
use Shopware\Core\Framework\DataAbstractionLayer\Field\FkField;
use Shopware\Core\Framework\DataAbstractionLayer\Field\Flag\PrimaryKey;
use Shopware\Core\Framework\DataAbstractionLayer\Field\Flag\ReadProtected;
use Shopware\Core\Framework\DataAbstractionLayer\Field\Flag\Required;
use Shopware\Core\Framework\DataAbstractionLayer\Field\Flag\ReverseInherited;
use Shopware\Core\Framework\DataAbstractionLayer\Field\IdField;
use Shopware\Core\Framework\DataAbstractionLayer\Field\IntField;
use Shopware\Core\Framework\DataAbstractionLayer\Field\ManyToOneAssociationField;
use Shopware\Core\Framework\DataAbstractionLayer\Field\ReferenceVersionField;
use Shopware\Core\Framework\DataAbstractionLayer\Field\StringField;
use Shopware\Core\Framework\DataAbstractionLayer\Field\TranslatedField;
use Shopware\Core\Framework\DataAbstractionLayer\Field\TranslationsAssociationField;
use Shopware\Core\Framework\DataAbstractionLayer\FieldCollection;
use Shopware\Core\Framework\DataAbstractionLayer\Search\Sorting\FieldSorting;

class ProductCrossSellingDefinition extends EntityDefinition
{
    public const ENTITY_NAME = 'product_cross_selling';

    public const SORT_BY_PRICE = 'price';
    public const SORT_BY_RELEASE_DATE = 'releaseDate';
    public const SORT_BY_NAME = 'name';

    public function getEntityName(): string
    {
        return self::ENTITY_NAME;
    }

    public function getEntityClass(): string
    {
        return ProductCrossSellingEntity::class;
    }

    public function getCollectionClass(): string
    {
        return ProductCrossSellingCollection::class;
    }

    public function getParentDefinitionClass(): ?string
    {
        return ProductDefinition::class;
    }

    public function getDefaults(): array
    {
        return [
            'position' => 0,
            'sortBy' => self::SORT_BY_PRICE,
            'sortDirection' => FieldSorting::ASCENDING,
            'active' => false,
            'limit' => 24,
        ];
    }

    protected function defineFields(): FieldCollection
    {
        return new FieldCollection([
            (new IdField('id', 'id'))->addFlags(new PrimaryKey(), new Required()),
            new TranslatedField('name'),
            new IntField('position', 'position', 0),
            new StringField('sort_by', 'sortBy'),
            new StringField('sort_direction', 'sortDirection'),
            new BoolField('active', 'active'),
            new IntField('limit', 'limit', 0),

            (new FkField('product_id', 'productId', ProductDefinition::class))->addFlags(new Required()),
            (new ReferenceVersionField(ProductDefinition::class))->addFlags(new Required()),
            (new ManyToOneAssociationField('product', 'product_id', ProductDefinition::class))->addFlags(new ReverseInherited('crossSellings')),

            (new FkField('product_stream_id', 'productStreamId', ProductStreamDefinition::class))->addFlags(new Required()),
            (new ManyToOneAssociationField('productStream', 'product_stream_id', ProductStreamDefinition::class))->addFlags(new ReadProtected(SalesChannelApiSource::class)),

            new TranslationsAssociationField(ProductCrossSellingTranslationDefinition::class, 'product_cross_selling_id'),
        ]);
    }
}
