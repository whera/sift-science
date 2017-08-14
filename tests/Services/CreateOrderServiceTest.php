<?php

namespace WSW\SiftScience\Services;

use WSW\SiftScience\Client\Client;
use WSW\SiftScience\Credentials;
use WSW\SiftScience\Events\CreateOrder;
use WSW\SiftScience\TestCase;

/**
 * Class CreateOrderServiceTest
 *
 * @package WSW\SiftScience\Services
 * @author Ronaldo Matos Rodrigues <ronaldo@whera.com.br>
 */
class CreateOrderServiceTest extends TestCase
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

    public function testCreateOrderBuilderInstance()
    {
        $service = new CreateOrderService($this->credentials);

        $this->assertInstanceOf(CreateOrder::class, $service->createOrderBuilder());
    }

    /**
     * @expectedException \WSW\SiftScience\Exceptions\SiftScienceRequestException
     */
    public function testCreateAccountException()
    {
        $chargeback = new CreateOrderService(new Credentials(''));
        $chargeback->create(new CreateOrder());
    }

    public function testCreateChargeback()
    {
        $client = $this->createMock(Client::class);
        $client->expects($this->once())->method('post')->willReturn(true);

        $chargeback = new CreateOrderService($this->credentials, $client);

        $this->assertTrue($chargeback->create(new CreateOrder()));
    }
}