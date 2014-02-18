<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
session_start(); //we need to call PHP's session object to access it through CI
class MedAndSocHistory extends CI_Controller {

 function __construct()
 {
   parent::__construct();
	$this->load->model('patient','',TRUE);
 }

	function patient(){
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
				$id = $this->uri->segment(3);
				$version = "";
			
				if($this->uri->segment(4) == ""){
					$ver = $this->patient->getLatest($id);
					foreach($ver as $row){
						$version = $row['patientinfoID'];
					}
				}
				else
					$version = $this->uri->segment(4);

				//echo $version;

				$this->load->helper(array('form'));
				$data = $this->patient->getPatient($id);
				
				$data['recordexist'] = false;

				//$ver = $this->patient->getLatest($id);

				/*foreach($ver as $row){
					$version = $row['patientinfoID'];
				}*/
				if($this->patient->hasMedAndSocHisto($id)){
					$data['info'] = $this->patient->getPatientInfoMedAndSocHisto($id);
					$data['recordexist'] = true;
				}

				//print_r($data['info']);
				$this->load->view('medandsochistory_view', $data);
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

	function view(){
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
				$id = $this->uri->segment(3);
				$version = "";
			
				if($this->uri->segment(4) == ""){
					$ver = $this->patient->getLatest($id);
					foreach($ver as $row){
						$version = $row['patientinfoID'];
					}
				}
				else
					$version = $this->uri->segment(4);

				//echo $version;

				$this->load->helper(array('form'));
				$data = $this->patient->getPatient($id);
				
				$data['recordexist'] = false;

				//$ver = $this->patient->getLatest($id);

				/*foreach($ver as $row){
					$version = $row['patientinfoID'];
				}*/
				if($this->patient->hasMedAndSocHisto($id)){
					$data['info'] = $this->patient->getPatientInfoMedAndSocHistoRO($id, $version);
					$data['recordexist'] = true;
				}

				//print_r($data['info']);
				$this->load->view('medandsochistoryreadonly_view', $data);
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


