<?php

namespace TextKernel\search;

class savingConfig
{

    /**
     * @var boolean $disableProjects
     */
    protected $disableProjects = null;

    /**
     * @var boolean $disableQueries
     */
    protected $disableQueries = null;

    /**
     * @var boolean $disableResults
     */
    protected $disableResults = null;

    /**
     * @var string $projectLinkPrefix
     */
    protected $projectLinkPrefix = null;

    /**
     * @var string $projectLinkTarget
     */
    protected $projectLinkTarget = null;

    /**
     * @var boolean $enableAssessments
     */
    protected $enableAssessments = null;

    /**
     * @var boolean $dontKnowEnabled
     */
    protected $dontKnowEnabled = null;

    /**
     * @var boolean $sharingEnabled
     */
    protected $sharingEnabled = null;

    /**
     * @var boolean $taggingEnabled
     */
    protected $taggingEnabled = null;

    /**
     * @var string $sharingRequestidentitiesURL
     */
    protected $sharingRequestidentitiesURL = null;

    /**
     * @param boolean $disableProjects
     * @param boolean $disableQueries
     * @param boolean $disableResults
     * @param boolean $enableAssessments
     * @param boolean $dontKnowEnabled
     * @param boolean $sharingEnabled
     * @param boolean $taggingEnabled
     */
    public function __construct($disableProjects, $disableQueries, $disableResults, $enableAssessments, $dontKnowEnabled, $sharingEnabled, $taggingEnabled)
    {
      $this->disableProjects = $disableProjects;
      $this->disableQueries = $disableQueries;
      $this->disableResults = $disableResults;
      $this->enableAssessments = $enableAssessments;
      $this->dontKnowEnabled = $dontKnowEnabled;
      $this->sharingEnabled = $sharingEnabled;
      $this->taggingEnabled = $taggingEnabled;
    }

    /**
     * @return boolean
     */
    public function getDisableProjects()
    {
      return $this->disableProjects;
    }

    /**
     * @param boolean $disableProjects
     * @return \TextKernel\search\savingConfig
     */
    public function setDisableProjects($disableProjects)
    {
      $this->disableProjects = $disableProjects;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getDisableQueries()
    {
      return $this->disableQueries;
    }

    /**
     * @param boolean $disableQueries
     * @return \TextKernel\search\savingConfig
     */
    public function setDisableQueries($disableQueries)
    {
      $this->disableQueries = $disableQueries;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getDisableResults()
    {
      return $this->disableResults;
    }

    /**
     * @param boolean $disableResults
     * @return \TextKernel\search\savingConfig
     */
    public function setDisableResults($disableResults)
    {
      $this->disableResults = $disableResults;
      return $this;
    }

    /**
     * @return string
     */
    public function getProjectLinkPrefix()
    {
      return $this->projectLinkPrefix;
    }

    /**
     * @param string $projectLinkPrefix
     * @return \TextKernel\search\savingConfig
     */
    public function setProjectLinkPrefix($projectLinkPrefix)
    {
      $this->projectLinkPrefix = $projectLinkPrefix;
      return $this;
    }

    /**
     * @return string
     */
    public function getProjectLinkTarget()
    {
      return $this->projectLinkTarget;
    }

    /**
     * @param string $projectLinkTarget
     * @return \TextKernel\search\savingConfig
     */
    public function setProjectLinkTarget($projectLinkTarget)
    {
      $this->projectLinkTarget = $projectLinkTarget;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getEnableAssessments()
    {
      return $this->enableAssessments;
    }

    /**
     * @param boolean $enableAssessments
     * @return \TextKernel\search\savingConfig
     */
    public function setEnableAssessments($enableAssessments)
    {
      $this->enableAssessments = $enableAssessments;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getDontKnowEnabled()
    {
      return $this->dontKnowEnabled;
    }

    /**
     * @param boolean $dontKnowEnabled
     * @return \TextKernel\search\savingConfig
     */
    public function setDontKnowEnabled($dontKnowEnabled)
    {
      $this->dontKnowEnabled = $dontKnowEnabled;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getSharingEnabled()
    {
      return $this->sharingEnabled;
    }

    /**
     * @param boolean $sharingEnabled
     * @return \TextKernel\search\savingConfig
     */
    public function setSharingEnabled($sharingEnabled)
    {
      $this->sharingEnabled = $sharingEnabled;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getTaggingEnabled()
    {
      return $this->taggingEnabled;
    }

    /**
     * @param boolean $taggingEnabled
     * @return \TextKernel\search\savingConfig
     */
    public function setTaggingEnabled($taggingEnabled)
    {
      $this->taggingEnabled = $taggingEnabled;
      return $this;
    }

    /**
     * @return string
     */
    public function getSharingRequestidentitiesURL()
    {
      return $this->sharingRequestidentitiesURL;
    }

    /**
     * @param string $sharingRequestidentitiesURL
     * @return \TextKernel\search\savingConfig
     */
    public function setSharingRequestidentitiesURL($sharingRequestidentitiesURL)
    {
      $this->sharingRequestidentitiesURL = $sharingRequestidentitiesURL;
      return $this;
    }

}
