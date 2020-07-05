<?php declare(strict_types=1);

namespace Shopware\Storefront\Pagelet\Footer;

use Shopware\Core\Content\Category\Service\NavigationLoader;
use Shopware\Core\System\SalesChannel\SalesChannelContext;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;
use Symfony\Component\HttpFoundation\Request;

class FooterPageletLoader implements FooterPageletLoaderInterface
{
    /**
     * @var EventDispatcherInterface
     */
    private $eventDispatcher;

    /**
     * @var NavigationLoader
     */
    private $navigationLoader;

    public function __construct(NavigationLoader $navigationLoader, EventDispatcherInterface $eventDispatcher)
    {
        $this->navigationLoader = $navigationLoader;
        $this->eventDispatcher = $eventDispatcher;
    }

    public function load(Request $request, SalesChannelContext $salesChannelContext): FooterPagelet
    {
        $footerId = $salesChannelContext->getSalesChannel()->getFooterCategoryId();

        $tree = null;
        if ($footerId) {
            $navigationId = $request->get('navigationId', $footerId);

            $tree = $this->navigationLoader->load($navigationId, $salesChannelContext, $footerId);
        }

        $pagelet = new FooterPagelet($tree);

        $this->eventDispatcher->dispatch(
            new FooterPageletLoadedEvent($pagelet, $salesChannelContext, $request)
        );

        return $pagelet;
    }
}
