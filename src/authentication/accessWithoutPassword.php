<?php

namespace TextKernel\authentication;

class accessWithoutPassword
{

    /**
     * @var string $environment
     */
    protected $environment = null;

    /**
     * @var string[] $accessRoles
     */
    protected $accessRoles = null;

    /**
     * @var string $user
     */
    protected $user = null;

    
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
     * @return \TextKernel\authentication\accessWithoutPassword
     */
    public function setEnvironment($environment)
    {
      $this->environment = $environment;
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
     * @return \TextKernel\authentication\accessWithoutPassword
     */
    public function setAccessRoles(array $accessRoles = null)
    {
      $this->accessRoles = $accessRoles;
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
     * @return \TextKernel\authentication\accessWithoutPassword
     */
    public function setUser($user)
    {
      $this->user = $user;
      return $this;
    }

}
