<?php

namespace TextKernel\search;

class headerLink
{

    /**
     * @var string $name
     */
    protected $name = null;

    /**
     * @var string $url
     */
    protected $url = null;

    /**
     * @var string $target
     */
    protected $target = null;

    /**
     * @var string $label
     */
    protected $label = null;

    
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
     * @return \TextKernel\search\headerLink
     */
    public function setName($name)
    {
      $this->name = $name;
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
     * @return \TextKernel\search\headerLink
     */
    public function setUrl($url)
    {
      $this->url = $url;
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
     * @return \TextKernel\search\headerLink
     */
    public function setTarget($target)
    {
      $this->target = $target;
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
     * @return \TextKernel\search\headerLink
     */
    public function setLabel($label)
    {
      $this->label = $label;
      return $this;
    }

}
