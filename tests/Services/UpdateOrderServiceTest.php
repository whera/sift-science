<?php

namespace WSW\SiftScience\Services;

use WSW\SiftScience\Client\Client;
use WSW\SiftScience\Credentials;
use WSW\SiftScience\Events\UpdateOrder;
use WSW\SiftScience\TestCase;

/**
 * Class UpdateOrderServiceTest
 *
 * @package WSW\SiftScience\Services
 */
class UpdateOrderServiceTest extends TestCase
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

    public function testUpdateOrderBuilderInstance()
    {
        $service = new UpdateOrderService($this->credentials);

        $this->assertInstanceOf(UpdateOrder::class, $service->updateOrderBuilder());
    }

    /**
     * @expectedException \WSW\SiftScience\Exceptions\SiftScienceRequestException
     */
    public function testUpdateOrderException()
    {
        $chargeback = new UpdateOrderService(new Credentials(''));
        $chargeback->update(new UpdateOrder());
    }

    public function testUpdateOrder()
    {
        $client = $this->createMock(Client::class);
        $client->expects($this->once())->method('post')->willReturn(true);

        $chargeback = new UpdateOrderService($this->credentials, $client);

        $this->assertTrue($chargeback->update(new UpdateOrder()));
    }
}