<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class User extends CI_Controller {
 
    public function index()
    {
        
// Mark afterLoad in the profiler.
JDEBUG ? $_PROFILER->mark('afterLoad') : null;

// Instantiate the application.
$app = JFactory::getApplication('site');

				
				    $user = JFactory::getUser(650);
 
        if ($user->authorise('core.edit', 'com_content'))
        {
                echo "<p>You may edit all content.</p>";
        }
        else
        {
                echo "<p>You may not edit all content.</p>";
        }
 
        if ($user->authorise('core.edit.own', 'com_content'))
        {
                echo "<p>You may edit your own content.</p>";
        }
        else
        {
                echo "<p>You may not edit your own content.</p>";
        }
     
        
    }
}
 
/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */