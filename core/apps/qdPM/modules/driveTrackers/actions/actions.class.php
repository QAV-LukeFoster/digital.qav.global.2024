<?php

/**
 * driveTrackersActions.
 *
 * @package    sf_sandbox
 * @subpackage driveTracker
 * @author     Luke Foster
 * @version    SVN: $Id$
 */
class driveTrackersActions extends sfActions
{
  /**
   * Executes index action
   *
   * @param sfRequest $request A request object
   */
  public function executeIndex(sfWebRequest $request)
  {
    $table = Doctrine_Core::getTable('DriveTrackers')
               ->createQuery('d')
               ->addWhere('d.id!=1')
               ->execute();

    $tableTwo = Doctrine_Core::getTable('Projects')
               ->createQuery('p')
               ->addWhere('p.projects_drive_trackers_id!=')
               ->execute();

    $this->associations = $tableTwo;
    $this->drives = $table;
    $this->getNewDriveName = DriveTrackers::getNextDriveName();

    app::setPageTitle('Drive Archive',$this->getResponse());
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new DriveTrackersForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new DriveTrackersForm(null, array('sf_user'=>$this->getUser()));

    $this->processForm($request, $this->form);

    $this->redirect('driveTrackers/index');
  }
  public function executeEdit(sfWebRequest $request)
  {        
    $this->forward404Unless($drive_trackers = Doctrine_Core::getTable('DriveTrackers')->createQuery()->addWhere('id=?',$request->getParameter('id'))->fetchOne(), sprintf('Object drive does not exist (%s).', $request->getParameter('id')));
        
    $this->form = new DriveTrackersForm($drive_trackers, array('sf_user'=>$this->getUser()));
  }

  public function executeUpdate(sfWebRequest $request)
  {        
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($drive_trackers = Doctrine_Core::getTable('DriveTrackers')->createQuery()->addWhere('id=?',$request->getParameter('id'))->fetchOne(), sprintf('Object drive does not exist (%s).', $request->getParameter('id')));
    
    $this->form = new DriveTrackersForm($drive_trackers, array('sf_user'=>$this->getUser()));

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {        
    $this->forward404Unless($drive_trackers = Doctrine_Core::getTable('DriveTrackers')->find(array($request->getParameter('id'))), sprintf('Object drive does not exist (%s).', $request->getParameter('id')));
          
    $drive_trackers->delete();

    $this->redirect('driveTrackers/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {    
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    
    if ($form->isValid())
    {                                                     
      if($form->getObject()->isNew()){ $form->setFieldValue('created_at',date('Y-m-d H:i:s')); }
      
      $form->protectFieldsValue();

      //** Calculate free space at 90% of capacity */
      $free_space = $form->getValue('capacity');
      $free_space = $free_space * 0.9;

      $form->setFieldValue('free_space',$free_space);
      
      //** Set the next Drive ID int */
      $form->setFieldValue('name', DriveTrackers::getNextDriveInt());

      $drive_trackers = $form->save();
    }
  }
}
