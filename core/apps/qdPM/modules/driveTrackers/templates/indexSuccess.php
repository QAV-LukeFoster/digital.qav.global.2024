<h3 class="page-title"><?php echo __('Key Safe') ?></h3>

<?php
    $lc = new cfgListingController($sf_context->getModuleName());
?>

<table width="100%" style="margin-bottom:25px;">
  <tr>
    <td><?php  echo $lc->insert_button(__('Add New Storage Media')) ?></td>
  </tr>
</table>

<div> <?php echo  (count($drives)==0 ? 'class="table-scrollable"':'')?>
    <table class="table table-hover" id="table-drive_trackers">
        <thead>
            <tr>  
                <th>Drive ID</th>
                <th>Project(s)</th>
                <th>Type</th>
                <th>Capacity (GB)</th>
                <th>Free Space (GB)</th>
                <th>Encryption ID</th>
                <th>Encryption Key</th>
                <th>&nbsp;</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($drives as $drive): ?>
                <tr>
                    <td>
                    <?php echo $drive->getName() ?>
                    </td>
                    <td>
                    <?php echo $drive->getAssociations() ?>
                    </td>
                    <td>
                    <?php echo $drive->getType() ?>
                    </td>
                    <td>
                    <?php echo $drive->getCapacity() ?>
                    </td>
                    <td>
                    <?php echo $drive->getFreeSpace() ?>
                    </td>
                    <td>
                    <?php echo $drive->getEncryptId() ?>
                    </td>
                    <td>
                    <?php echo $drive->getEncryptKey() ?>
                    </td>
                    <td>
                    <span>

                    <?php  echo $lc->edit_button($drive->getId()); ?>
                        &nbsp;&nbsp;
                    <?php  echo $lc->delete_button($drive->getId()); ?>

                    </span>
                    
                    </td>
                </tr>
            <?php endforeach; ?> 
        </tbody>
    </table>
</div>

<?php if(count($drives)>0)include_partial('global/jsPager',array('table_id'=>'table-drive_trackers')) ?>