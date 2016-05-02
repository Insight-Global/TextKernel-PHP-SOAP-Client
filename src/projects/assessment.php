<?php

namespace TextKernel\projects;

class assessment
{

    /**
     * @var string $docID
     */
    protected $docID = null;

    /**
     * @var int $relevance
     */
    protected $relevance = null;

    /**
     * @param int $relevance
     */
    public function __construct($relevance)
    {
      $this->relevance = $relevance;
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
     * @return \TextKernel\projects\assessment
     */
    public function setDocID($docID)
    {
      $this->docID = $docID;
      return $this;
    }

    /**
     * @return int
     */
    public function getRelevance()
    {
      return $this->relevance;
    }

    /**
     * @param int $relevance
     * @return \TextKernel\projects\assessment
     */
    public function setRelevance($relevance)
    {
      $this->relevance = $relevance;
      return $this;
    }

}
