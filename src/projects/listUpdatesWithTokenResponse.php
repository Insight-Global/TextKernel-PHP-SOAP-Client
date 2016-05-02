<?php

namespace TextKernel\projects;

class listUpdatesWithTokenResponse
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
     * @return \TextKernel\projects\listUpdatesWithTokenResponse
     */
    public function setReturn($return)
    {
      $this->return = $return;
      return $this;
    }

}
