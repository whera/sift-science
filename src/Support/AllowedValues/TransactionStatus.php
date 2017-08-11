<?php

namespace WSW\SiftScience\Support\AllowedValues;

/**
 * Class TransactionStatus
 *
 * @package WSW\SiftScience\Support\AllowedValues
 * @author Ronaldo Matos Rodrigues <ronaldo@whera.com.br>
 */
class TransactionStatus extends BaseAllowedValues
{
    /**
     * @var string
     */
    const SUCCESS = '$success';

    /**
     * @var string
     */
    const FAILURE = '$failure';

    /**
     * @var string
     */
    const PENDING = '$pending';
}
