<?php

namespace WSW\SiftScience\Support\AllowedValues;

/**
 * Class ShippingMethod
 *
 * @package WSW\SiftScience\Support\AllowedValues
 * @author Ronaldo Matos Rodrigues <ronaldo@whera.com.br>
 */
abstract class ShippingMethod extends BaseAllowedValues
{
    /**
     * @var string
     */
    const ELECTRONIC = '$electronic';

    /**
     * @var string
     */
    const PHYSICAL = '$physical';
}
