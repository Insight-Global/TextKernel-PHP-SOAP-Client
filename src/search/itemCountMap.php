<?php

namespace TextKernel\search;

class itemCountMap
{

    /**
     * @var itemCounts $itemCounts
     */
    protected $itemCounts = null;

    /**
     * @param itemCounts $itemCounts
     */
    public function __construct($itemCounts)
    {
      $this->itemCounts = $itemCounts;
    }

    /**
     * @return itemCounts
     */
    public function getItemCounts()
    {
      return $this->itemCounts;
    }

    /**
     * @param itemCounts $itemCounts
     * @return \TextKernel\search\itemCountMap
     */
    public function setItemCounts($itemCounts)
    {
      $this->itemCounts = $itemCounts;
      return $this;
    }

}
