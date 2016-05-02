<?php

namespace TextKernel\saveresults;

class retrieveMetadataWithToken
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
    public function getAccessToken()
    {
      return $this->accessToken;
    }

    /**
     * @param string $accessToken
     * @return \TextKernel\saveresults\retrieveMetadataWithToken
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
     * @return \TextKernel\saveresults\retrieveMetadataWithToken
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
     * @return \TextKernel\saveresults\retrieveMetadataWithToken
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
     * @return \TextKernel\saveresults\retrieveMetadataWithToken
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
     * @return \TextKernel\saveresults\retrieveMetadataWithToken
     */
    public function setLanguage($language)
    {
      $this->language = $language;
      return $this;
    }

}
