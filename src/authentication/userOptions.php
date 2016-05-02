<?php

namespace TextKernel\authentication;

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
     * @return \TextKernel\authentication\userOptions
     */
    public function setEmailAddresses($emailAddresses)
    {
      $this->emailAddresses = $emailAddresses;
      return $this;
    }

}
