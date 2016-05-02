<?php

namespace TextKernel\search;

class resultField
{

    /**
     * @var string $name
     */
    protected $name = null;

    /**
     * @var string $displayType
     */
    protected $displayType = null;

    /**
     * @var string $prefix
     */
    protected $prefix = null;

    /**
     * @var string[] $highlightAsFields
     */
    protected $highlightAsFields = null;

    /**
     * @var boolean $html
     */
    protected $html = null;

    /**
     * @var string $extraParameters
     */
    protected $extraParameters = null;

    /**
     * @var string $target
     */
    protected $target = null;

    /**
     * @var string $icon
     */
    protected $icon = null;

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
     * @var string $includeFields
     */
    protected $includeFields = null;

    /**
     * @var string $dateFormat
     */
    protected $dateFormat = null;

    
    public function __construct()
    {
    
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
     * @return \TextKernel\search\resultField
     */
    public function setName($name)
    {
      $this->name = $name;
      return $this;
    }

    /**
     * @return string
     */
    public function getDisplayType()
    {
      return $this->displayType;
    }

    /**
     * @param string $displayType
     * @return \TextKernel\search\resultField
     */
    public function setDisplayType($displayType)
    {
      $this->displayType = $displayType;
      return $this;
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
     * @return \TextKernel\search\resultField
     */
    public function setPrefix($prefix)
    {
      $this->prefix = $prefix;
      return $this;
    }

    /**
     * @return string[]
     */
    public function getHighlightAsFields()
    {
      return $this->highlightAsFields;
    }

    /**
     * @param string[] $highlightAsFields
     * @return \TextKernel\search\resultField
     */
    public function setHighlightAsFields(array $highlightAsFields = null)
    {
      $this->highlightAsFields = $highlightAsFields;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getHtml()
    {
      return $this->html;
    }

    /**
     * @param boolean $html
     * @return \TextKernel\search\resultField
     */
    public function setHtml($html)
    {
      $this->html = $html;
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
     * @return \TextKernel\search\resultField
     */
    public function setExtraParameters($extraParameters)
    {
      $this->extraParameters = $extraParameters;
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
     * @return \TextKernel\search\resultField
     */
    public function setTarget($target)
    {
      $this->target = $target;
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
     * @return \TextKernel\search\resultField
     */
    public function setIcon($icon)
    {
      $this->icon = $icon;
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
     * @return \TextKernel\search\resultField
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
     * @return \TextKernel\search\resultField
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
     * @return \TextKernel\search\resultField
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
     * @return \TextKernel\search\resultField
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
     * @return \TextKernel\search\resultField
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
     * @return \TextKernel\search\resultField
     */
    public function setOpenInModal($openInModal)
    {
      $this->openInModal = $openInModal;
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
     * @return \TextKernel\search\resultField
     */
    public function setIncludeFields($includeFields)
    {
      $this->includeFields = $includeFields;
      return $this;
    }

    /**
     * @return string
     */
    public function getDateFormat()
    {
      return $this->dateFormat;
    }

    /**
     * @param string $dateFormat
     * @return \TextKernel\search\resultField
     */
    public function setDateFormat($dateFormat)
    {
      $this->dateFormat = $dateFormat;
      return $this;
    }

}
