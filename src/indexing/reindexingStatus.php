<?php

namespace TextKernel\indexing;

class reindexingStatus
{

    /**
     * @var state $state
     */
    protected $state = null;

    /**
     * @var int $reindexedDocuments
     */
    protected $reindexedDocuments = null;

    /**
     * @var int $totalDocuments
     */
    protected $totalDocuments = null;

    /**
     * @var \DateTime $startTime
     */
    protected $startTime = null;

    /**
     * @var \DateTime $deltaTime
     */
    protected $deltaTime = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return state
     */
    public function getState()
    {
      return $this->state;
    }

    /**
     * @param state $state
     * @return \TextKernel\indexing\reindexingStatus
     */
    public function setState($state)
    {
      $this->state = $state;
      return $this;
    }

    /**
     * @return int
     */
    public function getReindexedDocuments()
    {
      return $this->reindexedDocuments;
    }

    /**
     * @param int $reindexedDocuments
     * @return \TextKernel\indexing\reindexingStatus
     */
    public function setReindexedDocuments($reindexedDocuments)
    {
      $this->reindexedDocuments = $reindexedDocuments;
      return $this;
    }

    /**
     * @return int
     */
    public function getTotalDocuments()
    {
      return $this->totalDocuments;
    }

    /**
     * @param int $totalDocuments
     * @return \TextKernel\indexing\reindexingStatus
     */
    public function setTotalDocuments($totalDocuments)
    {
      $this->totalDocuments = $totalDocuments;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getStartTime()
    {
      if ($this->startTime == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->startTime);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $startTime
     * @return \TextKernel\indexing\reindexingStatus
     */
    public function setStartTime(\DateTime $startTime = null)
    {
      if ($startTime == null) {
       $this->startTime = null;
      } else {
        $this->startTime = $startTime->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDeltaTime()
    {
      if ($this->deltaTime == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->deltaTime);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $deltaTime
     * @return \TextKernel\indexing\reindexingStatus
     */
    public function setDeltaTime(\DateTime $deltaTime = null)
    {
      if ($deltaTime == null) {
       $this->deltaTime = null;
      } else {
        $this->deltaTime = $deltaTime->format(\DateTime::ATOM);
      }
      return $this;
    }

}
