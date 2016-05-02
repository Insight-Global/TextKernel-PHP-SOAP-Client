<?php

namespace TextKernel\indexing;

class delete
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
     * @var string[] $documentIDs
     */
    protected $documentIDs = null;

    
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
     * @return \TextKernel\indexing\delete
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
     * @return \TextKernel\indexing\delete
     */
    public function setPassword($password)
    {
      $this->password = $password;
      return $this;
    }

    /**
     * @return string[]
     */
    public function getDocumentIDs()
    {
      return $this->documentIDs;
    }

    /**
     * @param string[] $documentIDs
     * @return \TextKernel\indexing\delete
     */
    public function setDocumentIDs(array $documentIDs = null)
    {
      $this->documentIDs = $documentIDs;
      return $this;
    }

}
