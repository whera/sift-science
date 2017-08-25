<?php

namespace WSW\SiftScience\Support;

/**
 * Class Formatter
 *
 * @package WSW\SiftScience\Support
 * @author Ronaldo Matos Rodrigues <ronaldo@whera.com.br>
 */
abstract class Formatter
{
    /**
     * @param string $phone
     *
     * @return string
     */
    public static function phone($phone = null)
    {
        return preg_replace("/[^+0-9]/", "", $phone);
    }
}
