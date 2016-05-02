<?php

namespace TextKernel\search;

class resultItem
{

    /**
     * @var string $docID
     */
    protected $docID = null;

    /**
     * @var stringArray[] $fields
     */
    protected $fields = null;

    /**
     * @var float $score
     */
    protected $score = null;

    /**
     * @var int[] $queryPartScores
     */
    protected $queryPartScores = null;

    /**
     * @param float $score
     */
    public function __construct($score)
    {
      $this->score = $score;
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
     * @return \TextKernel\search\resultItem
     */
    public function setDocID($docID)
    {
      $this->docID = $docID;
      return $this;
    }

    /**
     * @return stringArray[]
     */
    public function getFields()
    {
      return $this->fields;
    }

    /**
     * @param stringArray[] $fields
     * @return \TextKernel\search\resultItem
     */
    public function setFields(array $fields = null)
    {
      $this->fields = $fields;
      return $this;
    }

    /**
     * @return float
     */
    public function getScore()
    {
      return $this->score;
    }

    /**
     * @param float $score
     * @return \TextKernel\search\resultItem
     */
    public function setScore($score)
    {
      $this->score = $score;
      return $this;
    }

    /**
     * @return int[]
     */
    public function getQueryPartScores()
    {
      return $this->queryPartScores;
    }

    /**
     * @param int[] $queryPartScores
     * @return \TextKernel\search\resultItem
     */
    public function setQueryPartScores(array $queryPartScores = null)
    {
      $this->queryPartScores = $queryPartScores;
      return $this;
    }

}
