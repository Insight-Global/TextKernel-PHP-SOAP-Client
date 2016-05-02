<?php

namespace TextKernel\projects;

class assessments
{

    /**
     * @var searcherAssessments $searcherAssessments
     */
    protected $searcherAssessments = null;

    /**
     * @param searcherAssessments $searcherAssessments
     */
    public function __construct($searcherAssessments)
    {
      $this->searcherAssessments = $searcherAssessments;
    }

    /**
     * @return searcherAssessments
     */
    public function getSearcherAssessments()
    {
      return $this->searcherAssessments;
    }

    /**
     * @param searcherAssessments $searcherAssessments
     * @return \TextKernel\projects\assessments
     */
    public function setSearcherAssessments($searcherAssessments)
    {
      $this->searcherAssessments = $searcherAssessments;
      return $this;
    }

}
