<?php

namespace WSW\SiftScience\Support;

use WSW\SiftScience\TestCase;

/**
 * Class FormatterTest
 *
 * @package WSW\SiftScience\Support
 * @author Ronaldo Matos Rodrigues <ronaldo@whera.com.br>
 */
class FormatterTest extends TestCase
{
    public function testFormatterPhone()
    {
        $this->assertEquals('+5548999999999', Formatter::phone('+55 (48) 9 9999-9999'));
    }
}
