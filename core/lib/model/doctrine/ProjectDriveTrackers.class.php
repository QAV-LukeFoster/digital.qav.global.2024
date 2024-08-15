<?php

/**
 * Attachments
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @package    sf_sandbox
 * @subpackage model
 * @author     Luke Foster
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
class ProjectDriveTrackers extends BaseProjectDriveTrackers
{

  public static function getSchema()
  {
    $drives =  Doctrine_Core::getTable('ProjectDriveTrackers')->createQuery('d')        
        ->orderBy('d.id')
        ->fetchArray();
    
    return $drives;

  }
  
  public static function getProjectDrive($projectId)
  {

    return $projectId;

  }
}
