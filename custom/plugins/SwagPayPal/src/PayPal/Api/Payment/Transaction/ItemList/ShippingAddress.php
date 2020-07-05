<?php declare(strict_types=1);
/*
 * (c) shopware AG <info@shopware.com>
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Swag\PayPal\PayPal\Api\Payment\Transaction\ItemList;

use Swag\PayPal\PayPal\Api\Common\Address;

class ShippingAddress extends Address
{
    /**
     * @var string
     */
    private $recipientName;

    public function setRecipientName(string $recipientName): void
    {
        $this->recipientName = $recipientName;
    }
}
