<?php

namespace TextKernel\search;

class StringMapEntry
{

    /**
     * @var string $key
     */
    protected $key = null;

    /**
     * @var string $value
     */
    protected $value = null;

    /**
     * @param string $key
     */
    public function __construct($key)
    {
      $this->key = $key;
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
     * @return \TextKernel\search\StringMapEntry
     */
    public function setKey($key)
    {
      $this->key = $key;
      return $this;
    }

    /**
     * @return string
     */
    public function getValue()
    {
      return $this->value;
    }

    /**
     * @param string $value
     * @return \TextKernel\search\StringMapEntry
     */
    public function setValue($value)
    {
      $this->value = $value;
      return $this;
    }

}
