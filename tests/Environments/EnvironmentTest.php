<?php

namespace WSW\SiftScience\Environments;

use WSW\SiftScience\TestCase;

/**
 * Class EnvironmentTest
 *
 * @package WSW\SiftScience\Environments
 * @author Ronaldo Matos Rodrigues <ronaldo@whera.com.br>
 */
class EnvironmentTest extends TestCase
{
    /**
     * @var Environment
     */
    private $environment;

    protected function setUp()
    {
        $this->environment = $this->getMockForAbstractClass(Environment::class);
        $this->environment->expects($this->any())
                          ->method('getHost')
                          ->willReturn('test.com');
        $this->environment->expects($this->any())
                          ->method('getWsHost')
                          ->willReturn('ws.test.com');
    }

    /**
     * @test
     */
    public function isValidShouldReturnTrueWhenHostIsProduction()
    {
        $this->assertTrue(Environment::isValid(Production::WS_HOST));
    }

    /**
     * @test
     */
    public function isValidShouldReturnFalseWhenHostNotProduction()
    {
        $this->assertFalse(Environment::isValid('example.org'));
    }

    /**
     * @test
     */
    public function getWsUrlShouldAppendProtocolAndWsHostToResource()
    {
        $this->assertEquals('https://ws.test.com/test', $this->environment->getWsUrl('/test'));
    }

    /**
     * @test
     */
    public function getUrlShouldAppendProtocolAndHostToResource()
    {
        $this->assertEquals('https://test.com/test', $this->environment->getUrl('/test'));
    }
}
