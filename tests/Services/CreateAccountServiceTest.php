<?php

namespace WSW\SiftScience\Services;

use WSW\SiftScience\Client\Client;
use WSW\SiftScience\Credentials;
use WSW\SiftScience\Events\CreateAccount;
use WSW\SiftScience\TestCase;

/**
 * Class CreateAccountServiceTest
 *
 * @package WSW\SiftScience\Services
 * @author Ronaldo Matos Rodrigues <ronaldo@whera.com.br>
 */
class CreateAccountServiceTest extends TestCase
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

    public function testCreateAccountBuilderInstance()
    {
        $service = new CreateAccountService($this->credentials);

        $this->assertInstanceOf(CreateAccount::class, $service->createAccountBuilder());
    }

    /**
     * @expectedException \WSW\SiftScience\Exceptions\SiftScienceRequestException
     */
    public function testCreateAccountException()
    {
        $chargeback = new CreateAccountService(new Credentials(''));
        $chargeback->create(new CreateAccount());
    }

    public function testCreateChargeback()
    {
        $client = $this->createMock(Client::class);
        $client->expects($this->once())->method('post')->willReturn(true);

        $chargeback = new CreateAccountService($this->credentials, $client);

        $this->assertTrue($chargeback->create(new CreateAccount()));
    }
}