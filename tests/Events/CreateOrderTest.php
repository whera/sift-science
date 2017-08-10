<?php

namespace WSW\SiftScience\Events;

use WSW\Email\Email;
use WSW\Money\Currency;
use WSW\Money\Money;
use WSW\SiftScience\Collections\Items;
use WSW\SiftScience\Collections\PaymentMethods;
use WSW\SiftScience\Collections\Promotions;
use WSW\SiftScience\Entities\Address;
use WSW\SiftScience\Entities\Item;
use WSW\SiftScience\Entities\PaymentMethod;
use WSW\SiftScience\Entities\Promotion;
use WSW\SiftScience\Support\AllowedValues\PaymentGateway;
use WSW\SiftScience\Support\AllowedValues\PaymentType;
use WSW\SiftScience\Support\AllowedValues\PromotionStatus;
use WSW\SiftScience\Support\AllowedValues\ShippingMethod;
use WSW\SiftScience\TestCase;

/**
 * Class CreateOrderTest
 *
 * @package WSW\SiftScience\Events
 * @author Ronaldo Matos Rodrigues <ronaldo@whera.com.br>
 */
class CreateOrderTest extends TestCase
{
    /**
     * @return CreateOrder
     */
    public function instanceOrder()
    {
        $address = (new Address())
            ->setName('Bill Jones')
            ->setPhone('1-415-555-6041')
            ->setAddress1('2100 Main Street')
            ->setAddress2('Apt 3B')
            ->setCity('New London')
            ->setRegion('New Hampshire')
            ->setCountry('US')
            ->setZipcode('03257');

        $item = (new Item())
            ->setId(12344321)
            ->setTitle('Microwavable Kettle Corn: Original Flavor 111')
            ->setPrice(new Money('5.99', new Currency('USD')))
            ->setUpc('097564307560')
            ->setSku('03586005')
            ->setBrand('Peters Kettle Corn')
            ->setManufacturer('Peters Kettle Corn')
            ->setCategory('Food and Grocery')
            ->setTags(["Popcorn", "Snacks", "On Sale"])
            ->setQuantity(4);

        $item2 = (new Item())
            ->setId(12344321)
            ->setTitle('Original Flavor 22')
            ->setPrice(new Money('10.999', new Currency('USD')))
            ->setUpc('097564307560')
            ->setSku('03586005')
            ->setBrand('Peters Kettle Corn')
            ->setManufacturer('Peters Kettle Corn')
            ->setCategory('Food and Grocery')
            ->setTags(["Popcorn", "Snacks", "On Sale"])
            ->setQuantity(5);

        $payment = (new PaymentMethod())
            ->setPaymentType(PaymentType::CREDIT_CARD)
            ->setPaymentGateway(PaymentGateway::CIELO)
            ->setCardBin('542486')
            ->setCardLast4('4444');

        $promotion = (new Promotion())
            ->setId('FirstTimeBuyer')
            ->setStatus(PromotionStatus::SUCCESS)
            ->setDescription('$5 off');

        $event = (new CreateOrder())
            ->setSession('gigtleqddo84l8cm15qe4il')
            ->setOrder('ORDER-28168441')
            ->setUserEmail(new Email('ronaldo@whera.com.br'))
            ->setAmount(new Money(115.94, new Currency('USD')))
            ->setBillingAddress($address)
            ->addPaymentMethod($payment)
            ->setShippingAddress($address)
            ->setExpeditedShipping(false)
            ->setShippingMethod(ShippingMethod::PHYSICAL)
            ->addItem($item)
            ->setSellerUserId('slinkys_emporium')
            ->addPromotion($promotion);

        return $event;
    }

    public function testGetMethods()
    {
        $event = $this->instanceOrder();

        $this->assertEquals('gigtleqddo84l8cm15qe4il', $event->getSession());
        $this->assertEquals('ORDER-28168441', $event->getOrder());
        $this->assertInstanceOf(Email::class, $event->getUserEmail());
        $this->assertInstanceOf(Money::class, $event->getAmount());
        $this->assertInstanceOf(Address::class, $event->getBillingAddress());
        $this->assertInstanceOf(Address::class, $event->getShippingAddress());
        $this->assertFalse($event->isExpeditedShipping());
        $this->assertEquals(ShippingMethod::PHYSICAL, $event->getShippingMethod());
        $this->assertInstanceOf(Items::class, $event->getItems());
        $this->assertInstanceOf(PaymentMethods::class, $event->getPaymentMethods());
        $this->assertEquals('slinkys_emporium', $event->getSellerUserId());
        $this->assertInstanceOf(Promotions::class, $event->getPromotions());
    }

    /**
     * @expectedException \InvalidArgumentException
     * @expectedExceptionMessage You should inform a valid shipping method.
     */
    public function testExceptionMethodSetShippingMethod()
    {
        $event = new CreateOrder();
        $event->setShippingMethod('xpto');
    }
}
