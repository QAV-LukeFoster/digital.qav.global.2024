<?php
// auto-generated by sfServiceConfigHandler
// date: 2024/08/15 10:05:07

$class = 'qdPM_prodServiceContainer';
if (!class_exists($class, false)) {
class qdPM_prodServiceContainer extends sfServiceContainer
{
  protected $shared = array();

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
}

}
return $class;

