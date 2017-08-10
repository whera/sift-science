<?php

namespace WSW\SiftScience\Events;

use InvalidArgumentException;
use WSW\Email\Email;
use WSW\Money\Money;
use WSW\SiftScience\Collections\Items;
use WSW\SiftScience\Collections\PaymentMethods;
use WSW\SiftScience\Collections\Promotions;
use WSW\SiftScience\Entities\Address;
use WSW\SiftScience\Entities\Item;
use WSW\SiftScience\Entities\PaymentMethod;
use WSW\SiftScience\Entities\Promotion;
use WSW\SiftScience\Support\AllowedValues\ShippingMethod;

/**
 * Class CreateOrder
 *
 * @package WSW\SiftScience\Events
 * @author Ronaldo Matos Rodrigues <ronaldo@whera.com.br>
 */
class CreateOrder extends BaseEvent
{
    /**
     * @var string
     */
    private $session;

    /**
     * @var string
     */
    private $order;

    /**
     * @var Email
     */
    private $userEmail;

    /**
     * @var Money
     */
    private $amount;

    /**
     * @var Address
     */
    private $billingAddress;

    /**
     * @var PaymentMethods
     */
    private $paymentMethods;

    /**
     * @var Address
     */
    private $shippingAddress;

    /**
     * @var bool
     */
    private $expeditedShipping = false;

    /**
     * @var string
     */
    private $shippingMethod;

    /**
     * @var Items
     */
    private $items;

    /**
     * @var string
     */
    private $sellerUserId;

    /**
     * @var Promotions
     */
    private $promotions;

    /**
     * CreateOrder constructor.
     */
    public function __construct()
    {
        $this->type = '$create_order';
        $this->items = new Items();
        $this->paymentMethods = new PaymentMethods();
        $this->promotions = new Promotions();
    }

    /**
     * @return string
     */
    public function getSession()
    {
        return $this->session;
    }

    /**
     * @param string $session
     *
     * @return $this
     */
    public function setSession($session)
    {
        $this->session = $session;

        return $this;
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
     * @return Money
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * @param Money $amount
     *
     * @return $this
     */
    public function setAmount(Money $amount)
    {
        $this->amount = $amount;

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
     * @return bool
     */
    public function isExpeditedShipping()
    {
        return (bool) $this->expeditedShipping;
    }

    /**
     * @param bool $expeditedShipping
     *
     * @return $this
     */
    public function setExpeditedShipping($expeditedShipping)
    {
        $this->expeditedShipping = (bool) $expeditedShipping;

        return $this;
    }

    /**
     * @return string
     */
    public function getShippingMethod()
    {
        return $this->shippingMethod;
    }

    /**
     * @param string $shippingMethod
     *
     * @return $this
     */
    public function setShippingMethod($shippingMethod)
    {
        if (!ShippingMethod::isValid($shippingMethod)) {
            throw new InvalidArgumentException('You should inform a valid shipping method.');
        }

        $this->shippingMethod = $shippingMethod;

        return $this;
    }

    /**
     * @return Items
     */
    public function getItems()
    {
        return $this->items;
    }

    /**
     * @param Item $item
     *
     * @return $this
     */
    public function addItem(Item $item)
    {
        $this->items->add($item);

        return $this;
    }

    /**
     * @return string
     */
    public function getSellerUserId()
    {
        return $this->sellerUserId;
    }

    /**
     * @param string $sellerUserId
     *
     * @return $this
     */
    public function setSellerUserId($sellerUserId)
    {
        $this->sellerUserId = $sellerUserId;

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
}
