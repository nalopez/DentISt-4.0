<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class StudentTasks extends CI_Controller {

 function __construct()
 {
   parent::__construct();
   $this->load->model('patient','',TRUE);
 }

 function index()
 {
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
				$sec = $session_data['section'];
				$section = "";
				foreach($sec as $row){
					if($row != "System Maintenance"){
						$section = $row;
					}
				}
		     		$data['info'] = $this->patient->getStudentTask($section);
				//$id = $info['UPCD_ID'];

				$this->load->view('studenttasks_view', $data);

				//print_r($info);
       				
				
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

