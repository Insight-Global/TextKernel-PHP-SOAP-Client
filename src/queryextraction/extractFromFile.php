<?php

namespace TextKernel\queryextraction;

class extractFromFile
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
     * @var base64Binary $fileContent
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
     * @return \TextKernel\queryextraction\extractFromFile
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
     * @return \TextKernel\queryextraction\extractFromFile
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
     * @return \TextKernel\queryextraction\extractFromFile
     */
    public function setFilename($filename)
    {
      $this->filename = $filename;
      return $this;
    }

    /**
     * @return base64Binary
     */
    public function getFileContent()
    {
      return $this->fileContent;
    }

    /**
     * @param base64Binary $fileContent
     * @return \TextKernel\queryextraction\extractFromFile
     */
    public function setFileContent($fileContent)
    {
      $this->fileContent = $fileContent;
      return $this;
    }

}
