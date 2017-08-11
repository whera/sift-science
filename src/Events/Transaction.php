<?php

namespace WSW\SiftScience\Events;

use InvalidArgumentException;
use WSW\Email\Email;
use WSW\Money\Money;
use WSW\SiftScience\Entities\Address;
use WSW\SiftScience\Entities\PaymentMethod;
use WSW\SiftScience\Support\AllowedValues\TransactionStatus;
use WSW\SiftScience\Support\AllowedValues\TransactionType;

/**
 * Class Transaction
 *
 * @package WSW\SiftScience\Events
 * @author Ronaldo Matos Rodrigues <ronaldo@whera.com.br>
 */
class Transaction extends BaseEvent
{
    /**
     * @var string
     */
    private $id;

    /**
     * @var Email
     */
    private $userEmail;

    /**
     * @var string
     */
    private $transactionType;

    /**
     * @var string
     */
    private $transactionStatus;

    /**
     * @var Money
     */
    private $amount;

    /**
     * @var string
     */
    private $orderId;

    /**
     * @var Address
     */
    private $billingAddress;

    /**
     * @var Address
     */
    private $shippingAddress;

    /**
     * @var PaymentMethod
     */
    private $paymentMethod;

    /**
     * @var string
     */
    private $sessionId;

    /**
     * @var string
     */
    private $sellerUserId;

    /**
     * @var string
     */
    private $transferRecipientUserId;

    /**
     * Transaction constructor.
     */
    public function __construct()
    {
        $this->type = '$transaction';
    }

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
     * @return $this
     */
    public function setId($id)
    {
        $this->id = $id;

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
     * @return string
     */
    public function getTransactionType()
    {
        return $this->transactionType;
    }

    /**
     * @param string $transactionType
     *
     * @return $this
     */
    public function setTransactionType($transactionType)
    {
        if (!TransactionType::isValid($transactionType)) {
            throw new InvalidArgumentException('You should inform a valid transaction type.');
        }

        $this->transactionType = $transactionType;

        return $this;
    }

    /**
     * @return string
     */
    public function getTransactionStatus()
    {
        return $this->transactionStatus;
    }

    /**
     * @param string $transactionStatus
     *
     * @return $this
     */
    public function setTransactionStatus($transactionStatus)
    {
        if (!TransactionStatus::isValid($transactionStatus)) {
            throw new InvalidArgumentException('You should inform a valid transaction status.');
        }

        $this->transactionStatus = $transactionStatus;

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
     * @return string
     */
    public function getOrderId()
    {
        return $this->orderId;
    }

    /**
     * @param string $orderId
     *
     * @return $this
     */
    public function setOrderId($orderId)
    {
        $this->orderId = $orderId;

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
     * @return PaymentMethod
     */
    public function getPaymentMethod()
    {
        return $this->paymentMethod;
    }

    /**
     * @param PaymentMethod $paymentMethod
     *
     * @return $this
     */
    public function setPaymentMethod(PaymentMethod $paymentMethod)
    {
        $this->paymentMethod = $paymentMethod;

        return $this;
    }

    /**
     * @return string
     */
    public function getSessionId()
    {
        return $this->sessionId;
    }

    /**
     * @param string $sessionId
     *
     * @return $this
     */
    public function setSessionId($sessionId)
    {
        $this->sessionId = $sessionId;

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
     * @return string
     */
    public function getTransferRecipientUserId()
    {
        return $this->transferRecipientUserId;
    }

    /**
     * @param string $transferRecipientUserId
     *
     * @return $this
     */
    public function setTransferRecipientUserId($transferRecipientUserId)
    {
        $this->transferRecipientUserId = $transferRecipientUserId;

        return $this;
    }
}
