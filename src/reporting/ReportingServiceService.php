<?php

namespace TextKernel\reporting;

class ReportingServiceService extends \SoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'generateNumberReport' => 'TextKernel\\reporting\\generateNumberReport',
      'generateNumberReportResponse' => 'TextKernel\\reporting\\generateNumberReportResponse',
      'numberReport' => 'TextKernel\\reporting\\numberReport',
      'report' => 'TextKernel\\reporting\\report',
      'reportEntry' => 'TextKernel\\reporting\\reportEntry',
      'faultBean' => 'TextKernel\\reporting\\faultBean',
      'generateChartReportWithToken' => 'TextKernel\\reporting\\generateChartReportWithToken',
      'generateChartReportWithTokenResponse' => 'TextKernel\\reporting\\generateChartReportWithTokenResponse',
      'chartReport' => 'TextKernel\\reporting\\chartReport',
      'generateNumberReportWithToken' => 'TextKernel\\reporting\\generateNumberReportWithToken',
      'generateNumberReportWithTokenResponse' => 'TextKernel\\reporting\\generateNumberReportWithTokenResponse',
      'generateTableReportWithToken' => 'TextKernel\\reporting\\generateTableReportWithToken',
      'generateTableReportWithTokenResponse' => 'TextKernel\\reporting\\generateTableReportWithTokenResponse',
      'tableReport' => 'TextKernel\\reporting\\tableReport',
      'tableReportEntry' => 'TextKernel\\reporting\\tableReportEntry',
      'generateChartReport' => 'TextKernel\\reporting\\generateChartReport',
      'generateChartReportResponse' => 'TextKernel\\reporting\\generateChartReportResponse',
      'generateTableReport' => 'TextKernel\\reporting\\generateTableReport',
      'generateTableReportResponse' => 'TextKernel\\reporting\\generateTableReportResponse',
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
        $wsdl = 'https://home.textkernel.nl/SearchBox/soap/reporting?wsdl';
      }
      parent::__construct($wsdl, $options);
    }

    /**
     * @param generateNumberReport $parameters
     * @return generateNumberReportResponse
     */
    public function generateNumberReport(generateNumberReport $parameters)
    {
      return $this->__soapCall('generateNumberReport', array($parameters));
    }

    /**
     * @param generateChartReport $parameters
     * @return generateChartReportResponse
     */
    public function generateChartReport(generateChartReport $parameters)
    {
      return $this->__soapCall('generateChartReport', array($parameters));
    }

    /**
     * @param generateTableReport $parameters
     * @return generateTableReportResponse
     */
    public function generateTableReport(generateTableReport $parameters)
    {
      return $this->__soapCall('generateTableReport', array($parameters));
    }

    /**
     * @param generateChartReportWithToken $parameters
     * @return generateChartReportWithTokenResponse
     */
    public function generateChartReportWithToken(generateChartReportWithToken $parameters)
    {
      return $this->__soapCall('generateChartReportWithToken', array($parameters));
    }

    /**
     * @param generateTableReportWithToken $parameters
     * @return generateTableReportWithTokenResponse
     */
    public function generateTableReportWithToken(generateTableReportWithToken $parameters)
    {
      return $this->__soapCall('generateTableReportWithToken', array($parameters));
    }

    /**
     * @param generateNumberReportWithToken $parameters
     * @return generateNumberReportWithTokenResponse
     */
    public function generateNumberReportWithToken(generateNumberReportWithToken $parameters)
    {
      return $this->__soapCall('generateNumberReportWithToken', array($parameters));
    }

}
