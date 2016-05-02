<?php

namespace TextKernel\reporting;

class generateChartReportResponse
{

    /**
     * @var chartReport $ChartReport
     */
    protected $ChartReport = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return chartReport
     */
    public function getChartReport()
    {
      return $this->ChartReport;
    }

    /**
     * @param chartReport $ChartReport
     * @return \TextKernel\reporting\generateChartReportResponse
     */
    public function setChartReport($ChartReport)
    {
      $this->ChartReport = $ChartReport;
      return $this;
    }

}
