<?php

namespace TextKernel\projects;

class shares
{

    /**
     * @var string[] $sharedWithUsersRW
     */
    protected $sharedWithUsersRW = null;

    /**
     * @var string[] $sharedWithRolesRW
     */
    protected $sharedWithRolesRW = null;

    /**
     * @var string[] $sharedWithUsersRO
     */
    protected $sharedWithUsersRO = null;

    /**
     * @var string[] $sharedWithRolesRO
     */
    protected $sharedWithRolesRO = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string[]
     */
    public function getSharedWithUsersRW()
    {
      return $this->sharedWithUsersRW;
    }

    /**
     * @param string[] $sharedWithUsersRW
     * @return \TextKernel\projects\shares
     */
    public function setSharedWithUsersRW(array $sharedWithUsersRW = null)
    {
      $this->sharedWithUsersRW = $sharedWithUsersRW;
      return $this;
    }

    /**
     * @return string[]
     */
    public function getSharedWithRolesRW()
    {
      return $this->sharedWithRolesRW;
    }

    /**
     * @param string[] $sharedWithRolesRW
     * @return \TextKernel\projects\shares
     */
    public function setSharedWithRolesRW(array $sharedWithRolesRW = null)
    {
      $this->sharedWithRolesRW = $sharedWithRolesRW;
      return $this;
    }

    /**
     * @return string[]
     */
    public function getSharedWithUsersRO()
    {
      return $this->sharedWithUsersRO;
    }

    /**
     * @param string[] $sharedWithUsersRO
     * @return \TextKernel\projects\shares
     */
    public function setSharedWithUsersRO(array $sharedWithUsersRO = null)
    {
      $this->sharedWithUsersRO = $sharedWithUsersRO;
      return $this;
    }

    /**
     * @return string[]
     */
    public function getSharedWithRolesRO()
    {
      return $this->sharedWithRolesRO;
    }

    /**
     * @param string[] $sharedWithRolesRO
     * @return \TextKernel\projects\shares
     */
    public function setSharedWithRolesRO(array $sharedWithRolesRO = null)
    {
      $this->sharedWithRolesRO = $sharedWithRolesRO;
      return $this;
    }

}
