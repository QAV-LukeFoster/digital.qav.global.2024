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

  <div class="row" style="margin-bottom:20px; margin-left:2px;">
  <div class="col-sm-10">
    <h3 style="font-weight:bold;">
      <?php
        if($sf_user->getAttribute('id') == 13){ 
          echo " <div id='emoji' style=''>Mathew &ndash; age is of no importance unless you're a cheese &#129472;</div> ";
        }else{
          echo "<div class='row'><div class='col-sm-12'>A very warm welcome to you " . strtok($sf_user->getAttribute('user')->getName(), ' ') . " &ndash; I hope you're having a wonderful day &#128512;</div> <!--<div class='col-sm-5' id='emoji' style='font-size:28px;'>&#128512;</div>--></div>";
        }
      ?> 
    </h3> 
  </div>
  
  <div class="col-sm-2">
    <?php echo '<div id="dashboard-csg-box">' . button_tag_modalbox(__('Configure Dashboard'),'dashboard/configure') . '</div>'; ?>
  </div>
</div>




<?php
  
  //if(count($reports)==0) echo '<br><div>' . __('No reports found to display on dashboard') . '</div>';
  
  foreach($reports as $report)
  {    
    switch(true)
    {       
      case strstr($report,'projectsReports'):
          if($r = Doctrine_Core::getTable('ProjectsReports')->find(str_replace('projectsReports','',$report)))
          {  
           echo '
            <div class="portlet">
  						<div class="portlet-title">
  							<div class="caption">
  								 <a href="' . url_for('projectsReports/view?id=' . $r->getId()) . '">' . $r->getName() . '</a>
  							</div>
                <div class="tools">
  								<a href="javascript: ;" dashboard-report="' . $report . '" class="dashboard-report ' . (in_array($report,$hidden_dashboard_reports) ? 'expand':'collapse'). '"></a>  								
  							</div>
  						</div>
              <div class="portlet-body" id="' . $report . '" style="display:' . (in_array($report,$hidden_dashboard_reports) ? 'none':'block'). '" >
               <div>' . get_component('projects','listing',array('reports_id'=>$r->getId(), 'is_dashboard'=>true)) . '</div>
              </div>              
            </div>  
           ';          
          } 
        break;
      case strstr($report,'userReports'):
          if($r = Doctrine_Core::getTable('UserReports')->find(str_replace('userReports','',$report)))
          {  
          
          echo '
            <div class="portlet">
  						<div class="portlet-title">
  							<div class="caption">
  								 <a href="' . url_for('userReports/view?id=' . $r->getId()) . '">' . $r->getName() . '</a>
  							</div>
                <div class="tools">
  								<a href="javascript: ;" dashboard-report="' . $report . '" class="dashboard-report ' . (in_array($report,$hidden_dashboard_reports) ? 'expand':'collapse'). '"></a>  								
  							</div>
  						</div>
              <div class="portlet-body" id="' . $report . '" style="display:' . (in_array($report,$hidden_dashboard_reports) ? 'none':'block'). '" >
               <div>' . get_component('tasks','listing',array('reports_id'=>$r->getId(), 'is_dashboard'=>true)) . '</div>
              </div>              
            </div>  
           '; 

          } 
        break;
      case strstr($report,'ticketsReports'):
          if($r = Doctrine_Core::getTable('TicketsReports')->find(str_replace('ticketsReports','',$report)))
          {
            echo '
            <div class="portlet">
  						<div class="portlet-title">
  							<div class="caption">
  								 <a href="' . url_for('ticketsReports/view?id=' . $r->getId()) . '">' . $r->getName() . '</a>
  							</div>
                <div class="tools">
  								<a href="javascript: ;" dashboard-report="' . $report . '" class="dashboard-report ' . (in_array($report,$hidden_dashboard_reports) ? 'expand':'collapse'). '"></a>  								
  							</div>
  						</div>
              <div class="portlet-body" id="' . $report . '" style="display:' . (in_array($report,$hidden_dashboard_reports) ? 'none':'block'). '" >
               <div>' . get_component('tickets','listing',array('reports_id'=>$r->getId(), 'is_dashboard'=>true)) . '</div>
              </div>              
            </div>  
           '; 
          } 
        break;
      case strstr($report,'discussionsReports'):
          if($r = Doctrine_Core::getTable('DiscussionsReports')->find(str_replace('discussionsReports','',$report)))
          {  
            echo '
            <div class="portlet">
  						<div class="portlet-title">
  							<div class="caption">
  								 <a href="' . url_for('discussionsReports/view?id=' . $r->getId()) . '">' . $r->getName() . '</a>
  							</div>
                <div class="tools">
  								<a href="javascript: ;" dashboard-report="' . $report . '" class="dashboard-report ' . (in_array($report,$hidden_dashboard_reports) ? 'expand':'collapse'). '"></a>  								
  							</div>
  						</div>
              <div class="portlet-body" id="' . $report . '" style="display:' . (in_array($report,$hidden_dashboard_reports) ? 'none':'block'). '" >
               <div>' . get_component('discussions','listing',array('reports_id'=>$r->getId(), 'is_dashboard'=>true)) . '</div>
              </div>              
            </div>  
           '; 
        
          } 
        break;
    }
  }
?>

<?php
  if($sf_user->getAttribute('id') == 13){ 
   
  }
?> 

<script>
  $('.dashboard-report').on('click',function(){    
    expand_dashboard_report($(this).attr('dashboard-report'),'<?php echo url_for("dashboard/expandReport") ?>')
  })
</script>

<?php if($sf_user->getAttribute('id') == 13){ ?>
  <audio id="soundClip" preload="auto">
      <source src="/template/audio/small_world.mp3"> </source>
  </audio>

  <script>
    jQuery(document).ready(function() {    
      var audio = $("#soundClip")[0];
          audio.play();
    });         
  </script>
<?php } ?>
