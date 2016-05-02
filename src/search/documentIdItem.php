<?php

namespace TextKernel\search;

class documentIdItem
{

    /**
     * @var string $prefix
     */
    protected $prefix = null;

    /**
     * @var string $target
     */
    protected $target = null;

    /**
     * @var string $name
     */
    protected $name = null;

    /**
     * @var string $label
     */
    protected $label = null;

    /**
     * @var string $icon
     */
    protected $icon = null;

    /**
     * @var string $extraParameters
     */
    protected $extraParameters = null;

    /**
     * @var boolean $highlight
     */
    protected $highlight = null;

    /**
     * @var boolean $includeAccessToken
     */
    protected $includeAccessToken = null;

    /**
     * @var boolean $includeState
     */
    protected $includeState = null;

    /**
     * @var boolean $includeKeywords
     */
    protected $includeKeywords = null;

    /**
     * @var boolean $includeSearcherName
     */
    protected $includeSearcherName = null;

    /**
     * @var boolean $openInModal
     */
    protected $openInModal = null;

    /**
     * @var documentIdLink[] $documentIdLinks
     */
    protected $documentIdLinks = null;

    /**
     * @var string $includeFields
     */
    protected $includeFields = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getPrefix()
    {
      return $this->prefix;
    }

    /**
     * @param string $prefix
     * @return \TextKernel\search\documentIdItem
     */
    public function setPrefix($prefix)
    {
      $this->prefix = $prefix;
      return $this;
    }

    /**
     * @return string
     */
    public function getTarget()
    {
      return $this->target;
    }

    /**
     * @param string $target
     * @return \TextKernel\search\documentIdItem
     */
    public function setTarget($target)
    {
      $this->target = $target;
      return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
      return $this->name;
    }

    /**
     * @param string $name
     * @return \TextKernel\search\documentIdItem
     */
    public function setName($name)
    {
      $this->name = $name;
      return $this;
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
     * @return \TextKernel\search\documentIdItem
     */
    public function setLabel($label)
    {
      $this->label = $label;
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
     * @return \TextKernel\search\documentIdItem
     */
    public function setIcon($icon)
    {
      $this->icon = $icon;
      return $this;
    }

    /**
     * @return string
     */
    public function getExtraParameters()
    {
      return $this->extraParameters;
    }

    /**
     * @param string $extraParameters
     * @return \TextKernel\search\documentIdItem
     */
    public function setExtraParameters($extraParameters)
    {
      $this->extraParameters = $extraParameters;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getHighlight()
    {
      return $this->highlight;
    }

    /**
     * @param boolean $highlight
     * @return \TextKernel\search\documentIdItem
     */
    public function setHighlight($highlight)
    {
      $this->highlight = $highlight;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIncludeAccessToken()
    {
      return $this->includeAccessToken;
    }

    /**
     * @param boolean $includeAccessToken
     * @return \TextKernel\search\documentIdItem
     */
    public function setIncludeAccessToken($includeAccessToken)
    {
      $this->includeAccessToken = $includeAccessToken;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIncludeState()
    {
      return $this->includeState;
    }

    /**
     * @param boolean $includeState
     * @return \TextKernel\search\documentIdItem
     */
    public function setIncludeState($includeState)
    {
      $this->includeState = $includeState;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIncludeKeywords()
    {
      return $this->includeKeywords;
    }

    /**
     * @param boolean $includeKeywords
     * @return \TextKernel\search\documentIdItem
     */
    public function setIncludeKeywords($includeKeywords)
    {
      $this->includeKeywords = $includeKeywords;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIncludeSearcherName()
    {
      return $this->includeSearcherName;
    }

    /**
     * @param boolean $includeSearcherName
     * @return \TextKernel\search\documentIdItem
     */
    public function setIncludeSearcherName($includeSearcherName)
    {
      $this->includeSearcherName = $includeSearcherName;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getOpenInModal()
    {
      return $this->openInModal;
    }

    /**
     * @param boolean $openInModal
     * @return \TextKernel\search\documentIdItem
     */
    public function setOpenInModal($openInModal)
    {
      $this->openInModal = $openInModal;
      return $this;
    }

    /**
     * @return documentIdLink[]
     */
    public function getDocumentIdLinks()
    {
      return $this->documentIdLinks;
    }

    /**
     * @param documentIdLink[] $documentIdLinks
     * @return \TextKernel\search\documentIdItem
     */
    public function setDocumentIdLinks(array $documentIdLinks = null)
    {
      $this->documentIdLinks = $documentIdLinks;
      return $this;
    }

    /**
     * @return string
     */
    public function getIncludeFields()
    {
      return $this->includeFields;
    }

    /**
     * @param string $includeFields
     * @return \TextKernel\search\documentIdItem
     */
    public function setIncludeFields($includeFields)
    {
      $this->includeFields = $includeFields;
      return $this;
    }

}
