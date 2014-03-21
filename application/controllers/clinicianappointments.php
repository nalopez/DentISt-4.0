<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
session_start(); //we need to call PHP's session object to access it through CI
class ClinicianAppointments extends CI_Controller {

 function __construct()
 {
   parent::__construct();
	$this->load->model('patient','',TRUE);
	$this->load->model('user','',TRUE);
 }

	function index(){
		$session_data = $this->session->userdata('logged_in');
		if($this->session->userdata('logged_in'))
   		{
			$bool = false;
			$rolex = $session_data['role'];
			foreach($rolex as $row){
				if($row == "Faculty"){
					$bool = true;
					break;
				}
			}
 
			if($bool){
	     			$this->load->helper(array('form'));
				$sec = $session_data['section'];
				$section = "";
				foreach($sec as $row){
					if($row != "System Maintenance"){
						$section = $row;
					}
				}

				$students = $this->user->getUsers($section);

				foreach($students as $row){
					$studentID = $row['userID'];
					$data2['appointments'][$studentID] = $this->patient->getAppointments($studentID);
				}


	   			//$data2['appointments'] = $this->patient->getAppointments($userID);
				//print_r($data2['appointments']);
				//print_r($data2);

				
				$this->load->view('viewclinicianappointments_view', $data2);
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


