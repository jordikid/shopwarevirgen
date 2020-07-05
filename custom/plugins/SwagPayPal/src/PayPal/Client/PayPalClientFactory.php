<?php declare(strict_types=1);
/*
 * (c) shopware AG <info@shopware.com>
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Swag\PayPal\PayPal\Client;

use Psr\Log\LoggerInterface;
use Swag\PayPal\PayPal\PartnerAttributionId;
use Swag\PayPal\PayPal\Resource\TokenResource;
use Swag\PayPal\Setting\Service\SettingsServiceInterface;

class PayPalClientFactory
{
    /**
     * @var SettingsServiceInterface
     */
    protected $settingsProvider;

    /**
     * @var TokenResource
     */
    private $tokenResource;

    /**
     * @var LoggerInterface
     */
    private $logger;

    public function __construct(
        TokenResource $tokenResource,
        SettingsServiceInterface $settingsProvider,
        LoggerInterface $logger
    ) {
        $this->tokenResource = $tokenResource;
        $this->settingsProvider = $settingsProvider;
        $this->logger = $logger;
    }

    public function createPaymentClient(
        ?string $salesChannelId,
        string $partnerAttributionId = PartnerAttributionId::PAYPAL_CLASSIC
    ): PayPalClient {
        $settings = $this->settingsProvider->getSettings($salesChannelId);

        return new PayPalClient($this->tokenResource, $settings, $this->logger, $partnerAttributionId);
    }
}
