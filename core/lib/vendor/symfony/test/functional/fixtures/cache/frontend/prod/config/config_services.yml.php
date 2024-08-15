<?php
// auto-generated by sfServiceConfigHandler
// date: 2024/08/15 09:04:11

$class = 'frontend_prodServiceContainer';
if (!class_exists($class, false)) {
class frontend_prodServiceContainer extends sfServiceContainer
{
  protected $shared = array();

  public function __construct()
  {
    parent::__construct($this->getDefaultParameters());
  }

  protected function getSfLoggerService()
  {
    if (isset($this->shared['sf_logger'])) return $this->shared['sf_logger'];

    $instance = new sfEventLogger($this->getService('sf_event_dispatcher'));

    return $this->shared['sf_logger'] = $instance;
  }

  protected function getSfFilesystemService()
  {
    if (isset($this->shared['sf_filesystem'])) return $this->shared['sf_filesystem'];

    $instance = new sfFilesystem($this->getService('sf_event_dispatcher'), $this->getService('sf_formatter'));

    return $this->shared['sf_filesystem'] = $instance;
  }

  protected function getMyPluginServiceService()
  {
    if (isset($this->shared['my_plugin_service'])) return $this->shared['my_plugin_service'];

    $instance = new sfOutputEscaperSafe($this->getParameter('my_plugin_param'));

    return $this->shared['my_plugin_service'] = $instance;
  }

  protected function getMyProjectServiceService()
  {
    if (isset($this->shared['my_project_service'])) return $this->shared['my_project_service'];

    $instance = new sfOutputEscaperSafe($this->getParameter('my_project_param'), $this->getParameter('sf_cache_dir'));

    return $this->shared['my_project_service'] = $instance;
  }

  protected function getMyAppServiceService()
  {
    if (isset($this->shared['my_app_service'])) return $this->shared['my_app_service'];

    $instance = new sfOutputEscaperSafe($this->getParameter('my_project_param'));

    return $this->shared['my_app_service'] = $instance;
  }

  protected function getDefaultParameters()
  {
    return array(
      'my_plugin_param' => 'foo',
      'other_param' => 'quz',
      'my_project_param' => 'foo',
      'my_app_param' => 'foo',
    );
  }
}

}
return $class;

