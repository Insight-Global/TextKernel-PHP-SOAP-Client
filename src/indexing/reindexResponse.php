<?php

namespace TextKernel\indexing;

class reindexResponse
{

    /**
     * @var reindexingStatus $return
     */
    protected $return = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return reindexingStatus
     */
    public function getReturn()
    {
      return $this->return;
    }

    /**
     * @param reindexingStatus $return
     * @return \TextKernel\indexing\reindexResponse
     */
    public function setReturn($return)
    {
      $this->return = $return;
      return $this;
    }

}
