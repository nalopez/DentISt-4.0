<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class VerifyResetPwordUname extends CI_Controller {

 function __construct()
 {
   parent::__construct();
   $this->load->model('user','',TRUE);
 }

 function index()
 {
   //This method will have the credentials validation
   $this->load->library('form_validation');

   $this->form_validation->set_rules('username', 'Username', 'trim|required|xss_clean|callback_check_uname');
  // $this->form_validation->set_rules('midname', 'Middlename', 'trim|required|xss_clean|callback_check_database');

   if($this->form_validation->run() == FALSE)
   {
     //Field validation failed.  User redirected to login page
     $this->load->view('forgotpword_view');
   }
   else
   {
     //Go to private area

	$uname = $this->input->post('username');
	//echo $uname;
	$data['uname'] = $uname;
	$data['secret_question'] = $this->user->getSecQues($uname);
	//print_r($data['secret_question']);
	//echo "hello";

	    $this->load->view('forgotpword2_view', $data);
	
   }

 }

 function check_uname($username)
 {
   //Field validation succeeded.  Validate against database
   //$username = $this->input->post('username');

   //query the database
   	$result = $this->user->getUsernames3();

	if($result == false){
		$this->form_validation->set_message('check_uname', 'Username does not exist.');
		return false;
	}
	else{
		$isThere = false;
		foreach($result as $row){
			if($row['username'] == $username){
	   			$isThere = true;
				break;
			}
		}

		if($isThere == false){
			$this->form_validation->set_message('check_uname', 'Username does not exist.');
			return false;
		}

		return true;	
	}

  /* if($result)
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
   }*/
 }
}
?>

