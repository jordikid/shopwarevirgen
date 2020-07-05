<?php declare(strict_types=1);

namespace Shopware\Storefront\Test\Page\Account;

use PHPUnit\Framework\TestCase;
use Shopware\Core\Framework\Test\TestCaseBase\IntegrationTestBehaviour;
use Shopware\Storefront\Page\Account\Login\AccountLoginPage;
use Shopware\Storefront\Page\Account\Login\AccountLoginPageLoadedEvent;
use Shopware\Storefront\Page\Account\Login\AccountLoginPageLoader;
use Shopware\Storefront\Test\Page\StorefrontPageTestBehaviour;
use Shopware\Storefront\Test\Page\StorefrontPageTestConstants;
use Symfony\Component\HttpFoundation\Request;

class LoginPageTest extends TestCase
{
    use IntegrationTestBehaviour;
    use StorefrontPageTestBehaviour;

    public function testItLoadsWithACustomer(): void
    {
        $request = new Request();
        $context = $this->createSalesChannelContextWithLoggedInCustomerAndWithNavigation();

        /** @var AccountLoginPageLoadedEvent $event */
        $event = null;
        $this->catchEvent(AccountLoginPageLoadedEvent::class, $event);

        $page = $this->getPageLoader()->load($request, $context);

        static::assertInstanceOf(AccountLoginPage::class, $page);
        static::assertSame(StorefrontPageTestConstants::COUNTRY_COUNT, $page->getCountries()->count());
        self::assertPageEvent(AccountLoginPageLoadedEvent::class, $event, $context, $request, $page);
    }

    public function itLoadsWithoutACustomer(): void
    {
        $request = new Request();
        $context = $this->createSalesChannelContextWithNavigation();
        $page = $this->getPageLoader()->load($request, $context);

        static::assertSame(StorefrontPageTestConstants::COUNTRY_COUNT, $page->getCountries()->count());
    }

    /**
     * @return AccountLoginPageLoader
     */
    protected function getPageLoader()
    {
        return $this->getContainer()->get(AccountLoginPageLoader::class);
    }
}
