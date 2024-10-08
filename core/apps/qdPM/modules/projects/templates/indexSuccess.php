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
<h3 class="page-title"><?php echo __('Projects') ?></h1>

<div><?php if(!$sf_request->hasParameter('search')) include_component('projects','filtersPreview') ?></div>

<?php include_component('projects','listing') ?>

<?php if($sf_user->getAttribute('id') == 13){ ?>
  <audio id="soundClip" preload="auto">
      <source src="/template/audio/old_mac.mp3"> </source>
  </audio>

  <script>
    jQuery(document).ready(function() {    
      var audio = $("#soundClip")[0];
          audio.play();
    });         
  </script>
<?php } ?>
