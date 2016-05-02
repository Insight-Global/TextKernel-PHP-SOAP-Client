<?php

namespace TextKernel\search;

class queryPartItem
{

    /**
     * @var string $value
     */
    protected $value = null;

    /**
     * @var string[] $synonyms
     */
    protected $synonyms = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getValue()
    {
      return $this->value;
    }

    /**
     * @param string $value
     * @return \TextKernel\search\queryPartItem
     */
    public function setValue($value)
    {
      $this->value = $value;
      return $this;
    }

    /**
     * @return string[]
     */
    public function getSynonyms()
    {
      return $this->synonyms;
    }

    /**
     * @param string[] $synonyms
     * @return \TextKernel\search\queryPartItem
     */
    public function setSynonyms(array $synonyms = null)
    {
      $this->synonyms = $synonyms;
      return $this;
    }

}
