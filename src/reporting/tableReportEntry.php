<?php

namespace TextKernel\reporting;

class tableReportEntry
{

    /**
     * @var string $tableName
     */
    protected $tableName = null;

    /**
     * @var reportEntry[] $row
     */
    protected $row = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getTableName()
    {
      return $this->tableName;
    }

    /**
     * @param string $tableName
     * @return \TextKernel\reporting\tableReportEntry
     */
    public function setTableName($tableName)
    {
      $this->tableName = $tableName;
      return $this;
    }

    /**
     * @return reportEntry[]
     */
    public function getRow()
    {
      return $this->row;
    }

    /**
     * @param reportEntry[] $row
     * @return \TextKernel\reporting\tableReportEntry
     */
    public function setRow(array $row = null)
    {
      $this->row = $row;
      return $this;
    }

}
