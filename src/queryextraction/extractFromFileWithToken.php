<?php

namespace TextKernel\queryextraction;

class extractFromFileWithToken
{

    /**
     * @var string $accessToken
     */
    protected $accessToken = null;

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
    public function getAccessToken()
    {
      return $this->accessToken;
    }

    /**
     * @param string $accessToken
     * @return \TextKernel\queryextraction\extractFromFileWithToken
     */
    public function setAccessToken($accessToken)
    {
      $this->accessToken = $accessToken;
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
     * @return \TextKernel\queryextraction\extractFromFileWithToken
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
     * @return \TextKernel\queryextraction\extractFromFileWithToken
     */
    public function setFileContent($fileContent)
    {
      $this->fileContent = $fileContent;
      return $this;
    }

}
