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
 * DriveTracker form base class.
 *
 * @method DriveTrackers getObject() Returns the current form's model object
 *
 * @package    sf_sandbox
 * @subpackage form
 * @author     Luke Foster
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseDriveTrackersForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id' => new sfWidgetFormInputHidden(),
      'type' => new sfWidgetFormChoice(array('choices' => array('eSATA' => 'eSATA','IDE' => 'IDE','NvM' => 'NvM','OTHER' => 'OTHER','SATA' => 'SATA','SCSI' => 'SCSI','SSD' => 'SSD','USB.1' => 'USB.1','USB.2' => 'USB.2','USB.3' => 'USB.3'))),
      'capacity' => new sfWidgetFormInput(),
      'encrypt_id' => new sfWidgetFormInput(),
      'encrypt_key' => new sfWidgetFormInput(),
    ));

    $this->setValidators(array(
      'id' => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'type' => new sfValidatorString(),
      'capacity' => new sfValidatorString(),
      'encrypt_id' => new sfValidatorString(),
      'encrypt_key' => new sfValidatorString(),
    ));

    $this->widgetSchema->setNameFormat('drive_tracker[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'DriveTrackers';
  }

}
