<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Jomloader extends CI_Controller {
	public function __construct(){
		parent::__construct();
	}
    public function index()
    {
    	$this->load->helper('url');
		echo '<ul><li><a href="'.base_url('jomloader/listAll').'">list all</a></li>';
		
		echo '</ul>';
		
		JDEBUG ? $_PROFILER->mark('afterLoad') : null;
		JLoader::discover('','./system/core/',true,true);
		$app = JLoader::getClassList();
		foreach($app as $class=>$path){
			echo $class.' => '.$path.'<br />';
		}	 
    }
	 
	 public function listAll(){
	 	
	 	JDEBUG ? $_PROFILER->mark('afterLoad') : null;
		JLoader::discover('','./system/core/',true,true);
		$app = JLoader::getClassList();
		foreach($app as $class=>$path){
			echo $class.' => '.$path.'<br />';
		}	 		 	
	 }
}
 
/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */