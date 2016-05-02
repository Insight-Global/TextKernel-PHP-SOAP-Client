<?php

namespace TextKernel\savesearches;

class saveSearch
{

    /**
     * @var string $environment
     */
    protected $environment = null;

    /**
     * @var string $password
     */
    protected $password = null;

    /**
     * @var string $user
     */
    protected $user = null;

    /**
     * @var string[] $accessRoles
     */
    protected $accessRoles = null;

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
    public function getEnvironment()
    {
      return $this->environment;
    }

    /**
     * @param string $environment
     * @return \TextKernel\savesearches\saveSearch
     */
    public function setEnvironment($environment)
    {
      $this->environment = $environment;
      return $this;
    }

    /**
     * @return string
     */
    public function getPassword()
    {
      return $this->password;
    }

    /**
     * @param string $password
     * @return \TextKernel\savesearches\saveSearch
     */
    public function setPassword($password)
    {
      $this->password = $password;
      return $this;
    }

    /**
     * @return string
     */
    public function getUser()
    {
      return $this->user;
    }

    /**
     * @param string $user
     * @return \TextKernel\savesearches\saveSearch
     */
    public function setUser($user)
    {
      $this->user = $user;
      return $this;
    }

    /**
     * @return string[]
     */
    public function getAccessRoles()
    {
      return $this->accessRoles;
    }

    /**
     * @param string[] $accessRoles
     * @return \TextKernel\savesearches\saveSearch
     */
    public function setAccessRoles(array $accessRoles = null)
    {
      $this->accessRoles = $accessRoles;
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
     * @return \TextKernel\savesearches\saveSearch
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
     * @return \TextKernel\savesearches\saveSearch
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
     * @return \TextKernel\savesearches\saveSearch
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
     * @return \TextKernel\savesearches\saveSearch
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
     * @return \TextKernel\savesearches\saveSearch
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
     * @return \TextKernel\savesearches\saveSearch
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
     * @return \TextKernel\savesearches\saveSearch
     */
    public function setOldName($oldName)
    {
      $this->oldName = $oldName;
      return $this;
    }

}
