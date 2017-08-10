<?php

namespace WSW\SiftScience\Events;

/**
 * Class BaseEvent
 *
 * @package WSW\SiftScience\Events
 * @author Ronaldo Matos Rodrigues <ronaldo@whera.com.br>
 */
abstract class BaseEvent
{
    /**
     * @var string
     */
    protected $type;

    /**
     * @var string
     */
    protected $apiKey;

    /**
     * @var string
     */
    protected $userId;

    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @return string
     */
    public function getApiKey()
    {
        return $this->apiKey;
    }

    /**
     * @param string $apiKey
     *
     * @return $this
     */
    public function setApiKey($apiKey)
    {
        $this->apiKey = $apiKey;

        return $this;
    }

    /**
     * @return string
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * @param string $userId
     *
     * @return $this
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;

        return $this;
    }
}
