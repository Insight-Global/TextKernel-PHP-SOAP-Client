<?php

namespace TextKernel\completion;

class completeWithToken
{

    /**
     * @var string $accessToken
     */
    protected $accessToken = null;

    /**
     * @var string $field
     */
    protected $field = null;

    /**
     * @var string $language
     */
    protected $language = null;

    /**
     * @var string $input
     */
    protected $input = null;

    
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
     * @return \TextKernel\completion\completeWithToken
     */
    public function setAccessToken($accessToken)
    {
      $this->accessToken = $accessToken;
      return $this;
    }

    /**
     * @return string
     */
    public function getField()
    {
      return $this->field;
    }

    /**
     * @param string $field
     * @return \TextKernel\completion\completeWithToken
     */
    public function setField($field)
    {
      $this->field = $field;
      return $this;
    }

    /**
     * @return string
     */
    public function getLanguage()
    {
      return $this->language;
    }

    /**
     * @param string $language
     * @return \TextKernel\completion\completeWithToken
     */
    public function setLanguage($language)
    {
      $this->language = $language;
      return $this;
    }

    /**
     * @return string
     */
    public function getInput()
    {
      return $this->input;
    }

    /**
     * @param string $input
     * @return \TextKernel\completion\completeWithToken
     */
    public function setInput($input)
    {
      $this->input = $input;
      return $this;
    }

}
