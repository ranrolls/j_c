<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Hello extends CI_Controller
{
	public function __construct(){
		parent::__construct();
	}
	public function index()
   {
		echo 'hello';
		JDEBUG ? $_PROFILER->mark('afterLoad') : null;
		$app = JFactory::getApplication('site');
		$isModal = JRequest::getVar( 'print' ) == 1; 
		if( $isModal) {
			$href = '"#" onclick="window.print(); return false;"';
		} else {
			$href = 'status=no,toolbar=no,scrollbars=yes,titlebar=no,menubar=no,resizable=yes,width=640,height=480,directories=no,location=no';
			$href = "window.open(this.href,'win2','".$href."'); return false;";
			$href = 'index.php?option=mycomponent&tmpl=component&print=1 '.$href;
		}
		echo '<a href="'. $href . '" >Click for Printing</a> ';
    }
}
 
