<?php
/**
 * Copyright (c) 2018. Netresearch GmbH & Co. KG | Netresearch DTT GmbH
 */

namespace Netresearch\TimeTrackerBundle\Helper;


/**
 * Class JiraApiException
 * @package Netresearch\TimeTrackerBundle\Helper
 */
class JiraApiException extends \Exception
{
    /** @var String */
    protected $redirectUrl;

    /**
     * JiraApiException constructor.
     * @param $message
     * @param $code
     * @param null $redirectUrl
     */
    public function __construct($message, $code, $redirectUrl = null)
    {
        $this->redirectUrl = $redirectUrl;
        $message = 'JiraApi: '. $message;
        parent::__construct($message, $code, null);
    }

    /**
     * @return String
     */
    public function getRedirectUrl()
    {
        return $this->redirectUrl;
    }
}
