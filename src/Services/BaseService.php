<?php

namespace WSW\SiftScience\Services;

use Psr\Http\Message\ResponseInterface;
use WSW\SiftScience\Client\Client;
use WSW\SiftScience\Credentials;

/**
 * Class BaseService
 *
 * @package WSW\SiftScience\Services
 * @author Ronaldo Matos Rodrigues <ronaldo@whera.com.br>
 */
abstract class BaseService
{
    /**
     * @var string
     */
    const ENDPOINT = '/v204/events';

    /**
     * @var Credentials
     */
    protected $credentials;

    /**
     * @var Client
     */
    private $client;

    /**
     * @param Credentials $credentials
     * @param Client $client
     */
    public function __construct(Credentials $credentials, Client $client = null)
    {
        $this->credentials = $credentials;
        $this->client = $client ?: new Client();
    }

    /**
     * @param string $resource
     * @param string $request
     *
     * @return ResponseInterface
     */
    protected function post($resource, $request)
    {
        return $this->client->post($this->credentials->getWsUrl($resource), $request);
    }
}
