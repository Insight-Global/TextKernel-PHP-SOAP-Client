<?php

namespace TextKernel\reporting;

class chartReport extends report
{

    /**
     * @var reportEntry[] $column
     */
    protected $column = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return reportEntry[]
     */
    public function getColumn()
    {
      return $this->column;
    }

    /**
     * @param reportEntry[] $column
     * @return \TextKernel\reporting\chartReport
     */
    public function setColumn(array $column = null)
    {
      $this->column = $column;
      return $this;
    }

}
