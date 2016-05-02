<?php


 function autoload_ff31eec50d5ea76dff0f2607cd9c9ccd($class)
{
    $classes = array(
        'TextKernel\authentication\AuthenticationServiceService' => __DIR__ .'/AuthenticationServiceService.php',
        'TextKernel\authentication\invalidate' => __DIR__ .'/invalidate.php',
        'TextKernel\authentication\invalidateResponse' => __DIR__ .'/invalidateResponse.php',
        'TextKernel\authentication\faultBean' => __DIR__ .'/faultBean.php',
        'TextKernel\authentication\accessWithoutPassword' => __DIR__ .'/accessWithoutPassword.php',
        'TextKernel\authentication\accessWithoutPasswordResponse' => __DIR__ .'/accessWithoutPasswordResponse.php',
        'TextKernel\authentication\authenticate' => __DIR__ .'/authenticate.php',
        'TextKernel\authentication\accessOptions' => __DIR__ .'/accessOptions.php',
        'TextKernel\authentication\StringMap' => __DIR__ .'/StringMap.php',
        'TextKernel\authentication\StringMapEntry' => __DIR__ .'/StringMapEntry.php',
        'TextKernel\authentication\CredentialsMap' => __DIR__ .'/CredentialsMap.php',
        'TextKernel\authentication\CredentialsMapEntry' => __DIR__ .'/CredentialsMapEntry.php',
        'TextKernel\authentication\credentials' => __DIR__ .'/credentials.php',
        'TextKernel\authentication\userOptions' => __DIR__ .'/userOptions.php',
        'TextKernel\authentication\authenticateResponse' => __DIR__ .'/authenticateResponse.php',
        'TextKernel\authentication\errorCode' => __DIR__ .'/errorCode.php'
    );
    if (!empty($classes[$class])) {
        include $classes[$class];
    };
}

spl_autoload_register('autoload_ff31eec50d5ea76dff0f2607cd9c9ccd');

// Do nothing. The rest is just leftovers from the code generation.
{
}
