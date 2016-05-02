<?php

namespace TextKernel\search;

class SearchServiceService extends \SoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'stringArray' => 'TextKernel\\search\\stringArray',
      'searchWithState' => 'TextKernel\\search\\searchWithState',
      'accessOptions' => 'TextKernel\\search\\accessOptions',
      'StringMap' => 'TextKernel\\search\\StringMap',
      'StringMapEntry' => 'TextKernel\\search\\StringMapEntry',
      'CredentialsMap' => 'TextKernel\\search\\CredentialsMap',
      'CredentialsMapEntry' => 'TextKernel\\search\\CredentialsMapEntry',
      'credentials' => 'TextKernel\\search\\credentials',
      'searchWithStateResponse' => 'TextKernel\\search\\searchWithStateResponse',
      'searchResult' => 'TextKernel\\search\\searchResult',
      'facetCounts' => 'TextKernel\\search\\facetCounts',
      'entry' => 'TextKernel\\search\\entry',
      'synonyms' => 'TextKernel\\search\\synonyms',
      'resultItem' => 'TextKernel\\search\\resultItem',
      'queryPart' => 'TextKernel\\search\\queryPart',
      'queryPartItem' => 'TextKernel\\search\\queryPartItem',
      'itemCountMap' => 'TextKernel\\search\\itemCountMap',
      'itemCounts' => 'TextKernel\\search\\itemCounts',
      'tagcloud' => 'TextKernel\\search\\tagcloud',
      'synonymSection' => 'TextKernel\\search\\synonymSection',
      'synonymItem' => 'TextKernel\\search\\synonymItem',
      'faultBean' => 'TextKernel\\search\\faultBean',
      'getMetadataWithToken' => 'TextKernel\\search\\getMetadataWithToken',
      'getMetadataWithTokenResponse' => 'TextKernel\\search\\getMetadataWithTokenResponse',
      'compositeMetadata' => 'TextKernel\\search\\compositeMetadata',
      'searcherMetadata' => 'TextKernel\\search\\searcherMetadata',
      'fieldNameLabels' => 'TextKernel\\search\\fieldNameLabels',
      'linkNameLabels' => 'TextKernel\\search\\linkNameLabels',
      'facet' => 'TextKernel\\search\\facet',
      'resultFieldLabels' => 'TextKernel\\search\\resultFieldLabels',
      'resultField' => 'TextKernel\\search\\resultField',
      'documentIdItem' => 'TextKernel\\search\\documentIdItem',
      'documentIdLink' => 'TextKernel\\search\\documentIdLink',
      'actionItem' => 'TextKernel\\search\\actionItem',
      'actionLink' => 'TextKernel\\search\\actionLink',
      'savingConfig' => 'TextKernel\\search\\savingConfig',
      'headerLink' => 'TextKernel\\search\\headerLink',
      'getMetadata' => 'TextKernel\\search\\getMetadata',
      'userOptions' => 'TextKernel\\search\\userOptions',
      'getMetadataResponse' => 'TextKernel\\search\\getMetadataResponse',
      'search' => 'TextKernel\\search\\search',
      'searchRequest' => 'TextKernel\\search\\searchRequest',
      'searchResponse' => 'TextKernel\\search\\searchResponse',
      'searchWithToken' => 'TextKernel\\search\\searchWithToken',
      'searchWithTokenResponse' => 'TextKernel\\search\\searchWithTokenResponse',
      'synonymSectionArray' => 'TextKernel\\search\\synonymSectionArray',
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
        $wsdl = 'https://home.textkernel.nl/SearchBox/soap/search?wsdl';
      }
      parent::__construct($wsdl, $options);
    }

    /**
     * @param getMetadata $parameters
     * @return getMetadataResponse
     */
    public function getMetadata(getMetadata $parameters)
    {
      return $this->__soapCall('getMetadata', array($parameters));
    }

    /**
     * @param searchWithToken $parameters
     * @return searchWithTokenResponse
     */
    public function searchWithToken(searchWithToken $parameters)
    {
      return $this->__soapCall('searchWithToken', array($parameters));
    }

    /**
     * @param getMetadataWithToken $parameters
     * @return getMetadataWithTokenResponse
     */
    public function getMetadataWithToken(getMetadataWithToken $parameters)
    {
      return $this->__soapCall('getMetadataWithToken', array($parameters));
    }

    /**
     * @param searchWithState $parameters
     * @return searchWithStateResponse
     */
    public function searchWithState(searchWithState $parameters)
    {
      return $this->__soapCall('searchWithState', array($parameters));
    }

    /**
     * @param search $parameters
     * @return searchResponse
     */
    public function search(search $parameters)
    {
      return $this->__soapCall('search', array($parameters));
    }

}
