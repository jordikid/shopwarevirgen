<?php declare(strict_types=1);
/*
 * (c) shopware AG <info@shopware.com>
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Swag\PayPal\Test\Helper;

final class ConstantsForTesting
{
    // Constants for the repo mocks
    public const REPO_SEARCH_RESULT_TOTAL_WITH_RESULTS = 1;

    public const REPO_SEARCH_RESULT_TOTAL_WITHOUT_RESULTS = 0;

    public const VALID_CLIENT_ID = 'valid-id';

    public const VALID_CLIENT_SECRET = 'valid-secret';

    public const VALID_ORDER_ID = 'valid-order-id';

    public const ORDER_ID_MISSING_PRICE = 'order-id-missing-price';

    public const ORDER_ID_MISSING_LINE_ITEMS = 'order-id-missing-line-items';

    public const PAYER_ID_PAYMENT_AUTHORIZE = 'testPayerIdAuthorize';

    public const PAYER_ID_PAYMENT_ORDER = 'testPayerIdOrder';

    public const PAYER_ID_PAYMENT_PUI = 'testPayerIdPui';
}
