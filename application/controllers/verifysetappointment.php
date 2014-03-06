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
	   	
	   	//else
	   	//{
	     		//Go to private area
			$id = $this->input->post('id'); 
			$button = $this->input->post('buttonx');
			$user = $this->input->post('user');
			if($button == "sas")
			{

				$this->load->library('form_validation');
				$this->form_validation->set_rules('appntmntdate', 'Appointment Date', 'trim|required|xss_clean');

				if($this->form_validation->run() == FALSE)
			 	{
			     		if(form_error('appntmntdate')) $message = form_error('appntmntdate');
					$data = array(
					'appntmntdate' => $this->input->post('appntmntdate'),
					'error' => $message,
					'invalid_input' => true);			

				$session_data = $this->session->userdata('current_patient');
				$id = $session_data['id'];

			       	$this->session->set_userdata('has_error', $data);

		     		redirect('/setappointment/patient/'.$id.'/');
			   	}
				else{
					$dateappointment = $this->input->post('appntmntdate');

				//echo "Id=$id";
					
					if($this->patient->hasAppointment($id)){
						$this->patient->updateAppointment($id, $user, $dateappointment);
					}
					else $this->patient->setAppointment($id, $user, $dateappointment);
					redirect('loaddashboard/patientdb/'.$id);
				}
				//echo "$id, $user, $dateappointment";
				
			}else{
			
				redirect('loaddashboard/patientdb/'.$id);
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

}
?>

