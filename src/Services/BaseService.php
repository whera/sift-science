<?php

namespace WSW\SiftScience\Services;

use League\Fractal\Resource\Collection;
use League\Fractal\Resource\Item;
use League\Fractal\Serializer\ArraySerializer;
use League\Fractal\TransformerAbstract;
use Psr\Http\Message\ResponseInterface;
use WSW\SiftScience\Client\Client;
use WSW\SiftScience\Credentials;
use League\Fractal\Manager;

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
     * @var Manager;
     */
    protected $fractal;

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
        $this->fractal = new Manager();
        $this->fractal->setSerializer(new ArraySerializer());
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

    /**
     * @param mixed $data
     * @param TransformerAbstract $transformer
     *
     * @return \League\Fractal\Scope
     */
    protected function item($data = null, TransformerAbstract $transformer = null)
    {
        return $this->fractal->createData(new Item($data, $transformer));
    }
}
