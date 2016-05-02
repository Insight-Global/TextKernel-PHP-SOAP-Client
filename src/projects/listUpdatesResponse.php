<?php

namespace TextKernel\projects;

class listUpdatesResponse
{

    /**
     * @var projectResponse $return
     */
    protected $return = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return projectResponse
     */
    public function getReturn()
    {
      return $this->return;
    }

    /**
     * @param projectResponse $return
     * @return \TextKernel\projects\listUpdatesResponse
     */
    public function setReturn($return)
    {
      $this->return = $return;
      return $this;
    }

}
