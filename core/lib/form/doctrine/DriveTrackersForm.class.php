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
 * DriveTracker form.
 *
 * @package    sf_sandbox
 * @subpackage form
 * @author     Luke Foster
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class DriveTrackersForm extends BaseDriveTrackersForm
{
  public function configure()
  {
    $this->widgetSchema['type'] = new sfWidgetFormChoice(array('choices' => array('eSATA' => 'eSATA','IDE' => 'IDE','NvM' => 'NvM','OTHER' => 'OTHER','SATA' => 'SATA','SCSI' => 'SCSI','SSD' => 'SSD','USB.1' => 'USB.1','USB.2' => 'USB.2','USB.3' => 'USB.3')));
    $this->widgetSchema['capacity'] = new sfWidgetFormInput();
    $this->widgetSchema['encrypt_id'] = new sfWidgetFormInput();
    $this->widgetSchema['encrypt_key'] = new sfWidgetFormInput();

    $this->widgetSchema['id'] = new sfWidgetFormInputHidden();
                
    $this->widgetSchema->setLabels(array('type'=>'Media Type',
                                         'capacity'=>'Total Capcity (GB*)',
                                         'encrypt_id'=>'Encryption ID',
                                         'encrypt_key'=>'Encryption Key',
                                        ));
  }
}
