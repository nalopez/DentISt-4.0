<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class VerifyReferPatient extends CI_Controller {

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
		$rolex = $session_data['role'];
		foreach($rolex as $row){
			if($row == "Faculty"){
				$bool = true;
				break;
			}
		}
 
		if($bool){
			//This method will have the credentials validation
		  	$this->load->library('form_validation');

			$this->form_validation->set_rules('refertosection', 'Refer to Menu', 'trim|required|xss_clean|callback_check_refertomenu');

			if($this->form_validation->run() == FALSE){
				$id = $this->input->post('id');
			     	redirect('loaddashboard/patientdb/'.$id);
			}
			else{
			     	//Go to private area
				$refer = $this->input->post('refertosection');
				$id = $this->input->post('id');
				$name = "";

				$session_data3 = $this->session->userdata('logged_in');
				$username = $session_data3['username'];
				$info = $this->user->getUserInfo3($username);

				foreach($info as $row2){
					$name = $row2['userFName']." ".substr($row2['userMName'], 0, 1).". ".$row2['userLName']; 
				}

				$date = date("Y-m-d");
				$status = "Pending";
				$approver = "Pending";

				$this->patient->addPatientDashboardVersion($id, $refer, $name, $date, $status, $approver);
			
				$this->load->view('manageusers_view', $data2);
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

 	function check_refertomenu($menu)
 	{
		$bool = TRUE;
		if($menu == "Select services needed first"){
			$bool = FALSE;		
			$this->form_validation->set_message('check_refertomenu', 'Please choose the needed services first');	
		}
		return $bool;
	}

	
}
?>

