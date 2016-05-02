<?php


 function autoload_bec6bbc1c66ea3338c0b562e6ecd2752($class)
{
    $classes = array(
        'TextKernel\assessments\AssessmentsServiceService' => __DIR__ .'/AssessmentsServiceService.php',
        'TextKernel\assessments\saveAssessmentWithToken' => __DIR__ .'/saveAssessmentWithToken.php',
        'TextKernel\assessments\saveAssessmentWithTokenResponse' => __DIR__ .'/saveAssessmentWithTokenResponse.php',
        'TextKernel\assessments\faultBean' => __DIR__ .'/faultBean.php',
        'TextKernel\assessments\errorCode' => __DIR__ .'/errorCode.php'
    );
    if (!empty($classes[$class])) {
        include $classes[$class];
    };
}

spl_autoload_register('autoload_bec6bbc1c66ea3338c0b562e6ecd2752');

// Do nothing. The rest is just leftovers from the code generation.
{
}
