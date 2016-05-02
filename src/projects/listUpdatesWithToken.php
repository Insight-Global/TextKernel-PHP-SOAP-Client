<?php

namespace TextKernel\projects;

class listUpdatesWithToken
{

    /**
     * @var string $accessToken
     */
    protected $accessToken = null;

    /**
     * @var IntegerMap $versions
     */
    protected $versions = null;

    
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
     * @return \TextKernel\projects\listUpdatesWithToken
     */
    public function setAccessToken($accessToken)
    {
      $this->accessToken = $accessToken;
      return $this;
    }

    /**
     * @return IntegerMap
     */
    public function getVersions()
    {
      return $this->versions;
    }

    /**
     * @param IntegerMap $versions
     * @return \TextKernel\projects\listUpdatesWithToken
     */
    public function setVersions($versions)
    {
      $this->versions = $versions;
      return $this;
    }

}
