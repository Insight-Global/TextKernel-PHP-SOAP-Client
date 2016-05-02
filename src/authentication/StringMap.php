<?php

namespace TextKernel\authentication;

class StringMap
{

    /**
     * @var StringMapEntry[] $entry
     */
    protected $entry = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return StringMapEntry[]
     */
    public function getEntry()
    {
      return $this->entry;
    }

    /**
     * @param StringMapEntry[] $entry
     * @return \TextKernel\authentication\StringMap
     */
    public function setEntry(array $entry = null)
    {
      $this->entry = $entry;
      return $this;
    }

}
