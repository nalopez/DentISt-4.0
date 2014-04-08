<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class VerifyAddPatientInformation extends CI_Controller {

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
				$sec = $session_data['section'];
				foreach($sec as $row){
					if($row == "Oral Diagnosis"){
						$bool = true;
						break;
					}
				}
 
			if($bool){
		//This method will have the credentials validation
	   			$this->load->library('form_validation');

			$this->form_validation->set_rules('civstat', 'Civil Status', 'trim|required|xss_clean|callback_check_civstat');
			$this->form_validation->set_rules('phone', 'Phone Number', 'trim|required|xss_clean|callback_alpha_dash_space');
			$this->form_validation->set_rules('edattain', 'Educational Attainment', 'trim|required|xss_clean|callback_check_edattain');
			$this->form_validation->set_rules('occupation', 'Occupation', 'trim|required|xss_clean');
		   	$this->form_validation->set_rules('ptnicoe', 'Person to notify in case of emergency', 'trim|required|xss_clean');
		   	$this->form_validation->set_rules('ptnicoe', 'Person to notify in case of emergency phone number', 'trim|required|xss_clean|callback_alpha_dash_space');
		   	$this->form_validation->set_rules('hopi', 'History of Present Illness', 'trim|required|xss_clean');
		   	$this->form_validation->set_rules('gait', 'Gait', 'trim|required|xss_clean');
		   	$this->form_validation->set_rules('appear', 'Appearance', 'trim|required|xss_clean');
		   	$this->form_validation->set_rules('dfcts', 'Defects', 'trim|required|xss_clean');
			$this->form_validation->set_rules('bp', 'Blood Pressure', 'trim|required|xss_clean|callback_alpha_dash_space');
			$this->form_validation->set_rules('pr', 'Pulse Rate', 'trim|required|xss_clean|callback_alpha_dash_space');
			$this->form_validation->set_rules('rr', 'Respiration Rate', 'trim|required|xss_clean|callback_alpha_dash_space');
			$this->form_validation->set_rules('temp', 'Temperature', 'trim|required|xss_clean|callback_alpha_dash_space');
			$this->form_validation->set_rules('wt', 'Weight', 'trim|required|xss_clean|callback_alpha_dash_space');

			if($this->form_validation->run() == FALSE)
		 	{
		     	//Field validation failed.  User redirected to login page
				if(form_error('civstat')) $message = form_error('civstat');
				elseif(form_error('phone')) $message = form_error('phone');
				elseif(form_error('edattain')) $message = form_error('edattain');
				elseif(form_error('occupation')) $message = form_error('occupation');
				elseif(form_error('ptnicoe')) $message = form_error('ptnicoe');
				elseif(form_error('ptnicoenum')) $message = form_error('ptnicoenum');
				elseif(form_error('hopi')) $message = form_error('hopi');	
				elseif(form_error('gait')) $message = form_error('gait');
				elseif(form_error('appear')) $message = form_error('appear');
				elseif(form_error('dfcts')) $message = form_error('dfcts');
				elseif(form_error('bp')) $message = form_error('bp');
				elseif(form_error('pr')) $message = form_error('pr');
				elseif(form_error('rr')) $message = form_error('rr');
				elseif(form_error('temp')) $message = form_error('temp');
				elseif(form_error('wt')) $message = form_error('wt');	

				$data = array(
					'civstat' => $this->input->post('civstat'),
					'phone' => $this->input->post('phone'),
					'edattain' => $this->input->post('edattain'),
					'occupation' => $this->input->post('occupation'),
					'ptnicoe' => $this->input->post('ptnicoe'),
					'ptnicoenum' => $this->input->post('ptnicoenum'),
					'hopi' => $this->input->post('hopi'),
					'gait' => $this->input->post('gait'),
					'appear' => $this->input->post('appear'),
					'dfcts' => $this->input->post('dfcts'),
					'bp' => $this->input->post('bp'),
					'pr' => $this->input->post('pr'),
					'rr' => $this->input->post('rr'),
					'temp' => $this->input->post('temp'),
					'wt' => $this->input->post('wt'),
					'error' => $message,
					'invalid_input' => true);			

				$session_data = $this->session->userdata('current_patient');
				$id = $session_data['id'];

			       	$this->session->set_userdata('has_error', $data);

		     		redirect('/patientinformation/patient/'.$id.'/');
		   	}
		   	else
		   	{
		     		//Go to private area
				// TAB1 - Patient Information
				$civstat = $this->input->post('civstat');
				$phone = $this->input->post('phone');
				$edattain = $this->input->post('edattain');
				$occupation = $this->input->post('occupation');
				$ptnicoe = $this->input->post('ptnicoe');
				$ptnicoenum = $this->input->post('ptnicoenum');
				$hopi = $this->input->post('hopi');
				$gait = $this->input->post('gait');
				$appear = $this->input->post('appear');
				$dfcts = $this->input->post('dfcts');
				$bp = $this->input->post('bp');
				$pr = $this->input->post('pr');
				$rr = $this->input->post('rr');
				$temp = $this->input->post('temp');
				$wt = $this->input->post('wt');

				
				$session_data = $this->session->userdata('current_patient');
				$id = $session_data['id'];

				$session_data2 = $this->session->userdata('logged_in');
				$this->session->unset_userdata('has_error');

				$userID222 = $session_data2['username'];
				$userID22 = $this->user->getUserID($userID222);
				$userID2 = $userID22['$userID'];
				$date = date("Y-m-d");

				if($this->patient->hasPatientInfo($id)) $this->user->addAuditTrail($userID2, 'UPDATE', 'Patient Information', $id, $date);
				else $this->user->addAuditTrail($userID2, 'INSERT', 'Patient Information', $id, $date);
		


				$this->patient->addPatientInfo_tab1($id, $civstat, $phone, $edattain, $occupation, $ptnicoe, $ptnicoenum, $hopi, $gait, $appear, $dfcts, $bp, $pr, $rr, $temp, $wt);

				$session_data2 = $this->session->userdata('current_patient');
				$session_data3 = $this->session->userdata('logged_in');
				$id = $session_data2['id'];

				$username = $session_data3['username'];
				$info = $this->user->getUserID($username);

				/*foreach($info as $row2){
					$name = $row2['userFName']." ".substr($row2['userMName'], 0, 1).". ".$row2['userLName']; 
				}*/
				
				$userID = $info['userID'];

				$date = date("Y-m-d");
				$status = "Pending";
				$approver = "Pending";
				$approvedate = "Pending";

				//echo "$id, $name, $date, $status, $approver";

				$this->patient->addPatientInformationVersion($id, $userID, $date, $status, $approver, $approvedate);

				redirect('/loaddashboard/patientdb/'.$id.'/');
				
		   	}
		}
		else{
			redirect('home', 'refresh');
		}
	}else{
		//If no session, redirect to login page
     		redirect('login', 'refresh');
		}
	}

 	function check_civstat($civstat){
		if($civstat == "Select one.."){
			$this->form_validation->set_message('check_civstat', 'Select a civil status.');
			return false;
		}
		
		return true;
	}

	function check_edattain($edattain){
		if($edattain == "Select one.."){
			$this->form_validation->set_message('check_edattain', 'Select an educational attainment.');
			return false;
		}
		
		return true;
	}

	function alpha_dash_space($str){
		$phone_entry = $this->input->post('phone');
		$ptnicoe_entry = $this->input->post('ptnicoenum');
		$bp_entry = $this->input->post('bp');
		$pr_entry = $this->input->post('pr');
		$rr_entry = $this->input->post('rr');
		$temp_entry = $this->input->post('temp');
		$wt_entry = $this->input->post('wt');

		if(preg_match("/^([-a-z_ ])+$/i", $phone_entry)){
			$this->form_validation->set_message('alpha_dash_space', 'Phone field only accepts a numeric entry');
			return false;
		}
		elseif(preg_match("/^([-a-z_ ])+$/i", $ptnicoe_entry)){
			$this->form_validation->set_message('alpha_dash_space', 'Person to notify in case of emergency phone field only accepts a numeric entry');
			return false;
		}
		elseif(preg_match("/^([-a-z_ ])+$/i", $pr_entry)){
			$this->form_validation->set_message('alpha_dash_space', 'Pulse Rate field only accepts a numeric entry');
			return false;
		}
		elseif(preg_match("/^([-a-z_ ])+$/i", $rr_entry)){
			$this->form_validation->set_message('alpha_dash_space', 'Respiratory Rate field only accepts a numeric entry');
			return false;
		}
		elseif(preg_match("/^([-a-z_ ])+$/i", $temp_entry)){
			$this->form_validation->set_message('alpha_dash_space', 'Temperature field only accepts a numeric entry');
			return false;
		}
		elseif(preg_match("/^([-a-z_ ])+$/i", $wt_entry)){
			$this->form_validation->set_message('alpha_dash_space', 'Weight field only accepts a numeric entry');
			return false;
		}
		
		return true;

	}

}
?>
