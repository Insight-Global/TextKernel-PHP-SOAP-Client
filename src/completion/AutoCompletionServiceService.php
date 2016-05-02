<?php

namespace TextKernel\completion;

class AutoCompletionServiceService extends \SoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'complete' => 'TextKernel\\completion\\complete',
      'completeResponse' => 'TextKernel\\completion\\completeResponse',
      'faultBean' => 'TextKernel\\completion\\faultBean',
      'completeWithToken' => 'TextKernel\\completion\\completeWithToken',
      'completeWithTokenResponse' => 'TextKernel\\completion\\completeWithTokenResponse',
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
        $wsdl = 'https://home.textkernel.nl/SearchBox/soap/completion?wsdl';
      }
      parent::__construct($wsdl, $options);
    }

    /**
     * @param completeWithToken $parameters
     * @return completeWithTokenResponse
     */
    public function completeWithToken(completeWithToken $parameters)
    {
      return $this->__soapCall('completeWithToken', array($parameters));
    }

    /**
     * @param complete $parameters
     * @return completeResponse
     */
    public function complete(complete $parameters)
    {
      return $this->__soapCall('complete', array($parameters));
    }

}
