<?php

namespace WSW\SiftScience\Support\AllowedValues;

/**
 * Class FailureReason
 *
 * @package WSW\SiftScience\Support\AllowedValues
 * @author Ronaldo Matos Rodrigues <ronaldo@whera.com.br>
 */
abstract class FailureReason extends BaseAllowedValues
{
    /**
     * @var string
     */
    const ALREADY_USED = '$already_used';

    /**
     * @var string
     */
    const INVALID_CODE = '$invalid_code';

    /**
     * @var string
     */
    const NOT_APPLICABLE = '$not_applicable';

    /**
     * @var string
     */
    const EXPIRED = '$expired';
}
