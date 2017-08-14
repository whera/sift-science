<?php

namespace WSW\SiftScience\Collections;

use WSW\SiftScience\TestCase;

/**
 * Class HeadersTest
 *
 * @package WSW\SiftScience\Collections
 * @author Ronaldo Matos Rodrigues <ronaldo@whera.com.br>
 */
class HeadersTest extends TestCase
{
    public function testInstance()
    {
        $headers = new Headers();

        $this->assertInstanceOf(Headers::class, $headers);
    }

    public function testParamsDefault()
    {
        $headers = new Headers();
        $this->assertEquals(2, $headers->count());
    }

}