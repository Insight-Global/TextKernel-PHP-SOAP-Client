<?php

namespace TextKernel\projects;

class ProjectsServiceService extends \SoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'listProjects' => 'TextKernel\\projects\\listProjects',
      'listProjectsResponse' => 'TextKernel\\projects\\listProjectsResponse',
      'projectResponse' => 'TextKernel\\projects\\projectResponse',
      'project' => 'TextKernel\\projects\\project',
      'savedSearch' => 'TextKernel\\projects\\savedSearch',
      'savedResults' => 'TextKernel\\projects\\savedResults',
      'searcherResults' => 'TextKernel\\projects\\searcherResults',
      'entry' => 'TextKernel\\projects\\entry',
      'savedResult' => 'TextKernel\\projects\\savedResult',
      'assessments' => 'TextKernel\\projects\\assessments',
      'searcherAssessments' => 'TextKernel\\projects\\searcherAssessments',
      'assessment' => 'TextKernel\\projects\\assessment',
      'shares' => 'TextKernel\\projects\\shares',
      'faultBean' => 'TextKernel\\projects\\faultBean',
      'updateProjectNameWithToken' => 'TextKernel\\projects\\updateProjectNameWithToken',
      'updateProjectNameWithTokenResponse' => 'TextKernel\\projects\\updateProjectNameWithTokenResponse',
      'listProjectsWithToken' => 'TextKernel\\projects\\listProjectsWithToken',
      'listProjectsWithTokenResponse' => 'TextKernel\\projects\\listProjectsWithTokenResponse',
      'saveProject' => 'TextKernel\\projects\\saveProject',
      'saveProjectResponse' => 'TextKernel\\projects\\saveProjectResponse',
      'updateProjectSharing' => 'TextKernel\\projects\\updateProjectSharing',
      'updateProjectSharingResponse' => 'TextKernel\\projects\\updateProjectSharingResponse',
      'updateProjectSharingWithToken' => 'TextKernel\\projects\\updateProjectSharingWithToken',
      'updateProjectSharingWithTokenResponse' => 'TextKernel\\projects\\updateProjectSharingWithTokenResponse',
      'saveProjectWithToken' => 'TextKernel\\projects\\saveProjectWithToken',
      'saveProjectWithTokenResponse' => 'TextKernel\\projects\\saveProjectWithTokenResponse',
      'listUpdatesWithToken' => 'TextKernel\\projects\\listUpdatesWithToken',
      'IntegerMap' => 'TextKernel\\projects\\IntegerMap',
      'IntegerMapEntry' => 'TextKernel\\projects\\IntegerMapEntry',
      'listUpdatesWithTokenResponse' => 'TextKernel\\projects\\listUpdatesWithTokenResponse',
      'deleteAllProjects' => 'TextKernel\\projects\\deleteAllProjects',
      'deleteAllProjectsResponse' => 'TextKernel\\projects\\deleteAllProjectsResponse',
      'deleteProjectWithToken' => 'TextKernel\\projects\\deleteProjectWithToken',
      'deleteProjectWithTokenResponse' => 'TextKernel\\projects\\deleteProjectWithTokenResponse',
      'deleteProject' => 'TextKernel\\projects\\deleteProject',
      'deleteProjectResponse' => 'TextKernel\\projects\\deleteProjectResponse',
      'deleteAllProjectsWithToken' => 'TextKernel\\projects\\deleteAllProjectsWithToken',
      'deleteAllProjectsWithTokenResponse' => 'TextKernel\\projects\\deleteAllProjectsWithTokenResponse',
      'updateProjectName' => 'TextKernel\\projects\\updateProjectName',
      'updateProjectNameResponse' => 'TextKernel\\projects\\updateProjectNameResponse',
      'listUpdates' => 'TextKernel\\projects\\listUpdates',
      'listUpdatesResponse' => 'TextKernel\\projects\\listUpdatesResponse',
      'savedResultArray' => 'TextKernel\\projects\\savedResultArray',
      'assessmentArray' => 'TextKernel\\projects\\assessmentArray',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(), $wsdl = null)
    {
      foreach (self::$classmap as $key => $value) {
        if (!isset($options['classmap'][$key])) {
          $options['classmap'][$key] = $value;
        }
      }
      $options = array_merge(array (
      'features' => 1,
    ), $options);
      if (!$wsdl) {
        $wsdl = 'https://home.textkernel.nl/SearchBox/soap/projects?wsdl';
      }
      parent::__construct($wsdl, $options);
    }

    /**
     * @param updateProjectName $parameters
     * @return updateProjectNameResponse
     */
    public function updateProjectName(updateProjectName $parameters)
    {
      return $this->__soapCall('updateProjectName', array($parameters));
    }

    /**
     * @param saveProject $parameters
     * @return saveProjectResponse
     */
    public function saveProject(saveProject $parameters)
    {
      return $this->__soapCall('saveProject', array($parameters));
    }

    /**
     * @param deleteProject $parameters
     * @return deleteProjectResponse
     */
    public function deleteProject(deleteProject $parameters)
    {
      return $this->__soapCall('deleteProject', array($parameters));
    }

    /**
     * @param updateProjectSharing $parameters
     * @return updateProjectSharingResponse
     */
    public function updateProjectSharing(updateProjectSharing $parameters)
    {
      return $this->__soapCall('updateProjectSharing', array($parameters));
    }

    /**
     * @param deleteAllProjects $parameters
     * @return deleteAllProjectsResponse
     */
    public function deleteAllProjects(deleteAllProjects $parameters)
    {
      return $this->__soapCall('deleteAllProjects', array($parameters));
    }

    /**
     * @param listProjects $parameters
     * @return listProjectsResponse
     */
    public function listProjects(listProjects $parameters)
    {
      return $this->__soapCall('listProjects', array($parameters));
    }

    /**
     * @param listUpdates $parameters
     * @return listUpdatesResponse
     */
    public function listUpdates(listUpdates $parameters)
    {
      return $this->__soapCall('listUpdates', array($parameters));
    }

    /**
     * @param saveProjectWithToken $parameters
     * @return saveProjectWithTokenResponse
     */
    public function saveProjectWithToken(saveProjectWithToken $parameters)
    {
      return $this->__soapCall('saveProjectWithToken', array($parameters));
    }

    /**
     * @param updateProjectNameWithToken $parameters
     * @return updateProjectNameWithTokenResponse
     */
    public function updateProjectNameWithToken(updateProjectNameWithToken $parameters)
    {
      return $this->__soapCall('updateProjectNameWithToken', array($parameters));
    }

    /**
     * @param updateProjectSharingWithToken $parameters
     * @return updateProjectSharingWithTokenResponse
     */
    public function updateProjectSharingWithToken(updateProjectSharingWithToken $parameters)
    {
      return $this->__soapCall('updateProjectSharingWithToken', array($parameters));
    }

    /**
     * @param deleteProjectWithToken $parameters
     * @return deleteProjectWithTokenResponse
     */
    public function deleteProjectWithToken(deleteProjectWithToken $parameters)
    {
      return $this->__soapCall('deleteProjectWithToken', array($parameters));
    }

    /**
     * @param deleteAllProjectsWithToken $parameters
     * @return deleteAllProjectsWithTokenResponse
     */
    public function deleteAllProjectsWithToken(deleteAllProjectsWithToken $parameters)
    {
      return $this->__soapCall('deleteAllProjectsWithToken', array($parameters));
    }

    /**
     * @param listProjectsWithToken $parameters
     * @return listProjectsWithTokenResponse
     */
    public function listProjectsWithToken(listProjectsWithToken $parameters)
    {
      return $this->__soapCall('listProjectsWithToken', array($parameters));
    }

    /**
     * @param listUpdatesWithToken $parameters
     * @return listUpdatesWithTokenResponse
     */
    public function listUpdatesWithToken(listUpdatesWithToken $parameters)
    {
      return $this->__soapCall('listUpdatesWithToken', array($parameters));
    }

}
