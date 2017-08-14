<?php

namespace WSW\SiftScience\Services;

use WSW\SiftScience\Client\Client;
use WSW\SiftScience\Credentials;
use WSW\SiftScience\Events\Transaction;
use WSW\SiftScience\TestCase;

/**
 * Class TransactionServiceTest
 *
 * @package WSW\SiftScience\Services
 * @author Ronaldo Matos Rodrigues <ronaldo@whera.com.br>
 */
class TransactionServiceTest extends TestCase
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

    public function testTransactionBuilderInstance()
    {
        $service = new TransactionService($this->credentials);

        $this->assertInstanceOf(Transaction::class, $service->createTransactionBuilder());
    }

    /**
     * @expectedException \WSW\SiftScience\Exceptions\SiftScienceRequestException
     */
    public function testCreateTransactionException()
    {
        $chargeback = new TransactionService(new Credentials(''));
        $chargeback->create(new Transaction());
    }

    public function testCreateTransaction()
    {
        $client = $this->createMock(Client::class);
        $client->expects($this->once())->method('post')->willReturn(true);

        $chargeback = new TransactionService($this->credentials, $client);

        $this->assertTrue($chargeback->create(new Transaction()));
    }
}