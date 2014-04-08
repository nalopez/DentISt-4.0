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

   $this->form_validation->set_rules('answer', 'Secret Answer', 'trim|required|xss_clean|callback_check_secretanswer');
  // $this->form_validation->set_rules('midname', 'Middlename', 'trim|required|xss_clean|callback_check_database');

   if($this->form_validation->run() == FALSE)
   {
     //Field validation failed.  User redirected to login page
	$uname = $this->input->post('username');
	$data['uname'] = $uname;
	$data['secret_question'] = $this->user->getSecQues($uname);
     $this->load->view('forgotpword2_view', $data);
   }
   else
   {
     //Go to private area
	//echo "hello"; 
	$uname = $this->input->post('username');
	$data['uname'] = $uname;
     $this->load->view('forgotpword3_view', $data);
	
   }

 }

 function check_secretanswer($secans)
 {
   //Field validation succeeded.  Validate against database
   $uname = $this->input->post('username');

   //query the database
   //$result = $this->user->getMName($username);	

/*	$secret_question = $this->user->getSecQues($uname);	
	$secques = "";
	foreach($secret_question as $row){
		$secques = $row['secret_question'];
	}
*/
	$secanswer = $this->user->getSecAns($uname);
	$secanss = "";

 	if($secanswer == false){
		$this->form_validation->set_message('check_secretanswer', 'Answer is not correct. Try again.');
		return false;
	}
	else{
		foreach($secanswer as $row){
			$secanss = $row['secret_answer'];
			break;
		}	
		//echo $secanss;
		if($secanss != $secans){
			$this->form_validation->set_message('check_secretanswer', 'Answer is not correct. Try again');
			return false;
		}

		return true;	
	} 
 }
}
?>

