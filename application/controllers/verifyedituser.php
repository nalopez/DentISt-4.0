<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
session_start(); //we need to call PHP's session object to access it through CI

class VerifyEditUser extends CI_Controller {

 function __construct()
 {
   parent::__construct();
   $this->load->model('user','',TRUE);
 }

 function index()
 {

	$session_data = $this->session->userdata('logged_in');
	if($this->session->userdata('logged_in'))
   	{
		$bool = false;
			$rolex = $session_data['role'];
			foreach($rolex as $row){
				if($row == "System Administrator"){
					$bool = true;
					break;
				}
			}
 
			if($bool){
				$userID = $this->input->post('userID');
	   	//This method will have the credentials validation
	   	$this->load->library('form_validation');

		$this->form_validation->set_rules('lastname', 'Last Name', 'trim|required|xss_clean');
		$this->form_validation->set_rules('firstname', 'First Name', 'trim|required|xss_clean');
		$this->form_validation->set_rules('midname', 'Middle Name', 'trim|required|xss_clean');
		//$this->form_validation->set_rules('role', 'Role', 'trim|required|xss_clean|callback_check_role');
		//$this->form_validation->set_rules('section', 'Section', 'trim|required|xss_clean');
	   	$this->form_validation->set_rules('username', 'Username', 'trim|required|xss_clean|callback_check_username');
	   	$this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean');
		$this->form_validation->set_rules('password2', 'Retype Password', 'trim|required|xss_clean|callback_check_password');
		$this->form_validation->set_rules('secques', 'Secret Question', 'trim|required|xss_clean|callback_check_question');
		$this->form_validation->set_rules('secans', 'Secret Answer', 'trim|required|xss_clean');


	   	if($this->form_validation->run() == FALSE)
	   	{
	     	//Field validation failed.  User redirected to login page
			//redirect('home', 'refresh');
			//$this->session->set_flashdata('errors', validation_errors());
			//echo "error";
			//redirect('edituser/edit/'.$userID);
			//redirect($this->input->post('redirect'));
			//$data['error'] = true;
	     		//$this->load->view('edituser_view', $data

			//if($this->form_validation->error('username')){}

			if(form_error('firstname')) $message = form_error('firstname');
		elseif(form_error('midname')) $message = form_error('midname');
		elseif(form_error('lastname')) $message = form_error('lastname');
		elseif(form_error('role')) $message = form_error('role');
		elseif(form_error('section')) $message = form_error('section');
		elseif(form_error('username')) $message = form_error('username');
		elseif(form_error('password')) $message = form_error('password');
		elseif(form_error('password2')) $message = form_error('password2');
		elseif(form_error('secques')) $message = form_error('secques');
		elseif(form_error('secans')) $message = form_error('secans');

			$sess_array = array();
     			
			       $sess_array = array(
				 'error' => $message,
				'invalid_input' => true
			       );
			       $this->session->set_userdata('has_error', $sess_array);
			
			redirect('edituser/edit/'.$userID);
		}
	   	else
	   	{
	    	//Go to private area

			$userID = $this->input->post('userID');
			$lname = $this->input->post('lastname');
			$fname = $this->input->post('firstname');
			$mname = $this->input->post('midname');
			//$role = $this->input->post('role');
			//$section = $this->input->post('section');

			$size = $this->input->post('size');
			for($i=0; $i<$size; $i++){
				$section[] = $this->input->post('section'.$i);
				$role[] = $this->input->post('role'.$i);
				$roleID[] = $this->input->post('roleID'.$i);
			}			

			$username = $this->input->post('username');
			$password = $this->input->post('password');
			$secques = $this->input->post('secques');
			$secans = $this->input->post('secans');

			//print_r($section);
			//print_r($role);
			//echo $userID." ".$lname." ".$fname." ".$mname." ".$role." ".$section." ".$username." ".$password;
			$this->session->unset_userdata('has_error');

			$userID222 = $session_data['username'];
			$userID22 = $this->user->getUserID($userID222);
			$userID2 = $userID22['userID'];
			$date = date("Y-m-d");

			$this->user->editUser($userID, $userID2, $lname, $fname, $mname, $roleID, $role, $section, $username, $password, $date, $secques, $secans);

			$this->load->helper(array('form'));
	   		$data2['users'] = $this->user->selectUsers();
			foreach($data2['users'] as $row){
				$name = $row->userFName." ".$row->userLName;
				$uname = $row->username;
				$data2['users2'][$uname] = $this->user->selectUsers_pt2($name, $uname);
			}	

			$session_data = $this->session->userdata('logged_in');
	     		$data2['usernamelog'] = $session_data['username'];
			
			$this->load->view('manageusers_view', $data2);
	
	   	}
		}
		else{
			redirect('home', 'refresh');
		}
	}else{
		redirect('login', 'refresh');
	}
}

 	function check_username($username)
 	{
		$userID = $this->input->post('userID');
		/*$mname = $this->input->post('midname');
		$lname = $this->input->post('lastname');
	   	*/
		$result = $this->user->getUsernames2(/*$fname, $mname, $lname*/$userID);
		$bool = TRUE;
		//if($result){
     		foreach($result as $row)
     		{
			if($row['username'] == $username){
				$bool = FALSE;		
				$this->form_validation->set_message('check_username', 'Username already exist. Try again.');
				break;
			}
		}
		//}
		return true;
	}   

	function check_password($password2){
		$password = $this->input->post('password');
		$bool = TRUE;
		if($password != $password2){
			$this->form_validation->set_message('check_password', 'Passwords do not match.');
			$bool = FALSE;		
		}
		return $bool;
	}   

	function check_role($role){
		$bool = true;
		$section = $this->input->post('section');
		if($role == "Select one.."){
			$this->form_validation->set_message('check_role', 'Choose a valid role.');
			$bool = FALSE;
		}
		elseif($role != "System Administrator" && $section == "Select one.."){
			$this->form_validation->set_message('check_role', 'Choose a valid section.');
			$bool = FALSE;
		}
		return $bool;
	}

	function check_question($ques){
		$bool = true;
		//$section = $this->input->post('section');
		if($ques == "Select a question.."){
			$this->form_validation->set_message('check_question', 'Choose a valid security question.');
			$bool = FALSE;
		}
		return $bool;
	}
}
?>

