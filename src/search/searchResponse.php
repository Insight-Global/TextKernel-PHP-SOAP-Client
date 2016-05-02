<?php

namespace TextKernel\search;

class searchResponse
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
     * @return \TextKernel\search\searchResponse
     */
    public function setReturn($return)
    {
      $this->return = $return;
      return $this;
    }

}
