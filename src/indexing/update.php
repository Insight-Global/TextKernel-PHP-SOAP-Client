<?php

namespace TextKernel\indexing;

class update
{

    /**
     * @var string $environment
     */
    protected $environment = null;

    /**
     * @var string $password
     */
    protected $password = null;

    /**
     * @var string $documentID
     */
    protected $documentID = null;

    /**
     * @var string $field
     */
    protected $field = null;

    /**
     * @var string[] $value
     */
    protected $value = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getEnvironment()
    {
      return $this->environment;
    }

    /**
     * @param string $environment
     * @return \TextKernel\indexing\update
     */
    public function setEnvironment($environment)
    {
      $this->environment = $environment;
      return $this;
    }

    /**
     * @return string
     */
    public function getPassword()
    {
      return $this->password;
    }

    /**
     * @param string $password
     * @return \TextKernel\indexing\update
     */
    public function setPassword($password)
    {
      $this->password = $password;
      return $this;
    }

    /**
     * @return string
     */
    public function getDocumentID()
    {
      return $this->documentID;
    }

    /**
     * @param string $documentID
     * @return \TextKernel\indexing\update
     */
    public function setDocumentID($documentID)
    {
      $this->documentID = $documentID;
      return $this;
    }

    /**
     * @return string
     */
    public function getField()
    {
      return $this->field;
    }

    /**
     * @param string $field
     * @return \TextKernel\indexing\update
     */
    public function setField($field)
    {
      $this->field = $field;
      return $this;
    }

    /**
     * @return string[]
     */
    public function getValue()
    {
      return $this->value;
    }

    /**
     * @param string[] $value
     * @return \TextKernel\indexing\update
     */
    public function setValue(array $value = null)
    {
      $this->value = $value;
      return $this;
    }

}
