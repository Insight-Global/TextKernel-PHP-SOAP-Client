<?php

namespace TextKernel\saveresults;

class listResultsWithTokenResponse
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
     * @return \TextKernel\saveresults\listResultsWithTokenResponse
     */
    public function setReturn($return)
    {
      $this->return = $return;
      return $this;
    }

}
