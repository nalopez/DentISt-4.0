<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class VerifyAddDentalData extends CI_Controller {

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

			$this->form_validation->set_rules('dolv', 'Date of last visit', 'trim|required|xss_clean');
			$this->form_validation->set_rules('pdolv', 'Procedures done on last visit', 'trim|required|xss_clean');
			$this->form_validation->set_rules('fodv', 'Frequency of dental visit', 'trim|required|xss_clean');
			$this->form_validation->set_rules('eortle', 'Exposure or response to local anesthesia', 'trim|required|xss_clean');
		   	$this->form_validation->set_rules('cdaoadp', 'Complications', 'trim|required|xss_clean');
		   	$this->form_validation->set_rules('hntd', 'Head, Neck and TMJ', 'trim|required|xss_clean');
		   	$this->form_validation->set_rules('lfnd', 'Lips/Frenum', 'trim|required|xss_clean');
		   	$this->form_validation->set_rules('mucd', 'Mucosa', 'trim|required|xss_clean');
		   	$this->form_validation->set_rules('pltd', 'Palate', 'trim|required|xss_clean');
		   	$this->form_validation->set_rules('prxd', 'Pharynx', 'trim|required|xss_clean');
			$this->form_validation->set_rules('ftmd', 'Floor of the mouth', 'trim|required|xss_clean');
			$this->form_validation->set_rules('tngd', 'Tough', 'trim|required|xss_clean');
			$this->form_validation->set_rules('lymd', 'Lymph nodes', 'trim|required|xss_clean');
			$this->form_validation->set_rules('sald', 'Salivary gland', 'trim|required|xss_clean');
			$this->form_validation->set_rules('thyd', 'Thyroid', 'trim|required|xss_clean');
			$this->form_validation->set_rules('ggvd', 'Gingiva', 'trim|required|xss_clean');

			if($this->form_validation->run() == FALSE)
		 	{
		     	//Field validation failed.  User redirected to login page
				if(form_error('dolv')) $message = form_error('dolv');
				elseif(form_error('pdolv')) $message = form_error('pdolv');
				elseif(form_error('fodv')) $message = form_error('fodv');
				elseif(form_error('eortle')) $message = form_error('eortle');
				elseif(form_error('cdaoadp')) $message = form_error('cdaoadp');
				elseif(form_error('hntd')) $message = form_error('hntd');
				elseif(form_error('lfnd')) $message = form_error('lfnd');	
				elseif(form_error('mucd')) $message = form_error('mucd');
				elseif(form_error('pltd')) $message = form_error('pltd');
				elseif(form_error('prxd')) $message = form_error('prxd');
				elseif(form_error('ftmd')) $message = form_error('ftmd');
				elseif(form_error('tngd')) $message = form_error('tngd');
				elseif(form_error('lymd')) $message = form_error('lymd');
				elseif(form_error('sald')) $message = form_error('sald');
				elseif(form_error('thyd')) $message = form_error('thyd');	
				elseif(form_error('ggvd')) $message = form_error('ggvd');	

				$data = array(
					'dolv' => $this->input->post('dolv'),
					'pdolv' => $this->input->post('pdolv'),
					'fodv' => $this->input->post('fodv'),
					'eortle' => $this->input->post('eortle'),
					'cdaoadp' => $this->input->post('cdaoadp'),
					'hntd' => $this->input->post('hntd'),
					'lfnd' => $this->input->post('lfnd'),
					'mucd' => $this->input->post('mucd'),
					'pltd' => $this->input->post('pltd'),
					'prxd' => $this->input->post('prxd'),
					'ftmd' => $this->input->post('ftmd'),				
					'tngd' => $this->input->post('tngd'),
					'lymd' => $this->input->post('lymd'),
					'sald' => $this->input->post('sald'),
					'thyd' => $this->input->post('thyd'),
					'ggvd' => $this->input->post('ggvd'),
					'error' => $message,
					'invalid_input' => true);			

				$session_data = $this->session->userdata('current_patient');
				$id = $session_data['id'];

			       	$this->session->set_userdata('has_error', $data);

		     		redirect('/dentaldata/patient/'.$id.'/');
		   	}
		   	else
		   	{
		     		//Go to private area
				// TAB4 - Dental Data	
				$dolv = $this->input->post('dolv');
				$pdolv = $this->input->post('pdolv');
				$fodv = $this->input->post('fodv');
				$eortle = $this->input->post('eortle');
				$cdaoadp = $this->input->post('cdaoadp');
				$hntd = $this->input->post('hntd');
				$lfnd = $this->input->post('lfnd');
				$mucd = $this->input->post('mucd');
				$pltd = $this->input->post('pltd');
				$prxd = $this->input->post('prxd');
				$ftmd = $this->input->post('ftmd');				
				$tngd = $this->input->post('tngd');
				$lymd = $this->input->post('lymd');
				$sald = $this->input->post('sald');
				$thyd = $this->input->post('thyd');
				$ggvd = $this->input->post('ggvd');

				
				$session_data = $this->session->userdata('current_patient');
				$id = $session_data['id'];

				$this->session->unset_userdata('has_error');

				$session_data5 = $this->session->userdata('logged_in');
				$userID222 = $session_data5['username'];
				$userID22 = $this->user->getUserID($userID222);
				$userID2 = $userID22['userID'];
				$date = date("Y-m-d");

				if($this->patient->hasDentalData($id)) $this->user->addAuditTrail($userID2, 'UPDATE', 'Dental Data', $id, $date);
					else $this->user->addAuditTrail($userID2, 'INSERT', 'Dental Data', $id, $date);
		


				$this->patient->addPatientInfo_tab4($id, $dolv, $pdolv, $fodv, $eortle, $cdaoadp, $hntd, $lfnd, $mucd, $pltd, $prxd, $ftmd, $tngd, $lymd, $sald, $thyd, $ggvd);

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

				$this->patient->addDentalDataVersion($id, $userID, $date, $status, $approver, $approvedate);

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


}
?>
