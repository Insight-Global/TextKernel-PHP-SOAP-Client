<?php

namespace TextKernel\search;

class actionItem
{

    /**
     * @var string $requiredParameter
     */
    protected $requiredParameter = null;

    /**
     * @var string $name
     */
    protected $name = null;

    /**
     * @var string $label
     */
    protected $label = null;

    /**
     * @var boolean $hideOnSearchResults
     */
    protected $hideOnSearchResults = null;

    /**
     * @var boolean $hideOnSavedResults
     */
    protected $hideOnSavedResults = null;

    /**
     * @var boolean $hideOnCompareView
     */
    protected $hideOnCompareView = null;

    /**
     * @var string $url
     */
    protected $url = null;

    /**
     * @var string $function
     */
    protected $function = null;

    /**
     * @var string $selectionParameter
     */
    protected $selectionParameter = null;

    /**
     * @var string $method
     */
    protected $method = null;

    /**
     * @var string $ajaxMethod
     */
    protected $ajaxMethod = null;

    /**
     * @var string $window
     */
    protected $window = null;

    /**
     * @var string $successMessage
     */
    protected $successMessage = null;

    /**
     * @var string $errorMessage
     */
    protected $errorMessage = null;

    /**
     * @var string $noSelectionMessage
     */
    protected $noSelectionMessage = null;

    /**
     * @var string $extraParameters
     */
    protected $extraParameters = null;

    /**
     * @var string $prefix
     */
    protected $prefix = null;

    /**
     * @var string $includeFields
     */
    protected $includeFields = null;

    /**
     * @var boolean $includeState
     */
    protected $includeState = null;

    /**
     * @var boolean $allowNoSelection
     */
    protected $allowNoSelection = null;

    /**
     * @var actionLink[] $actionLinks
     */
    protected $actionLinks = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getRequiredParameter()
    {
      return $this->requiredParameter;
    }

    /**
     * @param string $requiredParameter
     * @return \TextKernel\search\actionItem
     */
    public function setRequiredParameter($requiredParameter)
    {
      $this->requiredParameter = $requiredParameter;
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
     * @return \TextKernel\search\actionItem
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
     * @return \TextKernel\search\actionItem
     */
    public function setLabel($label)
    {
      $this->label = $label;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getHideOnSearchResults()
    {
      return $this->hideOnSearchResults;
    }

    /**
     * @param boolean $hideOnSearchResults
     * @return \TextKernel\search\actionItem
     */
    public function setHideOnSearchResults($hideOnSearchResults)
    {
      $this->hideOnSearchResults = $hideOnSearchResults;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getHideOnSavedResults()
    {
      return $this->hideOnSavedResults;
    }

    /**
     * @param boolean $hideOnSavedResults
     * @return \TextKernel\search\actionItem
     */
    public function setHideOnSavedResults($hideOnSavedResults)
    {
      $this->hideOnSavedResults = $hideOnSavedResults;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getHideOnCompareView()
    {
      return $this->hideOnCompareView;
    }

    /**
     * @param boolean $hideOnCompareView
     * @return \TextKernel\search\actionItem
     */
    public function setHideOnCompareView($hideOnCompareView)
    {
      $this->hideOnCompareView = $hideOnCompareView;
      return $this;
    }

    /**
     * @return string
     */
    public function getUrl()
    {
      return $this->url;
    }

    /**
     * @param string $url
     * @return \TextKernel\search\actionItem
     */
    public function setUrl($url)
    {
      $this->url = $url;
      return $this;
    }

    /**
     * @return string
     */
    public function getFunction()
    {
      return $this->function;
    }

    /**
     * @param string $function
     * @return \TextKernel\search\actionItem
     */
    public function setFunction($function)
    {
      $this->function = $function;
      return $this;
    }

    /**
     * @return string
     */
    public function getSelectionParameter()
    {
      return $this->selectionParameter;
    }

    /**
     * @param string $selectionParameter
     * @return \TextKernel\search\actionItem
     */
    public function setSelectionParameter($selectionParameter)
    {
      $this->selectionParameter = $selectionParameter;
      return $this;
    }

    /**
     * @return string
     */
    public function getMethod()
    {
      return $this->method;
    }

    /**
     * @param string $method
     * @return \TextKernel\search\actionItem
     */
    public function setMethod($method)
    {
      $this->method = $method;
      return $this;
    }

    /**
     * @return string
     */
    public function getAjaxMethod()
    {
      return $this->ajaxMethod;
    }

    /**
     * @param string $ajaxMethod
     * @return \TextKernel\search\actionItem
     */
    public function setAjaxMethod($ajaxMethod)
    {
      $this->ajaxMethod = $ajaxMethod;
      return $this;
    }

    /**
     * @return string
     */
    public function getWindow()
    {
      return $this->window;
    }

    /**
     * @param string $window
     * @return \TextKernel\search\actionItem
     */
    public function setWindow($window)
    {
      $this->window = $window;
      return $this;
    }

    /**
     * @return string
     */
    public function getSuccessMessage()
    {
      return $this->successMessage;
    }

    /**
     * @param string $successMessage
     * @return \TextKernel\search\actionItem
     */
    public function setSuccessMessage($successMessage)
    {
      $this->successMessage = $successMessage;
      return $this;
    }

    /**
     * @return string
     */
    public function getErrorMessage()
    {
      return $this->errorMessage;
    }

    /**
     * @param string $errorMessage
     * @return \TextKernel\search\actionItem
     */
    public function setErrorMessage($errorMessage)
    {
      $this->errorMessage = $errorMessage;
      return $this;
    }

    /**
     * @return string
     */
    public function getNoSelectionMessage()
    {
      return $this->noSelectionMessage;
    }

    /**
     * @param string $noSelectionMessage
     * @return \TextKernel\search\actionItem
     */
    public function setNoSelectionMessage($noSelectionMessage)
    {
      $this->noSelectionMessage = $noSelectionMessage;
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
     * @return \TextKernel\search\actionItem
     */
    public function setExtraParameters($extraParameters)
    {
      $this->extraParameters = $extraParameters;
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
     * @return \TextKernel\search\actionItem
     */
    public function setPrefix($prefix)
    {
      $this->prefix = $prefix;
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
     * @return \TextKernel\search\actionItem
     */
    public function setIncludeFields($includeFields)
    {
      $this->includeFields = $includeFields;
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
     * @return \TextKernel\search\actionItem
     */
    public function setIncludeState($includeState)
    {
      $this->includeState = $includeState;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getAllowNoSelection()
    {
      return $this->allowNoSelection;
    }

    /**
     * @param boolean $allowNoSelection
     * @return \TextKernel\search\actionItem
     */
    public function setAllowNoSelection($allowNoSelection)
    {
      $this->allowNoSelection = $allowNoSelection;
      return $this;
    }

    /**
     * @return actionLink[]
     */
    public function getActionLinks()
    {
      return $this->actionLinks;
    }

    /**
     * @param actionLink[] $actionLinks
     * @return \TextKernel\search\actionItem
     */
    public function setActionLinks(array $actionLinks = null)
    {
      $this->actionLinks = $actionLinks;
      return $this;
    }

}
