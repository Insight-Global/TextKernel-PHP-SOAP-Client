<?php

namespace TextKernel\queryextraction;

class extractFromUrlWithToken
{

    /**
     * @var string $accessToken
     */
    protected $accessToken = null;

    /**
     * @var string $url
     */
    protected $url = null;

    
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
     * @return \TextKernel\queryextraction\extractFromUrlWithToken
     */
    public function setAccessToken($accessToken)
    {
      $this->accessToken = $accessToken;
      return $this;
    }

    /**
     * @return string
     */
    public function getUrl()
    {
      return $this->url;
    }

    /**
     * @param string $url
     * @return \TextKernel\queryextraction\extractFromUrlWithToken
     */
    public function setUrl($url)
    {
      $this->url = $url;
      return $this;
    }

}
