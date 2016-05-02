<?php

namespace TextKernel\reporting;

class reportEntry
{

    /**
     * @var string $key
     */
    protected $key = null;

    /**
     * @var float $value
     */
    protected $value = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getKey()
    {
      return $this->key;
    }

    /**
     * @param string $key
     * @return \TextKernel\reporting\reportEntry
     */
    public function setKey($key)
    {
      $this->key = $key;
      return $this;
    }

    /**
     * @return float
     */
    public function getValue()
    {
      return $this->value;
    }

    /**
     * @param float $value
     * @return \TextKernel\reporting\reportEntry
     */
    public function setValue($value)
    {
      $this->value = $value;
      return $this;
    }

}
