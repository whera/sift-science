<?php

namespace WSW\SiftScience\Support\AllowedValues;

/**
 * Class ChargebackReason
 *
 * @package WSW\SiftScience\Support\AllowedValues
 * @author Ronaldo Matos Rodrigues <ronaldo@whera.com.br>
 */
abstract class ChargebackReason extends BaseAllowedValues
{

    /**
     * @var string
     */
    const FRAUD = '$fraud';

    /**
     * @var string
     */
    const DUPLICATE = '$duplicate';

    /**
     * @var string
     */
    const PRODUCT_NOT_RECEIVED = '$product_not_received';

    /**
     * @var string
     */
    const PRODUCT_UNACCEPTABLE = '$product_unacceptable';

    /**
     * @var string
     */
    const OTHER = '$other';
}
