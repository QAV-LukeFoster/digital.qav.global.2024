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
 * Projects form base class.
 *
 * @method Projects getObject() Returns the current form's model object
 *
 * @package    sf_sandbox
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseProjectsForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                 => new sfWidgetFormInputHidden(),
      'projects_status_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ProjectsStatus'), 'add_empty' => true)),
      'projects_types_id'  => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ProjectsTypes'), 'add_empty' => true)),
      'projects_drive_trackers_id'  => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('DriveTrackers'), 'add_empty' => true)),
      'created_by'         => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Users'), 'add_empty' => true)),
      'name'               => new sfWidgetFormInputText(),
      'description'        => new sfWidgetFormTextarea(),
      'team'               => new sfWidgetFormTextarea(),
      'created_at'         => new sfWidgetFormDateTime(),
      'order_tasks_by'     => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'                 => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'projects_status_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('ProjectsStatus'), 'required' => false)),
      'projects_types_id'  => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('ProjectsTypes'), 'required' => false)),
      'projects_drive_trackers_id'  => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('DriveTrackers'), 'required' => false)),
      'created_by'         => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Users'), 'required' => false)),
      'name'               => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'description'        => new sfValidatorString(array('required' => false)),
      'team'               => new sfValidatorString(array('required' => false)),
      'created_at'         => new sfValidatorDateTime(array('required' => false)),
      'order_tasks_by'     => new sfValidatorString(array('max_length' => 64, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('projects[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Projects';
  }

}
