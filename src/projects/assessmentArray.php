<?php

namespace TextKernel\projects;

class assessmentArray
{

    /**
     * @var assessment[] $item
     */
    protected $item = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return assessment[]
     */
    public function getItem()
    {
      return $this->item;
    }

    /**
     * @param assessment[] $item
     * @return \TextKernel\projects\assessmentArray
     */
    public function setItem(array $item = null)
    {
      $this->item = $item;
      return $this;
    }

}
