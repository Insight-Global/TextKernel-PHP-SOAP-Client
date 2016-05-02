<?php

namespace TextKernel\savesearches;

class listSearchesWithTokenResponse
{

    /**
     * @var savedSearch[] $return
     */
    protected $return = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return savedSearch[]
     */
    public function getReturn()
    {
      return $this->return;
    }

    /**
     * @param savedSearch[] $return
     * @return \TextKernel\savesearches\listSearchesWithTokenResponse
     */
    public function setReturn(array $return = null)
    {
      $this->return = $return;
      return $this;
    }

}
