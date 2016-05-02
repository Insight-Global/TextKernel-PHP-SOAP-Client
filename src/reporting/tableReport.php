<?php

namespace TextKernel\reporting;

class tableReport extends report
{

    /**
     * @var tableReportEntry[] $table
     */
    protected $table = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return tableReportEntry[]
     */
    public function getTable()
    {
      return $this->table;
    }

    /**
     * @param tableReportEntry[] $table
     * @return \TextKernel\reporting\tableReport
     */
    public function setTable(array $table = null)
    {
      $this->table = $table;
      return $this;
    }

}
