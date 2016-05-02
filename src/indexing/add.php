<?php

namespace TextKernel\indexing;

class add
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
     * @var \DateTime $documentDate
     */
    protected $documentDate = null;

    /**
     * @var string $document
     */
    protected $document = null;

    /**
     * @var string[] $accessRoles
     */
    protected $accessRoles = null;

    
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
     * @return \TextKernel\indexing\add
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
     * @return \TextKernel\indexing\add
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
     * @return \TextKernel\indexing\add
     */
    public function setDocumentID($documentID)
    {
      $this->documentID = $documentID;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDocumentDate()
    {
      if ($this->documentDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->documentDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $documentDate
     * @return \TextKernel\indexing\add
     */
    public function setDocumentDate(\DateTime $documentDate = null)
    {
      if ($documentDate == null) {
       $this->documentDate = null;
      } else {
        $this->documentDate = $documentDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return string
     */
    public function getDocument()
    {
      return $this->document;
    }

    /**
     * @param string $document
     * @return \TextKernel\indexing\add
     */
    public function setDocument($document)
    {
      $this->document = $document;
      return $this;
    }

    /**
     * @return string[]
     */
    public function getAccessRoles()
    {
      return $this->accessRoles;
    }

    /**
     * @param string[] $accessRoles
     * @return \TextKernel\indexing\add
     */
    public function setAccessRoles(array $accessRoles = null)
    {
      $this->accessRoles = $accessRoles;
      return $this;
    }

}
