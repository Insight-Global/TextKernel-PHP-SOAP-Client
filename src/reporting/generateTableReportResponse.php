<?php

namespace TextKernel\reporting;

class generateTableReportResponse
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
     * @return \TextKernel\reporting\generateTableReportResponse
     */
    public function setTableReport($TableReport)
    {
      $this->TableReport = $TableReport;
      return $this;
    }

}
