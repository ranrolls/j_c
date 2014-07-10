<?php


class MY_Controller extends CI_Controller {
 
  var $joomla_app;
  var $user;
  var $user_groups;
 
  function __construct() {
    parent::__construct();
 
    $this->joomla_app = &JFactory::getApplication('site');
    $this->joomla_app->initialise();
    $this->user = &JFactory::getUser();
    if ($this->user->id > 0) {
        $this->user_groups = $this->user->getAuthorisedGroups();
    }
  }
 
}

?>