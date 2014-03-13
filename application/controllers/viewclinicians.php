<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
session_start(); //we need to call PHP's session object to access it through CI
class ViewClinicians extends CI_Controller {

 function __construct()
 {
   parent::__construct();
	$this->load->model('user','',TRUE);
 }

	function index(){
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
	     			$this->load->helper(array('form'));
				$section = "";
				$sect = $session_data['section'];
				foreach($sect as $row){
					if($row != "System Maintenance"){
						$section = $row;
						break;
					}
				}

	   			$data2['users'] = $this->user->selectUsersBySection($section);
				/*foreach($data2['users'] as $row){
					$name = $row->userFName." ".$row->userLName;
					$uname = $row->username;
					$data2['users2'][$uname] = $this->user->selectUsers_pt2($name, $uname);
				}*/

			$userID222 = $session_data['username'];
			$userID22 = $this->user->getUserID($userID222);
			$userID2 = $userID22['userID'];
			$date = date("Y-m-d");

			$this->user->addAuditTrail($userID2, 'SELECT', 'Users', '', $date);


				

				$session_data = $this->session->userdata('logged_in');
	     			$data2['usernamelog'] = $session_data['username'];
			
				$this->load->view('viewclinicians_view', $data2);
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


