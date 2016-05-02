<?php

namespace TextKernel\search;

class queryPart
{

    /**
     * @var string $field
     */
    protected $field = null;

    /**
     * @var condition $condition
     */
    protected $condition = null;

    /**
     * @var float $weight
     */
    protected $weight = null;

    /**
     * @var queryPartItem[] $items
     */
    protected $items = null;

    /**
     * @param float $weight
     */
    public function __construct($weight)
    {
      $this->weight = $weight;
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
     * @return \TextKernel\search\queryPart
     */
    public function setField($field)
    {
      $this->field = $field;
      return $this;
    }

    /**
     * @return condition
     */
    public function getCondition()
    {
      return $this->condition;
    }

    /**
     * @param condition $condition
     * @return \TextKernel\search\queryPart
     */
    public function setCondition($condition)
    {
      $this->condition = $condition;
      return $this;
    }

    /**
     * @return float
     */
    public function getWeight()
    {
      return $this->weight;
    }

    /**
     * @param float $weight
     * @return \TextKernel\search\queryPart
     */
    public function setWeight($weight)
    {
      $this->weight = $weight;
      return $this;
    }

    /**
     * @return queryPartItem[]
     */
    public function getItems()
    {
      return $this->items;
    }

    /**
     * @param queryPartItem[] $items
     * @return \TextKernel\search\queryPart
     */
    public function setItems(array $items = null)
    {
      $this->items = $items;
      return $this;
    }

}
