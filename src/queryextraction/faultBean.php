<?php

namespace TextKernel\queryextraction;

class faultBean
{

    /**
     * @var errorCode $errorCode
     */
    protected $errorCode = null;

    /**
     * @var string $message
     */
    protected $message = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return errorCode
     */
    public function getErrorCode()
    {
      return $this->errorCode;
    }

    /**
     * @param errorCode $errorCode
     * @return \TextKernel\queryextraction\faultBean
     */
    public function setErrorCode($errorCode)
    {
      $this->errorCode = $errorCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getMessage()
    {
      return $this->message;
    }

    /**
     * @param string $message
     * @return \TextKernel\queryextraction\faultBean
     */
    public function setMessage($message)
    {
      $this->message = $message;
      return $this;
    }

}
