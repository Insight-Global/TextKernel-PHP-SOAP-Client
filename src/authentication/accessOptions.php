<?php

namespace TextKernel\authentication;

class accessOptions
{

    /**
     * @var StringMap $externalTokens
     */
    protected $externalTokens = null;

    /**
     * @var CredentialsMap $searcherAccess
     */
    protected $searcherAccess = null;

    /**
     * @var boolean $reportingAccess
     */
    protected $reportingAccess = null;

    /**
     * @var boolean $assessmentAccess
     */
    protected $assessmentAccess = null;

    /**
     * @var boolean $transformedQueryAccess
     */
    protected $transformedQueryAccess = null;

    /**
     * @param boolean $reportingAccess
     * @param boolean $assessmentAccess
     * @param boolean $transformedQueryAccess
     */
    public function __construct($reportingAccess, $assessmentAccess, $transformedQueryAccess)
    {
      $this->reportingAccess = $reportingAccess;
      $this->assessmentAccess = $assessmentAccess;
      $this->transformedQueryAccess = $transformedQueryAccess;
    }

    /**
     * @return StringMap
     */
    public function getExternalTokens()
    {
      return $this->externalTokens;
    }

    /**
     * @param StringMap $externalTokens
     * @return \TextKernel\authentication\accessOptions
     */
    public function setExternalTokens($externalTokens)
    {
      $this->externalTokens = $externalTokens;
      return $this;
    }

    /**
     * @return CredentialsMap
     */
    public function getSearcherAccess()
    {
      return $this->searcherAccess;
    }

    /**
     * @param CredentialsMap $searcherAccess
     * @return \TextKernel\authentication\accessOptions
     */
    public function setSearcherAccess($searcherAccess)
    {
      $this->searcherAccess = $searcherAccess;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getReportingAccess()
    {
      return $this->reportingAccess;
    }

    /**
     * @param boolean $reportingAccess
     * @return \TextKernel\authentication\accessOptions
     */
    public function setReportingAccess($reportingAccess)
    {
      $this->reportingAccess = $reportingAccess;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getAssessmentAccess()
    {
      return $this->assessmentAccess;
    }

    /**
     * @param boolean $assessmentAccess
     * @return \TextKernel\authentication\accessOptions
     */
    public function setAssessmentAccess($assessmentAccess)
    {
      $this->assessmentAccess = $assessmentAccess;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getTransformedQueryAccess()
    {
      return $this->transformedQueryAccess;
    }

    /**
     * @param boolean $transformedQueryAccess
     * @return \TextKernel\authentication\accessOptions
     */
    public function setTransformedQueryAccess($transformedQueryAccess)
    {
      $this->transformedQueryAccess = $transformedQueryAccess;
      return $this;
    }

}
