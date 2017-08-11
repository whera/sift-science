<?php

namespace WSW\SiftScience\Events;

use WSW\SiftScience\Support\AllowedValues\ChargebackReason;
use WSW\SiftScience\Support\AllowedValues\ChargebackState;
use WSW\SiftScience\TestCase;

/**
 * Class ChargebackTest
 *
 * @package WSW\SiftScience\Events
 * @author Ronaldo Matos Rodrigues <ronaldo@whera.com.br>
 */
class ChargebackTest extends TestCase
{
    public function testMethodsSet()
    {
        $event = new Chargeback();
        $event->setOrder('943587')
            ->setChargebackReason(ChargebackReason::OTHER)
            ->setTransaction(9335412)
            ->setChargebackState(ChargebackState::ACCEPTED);

        $this->assertAttributeEquals('943587', 'order', $event);
        $this->assertAttributeEquals('9335412', 'transaction', $event);
        $this->assertAttributeEquals('$other', 'chargebackReason', $event);
        $this->assertAttributeEquals('$accepted', 'chargebackState', $event);

        return $event;
    }


    /**
     * @depends testMethodsSet
     * @param \WSW\SiftScience\Events\Chargeback $event
     */
    public function testMethodGets(Chargeback $event)
    {
        $this->assertEquals('943587', $event->getOrder());
        $this->assertEquals('9335412', $event->getTransaction());
        $this->assertEquals('$other', $event->getChargebackReason());
        $this->assertEquals('$accepted', $event->getChargebackState());
    }

    /**
     * @expectedException \InvalidArgumentException
     * @expectedExceptionMessage You should inform a valid chargeback state.
     */
    public function testExceptionState()
    {
        $event = new Chargeback();
        $event->setChargebackState('xpto');
    }

    /**
     * @expectedException \InvalidArgumentException
     * @expectedExceptionMessage You should inform a valid chargeback reason.
     */
    public function testExceptionReason()
    {
        $event = new Chargeback();
        $event->setChargebackReason('xpto');
    }
}
