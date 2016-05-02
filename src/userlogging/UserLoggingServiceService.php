<?php

namespace TextKernel\userlogging;

class UserLoggingServiceService extends \SoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'logWithToken' => 'TextKernel\\userlogging\\logWithToken',
      'logMessage' => 'TextKernel\\userlogging\\logMessage',
      'logWithTokenResponse' => 'TextKernel\\userlogging\\logWithTokenResponse',
      'faultBean' => 'TextKernel\\userlogging\\faultBean',
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
        $wsdl = 'https://home.textkernel.nl/SearchBox/soap/userlogging?wsdl';
      }
      parent::__construct($wsdl, $options);
    }

    /**
     * @param logWithToken $parameters
     * @return logWithTokenResponse
     */
    public function logWithToken(logWithToken $parameters)
    {
      return $this->__soapCall('logWithToken', array($parameters));
    }

}
