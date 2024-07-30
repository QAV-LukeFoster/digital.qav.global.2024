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
<style>
  .modal-header{
    background:slategray;
    color:#fff;
  }
</style>

<form class="form-horizontal" role="form" id="driveTracker" action="<?php echo url_for('driveTrackers/'.($form->getObject()->isNew() ? 'create' : 'update').(!$form->getObject()->isNew() ? '?id='.$form->getObject()->getId() : '')) ?>" method="post" <?php print 'enctype="multipart/form-data" ' ?>>
  <div class="modal-body">
    <div class="form-body">
      <?php if (!$form->getObject()->isNew()): ?>
        <input type="hidden" name="sf_method" value="put" />
      <?php endif; ?>
      <?php echo $form->renderHiddenFields(false) ?>
      <?php echo $form->renderGlobalErrors() ?>

      <div class="container-fluid">
        <div class="row">
          <div class="col-md-6">

            <div class="form-group">
              <label class="col-md-4 control-label"><span class="required">*</span> <?php echo $form['name']->renderLabel() ?></label>
              <div class="col-md-8">
                <?php echo $form['name'] ?>
              </div>
            </div>

            <div class="form-group">
              <label class="col-md-4 control-label"><?php echo $form['type']->renderLabel() ?></label>
              <div class="col-md-8">
                <?php echo $form['type'] ?>
              </div>
            </div>

            <div class="form-group">
              <label class="col-md-4 control-label"><?php echo $form['capacity']->renderLabel() ?></label>
              <div class="col-md-8">
                <?php echo $form['capacity'] ?>
              </div>
            </div>

            <div class="form-group">
              <label class="col-md-4 control-label"><?php echo $form['free_space']->renderLabel() ?></label>
              <div class="col-md-8">
                <?php echo $form['free_space'] ?>
              </div>
            </div>

          </div>
          <div class="col-md-6">

            <div class="form-group">
              <label class="col-md-4 control-label"><?php echo $form['encrypt_id']->renderLabel() ?></label>
              <div class="col-md-8">
                <?php echo $form['encrypt_id'] ?>
              </div>
            </div>

            <div class="form-group">
              <label class="col-md-4 control-label"><?php echo $form['encrypt_key']->renderLabel() ?></label>
              <div class="col-md-8">
                <?php echo $form['encrypt_key'] ?>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
  <?php echo ajax_modal_template_footer() ?>
</form>
