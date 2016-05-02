<?php

namespace TextKernel\authentication;

class CredentialsMapEntry
{

    /**
     * @var string $key
     */
    protected $key = null;

    /**
     * @var credentials $value
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
     * @return \TextKernel\authentication\CredentialsMapEntry
     */
    public function setKey($key)
    {
      $this->key = $key;
      return $this;
    }

    /**
     * @return credentials
     */
    public function getValue()
    {
      return $this->value;
    }

    /**
     * @param credentials $value
     * @return \TextKernel\authentication\CredentialsMapEntry
     */
    public function setValue($value)
    {
      $this->value = $value;
      return $this;
    }

}
