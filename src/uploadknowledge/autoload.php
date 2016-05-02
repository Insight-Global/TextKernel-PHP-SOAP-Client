<?php


 function autoload_cf6d63ae1814f1b57c9aa536ab871c63($class)
{
    $classes = array(
        'TextKernel\uploadknowledge\UploadKnowledgeServiceService' => __DIR__ .'/UploadKnowledgeServiceService.php',
        'TextKernel\uploadknowledge\upload' => __DIR__ .'/upload.php',
        'TextKernel\uploadknowledge\uploadResponse' => __DIR__ .'/uploadResponse.php',
        'TextKernel\uploadknowledge\faultBean' => __DIR__ .'/faultBean.php',
        'TextKernel\uploadknowledge\errorCode' => __DIR__ .'/errorCode.php'
    );
    if (!empty($classes[$class])) {
        include $classes[$class];
    };
}

spl_autoload_register('autoload_cf6d63ae1814f1b57c9aa536ab871c63');

// Do nothing. The rest is just leftovers from the code generation.
{
}
