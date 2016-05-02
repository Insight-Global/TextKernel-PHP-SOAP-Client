<?php

namespace TextKernel\search;

class searchResult
{

    /**
     * @var int $matchSize
     */
    protected $matchSize = null;

    /**
     * @var boolean $hasMoreResults
     */
    protected $hasMoreResults = null;

    /**
     * @var resultItem[] $resultItems
     */
    protected $resultItems = null;

    /**
     * @var queryPart[] $queryParts
     */
    protected $queryParts = null;

    /**
     * @var queryPart[] $newQueryParts
     */
    protected $newQueryParts = null;

    /**
     * @var boolean $isOrCombined
     */
    protected $isOrCombined = null;

    /**
     * @var string $transformedQuery
     */
    protected $transformedQuery = null;

    /**
     * @var facetCounts $facetCounts
     */
    protected $facetCounts = null;

    /**
     * @var tagcloud $tagcloud
     */
    protected $tagcloud = null;

    /**
     * @var string $searchEngine
     */
    protected $searchEngine = null;

    /**
     * @var synonyms $synonyms
     */
    protected $synonyms = null;

    /**
     * @param int $matchSize
     * @param boolean $hasMoreResults
     * @param boolean $isOrCombined
     * @param facetCounts $facetCounts
     * @param synonyms $synonyms
     */
    public function __construct($matchSize, $hasMoreResults, $isOrCombined, $facetCounts, $synonyms)
    {
      $this->matchSize = $matchSize;
      $this->hasMoreResults = $hasMoreResults;
      $this->isOrCombined = $isOrCombined;
      $this->facetCounts = $facetCounts;
      $this->synonyms = $synonyms;
    }

    /**
     * @return int
     */
    public function getMatchSize()
    {
      return $this->matchSize;
    }

    /**
     * @param int $matchSize
     * @return \TextKernel\search\searchResult
     */
    public function setMatchSize($matchSize)
    {
      $this->matchSize = $matchSize;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getHasMoreResults()
    {
      return $this->hasMoreResults;
    }

    /**
     * @param boolean $hasMoreResults
     * @return \TextKernel\search\searchResult
     */
    public function setHasMoreResults($hasMoreResults)
    {
      $this->hasMoreResults = $hasMoreResults;
      return $this;
    }

    /**
     * @return resultItem[]
     */
    public function getResultItems()
    {
      return $this->resultItems;
    }

    /**
     * @param resultItem[] $resultItems
     * @return \TextKernel\search\searchResult
     */
    public function setResultItems(array $resultItems = null)
    {
      $this->resultItems = $resultItems;
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
     * @return \TextKernel\search\searchResult
     */
    public function setQueryParts(array $queryParts = null)
    {
      $this->queryParts = $queryParts;
      return $this;
    }

    /**
     * @return queryPart[]
     */
    public function getNewQueryParts()
    {
      return $this->newQueryParts;
    }

    /**
     * @param queryPart[] $newQueryParts
     * @return \TextKernel\search\searchResult
     */
    public function setNewQueryParts(array $newQueryParts = null)
    {
      $this->newQueryParts = $newQueryParts;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsOrCombined()
    {
      return $this->isOrCombined;
    }

    /**
     * @param boolean $isOrCombined
     * @return \TextKernel\search\searchResult
     */
    public function setIsOrCombined($isOrCombined)
    {
      $this->isOrCombined = $isOrCombined;
      return $this;
    }

    /**
     * @return string
     */
    public function getTransformedQuery()
    {
      return $this->transformedQuery;
    }

    /**
     * @param string $transformedQuery
     * @return \TextKernel\search\searchResult
     */
    public function setTransformedQuery($transformedQuery)
    {
      $this->transformedQuery = $transformedQuery;
      return $this;
    }

    /**
     * @return facetCounts
     */
    public function getFacetCounts()
    {
      return $this->facetCounts;
    }

    /**
     * @param facetCounts $facetCounts
     * @return \TextKernel\search\searchResult
     */
    public function setFacetCounts($facetCounts)
    {
      $this->facetCounts = $facetCounts;
      return $this;
    }

    /**
     * @return tagcloud
     */
    public function getTagcloud()
    {
      return $this->tagcloud;
    }

    /**
     * @param tagcloud $tagcloud
     * @return \TextKernel\search\searchResult
     */
    public function setTagcloud($tagcloud)
    {
      $this->tagcloud = $tagcloud;
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
     * @return \TextKernel\search\searchResult
     */
    public function setSearchEngine($searchEngine)
    {
      $this->searchEngine = $searchEngine;
      return $this;
    }

    /**
     * @return synonyms
     */
    public function getSynonyms()
    {
      return $this->synonyms;
    }

    /**
     * @param synonyms $synonyms
     * @return \TextKernel\search\searchResult
     */
    public function setSynonyms($synonyms)
    {
      $this->synonyms = $synonyms;
      return $this;
    }

}
