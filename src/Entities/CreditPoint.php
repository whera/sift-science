<?php

namespace WSW\SiftScience\Entities;

/**
 * Class CreditPoint
 *
 * @package WSW\SiftScience\Entities
 * @author Ronaldo Matos Rodrigues <ronaldo@whera.com.br>
 */
class CreditPoint
{
    /**
     * @var int
     */
    private $amount;

    /**
     * @var string
     */
    private $creditPointType;

    /**
     * @return int
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * @param int $amount
     *
     * @return CreditPoint
     */
    public function setAmount($amount)
    {
        $this->amount = (int) $amount;

        return $this;
    }

    /**
     * @return string
     */
    public function getCreditPointType()
    {
        return $this->creditPointType;
    }

    /**
     * @param string $creditPointType
     *
     * @return CreditPoint
     */
    public function setCreditPointType($creditPointType)
    {
        $this->creditPointType = $creditPointType;

        return $this;
    }
}
