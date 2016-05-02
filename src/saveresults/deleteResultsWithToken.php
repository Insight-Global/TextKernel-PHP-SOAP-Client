<?php

namespace TextKernel\saveresults;

class deleteResultsWithToken
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
     * @return \TextKernel\saveresults\deleteResultsWithToken
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
     * @return \TextKernel\saveresults\deleteResultsWithToken
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
     * @return \TextKernel\saveresults\deleteResultsWithToken
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
     * @return \TextKernel\saveresults\deleteResultsWithToken
     */
    public function setDocIDs(array $docIDs = null)
    {
      $this->docIDs = $docIDs;
      return $this;
    }

}
