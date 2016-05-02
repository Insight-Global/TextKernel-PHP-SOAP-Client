<?php

namespace TextKernel\projects;

class listProjectsResponse
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
     * @return \TextKernel\projects\listProjectsResponse
     */
    public function setReturn($return)
    {
      $this->return = $return;
      return $this;
    }

}
