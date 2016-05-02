<?php

namespace TextKernel\projects;

class savedResult
{

    /**
     * @var string $docID
     */
    protected $docID = null;

    /**
     * @var string $metadata
     */
    protected $metadata = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getDocID()
    {
      return $this->docID;
    }

    /**
     * @param string $docID
     * @return \TextKernel\projects\savedResult
     */
    public function setDocID($docID)
    {
      $this->docID = $docID;
      return $this;
    }

    /**
     * @return string
     */
    public function getMetadata()
    {
      return $this->metadata;
    }

    /**
     * @param string $metadata
     * @return \TextKernel\projects\savedResult
     */
    public function setMetadata($metadata)
    {
      $this->metadata = $metadata;
      return $this;
    }

}
