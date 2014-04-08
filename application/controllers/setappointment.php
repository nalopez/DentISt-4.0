<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
session_start(); //we need to call PHP's session object to access it through CI
class SetAppointment extends CI_Controller {

 function __construct()
 {
   parent::__construct();
	$this->load->model('patient','',TRUE);
	$this->load->model('user','',TRUE);
 }

 function patient()
 {
   if($this->session->userdata('logged_in'))
   {
     $session_data = $this->session->userdata('logged_in');
	$bool = false;
	$role = $session_data['role'];
	foreach($role as $row){
		if($row == "Student" || $row="Faculty"){
			$bool = true;
			break;
		}
	}
 
	if($bool){


	     $data['username'] = $session_data['username'];

		$id = $this->uri->segment(3); 

		$user = $this->user->getUserID($session_data['username']);
		$userID = $user['userID'];

		//$id=$this->input->post('id');
		$data['patientid'] = $id;

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

		$this->session->set_userdata('current_patient', $ptnt_array);

		$clinicianID = $this->patient->isClinician($id);

		/*if($clinicianID!=$userID){
			$this->load->view('setappointmentprivate_view', $data);
		}
		else{*/

		$this->patient->updateClinician($id, $userID);
		$this->patient->deleteStudentTask($id);

		if(!$this->patient->hasAppointment($id)){
			$this->patient->setAppointment($id, $userID, 'Pending');
		}


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



		$this->session->set_userdata('current_patient', $ptnt_array);

		$this->load->helper(array('form'));
		$this->load->view('setappointment_view', $data);
//}
	}
	else{
		redirect('home');
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


