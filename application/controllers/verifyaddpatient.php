<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

require('addpatient.php');

class VerifyAddPatient extends CI_Controller {

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
		   	{
		     		//Go to private area
				$fname = $this->input->post('firstname');
				$mname = $this->input->post('midname');
				$lname = $this->input->post('lastname');
				$idyr = $this->input->post('idyr');
				$idnum = $this->input->post('idnum');
				$houseno = $this->input->post('houseno');
				$street = $this->input->post('street');
				$brgy = $this->input->post('brgy');
				$city = $this->input->post('city');
				$province = $this->input->post('province');
				$sex = $this->input->post('sex');
				$bdate = $this->input->post('bdate');
				$age = $this->input->post('age');
				$deceased = $this->input->post('deceased');
			
				$id = $idyr."-".$idnum;
				$date = date("Y-m-d");

				$userID = $this->user->getUserID($session_data['username']);
				$userid = $userID['userID'];

				//$id = '14-00003';
			
				//echo "$id, $fname, $mname, $lname, $houseno, $street, $brgy, $city, $province, $sex, $bdate, $age, $deceased";
				$this->patient->addPatient($id, $fname, $mname, $lname, $houseno, $street, $brgy, $city, $province, $sex, $bdate, $age, $deceased, "Oral Diagnosis", $userid, "Open", $date);

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
				/*$mid = substr($mname, 0, 1);

				$data['id'] = $id;
				$data['name'] = $fname." ".$mid.". ".$lname;
				$data['address'] = $houseno." ".$street.", ".$brgy.", ".$city.", ".$province;
				$data['gender'] = $sex;
				$data['age'] = $age;*/

				//$this->patient->addStudentTask($id, "Oral Diagnosis");

				//redirect('/home');
				redirect('/loaddashboard/patientdb/'.$id);
				
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

 	function check_gender($gender){
		if($gender == "Select one.."){
			$this->form_validation->set_message('check_gender', 'Select a gender.');
			return false;
		}
		
		return true;
	}

	function check_deceased($deceased){
		if($deceased == ""){
			$this->form_validation->set_message('check_deceased', 'Specify if patient is deceased.');
			return false;
		}
		
		return true;
	}

	function check_ID($id){
		$year = date("Y");
		$upcd_id = substr($year, 2)."-".$id;
		$getpatient = $this->patient->getPatient($upcd_id);

		if($getpatient == "false"){
			$this->form_validation->set_message('check_ID', 'UPCD_ID already exist. Enter a new ID.');
			return false;
		}
		
		return true;
	}

	/*function loadPatientDashboard($data){
		$this->load->view('patientdashboard_view', $data);
	}*/
}
?>

