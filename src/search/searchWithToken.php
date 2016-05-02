<?php

namespace TextKernel\search;

class searchWithToken
{

    /**
     * @var string $accessToken
     */
    protected $accessToken = null;

    /**
     * @var searchRequest $request
     */
    protected $request = null;

    
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
     * @return \TextKernel\search\searchWithToken
     */
    public function setAccessToken($accessToken)
    {
      $this->accessToken = $accessToken;
      return $this;
    }

    /**
     * @return searchRequest
     */
    public function getRequest()
    {
      return $this->request;
    }

    /**
     * @param searchRequest $request
     * @return \TextKernel\search\searchWithToken
     */
    public function setRequest($request)
    {
      $this->request = $request;
      return $this;
    }

}
