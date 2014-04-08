<?php 
	include('header.php'); 
	include('navigation.php');
	
	echo "<link rel=\"stylesheet\" type=\"text/css\" href='".base_url()."css/style.css'>";
	echo "<script type\"text/javascript\" src=\"".base_url()."js/dynamic.js\"></script>";
	echo "<script type\"text/javascript\" src=\"".base_url()."js/patientdb.js\"></script>"
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
 <head>
<link href="<?php echo base_url(); ?>css/ui-lightness/jquery-ui-1.10.3.custom.css" rel="stylesheet">
	<script src="<?php echo base_url(); ?>js/jquery-1.9.1.js"></script>
	<script src="<?php echo base_url(); ?>js/jquery-ui-1.10.3.custom.js"></script>

<?php 
	$session_data = $this->session->userdata('logged_in');
     	$sect = $session_data['section'];
	$section = "";
	foreach($sect as $row){
		if($row != "System Maintenance"){
			$section = $row;
			break;
		}
	}

?>

   <title>Patient Information - <?php echo $section; ?></title>
<link rel="shortcut icon" href="<?php echo base_url(); ?>images/upcd-20140224-favicon.ico">	
<script type="text/javascript">
	
	
</script>
 </head>
<?php 
	$session_data = $this->session->userdata('logged_in');
     	$usernamelog = $session_data['username'];

	$session_data2 = $this->session->userdata('has_error');
	$invalid_input = $session_data2['invalid_input'];

	if($recordexist){
		foreach($info as $row){
			$civstat = $row['civstat']; 
			$phonenum = $row['phonenum'];
			$edattain = $row['edattain'];
			$occ = $row['occupation'];
			$ptnicoe = $row['persontonotify'];
			$ptnicoenum = $row['persontonotifynum'];
			$histo = $row['histo'];
			$gait = $row['gait'];
			$appear = $row['appear'];
			$dfcts = $row['dfcts'];
			$bp = $row['bp'];
			$pr = $row['pr'];
			$rr = $row['rr'];
			$temp = $row['temp'];
			$wt = $row['weight'];

			/*$hbp = $row['highbloodpressure'];
			$pij = $row['joint_pain'];
			$ha = $row['heart_attack'];
			$trem = $row['tremors'];
			$apcp = $row['chest_pain'];
			$bt = $row['blood_transfusion'];
			$sa = $row['swollen_ankles'];
			$dptgb = $row['denied_blood'];
			$fhf = $row['high_fever'];
			$pal = $row['pallor'];
			$pahv = $row['pacemaker'];
			$dia = $row['diabetes'];
			$emp = $row['emphysema'];
			$goi = $row['goiter'];
			$af = $row['afternoon_fever'];
			$bobt = $row['bruising_tendency'];
			$cc = $row['chronic_cough'];
			$swlog = $row['weight_change'];
			$brp = $row['breathing_problem'];
			$ft = $row['frequent_thirst'];
			$bs = $row['bloody_sputum'];
			$fh = $row['frequent_hunger'];
			$sin = $row['sinusitis'];
			$fur = $row['frequent_urination'];
			$fha = $row['frequent_headaches'];
			$che = $row['chemotherapy'];
			$diz = $row['dizziness'];
			$puu = $row['pain_urination'];
			$fslc = $row['loss_consciousness'];
			$biu = $row['urine_blood'];
			$vi = $row['visual_impairment'];
			$hep = $row['hepatitis'];
			$hi = $row['hearing_impairment'];
			$hiv = $row['HIV_positive'];
			$art = $row['arthritis'];
			$pad = $row['pelvic_discomfort'];
			$ner = $row['nervousness'];
			$dep = $row['depression'];
			$anx = $row['anxiety'];
			$ast = $row['asthma'];
			$patientoth = $row['patientothers'];
			$patientotht = $row['patientothers_text'];
			$diaf = $row['familydiabetes'];
			$bdf = $row['bleeding_disorder'];
			$hdf = $row['heart_diseases'];
			$canf = $row['cancer'];
			$familyoth = $row['familyothers'];
			$familyotht = $row['familyothers_text'];
			$druga = $row['familydiabetes'];
			$fooda = $row['familydiabetes'];
			$ruba = $row['familydiabetes'];
			$allergyoth = $row['allergyothers'];
			$allergyotht = $row['allergyothers_text'];
			$pregfe = $row['pregnant'];
			$bffe = $row['breastfeeding'];
			$hrtfe = $row['hormonetherapy'];
			$mensfe = $row['menstruation'];
			$confe = $row['contraceptive'];

			$phyname = $row['physician_name'];
			$phynum = $row['physician_phone'];
			$hospdate = $row['dateoflatesthospitalization'];
			$hospreason = $row['hospitalizationreason'];
			$allergies = $row['allergies'];
			$illnesses = $row['illnesses'];
			$med = $row['medications'];
			$ci = $row['childhood_illnesses'];
			$cig = $row['cigarette'];
			$cigkind = $row['cigarette_type'];
			$cigfreq = $row['cigarette_frequency'];
			$cigdur = $row['cigarette_duration'];
			$cigdole = $row['cigarette_dateoflastexposure'];
			$alco = $row['alcohol'];
			$alcokind = $row['alcohol_type'];
			$alcofreq = $row['alcohol_frequency'];
			$alcodur = $row['alcohol_duration'];
			$alcodole = $row['alcohol_dateoflastexposure'];
			$drug = $row['drug'];
			$drugkind = $row['drug_type'];
			$drugfreq = $row['drug_frequency'];
			$drugdur = $row['drug_duration'];
			$drugdole = $row['drug_dateoflastexposure'];

			$dolv = $row['dateoflastvisit'];
			$pdolv = $row['proceduresonlastvisit'];
			$fodv = $row['frequencyofvisit'];
			$eortle = $row['anesthesia_exposure'];
			$cdaoadp = $row['dental_complications'];
			$hnt = $row['headneckTMJ'];
			$lfn = $row['lipsfrenum'];
			$muc = $row['mucosa'];
			$plt = $row['palate'];
			$prx = $row['pharynx'];
			$ftm = $row['floorofthemouth'];
			$tng = $row['tongue'];
			$lym = $row['lymphnodes'];
			$sal = $row['salivarygland'];
			$thy = $row['thyroid'];
			$ggv = $row['gingiva'];

			$chiefcomp = $row['chiefcomplaints'];
			$perio = $row['perio'];
			$rpd = $row['rpd'];
			$resto = $row['resto'];
			$os = $row['os'];
			$fpd = $row['fpd'];
			$pedo = $row['pedo'];
			$endo = $row['endo'];
			$cd = $row['cd'];
			$ortho = $row['ortho'];
			$ptp = $row['proposedtreatment'];
			*/
		}
	}
