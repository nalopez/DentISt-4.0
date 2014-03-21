<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
session_start(); //we need to call PHP's session object to access it through CI
class ViewStat extends CI_Controller {

 function __construct()
 {
   parent::__construct();
	$this->load->model('patient','',TRUE);
 }

	function index(){
		$session_data = $this->session->userdata('logged_in');
		if($this->session->userdata('logged_in'))
   		{
			$bool = false;
			$session_data = $this->session->userdata('logged_in');
			$rolex = $session_data['role'];
			foreach($rolex as $row){
				if($row == "System Administrator" || $row == "Faculty"){
					$bool = true;
					break;
				}
			}
 
			if($bool){
	     			$this->load->helper(array('form'));
				

				$session_data = $this->session->userdata('logged_in');
	     			$data2['usernamelog'] = $session_data['username'];
				//echo "good";
				$this->load->view('statistics_view', $data2);
				
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


