<?php declare(strict_types=1);
/*
 * (c) shopware AG <info@shopware.com>
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Swag\PayPal\Test\Mock;

use Psr\Cache\CacheItemInterface;
use Shopware\Core\Defaults;

class CacheItemWithTokenMock implements CacheItemInterface
{
    public const ACCESS_TOKEN = 'A21AAEaQMaSheELTFsynkQLwXBZIr-fObE9PtGjr6_SOVEBXWNaJu1DvwKfLiJdxZ1aNtyYwK0ToZEL1i6TL5Dq9Qm30ZQfkA';

    public function getKey(): string
    {
    }

    public function get()
    {
        $expireDate = new \DateTime();
        $expireDate->add(new \DateInterval('PT5H'));
        $expireDate = $expireDate->format(Defaults::STORAGE_DATE_TIME_FORMAT);

        return 'O:28:"Swag\\PayPal\\PayPal\\Api\\Token":7:{s:35:"'
            . "\0Swag\\PayPal\\PayPal\\Api\\Token\0scope\";s:275:\"https://uri.paypal.com/services/subscriptions https://api.paypal.com/v1/payments/.* https://api.paypal.com/v1/vault/credit-card https://uri.paypal.com/services/applications/webhooks openid https://uri.paypal.com/payments/payouts https://api.paypal.com/v1/vault/credit-card/.*\";s:35:\""
            . "\0Swag\\PayPal\\PayPal\\Api\\Token\0nonce\";s:63:\"2018-11-28T09:55:25Z-e1ZbHti0TBbVkqQDZSsZ7YkzM5rpibcPAsW8wcS-hw\";s:41:\""
            . "\0Swag\\PayPal\\PayPal\\Api\\Token\0accessToken\";s:97:\"" . self::ACCESS_TOKEN . '";s:39:"'
            . "\0Swag\\PayPal\\PayPal\\Api\\Token\0tokenType\";s:6:\"Bearer\";s:35:\""
            . "\0Swag\\PayPal\\PayPal\\Api\\Token\0appId\";s:21:\"APP-80W284485P519543T\";s:39:\""
            . "\0Swag\\PayPal\\PayPal\\Api\\Token\0expiresIn\";i:32389;s:44:\""
            . "\0Swag\\PayPal\\PayPal\\Api\\Token\0expireDateTime\";O:8:\"DateTime\":3:{s:4:\"date\";s:23:\"" . $expireDate . '";s:13:"timezone_type";i:3;s:8:"timezone";s:13:"Europe/Berlin";}}';
    }

    public function isHit(): bool
    {
    }

    /**
     * @param string|mixed $value
     */
    public function set($value): CacheItemInterface
    {
    }

    /**
     * @param \DateTimeInterface|null $expiration
     */
    public function expiresAt($expiration): CacheItemInterface
    {
    }

    /**
     * @param \DateInterval|int|null $time
     */
    public function expiresAfter($time): CacheItemInterface
    {
    }
}
