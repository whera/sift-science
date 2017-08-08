<?php

namespace WSW\SiftScience\Environments;

/**
 * Class Production
 *
 * @package WSW\SiftScience\Environments
 * @author Ronaldo Matos Rodrigues <ronaldo@whera.com.br>
 */
class Production extends Environment
{
    const HOST = 'siftscience.com';

    const WS_HOST = 'api.siftscience.com';

    /**
     * @return string
     */
    public function getWsHost()
    {
        return static::WS_HOST;
    }

    /**
     * @return string
     */
    public function getHost()
    {
        return static::HOST;
    }
}
