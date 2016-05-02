<?php


 function autoload_63f7fc490e0e35acc05b25522ab0fd5a($class)
{
    $classes = array(
        'TextKernel\queryextraction\QueryExtractionServiceService' => __DIR__ .'/QueryExtractionServiceService.php',
        'TextKernel\queryextraction\extractWithToken' => __DIR__ .'/extractWithToken.php',
        'TextKernel\queryextraction\extractWithTokenResponse' => __DIR__ .'/extractWithTokenResponse.php',
        'TextKernel\queryextraction\faultBean' => __DIR__ .'/faultBean.php',
        'TextKernel\queryextraction\extractFromUrl' => __DIR__ .'/extractFromUrl.php',
        'TextKernel\queryextraction\extractFromUrlResponse' => __DIR__ .'/extractFromUrlResponse.php',
        'TextKernel\queryextraction\extractFromUrlWithToken' => __DIR__ .'/extractFromUrlWithToken.php',
        'TextKernel\queryextraction\extractFromUrlWithTokenResponse' => __DIR__ .'/extractFromUrlWithTokenResponse.php',
        'TextKernel\queryextraction\extractFromFile' => __DIR__ .'/extractFromFile.php',
        'TextKernel\queryextraction\extractFromFileResponse' => __DIR__ .'/extractFromFileResponse.php',
        'TextKernel\queryextraction\extractFromFileWithToken' => __DIR__ .'/extractFromFileWithToken.php',
        'TextKernel\queryextraction\extractFromFileWithTokenResponse' => __DIR__ .'/extractFromFileWithTokenResponse.php',
        'TextKernel\queryextraction\extract' => __DIR__ .'/extract.php',
        'TextKernel\queryextraction\extractResponse' => __DIR__ .'/extractResponse.php',
        'TextKernel\queryextraction\errorCode' => __DIR__ .'/errorCode.php'
    );
    if (!empty($classes[$class])) {
        include $classes[$class];
    };
}

spl_autoload_register('autoload_63f7fc490e0e35acc05b25522ab0fd5a');

// Do nothing. The rest is just leftovers from the code generation.
{
}
