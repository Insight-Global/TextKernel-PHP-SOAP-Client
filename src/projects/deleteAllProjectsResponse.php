<?php

namespace TextKernel\projects;

class deleteAllProjectsResponse
{

    /**
     * @var string $return
     */
    protected $return = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getReturn()
    {
      return $this->return;
    }

    /**
     * @param string $return
     * @return \TextKernel\projects\deleteAllProjectsResponse
     */
    public function setReturn($return)
    {
      $this->return = $return;
      return $this;
    }

}
