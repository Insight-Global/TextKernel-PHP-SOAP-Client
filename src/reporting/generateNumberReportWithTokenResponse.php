<?php

namespace TextKernel\reporting;

class generateNumberReportWithTokenResponse
{

    /**
     * @var numberReport $NumberReport
     */
    protected $NumberReport = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return numberReport
     */
    public function getNumberReport()
    {
      return $this->NumberReport;
    }

    /**
     * @param numberReport $NumberReport
     * @return \TextKernel\reporting\generateNumberReportWithTokenResponse
     */
    public function setNumberReport($NumberReport)
    {
      $this->NumberReport = $NumberReport;
      return $this;
    }

}
