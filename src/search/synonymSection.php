<?php

namespace TextKernel\search;

class synonymSection
{

    /**
     * @var string $name
     */
    protected $name = null;

    /**
     * @var boolean $collapsed
     */
    protected $collapsed = null;

    /**
     * @var synonymItem[] $items
     */
    protected $items = null;

    /**
     * @param boolean $collapsed
     */
    public function __construct($collapsed)
    {
      $this->collapsed = $collapsed;
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
     * @return \TextKernel\search\synonymSection
     */
    public function setName($name)
    {
      $this->name = $name;
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
     * @return \TextKernel\search\synonymSection
     */
    public function setCollapsed($collapsed)
    {
      $this->collapsed = $collapsed;
      return $this;
    }

    /**
     * @return synonymItem[]
     */
    public function getItems()
    {
      return $this->items;
    }

    /**
     * @param synonymItem[] $items
     * @return \TextKernel\search\synonymSection
     */
    public function setItems(array $items = null)
    {
      $this->items = $items;
      return $this;
    }

}
