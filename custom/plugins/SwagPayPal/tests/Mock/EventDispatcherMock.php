<?php declare(strict_types=1);
/*
 * (c) shopware AG <info@shopware.com>
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Swag\PayPal\Test\Mock;

use Symfony\Contracts\EventDispatcher\EventDispatcherInterface;

class EventDispatcherMock implements EventDispatcherInterface
{
    /**
     * @param object $event
     */
    public function dispatch($event): object
    {
    }
}
