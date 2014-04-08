<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
session_start(); //we need to call PHP's session object to access it through CI
class ChangePassword extends CI_Controller {

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
	$this->load->helper(array('form'));
		$this->load->view('changepassword_view');
	
	}
	else
		redirect('login');
}
}

?>


