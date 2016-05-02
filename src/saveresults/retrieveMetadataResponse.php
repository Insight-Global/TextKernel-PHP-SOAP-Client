<?php

namespace TextKernel\saveresults;

class retrieveMetadataResponse
{

    /**
     * @var StringMap $return
     */
    protected $return = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return StringMap
     */
    public function getReturn()
    {
      return $this->return;
    }

    /**
     * @param StringMap $return
     * @return \TextKernel\saveresults\retrieveMetadataResponse
     */
    public function setReturn($return)
    {
      $this->return = $return;
      return $this;
    }

}
