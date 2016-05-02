<?php

namespace TextKernel\uploadknowledge;

class UploadKnowledgeServiceService extends \SoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'upload' => 'TextKernel\\uploadknowledge\\upload',
      'uploadResponse' => 'TextKernel\\uploadknowledge\\uploadResponse',
      'faultBean' => 'TextKernel\\uploadknowledge\\faultBean',
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
        $wsdl = 'https://home.textkernel.nl/SearchBox/soap/uploadknowledge?wsdl';
      }
      parent::__construct($wsdl, $options);
    }

    /**
     * @param upload $parameters
     * @return uploadResponse
     */
    public function upload(upload $parameters)
    {
      return $this->__soapCall('upload', array($parameters));
    }

}
