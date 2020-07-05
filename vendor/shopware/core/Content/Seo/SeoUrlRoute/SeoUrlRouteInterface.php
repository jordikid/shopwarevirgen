<?php declare(strict_types=1);

namespace Shopware\Core\Content\Seo\SeoUrlRoute;

use Shopware\Core\Framework\DataAbstractionLayer\Entity;
use Shopware\Core\Framework\DataAbstractionLayer\Event\EntityWrittenContainerEvent;
use Shopware\Core\Framework\DataAbstractionLayer\Search\Criteria;
use Shopware\Core\System\SalesChannel\SalesChannelEntity;

interface SeoUrlRouteInterface
{
    public function getConfig(): SeoUrlRouteConfig;

    public function prepareCriteria(Criteria $criteria): void;

    public function extractIdsToUpdate(EntityWrittenContainerEvent $event): SeoUrlExtractIdResult;

    public function getMapping(Entity $entity, ?SalesChannelEntity $salesChannel): SeoUrlMapping;

    public function getSeoVariables(): array;
}
