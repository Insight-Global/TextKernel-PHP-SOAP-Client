<?php

namespace TextKernel\saveresults;

class listResultsResponse
{

    /**
     * @var savedResults $return
     */
    protected $return = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return savedResults
     */
    public function getReturn()
    {
      return $this->return;
    }

    /**
     * @param savedResults $return
     * @return \TextKernel\saveresults\listResultsResponse
     */
    public function setReturn($return)
    {
      $this->return = $return;
      return $this;
    }

}
