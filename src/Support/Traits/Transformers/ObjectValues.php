<?php

namespace WSW\SiftScience\Support\Traits\Transformers;

use WSW\Email\Email;
use WSW\Money\Currency;
use WSW\Money\Money;

/**
 * Trait ObjectValues
 *
 * @package WSW\SiftScience\Support\Traits\Transformers
 * @author Ronaldo Matos Rodrigues <ronaldo@whera.com.br>
 */
trait ObjectValues
{
    /**
     * @param Email $email
     *
     * @return null|string
     */
    protected function email($email = null)
    {
        return (!$email instanceof Email) ? null : $email->getEmail();
    }

    /**
     * @param Money $amount
     *
     * @return int|null
     */
    protected function amount($amount)
    {
        return (!$amount instanceof Money) ? null : $amount->getMicros();
    }

    /**
     * @param Currency|Money $currency
     *
     * @return null|string
     */
    protected function currency($currency)
    {
        if ($currency instanceof Money) {
            return $currency->getCurrency()->getCode();
        }

        return ($currency instanceof Currency) ? $currency->getCode() : null;
    }
}