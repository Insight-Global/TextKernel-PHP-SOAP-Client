<?php

namespace TextKernel\completion;

class completeWithTokenResponse
{

    /**
     * @var string[] $return
     */
    protected $return = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string[]
     */
    public function getReturn()
    {
      return $this->return;
    }

    /**
     * @param string[] $return
     * @return \TextKernel\completion\completeWithTokenResponse
     */
    public function setReturn(array $return = null)
    {
      $this->return = $return;
      return $this;
    }

}
