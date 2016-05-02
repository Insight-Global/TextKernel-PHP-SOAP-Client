<?php


 function autoload_66e31260bfd94e12121ea88ecc73a2da($class)
{
    $classes = array(
        'TextKernel\savesearches\SaveSearchesServiceService' => __DIR__ .'/SaveSearchesServiceService.php',
        'TextKernel\savesearches\deleteSearch' => __DIR__ .'/deleteSearch.php',
        'TextKernel\savesearches\deleteSearchResponse' => __DIR__ .'/deleteSearchResponse.php',
        'TextKernel\savesearches\faultBean' => __DIR__ .'/faultBean.php',
        'TextKernel\savesearches\listSearchesWithToken' => __DIR__ .'/listSearchesWithToken.php',
        'TextKernel\savesearches\listSearchesWithTokenResponse' => __DIR__ .'/listSearchesWithTokenResponse.php',
        'TextKernel\savesearches\savedSearch' => __DIR__ .'/savedSearch.php',
        'TextKernel\savesearches\deleteSearchWithToken' => __DIR__ .'/deleteSearchWithToken.php',
        'TextKernel\savesearches\deleteSearchWithTokenResponse' => __DIR__ .'/deleteSearchWithTokenResponse.php',
        'TextKernel\savesearches\saveSearchWithToken' => __DIR__ .'/saveSearchWithToken.php',
        'TextKernel\savesearches\saveSearchWithTokenResponse' => __DIR__ .'/saveSearchWithTokenResponse.php',
        'TextKernel\savesearches\saveSearch' => __DIR__ .'/saveSearch.php',
        'TextKernel\savesearches\saveSearchResponse' => __DIR__ .'/saveSearchResponse.php',
        'TextKernel\savesearches\listSearches' => __DIR__ .'/listSearches.php',
        'TextKernel\savesearches\listSearchesResponse' => __DIR__ .'/listSearchesResponse.php',
        'TextKernel\savesearches\errorCode' => __DIR__ .'/errorCode.php',
        'TextKernel\savesearches\emailPeriod' => __DIR__ .'/emailPeriod.php'
    );
    if (!empty($classes[$class])) {
        include $classes[$class];
    };
}

spl_autoload_register('autoload_66e31260bfd94e12121ea88ecc73a2da');

// Do nothing. The rest is just leftovers from the code generation.
{
}
