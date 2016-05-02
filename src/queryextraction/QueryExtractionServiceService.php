<?php

namespace TextKernel\queryextraction;

class QueryExtractionServiceService extends \SoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'extractWithToken' => 'TextKernel\\queryextraction\\extractWithToken',
      'extractWithTokenResponse' => 'TextKernel\\queryextraction\\extractWithTokenResponse',
      'faultBean' => 'TextKernel\\queryextraction\\faultBean',
      'extractFromUrl' => 'TextKernel\\queryextraction\\extractFromUrl',
      'extractFromUrlResponse' => 'TextKernel\\queryextraction\\extractFromUrlResponse',
      'extractFromUrlWithToken' => 'TextKernel\\queryextraction\\extractFromUrlWithToken',
      'extractFromUrlWithTokenResponse' => 'TextKernel\\queryextraction\\extractFromUrlWithTokenResponse',
      'extractFromFile' => 'TextKernel\\queryextraction\\extractFromFile',
      'extractFromFileResponse' => 'TextKernel\\queryextraction\\extractFromFileResponse',
      'extractFromFileWithToken' => 'TextKernel\\queryextraction\\extractFromFileWithToken',
      'extractFromFileWithTokenResponse' => 'TextKernel\\queryextraction\\extractFromFileWithTokenResponse',
      'extract' => 'TextKernel\\queryextraction\\extract',
      'extractResponse' => 'TextKernel\\queryextraction\\extractResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(), $wsdl = null)
    {
      foreach (self::$classmap as $key => $value) {
        if (!isset($options['classmap'][$key])) {
          $options['classmap'][$key] = $value;
        }
      }
      $options = array_merge(array (
      'features' => 1,
    ), $options);
      if (!$wsdl) {
        $wsdl = 'https://home.textkernel.nl/SearchBox/soap/queryextraction?wsdl';
      }
      parent::__construct($wsdl, $options);
    }

    /**
     * @param extractFromFile $parameters
     * @return extractFromFileResponse
     */
    public function extractFromFile(extractFromFile $parameters)
    {
      return $this->__soapCall('extractFromFile', array($parameters));
    }

    /**
     * @param extractFromUrl $parameters
     * @return extractFromUrlResponse
     */
    public function extractFromUrl(extractFromUrl $parameters)
    {
      return $this->__soapCall('extractFromUrl', array($parameters));
    }

    /**
     * @param extractWithToken $parameters
     * @return extractWithTokenResponse
     */
    public function extractWithToken(extractWithToken $parameters)
    {
      return $this->__soapCall('extractWithToken', array($parameters));
    }

    /**
     * @param extractFromFileWithToken $parameters
     * @return extractFromFileWithTokenResponse
     */
    public function extractFromFileWithToken(extractFromFileWithToken $parameters)
    {
      return $this->__soapCall('extractFromFileWithToken', array($parameters));
    }

    /**
     * @param extractFromUrlWithToken $parameters
     * @return extractFromUrlWithTokenResponse
     */
    public function extractFromUrlWithToken(extractFromUrlWithToken $parameters)
    {
      return $this->__soapCall('extractFromUrlWithToken', array($parameters));
    }

    /**
     * @param extract $parameters
     * @return extractResponse
     */
    public function extract(extract $parameters)
    {
      return $this->__soapCall('extract', array($parameters));
    }

}
