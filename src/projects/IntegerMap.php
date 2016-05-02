<?php

namespace TextKernel\projects;

class IntegerMap
{

    /**
     * @var IntegerMapEntry[] $entry
     */
    protected $entry = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return IntegerMapEntry[]
     */
    public function getEntry()
    {
      return $this->entry;
    }

    /**
     * @param IntegerMapEntry[] $entry
     * @return \TextKernel\projects\IntegerMap
     */
    public function setEntry(array $entry = null)
    {
      $this->entry = $entry;
      return $this;
    }

}
