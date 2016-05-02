<?php

namespace TextKernel\saveresults;

class retrieveMetadata
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
     * @var string[] $accessRoles
     */
    protected $accessRoles = null;

    /**
     * @var string $projectID
     */
    protected $projectID = null;

    /**
     * @var string $searchEngine
     */
    protected $searchEngine = null;

    /**
     * @var string[] $docIDs
     */
    protected $docIDs = null;

    /**
     * @var string $language
     */
    protected $language = null;

    
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
     * @return \TextKernel\saveresults\retrieveMetadata
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
     * @return \TextKernel\saveresults\retrieveMetadata
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
     * @return \TextKernel\saveresults\retrieveMetadata
     */
    public function setUser($user)
    {
      $this->user = $user;
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
     * @return \TextKernel\saveresults\retrieveMetadata
     */
    public function setAccessRoles(array $accessRoles = null)
    {
      $this->accessRoles = $accessRoles;
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
     * @return \TextKernel\saveresults\retrieveMetadata
     */
    public function setProjectID($projectID)
    {
      $this->projectID = $projectID;
      return $this;
    }

    /**
     * @return string
     */
    public function getSearchEngine()
    {
      return $this->searchEngine;
    }

    /**
     * @param string $searchEngine
     * @return \TextKernel\saveresults\retrieveMetadata
     */
    public function setSearchEngine($searchEngine)
    {
      $this->searchEngine = $searchEngine;
      return $this;
    }

    /**
     * @return string[]
     */
    public function getDocIDs()
    {
      return $this->docIDs;
    }

    /**
     * @param string[] $docIDs
     * @return \TextKernel\saveresults\retrieveMetadata
     */
    public function setDocIDs(array $docIDs = null)
    {
      $this->docIDs = $docIDs;
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
     * @return \TextKernel\saveresults\retrieveMetadata
     */
    public function setLanguage($language)
    {
      $this->language = $language;
      return $this;
    }

}
