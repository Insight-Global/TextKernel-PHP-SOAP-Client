<?php

namespace TextKernel\search;

class searchRequest
{

    /**
     * @var string $query
     */
    protected $query = null;

    /**
     * @var queryPart[] $queryParts
     */
    protected $queryParts = null;

    /**
     * @var int $resultOffset
     */
    protected $resultOffset = null;

    /**
     * @var string $provideTagcloud
     */
    protected $provideTagcloud = null;

    /**
     * @var boolean $suppressResultList
     */
    protected $suppressResultList = null;

    /**
     * @var string $searchEngine
     */
    protected $searchEngine = null;

    /**
     * @var string $inputLanguage
     */
    protected $inputLanguage = null;

    /**
     * @var string $outputLanguage
     */
    protected $outputLanguage = null;

    /**
     * @var boolean $suppressCorrection
     */
    protected $suppressCorrection = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getQuery()
    {
      return $this->query;
    }

    /**
     * @param string $query
     * @return \TextKernel\search\searchRequest
     */
    public function setQuery($query)
    {
      $this->query = $query;
      return $this;
    }

    /**
     * @return queryPart[]
     */
    public function getQueryParts()
    {
      return $this->queryParts;
    }

    /**
     * @param queryPart[] $queryParts
     * @return \TextKernel\search\searchRequest
     */
    public function setQueryParts(array $queryParts = null)
    {
      $this->queryParts = $queryParts;
      return $this;
    }

    /**
     * @return int
     */
    public function getResultOffset()
    {
      return $this->resultOffset;
    }

    /**
     * @param int $resultOffset
     * @return \TextKernel\search\searchRequest
     */
    public function setResultOffset($resultOffset)
    {
      $this->resultOffset = $resultOffset;
      return $this;
    }

    /**
     * @return string
     */
    public function getProvideTagcloud()
    {
      return $this->provideTagcloud;
    }

    /**
     * @param string $provideTagcloud
     * @return \TextKernel\search\searchRequest
     */
    public function setProvideTagcloud($provideTagcloud)
    {
      $this->provideTagcloud = $provideTagcloud;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getSuppressResultList()
    {
      return $this->suppressResultList;
    }

    /**
     * @param boolean $suppressResultList
     * @return \TextKernel\search\searchRequest
     */
    public function setSuppressResultList($suppressResultList)
    {
      $this->suppressResultList = $suppressResultList;
      return $this;
    }

    /**
     * @return string
     */
    public function getSearchEngine()
    {
      return $this->searchEngine;
    }

    /**
     * @param string $searchEngine
     * @return \TextKernel\search\searchRequest
     */
    public function setSearchEngine($searchEngine)
    {
      $this->searchEngine = $searchEngine;
      return $this;
    }

    /**
     * @return string
     */
    public function getInputLanguage()
    {
      return $this->inputLanguage;
    }

    /**
     * @param string $inputLanguage
     * @return \TextKernel\search\searchRequest
     */
    public function setInputLanguage($inputLanguage)
    {
      $this->inputLanguage = $inputLanguage;
      return $this;
    }

    /**
     * @return string
     */
    public function getOutputLanguage()
    {
      return $this->outputLanguage;
    }

    /**
     * @param string $outputLanguage
     * @return \TextKernel\search\searchRequest
     */
    public function setOutputLanguage($outputLanguage)
    {
      $this->outputLanguage = $outputLanguage;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getSuppressCorrection()
    {
      return $this->suppressCorrection;
    }

    /**
     * @param boolean $suppressCorrection
     * @return \TextKernel\search\searchRequest
     */
    public function setSuppressCorrection($suppressCorrection)
    {
      $this->suppressCorrection = $suppressCorrection;
      return $this;
    }

}
