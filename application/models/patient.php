<?php
Class Patient extends CI_Model
{

	function addPatient($id, $fname, $mname, $lname, $houseno, $street, $brgy, $city, $province, $sex, $bdate, $age, $deceased, $section, $clinician, $status, $date){
		$data = array(
			'UPCD_ID' => $id,
			'patientFName' => $fname,
			'patientMName' => $mname,
			'patientLName' => $lname,
			'houseno' => $houseno,
			'street' => $street,
			'brgy' => $brgy,
			'city' => $city,
			'province' => $province,
			'gender' => $sex,
			'bdate' => $bdate,
			'age' => $age,
			'deceased' => $deceased,
			'section' => $section,
			'clinician' => $clinician,
			'status' => $status,
			'date' => $date);
		$this->db->insert('patient', $data);
	}

	function getPatient($id){
		$this -> db -> select('*');
   		$this -> db -> from('patient');
   		$this -> db -> where('UPCD_ID', $id);

		$query = $this -> db -> get();

		$rowCount = $this->db->count_all('patient');

		//$query = $this->db->query("SELECT username FROM users_auth, users WHERE users.userID = users_auth.userID AND (users.userFName !='$fname' OR users.userMName!='$mname' OR users.userLName!='$lname')");
		
   		if($query -> num_rows() == 1 || $rowCount == 0)
   		{
     			return $query->result_array();
   		}
   		else
   		{
     			return "false";
   		}
	}

	function addPatientInfo_tab1($id, $civstat, $phone, $edattain, $occupation, $ptnicoe, $ptnicoenum, $hopi, $gait, $appear, $dfcts, $bp, $pr, $rr, $temp, $wt){
		$data = array(
			'UPCD_ID' => $id,
			'civstat' => $civstat,
			'phonenum' => $phone,
			'edattain' => $edattain,
			'occupation' => $occupation,
			'persontonotify' => $ptnicoe,
			'persontonotifynum' => $ptnicoenum,
			'histo' => $hopi);
		$this->db->insert('patientinfo', $data);

		$data2 = array(
			'UPCD_ID' => $id,
			'gait' => $gait,
			'appear' => $appear,
			'dfcts' => $dfcts);
		$this->db->insert('phyassess', $data2);
		
		$data3 = array(
			'UPCD_ID' => $id,
			'bp' => $bp,
			'pr' => $pr,
			'rr' => $rr,
			'temp' => $temp,
			'weight' => $wt);
		$this->db->insert('vitalsigns', $data3);

	}

	function addPatientInfo_tab2($id, $hbp, $pij, $ha, $trem, $apcp, $bt, $sa, $dptgb, $fhf, $pal, $pahv, $dia, $emp, $goi, $af, $bobt, $cc, $swlog, $brp, $ft, $bs, $fh, $sin, $fur, $fha, $che, $diz, $puu, $fslc, $biu, $vi, $hep, $hi, $hiv, $art, $pad, $ner, $dep, $anx, $ast, $oth, $checklist, $diaf, $bdf, $hdf, $canf, $famoth, $family, $druga, $fooda, $ruba, $aloth, $allergy, $pregfe, $bffe, $hrtfe, $mensfe, $confe){
		$data = array(
			'UPCD_ID' => $id,
			'highbloodpressure' => $hbp,
			'joint_pain' => $pij,
			'heart_attack' => $ha,
			'tremors' => $trem,
			'chest_pain' => $apcp,
			'blood_transfusion' => $bt,
			'swollen_ankles' => $sa,
			'denied_blood' => $dptgb,
			'high_fever' => $fhf,
			'pallor' => $pal,
			'pacemaker' => $pahv,
			'diabetes' => $dia,
			'emphysema' => $emp,
			'goiter' => $goi,
			'afternoon_fever' => $af,
			'bruising_tendency' => $bobt,
			'chronic_cough' => $cc,
			'weight_change' => $swlog,
			'breathing_problem' => $brp,
			'frequent_thirst' => $ft,
			'bloody_sputum' => $bs,
			'frequent_hunger' => $fh,
			'sinusitis' => $sin,
			'frequent_urination' => $fur,
			'frequent_headaches' => $fha,
			'chemotherapy' => $che,
			'dizziness' => $diz,
			'pain_urination' => $puu,
			'loss_consciousness' => $fslc,
			'urine_blood' => $biu,
			'visual_impairment' => $vi,
			'hepatitis' => $hep,
			'hearing_impairment' => $hi,
			'HIV_positive' => $hiv,
			'arthritis' => $art,
			'pelvic_discomfort' => $pad,
			'nervousness' => $ner,
			'depression' => $dep,
			'anxiety' => $anx,
			'asthma' => $ast,
			'patientothers' => $oth,
			'patientothers_text' => $checklist);
		$this->db->insert('patientchecklist', $data);

		$data2 = array(
			'UPCD_ID' => $id,
			'familydiabetes' => $diaf,
			'bleeding_disorder' => $bdf,
			'heart_diseases' => $hdf,
			'cancer' => $canf,
			'familyothers' => $famoth,
			'familyothers_text' => $family);
		$this->db->insert('familychecklist', $data2);

		$data3 = array(
			'UPCD_ID' => $id,
			'drugs' => $druga,
			'food' => $fooda,
			'rubber' => $ruba,
			'allergyothers' => $aloth,
			'allergyothers_text' => $allergy);
		$this->db->insert('allergychecklist', $data3);

		$data4 = array(
			'UPCD_ID' => $id,
			'pregnant' => $pregfe,
			'breastfeeding' => $bffe,
			'hormonetherapy' => $hrtfe,
			'menstruation' => $mensfe,
			'contraceptive' => $confe);
		$this->db->insert('femalechecklist', $data4);
	}

	function addPatientInfo_tab3($id, $phyname, $phyphone, $hospdate, $hospreason, $allergies, $illnesses, $medications, $ci, $cig, $cigkind, $cigfreq, $cigdur, $cigdole, $alco, $alcokind, $alcofreq, $alcodur, $alcodole, $drug, $drugkind, $drugfreq, $drugdur, $drugdole){
		$data = array(
			'UPCD_ID' => $id,
			'physician_name' => $phyname,
			'physician_phone' => $phyphone,
			'dateoflatesthospitalization' => $hospdate,
			'hospitalizationreason' => $hospreason,
			'allergies' => $allergies,
			'illnesses' => $illnesses,
			'medications' => $medications,
			'childhood_illnesses' => $ci);
		$this->db->insert('medicalhistory', $data);
		
		$data2 = array(
			'UPCD_ID' => $id,
			'cigarette' => $cig,
			'cigarette_type' => $cigkind,
			'cigarette_frequency' => $cigfreq,
			'cigarette_duration' => $cigdur,
			'cigarette_dateoflastexposure' => $cigdole,
			'alcohol' => $alco,
			'alcohol_type' => $alcokind,
			'alcohol_frequency' => $alcofreq,
			'alcohol_duration' => $alcodur,
			'alcohol_dateoflastexposure' => $alcodole,
			'drug' => $drug,
			'drug_type' => $drugkind,
			'drug_frequency' => $drugfreq,
			'drug_duration' => $drugdur,
			'drug_dateoflastexposure' => $drugdole);
		$this->db->insert('socialhistory', $data2);

	}

	function addPatientInfo_tab4($id, $dolv, $pdolv, $fodv, $eortle, $cdaoadp, $hntd, $lfnd, $mucd, $pltd, $prxd, $ftmd, $tngd, $lymd, $sald, $thyd, $ggvd){
		$data = array(
			'UPCD_ID' => $id,
			'dateoflastvisit' => $dolv,
			'proceduresonlastvisit' => $pdolv,
			'frequencyofvisit' => $fodv,
			'anesthesia_exposure' => $eortle,
			'dental_complications' => $cdaoadp);
		$this->db->insert('dentalhistory', $data);

		$data2 = array(
			'UPCD_ID' => $id,
			'headneckTMJ' => $hntd,
			'lipsfrenum' => $lfnd,
			'mucosa' => $mucd,
			'palate' => $pltd,
			'pharynx' => $prxd,
			'floorofthemouth' => $ftmd,
			'tongue' => $tngd,
			'lymphnodes' => $lymd,
			'salivarygland' => $sald,
			'thyroid' => $thyd,
			'gingiva' => $ggvd);
		$this->db->insert('softtissueexamination', $data2);
	}

	function addPatientInfo_tab5($id, $discar, $buccar, $lincar, $mescar, $occcar, $discaries, $buccaries, $lincaries, $mescaries, $occcaries, $disrec, $bucrec, $linrec, $mesrec, $occrec, $disrecur, $bucrecur, $linrecur, $mesrecur, $occrecur, $disres, $bucres, $linres, $mesres, $occres, $disresto, $bucresto, $linresto, $mesresto, $occresto, $name, $rpds, $extrusions, $intrusions, $mesdrifts, $disdrifts, $rotations, $postcores, $rootcanals, $pitandfissures, $extracteds, $missings, $unerupteds, $impacteds, $porcelains, $acrylics, $metals, $porcelainfuseds, $fixedbridges, $c1s, $c2s, $c3s, $c4s, $c5s, $ols, $exs, $ods, $scs, $pss, $crs, $fss, $lams, $scrs, $bss, $ants, $poss, $oths, $periodontics, $pedodontics, $orthodontics, $acuteinfections, $traumaticinjuries, $completedent, $singledent, $removedent, $othersdent, $notes, $compdent, $updent, $lowdent){

		$data = array(
			'UPCD_ID' => $id,
			'distal_caries' => $discar,
			'buccal_caries' => $buccar,
			'lingual_caries' => $lincar,
			'mesial_caries' => $mescar,
			'occlusal_caries' => $occcar,
			'distal_restorable_caries' => $discaries,
			'buccal_restorable_caries' => $buccaries,
			'lingual_restorable_caries' => $lincaries,
			'mesial_restorable_caries' => $mescaries,
			'occlusal_restorable_caries' => $occcaries);
		$this->db->insert('cariesstatus', $data);

		$data2 = array(
			'UPCD_ID' => $id,
			'distal_recurrent' => $disrec,
			'buccal_recurrent' => $bucrec,
			'lingual_recurrent' => $linrec,
			'mesial_recurrent' => $mesrec,
			'occlusal_recurrent' => $occrec,
			'distal_restorable_recurrent' => $disrecur,
			'buccal_restorable_recurrent' => $bucrecur,
			'lingual_restorable_recurrent' => $linrecur,
			'mesial_restorable_recurrent' => $mesrecur,
			'occlusal_restorable_recurrent' => $occrecur);
		$this->db->insert('recurrentstatus', $data2);

		$data3 = array(
			'UPCD_ID' => $id,
			'distal_restoration' => $disres,
			'buccal_restoration' => $bucres,
			'lingual_restoration' => $linres,
			'mesial_restoration' => $mesres,
			'occlusal_restoration' => $occres,
			'distal_restorable_restoration' => $disresto,
			'buccal_restorable_restoration' => $bucresto,
			'lingual_restorable_restoration' => $linresto,
			'mesial_restorable_restoration' => $mesresto,
			'occlusal_restorable_restoration' => $occresto);
		$this->db->insert('restorationstatus', $data3);

		$data4 = array(
			'UPCD_ID' => $id,
			'clinician' => $name,
			'removable_partial_denture' => $rpds,
			'extrusion' => $extrusions,
			'intrusion' => $intrusions,
			'mesial_rotation' => $mesdrifts,
			'distal_rotation' => $disdrifts,
			'rotation' => $rotations,
			'postcore_crown' => $postcores,
			'rootcanal_treatment' => $rootcanals,
			'pitfissure_sealants' => $pitandfissures,
			'extracted' => $extracteds,
			'missing' => $missings,
			'unerupted' => $unerupteds,
			'impacted' => $impacteds,
			'porcelain_crown' => $porcelains,
			'acrylic_crown' => $acrylics,
			'metal_crown' => $metals,
			'porcelain_fused' => $porcelainfuseds,
			'fixed_bridge' => $fixedbridges);
		$this->db->insert('dentalchart', $data4);

		$data5 = array(
			'UPCD_ID' => $id,
			'class1' => $c1s,
			'class2' => $c2s,
			'class3' => $c3s,
			'class4' => $c4s,
			'class5' => $c5s,
			'onlay' => $ols,
			'extraction' => $exs,
			'odontectomy' => $ods,
			'special_case' => $scs,
			'pulp_sedation' => $pss,
			'crown_recementation' => $crs,
			'filling_service' => $fss,
			'laminated' => $lams,
			'single_crown' => $scrs,
			'bridge_service' => $bss,
			'anterior' => $ants,
			'posterior' => $poss,
			'orthoendo' => $oths);
		$this->db->insert('serviceneeded', $data5);

		$data6 = array(
			'UPCD_ID' => $id,
			'periodontics' => $periodontics,
			'pedodontics' => $pedodontics,
			'orthodontics' => $orthodontics,
			'acuteinfections' => $acuteinfections,
			'traumaticinjuries' => $traumaticinjuries,
			'completedenture' => $completedent,
			'singledenture' => $singledent,
			'removablepartialdenture' => $removedent,
			'otherdenture' => $othersdent,
			'dentalnotes' => $notes);
		$this->db->insert('otherservices', $data6);

		$data7 = array(
			'UPCD_ID' => $id,
			'complete_denture' => $compdent,
			'upper_denture' => $updent,
			'lower_denture' => $lowdent);
		$this->db->insert('dentures', $data7);

	}

	function addPatientInfo_tab6($id, $chiefcomp, $perio, $rpd, $resto, $os, $fpd, $pedo, $endo, $cd, $ortho,$ptp){
		$data = array(
			'UPCD_ID' => $id,
			'chiefcomplaints' => $chiefcomp,
			'perio' => $perio,
			'rpd' => $rpd,
			'resto' => $resto,
			'os' => $os,
			'fpd' => $fpd,
			'pedo' => $pedo,
			'endo' => $endo,
			'cd' => $cd,
			'ortho' => $ortho,
			'proposedtreatment' => $ptp);
		$this->db->insert('treatmentplan', $data);
	}

	function addPatientInformationVersion($id, $name, $date, $status, $approver){
		$data = array(
			'UPCD_ID' => $id,
			'updatedBy' => $name,
			'updateDate' => $date,
			'updateStatus' => $status,
			'approvedBy' => $approver);
		$this->db->insert('patientinfoversion', $data);
	}

	function addPatientChecklistVersion($id, $name, $date, $status, $approver){
		$data = array(
			'UPCD_ID' => $id,
			'updatedBy' => $name,
			'updateDate' => $date,
			'updateStatus' => $status,
			'approvedBy' => $approver);
		$this->db->insert('patientchecklistversion', $data);
	}

	function addMedAndSocHistoVersion($id, $name, $date, $status, $approver){
		$data = array(
			'UPCD_ID' => $id,
			'updatedBy' => $name,
			'updateDate' => $date,
			'updateStatus' => $status,
			'approvedBy' => $approver);
		$this->db->insert('medandsochistoversion', $data);
	}

	function addDentalDataVersion($id, $name, $date, $status, $approver){
		$data = array(
			'UPCD_ID' => $id,
			'updatedBy' => $name,
			'updateDate' => $date,
			'updateStatus' => $status,
			'approvedBy' => $approver);
		$this->db->insert('dentaldataversion', $data);
	}

	function addDentalChartVersion($id, $name, $date, $status, $approver){
		$data = array(
			'UPCD_ID' => $id,
			'updatedBy' => $name,
			'updateDate' => $date,
			'updateStatus' => $status,
			'approvedBy' => $approver);
		$this->db->insert('dentalchartversion', $data);
	}

	function addTreatmentPlanVersion($id, $name, $date, $status, $approver){
		$data = array(
			'UPCD_ID' => $id,
			'updatedBy' => $name,
			'updateDate' => $date,
			'updateStatus' => $status,
			'approvedBy' => $approver);
		$this->db->insert('treatmentplanversion', $data);
	}

	function addPatientDashboardVersion($id, $section, $studentID, $date, $status, $facultyID, $curr_section){
		$data = array(
			'UPCD_ID7' => $id,
			'section7' => $section,
			'updatedBy7' => $studentID,
			'updateDate7' => $date,
			'updateStatus7' => $status,
			'approvedBy7' => $facultyID,
			'currentSection7' => $curr_section);
		$this->db->insert('patientdashboardversion', $data);
	}

	function hasPatientInfo($id){
		$this -> db -> select('*');
   		$this -> db -> from('patientinfo');
   		$this -> db -> where('UPCD_ID', $id);

		$query = $this -> db -> get();
		
   		if($query -> num_rows() >= 1)
   		{
     			return true;
   		}
   		else
   		{
     			return false;
   		}
	}

	function hasPatientChecklist($id){
		$this -> db -> select('*');
   		$this -> db -> from('patientchecklist');
   		$this -> db -> where('UPCD_ID', $id);

		$query = $this -> db -> get();
		
   		if($query -> num_rows() >= 1)
   		{
     			return true;
   		}
   		else
   		{
     			return false;
   		}
	}

	function hasMedAndSocHisto($id){
		$this -> db -> select('*');
   		$this -> db -> from('medicalhistory');
   		$this -> db -> where('UPCD_ID', $id);

		$query = $this -> db -> get();
		
   		if($query -> num_rows() >= 1)
   		{
     			return true;
   		}
   		else
   		{
     			return false;
   		}
	}

	function hasDentalData($id){
		$this -> db -> select('*');
   		$this -> db -> from('dentalhistory');
   		$this -> db -> where('UPCD_ID', $id);

		$query = $this -> db -> get();
		
   		if($query -> num_rows() >= 1)
   		{
     			return true;
   		}
   		else
   		{
     			return false;
   		}
	}


	function hasDentalChart($id){
		$this -> db -> select('*');
   		$this -> db -> from('cariesstatus','recurrentstatus','restorationstatus','dentalchart','serviceneeded', 'dentures', 'otherservices');
		$this->db->join('recurrentstatus', 'cariesstatus.UPCD_ID = recurrentstatus.UPCD_ID');
		$this->db->join('restorationstatus', 'cariesstatus.UPCD_ID = restorationstatus.UPCD_ID');
		$this->db->join('dentalchart', 'cariesstatus.UPCD_ID = dentalchart.UPCD_ID');
		$this->db->join('serviceneeded', 'cariesstatus.UPCD_ID = serviceneeded.UPCD_ID');
		$this->db->join('dentures', 'cariesstatus.UPCD_ID = dentures.UPCD_ID');
		$this->db->join('otherservices', 'cariesstatus.UPCD_ID = otherservices.UPCD_ID');
   		$this -> db -> where('cariesstatus.UPCD_ID', $id);

		$query = $this -> db -> get();
		
   		if($query -> num_rows() >= 1)
   		{
     			return true;
   		}
   		else
   		{
     			return false;
   		}
	}

	function hasTreatmentPlan($id){
		$this -> db -> select('*');
   		$this -> db -> from('treatmentplan');
   		$this -> db -> where('UPCD_ID', $id);

		$query = $this -> db -> get();
		
   		if($query -> num_rows() >= 1)
   		{
     			return true;
   		}
   		else
   		{
     			return false;
   		}
	}

	/*function getPatientInfo($id, $version){
		$this -> db -> select('*');
   		$this -> db -> from('patientinfo', 'phyassess', 'vitalsigns', 'patientchecklist', 'familychecklist', 'allergychecklist', 'femalechecklist', 'medicalhistory', 'socialhistory', 'dentalhistory', 'softtissueexamination', 'treatmentplan');
		$this->db->join('phyassess', 'patientinfo.UPCD_ID = phyassess.UPCD_ID');
		$this->db->join('vitalsigns', 'patientinfo.UPCD_ID = vitalsigns.UPCD_ID');
		$this->db->join('patientchecklist', 'patientinfo.UPCD_ID = patientchecklist.UPCD_ID');
		$this->db->join('familychecklist', 'patientinfo.UPCD_ID = familychecklist.UPCD_ID');
		$this->db->join('allergychecklist', 'patientinfo.UPCD_ID = allergychecklist.UPCD_ID');
		$this->db->join('femalechecklist', 'patientinfo.UPCD_ID = femalechecklist.UPCD_ID');
		$this->db->join('medicalhistory', 'patientinfo.UPCD_ID = medicalhistory.UPCD_ID');
		$this->db->join('socialhistory', 'patientinfo.UPCD_ID = socialhistory.UPCD_ID');
		$this->db->join('dentalhistory', 'patientinfo.UPCD_ID = dentalhistory.UPCD_ID');
		$this->db->join('softtissueexamination', 'patientinfo.UPCD_ID = softtissueexamination.UPCD_ID');
		$this->db->join('treatmentplan', 'patientinfo.UPCD_ID = treatmentplan.UPCD_ID');
		$this -> db -> where('patientinfo.UPCD_ID', $id);
		$this -> db -> where('patientinfo.patientinfoID', $version);
		$this -> db -> where('phyassess.phyassessID', $version);
		$this -> db -> where('vitalsigns.vitalsignsID', $version);
		$this -> db -> where('patientchecklist.checklistID', $version);
		$this -> db -> where('familychecklist.checklistID', $version);
		$this -> db -> where('allergychecklist.checklistID', $version);
		$this -> db -> where('femalechecklist.checklistID', $version);
		$this -> db -> where('medicalhistory.medhistoID', $version);
		$this -> db -> where('socialhistory.socialhistoID', $version);
		$this -> db -> where('dentalhistory.denthistoID', $version);
		$this -> db -> where('softtissueexamination.softtissueexamID', $version);
		$this -> db -> where('treatmentplan.treatmentplanID', $version);

		$query = $this -> db -> get();

		if($query -> num_rows() == 1)
   		{
     			return $query->result_array();
   		}
   		else
   		{
     			return false;
   		}
	}*/

	function getPatientInfoPatientInfo($id){
		$this -> db -> select('*');
   		$this -> db -> from('patientinfo','phyassess', 'vitalsigns');
		$this->db->join('phyassess', 'patientinfo.UPCD_ID = phyassess.UPCD_ID');
		$this->db->join('vitalsigns', 'patientinfo.UPCD_ID = vitalsigns.UPCD_ID');
		$this -> db -> where('patientinfo.UPCD_ID', $id);

		$query = $this -> db -> get();

		if($query -> num_rows() == 1)
   		{
     			return $query->result_array();
   		}
   		else
   		{
     			return false;
   		}
	}

	function getPatientInfoPatientChecklist($id){
		$this -> db -> select('*');
   		$this -> db -> from('patientchecklist','familychecklist', 'allergychecklist', 'femalechecklist');
		$this->db->join('familychecklist', 'patientchecklist.UPCD_ID = familychecklist.UPCD_ID');
		$this->db->join('allergychecklist', 'patientchecklist.UPCD_ID = allergychecklist.UPCD_ID');
		$this->db->join('femalechecklist', 'patientchecklist.UPCD_ID = femalechecklist.UPCD_ID');
		$this -> db -> where('patientchecklist.UPCD_ID', $id);

		$query = $this -> db -> get();

		if($query -> num_rows() == 1)
   		{
     			return $query->result_array();
   		}
   		else
   		{
     			return false;
   		}
	}

	function getPatientInfoMedAndSocHisto($id){
		$this -> db -> select('*');
   		$this -> db -> from('medicalhistory','socialhistory');
		$this->db->join('socialhistory', 'medicalhistory.UPCD_ID = socialhistory.UPCD_ID');
		$this -> db -> where('medicalhistory.UPCD_ID', $id);

		$query = $this -> db -> get();

		if($query -> num_rows() == 1)
   		{
     			return $query->result_array();
   		}
   		else
   		{
     			return false;
   		}
	}

	function getPatientInfoDentalData($id){
		$this -> db -> select('*');
   		$this -> db -> from('dentalhistory','softtissueexamination');
		$this->db->join('softtissueexamination', 'dentalhistory.UPCD_ID = softtissueexamination.UPCD_ID');
		$this -> db -> where('dentalhistory.UPCD_ID', $id);

		$query = $this -> db -> get();

		if($query -> num_rows() == 1)
   		{
     			return $query->result_array();
   		}
   		else
   		{
     			return false;
   		}
	}

	function getPatientInfoDentalChart($id){
		$this -> db -> select('*');
   		$this -> db -> from('cariesstatus','recurrentstatus','restorationstatus','dentalchart','serviceneeded', 'dentures', 'otherservices');
		$this->db->join('recurrentstatus', 'cariesstatus.UPCD_ID = recurrentstatus.UPCD_ID');
		$this->db->join('restorationstatus', 'cariesstatus.UPCD_ID = restorationstatus.UPCD_ID');
		$this->db->join('dentalchart', 'cariesstatus.UPCD_ID = dentalchart.UPCD_ID');
		$this->db->join('serviceneeded', 'cariesstatus.UPCD_ID = serviceneeded.UPCD_ID');
		$this->db->join('dentures', 'cariesstatus.UPCD_ID = dentures.UPCD_ID');
		$this->db->join('otherservices', 'cariesstatus.UPCD_ID = otherservices.UPCD_ID');
		$this -> db -> where('cariesstatus.UPCD_ID', $id);

		$query = $this -> db -> get();

		if($query -> num_rows() == 1)
   		{
     			return $query->result_array();
   		}
   		else
   		{
     			return false;
   		}
	}


	function getPatientInfoTreatmentPlan($id){
		$this -> db -> select('*');
   		$this -> db -> from('treatmentplan');
		$this -> db -> where('treatmentplan.UPCD_ID', $id);

		$query = $this -> db -> get();

		if($query -> num_rows() == 1)
   		{
     			return $query->result_array();
   		}
   		else
   		{
     			return false;
   		}
	}

	function getPatientInfoPatientInformationRO($id, $version){
		$this -> db -> select('*');
   		$this -> db -> from('patientinfo', 'phyassess', 'vitalsigns');
		$this->db->join('phyassess', 'patientinfo.UPCD_ID = phyassess.UPCD_ID');
		$this->db->join('vitalsigns', 'patientinfo.UPCD_ID = vitalsigns.UPCD_ID');
		$this -> db -> where('patientinfo.UPCD_ID', $id);
		$this -> db -> where('patientinfo.patientinfoID', $version);
		$this -> db -> where('phyassess.phyassessID', $version);
		$this -> db -> where('vitalsigns.vitalsignsID', $version);

		$query = $this -> db -> get();

		if($query -> num_rows() == 1)
   		{
     			return $query->result_array();
   		}
   		else
   		{
     			return false;
   		}
	}

	function getPatientInfoPatientChecklistRO($id, $version){
		$this -> db -> select('*');
   		$this -> db -> from('patientchecklist','familychecklist', 'allergychecklist', 'femalechecklist');
		$this->db->join('familychecklist', 'patientchecklist.UPCD_ID = familychecklist.UPCD_ID');
		$this->db->join('allergychecklist', 'patientchecklist.UPCD_ID = allergychecklist.UPCD_ID');
		$this->db->join('femalechecklist', 'patientchecklist.UPCD_ID = femalechecklist.UPCD_ID');
		$this -> db -> where('patientchecklist.UPCD_ID', $id);
		$this -> db -> where('patientchecklist.checklistID', $version);
		$this -> db -> where('familychecklist.checklistID', $version);
		$this -> db -> where('allergychecklist.checklistID', $version);
		$this -> db -> where('femalechecklist.checklistID', $version);

		$query = $this -> db -> get();

		if($query -> num_rows() == 1)
   		{
     			return $query->result_array();
   		}
   		else
   		{
     			return false;
   		}
	}

	function getPatientInfoMedAndSocHistoRO($id, $version){
		$this -> db -> select('*');
   		$this -> db -> from('medicalhistory','socialhistory');
		$this->db->join('socialhistory', 'medicalhistory.UPCD_ID = socialhistory.UPCD_ID');
		$this -> db -> where('medicalhistory.UPCD_ID', $id);
		$this -> db -> where('medicalhistory.medhistoID', $version);
		$this -> db -> where('socialhistory.socialhistoID', $version);

		$query = $this -> db -> get();

		if($query -> num_rows() == 1)
   		{
     			return $query->result_array();
   		}
   		else
   		{
     			return false;
   		}
	}



	function getPatientInfoDentalDataRO($id, $version){
		$this -> db -> select('*');
   		$this -> db -> from('dentalhistory','softtissueexamination');
		$this->db->join('softtissueexamination', 'dentalhistory.UPCD_ID = softtissueexamination.UPCD_ID');
		$this -> db -> where('dentalhistory.UPCD_ID', $id);
		$this -> db -> where('dentalhistory.denthistoID', $version);
		$this -> db -> where('softtissueexamination.softtissueexamID', $version);

		$query = $this -> db -> get();

		if($query -> num_rows() == 1)
   		{
     			return $query->result_array();
   		}
   		else
   		{
     			return false;
   		}
	}

	function getPatientInfoDentalChartRO($id, $version){
		$this -> db -> select('*');
   		$this -> db -> from('cariesstatus','recurrentstatus','restorationstatus','dentalchart','serviceneeded', 'dentures', 'otherservices');
		$this->db->join('recurrentstatus', 'cariesstatus.UPCD_ID = recurrentstatus.UPCD_ID');
		$this->db->join('restorationstatus', 'cariesstatus.UPCD_ID = restorationstatus.UPCD_ID');
		$this->db->join('dentalchart', 'cariesstatus.UPCD_ID = dentalchart.UPCD_ID');
		$this->db->join('serviceneeded', 'cariesstatus.UPCD_ID = serviceneeded.UPCD_ID');
		$this->db->join('dentures', 'cariesstatus.UPCD_ID = dentures.UPCD_ID');
		$this->db->join('otherservices', 'cariesstatus.UPCD_ID = otherservices.UPCD_ID');
		$this -> db -> where('cariesstatus.UPCD_ID', $id);
		$this -> db -> where('cariesstatus.cariesstatusID', $version);
		$this -> db -> where('recurrentstatus.recurrentstatusID', $version);
		$this -> db -> where('restorationstatus.restorationstatusID', $version);
		$this -> db -> where('dentalchart.dentalchartID', $version);
		$this -> db -> where('serviceneeded.serviceneededID', $version);
		$this -> db -> where('dentures.denturesID', $version);
		$this -> db -> where('otherservices.otherservicesID', $version);

		$query = $this -> db -> get();

		if($query -> num_rows() == 1)
   		{
     			return $query->result_array();
   		}
   		else
   		{
     			return false;
   		}
	}

	function getPatientInfoTreatmentPlanRO($id, $version){
		$this -> db -> select('*');
   		$this -> db -> from('treatmentplan');
		$this -> db -> where('treatmentplan.UPCD_ID', $id);
		$this -> db -> where('treatmentplan.treatmentplanID', $version);

		$query = $this -> db -> get();

		if($query -> num_rows() == 1)
   		{
     			return $query->result_array();
   		}
   		else
   		{
     			return false;
   		}
	}


	function searchPatient1($agefrom, $ageto, $gender, $city, $occ){

		$session_data = $this->session->userdata('logged_in');
		$sec = $session_data['section'];
		$section = "";
		foreach($sec as $row){
			if($row != "System Maintenance"){
				$section = $row;
			}
		}

		/*$this -> db -> select('*');
		$this -> db -> from('patient');
		$this->db->join('patientinfo', 'patient.UPCD_ID = patientinfo.UPCD_ID');
		//$this->db->where('patient.age >=', $agefrom);
		//$this->db->where('patient.age <=', $ageto); 
		$this->db->where('patient.gender', $gender);
		$this->db->where('patient.city', $city);
		$this->db->where('patientinfo.occupation', $occ);*/

		$query = $this->db->query("SELECT * FROM  patient, patientinfo WHERE patient.UPCD_ID = patientinfo.UPCD_ID AND patient.section='$section' AND (patient.gender='$gender' AND patient.age >= $agefrom AND patient.age <= $ageto AND patient.city LIKE '%$city%' AND patientinfo.occupation LIKE '%$occ%')");

//		$query = $this -> db -> get();

		if($query -> num_rows() >= 1)
   		{
     			return $query->result_array();
   		}
   		else
   		{
     			return false;
   		}
	}

	function searchPatient2($perio, $rpd, $ortho, $os, $fpd, $pedo, $endo, $cd, $resto){
		/*$this -> db -> select('*');
		$this -> db -> from('patient');
		$this->db->join('patientinfo', 'patient.UPCD_ID = patientinfo.UPCD_ID');
		//$this->db->where('patient.age >=', $agefrom);
		//$this->db->where('patient.age <=', $ageto); 
		$this->db->where('patient.gender', $gender);
		$this->db->where('patient.city', $city);
		$this->db->where('patientinfo.occupation', $occ);*/

		$query = $this->db->query("SELECT * FROM  patient, treatmentplan WHERE patient.UPCD_ID = treatmentplan.UPCD_ID AND section = '$section' AND (treatmentplan.perio='$perio' OR treatmentplan.rpd='$rpd' OR treatmentplan.ortho='$ortho' OR treatmentplan.os='$os' OR treatmentplan.fpd='$fpd' OR treatmentplan.pedo='$pedo' OR treatmentplan.endo='$endo' OR treatmentplan.cd='$cd' OR treatmentplan.resto='$resto')");

//		$query = $this -> db -> get();

		if($query -> num_rows() >= 1)
   		{
     			return $query->result_array();
   		}
   		else
   		{
     			return false;
   		}
	}

	function searchPatient3($caries, $extrusion, $compdent, $impacted, $recurrent, $intrusion, $singdent, $missing, $restoration, $mdr, $rempardent, $acrcr, $pftm, $ddr, $pafs, $metcr, $rot, $rct, $pcc, $extracted, $unerupted, $porcr){

		$carvar = "";
		$recvar = "";
		$resvar = "";
		$impvar = "";
		$extvar = "";
		$intvar = "";
		$sinvar = "";
		$misvar = "";
		$mdrvar = "";
		$remvar = "";
		$acrvar = "";
		$pftvar = "";
		$ddrvar = "";
		$pafvar = "";
		$metvar = "";
		$rotvar = "";
		$rctvar = "";
		$pccvar = "";
		$exrvar = "";
		$unevar = "";
		$porvar = "";

		if($caries == "Yes") $carvar = "!";
		if($recurrent == "Yes") $recvar = "!";
		if($restoration == "Yes") $resvar = "!";
		if($impacted == "Yes") $impvar = "!";
		if($extrusion == "Yes") $extvar = "!";
		if($intrusion == "Yes") $resvar = "!";
		if($singdent == "Yes") $sinvar = "!";
		if($missing == "Yes") $misvar = "!";
		if($mdr == "Yes") $mdrvar = "!";
		if($rempardent == "Yes") $remvar = "!";
		if($acrcr == "Yes") $acrvar = "!";
		if($pftm == "Yes") $pftvar = "!";
		if($ddr == "Yes") $ddrvar = "!";
		if($pafs == "Yes") $pafvar = "!";
		if($metcr == "Yes") $metvar = "!";
		if($rot == "Yes") $rotvar = "!";
		if($rct == "Yes") $rctvar = "!";
		if($pcc == "Yes") $pccvar = "!";
		if($extracted == "Yes") $exrvar = "!";
		if($unerupted == "Yes") $unevar = "!";
		if($porcr == "Yes") $porvar = "!";

		$query = $this->db->query("SELECT * FROM  patient, dentalchart, cariesstatus, recurrentstatus, restorationstatus WHERE patient.UPCD_ID = dentalchart.UPCD_ID AND patient.UPCD_ID = cariesstatus.UPCD_ID AND patient.UPCD_ID = recurrentstatus.UPCD_ID AND patient.UPCD_ID = restorationstatus.UPCD_ID AND (cariesstatus.distal_caries $carvar= '' OR cariesstatus.mesial_caries $carvar= '' OR cariesstatus.buccal_caries $carvar= '' OR cariesstatus.occlusal_caries $carvar= '' OR cariesstatus.lingual_caries $carvar= '' OR recurrentstatus.distal_recurrent $recvar= '' OR recurrentstatus.mesial_recurrent $recvar= '' OR recurrentstatus.buccal_recurrent $recvar= '' OR recurrentstatus.occlusal_recurrent $recvar= '' OR recurrentstatus.lingual_recurrent $recvar= '' OR restorationstatus.distal_restoration $resvar= '' OR restorationstatus.mesial_restoration $resvar= '' OR restorationstatus.buccal_restoration $resvar= '' OR restorationstatus.occlusal_restoration $resvar= '' OR restorationstatus.lingual_restoration $resvar= '' OR dentalchart.removable_partial_denture $remvar= '' OR dentalchart.extrusion $extvar= '' OR dentalchart.intrusion $intvar= '' OR dentalchart.mesial_rotation $mdrvar= '' OR dentalchart.distal_rotation $ddrvar= '' OR dentalchart.rotation $rot= '' OR dentalchart.postcore_crown $pccvar= '' OR dentalchart.rootcanal_treatment $rct= '' OR dentalchart.pitfissure_sealants $pafvar= '' OR dentalchart.extracted $exr= '' OR dentalchart.missing $misvar= '' OR dentalchart.unerupted $unevar= '' OR dentalchart.impacted $impvar= '' OR dentalchart.porcelain_crown $porvar= '' OR dentalchart.acrylic_crown $acrvar= '' OR dentalchart.metal_crown $metvar= '' OR dentalchart.porcelain_fused $pftvar= '')");

//		$query = $this -> db -> get();

		if($query -> num_rows() >= 1)
   		{
     			return $query->result_array();
   		}
   		else
   		{
     			return false;
   		}
	}

	function searchPatient4($class1, $class2, $class3, $class4, $class5, $onlay, $extraction, $odon, $specclass, $pedodontics, $orthodontics, $pulpsed, $roc, $temfill, $moai, $moti, $lamented, $completedenture, $anterior, $singlecrown, $posterior, $bridge, $singledenture, $removablepartialdenture){

		if($class1 == "Yes") $c1var = "!";
		if($class2 == "Yes") $c2var = "!";
		if($class3 == "Yes") $c3var = "!";
		if($class4 == "Yes") $c4var = "!";
		if($class5 == "Yes") $c5var = "!";
		if($onlay == "Yes") $olvar = "!";
		if($extracted == "Yes") $exvar = "!";
		if($odon == "Yes") $odvar = "!";
		if($specclass == "Yes") $scvar = "!";
		if($pedodontics == "Yes") $pdvar = "!";
		if($orthodontics == "Yes") $orvar = "!";
		if($pulpsed == "Yes") $psvar = "!";
		if($roc == "Yes") $rcvar = "!";
		if($tempfill == "Yes") $tfvar = "!";
		if($lamented == "Yes") $lmvar = "!";
		if($anterior == "Yes") $anvar = "!";
		if($singlecrown == "Yes") $sivar = "!";
		if($posterior == "Yes") $povar = "!";
		if($bridge == "Yes") $bsvar = "!";

		$query = $this->db->query("SELECT * FROM  patient, serviceneeded WHERE patient.UPCD_ID = serviceneeded.UPCD_ID AND (serviceneeded.class1 $c1var= '' OR serviceneeded.class2 $c2var= '' OR serviceneeded.class3 $c3var= '' OR serviceneeded.class4 $c4var= '' OR serviceneeded.class5 $c5var= '' OR serviceneeded.onlay $olvar= '' OR serviceneeded.extracted $exvar= '' OR serviceneeded.odontectomy $odvar= '' OR serviceneeded.special_case $scvar= '' OR serviceneeded.pedodontics $pdvar= '' OR serviceneeded.orthodontics $orvar= '' OR serviceneeded.pulp_sedation $psvar= '' OR serviceneeded.crown_recementation $rcvar= '' OR serviceneeded.filling_service $tfvar= '' OR serviceneeded.lamented $lmvar= '' OR serviceneeded.anterior $anvar= '' OR serviceneeded.posterior $povar= '' OR serviceneeded.bridge_service $bsvar= '' OR serviceneeded.single_crown $sivar= '')");

//		$query = $this -> db -> get();

		if($query -> num_rows() >= 1)
   		{
     			return $query->result_array();
   		}
   		else
   		{
     			return false;
   		}
	}

	function getPatientInfoVersions($id){
		$this -> db -> select('*');
		$this -> db -> from('patientinfoversion');
		$this->db->where('UPCD_ID', $id);
		$this->db->where('updateStatus', 'Approved');

		$query = $this -> db -> get();

		if($query -> num_rows() >= 1)
   		{
     			return $query->result_array();
   		}
   		else
   		{
     			return false;
   		}
	}

	function getPatientChecklistVersions($id){
		$this -> db -> select('*');
		$this -> db -> from('patientchecklistversion');
		$this->db->where('UPCD_ID', $id);
		$this->db->where('updateStatus', 'Approved');

		$query = $this -> db -> get();

		if($query -> num_rows() >= 1)
   		{
     			return $query->result_array();
   		}
   		else
   		{
     			return false;
   		}
	}

	function getMedAndSocHistoVersions($id){
		$this -> db -> select('*');
		$this -> db -> from('medandsochistoversion');
		$this->db->where('UPCD_ID', $id);
		$this->db->where('updateStatus', 'Approved');

		$query = $this -> db -> get();

		if($query -> num_rows() >= 1)
   		{
     			return $query->result_array();
   		}
   		else
   		{
     			return false;
   		}
	}

	function getDentalDataVersions($id){
		$this -> db -> select('*');
		$this -> db -> from('dentaldataversion');
		$this->db->where('UPCD_ID', $id);
		$this->db->where('updateStatus', 'Approved');

		$query = $this -> db -> get();

		if($query -> num_rows() >= 1)
   		{
     			return $query->result_array();
   		}
   		else
   		{
     			return false;
   		}
	}

	function getDentalChartVersions($id){
		$this -> db -> select('*');
		$this -> db -> from('dentalchartversion');
		$this->db->where('UPCD_ID', $id);
		$this->db->where('updateStatus', 'Approved');

		$query = $this -> db -> get();

		if($query -> num_rows() >= 1)
   		{
     			return $query->result_array();
   		}
   		else
   		{
     			return false;
   		}
	}

	function getTreatmentPlanVersions($id){
		$this -> db -> select('*');
		$this -> db -> from('treatmentplanversion');
		$this->db->where('UPCD_ID', $id);
		$this->db->where('updateStatus', 'Approved');

		$query = $this -> db -> get();

		if($query -> num_rows() >= 1)
   		{
     			return $query->result_array();
   		}
   		else
   		{
     			return false;
   		}
	}

	function getLatest($id){
		$this->db->select_max('patientinfoID');
		$this->db->where('UPCD_ID', $id);
		$query = $this->db->get('patientinfo');

		if($query -> num_rows() >= 1)
   		{
     			return $query->result_array();
   		}
   		else
   		{
     			return false;
   		}
	}

	function getMaxId(){
		$this -> db -> select('UPCD_ID');
		$this -> db -> from('patient');

		$query = $this -> db -> get();

		if($query -> num_rows() >= 1)
   		{
     			return $query->result_array();
   		}
   		else
   		{
     			return false;
   		}
	}

	function addPatientServices($id, $perio, $rpd, $resto, $os, $fpd, $pedo, $endo, $cd, $ortho){
		$data = array(
			'UPCD_ID' => $id,
			'perio' => $perio,
			'rpd' => $rpd,
			'resto' => $resto,
			'os' => $os,
			'fpd' => $fpd,
			'pedo' => $pedo,
			'endo' => $endo,
			'cd' => $cd,
			'ortho' => $ortho);
		$this->db->insert('patientServices', $data);
	}

	function getPatientServices($id){
		$this->db->select('*');
		$this->db->from('patientServices');
		$this->db->where('UPCD_ID', $id);

		$query = $this -> db -> get();

		if($query -> num_rows() == 1)
   		{
     			return $query->result_array();
   		}
   		else
   		{
     			return false;
   		}
	}

	function addStudentTask($patientID, $section){
		$data = array(
			'UPCD_ID' => $patientID,
			'section' => $section,
			'taskdescription' => 'Assign to '.$section.' Clinician'
		);
		$this->db->insert('studenttasks', $data);
	}

	function getStudentTask($section, $studentID){
		/*$this->db->select('*');
		$this->db->from('studenttasks');
		$this->db->where('section', $section);

		$query = $this -> db -> get();

		if($query -> num_rows() >= 1)
   		{
     			return $query->result_array();
   		}
   		else
   		{
     			return false;
   		}*/

		$query = $this->db->query("SELECT * FROM studenttasks where section = '$section' OR clinicianID=$studentID");

		if($query -> num_rows() >= 1)
   		{
     			return $query->result_array();
   		}
   		else
   		{
     			return false;
   		}
	}

	function getPatientRecordStatus($id){
		$this->db->select('status');
		$this->db->from('patient');
		$this->db->where('UPCD_ID', $id);

		$query = $this -> db -> get();

		if($query -> num_rows() >= 1)
   		{
     			return $query->result_array();
   		}
   		else
   		{
     			return false;
   		}
	}

	function deleteStudentTask($id){
		$this->db->where('UPCD_ID', $id);
		$this->db->delete('studenttasks');
	}

	function updateClinician($patientID, $facultyID){
		$data2 = array(
			'clinician' => $facultyID
            	);
		$this->db->where('UPCD_ID', $patientID);
		$this->db->update('patient', $data2);
	}

	function updatePatientApprover($patientID, $facultyid){
		$data = array(
			'approvedBy7' => $facultyid
            	);
		$this->db->where('UPCD_ID7', $patientID);
		$this->db->update('patientdashboardversion', $data); 
	}

	function updatePatientRecordStatus($id, $status){
		$data2 = array(
			'status' => $status
            	);
		$this->db->where('UPCD_ID', $patientID);
		$this->db->update('patient', $data2);
	}


	function getFacultyTask($section, $facultyid){
		/*$this -> db -> select('*');
		$this -> db -> from('patientdashboardversion');
		$this->db->where('currentsection7', $section);
		$this->db->where('updateStatus7', 'Pending');

		$query = $this -> db -> get();

		if($query -> num_rows() >= 1)
   		{
     			return $query->result_array();
   		}
   		else
   		{
     			return false;
   		}*/
		
		$query = $this->db->query("SELECT * FROM patientdashboardversion where updateStatus7 = 'Pending' AND (currentsection7 = '$section' OR approvedBy7=$facultyid)");

		if($query -> num_rows() >= 1)
   		{
     			return $query->result_array();
   		}
   		else
   		{
     			return false;
   		}

		//$query = $this->db->query("SELECT * FROM patientdashboardversion where ");
		/*if($section == "Oral Diagnosis"){
			//$query = $this->db->query("SELECT * FROM patientinfoversion, patientchecklistversion, medandsochistoversion, dentaldataversion, dentalchartversion, treatmentplanversion");
			
			/*this -> db -> select('*');
			$this -> db -> from('patientinfoversion, patientchecklistversion, medandsochistoversion, dentaldataversion, dentalchartversion, treatmentplanversion');
			//$this->db->join('patientchecklistversion', 'patientinfoversion.UPCD_ID = patientchecklistversion.UPCD_ID');
			//$this->db->join('medandsochistoversion', 'patientinfoversion.UPCD_ID = medandsochistoversion.UPCD_ID');
			//$this->db->join('dentaldataversion', 'patientinfoversion.UPCD_ID = dentaldataversion.UPCD_ID');
			//$this->db->join('dentalchartversion', 'patientinfoversion.UPCD_ID = dentalchartversion.UPCD_ID');
			//$this->db->join('treatmentplanversion', 'patientinfoversion.UPCD_ID = treatmentplanversion.UPCD_ID');
			//$this->db->where('patientinfoversion.updateStatus', 'Pending');

			//$query = $this -> db -> get();

			if($query -> num_rows() >= 1)
	   		{
	     			return $query->result_array();
	   		}
	   		else
	   		{
	     			return false;
	   		}
		}
		elseif($section == "Operative Dentistry"){
			$query = $this->db->query("SELECT * FROM patientdashboardversion");
		}
		elseif($section == "Oral Medicine"){
			$query = $this->db->query("SELECT * FROM patientdashboardversion");
		}
		elseif($section == "Prosthodontics"){
			$query = $this->db->query("SELECT * FROM patientdashboardversion");
		}*/
	}

	function getSection($id, $section){
		$this -> db -> select('section7');
		$this -> db -> from('patientdashboardversion');
		$this->db->where('UPCD_ID7', $id);
		$this->db->where('currentsection7', $section);

		$query = $this -> db -> get();

		if($query -> num_rows() >= 1)
   		{
     			return $query->result_array();
   		}
   		else
   		{
     			return false;
   		}
	}

	function getPatientDashboardStatus($id){
		$this -> db -> select('updateStatus7');
		$this -> db -> from('patientdashboardversion');
		$this->db->where('UPCD_ID7', $id);
	
		$query = $this -> db -> get();

		if($query -> num_rows() >= 1)
   		{
     			return $query->result_array();
   		}
   		else
   		{
     			return false;
   		}
	}

	function getPatientDashboardStatus2($id){
		$this -> db -> select('updateStatus7');
		$this -> db -> from('patientdashboardversion');
		$this->db->order_by("patientdashboardversionID", "desc"); 
		$this->db->limit(1);
		$this->db->where('UPCD_ID7', $id);
		$this->db->where('updateStatus7 !=', 'Approved');

	
		$query = $this -> db -> get();

		if($query -> num_rows() == 1)
   		{
     			return $query->result_array();
   		}
   		else
   		{
     			return false;
   		}
	}

	function getPatientDashboardStatus3($id){
		$this -> db -> select('updateStatus7');
		$this -> db -> from('patientdashboardversion');
		$this->db->where('UPCD_ID7', $id);
		$this->db->where('updateStatus7 !=', 'Pending');
	
		$query = $this -> db -> get();

		if($query -> num_rows() >= 1)
   		{
     			return $query->result_array();
   		}
   		else
   		{
     			return false;
   		}
	}

	function getRemarkStatus($id){
		$this -> db -> select('remarkStatus');
		$this -> db -> from('remark');
		$this->db->where('patientID', $id);
	
		$query = $this -> db -> get();

		if($query -> num_rows() >= 1)
   		{
     			return $query->result_array();
   		}
   		else
   		{
     			return false;
   		}
	}

	function getRemarks($id){
		$this -> db -> select('*');
		$this -> db -> from('remark');
		$this->db->where('patientID', $id);
		//$this->db->where('remarkStatus', 'Temporary');
	
		$query = $this -> db -> get();

		if($query -> num_rows() >= 1)
   		{
     			return $query->result_array();
   		}
   		else
   		{
     			return false;
   		}
	}

	function getRemarks2($id, $facultyid){
		$this -> db -> select('*');
		$this -> db -> from('remark');
		$this->db->where('patientID', $id);
		$this->db->where('userID', $facultyid);
		//$this->db->where('remarkStatus', 'Temporary');
	
		$query = $this -> db -> get();

		if($query -> num_rows() >= 1)
   		{
     			return $query->result_array();
   		}
   		else
   		{
     			return false;
   		}
	}

	/*function getRemarks2($id, $remarkID){
		$this -> db -> select('*');
		$this -> db -> from('remark');
		$this->db->where('patientID', $id);
		$this->db->where('remarkID', $remarkID);
	
		$query = $this -> db -> get();

		if($query -> num_rows() >= 1)
   		{
     			return $query->result_array();
   		}
   		else
   		{
     			return false;
   		}
	}

	function getLatestRemarks($id){
		$this->db->select_max('remarkID');
		$this->db->where('patientID', $id);
		$query = $this->db->get('remark');

		if($query -> num_rows() >= 1)
   		{
     			return $query->result_array();
   		}
   		else
   		{
     			return false;
   		}
	}*/

	function hasTempRecord($patientid){
		$this -> db -> select('*');
		$this -> db -> from('remark');
		$this->db->where('patientID', $id);
		$this->db->where('remarkStatus', 'Temporary');
	
		$query = $this -> db -> get();

		if($query -> num_rows() >= 1)
   		{
     			return true;
   		}
   		else
   		{
     			return false;
   		}
	}

	function clearPatient($id){
		$data = array(
			'section' => 'Finished'
            	);
		$this->db->where('UPCD_ID', $id);
		$this->db->update('patient', $data); 
	}

	function updatePatientTemporary($studentid, $facultyid, $patientid, $remark, $patientinfo, $patientchecklist, $medandsochisto, $dentaldata, $dentalchart, $treatmentplan){
		$data = array(
			'remarkStatus' => $remark,
			'patientinfo' => $patientinfo,
			'patientchecklist' => $patientchecklist,
			'medandsochisto' => $medandsochisto,
			'dentaldata' => $dentaldata,
			'dentalchart' => $dentalchart,
			'treatmentplan' => $treatmentplan
            	);
		$this->db->where('patientID', $patientid);
		$this->db->where('remarkStatus', 'Temporary');
		$this->db->update('remark', $data); 
	}

	function getStudentID($patientid){
		$this -> db -> select('*');
		$this -> db -> from('patientdashboardversion');
		$this->db->where('UPCD_ID7', $patientid);
		$this->db->where('updateStatus7', 'Pending');

		$query = $this -> db -> get();

		if($query -> num_rows() >= 1)
   		{
     			return $query->result_array();
   		}
   		else
   		{
     			return false;
   		}
	}

	function addRemark($studentid, $facultyid, $patientid, $remark, $patientinfo, $patientchecklist, $medandsochisto, $dentaldata, $dentalchart, $treatmentplan){
		$data = array(
			'userID' => $studentid,
			'patientID' => $patientid,
			'facultyID' => $facultyid,
			'remarkStatus' => $remark,
			'patientinfo' => $patientinfo,
			'patientchecklist' => $patientchecklist,
			'medandsochisto' => $medandsochisto,
			'dentaldata' => $dentaldata,
			'dentalchart' => $dentalchart,
			'treatmentplan' => $treatmentplan);
		$this->db->insert('remark', $data);
	}

	function updatePatient($patientID, $section, $facultyID, $status){
		$data = array(
               		'section' => $section,
			'status' => "Open"
            	);
		$this->db->where('UPCD_ID', $patientID);
		$this->db->update('patient', $data); 	

		$data2 = array(
               		'updateStatus7' => $status,
			'approvedBy7' => $facultyID,
			'currentsection7' => $section
            	);
		$this->db->where('UPCD_ID7', $patientID);
		$this->db->where('updateStatus7', 'Pending');
		$this->db->update('patientdashboardversion', $data2);

		$data3 = array(
			'UPCD_ID' => $patientID,
			'section' => $section,
			'taskdescription' => 'Assign to '.$section.' Clinician'
		);
		$this->db->insert('studenttasks', $data3);
	}

	function updatePatientRejected($patientID, $facultyid, $status, $currentsection, $referredsection){
		$data = array(
               		'updateStatus7' => $status
            	);
		$this->db->where('UPCD_ID7', $patientID);
		$this->db->where('updateStatus7', 'Pending');
		$this->db->update('patientdashboardversion', $data);

		$data2 = array(
			'UPCD_ID' => $patientID,
			'clinicianID' => $userid,
			'section' => $section,
			'taskdescription' => 'Rejected Referral to '.$section
		);
		$this->db->insert('studenttasks', $data2);
	}

	function hasPatientDB($id, $section){
		$this -> db -> select('*');
		$this -> db -> from('patientdashboardversion');
		$this->db->where('UPCD_ID7', $patientid);
		$this->db->where('currentsection7', $section);

		$query = $this -> db -> get();

		if($query -> num_rows() >= 1)
   		{
     			return $query->result_array();
   		}
   		else
   		{
     			return false;
   		}
	}

	function setAppointment($patientID, $studentID, $date){
		$data = array(
			'UPCD_ID' => $patientID,
			'studentID' => $studentID,
			'appointmentDate' => $date);
		$this->db->insert('appointment', $data);
	}

	function getAppointments($id){
		$this -> db -> select('*');
		$this -> db -> from('appointment');
		$this->db->where('studentID', $id);

		$query = $this -> db -> get();

		if($query -> num_rows() >= 1)
   		{
     			return $query->result_array();
   		}
   		else
   		{
     			return false;
   		}
	}

	function isClinician($patientid){
		$this -> db -> select('*');
		$this -> db -> from('patient');
		$this->db->where('UPCD_ID', $patientid);

		$query = $this -> db -> get();
		$res = $query->result_array();
		$clinician = "";
		foreach($res as $row){
			$clinician = $row['clinician'];
		}

		if($clinician == 'Pending'){
			return false;
		}
		else{
			return $clinician;
		}

	}

	function resetPatientRemark($patientid){
		$data2 = array(
               		'remarkStatus' => 'Pending',
			'patientinfo' => '',
			'patientchecklist' => '',
			'medandsochisto' => '',
			'dentaldata' => '',
			'dentalchart' => '',
			'treatmentplan' => ''
            	);
		$this->db->where('patientID', $patientid);
		$this->db->update('remark', $data2);
	}
}

?>
