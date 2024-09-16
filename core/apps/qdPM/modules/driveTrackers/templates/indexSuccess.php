<h3 class="page-title"><?php echo __('Drive Archive') ?></h3>


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
    <table class="table table-hover" id="table-drive_trackers" data-order="[[0,'asc']]" >
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
                <?php if($drive->getActive() == 2){ echo '<tr class="" style="color:red;">'; }else{ echo '<tr class="default">'; } ?>
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

<?php //if(count($drives)>0)include_partial('global/jsPager',array('table_id'=>'table-drive_trackers')) ?>

<script type="text/javascript">
  $(document).ready(function(){
  
    appHandleUniformCheckboxes()
    
    var columnSort = new Array; 
    $(this).find('#table-drive_trackers thead tr th').each(function(){
    
        
        sType = 'html';
        
        attr = $(this).attr('data-bsType');
        if (typeof attr !== typeof undefined && attr !== false) {
          sType = attr;          
        } 
    
        if($(this).attr('data-bSortable') == 'false') {
            columnSort.push({ "bSortable": false});
        } else {
            columnSort.push({ "bSortable": true,"sType":sType });
        }
    });
    
    
    jQuery('#table-drive_trackers tbody tr .checkboxes').change(function(){
         if($(this).attr('checked'))
         {
           selected_items.push($(this).attr('value'));
         }
         else
         {
           selected_items = array_remove(selected_items,$(this).attr('value'))
         }
                          
         
         $(this).parents('tr').toggleClass("active");
    });

    console.log(columnSort);
  
    var table = $('#table-drive_trackers').dataTable({
      "iDisplayLength": 10,
      "sPaginationType": "bootstrap",
      "bSort": true,
      "bFilter":true,
      "bLengthChange":false,
      "aoColumns": columnSort,
      "fnInitComplete": function (oSettings, json) { $(this).css('display','') },
      "aaSorting": [[0, 'desc']],
      "oLanguage": {                    
                        "oPaginate": {
                            "sPrevious": "Previous Page",
                            "sNext": "Next Page"
                        },
                        "sInfo": "Displaying _START_ - _END_ of <b>_TOTAL_</b> record(s)"
                    }
      });
                      
      jQuery('#table-drive_trackers .group-checkable').change(function () {      
                
                var checked = jQuery(this).is(":checked");
                selected_items.length = 0;
                
                jQuery( "input", table.fnGetNodes() ).each(function(){                  
                     if(checked)
                     {                        
                        selected_items.push($(this).attr('value'));   
                        
                        $(this).attr("checked", true);                    
                        $(this).parents('span').addClass("checked");
                        $(this).parents('tr').addClass("active");                                                                        
                     }
                     else
                     {                                                                                               
                        $(this).attr("checked", false);
                        $(this).parents('span').removeClass("checked");
                        $(this).parents('tr').removeClass("active");
                     }
                })                
      });                         
      
        
  });
    
</script> 

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