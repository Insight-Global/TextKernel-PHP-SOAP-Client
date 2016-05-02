<?php


 function autoload_914f10fde89856ec9e842fa794619096($class)
{
    $classes = array(
        'TextKernel\userlogging\UserLoggingServiceService' => __DIR__ .'/UserLoggingServiceService.php',
        'TextKernel\userlogging\logWithToken' => __DIR__ .'/logWithToken.php',
        'TextKernel\userlogging\logMessage' => __DIR__ .'/logMessage.php',
        'TextKernel\userlogging\logWithTokenResponse' => __DIR__ .'/logWithTokenResponse.php',
        'TextKernel\userlogging\faultBean' => __DIR__ .'/faultBean.php',
        'TextKernel\userlogging\errorCode' => __DIR__ .'/errorCode.php'
    );
    if (!empty($classes[$class])) {
        include $classes[$class];
    };
}

spl_autoload_register('autoload_914f10fde89856ec9e842fa794619096');

// Do nothing. The rest is just leftovers from the code generation.
{
}
