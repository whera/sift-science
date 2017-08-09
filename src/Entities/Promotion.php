<?php

namespace WSW\SiftScience\Entities;

use InvalidArgumentException;
use WSW\SiftScience\Support\AllowedValues\FailureReason;
use WSW\SiftScience\Support\AllowedValues\PromotionStatus;

/**
 * Class Promotion
 *
 * @package WSW\SiftScience\Entities
 * @author Ronaldo Matos Rodrigues <ronaldo@whera.com.br>
 */
class Promotion
{
    /**
     * @var string
     */
    private $id;

    /**
     * @var string
     */
    private $status;

    /**
     * @var string
     */
    private $failureReason;

    /**
     * @var string
     */
    private $description;

    /**
     * @var string
     */
    private $referrerUserId;

    /**
     * @var Discount
     */
    private $discount;

    /**
     * @var CreditPoint
     */
    private $creditPoint;

    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param string $id
     *
     * @return Promotion
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param string $status
     *
     * @return Promotion
     */
    public function setStatus($status)
    {
        if (!PromotionStatus::isValid($status)) {
            throw new InvalidArgumentException('You should inform a valid status.');
        }

        $this->status = $status;

        return $this;
    }

    /**
     * @return string
     */
    public function getFailureReason()
    {
        return $this->failureReason;
    }

    /**
     * @param string $failureReason
     *
     * @return Promotion
     */
    public function setFailureReason($failureReason)
    {
        if (!FailureReason::isValid($failureReason)) {
            throw new InvalidArgumentException('You should inform a valid failure reason.');
        }

        $this->failureReason = $failureReason;

        return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $description
     *
     * @return Promotion
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * @return string
     */
    public function getReferrerUserId()
    {
        return $this->referrerUserId;
    }

    /**
     * @param string $referrerUserId
     *
     * @return Promotion
     */
    public function setReferrerUserId($referrerUserId)
    {
        $this->referrerUserId = $referrerUserId;

        return $this;
    }

    /**
     * @return Discount
     */
    public function getDiscount()
    {
        return $this->discount;
    }

    /**
     * @param Discount $discount
     *
     * @return Promotion
     */
    public function setDiscount(Discount $discount)
    {
        $this->discount = $discount;

        return $this;
    }

    /**
     * @return CreditPoint
     */
    public function getCreditPoint()
    {
        return $this->creditPoint;
    }

    /**
     * @param CreditPoint $creditPoint
     *
     * @return Promotion
     */
    public function setCreditPoint(CreditPoint $creditPoint)
    {
        $this->creditPoint = $creditPoint;

        return $this;
    }
}
