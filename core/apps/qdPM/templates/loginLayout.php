<div?php
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
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en" class="no-js">
<!--<![endif]-->
<!-- BEGIN HEAD -->
  <head>
    <?php include_title() ?>
    
    <meta charset="utf-8"/>
    <meta name = "robots" content = "noindex,nofollow">   
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1, user-scalable=no" name="viewport"/> 
    <meta name="MobileOptimized" content="320">  
                        
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <?php echo stylesheet_tag('/template/plugins/font-awesome/css/font-awesome.min.css') ?>
    <?php echo stylesheet_tag('/template/plugins/bootstrap/css/bootstrap.min.css') ?>
    <?php echo stylesheet_tag('/template/plugins/uniform/css/uniform.default.css') ?>
    <!-- END GLOBAL MANDATORY STYLES -->
    <!-- BEGIN THEME STYLES -->
    <?php echo stylesheet_tag('/template/css/style-conquer.css') ?>
    <?php // echo stylesheet_tag('/template/css/style.css') ?>
    <?php echo stylesheet_tag('/template/css/style-responsive.css') ?>
    <?php echo stylesheet_tag('/template/css/plugins.css') ?>    
    <?php echo stylesheet_tag('/template/css/pages/login.css') ?>
    <?php echo stylesheet_tag('/template/css/animate.css') ?>
    
    <link rel="stylesheet" type="text/css" href="/template/css/login/style.css">
    <link rel="stylesheet" type="text/css" href="/template/css/login/theme.css">
    <!-- END THEME STYLES -->
    
    <?php echo stylesheet_tag('app.css') ?>
    <?php
      $skin = $sf_request->getCookie ('skin', sfConfig::get('app_default_skin','default')); 
      echo (is_file('css/skins/' . $skin . '/' . $skin. '.css') ? stylesheet_tag('skins/' . $skin . '/' . $skin . '.css') : stylesheet_tag('skins/WinterTones/WinterTones.css')) 
    ?>
    
    <?php echo javascript_include_tag('/template/plugins/jquery-1.10.2.min.js') ?>
    <link rel="shortcut icon" href="<?php echo public_path('favicon.ico') ?>" />
    <link rel="apple-touch-icon" href="<?php echo public_path('favicon.png') ?>" />
    <style>
      #bg-image {
        position: fixed;

        top: 0;
        right: 0;

        width: 100%;
        height: auto;

        z-index: -10;

        animation-name: kenburns-top;
        animation-duration: 2s;
        animation-iteration-count: infinite;
      }

      @-webkit-keyframes kenburns-top {
        0% {
          -webkit-transform: scale(1) translateY(0);
          transform: scale(1) translateY(0);
          -webkit-transform-origin: 50% 16%;
          transform-origin: 50% 16%;
        }
        100% {
          -webkit-transform: scale(1.25) translateY(-15px);
          transform: scale(1.25) translateY(-15px);
          -webkit-transform-origin: top;
          transform-origin: top;
        }
      }
    </style>
  </head>
  <body class="login">
  
  

  <div class="form-body">
        
        <div class="row">
          
            <div class="img-holder">
              <?php 
                if(date('l') == 'Friday')
                {
                  echo '<img id="element5" src="/images/friday.png" style="max-width:100px; transform: rotate(-20deg); margin-left:-400px; margin-top:-25px; opacity:0.9;">';
                }
              ?>
                <div class="bg" style="padding-top:900px;">
                  <img id="element3" src="/images/qav.png" style="opacity:0.9;">
                  <p style="color:#fff; font-size:14px; color:#9d9d9d;">&copy; <?php echo date('Y') ?></p>
                                  
                </div>
                <div class="info-holder">
                  
                </div>
            </div>
            <div class="form-holder">
              
                <div class="form-content">
                
                    <div class="form-items">
                    <h3 id="element1" style="font-size: 73px; font-weight:400;"><span style="font-size: 73px; font-weight:bold; color:#7d7d7d;">D</span><span style="">IGITAL</span></h3>
                      <div  id="loginform" class="content" style="margin-bottom:40px;">
                        <?php echo $sf_content ?>
                      </div>
                        
                        <!--<p id="element2" style="margin-left:32px;">EVENTS <span style="color:#7d7d7d; font-size:24px;">|</span> VIDEOGRAPHY <span style="color:#7d7d7d; font-size:24px;">|</span> DIGITAL</p>-->
                        
                        <div class="other-links">
                          
                        </div>
                          <br><br><br>
                        <div style="color:#7d7d7d; margin-left:28px;">
                            <div id="text" align="center" style="opacity:0.7;"></div><br><!--<div id="author" style="font-weight: bold;"></div>-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



  <!--
  <div>
    <table style="width:100%; margin-top: 8px; font-size: 12px; color: #cfcccc;">
      <tr>
        <td align="left">
          <div style="margin-left: 12px;"></div>&copy; QAV <?php echo  date('Y') ?></div>
        </td>
        <td align="right" style="margin-right: 13px;">
        <div style="margin-right: 12px;"><?php echo  date('l') ?> the <?php echo  date('jS \of F Y') ?></div>
        </td>
      </tr>
    </table>
  </div>
  
  <div class="login-fade-in"></div>
  
  <div class="login-page-logo">

 <br><div style='font-size: 15.5px; color: lightblue;'>From concept to creation, exceeding expectations</div>
    
  </div>  
  <div class="content">
    <?php //echo $sf_content ?>
    
  </div>
  
    <div class="pull-right" style="margin-top:240px; margin-right:35px;">
      <?php 
        /*
        if(date('l') == 'Friday')
        {
          echo '<img src="/images/friday.png" style="max-width:250px; transform: rotate(-20deg);">';
        }
          */
      ?>
    </div>
  </div> 
  -->
  <script> 

  $(document).ready(function(){
      function getQuote(){
        var quotes =[{
          quote: "A life spent making mistakes is not only more honorable, but more useful than a life spent doing nothing",
          author:"George Bernard Shaw"
        }, {
          quote:"Stay away from negative people. They have a problem for every solution.",
          author:"Albert Einstein"
        }, {
          quote:"You are never too old to set another goal, or to dream a new dream.",
          author:"C.S. Lewis"
        }, {
          quote:"Always remember that you are absolutely unique. Just like everyone else.",
          author:"Margaret Mead"
        }, {
          quote:"Real change, enduring change, happens one step at a time.",
          author:"Ruth Bader Ginsburg"
        },{
          quote:"What we fear of doing most is usually what we most need to do.",
          author:"Ralph Waldo Emerson"
        },{
          quote:"It is better to fail in originality than to succeed in imitation.",
          author:"Herman Melville"
        },{
          quote:"Do not let anyone ever tell you who you are.",
          author:"Kamala Harris"
        },{
          quote:"Failure is the condiment that gives success its flavor.",
          author:"Truman Capote"
        },{
          quote:"A dead end street is a good place to turn around.",
          author:"Naomi Judd"
        },{
          quote:"Success is where preparation and opportunity meet.",
          author:"Bobby Unser"
        },{
          quote:"Don't be fooled by these rocks that I got, I'm just - I'm just Jenny from the Block",
          author:"Bobby Unser"
        }      
      ];

        var sourceLength = quotes.length;
        var randomNumber = Math.floor(Math.random()* sourceLength);
        
        var newQuoteText = quotes[randomNumber].quote;
        // var newQuoteName = quotes[randomNumber].author;

        $("#text").text(newQuoteText);
        // $("#author").text(newQuoteName);
      }
      getQuote();
      $("#new-quote").click(getQuote);
    }
    );

    const element1 = document.querySelector('#element1');
    element1.classList.add('animate__animated', 'animate__fadeInLeft');

    //const element2 = document.querySelector('#element2');
    //element2.classList.add('animate__animated', 'animate__fadeInUp', 'animate__delay-1s');

    //const element3 = document.querySelector('#element3');
    //element3.classList.add('animate__animated', 'animate__fadeInLeftBig');

    const element4 = document.querySelector('#text');
    element4.classList.add('animate__animated', 'animate__fadeInLeft', 'animate__delay-3s');

    //const element5 = document.querySelector('#element5');
    //element5.classList.add('animate__animated', 'animate__flash', 'animate__infinite', 'animate__slower');

    const loginform = document.querySelector('#loginform');
    loginform.classList.add('animate__animated', 'animate__fadeIn', 'animate__delay-1s');
    
    </script>
  
    
   
            
