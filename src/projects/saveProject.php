<?php

namespace TextKernel\projects;

class saveProject
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
     * @var string $name
     */
    protected $name = null;

    /**
     * @var string $externalID
     */
    protected $externalID = null;

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
     * @return \TextKernel\projects\saveProject
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
     * @return \TextKernel\projects\saveProject
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
     * @return \TextKernel\projects\saveProject
     */
    public function setUser($user)
    {
      $this->user = $user;
      return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
      return $this->name;
    }

    /**
     * @param string $name
     * @return \TextKernel\projects\saveProject
     */
    public function setName($name)
    {
      $this->name = $name;
      return $this;
    }

    /**
     * @return string
     */
    public function getExternalID()
    {
      return $this->externalID;
    }

    /**
     * @param string $externalID
     * @return \TextKernel\projects\saveProject
     */
    public function setExternalID($externalID)
    {
      $this->externalID = $externalID;
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
     * @return \TextKernel\projects\saveProject
     */
    public function setShares($shares)
    {
      $this->shares = $shares;
      return $this;
    }

}
