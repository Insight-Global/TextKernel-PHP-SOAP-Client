<?php

namespace TextKernel\search;

class synonymSectionArray
{

    /**
     * @var synonymSection[] $item
     */
    protected $item = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return synonymSection[]
     */
    public function getItem()
    {
      return $this->item;
    }

    /**
     * @param synonymSection[] $item
     * @return \TextKernel\search\synonymSectionArray
     */
    public function setItem(array $item = null)
    {
      $this->item = $item;
      return $this;
    }

}
