<?php

namespace TextKernel\projects;

class deleteAllProjectsWithToken
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
     * @return \TextKernel\projects\deleteAllProjectsWithToken
     */
    public function setAccessToken($accessToken)
    {
      $this->accessToken = $accessToken;
      return $this;
    }

}
