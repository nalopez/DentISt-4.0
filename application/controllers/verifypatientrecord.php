<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

require('addpatient.php');

class VerifyPatientRecord extends CI_Controller {

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
			$role = $session_data['role'];
			foreach($role as $row){
				if($row == "Faculty"){
					$bool = true;
					break;
				}
			}
 
			if($bool){
		//This method will have the credentials validation
	   		/*	$this->load->library('form_validation');

			$this->form_validation->set_rules('lastname', 'Last Name', 'trim|required|xss_clean');
			$this->form_validation->set_rules('firstname', 'Given Name', 'trim|required|xss_clean');
			$this->form_validation->set_rules('midname', 'Middle Name', 'trim|required|xss_clean');
			$this->form_validation->set_rules('idnum', 'ID number', 'trim|required|xss_clean');
		   	$this->form_validation->set_rules('houseno', 'House Number', 'trim|required|xss_clean');
		   	$this->form_validation->set_rules('street', 'Street', 'trim|required|xss_clean');
		   	$this->form_validation->set_rules('brgy', 'Baranggay', 'trim|required|xss_clean');
		   	$this->form_validation->set_rules('city', 'City/Municipality', 'trim|required|xss_clean');
		   	$this->form_validation->set_rules('province', 'Province', 'trim|required|xss_clean');
		   	$this->form_validation->set_rules('sex', 'Gender', 'trim|required|xss_clean|callback_check_gender');
			$this->form_validation->set_rules('bdate', 'Birthdate', 'trim|required|xss_clean');
		   	$this->form_validation->set_rules('deceased', 'Deceased', 'trim|required|xss_clean|callback_check_deceased');
			

			if($this->form_validation->run() == FALSE)
		 	{

				$ID = $this->patient->getMaxId();
				foreach($ID as $row){
					$upcdid[] = $row['UPCD_ID']; 
				}
				foreach($upcdid as $row){
					$explode = explode('-',$row,2);
					$ctr[] = intval($explode[1]);
				}

				$max=0;
				for($i=0; $i<sizeof($ctr); $i++){
					if($ctr[$i] > $max){
						$max = $ctr[$i];
					}
				}

				$data['maxID'] = $max;
		     	//Field validation failed.  User redirected to login page
		     		$this->load->view('addpatient_view', $data);
		   	}
		   	else
		   	{*/
		     		//Go to private area
				$patientinfo = $this->input->post('patientinfotxt');
				$patientchecklist = $this->input->post('patientchecklisttxt');
				$medandsochisto = $this->input->post('medandsochistotxt');
				$dentaldata = $this->input->post('dentaldatatxt');
				$dentalchart = $this->input->post('dentalcharttxt');
				$treatmentplan = $this->input->post('treatmentplantxt');
				$radioexam = $this->input->post('radioexamtxt');
				$servicesrendered = $this->input->post('servicesrenderedtxt');
				$confind = $this->input->post('confindtxt');
				$patientid = $this->input->post('id');
				$decision = $this->input->post('decision');

				$session_data3 = $this->session->userdata('logged_in');				
				$username = $session_data3['username'];
				$faculty = $this->user->getUserId($username);
				$facultyid = "";
				foreach($faculty as $row){
					$facultyid = $row['userID'];
				}

				$student = $this->patient->getStudentId($patientid);
				$studentid = "";
				$section = "";
				foreach($student as $row){
					$studentid = $row['updatedBy7'];
					$section = $row['section7'];
					$currsection = $row['currentsection7'];
				}

				echo "studentID: $studentID";
	
				$inform = $this->patient->getPatientDashboardStatus2($patientid);
				$stats = "";
				if($inform){
				foreach($inform as $row){
					$stats = $row['updateStatus7'];
				}}

				$date = date("Y-m-d");

				$stsx = $this->patient->getRemarkStatus($patientid);
				$statxs = "";
				if($inform){
				foreach($stsx as $row){
					$statxs = $row['remarkStatus'];
				}}

				if($decision == "Approved"){
					if($this->patient->hasTempRecord($patientid)){
						$this->patient->deleteStudentTask($patientid);
						$this->patient->updatePatientTemporary($studentid, $facultyid, $patientid, $decision, $patientinfo, $patientchecklist, $medandsochisto, $dentaldata, $dentalchart, $treatmentplan, $radioexam, $servicesrendered, $confind);
						$this->patient->updatePatient($patientid, $section, $facultyid, $decision);
						$this->patient->setApproved($patientid, $facultyid, $date);
					}
					/*elseif($statxs = 'Pending' && $stats = 'Rejected'){
						$this->patient->updatePatientRejected2($studentid, $facultyid, $patientid, $decision, $patientinfo, $patientchecklist, $medandsochisto, $dentaldata, $dentalchart, $treatmentplan);
						$this->patient->updatePatient($patientid, $section, $facultyid, $decision);
						$this->patient->deleteStudentTask($patientid);
					}*/
					else{
						$this->patient->deleteStudentTask($patientid);		
						$this->patient->updatePatient($patientid, $section, $facultyid, $decision);
						$this->patient->addRemark($studentid, $facultyid, $patientid, $decision, $patientinfo, $patientchecklist, $medandsochisto, $dentaldata, $dentalchart, $treatmentplan, $radioexam, $servicesrendered, $confind);
						$this->patient->setApproved($patientid, $facultyid, $date);
					}
				}
				elseif($decision == "Temporary"){
					if($this->patient->hasTempRecord($patientid)){
						$this->patient->deleteStudentTask($patientid);
						$this->patient->updatePatientTemporary($studentid, $facultyid, $patientid, $decision, $patientinfo, $patientchecklist, $medandsochisto, $dentaldata, $dentalchart, $treatmentplan, $radioexam, $servicesrendered, $confind);
						$this->patient->updatePatientApprover($patientid, $facultyid);
					}
					/*elseif($statxs = 'Pending' && $stats = 'Rejected'){
						$this->patient->updatePatientRejected2($studentid, $facultyid, $patientid, $decision, $patientinfo, $patientchecklist, $medandsochisto, $dentaldata, $dentalchart, $treatmentplan);
						$this->patient->updatePatient($patientid, $section, $facultyid, $decision);
						$this->patient->deleteStudentTask($patientid);
					}*/
					else{ 
						$this->patient->addRemark($studentid, $facultyid, $patientid, $decision, $patientinfo, $patientchecklist, $medandsochisto, $dentaldata, $dentalchart, $treatmentplan, $radioexam, $servicesrendered, $confind);
						$this->patient->updatePatientApprover($patientid, $facultyid);
					}
				}
				elseif($decision == "Rejected"){
					if($this->patient->hasTempRecord($patientid)){
						//echo "hasTempRecord";
						$this->patient->deleteStudentTask($patientid);
						$this->patient->updatePatientTemporary($studentid, $facultyid, $patientid, $decision, $patientinfo, $patientchecklist, $medandsochisto, $dentaldata, $dentalchart, $treatmentplan, $radioexam, $servicesrendered, $confind);
						$this->patient->updatePatientApprover($patientid, $facultyid);
						$this->patient->updatePatientRejected($patientid, $studentid, $decision, $currsection, $section);
						$this->patient->setRejected($patientid, $facultyid, $date);
					}
					/*elseif($statxs = 'Pending' && $stats = 'Rejected'){
						$this->patient->updatePatientRejected2($studentid, $facultyid, $patientid, $decision, $patientinfo, $patientchecklist, $medandsochisto, $dentaldata, $dentalchart, $treatmentplan);
						$this->patient->updatePatient($patientid, $section, $facultyid, $decision);
						$this->patient->deleteStudentTask($patientid);
					}*/
					else{
						//echo "noTempRecord";
						$this->patient->deleteStudentTask($patientid);
						$this->patient->addRemark($studentid, $facultyid, $patientid, $decision, $patientinfo, $patientchecklist, $medandsochisto, $dentaldata, $dentalchart, $treatmentplan, $radioexam, $servicesrendered, $confind);
						$this->patient->updatePatientApprover($patientid, $facultyid);
						$this->patient->updatePatientRejected($patientid, $studentid, $decision, $currsection, $section);
						$this->patient->setRejected($patientid, $facultyid, $date);
					}
				}

				redirect('loaddashboard/verifyentry/'.$patientid);
								

				
				
		   	//}
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