?>
 <body>
  
<div class="validation" style="display:<?if(validation_errors() == true) echo 'block'; else echo 'none'?>">
   <?php echo validation_errors(); ?>
</div>
<div class="maindiv" style="border: 0px;">
	<?php include('patient_header.php'); 

	$id = $this->uri->segment(3);
?>
<div id="Content_Area" style="border: solid 1px #7F00FF;">

<center><a href="<?php echo base_url();?>index.php/loaddashboard/patientdb/<?php echo $id; ?>"> Dashboard </a> &nbsp; <a href="<?php echo base_url();?>index.php/viewdentalchartversions"> View Versions </a><br><br></center><br><br>

<form id="ADDPATIENTINFORMATION" name="ADDPATIENTINFORMATION" action="<?php echo base_url();?>index.php/verifyaddpatientinformation" method="post">

<br>
	<div class="validationexc" style="display: <?php if($this->session->userdata('has_error')) echo 'block'; else 'none' ?>;">
   		<?php $session_data = $this->session->userdata('has_error');
     		echo $session_data['error'];
	?>
	</div>

	<?php if($forapproval) echo "<h4 style='color:red;'>This patient's record is currently subject for approval.</h4>";
elseif($private) echo "<h4 style='color:red;' align='center'>This patient's record is under other clinician's supervision.</h4>";
 ?>

	<table frame="box" class="frame">
	<tr class="header">
		<td colspan=2>Additional Demographics
	</tr>
	<tr>
		<td><label for="civstat">Civil Status: </td>
		<td><select name="civstat" id="civstat" disabled>
		<option value="Select one.." selected> Select one.. </option>		
		<option value="Single" <?php if($invalid_input){ 
						if($session_data2['civstat'] == "Single") echo "selected";
					}	
					elseif($recordexist == true && $civstat == 'Single') echo 'selected'; ?>> Single </option>
		<option value="Married" <?php if($invalid_input){ 
						if($session_data2['civstat'] == "Married") echo "selected";
					}	
					elseif($recordexist == true && $civstat == 'Married') echo 'selected'; ?>> Married </option>
		<option value="Separated" <?php if($invalid_input){ 
						if($session_data2['civstat'] == "Separated") echo "selected";
					}	
					elseif($recordexist == true && $civstat == 'Separated') echo 'selected'; ?>> Separated </option>
		<option value="Divorced" <?php if($invalid_input){ 
						if($session_data2['civstat'] == "Divorced") echo "selected";
					}	
					elseif($recordexist == true && $civstat == 'Divorced') echo 'selected'; ?>> Divorced </option>
		<option value="Widowed" <?php if($invalid_input){ 
						if($session_data2['civstat'] == "Widowed") echo "selected";
					}	
					elseif($recordexist == true && $civstat == 'Widowed') echo 'selected'; ?>> Widowed </option>
		</select></td>
	</tr>
	<tr>
		<td><label for="phone">Phone:</td>
		<td><input type="text" name="phone" placeholder="Phone Number" value="<?php if($invalid_input) echo $session_data2['phone']; elseif($recordexist == true) echo $phonenum; ?>" readonly></td>
	</tr>
	<tr>
		<td><label for="edattain">Educational Attainment:
		<td><select name="edattain" disabled>
			<option value="Select one..">Select one..</option>
			<option value="Elementary Graduate" <?php if($invalid_input){ 
						if($session_data2['edattain'] == "Elementary Graduate") echo "selected";
						}	
						elseif($recordexist == true && $edattain == 'Elementary Graduate') echo 'selected'; ?>>Elementary Graduate</option>
			<option value="High School Graduate" <?php if($invalid_input){ 
						if($session_data2['edattain'] == "High School Graduate") echo "selected";
					}	
					elseif($recordexist == true && $edattain == 'High School Graduate') echo 'selected'; ?>>High School Graduate</option>
			<option value="College Graduate" <?php if($invalid_input){ 
						if($session_data2['edattain'] == "College Graduate") echo "selected";
					}	
					elseif($recordexist == true && $edattain == 'College Graduate') echo 'selected'; ?>>College Graduate</option>
			<option value="Master's Decree" <?php if($invalid_input){ 
						if($session_data2['edattain'] == "Masters Decree") echo "selected";
					}	
					elseif($recordexist == true && $edattain == 'Masters Decree') echo 'selected'; ?>>Master's Decree</option>
	</tr>
	<tr>
		<td><label for="occupation" readonly>Occupation:
		<td><input type="text" name="occupation" value="<?php if($invalid_input) echo $session_data2['occupation']; elseif($recordexist == true) echo $occ; ?>" readonly>
	</tr>
	<tr>
		<td><label for="ptnicoe">Person to notify in-case of emergency:</td>
		<td><input type="text" name="ptnicoe" value="<?php if($invalid_input) echo $session_data2['ptnicoe']; elseif($recordexist == true) echo $ptnicoe; ?>" readonly>
	</tr>
	<tr>
		<td><label for="ptnicoenum">Phone:
		<td><input type="text" name="ptnicoenum" value="<?php if($invalid_input) echo $session_data2['ptnicoenum']; elseif($recordexist == true) echo $ptnicoenum; ?>" readonly>
	</tr>
	<tr>
		<td> History of Present Illness:
		<td><textarea name="hopi" id="hopi" cols=50 readonly><?php if($invalid_input) echo $session_data2['hopi']; elseif($recordexist == true) echo $histo; ?></textarea>
	</tr>	
