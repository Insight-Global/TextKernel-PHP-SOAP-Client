<?php

namespace TextKernel\saveresults;

class SaveResultsServiceService extends \SoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'retrieveMetadataWithToken' => 'TextKernel\\saveresults\\retrieveMetadataWithToken',
      'retrieveMetadataWithTokenResponse' => 'TextKernel\\saveresults\\retrieveMetadataWithTokenResponse',
      'StringMap' => 'TextKernel\\saveresults\\StringMap',
      'StringMapEntry' => 'TextKernel\\saveresults\\StringMapEntry',
      'faultBean' => 'TextKernel\\saveresults\\faultBean',
      'saveResults' => 'TextKernel\\saveresults\\saveResults',
      'savedResult' => 'TextKernel\\saveresults\\savedResult',
      'saveResultsResponse' => 'TextKernel\\saveresults\\saveResultsResponse',
      'listResults' => 'TextKernel\\saveresults\\listResults',
      'listResultsResponse' => 'TextKernel\\saveresults\\listResultsResponse',
      'savedResults' => 'TextKernel\\saveresults\\savedResults',
      'searcherResults' => 'TextKernel\\saveresults\\searcherResults',
      'entry' => 'TextKernel\\saveresults\\entry',
      'deleteResults' => 'TextKernel\\saveresults\\deleteResults',
      'deleteResultsResponse' => 'TextKernel\\saveresults\\deleteResultsResponse',
      'saveResultsWithToken' => 'TextKernel\\saveresults\\saveResultsWithToken',
      'saveResultsWithTokenResponse' => 'TextKernel\\saveresults\\saveResultsWithTokenResponse',
      'retrieveMetadata' => 'TextKernel\\saveresults\\retrieveMetadata',
      'retrieveMetadataResponse' => 'TextKernel\\saveresults\\retrieveMetadataResponse',
      'deleteResultsWithToken' => 'TextKernel\\saveresults\\deleteResultsWithToken',
      'deleteResultsWithTokenResponse' => 'TextKernel\\saveresults\\deleteResultsWithTokenResponse',
      'listResultsWithToken' => 'TextKernel\\saveresults\\listResultsWithToken',
      'listResultsWithTokenResponse' => 'TextKernel\\saveresults\\listResultsWithTokenResponse',
      'savedResultArray' => 'TextKernel\\saveresults\\savedResultArray',
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
        $wsdl = 'https://home.textkernel.nl/SearchBox/soap/saveresults?wsdl';
      }
      parent::__construct($wsdl, $options);
    }

    /**
     * @param deleteResults $parameters
     * @return deleteResultsResponse
     */
    public function deleteResults(deleteResults $parameters)
    {
      return $this->__soapCall('deleteResults', array($parameters));
    }

    /**
     * @param listResults $parameters
     * @return listResultsResponse
     */
    public function listResults(listResults $parameters)
    {
      return $this->__soapCall('listResults', array($parameters));
    }

    /**
     * @param saveResults $parameters
     * @return saveResultsResponse
     */
    public function saveResults(saveResults $parameters)
    {
      return $this->__soapCall('saveResults', array($parameters));
    }

    /**
     * @param retrieveMetadata $parameters
     * @return retrieveMetadataResponse
     */
    public function retrieveMetadata(retrieveMetadata $parameters)
    {
      return $this->__soapCall('retrieveMetadata', array($parameters));
    }

    /**
     * @param saveResultsWithToken $parameters
     * @return saveResultsWithTokenResponse
     */
    public function saveResultsWithToken(saveResultsWithToken $parameters)
    {
      return $this->__soapCall('saveResultsWithToken', array($parameters));
    }

    /**
     * @param deleteResultsWithToken $parameters
     * @return deleteResultsWithTokenResponse
     */
    public function deleteResultsWithToken(deleteResultsWithToken $parameters)
    {
      return $this->__soapCall('deleteResultsWithToken', array($parameters));
    }

    /**
     * @param retrieveMetadataWithToken $parameters
     * @return retrieveMetadataWithTokenResponse
     */
    public function retrieveMetadataWithToken(retrieveMetadataWithToken $parameters)
    {
      return $this->__soapCall('retrieveMetadataWithToken', array($parameters));
    }

    /**
     * @param listResultsWithToken $parameters
     * @return listResultsWithTokenResponse
     */
    public function listResultsWithToken(listResultsWithToken $parameters)
    {
      return $this->__soapCall('listResultsWithToken', array($parameters));
    }

}
