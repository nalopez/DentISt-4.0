<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
session_start(); //we need to call PHP's session object to access it through CI
class ViewConsultationVersions extends CI_Controller {

 function __construct()
 {
   parent::__construct();
	$this->load->model('patient','',TRUE);
	$this->load->model('user','',TRUE);
 }

	function index(){
		$session_data = $this->session->userdata('logged_in');
		if($this->session->userdata('logged_in'))
   		{
			$bool = false;
			$rolex = $session_data['role'];
			foreach($rolex as $row){
				if($row == "Student" || $row=="Faculty"){
					$bool = true;
					break;
				}
			}
 
			if($bool){
	     			$this->load->helper(array('form'));
				$session_data = $this->session->userdata('current_patient');
				$id = $session_data['id'];

	   			$data2['version'] = $this->patient->getConFindVersions($id);
				

				/*foreach($data2['version'] as $row){
					$data2['version'][$id."updater"] = $this->user->getUserInfo2($row['updatedBy']);	
					$data2['version'][$id."approver"] = $this->user->getUserInfo2($row['approvedBy']);			
				}*/
				//print_r($data2['updater']);
				//print_r($data2['approver']);
				//print_r($data2['version']);

				$this->load->view('viewconsultationversions_view', $data2);
			}
			else{
				redirect('home', 'refresh');
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


