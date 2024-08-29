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
          echo "<!--<div id='emoji' style=''>
                    Mathew &ndash; age is of no importance unless you're a cheese &#129472;
                </div>-->";
        }else{
          echo "<div class='row'><div class='col-sm-12'>A very warm welcome to you " . strtok($sf_user->getAttribute('user')->getName(), ' ') . " &ndash; I hope you're having a wonderful day &#128512;</div> <!--<div class='col-sm-5' id='emoji' style='font-size:28px;'>&#128512;</div>--></div>";
        }
      ?> 
    </h3> 
  </div>
  
  <div class="col-sm-2">
    <?php  if($sf_user->getAttribute('id') != 13){   echo '<div id="dashboard-csg-box">' . button_tag_modalbox(__('Configure Dashboard'),'dashboard/configure') . '</div>'; }; ?>
  </div>
</div>
<style>
        .blns {
          border:#5cb85c 5px solid;
          overflow:hidden;
          position: relative;
          width: 1660px; height: 700px;
        }
        .blns div {
          top: 425px; left: 0;
          position: absolute;
          width: 131px; height: 159px;
          border-radius: 50%;
          &:before {
            content: "";
            position: absolute;
            bottom: -7px; right: 50%;
            width: 0; height: 0;
            margin-right: -10px;
            border-left: 8px solid transparent;
            border-right: 8px solid transparent;
            border-bottom: 13px solid #c03940;
          }
          &:after {
            content: "";
            position: absolute;
            width: 11px; height: 14px;
            border-radius: 50%;
            background: white;
            top: 30px; left: 35px;
            transform: rotate(45deg);
            background: linear-gradient(to bottom, rgba(255,255,255,.8), rgba(255,255,255,.2));
          }
          &[class^='bln-1'] {
            height: 145px;
            background-image: radial-gradient(ellipse farthest-corner at 45px 45px , #b0cb47 0%, #3d954b 50%);
            transform: rotate(20deg);
            &:before {
              border-bottom-color: #3d954b;
            }
          }
          &[class^='bln-2'] {
            width: 122px; height: 141px;
            background-image: radial-gradient(ellipse farthest-corner at 45px 45px , #3bc0f0 0%, #0075bc 50%);
            transform: rotate(-20deg);
            &:before {
              border-bottom-color: #0075bc;
            }
          }
          &[class^='bln-3'] {
            background-image: radial-gradient(ellipse farthest-corner at 45px 45px , #f89640 0%, #c03940 50%);
            &:before {
              border-bottom-color: #c03940;
            }
          }
          &[class^='bln-4'] {
            width: 132px; height: 151px;
            background-image: radial-gradient(ellipse farthest-corner at 45px 45px , #cf85b8 0%, #a3509d 50%);
            transform: rotate(5deg);
            &:before {
              border-bottom-color: #a3509d;
            }
          }
          &[class^='bln-5'] {
            width: 137px; height: 142px;
            background-image: radial-gradient(ellipse farthest-corner at 45px 45px , #ffec37 0%, #f8b13d 50%);
            transform: rotate(7deg);
            &:before {
              border-bottom-color: #f8b13d;
            }
          } 
        }
      </style>


<?php
  if($sf_user->getAttribute('id') == 13){ 
    echo '
      

      <div class="row" style="margin-top:50px;">
        <div class="col-sm-12" style="min-height:75%;">
          <div class="blns">
            <div class="bln-1"></div>
          </div>
        </div>
      </div>
    
    ';
  }
?> 
<?php
  if($sf_user->getAttribute('id') == 13){ 
    echo "
<script>
  var windowWidth = 1670;
  var windowHeight = 700;

  function pickANumber(max, min) {
    return Math.random() * (max - min + min) + min;
  }

  function changeColors(el) {
    el.removeClass();
    var random = Math.floor(pickANumber(5,1));
    el.addClass('bln-'+random+'-clone');
  }

  function resetBalloon(el) {
    changeColors(el);

    var scale = (pickANumber(0.9,0.5)).toFixed(1);
    el.css('transform', 'scale(' + scale + ')');

    var x = Math.floor(Math.random() * windowWidth);
    el.css('left', x);
    var y = Math.floor(Math.random() * 300 + windowHeight);
    el.css('top', y);
    releaseBalloon(el);
  }

  function releaseBalloon(el) {
    var maxbllnSpeed = Math.floor(Math.random() * 10000 + 3000);
    var wind = Math.floor(Math.random() * - 30);
    var rotate = Math.floor(Math.random() * 560) + 100;  


    el.animate(
      { 
        top: '-150px',
        left: '+=' + wind + 0,
      }, {
      step: function() {
        el.css({
          transform: 'rotate('+rotate+'deg)',
          transition: 'transform '+ maxbllnSpeed * .001  +'s linear'
        });
      },
      duration: maxbllnSpeed,
      easing: 'linear',
      complete: function() {
        resetBalloon(el);
      }
    });

  }

  function blowUpBalloons() {
    for (i = 0; i < 100; i++) {
      var el = $('.bln-1').clone();
      el.appendTo('.blns');

      resetBalloon(el);

      var position = el.position();

      if (position.top > windowHeight || position.left > windowWidth || position.left < -100) {
        resetBalloon(el);
      } else {
        //releaseBalloon(el);
      }

    }
  }

  blowUpBalloons(); 
</script>
    ";
  }
?> 

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
