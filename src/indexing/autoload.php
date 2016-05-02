<?php


 function autoload_f58fa653a8943ecb466df2f002aaf50d($class)
{
    $classes = array(
        'TextKernel\indexing\IndexingServiceService' => __DIR__ .'/IndexingServiceService.php',
        'TextKernel\indexing\add' => __DIR__ .'/add.php',
        'TextKernel\indexing\addResponse' => __DIR__ .'/addResponse.php',
        'TextKernel\indexing\faultBean' => __DIR__ .'/faultBean.php',
        'TextKernel\indexing\reindex' => __DIR__ .'/reindex.php',
        'TextKernel\indexing\reindexResponse' => __DIR__ .'/reindexResponse.php',
        'TextKernel\indexing\reindexingStatus' => __DIR__ .'/reindexingStatus.php',
        'TextKernel\indexing\delete' => __DIR__ .'/delete.php',
        'TextKernel\indexing\deleteResponse' => __DIR__ .'/deleteResponse.php',
        'TextKernel\indexing\update' => __DIR__ .'/update.php',
        'TextKernel\indexing\updateResponse' => __DIR__ .'/updateResponse.php',
        'TextKernel\indexing\getReindexingStatus' => __DIR__ .'/getReindexingStatus.php',
        'TextKernel\indexing\getReindexingStatusResponse' => __DIR__ .'/getReindexingStatusResponse.php',
        'TextKernel\indexing\recreateTags' => __DIR__ .'/recreateTags.php',
        'TextKernel\indexing\recreateTagsResponse' => __DIR__ .'/recreateTagsResponse.php',
        'TextKernel\indexing\errorCode' => __DIR__ .'/errorCode.php',
        'TextKernel\indexing\state' => __DIR__ .'/state.php'
    );
    if (!empty($classes[$class])) {
        include $classes[$class];
    };
}

spl_autoload_register('autoload_f58fa653a8943ecb466df2f002aaf50d');

// Do nothing. The rest is just leftovers from the code generation.
{
}
