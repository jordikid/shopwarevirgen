<?php declare(strict_types=1);
/*
 * (c) shopware AG <info@shopware.com>
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Swag\PayPal\PayPal\Client;

use GuzzleHttp\Client;
use Psr\Log\LoggerInterface;
use Swag\PayPal\PayPal\Api\Common\PayPalStruct;
use Swag\PayPal\PayPal\Api\OAuthCredentials;
use Swag\PayPal\PayPal\BaseURL;
use Swag\PayPal\PayPal\PartnerAttributionId;
use Swag\PayPal\PayPal\Resource\TokenResource;
use Swag\PayPal\Setting\Exception\PayPalSettingsInvalidException;
use Swag\PayPal\Setting\SwagPayPalSettingStruct;

class PayPalClient extends AbstractClient
{
    /**
     * @var TokenResource
     */
    private $tokenResource;

    /**
     * @throws PayPalSettingsInvalidException
     */
    public function __construct(
        TokenResource $tokenResource,
        SwagPayPalSettingStruct $settings,
        LoggerInterface $logger,
        string $partnerAttributionId = PartnerAttributionId::PAYPAL_CLASSIC
    ) {
        $this->tokenResource = $tokenResource;

        $url = $settings->getSandbox() ? BaseURL::SANDBOX : BaseURL::LIVE;

        $clientId = $settings->getSandbox() ? $settings->getClientIdSandbox() : $settings->getClientId();
        $clientSecret = $settings->getSandbox() ? $settings->getClientSecretSandbox() : $settings->getClientSecret();

        if ($clientId === '') {
            throw new PayPalSettingsInvalidException($settings->getSandbox() ? 'clientIdSandbox' : 'clientId');
        }

        if ($clientSecret === '') {
            throw new PayPalSettingsInvalidException($settings->getSandbox() ? 'clientSecretSandbox' : 'clientSecret');
        }

        $credentials = $this->createCredentialsObject($clientId, $clientSecret);
        $authorizationHeader = $this->createAuthorizationHeaderValue($credentials, $url);

        $client = new Client([
            'base_uri' => $url,
            'headers' => [
                'PayPal-Partner-Attribution-Id' => $partnerAttributionId,
                'Authorization' => $authorizationHeader,
            ],
        ]);

        parent::__construct($client, $logger);
    }

    public function sendPostRequest(string $resourceUri, PayPalStruct $data): array
    {
        $options = [
            'headers' => ['content-type' => 'application/json'],
            'json' => $data,
        ];

        return $this->post($resourceUri, $options);
    }

    public function sendGetRequest(string $resourceUri): array
    {
        return $this->get($resourceUri);
    }

    /**
     * @param PayPalStruct[] $data
     */
    public function sendPatchRequest(string $resourceUri, array $data): array
    {
        $options = [
            'headers' => ['content-type' => 'application/json'],
            'json' => $data,
        ];

        return $this->patch($resourceUri, $options);
    }

    private function createCredentialsObject(string $clientId, string $clientSecret): OAuthCredentials
    {
        $credentials = new OAuthCredentials();
        $credentials->setRestId($clientId);
        $credentials->setRestSecret($clientSecret);

        return $credentials;
    }

    private function createAuthorizationHeaderValue(OAuthCredentials $credentials, string $url): string
    {
        $token = $this->tokenResource->getToken($credentials, $url);

        return $token->getTokenType() . ' ' . $token->getAccessToken();
    }
}
