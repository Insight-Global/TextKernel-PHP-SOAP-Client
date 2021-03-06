<?php

namespace TextKernel\saveresults;

class searcherResults
{

    /**
     * @var entry $entry
     */
    protected $entry = null;

    /**
     * @param entry $entry
     */
    public function __construct($entry)
    {
      $this->entry = $entry;
    }

    /**
     * @return entry
     */
    public function getEntry()
    {
      return $this->entry;
    }

    /**
     * @param entry $entry
     * @return \TextKernel\saveresults\searcherResults
     */
    public function setEntry($entry)
    {
      $this->entry = $entry;
      return $this;
    }

}
