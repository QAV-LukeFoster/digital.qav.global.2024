<h3 class="page-title"><?php echo __('Key Safe') ?></h3>

<?php
    $lc = new cfgListingController($sf_context->getModuleName());
?>

<table width="100%" style="margin-bottom:25px;">
  <tr>
    <td><?php  echo $lc->insert_button(__('Add New Storage Media')) ?></td>
    <td>
        <div class="pull-right" style="font-size:14px; font-weight:normal;">
            <span class="label label-danger">&nbsp;&nbsp;&nbsp;The next Drive ID will be <span style="font-weight:bold;"> <?php echo $getNewDriveName ?></span>&nbsp;&nbsp;&nbsp;</span>
        </div>
    </td>
  </tr>
</table>

<div>
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
            </tr>
        </thead>
        <tbody>
            <?php foreach ($drives as $drive): ?>
                <?php if($drive->getActive() == 2){ echo '<tr class="danger">'; }else{ echo '<tr class="default">'; } ?>
                    <td>
                        <?php echo 'X' . sprintf('%05d', $drive->getName()) ?>
                    </td>
                    <td>
                        <?php 
                        
                            foreach ($associations as $association):
                            
                                if ($association['projects_drive_trackers_id'] == $drive->getId()){
                                    echo '<div style="margin-bottom:3px;"><a class="btn-xs btn-warning" href="/tasks?projects_id=' . $association['id'] . '"> <i class="fa fa-arrow-right"></i></a> ' . $association['name'] . '</div>';
                                }
                            
                            endforeach;
                        
                        ?>
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
                </tr>
            <?php endforeach; ?> 
        </tbody>
    </table>
</div>

<?php if(count($drives)>0)include_partial('global/jsPager',array('table_id'=>'table-drive_trackers')) ?>

<?php if($sf_user->getAttribute('id') == 13){ ?>
  <audio id="soundClip" preload="auto">
      <source src="/template/audio/yankee.mp3"> </source>
  </audio>

  <script>
    jQuery(document).ready(function() {    
      var audio = $("#soundClip")[0];
          audio.play();
    });         
  </script>
<?php } ?>