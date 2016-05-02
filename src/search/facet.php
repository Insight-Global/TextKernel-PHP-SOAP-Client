<?php

namespace TextKernel\search;

class facet
{

    /**
     * @var string $field
     */
    protected $field = null;

    /**
     * @var datatype $dataType
     */
    protected $dataType = null;

    /**
     * @var combinationtype $combinationType
     */
    protected $combinationType = null;

    /**
     * @var guitype $guiType
     */
    protected $guiType = null;

    /**
     * @var cloudtype $cloudType
     */
    protected $cloudType = null;

    /**
     * @var boolean $collapsed
     */
    protected $collapsed = null;

    /**
     * @var boolean $hideFacetIfAllZero
     */
    protected $hideFacetIfAllZero = null;

    /**
     * @var boolean $hideZeroCountItems
     */
    protected $hideZeroCountItems = null;

    /**
     * @var condition $defaultCondition
     */
    protected $defaultCondition = null;

    /**
     * @var boolean $hideConditionWidget
     */
    protected $hideConditionWidget = null;

    /**
     * @var boolean $reverseItemOrder
     */
    protected $reverseItemOrder = null;

    /**
     * @var string[] $items
     */
    protected $items = null;

    /**
     * @var string[] $distances
     */
    protected $distances = null;

    /**
     * @var boolean $textInputOnFacet
     */
    protected $textInputOnFacet = null;

    /**
     * @var string $groupName
     */
    protected $groupName = null;

    /**
     * @var facet[] $childFacets
     */
    protected $childFacets = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getField()
    {
      return $this->field;
    }

    /**
     * @param string $field
     * @return \TextKernel\search\facet
     */
    public function setField($field)
    {
      $this->field = $field;
      return $this;
    }

    /**
     * @return datatype
     */
    public function getDataType()
    {
      return $this->dataType;
    }

    /**
     * @param datatype $dataType
     * @return \TextKernel\search\facet
     */
    public function setDataType($dataType)
    {
      $this->dataType = $dataType;
      return $this;
    }

    /**
     * @return combinationtype
     */
    public function getCombinationType()
    {
      return $this->combinationType;
    }

    /**
     * @param combinationtype $combinationType
     * @return \TextKernel\search\facet
     */
    public function setCombinationType($combinationType)
    {
      $this->combinationType = $combinationType;
      return $this;
    }

    /**
     * @return guitype
     */
    public function getGuiType()
    {
      return $this->guiType;
    }

    /**
     * @param guitype $guiType
     * @return \TextKernel\search\facet
     */
    public function setGuiType($guiType)
    {
      $this->guiType = $guiType;
      return $this;
    }

    /**
     * @return cloudtype
     */
    public function getCloudType()
    {
      return $this->cloudType;
    }

    /**
     * @param cloudtype $cloudType
     * @return \TextKernel\search\facet
     */
    public function setCloudType($cloudType)
    {
      $this->cloudType = $cloudType;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getCollapsed()
    {
      return $this->collapsed;
    }

    /**
     * @param boolean $collapsed
     * @return \TextKernel\search\facet
     */
    public function setCollapsed($collapsed)
    {
      $this->collapsed = $collapsed;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getHideFacetIfAllZero()
    {
      return $this->hideFacetIfAllZero;
    }

    /**
     * @param boolean $hideFacetIfAllZero
     * @return \TextKernel\search\facet
     */
    public function setHideFacetIfAllZero($hideFacetIfAllZero)
    {
      $this->hideFacetIfAllZero = $hideFacetIfAllZero;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getHideZeroCountItems()
    {
      return $this->hideZeroCountItems;
    }

    /**
     * @param boolean $hideZeroCountItems
     * @return \TextKernel\search\facet
     */
    public function setHideZeroCountItems($hideZeroCountItems)
    {
      $this->hideZeroCountItems = $hideZeroCountItems;
      return $this;
    }

    /**
     * @return condition
     */
    public function getDefaultCondition()
    {
      return $this->defaultCondition;
    }

    /**
     * @param condition $defaultCondition
     * @return \TextKernel\search\facet
     */
    public function setDefaultCondition($defaultCondition)
    {
      $this->defaultCondition = $defaultCondition;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getHideConditionWidget()
    {
      return $this->hideConditionWidget;
    }

    /**
     * @param boolean $hideConditionWidget
     * @return \TextKernel\search\facet
     */
    public function setHideConditionWidget($hideConditionWidget)
    {
      $this->hideConditionWidget = $hideConditionWidget;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getReverseItemOrder()
    {
      return $this->reverseItemOrder;
    }

    /**
     * @param boolean $reverseItemOrder
     * @return \TextKernel\search\facet
     */
    public function setReverseItemOrder($reverseItemOrder)
    {
      $this->reverseItemOrder = $reverseItemOrder;
      return $this;
    }

    /**
     * @return string[]
     */
    public function getItems()
    {
      return $this->items;
    }

    /**
     * @param string[] $items
     * @return \TextKernel\search\facet
     */
    public function setItems(array $items = null)
    {
      $this->items = $items;
      return $this;
    }

    /**
     * @return string[]
     */
    public function getDistances()
    {
      return $this->distances;
    }

    /**
     * @param string[] $distances
     * @return \TextKernel\search\facet
     */
    public function setDistances(array $distances = null)
    {
      $this->distances = $distances;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getTextInputOnFacet()
    {
      return $this->textInputOnFacet;
    }

    /**
     * @param boolean $textInputOnFacet
     * @return \TextKernel\search\facet
     */
    public function setTextInputOnFacet($textInputOnFacet)
    {
      $this->textInputOnFacet = $textInputOnFacet;
      return $this;
    }

    /**
     * @return string
     */
    public function getGroupName()
    {
      return $this->groupName;
    }

    /**
     * @param string $groupName
     * @return \TextKernel\search\facet
     */
    public function setGroupName($groupName)
    {
      $this->groupName = $groupName;
      return $this;
    }

    /**
     * @return facet[]
     */
    public function getChildFacets()
    {
      return $this->childFacets;
    }

    /**
     * @param facet[] $childFacets
     * @return \TextKernel\search\facet
     */
    public function setChildFacets(array $childFacets = null)
    {
      $this->childFacets = $childFacets;
      return $this;
    }

}
