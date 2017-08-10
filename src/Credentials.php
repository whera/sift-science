<?php

namespace WSW\SiftScience;

use WSW\SiftScience\Environments\Environment;
use WSW\SiftScience\Environments\Production;

/**
 * Class Credentials
 *
 * @package WSW\SiftScience
 * @author Ronaldo Matos Rodrigues <ronaldo@whera.com.br>
 */
class Credentials
{
    /**
     * @var string
     */
    private $apiKey;

    /**
     * @var Environment
     */
    private $environment;

    /**
     * @param string $apiKey
     * @param Environment $environment
     */
    public function __construct($apiKey, Environment $environment = null)
    {
        $this->apiKey = substr($apiKey, 0, 16);
        $this->environment = $environment ?: new Production();
    }

    /**
     * @param string $resource
     *
     * @return string
     */
    public function getUrl($resource)
    {
        return $this->environment->getUrl($resource);
    }

    /**
     * @param string $resource
     * @param array $params
     *
     * @return string
     */
    public function getWsUrl($resource, array $params = [])
    {
        if (empty($params)) {
            return $this->environment->getWsUrl($resource);
        }

        return sprintf('%s?%s', $this->environment->getWsUrl($resource), http_build_query($params));
    }

    /**
     * @return Environment
     */
    public function getEnvironment()
    {
        return $this->environment;
    }

    /**
     * @return string
     */
    public function getApiKey()
    {
        return $this->apiKey;
    }
}
