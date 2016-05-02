<?php

namespace TextKernel\authentication;

class authenticateResponse
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
     * @return \TextKernel\authentication\authenticateResponse
     */
    public function setReturn($return)
    {
      $this->return = $return;
      return $this;
    }

}
