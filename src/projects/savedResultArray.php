<?php

namespace TextKernel\projects;

class savedResultArray
{

    /**
     * @var savedResult[] $item
     */
    protected $item = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return savedResult[]
     */
    public function getItem()
    {
      return $this->item;
    }

    /**
     * @param savedResult[] $item
     * @return \TextKernel\projects\savedResultArray
     */
    public function setItem(array $item = null)
    {
      $this->item = $item;
      return $this;
    }

}
