<?php

namespace TextKernel\saveresults;

class entry
{

    /**
     * @var string $key
     */
    protected $key = null;

    /**
     * @var savedResultArray $value
     */
    protected $value = null;

    /**
     * @param string $key
     * @param savedResultArray $value
     */
    public function __construct($key, $value)
    {
      $this->key = $key;
      $this->value = $value;
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
     * @return \TextKernel\saveresults\entry
     */
    public function setKey($key)
    {
      $this->key = $key;
      return $this;
    }

    /**
     * @return savedResultArray
     */
    public function getValue()
    {
      return $this->value;
    }

    /**
     * @param savedResultArray $value
     * @return \TextKernel\saveresults\entry
     */
    public function setValue($value)
    {
      $this->value = $value;
      return $this;
    }

}
