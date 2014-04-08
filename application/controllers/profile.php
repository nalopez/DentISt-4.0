<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
session_start(); //we need to call PHP's session object to access it through CI
class Profile extends CI_Controller {

 function __construct()
 {
   parent::__construct();
	$this->load->model('user','',TRUE);
	$this->load->model('patient','',TRUE);
 }

 function index()
 {
	if($this->session->userdata('logged_in'))
	{
	     	$session_data = $this->session->userdata('logged_in');
	     	$data['username'] = $session_data['username'];

		$data2 = $this->user->getUserID($data['username']);
		$userID = $data2['userID'];
	
		$data['info'] = $this->user->selectUsers2($userID);


		$this->load->view('profile_view', $data);
	
	}
	else
		redirect('login');
}
}

?>


