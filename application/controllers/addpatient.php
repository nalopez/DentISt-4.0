<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
session_start(); //we need to call PHP's session object to access it through CI
class AddPatient extends CI_Controller {

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
			$sec = $session_data['section'];
			foreach($sec as $row){
				if($row == "Oral Diagnosis"){
					$bool = true;
					break;
				}
			}
 
			if($bool){
			$session_data = $this->session->userdata('logged_in');
     			$data['usernamelog'] = $session_data['username'];
			$this->load->helper(array('form'));

			$ID = $this->patient->getMaxId();
			foreach($ID as $row){
				$upcdid[] = $row['UPCD_ID']; 
			}
			foreach($upcdid as $row){
				$explode = explode('-',$row,2);
				$ctr[] = intval($explode[1]);
			}

			$max=0;
			for($i=0; $i<sizeof($ctr); $i++){
				if($ctr[$i] > $max){
					$max = $ctr[$i];
				}
			}

			$data['maxID'] = $max;

			$this->load->view('addpatient_view', $data);
			}
			else
				redirect('home', 'refresh');
		}
		else
   		{
     			//If no session, redirect to login page
     			redirect('login', 'refresh');
   		}
		
	}

}

?>


