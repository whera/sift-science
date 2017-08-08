<?php

namespace WSW\SiftScience\Environments;

use WSW\SiftScience\TestCase;

/**
 * Class ProductionTest
 *
 * @package WSW\SiftScience\Environments
 * @author Ronaldo Matos Rodrigues <ronaldo@whera.com.br>
 */
class ProductionTest extends TestCase
{
    /**
     * @test
     */
    public function getHostShouldReturnTheConstantValue()
    {
        $env = new Production();
        $this->assertEquals(Production::HOST, $env->getHost());
    }

    /**
     * @test
     */
    public function getWsHostShouldReturnTheConstantValue()
    {
        $env = new Production();
        $this->assertEquals(Production::WS_HOST, $env->getWsHost());
    }
}