</table><br>


		<table frame="box" class="frame">
			<tr class="header">
				<td colspan=2>Physical Assessment
			</tr>
			<tr>
				<td>Gait:
				<td><input type="text" name="gait" size=12px value="<?php if($invalid_input) echo $session_data2['gait']; elseif($recordexist == true) echo $gait; ?>" readonly>
			</tr>
			<tr> 
				<td>Appearance:
				<td><input type="text" name="appear" size=12px value="<?php if($invalid_input) echo $session_data2['appear']; elseif($recordexist == true) echo $appear; ?>" readonly>
			</tr>
			<tr>
				<td>Defects:
				<td><input type="text" name="dfcts" size=12px value="<?php if($invalid_input) echo $session_data2['dfcts']; elseif($recordexist == true) echo $dfcts; ?>" readonly>
			</tr> 
		</table><br>

	
		<table frame="box" class="frame">
		<tr class="header">
			<td colspan=2>Vital Signs
		<tr>
			<td>Blood Pressure (mmHg):
			<td><input type="text" name="bp" value="<?php if($invalid_input) echo $session_data2['bp']; elseif($recordexist == true) echo $bp; ?>" readonly>
		</tr>
		<tr>
			<td>Pulse Rate (bpm):
			<td><input type="text" name="pr" value="<?php if($invalid_input) echo $session_data2['pr']; elseif($recordexist == true) echo $pr; ?>" readonly>
		</tr>
		<tr>
			<td>Respiration Rate (RR):
			<td><input type="text" name="rr" value="<?php if($invalid_input) echo $session_data2['rr']; elseif($recordexist == true) echo $rr; ?>" readonly>
		</tr>
		<tr>
			<td>Temperature (celsius):
			<td><input type="text" name="temp" value="<?php if($invalid_input) echo $session_data2['temp']; elseif($recordexist == true) echo $temp; ?>" readonly>
		</tr>
		<tr>
			<td>Weight (kg):
			<td><input type="text" name="wt" id="wt" value="<?php if($invalid_input) echo $session_data2['wt']; elseif($recordexist == true) echo $wt; ?>" readonly>
		</tr>
		</table><br><br>

		<br><br>
	

</form>
</div>
</div>
 </body>
</html>