<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
<!-- BEGIN CORE PLUGINS -->
<!--[if lt IE 9]>
<?php echo javascript_include_tag('/template/plugins/respond.min.js') ?>
<?php echo javascript_include_tag('/template/plugins/excanvas.min.js') ?>
<![endif]-->

<?php echo javascript_include_tag('/template/plugins/jquery-migrate-1.2.1.min.js') ?>
<?php echo javascript_include_tag('/template/plugins/bootstrap/js/bootstrap.min.js') ?>
<?php echo javascript_include_tag('/template/plugins/bootstrap-hover-dropdown/twitter-bootstrap-hover-dropdown.min.js') ?>
<?php echo javascript_include_tag('/template/plugins/jquery-slimscroll/jquery.slimscroll.min.js') ?>
<?php echo javascript_include_tag('/template/plugins/jquery.blockui.min.js') ?>
<?php echo javascript_include_tag('/template/plugins/jquery.cokie.min.js') ?>
<?php echo javascript_include_tag('/template/plugins/uniform/jquery.uniform.min.js') ?>
<!-- END CORE PLUGINS -->

<?php echo javascript_include_tag('/template/plugins/jquery-validation/dist/jquery.validate.min.js') ?>
<?php echo javascript_include_tag('/template/plugins/jquery-validation/dist/additional-methods.min.js') ?>

<?php echo javascript_include_tag('/template/scripts/app.js') ?>

<script>
jQuery(document).ready(function() {    
   App.init();
   
});

</script>

<?php echo javascript_include_tag('app.js') ?>
<!-- END JAVASCRIPTS -->    
           
  </body>
</html>
