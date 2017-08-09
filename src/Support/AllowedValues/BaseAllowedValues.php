<?php

namespace WSW\SiftScience\Support\AllowedValues;

use ReflectionClass;

/**
 * Class BaseAllowedValues
 *
 * @package WSW\SiftScience\Support\AllowedValues
 * @author Ronaldo Matos Rodrigues <ronaldo@whera.com.br>
 */
abstract class BaseAllowedValues
{
    /**
     * @return array
     */
    public static function getConstants()
    {
        return static::constants();
    }

    /**
     * @return array
     */
    protected static function constants()
    {
        return (new ReflectionClass(get_called_class()))->getConstants();
    }

    /**
     * @param string $value
     *
     * @return bool
     */
    public static function isValid($value)
    {
        return in_array($value, static::constants());
    }
}
