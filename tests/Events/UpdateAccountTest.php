<?php

declare(strict_types=1);

namespace WSW\SiftScience\Events;

use WSW\SiftScience\TestCase;

/**
 * Class UpdateAccountTest
 *
 * @package WSW\SiftScience\Events
 * @author Ronaldo Matos Rodrigues <ronaldo@whera.com.br>
 */
class UpdateAccountTest extends TestCase
{
    public function testInstance()
    {
        $event = new UpdateAccount();
        $this->assertInstanceOf(UpdateAccount::class, $event);

        return $event;
    }

    /**
     * @depends testInstance
     * @param \WSW\SiftScience\Events\UpdateAccount $event
     */
    public function testTypeEvent(UpdateAccount $event)
    {
        $this->assertEquals('$update_account', $event->getType());
    }

}
