<?php

namespace TextKernel\assessments;

class AssessmentsServiceService extends \SoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'saveAssessmentWithToken' => 'TextKernel\\assessments\\saveAssessmentWithToken',
      'saveAssessmentWithTokenResponse' => 'TextKernel\\assessments\\saveAssessmentWithTokenResponse',
      'faultBean' => 'TextKernel\\assessments\\faultBean',
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
        $wsdl = 'https://home.textkernel.nl/SearchBox/soap/assessments?wsdl';
      }
      parent::__construct($wsdl, $options);
    }

    /**
     * @param saveAssessmentWithToken $parameters
     * @return saveAssessmentWithTokenResponse
     */
    public function saveAssessmentWithToken(saveAssessmentWithToken $parameters)
    {
      return $this->__soapCall('saveAssessmentWithToken', array($parameters));
    }

}
