<?php

namespace TextKernel\savesearches;

class saveSearchWithToken
{

    /**
     * @var string $accessToken
     */
    protected $accessToken = null;

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
     * @var string $emailAlert
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
     * @var string $oldName
     */
    protected $oldName = null;

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
    public function getAccessToken()
    {
      return $this->accessToken;
    }

    /**
     * @param string $accessToken
     * @return \TextKernel\savesearches\saveSearchWithToken
     */
    public function setAccessToken($accessToken)
    {
      $this->accessToken = $accessToken;
      return $this;
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
     * @return \TextKernel\savesearches\saveSearchWithToken
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
     * @return \TextKernel\savesearches\saveSearchWithToken
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
     * @return \TextKernel\savesearches\saveSearchWithToken
     */
    public function setState($state)
    {
      $this->state = $state;
      return $this;
    }

    /**
     * @return string
     */
    public function getEmailAlert()
    {
      return $this->emailAlert;
    }

    /**
     * @param string $emailAlert
     * @return \TextKernel\savesearches\saveSearchWithToken
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
     * @return \TextKernel\savesearches\saveSearchWithToken
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
     * @return \TextKernel\savesearches\saveSearchWithToken
     */
    public function setEmailEmptyResults($emailEmptyResults)
    {
      $this->emailEmptyResults = $emailEmptyResults;
      return $this;
    }

    /**
     * @return string
     */
    public function getOldName()
    {
      return $this->oldName;
    }

    /**
     * @param string $oldName
     * @return \TextKernel\savesearches\saveSearchWithToken
     */
    public function setOldName($oldName)
    {
      $this->oldName = $oldName;
      return $this;
    }

}
