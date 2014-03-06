<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
session_start(); //we need to call PHP's session object to access it through CI

class ForgotPword extends CI_Controller {

 function __construct()
 {
   parent::__construct();
 }

 function index()
 {
	if($this->session->userdata('logged_in'))
   		{
		redirect('home', 'refresh');
	}
	else{
   $this->load->helper(array('form'));
   $this->load->view('forgotpword_view');
	}
 }

}

?>


