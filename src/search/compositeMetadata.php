<?php

namespace TextKernel\search;

class compositeMetadata
{

    /**
     * @var facet[] $facets
     */
    protected $facets = null;

    /**
     * @var string $defaultSearcher
     */
    protected $defaultSearcher = null;

    /**
     * @var searcherMetadata $searcherMetadata
     */
    protected $searcherMetadata = null;

    /**
     * @var fieldNameLabels $fieldNameLabels
     */
    protected $fieldNameLabels = null;

    /**
     * @var boolean $hasDatabase
     */
    protected $hasDatabase = null;

    /**
     * @var boolean $hasReportingAccess
     */
    protected $hasReportingAccess = null;

    /**
     * @var boolean $hasEmailAlerts
     */
    protected $hasEmailAlerts = null;

    /**
     * @var boolean $hasAssessmentAccess
     */
    protected $hasAssessmentAccess = null;

    /**
     * @var boolean $hasEmailAddressesOnToken
     */
    protected $hasEmailAddressesOnToken = null;

    /**
     * @var string[] $autoCompleteFields
     */
    protected $autoCompleteFields = null;

    /**
     * @var savingConfig $savingConfig
     */
    protected $savingConfig = null;

    /**
     * @var linkNameLabels $linkNameLabels
     */
    protected $linkNameLabels = null;

    /**
     * @var string[] $relevanceLabels
     */
    protected $relevanceLabels = null;

    /**
     * @var headerLink[] $headerLinks
     */
    protected $headerLinks = null;

    /**
     * @var boolean $hasQueryExtractor
     */
    protected $hasQueryExtractor = null;

    /**
     * @var boolean $hasUserLogging
     */
    protected $hasUserLogging = null;

    /**
     * @var boolean $hasTransformedQueryAccess
     */
    protected $hasTransformedQueryAccess = null;

    /**
     * @param searcherMetadata $searcherMetadata
     * @param fieldNameLabels $fieldNameLabels
     * @param boolean $hasDatabase
     * @param boolean $hasReportingAccess
     * @param boolean $hasEmailAlerts
     * @param boolean $hasAssessmentAccess
     * @param boolean $hasEmailAddressesOnToken
     * @param linkNameLabels $linkNameLabels
     * @param boolean $hasQueryExtractor
     * @param boolean $hasUserLogging
     * @param boolean $hasTransformedQueryAccess
     */
    public function __construct($searcherMetadata, $fieldNameLabels, $hasDatabase, $hasReportingAccess, $hasEmailAlerts, $hasAssessmentAccess, $hasEmailAddressesOnToken, $linkNameLabels, $hasQueryExtractor, $hasUserLogging, $hasTransformedQueryAccess)
    {
      $this->searcherMetadata = $searcherMetadata;
      $this->fieldNameLabels = $fieldNameLabels;
      $this->hasDatabase = $hasDatabase;
      $this->hasReportingAccess = $hasReportingAccess;
      $this->hasEmailAlerts = $hasEmailAlerts;
      $this->hasAssessmentAccess = $hasAssessmentAccess;
      $this->hasEmailAddressesOnToken = $hasEmailAddressesOnToken;
      $this->linkNameLabels = $linkNameLabels;
      $this->hasQueryExtractor = $hasQueryExtractor;
      $this->hasUserLogging = $hasUserLogging;
      $this->hasTransformedQueryAccess = $hasTransformedQueryAccess;
    }

    /**
     * @return facet[]
     */
    public function getFacets()
    {
      return $this->facets;
    }

    /**
     * @param facet[] $facets
     * @return \TextKernel\search\compositeMetadata
     */
    public function setFacets(array $facets = null)
    {
      $this->facets = $facets;
      return $this;
    }

    /**
     * @return string
     */
    public function getDefaultSearcher()
    {
      return $this->defaultSearcher;
    }

    /**
     * @param string $defaultSearcher
     * @return \TextKernel\search\compositeMetadata
     */
    public function setDefaultSearcher($defaultSearcher)
    {
      $this->defaultSearcher = $defaultSearcher;
      return $this;
    }

    /**
     * @return searcherMetadata
     */
    public function getSearcherMetadata()
    {
      return $this->searcherMetadata;
    }

    /**
     * @param searcherMetadata $searcherMetadata
     * @return \TextKernel\search\compositeMetadata
     */
    public function setSearcherMetadata($searcherMetadata)
    {
      $this->searcherMetadata = $searcherMetadata;
      return $this;
    }

    /**
     * @return fieldNameLabels
     */
    public function getFieldNameLabels()
    {
      return $this->fieldNameLabels;
    }

