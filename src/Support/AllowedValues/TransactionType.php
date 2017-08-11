<?php

namespace WSW\SiftScience\Support\AllowedValues;

/**
 * Class TransactionType
 *
 * @package WSW\SiftScience\Support\AllowedValues
 * @author Ronaldo Matos Rodrigues <ronaldo@whera.com.br>
 */
abstract class TransactionType extends BaseAllowedValues
{
    /**
     * @var string
     */
    const SALE = '$sale';

    /**
     * @var string
     */
    const AUTHORIZE = '$authorize';

    /**
     * @var string
     */
    const CAPTURE = '$capture';

    /**
     * @var string
     */
    const VOID = '$void';

    /**
     * @var string
     */
    const REFUND = '$refund';

    /**
     * @var string
     */
    const DEPOSIT = '$deposit';

    /**
     * @var string
     */
    const WITHDRAWAL = '$withdrawal';

    /**
     * @var string
     */
    const TRANSFER = '$transfer';
}
