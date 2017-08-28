<?php

namespace WSW\SiftScience\Events;

use DateTime;
use stdClass;

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
     * @var string
     */
    protected $sessionId;

    /**
     * @var string
     */
    protected $ip;

    /**
     * @var \DateTime
     */
    protected $time;

    /**
     * @var stdClass
     */
    protected $customFields;

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

    /**
     * @return string
     */
    public function getSessionId()
    {
        return $this->sessionId;
    }

    /**
     * @param string $sessionId
     *
     * @return $this
     */
    public function setSessionId($sessionId)
    {
        $this->sessionId = $sessionId;

        return $this;
    }

    /**
     * @return string
     */
    public function getIp()
    {
        return $this->ip;
    }

    /**
     * @param string $ip
     *
     * @return $this
     */
    public function setIp($ip)
    {
        $this->ip = $ip;

        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getTime()
    {
        return $this->time;
    }

    /**
     * @param \DateTime $time
     *
     * @return $this
     */
    public function setTime(DateTime $time)
    {
        $this->time = $time;

        return $this;
    }

    /**
     * @return stdClass
     */
    public function getCustomFields()
    {
        return $this->customFields;
    }

    /**
     * @param stdClass $customFields
     *
     * @return $this
     */
    public function setCustomFields(stdClass $customFields)
    {
        $this->customFields = $customFields;

        return $this;
    }
}
