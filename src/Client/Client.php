<?php

namespace WSW\SiftScience\Client;

use GuzzleHttp\ClientInterface;
use GuzzleHttp\Client as HttpClient;
use GuzzleHttp\Exception\RequestException;
use Psr\Http\Message\ResponseInterface;
use WSW\SiftScience\Collections\Headers;
use WSW\SiftScience\Exceptions\SiftScienceRequestException;

/**
 * Class Client
 *
 * @package WSW\SiftScience\Client
 * @author Ronaldo Matos Rodrigues <ronaldo@whera.com.br>
 */
class Client
{
    /**
     * @var \GuzzleHttp\Client
     */
    private $client;

    /**
     * @var Headers
     */
    private $headers;

    /**
     * @param ClientInterface $client
     */
    public function __construct(ClientInterface $client = null)
    {
        $this->client = $client ?: new HttpClient();
        $this->headers = new Headers();
    }

    /**
     * @param string $key
     * @param string $value
     *
     * @return $this
     */
    public function addHeader($key, $value)
    {
        $this->headers->add([$key => $value]);

        return $this;
    }

    /**
     * @param string $url
     * @param string $body
     * @throws SiftScienceRequestException
     *
     * @return ResponseInterface
     */
    public function post($url, $body)
    {
        try {
            $response = $this->client->request('POST', $url, [
                'headers' => $this->headers->getValues(),
                'body'    => $body,
                'verify'  => false
            ]);

            return $response;
        } catch (RequestException $e) {
            throw new SiftScienceRequestException($e);
        }
    }
}
