<?php

namespace TextKernel\assessments;

class saveAssessmentWithToken
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
     * @var string $docID
     */
    protected $docID = null;

    /**
     * @var string $searchEngine
     */
    protected $searchEngine = null;

    /**
     * @var string $state
     */
    protected $state = null;

    /**
     * @var int $relevance
     */
    protected $relevance = null;

    /**
     * @param int $relevance
     */
    public function __construct($relevance)
    {
      $this->relevance = $relevance;
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
     * @return \TextKernel\assessments\saveAssessmentWithToken
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
     * @return \TextKernel\assessments\saveAssessmentWithToken
     */
    public function setProjectID($projectID)
    {
      $this->projectID = $projectID;
      return $this;
    }

    /**
     * @return string
     */
    public function getDocID()
    {
      return $this->docID;
    }

    /**
     * @param string $docID
     * @return \TextKernel\assessments\saveAssessmentWithToken
     */
    public function setDocID($docID)
    {
      $this->docID = $docID;
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
     * @return \TextKernel\assessments\saveAssessmentWithToken
     */
    public function setSearchEngine($searchEngine)
    {
      $this->searchEngine = $searchEngine;
      return $this;
    }

    /**
     * @return string
     */
    public function getState()
    {
      return $this->state;
    }

    /**
     * @param string $state
     * @return \TextKernel\assessments\saveAssessmentWithToken
     */
    public function setState($state)
    {
      $this->state = $state;
      return $this;
    }

    /**
     * @return int
     */
    public function getRelevance()
    {
      return $this->relevance;
    }

    /**
     * @param int $relevance
     * @return \TextKernel\assessments\saveAssessmentWithToken
     */
    public function setRelevance($relevance)
    {
      $this->relevance = $relevance;
      return $this;
    }

}
