<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
session_start(); //we need to call PHP's session object to access it through CI
class SearchAuditTrail extends CI_Controller {

 function __construct()
 {
   parent::__construct();
	$this->load->model('user','',TRUE);
	$this->load->model('patient','',TRUE);
 }

	function index(){
		$session_data = $this->session->userdata('logged_in');
		if($this->session->userdata('logged_in'))
   		{
			$bool = false;
			$rolex = $session_data['role'];
			foreach($rolex as $row){
				if($row == "System Administrator"){
					$bool = true;
					break;
				}
			}
 
			if($bool){
	     			$this->load->helper(array('form'));
				$text = $this->input->post('searchtext');
				$from = $this->input->post('auditfrom');
				$to = $this->input->post('auditto');
				$action = $this->input->post('audit_action');
				$form = $this->input->post('audit_form');
	   			/*$data2['users'] = $this->user->selectUsers();

				$session_data = $this->session->userdata('logged_in');
	     			$data2['usernamelog'] = $session_data['username'];
			
				$this->load->view('manageusers_view', $data2);*/
				
				/*$userID222 = $session_data['username'];
				$userID22 = $this->user->getUserID($userID222);
				$userID2 = $userID22['$userID'];
				$date = date("Y-m-d");*/

				$data2['audit'] = $this->user->searchAuditTrail($text, $from, $to, $action, $form);
				$data2['text'] = $text;
				$data2['from'] = $from; 
				$data2['to'] = $to; 
				$data2['action'] = $action; 
				$data2['form'] = $form;			
			
				//$this->user->addAuditTrail($userID2, 'SELECT', 'Users', '', $date);	

				/*$session_data = $this->session->userdata('logged_in');
	     			$data2['usernamelog'] = $session_data['username'];
				$data2['string'] = $string;
				$data2['count'] = sizeof($data2['users']);*/
				$this->load->view('searchaudittrail_view', $data2);
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


