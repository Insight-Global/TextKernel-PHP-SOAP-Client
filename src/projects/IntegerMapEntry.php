<?php

namespace TextKernel\projects;

class IntegerMapEntry
{

    /**
     * @var string $key
     */
    protected $key = null;

    /**
     * @var int $value
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
     * @return \TextKernel\projects\IntegerMapEntry
     */
    public function setKey($key)
    {
      $this->key = $key;
      return $this;
    }

    /**
     * @return int
     */
    public function getValue()
    {
      return $this->value;
    }

    /**
     * @param int $value
     * @return \TextKernel\projects\IntegerMapEntry
     */
    public function setValue($value)
    {
      $this->value = $value;
      return $this;
    }

}
