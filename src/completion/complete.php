<?php

namespace TextKernel\completion;

class complete
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
    public function getEnvironment()
    {
      return $this->environment;
    }

    /**
     * @param string $environment
     * @return \TextKernel\completion\complete
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
     * @return \TextKernel\completion\complete
     */
    public function setPassword($password)
    {
      $this->password = $password;
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
     * @return \TextKernel\completion\complete
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
     * @return \TextKernel\completion\complete
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
     * @return \TextKernel\completion\complete
     */
    public function setInput($input)
    {
      $this->input = $input;
      return $this;
    }

}
