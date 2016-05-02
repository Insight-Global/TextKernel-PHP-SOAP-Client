<?php

namespace TextKernel\search;

class tagcloud
{

    /**
     * @var string $field
     */
    protected $field = null;

    /**
     * @var string[] $items
     */
    protected $items = null;

    /**
     * @var int[] $weights
     */
    protected $weights = null;

    
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
     * @return \TextKernel\search\tagcloud
     */
    public function setField($field)
    {
      $this->field = $field;
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
     * @return \TextKernel\search\tagcloud
     */
    public function setItems(array $items = null)
    {
      $this->items = $items;
      return $this;
    }

    /**
     * @return int[]
     */
    public function getWeights()
    {
      return $this->weights;
    }

    /**
     * @param int[] $weights
     * @return \TextKernel\search\tagcloud
     */
    public function setWeights(array $weights = null)
    {
      $this->weights = $weights;
      return $this;
    }

}
