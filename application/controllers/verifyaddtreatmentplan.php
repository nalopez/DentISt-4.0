<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class VerifyAddTreatmentPlan extends CI_Controller {

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
				$sec = $session_data['section'];
				foreach($sec as $row){
					if($row == "Oral Diagnosis"){
						$bool = true;
						break;
					}
				}
 
			if($bool){
		//This method will have the credentials validation
	   			$this->load->library('form_validation');

			$this->form_validation->set_rules('chiefcomp', 'Chief Complaints', 'trim|required|xss_clean');
			$this->form_validation->set_rules('servcode[]', 'Service Code', 'required');
			$this->form_validation->set_rules('ptp', 'Proposed Treatment Plan', 'trim|required|xss_clean');

			if($this->form_validation->run() == FALSE)
		 	{
		     	//Field validation failed.  User redirected to login page
				if(form_error('chiefcomp')) $message = form_error('chiefcomp');
				elseif(form_error('servcode[]')) $message = form_error('servcode[]');
				elseif(form_error('ptp')) $message = form_error('ptp');

				$servcode[] = $_POST['servcode'];
				$perio = "";
 				$rpd = "";
				$resto = "";
				$os = "";
				$fpd = ""; 
				$pedo = "";
				$endo = ""; 
				$cd = "";
 				$ortho = "";
				foreach($servcode[0] as $key=>$value){
					if($value == "PERIO") $perio='Yes';
					if($value == "RPD") $rpd='Yes'; 
					if($value == "Resto") $resto='Yes';
					if($value == "OS") $os='Yes';
					if($value == "FPD") $fpd='Yes';
					if($value == "PEDO") $pedo='Yes';
					if($value == "ENDO") $endo='Yes';
					if($value == "CD") $cd='Yes';
					if($value == "Ortho") $ortho='Yes'; 
				}

				$data = array(
					'chiefcomp' => $this->input->post('chiefcomp'),
					'perio' => $perio,
					'rpd' => $rpd,
					'resto' => $resto,
					'os' => $os,
					'fpd' => $fpd,
					'pedo' => $pedo,
					'endo' => $endo,
					'cd' => $cd,
					'ortho' => $ortho,
					'ptp' => $this->input->post('ptp'),
					'error' => $message,
					'invalid_input' => true);			

				$session_data = $this->session->userdata('current_patient');
				$id = $session_data['id'];

			       	$this->session->set_userdata('has_error', $data);

		     		redirect('/treatmentplan/patient/'.$id.'/');
		   	}
		   	else
		   	{
		     		//Go to private area
				// TAB6 - Treatment Plan
				$chiefcomp = $this->input->post('chiefcomp');
				$servcode[] = $_POST['servcode'];
				$perio = "";
 				$rpd = "";
				$resto = "";
				$os = "";
				$fpd = ""; 
				$pedo = "";
				$endo = ""; 
				$cd = "";
 				$ortho = "";
				foreach($servcode[0] as $key=>$value){
					if($value == "PERIO") $perio='Yes';
					if($value == "RPD") $rpd='Yes'; 
					if($value == "Resto") $resto='Yes';
					if($value == "OS") $os='Yes';
					if($value == "FPD") $fpd='Yes';
					if($value == "PEDO") $pedo='Yes';
					if($value == "ENDO") $endo='Yes';
					if($value == "CD") $cd='Yes';
					if($value == "Ortho") $ortho='Yes'; 
				}
				$ptp = $this->input->post('ptp');

				
				$session_data = $this->session->userdata('current_patient');
				$id = $session_data['id'];

				$this->session->unset_userdata('has_error');

				$session_data5 = $this->session->userdata('logged_in');
				$userID222 = $session_data5['username'];
				$userID22 = $this->user->getUserID($userID222);
				$userID2 = $userID22['userID'];
				$date = date("Y-m-d");

				if($this->patient->hasTreatmentPlan($id)) $this->user->addAuditTrail($userID2, 'UPDATE', 'Treatment Plan', $id, $date);
					else $this->user->addAuditTrail($userID2, 'INSERT', 'Treatment Plan', $id, $date);
		


				$this->patient->addPatientInfo_tab6($id, $chiefcomp, $perio, $rpd, $resto, $os, $fpd, $pedo, $endo, $cd, $ortho,$ptp);
				//$this->patient->addPatientServices($id, $perio, $rpd, $resto, $os, $fpd, $pedo, $endo, $cd, $ortho);

				$session_data2 = $this->session->userdata('current_patient');
				$session_data3 = $this->session->userdata('logged_in');
				$id = $session_data2['id'];

				$username = $session_data3['username'];
				$info = $this->user->getUserID($username);

				/*foreach($info as $row2){
					$name = $row2['userFName']." ".substr($row2['userMName'], 0, 1).". ".$row2['userLName']; 
				}*/
				
				$userID = $info['userID'];

				$date = date("Y-m-d");
				$status = "Pending";
				$approver = "Pending";
				$approvedate = "Pending";

				//echo "$id, $name, $date, $status, $approver";

				$this->patient->addTreatmentPlanVersion($id, $userID, $date, $status, $approver, $approvedate);

				redirect('/loaddashboard/patientdb/'.$id.'/');
				
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

	function check_servicecode($str){
		print_r($str);
		return false;
	}


}
?>
