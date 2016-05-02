<?php


 function autoload_10acc1bd251a3a9452c556dbcde37112($class)
{
    $classes = array(
        'TextKernel\saveresults\SaveResultsServiceService' => __DIR__ .'/SaveResultsServiceService.php',
        'TextKernel\saveresults\retrieveMetadataWithToken' => __DIR__ .'/retrieveMetadataWithToken.php',
        'TextKernel\saveresults\retrieveMetadataWithTokenResponse' => __DIR__ .'/retrieveMetadataWithTokenResponse.php',
        'TextKernel\saveresults\StringMap' => __DIR__ .'/StringMap.php',
        'TextKernel\saveresults\StringMapEntry' => __DIR__ .'/StringMapEntry.php',
        'TextKernel\saveresults\faultBean' => __DIR__ .'/faultBean.php',
        'TextKernel\saveresults\saveResults' => __DIR__ .'/saveResults.php',
        'TextKernel\saveresults\savedResult' => __DIR__ .'/savedResult.php',
        'TextKernel\saveresults\saveResultsResponse' => __DIR__ .'/saveResultsResponse.php',
        'TextKernel\saveresults\listResults' => __DIR__ .'/listResults.php',
        'TextKernel\saveresults\listResultsResponse' => __DIR__ .'/listResultsResponse.php',
        'TextKernel\saveresults\savedResults' => __DIR__ .'/savedResults.php',
        'TextKernel\saveresults\searcherResults' => __DIR__ .'/searcherResults.php',
        'TextKernel\saveresults\entry' => __DIR__ .'/entry.php',
        'TextKernel\saveresults\deleteResults' => __DIR__ .'/deleteResults.php',
        'TextKernel\saveresults\deleteResultsResponse' => __DIR__ .'/deleteResultsResponse.php',
        'TextKernel\saveresults\saveResultsWithToken' => __DIR__ .'/saveResultsWithToken.php',
        'TextKernel\saveresults\saveResultsWithTokenResponse' => __DIR__ .'/saveResultsWithTokenResponse.php',
        'TextKernel\saveresults\retrieveMetadata' => __DIR__ .'/retrieveMetadata.php',
        'TextKernel\saveresults\retrieveMetadataResponse' => __DIR__ .'/retrieveMetadataResponse.php',
        'TextKernel\saveresults\deleteResultsWithToken' => __DIR__ .'/deleteResultsWithToken.php',
        'TextKernel\saveresults\deleteResultsWithTokenResponse' => __DIR__ .'/deleteResultsWithTokenResponse.php',
        'TextKernel\saveresults\listResultsWithToken' => __DIR__ .'/listResultsWithToken.php',
        'TextKernel\saveresults\listResultsWithTokenResponse' => __DIR__ .'/listResultsWithTokenResponse.php',
        'TextKernel\saveresults\errorCode' => __DIR__ .'/errorCode.php',
        'TextKernel\saveresults\savedResultArray' => __DIR__ .'/savedResultArray.php'
    );
    if (!empty($classes[$class])) {
        include $classes[$class];
    };
}

spl_autoload_register('autoload_10acc1bd251a3a9452c556dbcde37112');

// Do nothing. The rest is just leftovers from the code generation.
{
}
