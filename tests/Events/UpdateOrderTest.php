<?php

namespace WSW\SiftScience\Events;

use WSW\SiftScience\TestCase;

/**
 * Class UpdateOrderTest
 *
 * @package WSW\SiftScience\Events
 * @author Ronaldo Matos Rodrigues <ronaldo@whera.com.br>
 */
class UpdateOrderTest extends TestCase
{
    public function testInstance()
    {
        $event = new UpdateOrder();
        $this->assertInstanceOf(UpdateOrder::class, $event);

        return $event;
    }

    /**
     * @depends testInstance
     * @param \WSW\SiftScience\Events\UpdateOrder $event
     */
    public function testTypeEvent(UpdateOrder $event)
    {
        $this->assertEquals('$update_order', $event->getType());
    }
}
