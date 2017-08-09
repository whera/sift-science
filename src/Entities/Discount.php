<?php

namespace WSW\SiftScience\Entities;

use WSW\Money\Money;
use WSW\Money\Percentage;

/**
 * Class Discount
 *
 * @package WSW\SiftScience\Entities
 * @author Ronaldo Matos Rodrigues <ronaldo@whera.com.br>
 */
class Discount
{
    /**
     * @var Percentage
     */
    private $percentage;

    /**
     * @var Money
     */
    private $amount;

    /**
     * @var Money
     */
    private $minimumPurchaseAmount;

    /**
     * @return Percentage
     */
    public function getPercentage()
    {
        return $this->percentage;
    }

    /**
     * @param Percentage $percentage
     *
     * @return Discount
     */
    public function setPercentage(Percentage $percentage)
    {
        $this->percentage = $percentage;

        return $this;
    }

    /**
     * @return Money
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * @param Money $amount
     *
     * @return Discount
     */
    public function setAmount(Money $amount)
    {
        $this->amount = $amount;

        return $this;
    }

    /**
     * @return Money
     */
    public function getMinimumPurchaseAmount()
    {
        return $this->minimumPurchaseAmount;
    }

    /**
     * @param Money $minimumPurchaseAmount
     *
     * @return Discount
     */
    public function setMinimumPurchaseAmount(Money $minimumPurchaseAmount)
    {
        $this->minimumPurchaseAmount = $minimumPurchaseAmount;

        return $this;
    }
}