    /**
     * @param fieldNameLabels $fieldNameLabels
     * @return \TextKernel\search\compositeMetadata
     */
    public function setFieldNameLabels($fieldNameLabels)
    {
      $this->fieldNameLabels = $fieldNameLabels;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getHasDatabase()
    {
      return $this->hasDatabase;
    }

    /**
     * @param boolean $hasDatabase
     * @return \TextKernel\search\compositeMetadata
     */
    public function setHasDatabase($hasDatabase)
    {
      $this->hasDatabase = $hasDatabase;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getHasReportingAccess()
    {
      return $this->hasReportingAccess;
    }

    /**
     * @param boolean $hasReportingAccess
     * @return \TextKernel\search\compositeMetadata
     */
    public function setHasReportingAccess($hasReportingAccess)
    {
      $this->hasReportingAccess = $hasReportingAccess;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getHasEmailAlerts()
    {
      return $this->hasEmailAlerts;
    }

    /**
     * @param boolean $hasEmailAlerts
     * @return \TextKernel\search\compositeMetadata
     */
    public function setHasEmailAlerts($hasEmailAlerts)
    {
      $this->hasEmailAlerts = $hasEmailAlerts;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getHasAssessmentAccess()
    {
      return $this->hasAssessmentAccess;
    }

    /**
     * @param boolean $hasAssessmentAccess
     * @return \TextKernel\search\compositeMetadata
     */
    public function setHasAssessmentAccess($hasAssessmentAccess)
    {
      $this->hasAssessmentAccess = $hasAssessmentAccess;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getHasEmailAddressesOnToken()
    {
      return $this->hasEmailAddressesOnToken;
    }

    /**
     * @param boolean $hasEmailAddressesOnToken
     * @return \TextKernel\search\compositeMetadata
     */
    public function setHasEmailAddressesOnToken($hasEmailAddressesOnToken)
    {
      $this->hasEmailAddressesOnToken = $hasEmailAddressesOnToken;
      return $this;
    }

    /**
     * @return string[]
     */
    public function getAutoCompleteFields()
    {
      return $this->autoCompleteFields;
    }

    /**
     * @param string[] $autoCompleteFields
     * @return \TextKernel\search\compositeMetadata
     */
    public function setAutoCompleteFields(array $autoCompleteFields = null)
    {
      $this->autoCompleteFields = $autoCompleteFields;
      return $this;
    }

    /**
     * @return savingConfig
     */
    public function getSavingConfig()
    {
      return $this->savingConfig;
    }

    /**
     * @param savingConfig $savingConfig
     * @return \TextKernel\search\compositeMetadata
     */
    public function setSavingConfig($savingConfig)
    {
      $this->savingConfig = $savingConfig;
      return $this;
    }

    /**
     * @return linkNameLabels
     */
    public function getLinkNameLabels()
    {
      return $this->linkNameLabels;
    }

    /**
     * @param linkNameLabels $linkNameLabels
     * @return \TextKernel\search\compositeMetadata
     */
    public function setLinkNameLabels($linkNameLabels)
    {
      $this->linkNameLabels = $linkNameLabels;
      return $this;
    }

    /**
     * @return string[]
     */
    public function getRelevanceLabels()
    {
      return $this->relevanceLabels;
    }

    /**
     * @param string[] $relevanceLabels
     * @return \TextKernel\search\compositeMetadata
     */
    public function setRelevanceLabels(array $relevanceLabels = null)
    {
      $this->relevanceLabels = $relevanceLabels;
      return $this;
    }

    /**
     * @return headerLink[]
     */
    public function getHeaderLinks()
    {
      return $this->headerLinks;
    }

    /**
     * @param headerLink[] $headerLinks
     * @return \TextKernel\search\compositeMetadata
     */
    public function setHeaderLinks(array $headerLinks = null)
    {
      $this->headerLinks = $headerLinks;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getHasQueryExtractor()
    {
      return $this->hasQueryExtractor;
    }

    /**
     * @param boolean $hasQueryExtractor
     * @return \TextKernel\search\compositeMetadata
     */
    public function setHasQueryExtractor($hasQueryExtractor)
    {
      $this->hasQueryExtractor = $hasQueryExtractor;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getHasUserLogging()
    {
      return $this->hasUserLogging;
    }

    /**
     * @param boolean $hasUserLogging
     * @return \TextKernel\search\compositeMetadata
     */
    public function setHasUserLogging($hasUserLogging)
    {
      $this->hasUserLogging = $hasUserLogging;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getHasTransformedQueryAccess()
    {
      return $this->hasTransformedQueryAccess;
    }

    /**
     * @param boolean $hasTransformedQueryAccess
     * @return \TextKernel\search\compositeMetadata
     */
    public function setHasTransformedQueryAccess($hasTransformedQueryAccess)
    {
      $this->hasTransformedQueryAccess = $hasTransformedQueryAccess;
      return $this;
    }

}
