<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class VerifyAddUser extends CI_Controller {



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
		//This method will have the credentials validation
	   	$this->load->library('form_validation');

		$this->form_validation->set_rules('lastname', 'Last Name', 'trim|required|xss_clean');
		$this->form_validation->set_rules('firstname', 'First Name', 'trim|required|xss_clean');
		$this->form_validation->set_rules('midname', 'Middle Name', 'trim|required|xss_clean');
		$this->form_validation->set_rules('role', 'Role', 'trim|required|xss_clean|callback_check_role');
		$this->form_validation->set_rules('section', 'Section', 'trim|required|xss_clean');
	   	$this->form_validation->set_rules('username', 'Username', 'trim|required|xss_clean|callback_check_username');
	   	$this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean');
		$this->form_validation->set_rules('password2', 'Retype Password', 'trim|required|xss_clean|callback_check_password');
		$this->form_validation->set_rules('secques', 'Secret Question', 'trim|required|xss_clean|callback_check_question');
		$this->form_validation->set_rules('secans', 'Secret Answer', 'trim|required|xss_clean');

		if($this->form_validation->run() == FALSE)
	 	{
	     		$this->load->view('adduser_view');
	   	}
	   	else
	   	{
	     		//Go to private area
			$lname = $this->input->post('lastname');
			$fname = $this->input->post('firstname');
			$mname = $this->input->post('midname');
			$role = $this->input->post('role');
			$section = $this->input->post('section');
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			$secques = $this->input->post('secques');
			$secans = $this->input->post('secans');

			$userID222 = $session_data['username'];
			$userID22 = $this->user->getUserID($userID222);
			$userID2 = $userID22['userID'];
			$date = date("Y-m-d");

			if($section == "Select one.."){
				$section = " ";
			}

			$this->user->addUser($lname, $fname, $mname, $role, $section, $username, $password, $date, $secques, $secans);
	
			

			$idd = $this->user->getUserID($username);
			$id = $idd['userID'];

			$this->user->addAuditTrail($userID2, 'INSERT', 'Users', $id, $date);


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
		//If no session, redirect to login page
     		redirect('login', 'refresh');
		}
   }

 	function check_username($username)
 	{
		$fname = $this->input->post('firstname');
		$mname = $this->input->post('midname');
		$lname = $this->input->post('lastname');
	   	$result = $this->user->getUsernames($fname, $mname, $lname);
		$bool = TRUE;
		if($result){
     		foreach($result as $row)
     		{
			if($row->username == $username){
				$bool = FALSE;		
				$this->form_validation->set_message('check_username', 'Username already exist. Try again.');
				break;
			}
		}
		}
		return $bool;
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

