<?php

namespace TextKernel\search;

class getMetadataWithTokenResponse
{

    /**
     * @var compositeMetadata $return
     */
    protected $return = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return compositeMetadata
     */
    public function getReturn()
    {
      return $this->return;
    }

    /**
     * @param compositeMetadata $return
     * @return \TextKernel\search\getMetadataWithTokenResponse
     */
    public function setReturn($return)
    {
      $this->return = $return;
      return $this;
    }

}
