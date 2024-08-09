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

<?php $form->setDefault('email',base64_decode($sf_request->getCookie('remember_user'))) ?>

<form class="login-form" name="loginForm" id="loginForm" action="<?php echo url_for('login/index',true) ?>" method="POST" style="margin-bottom:0px;">

<?php echo $form->renderHiddenFields(false) ?>
<?php echo $form->renderGlobalErrors() ?>


<div><?php // if(strlen($c = strip_tags(sfConfig::get('app_login_page_content')))>0) echo '<p>' . nl2br($c) . '</p>' ?></div>

<?php // if($sf_user->hasFlash('userNotices')) include_partial('global/userNotices', array('userNotices' => $sf_user->getFlash('userNotices'))); ?>

<div class="form-group" style="padding-top:8px;">
  <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
  <!--<label class="control-label visible-ie8 visible-ie9"><?php // echo $form['email']->renderLabelName() ?></label>-->
  <div class="input-icon">
  	<input class="form-control placeholder-no-fix required email" type="text" autocomplete="off" placeholder="Username" name="login[email]" style="box-shadow: 2px 3px #7d7d7d;"/>
  </div>
</div>

<div class="form-group">
	<!--<label class="control-label visible-ie8 visible-ie9"><?php // echo $form['password']->renderLabelName() ?></label>-->
	<div class="input-icon">
		<input class="form-control placeholder-no-fix required" type="password" autocomplete="off" placeholder="<?php echo $form['password']->renderLabelName() ?>" name="login[password]" style="box-shadow: 2px 3px #7d7d7d;"/>
	</div>
</div>


  <div class="form-group">
      <!--<label class="checkbox"> <?php // echo input_checkbox_tag('remember_me',1,array('checked'=>$sf_request->getCookie('remember_me')))  . __('Remember Me') ?></label>-->

      <!--<label class="checkbox"><?php // echo link_to(__('Password forgotten?'),'login/restorePassword'); ?></label>-->
        
      <button type="submit" class="btn btn-success pull-right" style="text-shadow: 1px 1px #899bcf;"> <?php echo __('Login') ?> </button>
  </div>

  <!--<div class="forget-password"></div>-->


  <?php
  $http_referer = '';
      
  if(isset($_SERVER['REQUEST_URI']))
  {
    if(!stristr($_SERVER['REQUEST_URI'],'/login') and !stristr($_SERVER['REQUEST_URI'],'/create') and !stristr($_SERVER['REQUEST_URI'],'/edit') and !stristr($_SERVER['REQUEST_URI'],'/update') and !stristr($_SERVER['REQUEST_URI'],'/new'))
    {
      if(isset($_SERVER['HTTPS']))
      {
        $http_referer = ($_SERVER['HTTPS']=='on' ? 'https://' : 'http://') . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
      }
      else
      {
        $http_referer = 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
      }
    }
  }
  
  echo input_hidden_tag('http_referer', $http_referer); ?>
  
</form>

<?php include_partial('global/formValidator',array('form_id'=>'loginForm')); ?>
