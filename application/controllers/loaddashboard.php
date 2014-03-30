<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
session_start(); //we need to call PHP's session object to access it through CI
class LoadDashboard extends CI_Controller {

 function __construct()
 {
   parent::__construct();
	$this->load->model('patient','',TRUE);
	$this->load->model('user','',TRUE);
 }

	function patientdb(){
		$session_data = $this->session->userdata('logged_in');
		if($this->session->userdata('logged_in'))
   		{
			$bool = false;
			$role = $session_data['role'];
			foreach($role as $row){
				if($row != "System Administrator"){
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

				//print_r($ptnt_array);
       				$this->session->set_userdata('current_patient', $ptnt_array);
				$data['recordexist'] = false;

				$stat = $this->patient->getPatientRecordStatus($id);
				$status = "";
				foreach($stat as $row){
					$status = $row['status'];
				}
	
				$idx = $this->user->getUserID($session_data['username']);
				$userID = $idx['userID'];
				$data['rejected'] = false;
				$data['remarksInfo'] = false;

				$userID222 = $session_data['username'];
				$userID22 = $this->user->getUserID($userID222);
				$userID2 = $userID22['userID'];
				$date = date("Y-m-d");

				$clinicianID = $this->patient->isClinician($id);

				if($this->patient->getPatientDashboardStatus3($id)){
					$data['remarksInfo'] = $this->patient->getRemarks2($id, $userID);
				}

				$dec = $this->patient->getPatientDashboardStatus2($id);
				//print_r($dec);
				$decision = "";
				if($dec){
					foreach($dec as $row){
						$decision = $row['updateStatus7'];
					}
				}	
	
				//echo $decision;
				if($status == "for approval"){
					if($clinicianID==$userID && $decision == "Rejected"){
						$data['rejected'] = true;
						$this->patient->deleteStudentTask($id);
						$this->load->view('patientdashboard_view', $data);
						
					}
					else
						$this->load->view('patientdashboardpending_view', $data);
				}
				else{
					if($clinicianID!=$userID){
						$this->load->view('patientdashboardprivate_view', $data);
					}
					else{ 
						$this->load->view('patientdashboard_view', $data);
						$this->patient->deleteStudentTask($id);					}
				}
				//$ver = $this->patient->getLatest($id);

				/*foreach($ver as $row){
					$version = $row['patientinfoID'];
				}*/
				/*if($this->patient->hasInfo($id)){
					$data['info'] = $this->patient->getPatientInfo($id, $version);
					$data['recordexist'] = true;
				}*/

				//print_r($data['info']);
				
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
			$role = $session_data['role'];
			foreach($role as $row){
				if($row == "Faculty"){
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
				$data['remarkVisible'] = false;

				//print_r($data['info']);

				$stat = $this->patient->getRemarkStatus($id);
				$status = "";
				if($stat){
				foreach($stat as $row){
					$status = $row['remarkStatus'];
				}
				}
				$userID222 = $session_data['username'];
				$userID22 = $this->user->getUserID($userID222);
				$userID2 = $userID22['userID'];
				$date = date("Y-m-d");

				$data['status'] = "";
				
				if($status == "Approved"){
					$data['status'] = 'Approved';
					$data['remarks'] = $this->patient->getRemarks($id);
					$data['remarkVisible'] = "true";
				}
				elseif($status == "Temporary"){
					/*$remarkID = "";
					$data['status'] = 'Temporary';
					$remarkx = $this->patient->getLatestRemarks($id);
					foreach($remarkx as $row){
						$remarkID = $row['remarkID'];
					}*/

					$data['status'] = 'Temporary';					
					$data['remarks'] = $this->patient->getRemarks($id);
					//print_r($data['remarks']);
					$data['remarkVisible'] = "true";
				}
				elseif($status == "Rejected"){
					$data['status'] = 'Rejected';
					$data['remarks'] = $this->patient->getRemarks($id);
					$data['remarkVisible'] = "true";
				}

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
				if($row == "Student" || $row="Faculty"){
					$bool = true;
					break;
				}
			}
 
			if($bool){
				$this->session->unset_userdata('has_error');
				$id = $this->uri->segment(3);

				$this->load->helper(array('form'));
				$data = $this->patient->getPatient($id);

				$section="";
				$sect = $session_data['section'];
				foreach($sect as $row){
					if($row != "System Maintenance"){
						$section = $row;
						break;
					}
				}

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

				/*$data['services'] = $this->patient->getPatientInfoTreatmentPlan($id);
				if($data['services']) {
					$data['servicetrue'] = true;
				} 
				else 
					$data['servicetrue'] = false; */

				//print_r($ptnt_array);

				$session_data = $this->session->userdata('logged_in');
				$data['sec'] = $session_data['section'];
       				$this->session->set_userdata('current_patient', $ptnt_array);
				$data['recordexist'] = false;

				//print_r($data['info']);
				if(!$this->patient->isClinician($id)){
					$this->load->view('patientdashboardclaim_view', $data);
				}
				else{
					
					$clinicianID = $this->patient->isClinician($id);
					
					$roles = $this->user->getRole($clinicianID);
					$sect2 = "";
					foreach($roles as $row2){
						$sect2 = $row2['role_section'];
					}
					
					if($sect2 == $section){
						redirect('loaddashboard/patientdb/'.$id);
					}
					else{
						$this->load->view('patientdashboardclaim_view', $data);
					}


				}
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

	function clmptnt(){
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

				$username = $session_data['username'];
				$ids = $this->user->getUserID($username);
				$facultyid = $ids['userID'];

				$this->patient->updateClinician($id, $facultyid);

				redirect('loaddashboard/patientdb/'.$id);
				
			}
			else
				redirect('home');
		}
		else
   		{
     			//If no session, redirect to login page
     			redirect('login', 'refresh');
   		}
		
	}

}

?>


