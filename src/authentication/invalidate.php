<?php

namespace TextKernel\authentication;

class invalidate
{

    /**
     * @var string $accessToken
     */
    protected $accessToken = null;

    
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
     * @return \TextKernel\authentication\invalidate
     */
    public function setAccessToken($accessToken)
    {
      $this->accessToken = $accessToken;
      return $this;
    }

}
