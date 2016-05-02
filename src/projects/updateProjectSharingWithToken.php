<?php

namespace TextKernel\projects;

class updateProjectSharingWithToken
{

    /**
     * @var string $accessToken
     */
    protected $accessToken = null;

    /**
     * @var string $projectID
     */
    protected $projectID = null;

    /**
     * @var shares $shares
     */
    protected $shares = null;

    
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
     * @return \TextKernel\projects\updateProjectSharingWithToken
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
     * @return \TextKernel\projects\updateProjectSharingWithToken
     */
    public function setProjectID($projectID)
    {
      $this->projectID = $projectID;
      return $this;
    }

    /**
     * @return shares
     */
    public function getShares()
    {
      return $this->shares;
    }

    /**
     * @param shares $shares
     * @return \TextKernel\projects\updateProjectSharingWithToken
     */
    public function setShares($shares)
    {
      $this->shares = $shares;
      return $this;
    }

}
