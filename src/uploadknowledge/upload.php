<?php

namespace TextKernel\uploadknowledge;

class upload
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
     * @var string $filename
     */
    protected $filename = null;

    /**
     * @var string $fileContent
     */
    protected $fileContent = null;

    
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
     * @return \TextKernel\uploadknowledge\upload
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
     * @return \TextKernel\uploadknowledge\upload
     */
    public function setPassword($password)
    {
      $this->password = $password;
      return $this;
    }

    /**
     * @return string
     */
    public function getFilename()
    {
      return $this->filename;
    }

    /**
     * @param string $filename
     * @return \TextKernel\uploadknowledge\upload
     */
    public function setFilename($filename)
    {
      $this->filename = $filename;
      return $this;
    }

    /**
     * @return string
     */
    public function getFileContent()
    {
      return $this->fileContent;
    }

    /**
     * @param string $fileContent
     * @return \TextKernel\uploadknowledge\upload
     */
    public function setFileContent($fileContent)
    {
      $this->fileContent = $fileContent;
      return $this;
    }

}
