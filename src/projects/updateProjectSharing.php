<?php

namespace TextKernel\projects;

class updateProjectSharing
{

    /**
     * @var string $environment
     */
    protected $environment = null;

    /**
     * @var string $password
     */
    protected $password = null;

    /**
     * @var string $user
     */
    protected $user = null;

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
    public function getEnvironment()
    {
      return $this->environment;
    }

    /**
     * @param string $environment
     * @return \TextKernel\projects\updateProjectSharing
     */
    public function setEnvironment($environment)
    {
      $this->environment = $environment;
      return $this;
    }

    /**
     * @return string
     */
    public function getPassword()
    {
      return $this->password;
    }

    /**
     * @param string $password
     * @return \TextKernel\projects\updateProjectSharing
     */
    public function setPassword($password)
    {
      $this->password = $password;
      return $this;
    }

    /**
     * @return string
     */
    public function getUser()
    {
      return $this->user;
    }

    /**
     * @param string $user
     * @return \TextKernel\projects\updateProjectSharing
     */
    public function setUser($user)
    {
      $this->user = $user;
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
     * @return \TextKernel\projects\updateProjectSharing
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
     * @return \TextKernel\projects\updateProjectSharing
     */
    public function setShares($shares)
    {
      $this->shares = $shares;
      return $this;
    }

}
