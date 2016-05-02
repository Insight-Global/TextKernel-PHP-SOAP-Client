<?php

namespace TextKernel\reporting;

abstract class report
{

    /**
     * @var string $reportName
     */
    protected $reportName = null;

    /**
     * @var string $reportType
     */
    protected $reportType = null;

    /**
     * @var \DateTime $timeStamp
     */
    protected $timeStamp = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getReportName()
    {
      return $this->reportName;
    }

    /**
     * @param string $reportName
     * @return \TextKernel\reporting\report
     */
    public function setReportName($reportName)
    {
      $this->reportName = $reportName;
      return $this;
    }

    /**
     * @return string
     */
    public function getReportType()
    {
      return $this->reportType;
    }

    /**
     * @param string $reportType
     * @return \TextKernel\reporting\report
     */
    public function setReportType($reportType)
    {
      $this->reportType = $reportType;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getTimeStamp()
    {
      if ($this->timeStamp == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->timeStamp);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $timeStamp
     * @return \TextKernel\reporting\report
     */
    public function setTimeStamp(\DateTime $timeStamp = null)
    {
      if ($timeStamp == null) {
       $this->timeStamp = null;
      } else {
        $this->timeStamp = $timeStamp->format(\DateTime::ATOM);
      }
      return $this;
    }

}
