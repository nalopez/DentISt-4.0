<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class FacultyTasks extends CI_Controller {

 function __construct()
 {
   parent::__construct();
   $this->load->model('patient','',TRUE);
 }

 function index()
 {
	$session_data = $this->session->userdata('logged_in');
	if($this->session->userdata('logged_in'))
   	{
		$bool = false;
			$role = $session_data['role'];
			foreach($role as $row){
				if($row == "Faculty"){
					$bool = true;
					break;
				}
			}
 
			if($bool){
				$sec = $session_data['section'];
				$section = "";
				foreach($sec as $row){
					if($row != "System Maintenance"){
						$section = $row;
					}
				}
		     		$data['info'] = $this->patient->getFacultyTask($section);
				//$id = $info['UPCD_ID'];

				$this->load->view('facultytasks_view', $data);
				//print_r($data['info']);
		   	}
		else{
			redirect('home', 'refresh');
		}
	}else{
		//If no session, redirect to login page
     		redirect('login', 'refresh');
		}
   }

 	function check_gender($gender){
		if($gender == "Select one.."){
			$this->form_validation->set_message('check_gender', 'Select a gender.');
			return false;
		}
		
		return true;
	}

	function check_deceased($deceased){
		if($deceased == ""){
			$this->form_validation->set_message('check_deceased', 'Specify if patient is deceased.');
			return false;
		}
		
		return true;
	}

	function check_ID($id){
		$year = date("Y");
		$upcd_id = substr($year, 2)."-".$id;
		$getpatient = $this->patient->getPatient($upcd_id);

		if($getpatient == "false"){
			$this->form_validation->set_message('check_ID', 'UPCD_ID already exist. Enter a new ID.');
			return false;
		}
		
		return true;
	}

	/*function loadPatientDashboard($data){
		$this->load->view('patientdashboard_view', $data);
	}*/
}
?>

