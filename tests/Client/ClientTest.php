<?php

namespace WSW\SiftScience\Client;

use Psr\Http\Message\ResponseInterface;
use WSW\SiftScience\Credentials;
use WSW\SiftScience\Exceptions\SiftScienceRequestException;
use WSW\SiftScience\Services\CreateAccountService;
use WSW\SiftScience\TestCase;
use GuzzleHttp\Client as HttpClient;

/**
 * Class ClientTest
 *
 * @package WSW\SiftScience\Client
 * @author Ronaldo Matos Rodrigues <ronaldo@whera.com.br>
 */
class ClientTest extends TestCase
{
    /**
     * @var \GuzzleHttp\Client
     */
    private $httpClient;

    /**
     * @var ResponseInterface
     */
    private $response;


    public function setUp()
    {
        parent::setUp();

        $this->httpClient = $this->createMock(HttpClient::class);
        $this->response = $this->createMock(ResponseInterface::class);

    }

    public function testPost()
    {
        $this->httpClient->expects($this->once())
            ->method('request')
            ->with('POST', '/test', [
                'headers' => [
                    'application/json',
                    'application/json'
                ],
                'body'    => 'body',
                'verify'  => false
            ])
            ->willReturn($this->response);

        $client = new Client($this->httpClient);

        $this->assertInstanceOf(ResponseInterface::class, $client->post('/test', 'body'));
    }

    /**
     * @expectedException \WSW\SiftScience\Exceptions\SiftScienceRequestException
     */
    public function testPostException()
    {
        $credentials = new Credentials('');
        $service = new CreateAccountService($credentials);
        $event = $service->createAccountBuilder();
        $service->create($event);

    }

    public function testHeaders()
    {
        $client = new Client(new HttpClient());
        $this->assertInstanceOf(Client::class, $client->addHeader('xpto', 'otpx'));
    }
}