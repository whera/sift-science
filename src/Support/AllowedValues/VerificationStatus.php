<?php

namespace WSW\SiftScience\Support\AllowedValues;

/**
 * Class VerificationStatus
 *
 * @package WSW\SiftScience\Support\AllowedValues
 * @author Ronaldo Matos Rodrigues <ronaldo@whera.com.br>
 */
abstract class VerificationStatus extends BaseAllowedValues
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
