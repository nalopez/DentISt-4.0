<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class VerifyResetPword extends CI_Controller {

 function __construct()
 {
   parent::__construct();
   $this->load->model('user','',TRUE);
 }

 function index()
 {
   //This method will have the credentials validation
   $this->load->library('form_validation');

   $this->form_validation->set_rules('username', 'Username', 'trim|required|xss_clean');
   $this->form_validation->set_rules('midname', 'Middlename', 'trim|required|xss_clean|callback_check_database');

   if($this->form_validation->run() == FALSE)
   {
     //Field validation failed.  User redirected to login page
     $this->load->view('forgotpword_view');
   }
   else
   {
     //Go to private area
	redirect('login', 'refresh');
	
   }

 }

 function check_database($midname)
 {
   //Field validation succeeded.  Validate against database
   $username = $this->input->post('username');

   //query the database
   $result = $this->user->getMName($username);	
	

   if($result)
   {
	foreach($result as $row)
     	{
		$mname = $row->userMName;
		if ($mname == $midname){
			$this->user->changepword($username);
		}
	}     
   }
   else
   {
     $this->form_validation->set_message('check_database', 'Invalid username or middlename');
     return false;
   }
 }
}
?>

