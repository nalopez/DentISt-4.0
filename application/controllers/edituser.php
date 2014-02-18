<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
session_start(); //we need to call PHP's session object to access it through CI

class EditUser extends CI_Controller {

 	function __construct()
 	{
   		parent::__construct();
   		$this->load->model('user','',TRUE);
 	}

	function edit(){
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
			$userID = $this->uri->segment(3);
			//$userID = $_POST['userID'];
			//$session_data['editID'] = $userID;

			$session_data2 = $this->session->userdata('has_error');
			
			//$this->session->unset_userdata('has_error');


			$data2['info'] = $this->user->selectUsers2($userID);
			$role = $this->user->getRole($userID);
			//$data2['role'] = $role['role_type'];
			foreach($role as $row){
				$role2[] = $row['role_type'];
				$section[] = $row['role_section'];
				$roleID[] = $row['roleID'];
			}
			$data2['userID'] = $userID;
			$data2['sectiont'] = $section;
			$data2['rolet'] = $role2;
			$data2['roleIDt'] = $roleID;
			/*print_r($data2['section']);
			print_r($data2['role']);
			*/
			$this->load->helper(array('form'));
			$session_data = $this->session->userdata('logged_in');
     			$data2['usernamelog'] = $session_data['username'];
			$data2['invalid_input'] = false;
			$this->load->view('edituser_view', $data2);
			}
			else{
				redirect('home', 'refresh');
			}
		}
		else
   		{
     			//If no session, redirect to login page
     			redirect('login', 'refresh');
   		}
	}

	
	/* function index()
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
		//$userID = $this->uri->segment(3);
			$userID = $this->input->post('userID');
			//$session_data['editID'] = $userID;
			echo "userID: ".$userID;

			$data2['info'] = $this->user->selectUsers2($userID);
			$role = $this->user->getRole($userID);
			//$data2['role'] = $role['role_type'];
			foreach($role as $row){
				$role2[] = $row['role_type'];
				$section[] = $row['role_section'];
				$roleID[] = $row['roleID'];
			}
			$data2['userID'] = $userID;
			$data2['sectiont'] = $section;
			$data2['rolet'] = $role2;
			$data2['roleIDt'] = $roleID;
			
			$this->load->helper(array('form'));
			$session_data = $this->session->userdata('logged_in');
     			$data2['usernamelog'] = $session_data['username'];
			$this->load->view('edituser_view', $data2);
		}
		else{
			redirect('home', 'refresh');
		}
	}else{
		//If no session, redirect to login page
     		redirect('login', 'refresh');
		}
   }*/

}

?>
