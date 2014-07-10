<?php
 
if (!defined('<span class="hiddenSpellError" pre=""-->BASEPATH'))
  exit('No direct script access allowed');
 
class Dashboard extends MY_Controller {
 
  public function __construct() {
    parent::__construct();
  }
 
  public function index() {
    /*Check if the user is logged in*/
    if ($this->user->id > 0) {
      /*Write you magic to display the dashboard*/
    } else {
      /*Do whatever you need to do when the user is guest*/
    }
  }

?>