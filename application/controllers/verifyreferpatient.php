<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class VerifyReferPatient extends CI_Controller {

 function __construct()
 {
   parent::__construct();
   $this->load->model('patient','',TRUE);
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
			if($row != "System Administrator"){
				$bool = true;
				break;
			}
		}
 
		if($bool){
			//This method will have the credentials validation
		  	$this->load->library('form_validation');

			$this->form_validation->set_rules('refertosection', 'Refer to Menu', 'trim|required|xss_clean|callback_check_refertomenu');

			if($this->form_validation->run() == FALSE){
				if(form_error('refertosection')) $message = form_error('refertosection');

			$sess_array = array();
     			
			       $sess_array = array(
				 'error' => $message,
				'invalid_input' => true
			       );
			       $this->session->set_userdata('has_error_dashboard', $sess_array);

				$id = $this->input->post('id');
			     	redirect('loaddashboard/patientdb/'.$id);
			}
			else{
				$this->session->unset_userdata('has_error_dashboard');
			     	//Go to private area
				$refer = $this->input->post('refertosection');
				$id = $this->input->post('id');
				$name = "";

				$session_data3 = $this->session->userdata('logged_in');
				$username = $session_data3['username'];
				$info = $this->user->getUserId($username);
				$userID = $info['userID'];



				$section = "";
				$sect = $session_data['section'];
				foreach($sect as $row){
					if($row != "System Maintenance"){
						$section = $row;
						break;
					}
				}

				$rolef = "";
				$rolex2 = $session_data['role'];
				foreach($rolex2 as $row){
					if($row != "System Administrator"){
						$rolef = $row;
						break;
					}
				}
 
				if($rolef == "Student"){
					$date = date("Y-m-d");
					$status = "Pending";
					$approver = "Pending";

					$this->patient->addPatientDashboardVersion($id, $refer, $userID, $date, $status, $approver, $section);
					$this->patient->updatePatientRecordStatus($id, "for approval");
					$this->patient->updateClinician($id, $userID);
					$this->patient->resetPatientRemark($id);

					redirect('/loaddashboard/patientdb/'.$id);
				}
				else{
					$date = date("Y-m-d");
					$status = "Approved";
					$approver = $userID;

					$this->patient->addPatientDashboardVersion($id, $refer, $userID, $date, $status, $approver, $section);
					$this->patient->updatePatientRecordStatus($id, "Open");
					$this->patient->updateClinician($id, $userID);
					$this->patient->resetPatientRemark($id);

					$student = $this->patient->getStudentId($id);
					$section = "";
					foreach($student as $row){
						$section = $row['section7'];
					}

					$this->patient->deleteStudentTask($id);
					$this->patient->updatePatient2($id, $refer, $userid, "Approved");
					$this->patient->setApproved($id, $userid, $date);

					redirect('/home');

				}
			
				
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

 	function check_refertomenu($menu)
 	{
		$bool = TRUE;
		if($menu == "Select section.."){
			$bool = FALSE;		
			$this->form_validation->set_message('check_refertomenu', 'Please select a section');	
		}
		return $bool;
	}

	
}
?>

