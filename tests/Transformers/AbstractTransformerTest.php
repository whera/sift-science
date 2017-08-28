<?php

namespace WSW\SiftScience\Transformers;

use stdClass;
use WSW\SiftScience\Events\CreateOrder;
use WSW\SiftScience\TestCase;

/**
 * Class AbstractTransformerTest
 *
 * @package WSW\SiftScience\Transformers
 * @author Ronaldo Matos Rodrigues <ronaldo@whera.com.br>
 */
class AbstractTransformerTest extends TestCase
{
    public function testResultMethod()
    {
        $transformer = $this->getMockForAbstractClass(AbstractTransformer::class);
        $custom = new stdClass();
        $custom->custom_field = 'xpto';

        $event = new CreateOrder();
        $event->setCustomFields($custom);

        $this->assertInternalType('array', $transformer->result($event, []));
        $this->assertArrayHasKey('custom_field', $transformer->result($event, []));
    }

}
