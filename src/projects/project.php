<?php

namespace TextKernel\projects;

class project
{

    /**
     * @var string $id
     */
    protected $id = null;

    /**
     * @var string $name
     */
    protected $name = null;

    /**
     * @var string $ownerID
     */
    protected $ownerID = null;

    /**
     * @var boolean $isDefault
     */
    protected $isDefault = null;

    /**
     * @var string $externalID
     */
    protected $externalID = null;

    /**
     * @var savedSearch[] $savedSearches
     */
    protected $savedSearches = null;

    /**
     * @var savedResults $savedResults
     */
    protected $savedResults = null;

    /**
     * @var assessments $assessments
     */
    protected $assessments = null;

    /**
     * @var shares $shares
     */
    protected $shares = null;

    /**
     * @var int $version
     */
    protected $version = null;

    /**
     * @var boolean $isShared
     */
    protected $isShared = null;

    /**
     * @var boolean $isReadOnly
     */
    protected $isReadOnly = null;

    /**
     * @param boolean $isDefault
     * @param int $version
     * @param boolean $isShared
     * @param boolean $isReadOnly
     */
    public function __construct($isDefault, $version, $isShared, $isReadOnly)
    {
      $this->isDefault = $isDefault;
      $this->version = $version;
      $this->isShared = $isShared;
      $this->isReadOnly = $isReadOnly;
    }

    /**
     * @return string
     */
    public function getId()
    {
      return $this->id;
    }

    /**
     * @param string $id
     * @return \TextKernel\projects\project
     */
    public function setId($id)
    {
      $this->id = $id;
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
     * @return \TextKernel\projects\project
     */
    public function setName($name)
    {
      $this->name = $name;
      return $this;
    }

    /**
     * @return string
     */
    public function getOwnerID()
    {
      return $this->ownerID;
    }

    /**
     * @param string $ownerID
     * @return \TextKernel\projects\project
     */
    public function setOwnerID($ownerID)
    {
      $this->ownerID = $ownerID;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsDefault()
    {
      return $this->isDefault;
    }

    /**
     * @param boolean $isDefault
     * @return \TextKernel\projects\project
     */
    public function setIsDefault($isDefault)
    {
      $this->isDefault = $isDefault;
      return $this;
    }

    /**
     * @return string
     */
    public function getExternalID()
    {
      return $this->externalID;
    }

    /**
     * @param string $externalID
     * @return \TextKernel\projects\project
     */
    public function setExternalID($externalID)
    {
      $this->externalID = $externalID;
      return $this;
    }

    /**
     * @return savedSearch[]
     */
    public function getSavedSearches()
    {
      return $this->savedSearches;
    }

    /**
     * @param savedSearch[] $savedSearches
     * @return \TextKernel\projects\project
     */
    public function setSavedSearches(array $savedSearches = null)
    {
      $this->savedSearches = $savedSearches;
      return $this;
    }

    /**
     * @return savedResults
     */
    public function getSavedResults()
    {
      return $this->savedResults;
    }

    /**
     * @param savedResults $savedResults
     * @return \TextKernel\projects\project
     */
    public function setSavedResults($savedResults)
    {
      $this->savedResults = $savedResults;
      return $this;
    }

    /**
     * @return assessments
     */
    public function getAssessments()
    {
      return $this->assessments;
    }

    /**
     * @param assessments $assessments
     * @return \TextKernel\projects\project
     */
    public function setAssessments($assessments)
    {
      $this->assessments = $assessments;
      return $this;
    }

    /**
     * @return shares
     */
    public function getShares()
    {
      return $this->shares;
    }

    /**
     * @param shares $shares
     * @return \TextKernel\projects\project
     */
    public function setShares($shares)
    {
      $this->shares = $shares;
      return $this;
    }

    /**
     * @return int
     */
    public function getVersion()
    {
      return $this->version;
    }

    /**
     * @param int $version
     * @return \TextKernel\projects\project
     */
    public function setVersion($version)
    {
      $this->version = $version;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsShared()
    {
      return $this->isShared;
    }

    /**
     * @param boolean $isShared
     * @return \TextKernel\projects\project
     */
    public function setIsShared($isShared)
    {
      $this->isShared = $isShared;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsReadOnly()
    {
      return $this->isReadOnly;
    }

    /**
     * @param boolean $isReadOnly
     * @return \TextKernel\projects\project
     */
    public function setIsReadOnly($isReadOnly)
    {
      $this->isReadOnly = $isReadOnly;
      return $this;
    }

}
