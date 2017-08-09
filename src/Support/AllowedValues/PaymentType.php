<?php

namespace WSW\SiftScience\Support\AllowedValues;

/**
 * Class PaymentType
 *
 * @package WSW\SiftScience\Support\AllowedValues
 * @author Ronaldo Matos Rodrigues <ronaldo@whera.com.br>
 */
abstract class PaymentType extends BaseAllowedValues
{
    /**
     * @var string
     */
    const CASH = '$cash';

    /**
     * @var string
     */
    const CHECK = '$check';

    /**
     * @var string
     */
    const CREDIT_CARD = '$credit_card';

    /**
     * @var string
     */
    const CRYPTO_CURRENCY = '$crypto_currency';

    /**
     * @var string
     */
    const DIGITAL_WALLET = '$digital_wallet';

    /**
     * @var string
     */
    const ELECTRONIC_FUND_TRANSFER = '$electronic_fund_transfer';

    /**
     * @var string
     */
    const FINANCING = '$financing';

    /**
     * @var string
     */
    const GIFT_CARD = '$gift_card';

    /**
     * @var string
     */
    const INVOICE = '$invoice';

    /**
     * @var string
     */
    const MONEY_ORDER = '$money_order';

    /**
     * @var string
     */
    const POINTS = '$points';

    /**
     * @var string
     */
    const STORE_CREDIT = '$store_credit';

    /**
     * @var string
     */
    const THIRD_PARTY_PROCESSOR = '$third_party_processor';

    /**
     * @var string
     */
    const VOUCHER = '$voucher';
}
