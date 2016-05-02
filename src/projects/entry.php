<?php

namespace TextKernel\projects;

class entry
{

    /**
     * @var string $key
     */
    protected $key = null;

    /**
     * @var assessmentArray $value
     */
    protected $value = null;

    /**
     * @param string $key
     * @param assessmentArray $value
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
     * @return \TextKernel\projects\entry
     */
    public function setKey($key)
    {
      $this->key = $key;
      return $this;
    }

    /**
     * @return assessmentArray
     */
    public function getValue()
    {
      return $this->value;
    }

    /**
     * @param assessmentArray $value
     * @return \TextKernel\projects\entry
     */
    public function setValue($value)
    {
      $this->value = $value;
      return $this;
    }

}
