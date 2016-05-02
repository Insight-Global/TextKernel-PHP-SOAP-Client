<?php

namespace TextKernel\projects;

class savedSearch
{

    /**
     * @var string $projectID
     */
    protected $projectID = null;

    /**
     * @var string $name
     */
    protected $name = null;

    /**
     * @var string $state
     */
    protected $state = null;

    /**
     * @var emailPeriod $emailAlert
     */
    protected $emailAlert = null;

    /**
     * @var string $emailAddresses
     */
    protected $emailAddresses = null;

    /**
     * @var boolean $emailEmptyResults
     */
    protected $emailEmptyResults = null;

    /**
     * @param boolean $emailEmptyResults
     */
    public function __construct($emailEmptyResults)
    {
      $this->emailEmptyResults = $emailEmptyResults;
    }

    /**
     * @return string
     */
    public function getProjectID()
    {
      return $this->projectID;
    }

    /**
     * @param string $projectID
     * @return \TextKernel\projects\savedSearch
     */
    public function setProjectID($projectID)
    {
      $this->projectID = $projectID;
      return $this;
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
     * @return \TextKernel\projects\savedSearch
     */
    public function setName($name)
    {
      $this->name = $name;
      return $this;
    }

    /**
     * @return string
     */
    public function getState()
    {
      return $this->state;
    }

    /**
     * @param string $state
     * @return \TextKernel\projects\savedSearch
     */
    public function setState($state)
    {
      $this->state = $state;
      return $this;
    }

    /**
     * @return emailPeriod
     */
    public function getEmailAlert()
    {
      return $this->emailAlert;
    }

    /**
     * @param emailPeriod $emailAlert
     * @return \TextKernel\projects\savedSearch
     */
    public function setEmailAlert($emailAlert)
    {
      $this->emailAlert = $emailAlert;
      return $this;
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
     * @return \TextKernel\projects\savedSearch
     */
    public function setEmailAddresses($emailAddresses)
    {
      $this->emailAddresses = $emailAddresses;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getEmailEmptyResults()
    {
      return $this->emailEmptyResults;
    }

    /**
     * @param boolean $emailEmptyResults
     * @return \TextKernel\projects\savedSearch
     */
    public function setEmailEmptyResults($emailEmptyResults)
    {
      $this->emailEmptyResults = $emailEmptyResults;
      return $this;
    }

}
