<?php

namespace TextKernel\reporting;

class generateChartReportWithToken
{

    /**
     * @var string $accessToken
     */
    protected $accessToken = null;

    /**
     * @var string $report
     */
    protected $report = null;

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
     * @return \TextKernel\reporting\generateChartReportWithToken
     */
    public function setAccessToken($accessToken)
    {
      $this->accessToken = $accessToken;
      return $this;
    }

    /**
     * @return string
     */
    public function getReport()
    {
      return $this->report;
    }

    /**
     * @param string $report
     * @return \TextKernel\reporting\generateChartReportWithToken
     */
    public function setReport($report)
    {
      $this->report = $report;
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
     * @return \TextKernel\reporting\generateChartReportWithToken
     */
    public function setLanguage($language)
    {
      $this->language = $language;
      return $this;
    }

}
