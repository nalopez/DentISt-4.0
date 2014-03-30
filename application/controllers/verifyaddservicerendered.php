<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class VerifyAddServiceRendered extends CI_Controller {

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
					if($row != "System Maintenance"){
						$bool = true;
						break;
					}
				}
 
			if($bool){
		//This method will have the credentials validation
	   			$this->load->library('form_validation');

			$this->form_validation->set_rules('servicedate[]', 'Date', 'trim|required|xss_clean');
			$this->form_validation->set_rules('rendered[]', 'Services Rendered', 'trim|required|xss_clean');
			$this->form_validation->set_rules('fees[]', 'Fees', 'trim|required|xss_clean');

			if($this->form_validation->run() == FALSE)
		 	{
		     	//Field validation failed.  User redirected to login page
				if(form_error('servicedate[]')) $message = form_error('servicedate[]');
				elseif(form_error('rendered[]')) $message = form_error('rendered[]');
				elseif(form_error('fees[]')) $message = form_error('fees[]');

				$servicedate[] = $this->input->post('servicedate');
				$rendered[] = $this->input->post('rendered');
				$fees[] = $this->input->post('fees');

				foreach($servicedate[0] as $key=>$value){
					$servicedate2[] = $value;
				}
				foreach($rendered[0] as $key=>$value){
					$rendered2[] = $value;
				}
				foreach($fees[0] as $key=>$value){
					$fees2[] = $value;
				}	

				$data = array(
					'servicedate' => $servicedate2,
					'rendered' => $rendered2,
					'fees' => $fees2,
					'error' => $message,
					'invalid_input' => true);			

				$session_data = $this->session->userdata('current_patient');
				$id = $session_data['id'];

			       	$this->session->set_userdata('has_error', $data);

		     		redirect('/servicesrendered/patient/'.$id.'/');
		   	}
		   	else
		   	{
		     		//Go to private area
				// TAB9 - Consultation and Findings	
				$servicedate[] = $this->input->post('servicedate');
				$rendered[] = $this->input->post('rendered');
				$fees[] = $this->input->post('fees');

				$servicedatetxt = "";
				$renderedtxt = "";
				$feestxt = "";
			
				foreach($servicedate[0] as $row1){
					if($servicedatetxt == "")
						$servicedatetxt = $row1;
					else
						$servicedatetxt = $servicedatetxt."|".$row1;
				}
				foreach($rendered[0] as $row2){
					if($renderedtxt == "")
						$renderedtxt = $row2;
					else
						$renderedtxt = $renderedtxt."|".$row2;
				}
				foreach($fees[0] as $row3){
					if($feestxt == "")
						$feestxt = $row3;
					else
						$feestxt = $feestxt."|".$row3;
				}
				
				$session_data = $this->session->userdata('current_patient');
				$id = $session_data['id'];

				$this->session->unset_userdata('has_error');

				$session_data5 = $this->session->userdata('logged_in');
				$userID222 = $session_data5['username'];
				$userID22 = $this->user->getUserID($userID222);
				$userID2 = $userID22['userID'];
				$date = date("Y-m-d");

				if($this->patient->hasServicesRendered($id)) $this->user->addAuditTrail($userID2, 'UPDATE', 'Services Rendered', $id, $date);
					else $this->user->addAuditTrail($userID2, 'INSERT', 'Services Rendered', $id, $date);
		


				$this->patient->addPatientInfo_tab8($id, $servicedatetxt, $renderedtxt, $feestxt);

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

				/*print_r($servicedate);
				print_r($rendered);
				print_r($fees);*/

				echo "<br> $servicedatetxt, $renderedtxt, $feestxt";

				//echo "$id, $name, $date, $status, $approver";

				$this->patient->addServicesRenderedVersion($id, $userID, $date, $status, $approver, $approvedate);

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

	
}
?>
