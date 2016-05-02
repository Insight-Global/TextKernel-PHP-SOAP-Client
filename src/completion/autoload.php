<?php


 function autoload_6ce260709452310829bfdb0bc6a5f043($class)
{
    $classes = array(
        'TextKernel\completion\AutoCompletionServiceService' => __DIR__ .'/AutoCompletionServiceService.php',
        'TextKernel\completion\complete' => __DIR__ .'/complete.php',
        'TextKernel\completion\completeResponse' => __DIR__ .'/completeResponse.php',
        'TextKernel\completion\faultBean' => __DIR__ .'/faultBean.php',
        'TextKernel\completion\completeWithToken' => __DIR__ .'/completeWithToken.php',
        'TextKernel\completion\completeWithTokenResponse' => __DIR__ .'/completeWithTokenResponse.php',
        'TextKernel\completion\errorCode' => __DIR__ .'/errorCode.php'
    );
    if (!empty($classes[$class])) {
        include $classes[$class];
    };
}

spl_autoload_register('autoload_6ce260709452310829bfdb0bc6a5f043');

// Do nothing. The rest is just leftovers from the code generation.
{
}
