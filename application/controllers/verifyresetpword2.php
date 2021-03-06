<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class VerifyResetPword2 extends CI_Controller {

 function __construct()
 {
   parent::__construct();
   $this->load->model('user','',TRUE);
 }

 function index()
 {
   //This method will have the credentials validation
   $this->load->library('form_validation');

   $this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean');
$this->form_validation->set_rules('password2', 'Password2', 'trim|required|xss_clean|callback_check_password');
  // $this->form_validation->set_rules('midname', 'Middlename', 'trim|required|xss_clean|callback_check_database');

   if($this->form_validation->run() == FALSE)
   {
     //Field validation failed.  User redirected to login page
$uname = $this->input->post('username');
	$data['uname'] = $uname;
     $this->load->view('forgotpword3_view', $data);
   }
   else
   {
     //Go to private area
	$pword = $this->input->post('password');
	$uname = $this->input->post('username');
	$data['uname'] = $uname;
     $this->user->changePword($uname, $pword);

	$this->load->view('resetpwordsuccess');
	
   }

 }

 	function check_password($password2){
		$password = $this->input->post('password');
		$bool = TRUE;
		if($password != $password2){
			$this->form_validation->set_message('check_password', 'Passwords do not match.');
			$bool = FALSE;		
		}
		elseif(strlen($password) < 6 || strlen($password2) < 6){
			$this->form_validation->set_message('check_password', 'Password is too short. Must be 6 or more characters');
			$bool = FALSE;	
		}
		return $bool;
	}   

}
?>

