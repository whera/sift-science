<?php

namespace WSW\SiftScience\Support\Traits\Transformers;

use DateTime;
use WSW\Email\Email;
use WSW\Money\Currency;
use WSW\Money\Money;
use WSW\Money\Percentage;

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
    public function email($email = null)
    {
        return (!$email instanceof Email) ? null : $email->getEmail();
    }

    /**
     * @param Money $amount
     *
     * @return int|null
     */
    public function amount($amount)
    {
        return (!$amount instanceof Money) ? null : $amount->getMicros();
    }

    /**
     * @param Currency|Money $currency
     *
     * @return null|string
     */
    public function currency($currency)
    {
        if ($currency instanceof Money) {
            return $currency->getCurrency()->getCode();
        }

        return ($currency instanceof Currency) ? $currency->getCode() : null;
    }

    /**
     * @param \DateTime|null $dateTime
     *
     * @return int|null
     */
    public function dateTime($dateTime)
    {
        return (!$dateTime instanceof DateTime) ? null : $dateTime->getTimestamp();
    }

    /**
     * @param Percentage|null $percentage
     *
     * @return float|null
     */
    public function percent($percentage)
    {
        return (!$percentage instanceof Percentage) ? null : $percentage->getPercent();
    }
}
