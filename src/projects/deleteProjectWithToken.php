<?php

namespace TextKernel\projects;

class deleteProjectWithToken
{

    /**
     * @var string $accessToken
     */
    protected $accessToken = null;

    /**
     * @var string $projectID
     */
    protected $projectID = null;

    
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
     * @return \TextKernel\projects\deleteProjectWithToken
     */
    public function setAccessToken($accessToken)
    {
      $this->accessToken = $accessToken;
      return $this;
    }

    /**
     * @return string
     */
    public function getProjectID()
    {
      return $this->projectID;
    }

    /**
     * @param string $projectID
     * @return \TextKernel\projects\deleteProjectWithToken
     */
    public function setProjectID($projectID)
    {
      $this->projectID = $projectID;
      return $this;
    }

}
