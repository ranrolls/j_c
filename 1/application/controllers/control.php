<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Control extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->helper('url');
	}
    public function index()
    {
		echo base_url();
    }
	 
	 public function listAll(){
	 	
	 }
}
 
/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */