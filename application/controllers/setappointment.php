<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
session_start(); //we need to call PHP's session object to access it through CI
class SetAppointment extends CI_Controller {

 function __construct()
 {
   parent::__construct();
	$this->load->model('patient','',TRUE);
	$this->load->model('user','',TRUE);
 }

 function index()
 {
   if($this->session->userdata('logged_in'))
   {
     $session_data = $this->session->userdata('logged_in');
     $data['username'] = $session_data['username'];

	$id=$this->input->post('id');
	$this->patient->deleteStudentTask($id);
	$this->load->helper(array('form'));
	$this->load->view('setappointment_view');
   }
   else
   {
     //If no session, redirect to login page
     redirect('login', 'refresh');
   }
 }

 function logout()
 {
   $this->session->unset_userdata('logged_in');
   session_destroy();
   redirect('home', 'refresh');
 }

}

?>


