<?php

namespace TextKernel\indexing;

class reindex
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
     * @var \DateTime $deltaTime
     */
    protected $deltaTime = null;

    
    public function __construct()
    {
    
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
     * @return \TextKernel\indexing\reindex
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
     * @return \TextKernel\indexing\reindex
     */
    public function setPassword($password)
    {
      $this->password = $password;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDeltaTime()
    {
      if ($this->deltaTime == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->deltaTime);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $deltaTime
     * @return \TextKernel\indexing\reindex
     */
    public function setDeltaTime(\DateTime $deltaTime = null)
    {
      if ($deltaTime == null) {
       $this->deltaTime = null;
      } else {
        $this->deltaTime = $deltaTime->format(\DateTime::ATOM);
      }
      return $this;
    }

}
