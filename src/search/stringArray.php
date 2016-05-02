<?php

namespace TextKernel\search;

class stringArray
{

    /**
     * @var string[] $item
     */
    protected $item = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string[]
     */
    public function getItem()
    {
      return $this->item;
    }

    /**
     * @param string[] $item
     * @return \TextKernel\search\stringArray
     */
    public function setItem(array $item = null)
    {
      $this->item = $item;
      return $this;
    }

}
