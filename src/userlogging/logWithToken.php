<?php

namespace TextKernel\userlogging;

class logWithToken
{

    /**
     * @var string $accessToken
     */
    protected $accessToken = null;

    /**
     * @var string $sessionID
     */
    protected $sessionID = null;

    /**
     * @var logMessage[] $logMessages
     */
    protected $logMessages = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getAccessToken()
    {
      return $this->accessToken;
    }

    /**
     * @param string $accessToken
     * @return \TextKernel\userlogging\logWithToken
     */
    public function setAccessToken($accessToken)
    {
      $this->accessToken = $accessToken;
      return $this;
    }

    /**
     * @return string
     */
    public function getSessionID()
    {
      return $this->sessionID;
    }

    /**
     * @param string $sessionID
     * @return \TextKernel\userlogging\logWithToken
     */
    public function setSessionID($sessionID)
    {
      $this->sessionID = $sessionID;
      return $this;
    }

    /**
     * @return logMessage[]
     */
    public function getLogMessages()
    {
      return $this->logMessages;
    }

    /**
     * @param logMessage[] $logMessages
     * @return \TextKernel\userlogging\logWithToken
     */
    public function setLogMessages(array $logMessages = null)
    {
      $this->logMessages = $logMessages;
      return $this;
    }

}
