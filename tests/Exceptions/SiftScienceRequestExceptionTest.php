<?php

namespace WSW\SiftScience\Exceptions;

use DateTime;
use GuzzleHttp\Exception\RequestException;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\StreamInterface;
use WSW\SiftScience\TestCase;

/**
 * Class SiftScienceRequestExceptionTest
 *
 * @package WSW\SiftScience\Exceptions
 * @author Ronaldo Matos Rodrigues <ronaldo@whera.com.br
 */
class SiftScienceRequestExceptionTest extends TestCase
{
    /**
     * @var RequestException
     */
    private $response;

    protected function setUp()
    {
        parent::setUp();

        $this->response = $this->createMock(RequestException::class);
        $responseInterface = $this->createMock(ResponseInterface::class);
        $bodyMethod = $this->createMock(StreamInterface::class);

        $bodyMethod->expects($this->once())->method('getContents')->willReturn(json_encode([
            'error' => 0,
            'status' => 10,
            'request' => json_encode(['request' => true]),
            'time' => 1502592365,
            'error_message' => 'success'
        ]));

        $responseInterface->expects($this->once())->method('getBody')->willReturn($bodyMethod);
        $this->response->expects($this->once())->method('getResponse')->willReturn($responseInterface);

    }

    public function testInstance()
    {

        $exception = new SiftScienceRequestException($this->response);

        $this->assertInstanceOf(SiftScienceRequestException::class, $exception);
    }

    public function testMethodStatus()
    {
        $exception = new SiftScienceRequestException($this->response);
        $this->assertEquals(10, $exception->getStatus());
    }

    public function testMethodTime()
    {
        $exception = new SiftScienceRequestException($this->response);
        $this->assertInstanceOf(\DateTime::class, $exception->getTime());
        $this->assertEquals(1502592365, $exception->getTime()->getTimestamp());
    }

    public function testMethodRequest()
    {
        $exception = new SiftScienceRequestException($this->response);
        $this->assertInstanceOf(\stdClass::class, json_decode($exception->getRequest()));
    }

    public function testMethodMessage()
    {
        $exception = new SiftScienceRequestException($this->response);
        $this->assertEquals('success', $exception->getMessage());
    }
}