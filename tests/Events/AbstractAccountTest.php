<?php

namespace WSW\SiftScience\Events;

use WSW\Email\Email;
use WSW\SiftScience\Collections\PaymentMethods;
use WSW\SiftScience\Collections\Promotions;
use WSW\SiftScience\Entities\Address;
use WSW\SiftScience\Support\AllowedValues\SocialSignOnType;
use WSW\SiftScience\TestCase;

/**
 * Class AbstractAccountTest
 *
 * @package WSW\SiftScience\Events
 * @author Ronaldo Matos Rodrigues <ronaldo@whera.com.br>
 */
class AbstractAccountTest extends TestCase
{
    public function testMethodsSets()
    {
        $event = new CreateAccount();
        $event->setUserEmail(new Email('ronaldo@whera.com.br'))
            ->setName('Ronaldo Matos Rodrigues')
            ->setPhone('+55 48 9 9234-9687')
            ->setReferrerUserId(19756843)
            ->addPaymentMethod($this->getPaymentMethod())
            ->setBillingAddress($this->getAddress())
            ->setShippingAddress($this->getAddress())
            ->addPromotion($this->getPromotion())
            ->setSocialSignOnType(SocialSignOnType::GOOGLE)
            ->setChangedPassword(true);

        $this->assertAttributeEquals('Ronaldo Matos Rodrigues', 'name', $event);
        $this->assertAttributeEquals('+55 48 9 9234-9687', 'phone', $event);
        $this->assertAttributeEquals('19756843', 'referrerUserId', $event);
        $this->assertAttributeEquals('$google', 'socialSignOnType', $event);
        $this->assertAttributeEquals(true, 'changedPassword', $event);
        $this->assertAttributeInstanceOf(PaymentMethods::class, 'paymentMethods', $event);
        $this->assertAttributeInstanceOf(Email::class, 'userEmail', $event);
        $this->assertAttributeInstanceOf(Address::class, 'billingAddress', $event);
        $this->assertAttributeInstanceOf(Address::class, 'shippingAddress', $event);
        $this->assertAttributeInstanceOf(Promotions::class, 'promotions', $event);

        return $event;
    }

    /**
     * @depends testMethodsSets
     * @param \WSW\SiftScience\Events\CreateAccount $event
     */
    public function testMethodGets(CreateAccount $event)
    {
        $this->assertEquals('Ronaldo Matos Rodrigues', $event->getName());
        $this->assertEquals('+55 48 9 9234-9687', $event->getPhone());
        $this->assertEquals('19756843', $event->getReferrerUserId());
        $this->assertEquals('$google', $event->getSocialSignOnType());
        $this->assertInstanceOf(PaymentMethods::class, $event->getPaymentMethods());
        $this->assertInstanceOf(Address::class, $event->getBillingAddress());
        $this->assertInstanceOf(Address::class, $event->getShippingAddress());
        $this->assertInstanceOf(Promotions::class, $event->getPromotions());
        $this->assertInstanceOf(Email::class, $event->getUserEmail());
        $this->assertTrue($event->isChangedPassword());
    }

    /**
     * @expectedException \InvalidArgumentException
     * @expectedExceptionMessage You should inform a valid social sign on type.
     */
    public function testExceptionSocialSignOnType()
    {
        $event = new CreateAccount();
        $event->setSocialSignOnType('xpto');
    }
}
