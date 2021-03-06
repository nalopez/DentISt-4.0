<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class FacultyTasks extends CI_Controller {

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
				$sec = $session_data['section'];
				$section = "";
				foreach($sec as $row){
					if($row != "System Maintenance"){
						$section = $row;
					}
				}
				$idx = $this->user->getUserID($session_data['username']);
				$facultyID = $idx['userID'];


		     		$data['info'] = $this->patient->getFacultyTask($section, $facultyID);
				//$id = $info['UPCD_ID']; 
				$data['info2'] = $this->patient->getStudentTask($section, $facultyID);

				$this->load->view('facultytasks_view', $data);
				//print_r($data['info']);
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

