<?php

namespace TextKernel\search;

class CredentialsMap
{

    /**
     * @var CredentialsMapEntry[] $entry
     */
    protected $entry = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return CredentialsMapEntry[]
     */
    public function getEntry()
    {
      return $this->entry;
    }

    /**
     * @param CredentialsMapEntry[] $entry
     * @return \TextKernel\search\CredentialsMap
     */
    public function setEntry(array $entry = null)
    {
      $this->entry = $entry;
      return $this;
    }

}
