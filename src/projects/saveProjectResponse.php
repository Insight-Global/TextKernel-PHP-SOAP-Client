<?php

namespace TextKernel\projects;

class saveProjectResponse
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
     * @return \TextKernel\projects\saveProjectResponse
     */
    public function setReturn($return)
    {
      $this->return = $return;
      return $this;
    }

}
