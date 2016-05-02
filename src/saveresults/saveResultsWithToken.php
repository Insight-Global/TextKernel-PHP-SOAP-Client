<?php

namespace TextKernel\saveresults;

class saveResultsWithToken
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
     * @var savedResult[] $results
     */
    protected $results = null;

    
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
     * @return \TextKernel\saveresults\saveResultsWithToken
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
     * @return \TextKernel\saveresults\saveResultsWithToken
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
     * @return \TextKernel\saveresults\saveResultsWithToken
     */
    public function setSearchEngine($searchEngine)
    {
      $this->searchEngine = $searchEngine;
      return $this;
    }

    /**
     * @return savedResult[]
     */
    public function getResults()
    {
      return $this->results;
    }

    /**
     * @param savedResult[] $results
     * @return \TextKernel\saveresults\saveResultsWithToken
     */
    public function setResults(array $results = null)
    {
      $this->results = $results;
      return $this;
    }

}
