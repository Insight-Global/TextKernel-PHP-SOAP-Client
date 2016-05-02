<?php

namespace TextKernel\reporting;

class generateTableReportWithTokenResponse
{

    /**
     * @var tableReport $TableReport
     */
    protected $TableReport = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return tableReport
     */
    public function getTableReport()
    {
      return $this->TableReport;
    }

    /**
     * @param tableReport $TableReport
     * @return \TextKernel\reporting\generateTableReportWithTokenResponse
     */
    public function setTableReport($TableReport)
    {
      $this->TableReport = $TableReport;
      return $this;
    }

}
