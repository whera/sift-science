<?php

namespace WSW\SiftScience\Events;

use InvalidArgumentException;
use WSW\Email\Email;
use WSW\SiftScience\Collections\PaymentMethods;
use WSW\SiftScience\Collections\Promotions;
use WSW\SiftScience\Entities\Address;
use WSW\SiftScience\Entities\PaymentMethod;
use WSW\SiftScience\Entities\Promotion;
use WSW\SiftScience\Support\AllowedValues\SocialSignOnType;
use WSW\SiftScience\Support\Formatter;

/**
 * Class AbstractAccount
 *
 * @package WSW\SiftScience\Events
 * @author Ronaldo Matos Rodrigues <ronaldo@whera.com.br>
 */
abstract class AbstractAccount extends BaseEvent
{
    /**
     * @var Email
     */
    protected $userEmail;

    /**
     * @var string
     */
    protected $name;

    /**
     * @var string
     */
    protected $phone;

    /**
     * @var string
     */
    protected $referrerUserId;

    /**
     * @var PaymentMethods
     */
    protected $paymentMethods;

    /**
     * @var Address
     */
    protected $billingAddress;

    /**
     * @var Address
     */
    protected $shippingAddress;

    /**
     * @var Promotions
     */
    protected $promotions;

    /**
     * @var string
     */
    protected $socialSignOnType;

    /**
     * @var bool
     */
    protected $changedPassword = false;

    /**
     * @param $type
     */
    public function __construct($type)
    {
        $this->type = $type;
        $this->paymentMethods = new PaymentMethods();
        $this->promotions = new Promotions();
    }

    /**
     * @return Email
     */
    public function getUserEmail()
    {
        return $this->userEmail;
    }

    /**
     * @param Email $userEmail
     *
     * @return $this
     */
    public function setUserEmail(Email $userEmail)
    {
        $this->userEmail = $userEmail;

        return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return string
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * @param string $phone
     *
     * @return $this
     */
    public function setPhone($phone)
    {
        $this->phone = Formatter::phone($phone);

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
     * @return $this
     */
    public function setReferrerUserId($referrerUserId)
    {
        $this->referrerUserId = $referrerUserId;

        return $this;
    }

    /**
     * @return PaymentMethods
     */
    public function getPaymentMethods()
    {
        return $this->paymentMethods;
    }

    /**
     * @param PaymentMethod $paymentMethod
     *
     * @return $this
     */
    public function addPaymentMethod(PaymentMethod $paymentMethod)
    {
        $this->paymentMethods->add($paymentMethod);

        return $this;
    }

    /**
     * @return Address
     */
    public function getBillingAddress()
    {
        return $this->billingAddress;
    }

    /**
     * @param Address $billingAddress
     *
     * @return $this
     */
    public function setBillingAddress(Address $billingAddress)
    {
        $this->billingAddress = $billingAddress;

        return $this;
    }

    /**
     * @return Address
     */
    public function getShippingAddress()
    {
        return $this->shippingAddress;
    }

    /**
     * @param Address $shippingAddress
     *
     * @return $this
     */
    public function setShippingAddress(Address $shippingAddress)
    {
        $this->shippingAddress = $shippingAddress;

        return $this;
    }

    /**
     * @return Promotions
     */
    public function getPromotions()
    {
        return $this->promotions;
    }

    /**
     * @param Promotion $promotion
     *
     * @return $this
     */
    public function addPromotion(Promotion $promotion)
    {
        $this->promotions->add($promotion);

        return $this;
    }

    /**
     * @return string
     */
    public function getSocialSignOnType()
    {
        return $this->socialSignOnType;
    }

    /**
     * @param string $socialSignOnType
     *
     * @return $this
     */
    public function setSocialSignOnType($socialSignOnType)
    {
        if (!SocialSignOnType::isValid($socialSignOnType)) {
            throw new InvalidArgumentException('You should inform a valid social sign on type.');
        }

        $this->socialSignOnType = $socialSignOnType;

        return $this;
    }

    /**
     * @return bool
     */
    public function isChangedPassword()
    {
        return $this->changedPassword;
    }

    /**
     * @param bool $changedPassword
     *
     * @return $this
     */
    public function setChangedPassword($changedPassword)
    {
        $this->changedPassword = $changedPassword;

        return $this;
    }
}
