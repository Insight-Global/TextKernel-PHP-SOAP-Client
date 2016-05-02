<?php

namespace TextKernel\reporting;

class numberReport extends report
{

    /**
     * @var reportEntry $reportEntry
     */
    protected $reportEntry = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return reportEntry
     */
    public function getReportEntry()
    {
      return $this->reportEntry;
    }

    /**
     * @param reportEntry $reportEntry
     * @return \TextKernel\reporting\numberReport
     */
    public function setReportEntry($reportEntry)
    {
      $this->reportEntry = $reportEntry;
      return $this;
    }

}
