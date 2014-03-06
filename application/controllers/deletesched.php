<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
session_start(); //we need to call PHP's session object to access it through CI

class DeleteSched extends CI_Controller {

 	function __construct()
 	{
   		parent::__construct();
   		$this->load->model('user','',TRUE);
   		$this->load->model('patient','',TRUE);
 	}

	function delete(){
		$session_data = $this->session->userdata('logged_in');
		if($this->session->userdata('logged_in'))
   		{
			$bool = false;
			$rolex = $session_data['role'];
			foreach($rolex as $row){
				if($row == "Student"){
					$bool = true;
					break;
				}
			}
 
			if($bool){
			$userID222 = $session_data['username'];
			$userID22 = $this->user->getUserID($userID222);
			$userID2 = $userID22['$userID'];
			$date = date("Y-m-d");

			$patientID = $this->uri->segment(3);
			$this->patient->deleteAppointment($patientID, $userID2, $date);

     			
			redirect('viewappointments');
			
			
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
