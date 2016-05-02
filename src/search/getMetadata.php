<?php

namespace TextKernel\search;

class getMetadata
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
     * @var accessOptions $accessOptions
     */
    protected $accessOptions = null;

    /**
     * @var string $language
     */
    protected $language = null;

    /**
     * @var userOptions $userOptions
     */
    protected $userOptions = null;

    /**
     * @var string[] $accessRoles
     */
    protected $accessRoles = null;

    
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
     * @return \TextKernel\search\getMetadata
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
     * @return \TextKernel\search\getMetadata
     */
    public function setPassword($password)
    {
      $this->password = $password;
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
     * @return \TextKernel\search\getMetadata
     */
    public function setAccessOptions($accessOptions)
    {
      $this->accessOptions = $accessOptions;
      return $this;
    }

    /**
     * @return string
     */
    public function getLanguage()
    {
      return $this->language;
    }

    /**
     * @param string $language
     * @return \TextKernel\search\getMetadata
     */
    public function setLanguage($language)
    {
      $this->language = $language;
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
     * @return \TextKernel\search\getMetadata
     */
    public function setUserOptions($userOptions)
    {
      $this->userOptions = $userOptions;
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
     * @return \TextKernel\search\getMetadata
     */
    public function setAccessRoles(array $accessRoles = null)
    {
      $this->accessRoles = $accessRoles;
      return $this;
    }

}
