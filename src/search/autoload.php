<?php


 function autoload_f1fbc929687e885e79f2ad8c79251f46($class)
{
    $classes = array(
        'TextKernel\search\SearchServiceService' => __DIR__ .'/SearchServiceService.php',
        'TextKernel\search\stringArray' => __DIR__ .'/stringArray.php',
        'TextKernel\search\searchWithState' => __DIR__ .'/searchWithState.php',
        'TextKernel\search\accessOptions' => __DIR__ .'/accessOptions.php',
        'TextKernel\search\StringMap' => __DIR__ .'/StringMap.php',
        'TextKernel\search\StringMapEntry' => __DIR__ .'/StringMapEntry.php',
        'TextKernel\search\CredentialsMap' => __DIR__ .'/CredentialsMap.php',
        'TextKernel\search\CredentialsMapEntry' => __DIR__ .'/CredentialsMapEntry.php',
        'TextKernel\search\credentials' => __DIR__ .'/credentials.php',
        'TextKernel\search\searchWithStateResponse' => __DIR__ .'/searchWithStateResponse.php',
        'TextKernel\search\searchResult' => __DIR__ .'/searchResult.php',
        'TextKernel\search\facetCounts' => __DIR__ .'/facetCounts.php',
        'TextKernel\search\entry' => __DIR__ .'/entry.php',
        'TextKernel\search\synonyms' => __DIR__ .'/synonyms.php',
        'TextKernel\search\resultItem' => __DIR__ .'/resultItem.php',
        'TextKernel\search\queryPart' => __DIR__ .'/queryPart.php',
        'TextKernel\search\queryPartItem' => __DIR__ .'/queryPartItem.php',
        'TextKernel\search\itemCountMap' => __DIR__ .'/itemCountMap.php',
        'TextKernel\search\itemCounts' => __DIR__ .'/itemCounts.php',
        'TextKernel\search\tagcloud' => __DIR__ .'/tagcloud.php',
        'TextKernel\search\synonymSection' => __DIR__ .'/synonymSection.php',
        'TextKernel\search\synonymItem' => __DIR__ .'/synonymItem.php',
        'TextKernel\search\faultBean' => __DIR__ .'/faultBean.php',
        'TextKernel\search\getMetadataWithToken' => __DIR__ .'/getMetadataWithToken.php',
        'TextKernel\search\getMetadataWithTokenResponse' => __DIR__ .'/getMetadataWithTokenResponse.php',
        'TextKernel\search\compositeMetadata' => __DIR__ .'/compositeMetadata.php',
        'TextKernel\search\searcherMetadata' => __DIR__ .'/searcherMetadata.php',
        'TextKernel\search\fieldNameLabels' => __DIR__ .'/fieldNameLabels.php',
        'TextKernel\search\linkNameLabels' => __DIR__ .'/linkNameLabels.php',
        'TextKernel\search\facet' => __DIR__ .'/facet.php',
        'TextKernel\search\resultFieldLabels' => __DIR__ .'/resultFieldLabels.php',
        'TextKernel\search\resultField' => __DIR__ .'/resultField.php',
        'TextKernel\search\documentIdItem' => __DIR__ .'/documentIdItem.php',
        'TextKernel\search\documentIdLink' => __DIR__ .'/documentIdLink.php',
        'TextKernel\search\actionItem' => __DIR__ .'/actionItem.php',
        'TextKernel\search\actionLink' => __DIR__ .'/actionLink.php',
        'TextKernel\search\savingConfig' => __DIR__ .'/savingConfig.php',
        'TextKernel\search\headerLink' => __DIR__ .'/headerLink.php',
        'TextKernel\search\getMetadata' => __DIR__ .'/getMetadata.php',
        'TextKernel\search\userOptions' => __DIR__ .'/userOptions.php',
        'TextKernel\search\getMetadataResponse' => __DIR__ .'/getMetadataResponse.php',
        'TextKernel\search\search' => __DIR__ .'/search.php',
        'TextKernel\search\searchRequest' => __DIR__ .'/searchRequest.php',
        'TextKernel\search\searchResponse' => __DIR__ .'/searchResponse.php',
        'TextKernel\search\searchWithToken' => __DIR__ .'/searchWithToken.php',
        'TextKernel\search\searchWithTokenResponse' => __DIR__ .'/searchWithTokenResponse.php',
        'TextKernel\search\condition' => __DIR__ .'/condition.php',
        'TextKernel\search\errorCode' => __DIR__ .'/errorCode.php',
        'TextKernel\search\datatype' => __DIR__ .'/datatype.php',
        'TextKernel\search\combinationtype' => __DIR__ .'/combinationtype.php',
        'TextKernel\search\guitype' => __DIR__ .'/guitype.php',
        'TextKernel\search\cloudtype' => __DIR__ .'/cloudtype.php',
        'TextKernel\search\synonymSectionArray' => __DIR__ .'/synonymSectionArray.php'
    );
    if (!empty($classes[$class])) {
        include $classes[$class];
    };
}

spl_autoload_register('autoload_f1fbc929687e885e79f2ad8c79251f46');

// Do nothing. The rest is just leftovers from the code generation.
{
}
