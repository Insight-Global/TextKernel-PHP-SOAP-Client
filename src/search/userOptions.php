<?php

namespace TextKernel\search;

class userOptions
{

    /**
     * @var string $emailAddresses
     */
    protected $emailAddresses = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getEmailAddresses()
    {
      return $this->emailAddresses;
    }

    /**
     * @param string $emailAddresses
     * @return \TextKernel\search\userOptions
     */
    public function setEmailAddresses($emailAddresses)
    {
      $this->emailAddresses = $emailAddresses;
      return $this;
    }

}
