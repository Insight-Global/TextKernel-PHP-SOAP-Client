<?php

namespace TextKernel\projects;

class projectResponse
{

    /**
     * @var project[] $projects
     */
    protected $projects = null;

    /**
     * @var string[] $deleted
     */
    protected $deleted = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return project[]
     */
    public function getProjects()
    {
      return $this->projects;
    }

    /**
     * @param project[] $projects
     * @return \TextKernel\projects\projectResponse
     */
    public function setProjects(array $projects = null)
    {
      $this->projects = $projects;
      return $this;
    }

    /**
     * @return string[]
     */
    public function getDeleted()
    {
      return $this->deleted;
    }

    /**
     * @param string[] $deleted
     * @return \TextKernel\projects\projectResponse
     */
    public function setDeleted(array $deleted = null)
    {
      $this->deleted = $deleted;
      return $this;
    }

}
