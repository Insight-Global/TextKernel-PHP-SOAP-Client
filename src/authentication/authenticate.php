<?php

namespace TextKernel\authentication;

class authenticate
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
     * @var string[] $accessRoles
     */
    protected $accessRoles = null;

    /**
     * @var accessOptions $accessOptions
     */
    protected $accessOptions = null;

    /**
     * @var string $user
     */
    protected $user = null;

    /**
     * @var userOptions $userOptions
     */
    protected $userOptions = null;

    
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
     * @return \TextKernel\authentication\authenticate
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
     * @return \TextKernel\authentication\authenticate
     */
    public function setPassword($password)
    {
      $this->password = $password;
      return $this;
    }

    /**
     * @return string[]
     */
    public function getAccessRoles()
    {
      return $this->accessRoles;
    }

    /**
     * @param string[] $accessRoles
     * @return \TextKernel\authentication\authenticate
     */
    public function setAccessRoles(array $accessRoles = null)
    {
      $this->accessRoles = $accessRoles;
      return $this;
    }

    /**
     * @return accessOptions
     */
    public function getAccessOptions()
    {
      return $this->accessOptions;
    }

    /**
     * @param accessOptions $accessOptions
     * @return \TextKernel\authentication\authenticate
     */
    public function setAccessOptions($accessOptions)
    {
      $this->accessOptions = $accessOptions;
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
     * @return \TextKernel\authentication\authenticate
     */
    public function setUser($user)
    {
      $this->user = $user;
      return $this;
    }

    /**
     * @return userOptions
     */
    public function getUserOptions()
    {
      return $this->userOptions;
    }

    /**
     * @param userOptions $userOptions
     * @return \TextKernel\authentication\authenticate
     */
    public function setUserOptions($userOptions)
    {
      $this->userOptions = $userOptions;
      return $this;
    }

}
