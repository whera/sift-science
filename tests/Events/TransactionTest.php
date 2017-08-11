<?php

namespace WSW\SiftScience\Events;

use WSW\Email\Email;
use WSW\Money\Currency;
use WSW\Money\Money;
use WSW\SiftScience\Entities\Address;
use WSW\SiftScience\Entities\PaymentMethod;
use WSW\SiftScience\Support\AllowedValues\TransactionStatus;
use WSW\SiftScience\Support\AllowedValues\TransactionType;
use WSW\SiftScience\TestCase;

/**
 * Class TransactionTest
 *
 * @package WSW\SiftScience\Events
 * @author Ronaldo Matos Rodrigues <ronaldo@whera.com.br>
 */
class TransactionTest extends TestCase
{
    public function testMethodsSet()
    {
        $event = new Transaction();
        $event->setId(123654)
            ->setUserEmail(new Email('ronaldo@whera.com.br'))
            ->setTransactionType(TransactionType::CAPTURE)
            ->setTransactionStatus(TransactionStatus::SUCCESS)
            ->setAmount(new Money('150.00', new Currency('USD')))
            ->setOrderId('234234')
            ->setBillingAddress($this->getAddress())
            ->setShippingAddress($this->getAddress())
            ->setPaymentMethod($this->getPaymentMethod())
            ->setSellerUserId(987)
            ->setTransferRecipientUserId(999);


        $this->assertAttributeInstanceOf(Email::class, 'userEmail', $event);
        $this->assertAttributeInstanceOf(Address::class, 'billingAddress', $event);
        $this->assertAttributeInstanceOf(Address::class, 'shippingAddress', $event);
        $this->assertAttributeInstanceOf(PaymentMethod::class, 'paymentMethod', $event);
        $this->assertAttributeInstanceOf(Money::class, 'amount', $event);

        $this->assertAttributeEquals('123654', 'id', $event);
        $this->assertAttributeEquals('$capture', 'transactionType', $event);
        $this->assertAttributeEquals('$success', 'transactionStatus', $event);
        $this->assertAttributeEquals('234234', 'orderId', $event);
        $this->assertAttributeEquals('987', 'sellerUserId', $event);
        $this->assertAttributeEquals('999', 'transferRecipientUserId', $event);

        return $event;
    }

    /**
     * @depends testMethodsSet
     * @param \WSW\SiftScience\Events\Transaction $event
     */
    public function testMethodsGet(Transaction $event)
    {
        $this->assertInstanceOf(Email::class, $event->getUserEmail());
        $this->assertInstanceOf(Address::class, $event->getBillingAddress());
        $this->assertInstanceOf(Address::class, $event->getShippingAddress());
        $this->assertInstanceOf(PaymentMethod::class, $event->getPaymentMethod());
        $this->assertInstanceOf(Money::class, $event->getAmount());

        $this->assertEquals('123654', $event->getId());
        $this->assertEquals('$capture', $event->getTransactionType());
        $this->assertEquals('$success', $event->getTransactionStatus());
        $this->assertEquals('234234', $event->getOrderId());
        $this->assertEquals('987', $event->getSellerUserId());
        $this->assertEquals('999', $event->getTransferRecipientUserId());
    }

    /**
     * @expectedException \InvalidArgumentException
     * @expectedExceptionMessage You should inform a valid transaction type.
     */
    public function testExceptionType()
    {
        $event = new Transaction();
        $event->setTransactionType('xpto');
    }

    /**
     * @expectedException \InvalidArgumentException
     * @expectedExceptionMessage You should inform a valid transaction status.
     */
    public function testExceptionStatus()
    {
        $event = new Transaction();
        $event->setTransactionStatus('xpto');
    }
}
