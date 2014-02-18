<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class VerifySetAppointment extends CI_Controller {



 function __construct()
 {
   parent::__construct();
   $this->load->model('user','',TRUE);
   $this->load->model('patient','',TRUE);
 }

 function index()
 {
	$session_data = $this->session->userdata('logged_in');
	if($this->session->userdata('logged_in'))
   	{
		$bool = false;
			$rolex = $session_data['role'];
			foreach($rolex as $row){
				if($row == "Student"){
					$bool = true;
					break;
				}
			}
 
			if($bool){
		//This method will have the credentials validation
	   	/*$this->load->library('form_validation');

		$this->form_validation->set_rules('lastname', 'Last Name', 'trim|required|xss_clean');
		$this->form_validation->set_rules('firstname', 'First Name', 'trim|required|xss_clean');
		$this->form_validation->set_rules('midname', 'Middle Name', 'trim|required|xss_clean');
		$this->form_validation->set_rules('role', 'Role', 'trim|required|xss_clean|callback_check_role');
		$this->form_validation->set_rules('section', 'Section', 'trim|required|xss_clean');
	   	$this->form_validation->set_rules('username', 'Username', 'trim|required|xss_clean|callback_check_username');
	   	$this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean');
		$this->form_validation->set_rules('password2', 'Retype Password', 'trim|required|xss_clean|callback_check_password');

		if($this->form_validation->run() == FALSE)
	 	{
	     		$this->load->view('adduser_view');
	   	}
	   	else
	   	{*/
	     		//Go to private area
			$id = $this->input->post('id');
			$button = $this->input->post('buttonx');
			$user = $this->input->post('user');
			if($button == "sas")
			{
				$dateappointment = $this->input->post('appntmntdate');
				//echo "$id, $user, $dateappointment";
				$this->patient->setAppointment($id, $user, $dateappointment);
			}
			
				redirect('loaddashboard/patientdb/'.$id);
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

