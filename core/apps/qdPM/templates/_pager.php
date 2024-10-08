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
<div class="doctrine_pager">
<?php  
if(sfConfig::get('app_rows_limit')>0)
{         
  $url = $sf_context->getModuleName() . '/' . $sf_context->getActionName() . '?' . $url_params  . (strlen($url_params)>0 ? '&':'') . 'page=';
      
  if ($pager->haveToPaginate() && $sf_context->getModuleName()!='dashboard')
  { 
    
    echo '<div class="note note-success">';      
    echo  __('Displaying') . ' ' . $pager->getFirstIndice()  . ' - ' .  $pager->getLastIndice();
    
    echo ' &nbsp;&nbsp; ' . link_to('&lt;', $url.$pager->getPreviousPage()) . ' ';
    $links = $pager->getLinks(); 
    
    foreach ($links as $page)
    { 
      echo ($page == $pager->getPage()) ? $page : link_to($page, $url.$page) ; 
      if ($page != $pager->getCurrentMaxLink()) echo ' - '; 
    }  
    
    echo ' &nbsp;&nbsp; ' . link_to('&gt;', $url.$pager->getNextPage()) .' &nbsp;&nbsp; ' ;
    
    echo  __('Total') . ': ' . $pager->getNbResults();
    echo '</div>';
  }
  elseif ($pager->haveToPaginate() && $sf_context->getModuleName()=='dashboard')
  {
    echo '<div class="note note-success">'  . __('Displaying') . ' ' . $pager->getFirstIndice()  . ' - ' .  $pager->getLastIndice() . '&nbsp;&nbsp;' . link_to(__('View more'),$reports_action . '/view?id=' . $reports_id) . '</div>';    
  }
}
  
?>

  

</div>
<br />
