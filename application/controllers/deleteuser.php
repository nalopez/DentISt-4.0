<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
session_start(); //we need to call PHP's session object to access it through CI

class DeleteUser extends CI_Controller {

 	function __construct()
 	{
   		parent::__construct();
   		$this->load->model('user','',TRUE);
 	}

	function delete(){
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
			$userID222 = $session_data['username'];
			$userID22 = $this->user->getUserID($userID222);
			$userID2 = $userID22['$userID'];
			$date = date("Y-m-d");

			$userID = $this->uri->segment(3);
			

			$this->user->deleteUser($userID, $userID2, $date);

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

}

?>
