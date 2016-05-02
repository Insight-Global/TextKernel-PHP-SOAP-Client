<?php

namespace TextKernel\authentication;

class AuthenticationServiceService extends \SoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'invalidate' => 'TextKernel\\authentication\\invalidate',
      'invalidateResponse' => 'TextKernel\\authentication\\invalidateResponse',
      'faultBean' => 'TextKernel\\authentication\\faultBean',
      'accessWithoutPassword' => 'TextKernel\\authentication\\accessWithoutPassword',
      'accessWithoutPasswordResponse' => 'TextKernel\\authentication\\accessWithoutPasswordResponse',
      'authenticate' => 'TextKernel\\authentication\\authenticate',
      'accessOptions' => 'TextKernel\\authentication\\accessOptions',
      'StringMap' => 'TextKernel\\authentication\\StringMap',
      'StringMapEntry' => 'TextKernel\\authentication\\StringMapEntry',
      'CredentialsMap' => 'TextKernel\\authentication\\CredentialsMap',
      'CredentialsMapEntry' => 'TextKernel\\authentication\\CredentialsMapEntry',
      'credentials' => 'TextKernel\\authentication\\credentials',
      'userOptions' => 'TextKernel\\authentication\\userOptions',
      'authenticateResponse' => 'TextKernel\\authentication\\authenticateResponse',
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
        $wsdl = 'https://home.textkernel.nl/SearchBox/soap/authentication?wsdl';
      }
      parent::__construct($wsdl, $options);
    }

    /**
     * @param accessWithoutPassword $parameters
     * @return accessWithoutPasswordResponse
     */
    public function accessWithoutPassword(accessWithoutPassword $parameters)
    {
      return $this->__soapCall('accessWithoutPassword', array($parameters));
    }

    /**
     * @param invalidate $parameters
     * @return invalidateResponse
     */
    public function invalidate(invalidate $parameters)
    {
      return $this->__soapCall('invalidate', array($parameters));
    }

    /**
     * @param authenticate $parameters
     * @return authenticateResponse
     */
    public function authenticate(authenticate $parameters)
    {
      return $this->__soapCall('authenticate', array($parameters));
    }

}
