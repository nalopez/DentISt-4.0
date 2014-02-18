<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
session_start(); //we need to call PHP's session object to access it through CI
class LoadDashboard extends CI_Controller {

 function __construct()
 {
   parent::__construct();
	$this->load->model('patient','',TRUE);
 }

	function patientdb(){
		$session_data = $this->session->userdata('logged_in');
		if($this->session->userdata('logged_in'))
   		{
			$bool = false;
			$role = $session_data['role'];
			foreach($role as $row){
				if($row == "Student"){
					$bool = true;
					break;
				}
			}
 
			if($bool){
				$this->session->unset_userdata('has_error');
				$id = $this->uri->segment(3);

				//$session_data2 = $this->session->userdata('current_patient');
				//$id = $session_data2['id'];

				/*$version = "";
			
				if($this->uri->segment(4) == ""){
					$ver = $this->patient->getLatest($id);
					foreach($ver as $row){
						$version = $row['patientinfoID'];
					}
				}
				else
					$version = $this->uri->segment(4);
*/
				//echo $version;

				$this->load->helper(array('form'));
				$data = $this->patient->getPatient($id);

				$ptnt_array = array();
				foreach($data as $row){
     				$ptnt_array = array(
         				'id' => $row['UPCD_ID'],
         				'name' => $row['patientFName']." ".substr($row['patientMName'], 0, 1).". ".$row['patientLName'],
					'age' => $row['age'],
					'address' => $row['houseno']." ".$row['street']." ".$row['brgy'].", ".$row['city'].", ".$row['province'],
					'gender' => $row['gender']
       				);
				}

				$data['services'] = $this->patient->getPatientServices($id);
				if($data['services']) {
					$data['servicetrue'] = true;
				} 
				else 
					$data['servicetrue'] = false; 

				//print_r($ptnt_array);
       				$this->session->set_userdata('current_patient', $ptnt_array);
				$data['recordexist'] = false;

				//$ver = $this->patient->getLatest($id);

				/*foreach($ver as $row){
					$version = $row['patientinfoID'];
				}*/
				/*if($this->patient->hasInfo($id)){
					$data['info'] = $this->patient->getPatientInfo($id, $version);
					$data['recordexist'] = true;
				}*/

				//print_r($data['info']);
				$this->load->view('patientdashboard_view', $data);
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

	function verifyentry(){
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
				$this->session->unset_userdata('has_error');
				$id = $this->uri->segment(3);

				$this->load->helper(array('form'));
				$data = $this->patient->getPatient($id);

				$ptnt_array = array();
				foreach($data as $row){
     				$ptnt_array = array(
         				'id' => $row['UPCD_ID'],
         				'name' => $row['patientFName']." ".substr($row['patientMName'], 0, 1).". ".$row['patientLName'],
					'age' => $row['age'],
					'address' => $row['houseno']." ".$row['street']." ".$row['brgy'].", ".$row['city'].", ".$row['province'],
					'gender' => $row['gender']
       				);
				}

				$data['services'] = $this->patient->getPatientInfoTreatmentPlan($id);
				if($data['services']) {
					$data['servicetrue'] = true;
				} 
				else 
					$data['servicetrue'] = false; 

				$session_data = $this->session->userdata('logged_in');
				$data['sec'] = $session_data['section'];
       				$this->session->set_userdata('current_patient', $ptnt_array);
				$data['recordexist'] = false;

				//print_r($data['info']);
				$this->load->view('patientdashboardfaculty_view', $data);
			}
			else
				redirect('facultytasks');
		}
		else
   		{
     			//If no session, redirect to login page
     			redirect('login', 'refresh');
   		}
		
	}

	function claimpatient(){
		$session_data = $this->session->userdata('logged_in');
		if($this->session->userdata('logged_in'))
   		{
			$bool = false;
			$role = $session_data['role'];
			foreach($role as $row){
				if($row == "Student"){
					$bool = true;
					break;
				}
			}
 
			if($bool){
				$this->session->unset_userdata('has_error');
				$id = $this->uri->segment(3);

				$this->load->helper(array('form'));
				$data = $this->patient->getPatient($id);

				$ptnt_array = array();
				foreach($data as $row){
     				$ptnt_array = array(
         				'id' => $row['UPCD_ID'],
         				'name' => $row['patientFName']." ".substr($row['patientMName'], 0, 1).". ".$row['patientLName'],
					'age' => $row['age'],
					'address' => $row['houseno']." ".$row['street']." ".$row['brgy'].", ".$row['city'].", ".$row['province'],
					'gender' => $row['gender']
       				);
				}

				$data['services'] = $this->patient->getPatientInfoTreatmentPlan($id);
				if($data['services']) {
					$data['servicetrue'] = true;
				} 
				else 
					$data['servicetrue'] = false; 

				//print_r($ptnt_array);

				$session_data = $this->session->userdata('logged_in');
				$data['sec'] = $session_data['section'];
       				$this->session->set_userdata('current_patient', $ptnt_array);
				$data['recordexist'] = false;

				//print_r($data['info']);
				$this->load->view('patientdashboardclaim_view', $data);
			}
			else
				redirect('facultytasks');
		}
		else
   		{
     			//If no session, redirect to login page
     			redirect('login', 'refresh');
   		}
		
	}

}

?>


