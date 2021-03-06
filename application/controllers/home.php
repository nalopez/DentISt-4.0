<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
session_start(); //we need to call PHP's session object to access it through CI
class Home extends CI_Controller {

 function __construct()
 {
   parent::__construct();
	$this->load->model('user','',TRUE);
	$this->load->model('patient','',TRUE);
 }

 function index()
 {
   if($this->session->userdata('logged_in'))
   {
     $session_data = $this->session->userdata('logged_in');
     $data['username'] = $session_data['username'];

	$data2 = $this->user->getUserID($data['username']);
	$userID = $data2['userID'];
	$data3 = $this->user->getRole($userID);

	foreach($data3 as $row){
		$rolex[] = $row['role_type'];
		$sect[] = $row['role_section'];
	}

	
	//$data['role'] = $role; 
	//$data['section'] = $section; 

	$section = "";
	foreach($sect as $row){
		if($row != "System Maintenance"){
			$section = $row;
			break;
		}
	}
	if($section == ""){
		$section = "System Maintenance";
	}

	$role = "";
	foreach($rolex as $row){
		if($row != "System Administrator"){
			$role = $row;
			break;
		}
	}
	if($role == ""){
		$role = "System Administrator";
	}

	$user = $this->user->getUserID($session_data['username']);
	$userID = $user['userID'];
				//echo $userID;

	$data2['factasks'] = false;
	$data2['users'] = false;
	$data2['appointments'] = $this->patient->getAppointments($userID);
				//print_r($data2['appointments']);
	if($role == "Faculty") $data2['factasks'] = $this->patient->getFacultyTask($section, $userID);
	if($role == "System Administrator") {
		$data2['users'] = $this->user->selectUsers();
		foreach($data2['users'] as $row){
			$name = $row->userFName." ".$row->userLName;
			$uname = $row->username;
			$data2['users2'][$uname] = $this->user->selectUsers_pt2($name, $uname);
		}
	}
	$data2['tasks'] = $this->patient->getStudentTask($section, $userID);
	$data2['section'] = $section;
	$this->load->helper(array('form'));
	$this->load->view('home_view', $data2);	
	//$this->load->view('viewappointments_view', $data2);

	//print_r($data3);
	//if($role == 'System Administrator'){
		//$this->load->view('home_view', $data);
	//}
	/*else if($role == "Faculty"){
		$this->load->view('home_fac_view', $data);
	}
	else if($role == "Student"){
		$this->load->view('home_stud_view', $data);
	}*/
   }
   else
   {
     //If no session, redirect to login page
     redirect('login', 'refresh');
   }
 }

 function logout()
 {
	     $session_data = $this->session->userdata('logged_in');
	$username = $session_data['username'];
		$idd = $this->user->getUserID($username);
		$id = $idd['userID'];
			$date = date("Y-m-d");

		$this->user->addAuditTrail($id, 'LOGOUT', 'Users', '', $date);
		echo "Logging out";


   $this->session->unset_userdata('logged_in');
   session_destroy();
   redirect('home', 'refresh');
 }

}

?>


