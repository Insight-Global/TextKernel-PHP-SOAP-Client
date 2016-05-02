<?php

namespace TextKernel\authentication;

class accessWithoutPasswordResponse
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
     * @return \TextKernel\authentication\accessWithoutPasswordResponse
     */
    public function setReturn($return)
    {
      $this->return = $return;
      return $this;
    }

}
