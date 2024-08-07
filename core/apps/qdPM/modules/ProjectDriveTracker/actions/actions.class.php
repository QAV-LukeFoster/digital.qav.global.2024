<?php

/**
 * ProjectDriveTracker actions.
 *
 * @package    sf_sandbox
 * @subpackage ProjectDriveTracker
 * @author     QAV Digital
 * @version    SVN: $Id$
 */
class ProjectDriveTrackerActions extends sfActions
{
  /**
   * Executes index action
   *
   * @param sfRequest $request A request object
   */
  public function executeIndex(sfWebRequest $request)
  {
    $this->forward('default', 'module');
  }
}
