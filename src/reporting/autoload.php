<?php


 function autoload_73b5adfef92b53de205355f7a8d7cb3d($class)
{
    $classes = array(
        'TextKernel\reporting\ReportingServiceService' => __DIR__ .'/ReportingServiceService.php',
        'TextKernel\reporting\generateNumberReport' => __DIR__ .'/generateNumberReport.php',
        'TextKernel\reporting\generateNumberReportResponse' => __DIR__ .'/generateNumberReportResponse.php',
        'TextKernel\reporting\numberReport' => __DIR__ .'/numberReport.php',
        'TextKernel\reporting\report' => __DIR__ .'/report.php',
        'TextKernel\reporting\reportEntry' => __DIR__ .'/reportEntry.php',
        'TextKernel\reporting\faultBean' => __DIR__ .'/faultBean.php',
        'TextKernel\reporting\generateChartReportWithToken' => __DIR__ .'/generateChartReportWithToken.php',
        'TextKernel\reporting\generateChartReportWithTokenResponse' => __DIR__ .'/generateChartReportWithTokenResponse.php',
        'TextKernel\reporting\chartReport' => __DIR__ .'/chartReport.php',
        'TextKernel\reporting\generateNumberReportWithToken' => __DIR__ .'/generateNumberReportWithToken.php',
        'TextKernel\reporting\generateNumberReportWithTokenResponse' => __DIR__ .'/generateNumberReportWithTokenResponse.php',
        'TextKernel\reporting\generateTableReportWithToken' => __DIR__ .'/generateTableReportWithToken.php',
        'TextKernel\reporting\generateTableReportWithTokenResponse' => __DIR__ .'/generateTableReportWithTokenResponse.php',
        'TextKernel\reporting\tableReport' => __DIR__ .'/tableReport.php',
        'TextKernel\reporting\tableReportEntry' => __DIR__ .'/tableReportEntry.php',
        'TextKernel\reporting\generateChartReport' => __DIR__ .'/generateChartReport.php',
        'TextKernel\reporting\generateChartReportResponse' => __DIR__ .'/generateChartReportResponse.php',
        'TextKernel\reporting\generateTableReport' => __DIR__ .'/generateTableReport.php',
        'TextKernel\reporting\generateTableReportResponse' => __DIR__ .'/generateTableReportResponse.php',
        'TextKernel\reporting\errorCode' => __DIR__ .'/errorCode.php'
    );
    if (!empty($classes[$class])) {
        include $classes[$class];
    };
}

spl_autoload_register('autoload_73b5adfef92b53de205355f7a8d7cb3d');

// Do nothing. The rest is just leftovers from the code generation.
{
}
