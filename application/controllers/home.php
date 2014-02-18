<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
session_start(); //we need to call PHP's session object to access it through CI
class Home extends CI_Controller {

 function __construct()
 {
   parent::__construct();
	$this->load->model('user','',TRUE);
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
		$role[] = $row['role_type'];
		$section[] = $row['role_section'];
	}

	
	$data['role'] = $role; 
	$data['section'] = $section; 

	//print_r($data3);
	//if($role == 'System Administrator'){
		$this->load->view('home_view', $data);
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
   $this->session->unset_userdata('logged_in');
   session_destroy();
   redirect('home', 'refresh');
 }

}

?>

