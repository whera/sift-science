<?php

namespace WSW\SiftScience\Events;

use InvalidArgumentException;
use WSW\SiftScience\Support\AllowedValues\ChargebackReason;
use WSW\SiftScience\Support\AllowedValues\ChargebackState;

/**
 * Class Chargeback
 *
 * @package WSW\SiftScience\Events
 * @author Ronaldo Matos Rodrigues <ronaldo@whera.com.br>
 */
class Chargeback extends BaseEvent
{
    /**
     * @var string
     */
    private $order;

    /**
     * @var string
     */
    private $transaction;

    /**
     * @var string
     */
    private $chargebackState;

    /**
     * @var string
     */
    private $chargebackReason;

    /**
     * Chargeback constructor.
     */
    public function __construct()
    {
        $this->type = '$chargeback';
        parent::__construct();
    }

    /**
     * @return string
     */
    public function getOrder()
    {
        return $this->order;
    }

    /**
     * @param string $order
     *
     * @return $this
     */
    public function setOrder($order)
    {
        $this->order = $order;

        return $this;
    }

    /**
     * @return string
     */
    public function getTransaction()
    {
        return $this->transaction;
    }

    /**
     * @param string $transaction
     *
     * @return $this
     */
    public function setTransaction($transaction)
    {
        $this->transaction = $transaction;

        return $this;
    }

    /**
     * @return string
     */
    public function getChargebackState()
    {
        return $this->chargebackState;
    }

    /**
     * @param string $chargebackState
     *
     * @return $this
     */
    public function setChargebackState($chargebackState)
    {
        if (!ChargebackState::isValid($chargebackState)) {
            throw new InvalidArgumentException('You should inform a valid chargeback state.');
        }

        $this->chargebackState = $chargebackState;

        return $this;
    }

    /**
     * @return string
     */
    public function getChargebackReason()
    {
        return $this->chargebackReason;
    }

    /**
     * @param string $chargebackReason
     *
     * @return $this
     */
    public function setChargebackReason($chargebackReason)
    {
        if (!ChargebackReason::isValid($chargebackReason)) {
            throw new InvalidArgumentException('You should inform a valid chargeback reason.');
        }

        $this->chargebackReason = $chargebackReason;

        return $this;
    }
}
