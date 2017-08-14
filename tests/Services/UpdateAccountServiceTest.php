<?php

namespace WSW\SiftScience\Services;

use WSW\SiftScience\Client\Client;
use WSW\SiftScience\Credentials;
use WSW\SiftScience\Events\UpdateAccount;
use WSW\SiftScience\TestCase;

/**
 * Class UpdateAccountServiceTest
 *
 * @package WSW\SiftScience\Services
 * @author Ronaldo Matos Rodrigues <ronaldo@whera.com.br>
 */
class UpdateAccountServiceTest extends TestCase
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

    public function testUpdateAccountBuilderInstance()
    {
        $service = new UpdateAccountService($this->credentials);

        $this->assertInstanceOf(UpdateAccount::class, $service->updateAccountBuilder());
    }

    /**
     * @expectedException \WSW\SiftScience\Exceptions\SiftScienceRequestException
     */
    public function testUpdateAccountException()
    {
        $chargeback = new UpdateAccountService(new Credentials(''));
        $chargeback->update(new UpdateAccount());
    }

    public function testUpdateAccount()
    {
        $client = $this->createMock(Client::class);
        $client->expects($this->once())->method('post')->willReturn(true);

        $chargeback = new UpdateAccountService($this->credentials, $client);

        $this->assertTrue($chargeback->update(new UpdateAccount()));
    }
}