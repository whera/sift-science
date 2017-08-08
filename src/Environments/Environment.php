<?php

namespace WSW\SiftScience\Environments;

/**
 * Class Environment
 *
 * @package WSW\SiftScience\Environments
 * @author Ronaldo Matos Rodrigues <ronaldo@whera.com.br>
 */
abstract class Environment
{
    /**
     * @param string $host
     *
     * @return bool
     */
    public static function isValid($host)
    {
        return (bool) in_array($host, [Production::WS_HOST]);
    }

    /**
     * @param string $resource
     *
     * @return string
     */
    public function getWsUrl($resource)
    {
        return 'https://' . $this->getWsHost() . $resource;
    }

    /**
     * @param string $resource
     *
     * @return string
     */
    public function getUrl($resource)
    {
        return 'https://' . $this->getHost() . $resource;
    }

    /**
     * @return string
     */
    abstract public function getWsHost();

    /**
     * @return string
     */
    abstract public function getHost();
}
