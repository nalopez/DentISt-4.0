<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class VerifyAddRadiographicExam extends CI_Controller {

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

			$this->form_validation->set_rules('date[]', 'Date', 'trim|required|xss_clean');
			$this->form_validation->set_rules('tooth[]', 'Tooth No.', 'trim|required|xss_clean|callback_check_tooth');
			$this->form_validation->set_rules('findings[]', 'Findings', 'trim|required|xss_clean');

			if($this->form_validation->run() == FALSE)
		 	{
		     	//Field validation failed.  User redirected to login page
				if(form_error('date[]')) $message = form_error('date[]');
				elseif(form_error('tooth[]')) $message = form_error('tooth[]');
				elseif(form_error('findings[]')) $message = form_error('findings[]');

				$date[] = $this->input->post('date');
				$tooth[] = $this->input->post('tooth');
				$findings[] = $this->input->post('findings');

				foreach($date[0] as $key=>$value){
					$date2[] = $value;
				}
				foreach($tooth[0] as $key=>$value){
					$tooth2[] = $value;
				}
				foreach($findings[0] as $key=>$value){
					$findings2[] = $value;
				}	

				$data = array(
					'date' => $date2,
					'tooth' => $tooth2,
					'findings' => $findings2,
					'error' => $message,
					'invalid_input' => true);			

				$session_data = $this->session->userdata('current_patient');
				$id = $session_data['id'];

			       	$this->session->set_userdata('has_error', $data);

		     		redirect('/radiographicexam/patient/'.$id.'/');
		   	}
		   	else
		   	{
		     		//Go to private area
				// TAB9 - Consultation and Findings	
				$date[] = $this->input->post('date');
				$tooth[] = $this->input->post('tooth');
				$findings[] = $this->input->post('findings');

				$datetxt = "";
				$toothtxt = "";
				$findingstxt = "";

				foreach($date[0] as $row){
					if($datetxt == "")
						$datetxt = $row;
					else
						$datetxt = $datetxt."|".$row;
				}
				foreach($tooth[0] as $row2){
					if($toothtxt == "")
						$toothtxt = $row2;
					else
						$toothtxt = $toothtxt."|".$row2;
				}
				foreach($findings[0] as $row3){
					if($findingstxt == "")
						$findingstxt = $row3;
					else
						$findingstxt = $findingstxt."|".$row3;
				}
				
				$session_data = $this->session->userdata('current_patient');
				$id = $session_data['id'];

				$this->session->unset_userdata('has_error');

				$session_data5 = $this->session->userdata('logged_in');
				$userID222 = $session_data5['username'];
				$userID22 = $this->user->getUserID($userID222);
				$userID2 = $userID22['userID'];
				$date = date("Y-m-d");

				if($this->patient->hasRadioExam($id)) $this->user->addAuditTrail($userID2, 'UPDATE', 'Radiographic Exam', $id, $date);
				else $this->user->addAuditTrail($userID2, 'INSERT', 'Radiographic Exam', $id, $date);
		


				$this->patient->addPatientInfo_tab7($id, $datetxt, $toothtxt, $findingstxt);

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
				//print_r($date);
				//print_r($tooth);
				//print_r($findings);
				

				echo "$datetxt, $toothtxt, $findingstxt";

				//echo "$id, $name, $date, $status, $approver";

				$this->patient->addRadiographicExamVersion($id, $userID, $date, $status, $approver, $approvedate);

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

	function check_tooth($tooth){
		//print_r($tooth);

		foreach($tooth[0] as $row){
			if(preg_match("/^([-a-z_ ])+$/i", $row)){
				$this->form_validation->set_message('check_tooth', 'Tooth field only accepts a numeric entry');
				break;
				return false;
			}
		}
		
		return true;
	}


}
?>
