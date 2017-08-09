<?php

namespace WSW\SiftScience\Entities;

use InvalidArgumentException;
use WSW\SiftScience\Support\AllowedValues\PaymentGateway;
use WSW\SiftScience\Support\AllowedValues\PaymentType;
use WSW\SiftScience\Support\AllowedValues\VerificationStatus;
use WSW\SiftScience\Support\Traits\Entities\PayPalPaymentMethodTrait;

/**
 * Class PaymentMethod
 *
 * @package WSW\SiftScience\Entities
 * @author Ronaldo Matos Rodrigues <ronaldo@whera.com.br>
 */
class PaymentMethod
{
    use PayPalPaymentMethodTrait;

    /**
     * @var string
     */
    private $paymentType;

    /**
     * @var string
     */
    private $paymentGateway;

    /**
     * @var string
     */
    private $cardBin;

    /**
     * @var string
     */
    private $cardLast4;

    /**
     * @var string
     */
    private $cvvResultCode;

    /**
     * @var string
     */
    private $avsResultCode;

    /**
     * @var string
     */
    private $verificationStatus;

    /**
     * @var string
     */
    private $routingNumber;

    /**
     * @var string
     */
    private $declineReasonCode;

    /**
     * @var string
     */
    private $stripeCvcCheck;

    /**
     * @var string
     */
    private $stripeFunding;

    /**
     * @var string
     */
    private $stripeBrand;

    /**
     * @var string
     */
    private $stripeAddressLine1Check;

    /**
     * @var string
     */
    private $stripeAddressLine2Check;

    /**
     * @var string
     */
    private $stripeAddressZipCheck;

    /**
     * @return string
     */
    public function getPaymentType()
    {
        return $this->paymentType;
    }

    /**
     * @param string $paymentType
     * @throws \InvalidArgumentException
     *
     * @return PaymentMethod
     */
    public function setPaymentType($paymentType)
    {
        if (!PaymentType::isValid($paymentType)) {
            throw new InvalidArgumentException("You should inform a valid payment type");
        }

        $this->paymentType = $paymentType;

        return $this;
    }

    /**
     * @return string
     */
    public function getPaymentGateway()
    {
        return $this->paymentGateway;
    }

    /**
     * @param string $paymentGateway
     * @throws \InvalidArgumentException
     *
     * @return PaymentMethod
     */
    public function setPaymentGateway($paymentGateway)
    {
        if (!PaymentGateway::isValid($paymentGateway)) {
            throw new InvalidArgumentException("You should inform a valid payment gateway");
        }

        $this->paymentGateway = $paymentGateway;

        return $this;
    }

    /**
     * @return string
     */
    public function getCardBin()
    {
        return $this->cardBin;
    }

    /**
     * @param string $cardBin
     *
     * @return PaymentMethod
     */
    public function setCardBin($cardBin)
    {
        $this->cardBin = $cardBin;

        return $this;
    }

    /**
     * @return string
     */
    public function getCardLast4()
    {
        return $this->cardLast4;
    }

    /**
     * @param string $cardLast4
     *
     * @return PaymentMethod
     */
    public function setCardLast4($cardLast4)
    {
        $this->cardLast4 = $cardLast4;

        return $this;
    }

    /**
     * @return string
     */
    public function getCvvResultCode()
    {
        return $this->cvvResultCode;
    }

    /**
     * @param string $cvvResultCode
     *
     * @return PaymentMethod
     */
    public function setCvvResultCode($cvvResultCode)
    {
        $this->cvvResultCode = $cvvResultCode;

        return $this;
    }

    /**
     * @return string
     */
    public function getAvsResultCode()
    {
        return $this->avsResultCode;
    }

    /**
     * @param string $avsResultCode
     *
     * @return PaymentMethod
     */
    public function setAvsResultCode($avsResultCode)
    {
        $this->avsResultCode = $avsResultCode;

        return $this;
    }

    /**
     * @return string
     */
    public function getVerificationStatus()
    {
        return $this->verificationStatus;
    }

    /**
     * @param string $verificationStatus
     *
     * @return PaymentMethod
     */
    public function setVerificationStatus($verificationStatus)
    {
        if (!VerificationStatus::isValid($verificationStatus)) {
            throw new InvalidArgumentException("You should inform a valid verification status");
        }

        $this->verificationStatus = $verificationStatus;

        return $this;
    }

    /**
     * @return string
     */
    public function getRoutingNumber()
    {
        return $this->routingNumber;
    }

    /**
     * @param string $routingNumber
     *
     * @return PaymentMethod
     */
    public function setRoutingNumber($routingNumber)
    {
        $this->routingNumber = $routingNumber;

        return $this;
    }

    /**
     * @return string
     */
    public function getDeclineReasonCode()
    {
        return $this->declineReasonCode;
    }

    /**
     * @param string $declineReasonCode
     *
     * @return PaymentMethod
     */
    public function setDeclineReasonCode($declineReasonCode)
    {
        $this->declineReasonCode = $declineReasonCode;

        return $this;
    }

    /**
     * @return string
     */
    public function getStripeCvcCheck()
    {
        return $this->stripeCvcCheck;
    }

    /**
     * @param string $stripeCvcCheck
     *
     * @return PaymentMethod
     */
    public function setStripeCvcCheck($stripeCvcCheck)
    {
        $this->stripeCvcCheck = $stripeCvcCheck;

        return $this;
    }

    /**
     * @return string
     */
    public function getStripeFunding()
    {
        return $this->stripeFunding;
    }

    /**
     * @param string $stripeFunding
     *
     * @return PaymentMethod
     */
    public function setStripeFunding($stripeFunding)
    {
        $this->stripeFunding = $stripeFunding;

        return $this;
    }

    /**
     * @return string
     */
    public function getStripeBrand()
    {
        return $this->stripeBrand;
    }

    /**
     * @param string $stripeBrand
     *
     * @return PaymentMethod
     */
    public function setStripeBrand($stripeBrand)
    {
        $this->stripeBrand = $stripeBrand;

        return $this;
    }

    /**
     * @return string
     */
    public function getStripeAddressLine1Check()
    {
        return $this->stripeAddressLine1Check;
    }

    /**
     * @param string $stripeAddressLine1Check
     *
     * @return PaymentMethod
     */
    public function setStripeAddressLine1Check($stripeAddressLine1Check)
    {
        $this->stripeAddressLine1Check = $stripeAddressLine1Check;

        return $this;
    }

    /**
     * @return string
     */
    public function getStripeAddressLine2Check()
    {
        return $this->stripeAddressLine2Check;
    }

    /**
     * @param string $stripeAddressLine2Check
     *
     * @return PaymentMethod
     */
    public function setStripeAddressLine2Check($stripeAddressLine2Check)
    {
        $this->stripeAddressLine2Check = $stripeAddressLine2Check;

        return $this;
    }

    /**
     * @return string
     */
    public function getStripeAddressZipCheck()
    {
        return $this->stripeAddressZipCheck;
    }

    /**
     * @param string $stripeAddressZipCheck
     *
     * @return PaymentMethod
     */
    public function setStripeAddressZipCheck($stripeAddressZipCheck)
    {
        $this->stripeAddressZipCheck = $stripeAddressZipCheck;

        return $this;
    }
}
