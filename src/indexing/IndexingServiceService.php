<?php

namespace TextKernel\indexing;

class IndexingServiceService extends \SoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'add' => 'TextKernel\\indexing\\add',
      'addResponse' => 'TextKernel\\indexing\\addResponse',
      'faultBean' => 'TextKernel\\indexing\\faultBean',
      'reindex' => 'TextKernel\\indexing\\reindex',
      'reindexResponse' => 'TextKernel\\indexing\\reindexResponse',
      'reindexingStatus' => 'TextKernel\\indexing\\reindexingStatus',
      'delete' => 'TextKernel\\indexing\\delete',
      'deleteResponse' => 'TextKernel\\indexing\\deleteResponse',
      'update' => 'TextKernel\\indexing\\update',
      'updateResponse' => 'TextKernel\\indexing\\updateResponse',
      'getReindexingStatus' => 'TextKernel\\indexing\\getReindexingStatus',
      'getReindexingStatusResponse' => 'TextKernel\\indexing\\getReindexingStatusResponse',
      'recreateTags' => 'TextKernel\\indexing\\recreateTags',
      'recreateTagsResponse' => 'TextKernel\\indexing\\recreateTagsResponse',
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
        $wsdl = 'https://home.textkernel.nl/SearchBox/soap/indexing?wsdl';
      }
      parent::__construct($wsdl, $options);
    }

    /**
     * @param recreateTags $parameters
     * @return recreateTagsResponse
     */
    public function recreateTags(recreateTags $parameters)
    {
      return $this->__soapCall('recreateTags', array($parameters));
    }

    /**
     * @param reindex $parameters
     * @return reindexResponse
     */
    public function reindex(reindex $parameters)
    {
      return $this->__soapCall('reindex', array($parameters));
    }

    /**
     * @param getReindexingStatus $parameters
     * @return getReindexingStatusResponse
     */
    public function getReindexingStatus(getReindexingStatus $parameters)
    {
      return $this->__soapCall('getReindexingStatus', array($parameters));
    }

    /**
     * @param add $parameters
     * @return addResponse
     */
    public function add(add $parameters)
    {
      return $this->__soapCall('add', array($parameters));
    }

    /**
     * @param delete $parameters
     * @return deleteResponse
     */
    public function delete(delete $parameters)
    {
      return $this->__soapCall('delete', array($parameters));
    }

    /**
     * @param update $parameters
     * @return updateResponse
     */
    public function update(update $parameters)
    {
      return $this->__soapCall('update', array($parameters));
    }

}
