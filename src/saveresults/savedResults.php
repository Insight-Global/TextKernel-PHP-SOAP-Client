<?php

namespace TextKernel\saveresults;

class savedResults
{

    /**
     * @var string $projectID
     */
    protected $projectID = null;

    /**
     * @var searcherResults $searcherResults
     */
    protected $searcherResults = null;

    /**
     * @param searcherResults $searcherResults
     */
    public function __construct($searcherResults)
    {
      $this->searcherResults = $searcherResults;
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
     * @return \TextKernel\saveresults\savedResults
     */
    public function setProjectID($projectID)
    {
      $this->projectID = $projectID;
      return $this;
    }

    /**
     * @return searcherResults
     */
    public function getSearcherResults()
    {
      return $this->searcherResults;
    }

    /**
     * @param searcherResults $searcherResults
     * @return \TextKernel\saveresults\savedResults
     */
    public function setSearcherResults($searcherResults)
    {
      $this->searcherResults = $searcherResults;
      return $this;
    }

}
