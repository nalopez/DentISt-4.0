<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class VerifyAddConsultationAndFindings extends CI_Controller {

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

			$this->form_validation->set_rules('datenew[]', 'Date', 'trim|required|xss_clean');
			$this->form_validation->set_rules('reason[]', 'Reason', 'trim|required|xss_clean');
			$this->form_validation->set_rules('startdate[]', 'From', 'trim|required|xss_clean');
			$this->form_validation->set_rules('enddate[]', 'To', 'trim|required|xss_clean|callback_check_datex');
		   	$this->form_validation->set_rules('findings[]', 'Findings', 'trim|required|xss_clean');

			if($this->form_validation->run() == FALSE)
		 	{
		     	//Field validation failed.  User redirected to login page
				if(form_error('datenew[]')) $message = form_error('datenew[]');
				elseif(form_error('reason[]')) $message = form_error('reason[]');
				elseif(form_error('startdate[]')) $message = form_error('startdate[]');
				elseif(form_error('enddate[]')) $message = form_error('enddate[]');
				elseif(form_error('findings[]')) $message = form_error('findings[]');

				$datenew[] = $this->input->post('datenew');
				$reason[] = $this->input->post('reason');
				$startdate[] = $this->input->post('startdate');
				$enddate[] = $this->input->post('enddate');
				$findings[] = $this->input->post('findings');

				foreach($datenew[0] as $key=>$value){
					$datenew2[] = $value;
				}
				foreach($reason[0] as $key=>$value){
					$reason2[] = $value;
				}
				foreach($startdate[0] as $key=>$value){
					$startdate2[] = $value;
				}
				foreach($enddate[0] as $key=>$value){
					$enddate2[] = $value;
				}
				foreach($findings[0] as $key=>$value){
					$findings2[] = $value;
				}

				$data = array(
					'date' => $datenew2,
					'reason' => $reason2,
					'startdate' => $startdate2,
					'enddate' => $enddate2,
					'findings' => $findings2,
					'error' => $message,
					'invalid_input' => true);			

				$session_data = $this->session->userdata('current_patient');
				$id = $session_data['id'];

			       	$this->session->set_userdata('has_error', $data);

		     		redirect('/consultationandfindings/patient/'.$id.'/');
		   	}
		   	else
		   	{
		     		//Go to private area
				// TAB9 - Consultation and Findings	
				$datenew[] = $this->input->post('datenew');
				$reason[] = $this->input->post('reason');
				$startdate[] = $this->input->post('startdate');
				$enddate[] = $this->input->post('enddate');
				$findings[] = $this->input->post('findings');

				$datenewtxt = "";
				$reasontxt = "";
				$startdatetxt = "";
				$enddatetxt = "";
				$findingstxt = "";

				foreach($datenew[0] as $row1){
					if($datenewtxt == "")
						$datenewtxt = $row1;
					else
						$datenewtxt = $datenewtxt."|".$row1;
				}
				foreach($reason[0] as $row2){
					if($reasontxt == "")
						$reasontxt = $row2;
					else
						$reasontxt = $reasontxt."|".$row2;
				}
				foreach($startdate[0] as $row3){
					if($startdatetxt == "")
						$startdatetxt = $row3;
					else
						$startdatetxt = $startdatetxt."|".$row3;
				}
				foreach($enddate[0] as $row4){
					if($enddatetxt == "")
						$enddatetxt = $row4;
					else
						$enddatetxt = $enddatetxt."|".$row4;
				}
				foreach($findings[0] as $row5){
					if($findingstxt == "")
						$findingstxt = $row5;
					else
						$findingstxt = $findingstxt."|".$row5;
				}
				
				$session_data = $this->session->userdata('current_patient');
				$id = $session_data['id'];

				$this->session->unset_userdata('has_error');

				$session_data5 = $this->session->userdata('logged_in');
				$userID222 = $session_data5['username'];
				$userID22 = $this->user->getUserID($userID222);
				$userID2 = $userID22['userID'];
				$date = date("Y-m-d");

				if($this->patient->hasConfind($id)) $this->user->addAuditTrail($userID2, 'UPDATE', 'Consultation and Findings', $id, $date);
					else $this->user->addAuditTrail($userID2, 'INSERT', 'Consultation and Findings', $id, $date);
		

				$this->patient->addPatientInfo_tab9($id, $datenewtxt, $reasontxt, $startdatetxt, $enddatetxt, $findingstxt);

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

				/*print_r($datenew);
				print_r($reason);
				print_r($startdate);
				print_r($enddate);
				print_r($findings);*/

				echo "$datenewtxt, $reasontxt, $startdatetxt, $enddatetxt, $findingstxt";

				//echo "$id, $name, $date, $status, $approver";

				$this->patient->addConFindVersion($id, $userID, $date, $status, $approver, $approvedate);

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

	function check_datex(){
		$dateto[] = $this->input->post('enddate');
		$datefrom[] = $this->input->post('startdate');

		/*foreach($datefrom[0] as $row){
			$datefrom2[] = new DateTime($row);
		}
		foreach($dateto[0] as $row){
			$dateto2[] = new DateTime($row);
		}

		print_r($datefrom2);
		print_r($dateto2);

		$size = sizeof($datefrom2);*/

		for($i=0; $i<$size; $i++){			

			if(DateTime($datefrom[0][$i]) > DateTime($dateto[0][$i])){
				$this->form_validation->set_message('check_dates', 'To field entry is earlier than From field entry');
				break;				
				return false;
				
			}

		}
		
		return true;
		

	}

	/*function check_dates2($dateto){
		//$dateto[] = $this->input->post('enddate');
		$datefrom[] = $this->input->post('startdate');

		foreach($datefrom[0] as $row){
			$datefrom2[] = $row;
		}
		foreach($dateto[0] as $row){
			$dateto2[] = $row;
		}

		$size = sizeof($datefrom2);

		for($i=0; $i<$size; $i++){
			$exp1 = explode("-", $datefrom2[$i]);
			$exp2 = explode("-", $dateto2[$i]);

			if($exp1[0] > $exp2){
				$this->form_validation->set_message('check_dates', 'To field entry is earlier than From field entry');
				break;				
				return false;
			}
			else{
				if($exp1[1]> $exp2[1]){
					$this->form_validation->set_message('check_dates', 'To field entry is earlier than From field entry');
					break;				
					return false;
				}
				else{
					if($exp1[2]> $exp2[2]){
						$this->form_validation->set_message('check_dates', 'To field entry is earlier than From field entry');
						break;				
						return false;
					}	
				}
			}
		}

	}*/


}
?>
