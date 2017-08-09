<?php

namespace WSW\SiftScience\Support\Traits\Entities;

use InvalidArgumentException;

/**
 * Trait PayPalPaymentMethodTrait
 *
 * @package WSW\SiftScience\Support\Traits\Entities
 * @author Ronaldo Matos Rodrigues <ronaldo@whera.com.br>
 */
trait PayPalPaymentMethodTrait
{
    /**
     * @var string
     */
    private $paypalPayerId;

    /**
     * @var string
     */
    private $paypalPayerEmail;

    /**
     * @var string
     */
    private $paypalPayerStatus;

    /**
     * @var string
     */
    private $paypalAddressStatus;

    /**
     * @var string
     */
    private $paypalProtectionEligibility;

    /**
     * @var string
     */
    private $paypalPaymentStatus;

    /**
     * @return string
     */
    public function getPaypalPayerId()
    {
        return $this->paypalPayerId;
    }

    /**
     * @param string $paypalPayerId
     *
     * @return PayPalPaymentMethodTrait
     */
    public function setPaypalPayerId($paypalPayerId)
    {
        $this->paypalPayerId = $paypalPayerId;

        return $this;
    }

    /**
     * @return string
     */
    public function getPaypalPayerEmail()
    {
        return $this->paypalPayerEmail;
    }

    /**
     * @param string $paypalPayerEmail
     *
     * @return PayPalPaymentMethodTrait
     */
    public function setPaypalPayerEmail($paypalPayerEmail)
    {
        if (!filter_var($paypalPayerEmail, FILTER_VALIDATE_EMAIL)) {
            throw new InvalidArgumentException('You should inform a valid email');
        }

        $this->paypalPayerEmail = $paypalPayerEmail;

        return $this;
    }

    /**
     * @return string
     */
    public function getPaypalPayerStatus()
    {
        return $this->paypalPayerStatus;
    }

    /**
     * @param string $paypalPayerStatus
     *
     * @return PayPalPaymentMethodTrait
     */
    public function setPaypalPayerStatus($paypalPayerStatus)
    {
        $this->paypalPayerStatus = $paypalPayerStatus;

        return $this;
    }

    /**
     * @return string
     */
    public function getPaypalAddressStatus()
    {
        return $this->paypalAddressStatus;
    }

    /**
     * @param string $paypalAddressStatus
     *
     * @return PayPalPaymentMethodTrait
     */
    public function setPaypalAddressStatus($paypalAddressStatus)
    {
        $this->paypalAddressStatus = $paypalAddressStatus;

        return $this;
    }

    /**
     * @return string
     */
    public function getPaypalProtectionEligibility()
    {
        return $this->paypalProtectionEligibility;
    }

    /**
     * @param string $paypalProtectionEligibility
     *
     * @return PayPalPaymentMethodTrait
     */
    public function setPaypalProtectionEligibility($paypalProtectionEligibility)
    {
        $this->paypalProtectionEligibility = $paypalProtectionEligibility;

        return $this;
    }

    /**
     * @return string
     */
    public function getPaypalPaymentStatus()
    {
        return $this->paypalPaymentStatus;
    }

    /**
     * @param string $paypalPaymentStatus
     *
     * @return PayPalPaymentMethodTrait
     */
    public function setPaypalPaymentStatus($paypalPaymentStatus)
    {
        $this->paypalPaymentStatus = $paypalPaymentStatus;

        return $this;
    }
}
