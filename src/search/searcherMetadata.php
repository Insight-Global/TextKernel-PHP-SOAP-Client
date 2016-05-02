<?php

namespace TextKernel\search;

class searcherMetadata
{

    /**
     * @var string $label
     */
    protected $label = null;

    /**
     * @var string $shortLabel
     */
    protected $shortLabel = null;

    /**
     * @var boolean $showLabelInTooltip
     */
    protected $showLabelInTooltip = null;

    /**
     * @var string $icon
     */
    protected $icon = null;

    /**
     * @var string $type
     */
    protected $type = null;

    /**
     * @var resultField[] $resultFields
     */
    protected $resultFields = null;

    /**
     * @var resultFieldLabels $resultFieldLabels
     */
    protected $resultFieldLabels = null;

    /**
     * @var boolean $hasScoring
     */
    protected $hasScoring = null;

    /**
     * @var boolean $hasQueryPartScoring
     */
    protected $hasQueryPartScoring = null;

    /**
     * @var documentIdItem[] $documentIdLinks
     */
    protected $documentIdLinks = null;

    /**
     * @var actionItem[] $actionLinks
     */
    protected $actionLinks = null;

    /**
     * @var int $pageSize
     */
    protected $pageSize = null;

    /**
     * @var int $maxDisplayedMatchSize
     */
    protected $maxDisplayedMatchSize = null;

    /**
     * @var string[] $nonApplicableFields
     */
    protected $nonApplicableFields = null;

    /**
     * @var boolean $nonAutomatic
     */
    protected $nonAutomatic = null;

    /**
     * @param boolean $showLabelInTooltip
     * @param resultFieldLabels $resultFieldLabels
     * @param boolean $hasScoring
     * @param boolean $hasQueryPartScoring
     * @param int $pageSize
     * @param boolean $nonAutomatic
     */
    public function __construct($showLabelInTooltip, $resultFieldLabels, $hasScoring, $hasQueryPartScoring, $pageSize, $nonAutomatic)
    {
      $this->showLabelInTooltip = $showLabelInTooltip;
      $this->resultFieldLabels = $resultFieldLabels;
      $this->hasScoring = $hasScoring;
      $this->hasQueryPartScoring = $hasQueryPartScoring;
      $this->pageSize = $pageSize;
      $this->nonAutomatic = $nonAutomatic;
    }

    /**
     * @return string
     */
    public function getLabel()
    {
      return $this->label;
    }

    /**
     * @param string $label
     * @return \TextKernel\search\searcherMetadata
     */
    public function setLabel($label)
    {
      $this->label = $label;
      return $this;
    }

    /**
     * @return string
     */
    public function getShortLabel()
    {
      return $this->shortLabel;
    }

    /**
     * @param string $shortLabel
     * @return \TextKernel\search\searcherMetadata
     */
    public function setShortLabel($shortLabel)
    {
      $this->shortLabel = $shortLabel;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getShowLabelInTooltip()
    {
      return $this->showLabelInTooltip;
    }

    /**
     * @param boolean $showLabelInTooltip
     * @return \TextKernel\search\searcherMetadata
     */
    public function setShowLabelInTooltip($showLabelInTooltip)
    {
      $this->showLabelInTooltip = $showLabelInTooltip;
      return $this;
    }

    /**
     * @return string
     */
    public function getIcon()
    {
      return $this->icon;
    }

    /**
     * @param string $icon
     * @return \TextKernel\search\searcherMetadata
     */
    public function setIcon($icon)
    {
      $this->icon = $icon;
      return $this;
    }

    /**
     * @return string
     */
    public function getType()
    {
      return $this->type;
    }

    /**
     * @param string $type
     * @return \TextKernel\search\searcherMetadata
     */
    public function setType($type)
    {
      $this->type = $type;
      return $this;
    }

    /**
     * @return resultField[]
     */
    public function getResultFields()
    {
      return $this->resultFields;
    }

    /**
     * @param resultField[] $resultFields
     * @return \TextKernel\search\searcherMetadata
     */
    public function setResultFields(array $resultFields = null)
    {
      $this->resultFields = $resultFields;
      return $this;
    }

    /**
     * @return resultFieldLabels
     */
    public function getResultFieldLabels()
    {
      return $this->resultFieldLabels;
    }

    /**
     * @param resultFieldLabels $resultFieldLabels
     * @return \TextKernel\search\searcherMetadata
     */
    public function setResultFieldLabels($resultFieldLabels)
    {
      $this->resultFieldLabels = $resultFieldLabels;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getHasScoring()
    {
      return $this->hasScoring;
    }

    /**
     * @param boolean $hasScoring
     * @return \TextKernel\search\searcherMetadata
     */
    public function setHasScoring($hasScoring)
    {
      $this->hasScoring = $hasScoring;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getHasQueryPartScoring()
    {
      return $this->hasQueryPartScoring;
    }

    /**
     * @param boolean $hasQueryPartScoring
     * @return \TextKernel\search\searcherMetadata
     */
    public function setHasQueryPartScoring($hasQueryPartScoring)
    {
      $this->hasQueryPartScoring = $hasQueryPartScoring;
      return $this;
    }

    /**
     * @return documentIdItem[]
     */
    public function getDocumentIdLinks()
    {
      return $this->documentIdLinks;
    }

    /**
     * @param documentIdItem[] $documentIdLinks
     * @return \TextKernel\search\searcherMetadata
     */
    public function setDocumentIdLinks(array $documentIdLinks = null)
    {
      $this->documentIdLinks = $documentIdLinks;
      return $this;
    }

    /**
     * @return actionItem[]
     */
    public function getActionLinks()
    {
      return $this->actionLinks;
    }

    /**
     * @param actionItem[] $actionLinks
     * @return \TextKernel\search\searcherMetadata
     */
    public function setActionLinks(array $actionLinks = null)
    {
      $this->actionLinks = $actionLinks;
      return $this;
    }

    /**
     * @return int
     */
    public function getPageSize()
    {
      return $this->pageSize;
    }

    /**
     * @param int $pageSize
     * @return \TextKernel\search\searcherMetadata
     */
    public function setPageSize($pageSize)
    {
      $this->pageSize = $pageSize;
      return $this;
    }

    /**
     * @return int
     */
    public function getMaxDisplayedMatchSize()
    {
      return $this->maxDisplayedMatchSize;
    }

    /**
     * @param int $maxDisplayedMatchSize
     * @return \TextKernel\search\searcherMetadata
     */
    public function setMaxDisplayedMatchSize($maxDisplayedMatchSize)
    {
      $this->maxDisplayedMatchSize = $maxDisplayedMatchSize;
      return $this;
    }

    /**
     * @return string[]
     */
    public function getNonApplicableFields()
    {
      return $this->nonApplicableFields;
    }

    /**
     * @param string[] $nonApplicableFields
     * @return \TextKernel\search\searcherMetadata
     */
    public function setNonApplicableFields(array $nonApplicableFields = null)
    {
      $this->nonApplicableFields = $nonApplicableFields;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getNonAutomatic()
    {
      return $this->nonAutomatic;
    }

    /**
     * @param boolean $nonAutomatic
     * @return \TextKernel\search\searcherMetadata
     */
    public function setNonAutomatic($nonAutomatic)
    {
      $this->nonAutomatic = $nonAutomatic;
      return $this;
    }

}
