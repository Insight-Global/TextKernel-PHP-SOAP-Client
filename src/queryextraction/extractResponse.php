<?php

namespace TextKernel\queryextraction;

class extractResponse
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
     * @return \TextKernel\queryextraction\extractResponse
     */
    public function setReturn($return)
    {
      $this->return = $return;
      return $this;
    }

}
