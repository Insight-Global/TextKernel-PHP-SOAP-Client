<?php

namespace TextKernel\search;

class synonymItem
{

    /**
     * @var string $lang
     */
    protected $lang = null;

    /**
     * @var boolean $autoExpansion
     */
    protected $autoExpansion = null;

    /**
     * @var string[] $values
     */
    protected $values = null;

    /**
     * @param boolean $autoExpansion
     */
    public function __construct($autoExpansion)
    {
      $this->autoExpansion = $autoExpansion;
    }

    /**
     * @return string
     */
    public function getLang()
    {
      return $this->lang;
    }

    /**
     * @param string $lang
     * @return \TextKernel\search\synonymItem
     */
    public function setLang($lang)
    {
      $this->lang = $lang;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getAutoExpansion()
    {
      return $this->autoExpansion;
    }

    /**
     * @param boolean $autoExpansion
     * @return \TextKernel\search\synonymItem
     */
    public function setAutoExpansion($autoExpansion)
    {
      $this->autoExpansion = $autoExpansion;
      return $this;
    }

    /**
     * @return string[]
     */
    public function getValues()
    {
      return $this->values;
    }

    /**
     * @param string[] $values
     * @return \TextKernel\search\synonymItem
     */
    public function setValues(array $values = null)
    {
      $this->values = $values;
      return $this;
    }

}
