<?php

namespace WSW\SiftScience\Events;

use DateTime;
use WSW\SiftScience\TestCase;

/**
 * Class BaseEventTest
 * @package WSW\SiftScience\Events
 * @author Ronaldo Matos Rodrigues <ronaldo@whera.com.br>
 */
class BaseEventTest extends TestCase
{
    public function testAttributeType()
    {
        $event = new CreateOrder();

        $this->assertAttributeEquals('$create_order', 'type', $event);
        $this->assertEquals('$create_order', $event->getType());
    }

    public function testAttributeApiKey()
    {
        $event = new CreateOrder();
        $event->setApiKey('123456789');

        $this->assertAttributeEquals(123456789, 'apiKey', $event);
        $this->assertEquals(123456789, $event->getApiKey());
    }

    public function testAttributeUserId()
    {
        $event = new CreateOrder();
        $event->setUserId('billy_jones_301');

        $this->assertAttributeEquals('billy_jones_301', 'userId', $event);
        $this->assertEquals('billy_jones_301', $event->getUserId());
    }

    public function testAttributeIp()
    {
        $event = new CreateOrder();
        $event->setIp('192.168.20.1');

        $this->assertAttributeEquals('192.168.20.1', 'ip', $event);
        $this->assertEquals('192.168.20.1', $event->getIp());
    }

    public function testAttributeTime()
    {
        $date = DateTime::createFromFormat('d/m/Y', '01/02/1988');
        $unix = $date->getTimestamp();
        $event = new CreateOrder();
        $event->setTime($date);

        $this->assertAttributeInstanceOf(DateTime::class, 'time', $event);
        $this->assertInstanceOf(DateTime::class, $event->getTime());
        $this->assertEquals($unix, $event->getTime()->getTimestamp());
    }
}
