<?php
/**
*qdPM
*
* NOTICE OF LICENSE
*
* This source file is subject to the Open Software License (OSL 3.0)
* that is bundled with this package in the file LICENSE.txt.
* It is also available through the world-wide-web at this URL:
* http://opensource.org/licenses/osl-3.0.php
* If you did not receive a copy of the license and are unable to
* obtain it through the world-wide-web, please send an email
* to license@qdPM.net so we can send you a copy immediately.
*
* DISCLAIMER
*
* Do not edit or add to this file if you wish to upgrade qdPM to newer
* versions in the future. If you wish to customize qdPM for your
* needs please refer to http://www.qdPM.net for more information.
*
* @copyright  Copyright (c) 2009  Sergey Kharchishin and Kym Romanets (http://www.qdpm.net)
* @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
*/
?>
<?php

/**
 * Projects form.
 *
 * @package    sf_sandbox
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class ProjectsForm extends BaseProjectsForm
{
  public function configure()
  {        
    $this->widgetSchema['projects_types_id'] = new sfWidgetFormChoice(array('choices'=>app::getItemsChoicesByTable('ProjectsTypes')),array('class'=>'form-control input-large'));
    $this->setDefault('projects_types_id', app::getDefaultValueByTable('ProjectsTypes'));
            
    $this->widgetSchema['projects_status_id'] = new sfWidgetFormChoice(array('choices'=>app::getItemsChoicesByTable('ProjectsStatus')),array('class'=>'form-control input-large'));
    $this->setDefault('projects_status_id', app::getDefaultValueByTable('ProjectsStatus'));

    $this->widgetSchema['projects_drive_trackers_id'] = new sfWidgetFormChoice(array('choices'=>app::getItemsChoicesByTableDriveTracker('DriveTrackers')),array('class'=>'form-control input-small'));
    $this->setDefault('projects_drive_trackers_id', app::getDefaultValueByTable('DriveTrackers'));
        
  //($this->getObject()->isNew() ? 'autofocus':'')      
    $this->widgetSchema['name']->setAttributes(array('class'=>'form-control input-xlarge required autofocus'));
    $this->widgetSchema['description']->setAttributes(array('class'=>'form-control editor'));
          
    $this->widgetSchema['created_by'] = new sfWidgetFormInputHidden();
    $this->widgetSchema['created_at'] = new sfWidgetFormInputHidden();
    $this->setDefault('created_at', date('Y-m-d H:i:s'));
        
    
    $this->widgetSchema->setLabels(array('projects_types_id'=>'Type',                                         
                                         'projects_status_id'=>'Status',
                                         'projects_drive_trackers_id'=>'Physical Media: Location'));

  }
}

