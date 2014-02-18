<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
session_start(); //we need to call PHP's session object to access it through CI
class LoadDashboard extends CI_Controller {

 function __construct()
 {
   parent::__construct();
	$this->load->model('user','',TRUE);
 }

	function patientdb(){
		$session_data = $this->session->userdata('logged_in');
		if($this->session->userdata('logged_in'))
   		{
			$bool = false;
			$sec = $session_data['section'];
			foreach($sec as $row){
				if($row == "Oral Diagnosis"){
					$bool = true;
					break;
				}
			}
 
			if($bool){
			//$session_data = $this->session->userdata('logged_in');
     			//$data['usernamelog'] = $session_data['username'];
			//$this->load->helper(array('form'));
				$serviceneeded = $this->patient->getPatientInfoTreatmentPlan();

				$this->load->view('patientdashboard_view', $serviceneeded);
			}
			else
				redirect('home', 'refresh');
		}
		else
   		{
     			//If no session, redirect to login page
     			redirect('login', 'refresh');
   		}
		
	}

}

?>


