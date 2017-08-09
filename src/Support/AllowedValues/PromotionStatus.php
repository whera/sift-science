<?php

namespace WSW\SiftScience\Support\AllowedValues;

/**
 * Class PromotionStatus
 *
 * @package WSW\SiftScience\Support\AllowedValues
 * @author Ronaldo Matos Rodrigues <ronaldo@whera.com.br>
 */
abstract class PromotionStatus extends BaseAllowedValues
{
    /**
     * @var string
     */
    const SUCCESS = '$success';

    /**
     * @var string
     */
    const FAILURE = '$failure';
}
