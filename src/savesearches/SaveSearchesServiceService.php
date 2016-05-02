<?php

namespace TextKernel\savesearches;

class SaveSearchesServiceService extends \SoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'deleteSearch' => 'TextKernel\\savesearches\\deleteSearch',
      'deleteSearchResponse' => 'TextKernel\\savesearches\\deleteSearchResponse',
      'faultBean' => 'TextKernel\\savesearches\\faultBean',
      'listSearchesWithToken' => 'TextKernel\\savesearches\\listSearchesWithToken',
      'listSearchesWithTokenResponse' => 'TextKernel\\savesearches\\listSearchesWithTokenResponse',
      'savedSearch' => 'TextKernel\\savesearches\\savedSearch',
      'deleteSearchWithToken' => 'TextKernel\\savesearches\\deleteSearchWithToken',
      'deleteSearchWithTokenResponse' => 'TextKernel\\savesearches\\deleteSearchWithTokenResponse',
      'saveSearchWithToken' => 'TextKernel\\savesearches\\saveSearchWithToken',
      'saveSearchWithTokenResponse' => 'TextKernel\\savesearches\\saveSearchWithTokenResponse',
      'saveSearch' => 'TextKernel\\savesearches\\saveSearch',
      'saveSearchResponse' => 'TextKernel\\savesearches\\saveSearchResponse',
      'listSearches' => 'TextKernel\\savesearches\\listSearches',
      'listSearchesResponse' => 'TextKernel\\savesearches\\listSearchesResponse',
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
        $wsdl = 'https://home.textkernel.nl/SearchBox/soap/savesearches?wsdl';
      }
      parent::__construct($wsdl, $options);
    }

    /**
     * @param deleteSearch $parameters
     * @return deleteSearchResponse
     */
    public function deleteSearch(deleteSearch $parameters)
    {
      return $this->__soapCall('deleteSearch', array($parameters));
    }

    /**
     * @param listSearches $parameters
     * @return listSearchesResponse
     */
    public function listSearches(listSearches $parameters)
    {
      return $this->__soapCall('listSearches', array($parameters));
    }

    /**
     * @param saveSearch $parameters
     * @return saveSearchResponse
     */
    public function saveSearch(saveSearch $parameters)
    {
      return $this->__soapCall('saveSearch', array($parameters));
    }

    /**
     * @param deleteSearchWithToken $parameters
     * @return deleteSearchWithTokenResponse
     */
    public function deleteSearchWithToken(deleteSearchWithToken $parameters)
    {
      return $this->__soapCall('deleteSearchWithToken', array($parameters));
    }

    /**
     * @param listSearchesWithToken $parameters
     * @return listSearchesWithTokenResponse
     */
    public function listSearchesWithToken(listSearchesWithToken $parameters)
    {
      return $this->__soapCall('listSearchesWithToken', array($parameters));
    }

    /**
     * @param saveSearchWithToken $parameters
     * @return saveSearchWithTokenResponse
     */
    public function saveSearchWithToken(saveSearchWithToken $parameters)
    {
      return $this->__soapCall('saveSearchWithToken', array($parameters));
    }

}
