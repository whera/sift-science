<?php

namespace WSW\SiftScience;

use WSW\SiftScience\Environments\Environment;
use WSW\SiftScience\Environments\Production;

/**
 * Class CredentialsTest
 *
 * @package WSW\SiftScience
 * @author Ronaldo Matos Rodrigues <ronaldo@whera.com.br>
 */
class CredentialsTest extends TestCase
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
    public function constructShouldConfigureTheAttributes()
    {
        $credentials = new Credentials('1234567890123654', $this->environment);
        $this->assertAttributeEquals('1234567890123654', 'apiKey', $credentials);
        $this->assertAttributeSame($this->environment, 'environment', $credentials);
    }

    /**
     * @test
     */
    public function constructShouldTruncateApiKey()
    {
        $credentials = new Credentials(str_repeat('a', 32), $this->environment);
        $this->assertAttributeEquals(str_repeat('a', 16), 'apiKey', $credentials);
    }

    /**
     * @test
     */
    public function constructShouldUseProductionAsDefaultEnvironment()
    {
        $credentials = new Credentials('1234567890123654');
        $this->assertAttributeInstanceOf(Production::class, 'environment', $credentials);
    }

    /**
     * @test
     */
    public function getUrlShouldGetTheUrlFromTheEnvironment()
    {
        $credentials = new Credentials('1234567890123654', $this->environment);
        $this->assertEquals('https://test.com/test', $credentials->getUrl('/test'));
    }

    /**
     * @test
     */
    public function getWsUrlShouldGetTheWsUrlFromTheEnvironmentAppendingParams()
    {
        $credentials = new Credentials('1234567890123654', $this->environment);

        $this->assertEquals('https://ws.test.com/test?page=1', $credentials->getWsUrl('/test', ['page' => '1']));
    }

    /**
     * @test
     */
    public function getWsUrlShouldGetTheWsUrlFromTheEnvironment()
    {
        $credentials = new Credentials('1234567890123654', $this->environment);

        $this->assertEquals('https://ws.test.com/test/page/1', $credentials->getWsUrl('/test/page/1'));
    }
}
