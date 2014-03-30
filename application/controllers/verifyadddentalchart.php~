<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class VerifyAddDentalChart extends CI_Controller {

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
					if($row == "Oral Diagnosis" || $row == "Oral Medicine"){
						$bool = true;
						break;
					}
				}
 
			if($bool){
		//This method will have the credentials validation
	   		/*	$this->load->library('form_validation');

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
		   	{*/
		     		//Go to private area
				// TAB5 - Dental Chart	

				//caries, recurrent & restoration table
				$mescaries = "";
				$discaries = "";
				$buccaries = "";
				$occcaries = "";
				$lincaries = "";
				$mesrecur = "";
				$disrecur = "";
				$bucrecur = "";
				$occrecur = "";
				$linrecur = "";
				$mesresto = "";
				$disresto = "";
				$bucresto = "";
				$occresto = "";
				$linresto = "";

				$mescaries1 = array();
				$buccaries1 = array();
				$lincaries1 = array();
				$occcaries1 = array();
				$discaries1 = array();
				$mesrecur1 = array();
				$bucrecur1 = array();
				$linrecur1 = array();
				$occrecur1 = array();
				$disrecur1 = array();
				$mesresto1 = array();
				$bucresto1 = array();
				$linresto1 = array();
				$occresto1 = array();
				$disresto1 = array();

				$mes_caries = array();
				$buc_caries = array();
				$lin_caries = array();
				$occ_caries = array();
				$dis_caries = array();
				$mes_recur = array();
				$buc_recur = array();
				$lin_recur = array();
				$occ_recur = array();
				$dis_recur = array();
				$mes_resto = array();
				$buc_resto = array();
				$lin_resto = array();
				$occ_resto = array();
				$dis_resto = array();

				if(isset($_POST['selectCariesMesial'])) {
					$mescaries1[] = $_POST['selectCariesMesial']; 
				}
				else 
					$mescaries1[0][] = "";
				foreach($mescaries1[0] as $tooth){
					if(!is_numeric($tooth)){
						$mes_caries[] = $tooth;
					}
				}

				if(isset($_POST['selectCariesBuccal'])) {
					$buccaries1[] = $_POST['selectCariesBuccal']; 
				}
				else 
					$buccaries1[0][] = "";
				foreach($buccaries1[0] as $tooth){
					if(!is_numeric($tooth)){
						$buc_caries[] = $tooth;
					}
				}


				if(isset($_POST['selectCariesLingual'])) {
					$lincaries1[] = $_POST['selectCariesLingual']; 
				}
				else 
					$lincaries1[0][] = "";
				foreach($lincaries1[0] as $tooth){
					if(!is_numeric($tooth)){
						$lin_caries[] = $tooth;
					}
				}

				if(isset($_POST['selectCariesOcclusal'])) {
					$occcaries1[] = $_POST['selectCariesOcclusal']; 
				}
				else 
					$occcaries1[0][] = "";
				foreach($occcaries1[0] as $tooth){
					if(!is_numeric($tooth)){
						$occ_caries[] = $tooth;
					}
				}

				if(isset($_POST['selectCariesDistal'])) {
					$discaries1[] = $_POST['selectCariesDistal']; 
				}
				else 
					$discaries1[0][] = "";
				foreach($discaries1[0] as $tooth){
					if(!is_numeric($tooth)){
						$dis_caries[] = $tooth;
					}
				}

				if(isset($_POST['selectRecurrentMesial'])) {
					$mesrecur1[] = $_POST['selectRecurrentMesial']; 
				}
				else 
					$mesrecur1[0][] = "";
				foreach($mesrecur1[0] as $tooth){
					if(!is_numeric($tooth)){
						$mes_recur[] = $tooth;
					}
				}

				if(isset($_POST['selectRecurrentBuccal'])) {
					$bucrecur1[] = $_POST['selectRecurrentBuccal']; 
				}
				else 
					$bucrecur1[0][] = "";
				foreach($bucrecur1[0] as $tooth){
					if(!is_numeric($tooth)){
						$buc_recur[] = $tooth;
					}
				}

				if(isset($_POST['selectRecurrentOcclusal'])) {
					$occrecur1[] = $_POST['selectRecurrentOcclusal']; 
				}
				else 
					$occrecur1[0][] = "";
				foreach($occrecur1[0] as $tooth){
					if(!is_numeric($tooth)){
						$occ_recur[] = $tooth;
					}
				}

				if(isset($_POST['selectRecurrentLingual'])) {
					$linrecur1[] = $_POST['selectRecurrentLingual']; 
				}
				else 
					$linrecur1[0][] = "";
				foreach($linrecur1[0] as $tooth){
					if(!is_numeric($tooth)){
						$lin_recur[] = $tooth;
					}
				}

				if(isset($_POST['selectRecurrentDistal'])) {
					$disrecur1[] = $_POST['selectRecurrentDistal']; 
				}
				else 
					$disrecur1[0][] = "";
				foreach($disrecur1[0] as $tooth){
					if(!is_numeric($tooth)){
						$dis_recur[] = $tooth;
					}
				}

				if(isset($_POST['selectRestorationMesial'])) {
					$mesresto1[] = $_POST['selectRestorationMesial']; 
				}
				else 
					$mesresto1[0][] = "";
				foreach($mesresto1[0] as $tooth){
					if(!is_numeric($tooth)){
						$mes_resto[] = $tooth;
					}
				}

				if(isset($_POST['selectRestorationBuccal'])) {
					$bucresto1[] = $_POST['selectRestorationBuccal']; 
				}
				else 
					$bucresto1[0][] = "";
				foreach($bucresto1[0] as $tooth){
					if(!is_numeric($tooth)){
						$buc_resto[] = $tooth;
					}
				}

				if(isset($_POST['selectRestorationOcclusal'])) {
					$occresto1[] = $_POST['selectRestorationOcclusal']; 
				}
				else 
					$occresto1[0][] = "";
				foreach($occresto1[0] as $tooth){
					if(!is_numeric($tooth)){
						$occ_resto[] = $tooth;
					}
				}

				if(isset($_POST['selectRestorationLingual'])) {
					$linresto1[] = $_POST['selectRestorationLingual']; 
				}
				else 
					$linresto1[0][] = "";
				foreach($linresto1[0] as $tooth){
					if(!is_numeric($tooth)){
						$lin_resto[] = $tooth;
					}
				}

				if(isset($_POST['selectRestorationDistal'])) {
					$disresto1[] = $_POST['selectRestorationDistal']; 
				}
				else 
					$disresto1[0][] = "";
				foreach($disresto1[0] as $tooth){
					if(!is_numeric($tooth)){
						$dis_resto[] = $tooth;
					}
				}
				
				if(isset($_POST['mesialcaries'])) {
					$mes_car[] = $_POST['mesialcaries']; 
				}
				else 
					$mes_car[0][] = "";

				if(isset($_POST['mesialrecurrent'])){
					$mes_rec[] = $_POST['mesialrecurrent'];
				}
				else 
					$mes_rec[0][] = "";

				if(isset($_POST['mesialrestoration'])){ 
					$mes_res[] = $_POST['mesialrestoration']; 
				}
				else 
					$mes_res[0][] = "";

				if(isset($_POST['distalcaries'])) {
					$dis_car[] = $_POST['distalcaries']; 
				}
				else 
					$dis_car[0][] = "";

				if(isset($_POST['distalrecurrent'])){ 
					$dis_rec[] = $_POST['distalrecurrent'];
				}
				else 
					$dis_rec[0][] = "";

				if(isset($_POST['distalrestoration'])) {
					$dis_res[] = $_POST['distalrestoration']; 
				}
				else 
					$dis_res[0][] = "";

				if(isset($_POST['occlusalcaries'])) {
					$occ_car[] = $_POST['occlusalcaries']; 
				}
				else $occ_car[0][] = "";
	
				if(isset($_POST['occlusalrecurrent'])) {
					$occ_rec[] = $_POST['occlusalrecurrent'];
				}
				else $occ_rec[0][] = "";
	
				if(isset($_POST['occlusalrestoration'])) {
					$occ_res[] = $_POST['occlusalrestoration']; 
				}
				else $occ_res[0][] = "";

				if(isset($_POST['buccalcaries'])) {
					$buc_car[] = $_POST['buccalcaries']; 
				}
				else $buc_car[0][] = "";
	
				if(isset($_POST['buccalrecurrent'])) {
					$buc_rec[] = $_POST['buccalrecurrent'];
				}
				else $buc_rec[0][] = "";
	
				if(isset($_POST['buccalrestoration'])) {
					$buc_res[] = $_POST['buccalrestoration']; 
				}
				else $buc_res[0][] = "";

				if(isset($_POST['lingualcaries'])) {
					$lin_car[] = $_POST['lingualcaries']; 
				}
				else $lin_car[0][] = "";
	
				if(isset($_POST['lingualrecurrent'])) {
					$lin_rec[] = $_POST['lingualrecurrent'];
				}
				else $lin_rec[0][] = "";	

				if(isset($_POST['lingualrestoration'])) {
					$lin_res[] = $_POST['lingualrestoration']; 
				}
				else $lin_res[0][] = "";

				$disrec = "";
				$bucrec = "";
				$linrec = "";
				$mesrec = "";
				$occrec = "";
				$disres = "";
				$bucres = "";
				$linres = "";
				$mesres = "";
				$occres = "";
				$discar = "";
				$buccar = "";
				$lincar = "";
				$mescar = "";
				$occcar = "";

				foreach($dis_rec[0] as $teeth){
					$disrec = $disrec." ".$teeth;
				}
				foreach($buc_rec[0] as $teeth){
					$bucrec = $bucrec." ".$teeth;
				}
				foreach($lin_rec[0] as $teeth){
					$linrec = $linrec." ".$teeth;
				}
				foreach($mes_rec[0] as $teeth){
					$mesrec = $mesrec." ".$teeth;
				}
				foreach($occ_rec[0] as $teeth){
					$occrec = $occrec." ".$teeth;
				}
				foreach($dis_res[0] as $teeth){
					$disres = $disres." ".$teeth;
				}
				foreach($buc_res[0] as $teeth){
					$bucres = $bucres." ".$teeth;
				}
				foreach($lin_res[0] as $teeth){
					$linres = $linres." ".$teeth;
				}
				foreach($mes_res[0] as $teeth){
					$mesres = $mesres." ".$teeth;
				}
				foreach($occ_res[0] as $teeth){
					$occres = $occres." ".$teeth;
				}
				foreach($dis_car[0] as $teeth){
					$discar = $discar." ".$teeth;
				}
				foreach($buc_car[0] as $teeth){
					$buccar = $buccar." ".$teeth;
				}
				foreach($lin_car[0] as $teeth){
					$lincar = $lincar." ".$teeth;
				}
				foreach($mes_car[0] as $teeth){
					$mescar = $mescar." ".$teeth;
				}
				foreach($occ_car[0] as $teeth){
					$occcar = $occcar." ".$teeth;
				}

				foreach($mes_caries as $teeth){
					$mescaries = $mescaries." ".$teeth;
				}
				foreach($buc_caries as $teeth){
					$buccaries = $buccaries." ".$teeth;
				}
				foreach($occ_caries as $teeth){
					$occcaries = $occcaries." ".$teeth;
				}
				foreach($lin_caries as $teeth){
					$lincaries = $lincaries." ".$teeth;
				}
				foreach($dis_caries as $teeth){
					$discaries = $discaries." ".$teeth;
				}

				foreach($mes_recur as $teeth){
					$mesrecur = $mesrecur." ".$teeth;
				}
				foreach($buc_recur as $teeth){
					$bucrecur = $bucrecur." ".$teeth;
				}
				foreach($occ_recur as $teeth){
					$occrecur = $occrecur." ".$teeth;
				}
				foreach($lin_recur as $teeth){
					$linrecur = $linrecur." ".$teeth;
				}
				foreach($dis_recur as $teeth){
					$disrecur = $disrecur." ".$teeth;
				}

				foreach($mes_resto as $teeth){
					$mesresto = $mesresto." ".$teeth;
				}
				foreach($buc_resto as $teeth){
					$bucresto = $bucresto." ".$teeth;
				}
				foreach($occ_resto as $teeth){
					$occresto = $occresto." ".$teeth;
				}
				foreach($lin_resto as $teeth){
					$linresto = $linresto." ".$teeth;
				}
				foreach($dis_resto as $teeth){
					$disresto = $disresto." ".$teeth;
				}

				//serviceneeded table
				if(isset($_POST['class1'])){ 
					$c1[] = $_POST['class1']; 
				}
				else 
					$c1[0][] = "";
				if(isset($_POST['class2'])){ 
					$c2[] = $_POST['class2']; 
				}
				else 
					$c2[0][] = "";
				if(isset($_POST['class3'])){ 
					$c3[] = $_POST['class3']; 
				}
				else 
					$c3[0][] = "";
				if(isset($_POST['class4'])){ 
					$c4[] = $_POST['class4']; 
				}
				else 
					$c4[0][] = "";
				if(isset($_POST['class5'])){ 
					$c5[] = $_POST['class5']; 
				}
				else 
					$c5[0][] = "";
				if(isset($_POST['onlay'])){ 
					$ol[] = $_POST['onlay']; 
				}
				else 
					$ol[0][] = "";
				if(isset($_POST['extraction'])){ 
					$ex[] = $_POST['extraction']; 
				}
				else 
					$ex[0][] = "";
				if(isset($_POST['odontectomy'])){ 
					$od[] = $_POST['class1']; 
				}
				else 
					$od[0][] = "";
				if(isset($_POST['specialcase'])){ 
					$sc[] = $_POST['specialcase']; 
				}
				else 
					$sc[0][] = "";
				if(isset($_POST['pulpsedation'])){ 
					$ps[] = $_POST['pulpsedation']; 
				}
				else 
					$ps[0][] = "";
				if(isset($_POST['crownrecementation'])){ 
					$cr[] = $_POST['crownrecementation']; 
				}
				else 
					$cr[0][] = "";
				if(isset($_POST['fillingservice'])){ 
					$fs[] = $_POST['fillingservice']; 
				}
				else 
					$fs[0][] = "";
				if(isset($_POST['laminated'])){ 
					$lam[] = $_POST['laminated']; 
				}
				else 
					$lam[0][] = "";
				if(isset($_POST['singlecrown'])){ 
					$scr[] = $_POST['singlecrown']; 
				}
				else 
					$scr[0][] = "";
				if(isset($_POST['bridgeservice'])){ 
					$bs[] = $_POST['bridgeservice']; 
				}
				else 
					$bs[0][] = "";
				if(isset($_POST['anterior'])){ 
					$ant[] = $_POST['anterior']; 
				}
				else 
					$ant[0][] = "";
				if(isset($_POST['posterior'])){ 
					$pos[] = $_POST['posterior']; 
				}
				else 
					$pos[0][] = "";
				if(isset($_POST['otherendodontics'])){ 
					$oth[] = $_POST['otherendodontics']; 
				}
				else 
					$oth[0][] = "";

				$c1s= "";
				$c2s= "";
				$c3s= "";
				$c4s= "";
				$c5s= "";
				$ols= "";
				$exs= "";
				$ods= "";
				$scs= "";
				$pss= "";
				$crs= "";
				$fss= "";
				$lams= "";
				$scrs= "";
				$bss= "";
				$ants= "";
				$poss= "";
				$oths= "";

				foreach($c1[0] as $teeth){
					$c1s = $c1s." ".$teeth;
				}
				foreach($c2[0] as $teeth){
					$c2s = $c2s." ".$teeth;
				}
				foreach($c3[0] as $teeth){
					$c3s = $c3s." ".$teeth;
				}
				foreach($c4[0] as $teeth){
					$c4s = $c4s." ".$teeth;
				}
				foreach($c5[0] as $teeth){
					$c5s = $c5s." ".$teeth;
				}
				foreach($ol[0] as $teeth){
					$ols = $ols." ".$teeth;
				}
				foreach($ex[0] as $teeth){
					$exs = $exs." ".$teeth;
				}
				foreach($od[0] as $teeth){
					$ods = $ods." ".$teeth;
				}
				foreach($sc[0] as $teeth){
					$scs = $scs." ".$teeth;
				}
				foreach($ps[0] as $teeth){
					$pss = $pss." ".$teeth;
				}
				foreach($cr[0] as $teeth){
					$crs = $crs." ".$teeth;
				}
				foreach($fs[0] as $teeth){
					$fss = $fss." ".$teeth;
				}

				foreach($lam[0] as $teeth){
					$lams = $lams." ".$teeth;
				}

				foreach($scr[0] as $teeth){
					$scrs = $scrs." ".$teeth;
				}

				foreach($bs[0] as $teeth){
					$bss = $bss." ".$teeth;
				}

				foreach($ant[0] as $teeth){
					$ants = $ants." ".$teeth;
				}

				foreach($pos[0] as $teeth){
					$poss = $poss." ".$teeth;
				}

				foreach($oth[0] as $teeth){
					$oths = $oths." ".$teeth;
				}



				//dentalchart table
				if(isset($_POST['removablepartial'])){ 
					$rpd[] = $_POST['removablepartial']; 
				}
				else 
					$rpd[0][] = "";
				if(isset($_POST['extrusion'])){ 
					$extrusion[] = $_POST['extrusion']; 
				}
				else 
					$extrusion[0][] = "";
				if(isset($_POST['intrusion'])){ 
					$intrusion[] = $_POST['intrusion']; 
				}
				else 
					$intrusion[0][] = "";
				if(isset($_POST['mesialdrift'])){ 
					$mesdrift[] = $_POST['mesialdrift']; 
				}
				else 
					$mesdrift[0][] = "";
				if(isset($_POST['distaldrift'])){ 
					$disdrift[] = $_POST['distaldrift']; 
				}
				else 
					$disdrift[0][] = "";
				if(isset($_POST['rotation'])){ 
					$rotation[] = $_POST['rotation']; 
				}
				else 
					$rotation[0][] = "";
				if(isset($_POST['postcrown'])){ 
					$postcrown[] = $_POST['postcrown']; 
				}
				else 
					$postcrown[0][] = "";
				if(isset($_POST['rootcanal'])){ 
					$rootcanal[] = $_POST['rootcanal']; 
				}
				else 
					$rootcanal[0][] = "";
				if(isset($_POST['pitandfissure'])){ 
					$pitandfissure[] = $_POST['pitandfissure']; 
				}
				else 
					$pitandfissure[0][] = "";
				if(isset($_POST['extracted'])){ 
					$extracted[] = $_POST['extracted']; 
				}
				else 
					$extracted[0][] = "";
				if(isset($_POST['missing'])){ 
					$missing[] = $_POST['missing']; 
				}
				else 
					$missing[0][] = "";
				if(isset($_POST['unerupted'])){ 
					$unerupted[] = $_POST['unerupted']; 
				}
				else 
					$unerupted[0][] = "";
				if(isset($_POST['impacted'])){ 
					$impacted[] = $_POST['impacted']; 
				}
				else 
					$impacted[0][] = "";
				if(isset($_POST['porcelain'])){ 
					$porcelain[] = $_POST['porcelain']; 
				}
				else 
					$porcelain[0][] = "";
				if(isset($_POST['acrylic'])){ 
					$acrylic[] = $_POST['acrylic']; 
				}
				else 
					$acrylic[0][] = "";
				if(isset($_POST['metal'])){ 
					$metal[] = $_POST['metal']; 
				}
				else 
					$metal[0][] = "";
				if(isset($_POST['porcelainfused'])){ 
					$porcelainfused[] = $_POST['porcelainfused']; 
				}
				else 
					$porcelainfused[0][] = "";
				if(isset($_POST['fixedbridge'])){ 
					$fixedbridge[] = $_POST['fixedbridge']; 
				}
				else 
					$fixedbridge[0][] = "";

				$rpds = "";
				$extrusions = "";
				$intrusions = "";
				$mesdrifts = "";
				$disdrifts = "";
				$rotations = "";
				$postcores = "";
				$rootcanals = "";
				$pitandfissures = "";
				$extracteds = "";
				$missings = "";
				$unerupteds = "";
				$impacteds = "";
				$porcelains = "";
				$acrylics = "";
				$metals = "";
				$porcelainfuseds = "";
				$fixedbridges = "";

				foreach($rpd[0] as $teeth){
					$rpds = $rpds." ".$teeth;
				}
				foreach($extrusion[0] as $teeth){
					$extrusions = $extrusions." ".$teeth;
				}
				foreach($intrusion[0] as $teeth){
					$intrusions = $intrusions." ".$teeth;
				}
				foreach($mesdrift[0] as $teeth){
					$mesdrifts = $mesdrifts." ".$teeth;
				}
				foreach($disdrift[0] as $teeth){
					$disdrifts = $disdrifts." ".$teeth;
				}
				foreach($rotation[0] as $teeth){
					$rotations = $rotations." ".$teeth;
				}
				foreach($postcrown[0] as $teeth){
					$postcores = $postcores." ".$teeth;
				}
				foreach($rootcanal[0] as $teeth){
					$rootcanals = $rootcanals." ".$teeth;
				}
				foreach($pitandfissure[0] as $teeth){
					$pitandfissures = $pitandfissures." ".$teeth;
				}
				foreach($extracted[0] as $teeth){
					$extracteds = $extracteds." ".$teeth;
				}
				foreach($missing[0] as $teeth){
					$missings = $missings." ".$teeth;
				}
				foreach($unerupted[0] as $teeth){
					$unerupteds = $unerupteds." ".$teeth;
				}
				foreach($impacted[0] as $teeth){
					$impacteds = $impacteds." ".$teeth;
				}
				foreach($porcelain[0] as $teeth){
					$porcelains = $porcelains." ".$teeth;
				}
				foreach($acrylic[0] as $teeth){
					$acrylics = $acrylics." ".$teeth;
				}
				foreach($metal[0] as $teeth){
					$metals = $metals." ".$teeth;
				}
				foreach($porcelainfused[0] as $teeth){
					$porcelainfused = $porcelainfuseds." ".$teeth;
				}
				foreach($fixedbridge[0] as $teeth){
					$fixedbridges = $fixedbridges." ".$teeth;
				}


				//otherservicestable
				$periodontics = $this->input->post('periodontics');
				if($periodontics == ""){
					$periodontics = "No";
				}
				$pedodontics = "No";
				$orthodontics = "No";
				if(isset($_POST['surgery'])){ 
					$surgery[] = $_POST['surgery'];
					foreach($surgery[0] as $key=>$value){
						if($value == "pedodontics") $pedodontics='Yes';
						if($value == "orthodontics") $orthodontics='Yes';
					}
				}
				$acuteinfections = "No";
				$traumaticinjuries = "No";	
				if(isset($_POST['emergencytreatment'])){ 
					$emtreat[] = $_POST['emergencytreatment'];
					foreach($emtreat[0] as $key=>$value){
						if($value == "acute infections") $acuteinfections='Yes';
						if($value == "traumatic injuries") $traumaticinjuries='Yes';
					}
				}
				$completedent = "No";
				$singledent = "No";
				$removedent = "No";
				$othersdent = "No";
				if(isset($_POST['prosthodontics'])){ 
					$prostho[] = $_POST['prosthodontics'];
					foreach($prostho[0] as $key=>$value){
						if($value == "complete denture") $completedent='Yes';
						if($value == "single denture") $singledent='Yes';
						if($value == "removable partial") $removedent='Yes';
						if($value == "others") $othersdent='Yes';
					}
				}
				$notes = $this->input->post('notes');

				//dentures table
				$compdent = $this->input->post('completedenture');
				$updent = "No";
				$lowdent = "No";
				
				if(isset($_POST['singledenture'])){ 
					$singdent[] = $_POST['singledenture'];
					foreach($singdent[0] as $key=>$value){
						if($value == "upper") $updent='Yes';
						if($value == "lower") $lowdent='Yes';
					}
				}
				
				
				

				$session_data = $this->session->userdata('current_patient');
				$id = $session_data['id'];

				$this->session->unset_userdata('has_error');				

				$session_data2 = $this->session->userdata('current_patient');
				$session_data3 = $this->session->userdata('logged_in');
				$id = $session_data2['id'];

				$username = $session_data3['username'];
				$info = $this->user->getUserID($username);

				$info2 = $this->user->getUserInfo($info['userID']);

				$name= "";
				foreach($info2 as $row2){
					$name = $row2['userFName']." ".substr($row2['userMName'], 0, 1).". ".$row2['userLName']; 
				}
		
				$userID = $info['userID'];
				
				//echo "$periodontics, $pedodontics, $orthodontics, $acuteinfections, $traumaticinjuries, $completedent, $singledent, $removedent, $othersdent";

				$date = date("Y-m-d");
				$status = "Pending";
				$approver = "Pending";
				$approvedate = "Pending";


				//echo "$id, $name, $date, $status, $approver";
				$session_data5 = $this->session->userdata('logged_in');
				$userID222 = $session_data5['username'];
				$userID22 = $this->user->getUserID($userID222);
				$userID2 = $userID22['userID'];
				$date = date("Y-m-d");

				if($this->patient->hasDentalChart($id)) $this->user->addAuditTrail($userID2, 'UPDATE', 'Dental Status Chart', $id, $date);
					else $this->user->addAuditTrail($userID2, 'INSERT', 'Dental Status Chart', $id, $date);
		
				/*if(strlen(trim($discar)) == 0) $discar = '';
				if(strlen(trim($buccar)) == 0) $buccar = '';
				if(strlen(trim($lincar)) == 0) $lincar = '';
				if(strlen(trim($mescar)) == 0) $mescar = '';
				if(strlen(trim($occcar)) == 0) $occcar = '';
				if(strlen(trim($discaries)) == 0) $discaries = '';
				if(strlen(trim($buccaries)) == 0) $buccaries = '';
				if(strlen(trim($lincaries)) == 0) $lincaries = '';
				if(strlen(trim($mescaries)) == 0) $mescaries = '';
				if(strlen(trim($occcaries)) == 0) $occcaries = '';
				if(strlen(trim($disrec)) == 0) $disrec = '';
				if(strlen(trim($bucrec)) == 0) $bucrec = '';
				if(strlen(trim($linrec)) == 0) $linrec = '';
				if(strlen(trim($mesrec)) == 0) $mesrec = '';
				if(strlen(trim($occrec)) == 0) $occrec = '';
				if(strlen(trim($disrecur)) == 0) $disrecur = '';
				if(strlen(trim($bucrecur)) == 0) $bucrecur = '';
				if(strlen(trim($linrecur)) == 0) $linrecur = '';
				if(strlen(trim($mesrecur)) == 0) $mesrecur = '';
				if(strlen(trim($occrecur)) == 0) $occrecur = '';
				if(strlen(trim($disres)) == 0) $disres = '';
				if(strlen(trim($bucres)) == 0) $bucres = '';
				if(strlen(trim($linres)) == 0) $linres = '';
				if(strlen(trim($mesres)) == 0) $mesres = '';
				if(strlen(trim($occres)) == 0) $occres = '';
				if(strlen(trim($disresto)) == 0) $disresto = '';
				if(strlen(trim($bucresto)) == 0) $bucresto = '';
				if(strlen(trim($linresto)) == 0) $linresto = '';
				if(strlen(trim($mesresto)) == 0) $mesresto = '';
				if(strlen(trim($occresto)) == 0) $occresto = '';
				if(strlen(trim($name)) == 0) $name = '';
				if(strlen(trim($rpds)) == 0) $rpds = '';
				if(strlen(trim($extrusions)) == 0) $extrusions = '';
				if(strlen(trim($intrusions)) == 0) $intrusions = '';
				if(strlen(trim($mesdrifts)) == 0) $mesdrifts = '';
				if(strlen(trim($disdrifts)) == 0) $disdrifts = '';
				if(strlen(trim($rotations)) == 0) $rotations = '';
				if(strlen(trim($postcores)) == 0) $postcores = '';
				if(strlen(trim($rootcanals)) == 0) $rootcanals = '';
				if(strlen(trim($pitandfissures)) == 0) $pitandfissures = '';
				if(strlen(trim($extracteds)) == 0) $extracteds = '';
				if(strlen(trim($missings)) == 0) $missings = '';
				if(strlen(trim($unerupteds)) == 0) $unerupteds = '';
				if(strlen(trim($impacteds)) == 0) $impacteds = '';
				if(strlen(trim($porcelains)) == 0) $porcelains = '';
				if(strlen(trim($acrylics)) == 0) $acrylics = '';
				if(strlen(trim($metals)) == 0) $metals = '';
				if(strlen(trim($porcelainfuseds)) == 0) $porcelainfuseds = '';
				if(strlen(trim($fixedbridges)) == 0) $fixedbridges = '';
				if(strlen(trim($c1s)) == 0) $c1s = '';
				if(strlen(trim($c2s)) == 0) $c2s = '';
				if(strlen(trim($c3s)) == 0) $c3s = '';
				if(strlen(trim($c4s)) == 0) $c4s = '';
				if(strlen(trim($c5s)) == 0) $c5s = '';
				if(strlen(trim($ols)) == 0) $ols = '';
				if(strlen(trim($exs)) == 0) $exs = '';
				if(strlen(trim($ods)) == 0) $ods = '';
				if(strlen(trim($scs)) == 0) $scs = '';
				if(strlen(trim($pss)) == 0) $pss = '';
				if(strlen(trim($crs)) == 0) $crs = '';
				if(strlen(trim($fss)) == 0) $fss = '';
				if(strlen(trim($lams)) == 0) $lams = '';
				if(strlen(trim($scrs)) == 0) $scrs = '';
				if(strlen(trim($bss)) == 0) $bss = '';
				if(strlen(trim($ants)) == 0) $ants = '';
				if(strlen(trim($poss)) == 0) $poss = '';
				if(strlen(trim($oths)) == 0) $oths = '';
				if(strlen(trim($periodontics)) == 0) $periodontics = '';
				if(strlen(trim($pedodontics)) == 0) $pedodontics = '';
				if(strlen(trim($orthodontics)) == 0) $orthodontics = '';
				if(strlen(trim($acuteinfections)) == 0) $acuteinfections = '';
				if(strlen(trim($traumaticinjuries)) == 0) $traumaticinjuries = '';
				if(strlen(trim($completedent)) == 0) $completedent = '';
				if(strlen(trim($singledent)) == 0) $singledent = '';
				if(strlen(trim($removedent)) == 0) $removedent = '';
				if(strlen(trim($othersdent)) == 0) $othersdent = '';
				if(strlen(trim($notes)) == 0) $notes = '';
				if(strlen(trim($compdent)) == 0) $compdent = '';
				if(strlen(trim($updent)) == 0) $updent = '';
				if(strlen(trim($lowdent)) == 0) $lowdent = '';*/



				$this->patient->addPatientInfo_tab5($id, $discar, $buccar, $lincar, $mescar, $occcar, $discaries, $buccaries, $lincaries, $mescaries, $occcaries, $disrec, $bucrec, $linrec, $mesrec, $occrec, $disrecur, $bucrecur, $linrecur, $mesrecur, $occrecur, $disres, $bucres, $linres, $mesres, $occres, $disresto, $bucresto, $linresto, $mesresto, $occresto, $name, $rpds, $extrusions, $intrusions, $mesdrifts, $disdrifts, $rotations, $postcores, $rootcanals, $pitandfissures, $extracteds, $missings, $unerupteds, $impacteds, $porcelains, $acrylics, $metals, $porcelainfuseds, $fixedbridges, $c1s, $c2s, $c3s, $c4s, $c5s, $ols, $exs, $ods, $scs, $pss, $crs, $fss, $lams, $scrs, $bss, $ants, $poss, $oths, $periodontics, $pedodontics, $orthodontics, $acuteinfections, $traumaticinjuries, $completedent, $singledent, $removedent, $othersdent, $notes, $compdent, $updent, $lowdent);

				$this->patient->addDentalChartVersion($id, $userID, $date, $status, $approver, $approvedate);
				
				redirect('/loaddashboard/patientdb/'.$id.'/');
				
		   	//}
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
