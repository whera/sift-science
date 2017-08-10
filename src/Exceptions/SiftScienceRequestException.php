<?php

namespace WSW\SiftScience\Exceptions;

use DateTime;
use GuzzleHttp\Exception\RequestException;
use RuntimeException;
use Throwable;

/**
 * Class SiftScienceRequestException
 *
 * @package WSW\SiftScience\Exceptions
 * @author Ronaldo Matos Rodrigues <ronaldo@whera.com.br>
 */
class SiftScienceRequestException extends RuntimeException
{
    /**
     * @var int
     */
    private $status;

    /**
     * @var \DateTime
     */
    private $time;

    /**
     * @var string
     */
    private $request;

    public function __construct(RequestException $exception)
    {
        $decode = json_decode($exception->getResponse()->getBody()->getContents());

        $this->status = $decode->status;
        $this->request = $decode->request;
        $this->time = (new DateTime())->setTimestamp($decode->time);

        parent::__construct($decode->error_message, $exception->getCode(), $exception->getPrevious());
    }

    /**
     * @return int
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @return \DateTime
     */
    public function getTime()
    {
        return $this->time;
    }

    /**
     * @return string
     */
    public function getRequest()
    {
        return $this->request;
    }
}
