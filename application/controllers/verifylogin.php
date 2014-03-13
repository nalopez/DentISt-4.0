<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class VerifyLogin extends CI_Controller {

 function __construct()
 {
   parent::__construct();
   $this->load->model('user','',TRUE);
 }

 function index()
 {
   //This method will have the credentials validation
   $this->load->library('form_validation');

   $this->form_validation->set_rules('username', 'Username', 'trim|required|xss_clean');
   $this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean|callback_check_database');

   if($this->form_validation->run() == FALSE)
   {
     //Field validation failed.  User redirected to login page
     $this->load->view('login_view');
   }
   else
   {
     //Go to private area
		echo "Logging in..";

		$username = $this->input->post('username');
		$idd = $this->user->getUserID($username);
		$id = $idd['userID'];
			$date = date("Y-m-d");

		$this->user->addAuditTrail($id, 'LOGIN', 'Users', '', $date);
	redirect('home', 'refresh');
	
   }

 }

 function check_database($password)
 {
   //Field validation succeeded.  Validate against database
   $username = $this->input->post('username');

   //query the database
   $result = $this->user->login($username, $password);

	if($result){	
	foreach($result as $row)
     	{
		$userID = $row->userID;
	}
	
	$user_roleres = $this->user->getRole($userID);
	
	foreach($user_roleres as $row){
		$user_role[] = $row['role_type'];
		$user_sec[] = $row['role_section'];
	}
	$role = $user_role;
	$section = $user_sec;

	}
   if($result)
   {
     $sess_array = array();
     foreach($result as $row)
     {
       $sess_array = array(
         'id' => $row->userID,
         'username' => $row->username,
	'role' => $role,
	'section' => $section
       );
       $this->session->set_userdata('logged_in', $sess_array);
	
     }
     return TRUE;
   }
   else
   {
     $this->form_validation->set_message('check_database', 'Invalid username or password');
     return false;
   }
 }
}
?>

