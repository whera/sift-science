<?php

namespace WSW\SiftScience\Services;

use WSW\SiftScience\Client\Client;
use WSW\SiftScience\Credentials;
use WSW\SiftScience\Events\Chargeback;
use WSW\SiftScience\TestCase;

/**
 * Class ChargebackServiceTest
 *
 * @package WSW\SiftScience\Services
 * @author Ronaldo Matos Rodrigues <ronaldo@whera.com.br>
 */
class ChargebackServiceTest extends TestCase
{
    /**
     * @var Credentials;
     */
    private $credentials;


    protected function setUp()
    {
        parent::setUp();

        $this->credentials = $this->createMock(Credentials::class);
    }

    public function testCreateChargebackBuilderInstance()
    {
        $service = new ChargebackService($this->credentials);

        $this->assertInstanceOf(Chargeback::class, $service->createChargebackBuilder());
    }

    /**
     * @expectedException \WSW\SiftScience\Exceptions\SiftScienceRequestException
     */
    public function testCreateChargebackException()
    {
        $chargeback = new ChargebackService(new Credentials(''));
        $chargeback->create(new Chargeback());
    }

    public function testCreateChargeback()
    {
        $client = $this->createMock(Client::class);
        $client->expects($this->once())->method('post')->willReturn(true);

        $chargeback = new ChargebackService($this->credentials, $client);

        $this->assertTrue($chargeback->create(new Chargeback()));
    }
}
