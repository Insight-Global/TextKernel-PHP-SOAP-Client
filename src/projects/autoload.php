<?php


 function autoload_296cc68018f11fa0610899fac550c56e($class)
{
    $classes = array(
        'TextKernel\projects\ProjectsServiceService' => __DIR__ .'/ProjectsServiceService.php',
        'TextKernel\projects\listProjects' => __DIR__ .'/listProjects.php',
        'TextKernel\projects\listProjectsResponse' => __DIR__ .'/listProjectsResponse.php',
        'TextKernel\projects\projectResponse' => __DIR__ .'/projectResponse.php',
        'TextKernel\projects\project' => __DIR__ .'/project.php',
        'TextKernel\projects\savedSearch' => __DIR__ .'/savedSearch.php',
        'TextKernel\projects\savedResults' => __DIR__ .'/savedResults.php',
        'TextKernel\projects\searcherResults' => __DIR__ .'/searcherResults.php',
        'TextKernel\projects\entry' => __DIR__ .'/entry.php',
        'TextKernel\projects\savedResult' => __DIR__ .'/savedResult.php',
        'TextKernel\projects\assessments' => __DIR__ .'/assessments.php',
        'TextKernel\projects\searcherAssessments' => __DIR__ .'/searcherAssessments.php',
        'TextKernel\projects\assessment' => __DIR__ .'/assessment.php',
        'TextKernel\projects\shares' => __DIR__ .'/shares.php',
        'TextKernel\projects\faultBean' => __DIR__ .'/faultBean.php',
        'TextKernel\projects\updateProjectNameWithToken' => __DIR__ .'/updateProjectNameWithToken.php',
        'TextKernel\projects\updateProjectNameWithTokenResponse' => __DIR__ .'/updateProjectNameWithTokenResponse.php',
        'TextKernel\projects\listProjectsWithToken' => __DIR__ .'/listProjectsWithToken.php',
        'TextKernel\projects\listProjectsWithTokenResponse' => __DIR__ .'/listProjectsWithTokenResponse.php',
        'TextKernel\projects\saveProject' => __DIR__ .'/saveProject.php',
        'TextKernel\projects\saveProjectResponse' => __DIR__ .'/saveProjectResponse.php',
        'TextKernel\projects\updateProjectSharing' => __DIR__ .'/updateProjectSharing.php',
        'TextKernel\projects\updateProjectSharingResponse' => __DIR__ .'/updateProjectSharingResponse.php',
        'TextKernel\projects\updateProjectSharingWithToken' => __DIR__ .'/updateProjectSharingWithToken.php',
        'TextKernel\projects\updateProjectSharingWithTokenResponse' => __DIR__ .'/updateProjectSharingWithTokenResponse.php',
        'TextKernel\projects\saveProjectWithToken' => __DIR__ .'/saveProjectWithToken.php',
        'TextKernel\projects\saveProjectWithTokenResponse' => __DIR__ .'/saveProjectWithTokenResponse.php',
        'TextKernel\projects\listUpdatesWithToken' => __DIR__ .'/listUpdatesWithToken.php',
        'TextKernel\projects\IntegerMap' => __DIR__ .'/IntegerMap.php',
        'TextKernel\projects\IntegerMapEntry' => __DIR__ .'/IntegerMapEntry.php',
        'TextKernel\projects\listUpdatesWithTokenResponse' => __DIR__ .'/listUpdatesWithTokenResponse.php',
        'TextKernel\projects\deleteAllProjects' => __DIR__ .'/deleteAllProjects.php',
        'TextKernel\projects\deleteAllProjectsResponse' => __DIR__ .'/deleteAllProjectsResponse.php',
        'TextKernel\projects\deleteProjectWithToken' => __DIR__ .'/deleteProjectWithToken.php',
        'TextKernel\projects\deleteProjectWithTokenResponse' => __DIR__ .'/deleteProjectWithTokenResponse.php',
        'TextKernel\projects\deleteProject' => __DIR__ .'/deleteProject.php',
        'TextKernel\projects\deleteProjectResponse' => __DIR__ .'/deleteProjectResponse.php',
        'TextKernel\projects\deleteAllProjectsWithToken' => __DIR__ .'/deleteAllProjectsWithToken.php',
        'TextKernel\projects\deleteAllProjectsWithTokenResponse' => __DIR__ .'/deleteAllProjectsWithTokenResponse.php',
        'TextKernel\projects\updateProjectName' => __DIR__ .'/updateProjectName.php',
        'TextKernel\projects\updateProjectNameResponse' => __DIR__ .'/updateProjectNameResponse.php',
        'TextKernel\projects\listUpdates' => __DIR__ .'/listUpdates.php',
        'TextKernel\projects\listUpdatesResponse' => __DIR__ .'/listUpdatesResponse.php',
        'TextKernel\projects\emailPeriod' => __DIR__ .'/emailPeriod.php',
        'TextKernel\projects\errorCode' => __DIR__ .'/errorCode.php',
        'TextKernel\projects\savedResultArray' => __DIR__ .'/savedResultArray.php',
        'TextKernel\projects\assessmentArray' => __DIR__ .'/assessmentArray.php'
    );
    if (!empty($classes[$class])) {
        include $classes[$class];
    };
}

spl_autoload_register('autoload_296cc68018f11fa0610899fac550c56e');

// Do nothing. The rest is just leftovers from the code generation.
{
}
