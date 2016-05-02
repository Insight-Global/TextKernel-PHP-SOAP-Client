<?php

namespace TextKernel\savesearches;

class listSearchesResponse
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
     * @return \TextKernel\savesearches\listSearchesResponse
     */
    public function setReturn(array $return = null)
    {
      $this->return = $return;
      return $this;
    }

}
