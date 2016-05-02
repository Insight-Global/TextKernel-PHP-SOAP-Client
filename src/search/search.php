<?php

namespace TextKernel\search;

class search
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
     * @var searchRequest $request
     */
    protected $request = null;

    
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
     * @return \TextKernel\search\search
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
     * @return \TextKernel\search\search
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
     * @return \TextKernel\search\search
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
     * @return \TextKernel\search\search
     */
    public function setAccessOptions($accessOptions)
    {
      $this->accessOptions = $accessOptions;
      return $this;
    }

    /**
     * @return searchRequest
     */
    public function getRequest()
    {
      return $this->request;
    }

    /**
     * @param searchRequest $request
     * @return \TextKernel\search\search
     */
    public function setRequest($request)
    {
      $this->request = $request;
      return $this;
    }

}
