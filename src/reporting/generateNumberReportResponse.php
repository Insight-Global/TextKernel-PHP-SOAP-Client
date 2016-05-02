<?php

namespace TextKernel\reporting;

class generateNumberReportResponse
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
     * @return \TextKernel\reporting\generateNumberReportResponse
     */
    public function setNumberReport($NumberReport)
    {
      $this->NumberReport = $NumberReport;
      return $this;
    }

}
