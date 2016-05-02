<?php

namespace TextKernel\search;

class searchWithStateResponse
{

    /**
     * @var searchResult $return
     */
    protected $return = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return searchResult
     */
    public function getReturn()
    {
      return $this->return;
    }

    /**
     * @param searchResult $return
     * @return \TextKernel\search\searchWithStateResponse
     */
    public function setReturn($return)
    {
      $this->return = $return;
      return $this;
    }

}
