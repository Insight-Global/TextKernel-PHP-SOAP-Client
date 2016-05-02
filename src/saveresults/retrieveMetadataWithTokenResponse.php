<?php

namespace TextKernel\saveresults;

class retrieveMetadataWithTokenResponse
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
     * @return \TextKernel\saveresults\retrieveMetadataWithTokenResponse
     */
    public function setReturn($return)
    {
      $this->return = $return;
      return $this;
    }

}
