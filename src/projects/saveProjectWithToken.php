<?php

namespace TextKernel\projects;

class saveProjectWithToken
{

    /**
     * @var string $accessToken
     */
    protected $accessToken = null;

    /**
     * @var string $name
     */
    protected $name = null;

    /**
     * @var string $externalID
     */
    protected $externalID = null;

    /**
     * @var shares $shares
     */
    protected $shares = null;

    
    public function __construct()
    {
    
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
     * @return \TextKernel\projects\saveProjectWithToken
     */
    public function setAccessToken($accessToken)
    {
      $this->accessToken = $accessToken;
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
     * @return \TextKernel\projects\saveProjectWithToken
     */
    public function setName($name)
    {
      $this->name = $name;
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
     * @return \TextKernel\projects\saveProjectWithToken
     */
    public function setExternalID($externalID)
    {
      $this->externalID = $externalID;
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
     * @return \TextKernel\projects\saveProjectWithToken
     */
    public function setShares($shares)
    {
      $this->shares = $shares;
      return $this;
    }

}
