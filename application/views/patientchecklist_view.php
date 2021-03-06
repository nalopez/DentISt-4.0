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

   <title>Patient Checklist - Oral Diagnosis</title>
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
			$hbp = $row['highbloodpressure'];
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

	
		}
	}
?>
 <body>
  

<div class="maindiv">
	<?php include('patient_header.php'); ?>
<div id="Content_Area">

<form id="ADDPATIENTCHECKLIST" name="ADDPATIENTCHECKLIST" action="<?php echo base_url();?>index.php/verifyaddpatientchecklist" method="post">

<br><a href="<?php echo base_url();?>index.php/loaddashboard/patientdb/<?php echo $id; ?>"> Dashboard </a> &nbsp; <a href="<?php echo base_url();?>index.php/viewpatientchecklistversions"> View Versions </a><br><br>

<div class="validationexc" style="display: <?php if($this->session->userdata('has_error')) echo 'block'; else 'none' ?>;">
   		<?php $session_data = $this->session->userdata('has_error');
     		echo $session_data['error'];
	?>
</div>
<div style="position: relative; text-align:right; color: red; right: 5%;"><i>* means required</i></div>
		<table frame="box" class="frame">
			<tr class="header">
				<td colspan=6>Patient Checklist
			</tr>
			<tr>
				<td colspan=6>Do you have or have you had any of the following? 
					<input type=button name="first" value="'Yes' all" onClick="checkAll1(true);"><input type=button value="'No' all" onClick="checkAll1(false);">
			</tr>
			<tr>
				<td> YES
				<td> NO
				<td>
				<td> YES
				<td> NO
				<td>
			</tr>
			<tr>
				<td><input type="radio" name="hbp" id="hbpy" value="Yes" <?php 
					if($invalid_input){ 
						if($session_data2['hbp'] == "Yes") echo "checked";
					}	
					elseif($recordexist == true && $hbp=='Yes') echo 'checked'; ?>>
				<td><input type="radio" name="hbp" id="hbpn" value="No" <?php 
					if($invalid_input){ 
						if($session_data2['hbp'] == "No") echo "checked";
					}	
					elseif($recordexist == true && $hbp=='No') echo 'checked'; ?>>
				<td>High blood pressure<font color='red'>*</font>
				<td><input type="radio" name="pij" id="pijy" value="Yes" <?php 
					if($invalid_input){ 
						if($session_data2['pij'] == "Yes") echo "checked";
					}	
					elseif($recordexist == true && $pij=='Yes') echo 'checked'; ?>>
				<td><input type="radio" name="pij" id="pijn" value="No" <?php 
					if($invalid_input){ 
						if($session_data2['pij'] == "No") echo "checked";
					}	
					elseif($recordexist == true && $pij=='No') echo 'checked'; ?>>
				<td>Pain in joints<font color='red'>*</font>
			</tr>
			<tr>
				<td><input type="radio" name="ha" id="hay" value="Yes" <?php 
					if($invalid_input){ 
						if($session_data2['ha'] == "Yes") echo "checked";
					}	
					elseif($recordexist == true && $ha=='Yes') echo 'checked'; ?>>
				<td><input type="radio" name="ha" id="han" value="No" <?php 
					if($invalid_input){ 
						if($session_data2['ha'] == "No") echo "checked";
					}	
					elseif($recordexist == true && $ha=='No') echo 'checked'; ?>>
				<td>Heart attack<font color='red'>*</font>
				<td><input type="radio" name="trem" id="tremy" value="Yes" <?php 
					if($invalid_input){ 
						if($session_data2['trem'] == "Yes") echo "checked";
					}	
					elseif($recordexist == true && $trem=='Yes') echo 'checked'; ?>>
				<td><input type="radio" name="trem" id="tremn" value="No" <?php 
					if($invalid_input){ 
						if($session_data2['trem'] == "No") echo "checked";
					}	
					elseif($recordexist == true && $trem=='No') echo 'checked'; ?>>
				<td>Tremors<font color='red'>*</font>
			</tr>
			<tr>
				<td><input type="radio" name="apcp" id="apcpy" value="Yes" <?php 
					if($invalid_input){ 
						if($session_data2['apcp'] == "Yes") echo "checked";
					}	
					elseif($recordexist == true && $apcp=='Yes') echo 'checked'; ?>>
				<td><input type="radio" name="apcp" id="apcpn" value="No" <?php 
					if($invalid_input){ 
						if($session_data2['apcp'] == "No") echo "checked";
					}	
					elseif($recordexist == true && $apcp=='No') echo 'checked'; ?>>
				<td>Angia Pectoris, chest pain<font color='red'>*</font>
				<td><input type="radio" name="bt" id="bty" value="Yes" <?php 
					if($invalid_input){ 
						if($session_data2['bt'] == "Yes") echo "checked";
					}	
					elseif($recordexist == true && $bt=='Yes') echo 'checked'; ?>>
				<td><input type="radio" name="bt" id="btn" value="No" <?php 
					if($invalid_input){ 
						if($session_data2['bt'] == "No") echo "checked";
					}	
					elseif($recordexist == true && $bt=='No') echo 'checked'; ?>> 
				<td>Blood transfusion<font color='red'>*</font>
			</tr>
			<tr>
				<td><input type="radio" name="sa" id="say" value="Yes" <?php 
					if($invalid_input){ 
						if($session_data2['sa'] == "Yes") echo "checked";
					}	
					elseif($recordexist == true && $sa=='Yes') echo 'checked'; ?>>
				<td><input type="radio" name="sa" id="san" value="No" <?php 
					if($invalid_input){ 
						if($session_data2['sa'] == "No") echo "checked";
					}	
					elseif($recordexist == true && $sa=='No') echo 'checked'; ?>>
				<td>Swollen ankles<font color='red'>*</font>
				<td><input type="radio" name="dptgb" id="dptgby" value="Yes" <?php 
					if($invalid_input){ 
						if($session_data2['dptgb'] == "Yes") echo "checked";
					}	
					elseif($recordexist == true && $dptgb=='Yes') echo 'checked'; ?>>
				<td><input type="radio" name="dptgb" id="dptgbn" value="No" <?php 
					if($invalid_input){ 
						if($session_data2['dptgb'] == "No") echo "checked";
					}	
					elseif($recordexist == true && $dptgb=='No') echo 'checked'; ?>>
				<td>Denied permission to give blood<font color='red'>*</font>
			</tr>
			<tr>
				<td><input type="radio" name="fhf" id="fhfy" value="Yes" <?php 
					if($invalid_input){ 
						if($session_data2['fhf'] == "Yes") echo "checked";
					}	
					elseif($recordexist == true && $fhf=='Yes') echo 'checked'; ?>>
				<td><input type="radio" name="fhf" id="fhfn" value="No" <?php 
					if($invalid_input){ 
						if($session_data2['fhf'] == "No") echo "checked";
					}	
					elseif($recordexist == true && $fhf=='No') echo 'checked'; ?>>
				<td>Frequent high fever<font color='red'>*</font>
				<td><input type="radio" name="pal" id="paly" value="Yes" <?php 
					if($invalid_input){ 
						if($session_data2['pal'] == "Yes") echo "checked";
					}	
					elseif($recordexist == true && $pal=='Yes') echo 'checked'; ?>>
				<td><input type="radio" name="pal" id="paln" value="No" <?php 
					if($invalid_input){ 
						if($session_data2['pal'] == "No") echo "checked";
					}	
					elseif($recordexist == true && $pal=='No') echo 'checked'; ?>>
				<td>Pallor<font color='red'>*</font>
			</tr>
			<tr>
				<td><input type="radio" name="pahv" id="pahvy" value="Yes" <?php 
					if($invalid_input){ 
						if($session_data2['pahv'] == "Yes") echo "checked";
					}	
					elseif($recordexist == true && $pahv=='Yes') echo 'checked'; ?>>
				<td><input type="radio" name="pahv" id="pahvn" value="No" <?php 
					if($invalid_input){ 
						if($session_data2['pahv'] == "No") echo "checked";
					}	
					elseif($recordexist == true && $pahv=='No') echo 'checked'; ?>>
				<td>Pacemakers, artificial heart valves<font color='red'>*</font>
				<td><input type="radio" name="dia" id="diay" value="Yes" <?php 
					if($invalid_input){ 
						if($session_data2['dia'] == "Yes") echo "checked";
					}	
					elseif($recordexist == true && $dia=='Yes') echo 'checked'; ?>>
				<td><input type="radio" name="dia" id="dian" value="No" <?php 
					if($invalid_input){ 
						if($session_data2['dia'] == "No") echo "checked";
					}	
					elseif($recordexist == true && $dia=='No') echo 'checked'; ?>>
				<td>Diabetes<font color='red'>*</font>
			</tr>
			<tr>
				<td><input type="radio" name="emp" id="empy" value="Yes" <?php 
					if($invalid_input){ 
						if($session_data2['emp'] == "Yes") echo "checked";
					}	
					elseif($recordexist == true && $emp=='Yes') echo 'checked'; ?>>
				<td><input type="radio" name="emp" id="empn" value="No" <?php 
					if($invalid_input){ 
						if($session_data2['emp'] == "No") echo "checked";
					}	
					elseif($recordexist == true && $emp=='No') echo 'checked'; ?>>
				<td>Emphysema<font color='red'>*</font>
				<td><input type="radio" name="goi" id="goiy" value="Yes" <?php 
					if($invalid_input){ 
						if($session_data2['goi'] == "Yes") echo "checked";
					}	
					elseif($recordexist == true && $goi=='Yes') echo 'checked'; ?>>
				<td><input type="radio" name="goi" id="goin" value="No" <?php 
					if($invalid_input){ 
						if($session_data2['goi'] == "No") echo "checked";
					}	
					elseif($recordexist == true && $goi=='No') echo 'checked'; ?>>
				<td>Goiter<font color='red'>*</font>
			</tr>
			<tr>
				<td><input type="radio" name="af" id="afy" value="Yes" <?php 
					if($invalid_input){ 
						if($session_data2['af'] == "Yes") echo "checked";
					}	
					elseif($recordexist == true && $af=='Yes') echo 'checked'; ?>>
				<td><input type="radio" name="af" id="afn" value="No" <?php 
					if($invalid_input){ 
						if($session_data2['af'] == "No") echo "checked";
					}	
					elseif($recordexist == true && $af=='No') echo 'checked'; ?>>
				<td>Afternoon fever<font color='red'>*</font>
				<td><input type="radio" name="bobt" id="bobty" value="Yes" <?php 
					if($invalid_input){ 
						if($session_data2['bobt'] == "Yes") echo "checked";
					}	
					elseif($recordexist == true && $bobt=='Yes') echo 'checked'; ?>>
				<td><input type="radio" name="bobt" id="bobtn" value="No" <?php 
					if($invalid_input){ 
						if($session_data2['bobt'] == "No") echo "checked";
					}	
					elseif($recordexist == true && $bobt=='No') echo 'checked'; ?>>
				<td>Bleeding or bruising tendency<font color='red'>*</font>
			</tr>
			<tr>
				<td><input type="radio" name="cc" id="ccy" value="Yes" <?php 
					if($invalid_input){ 
						if($session_data2['cc'] == "Yes") echo "checked";
					}	
					elseif($recordexist == true && $cc=='Yes') echo 'checked'; ?>>
				<td><input type="radio" name="cc" id="ccn" value="No" <?php 
					if($invalid_input){ 
						if($session_data2['cc'] == "No") echo "checked";
					}	
					elseif($recordexist == true && $cc=='No') echo 'checked'; ?>>
				<td>Chronic cough<font color='red'>*</font>
				<td><input type="radio" name="swlog" id="swlogy" value="Yes" <?php
					if($invalid_input){ 
						if($session_data2['swlog'] == "Yes") echo "checked";
					}	
					elseif($recordexist == true && $swlog=='Yes') echo 'checked'; ?>>
				<td><input type="radio" name="swlog" id="swlogn" value="No" <?php 
					if($invalid_input){ 
						if($session_data2['swlog'] == "No") echo "checked";
					}	
					elseif($recordexist == true && $swlog=='No') echo 'checked'; ?>>
				<td>Sudden weight loss or gain<font color='red'>*</font>
			</tr>
			<tr>
				<td><input type="radio" name="brp" id="brpy" value="Yes" <?php 
					if($invalid_input){ 
						if($session_data2['brp'] == "Yes") echo "checked";
					}	
					elseif($recordexist == true && $brp=='Yes') echo 'checked'; ?>>
				<td><input type="radio" name="brp" id="brpn" value="No" <?php 
					if($invalid_input){ 
						if($session_data2['brp'] == "No") echo "checked";
					}	
					elseif($recordexist == true && $brp=='No') echo 'checked'; ?>>
				<td>Breathing problems<font color='red'>*</font>
				<td><input type="radio" name="ft" id="fty" value="Yes" <?php 
					if($invalid_input){ 
						if($session_data2['ft'] == "Yes") echo "checked";
					}	
					elseif($recordexist == true && $ft=='Yes') echo 'checked'; ?>>
				<td><input type="radio" name="ft" id="ftn" value="No" <?php 
					if($invalid_input){ 
						if($session_data2['ft'] == "No") echo "checked";
					}	
					elseif($recordexist == true && $ft=='No') echo 'checked'; ?>>
				<td>Frequent thirst<font color='red'>*</font>
			</tr>
			<tr>
				<td><input type="radio" name="bs" id="bsy" value="Yes" <?php 
					if($invalid_input){ 
						if($session_data2['bs'] == "Yes") echo "checked";
					}	
					elseif($recordexist == true && $bs=='Yes') echo 'checked'; ?>>
				<td><input type="radio" name="bs" id="bsn" value="No" <?php 
					if($invalid_input){ 
						if($session_data2['bs'] == "No") echo "checked";
					}	
					elseif($recordexist == true && $bs=='No') echo 'checked'; ?>>
				<td>Bloody sputum<font color='red'>*</font>
				<td><input type="radio" name="fh" id="fhy" value="Yes" <?php 
					if($invalid_input){ 
						if($session_data2['fh'] == "Yes") echo "checked";
					}	
					elseif($recordexist == true && $fh=='Yes') echo 'checked'; ?>>
				<td><input type="radio" name="fh" id="fhn" value="No" <?php 
					if($invalid_input){ 
						if($session_data2['fh'] == "No") echo "checked";
					}	
					elseif($recordexist == true && $fh=='No') echo 'checked'; ?>>
				<td>Frequent hunger<font color='red'>*</font>
			</tr>
			<tr>
				<td><input type="radio" name="sin" id="siny" value="Yes" <?php 
					if($invalid_input){ 
						if($session_data2['sin'] == "Yes") echo "checked";
					}	
					elseif($recordexist == true && $sin=='Yes') echo 'checked'; ?>>
				<td><input type="radio" name="sin" id="sinn" value="No" <?php 
					if($invalid_input){ 
						if($session_data2['sin'] == "No") echo "checked";
					}	
					elseif($recordexist == true && $sin=='No') echo 'checked'; ?>>
				<td>Sinusitis<font color='red'>*</font>
				<td><input type="radio" name="fur" id="fury" value="Yes" <?php 
					if($invalid_input){ 
						if($session_data2['fur'] == "Yes") echo "checked";
					}	
					elseif($recordexist == true && $fur=='Yes') echo 'checked'; ?>>
				<td><input type="radio" name="fur" id="furn" value="No" <?php 
					if($invalid_input){ 
						if($session_data2['fur'] == "No") echo "checked";
					}	
					elseif($recordexist == true && $fur=='No') echo 'checked'; ?>>
				<td>Frequent urination<font color='red'>*</font>
			</tr>
			<tr>
				<td><input type="radio" name="fha" id="fhay" value="Yes" <?php 
					if($invalid_input){ 
						if($session_data2['fha'] == "Yes") echo "checked";
					}	
					elseif($recordexist == true && $fha=='Yes') echo 'checked'; ?>>
				<td><input type="radio" name="fha" id="fhan" value="No" <?php 
					if($invalid_input){ 
						if($session_data2['fha'] == "No") echo "checked";
					}	
					elseif($recordexist == true && $fha=='No') echo 'checked'; ?>>
				<td>Frequent headaches<font color='red'>*</font>
				<td><input type="radio" name="che" id="chey" value="Yes" <?php 
					if($invalid_input){ 
						if($session_data2['che'] == "Yes") echo "checked";
					}	
					elseif($recordexist == true && $che=='Yes') echo 'checked'; ?>>
				<td><input type="radio" name="che" id="chen" value="No" <?php 
					if($invalid_input){ 
						if($session_data2['che'] == "No") echo "checked";
					}	
					elseif($recordexist == true && $che=='No') echo 'checked'; ?>>
				<td>Chemotherapy<font color='red'>*</font>
			</tr>
			<tr>
				<td><input type="radio" name="diz" id="dizy" value="Yes" <?php 
					if($invalid_input){ 
						if($session_data2['diz'] == "Yes") echo "checked";
					}	
					elseif($recordexist == true && $diz=='Yes') echo 'checked'; ?>>
				<td><input type="radio" name="diz" id="dizn" value="No" <?php 
					if($invalid_input){ 
						if($session_data2['diz'] == "No") echo "checked";
					}	
					elseif($recordexist == true && $diz=='No') echo 'checked'; ?>>
				<td>Dizziness<font color='red'>*</font>
				<td><input type="radio" name="puu" id="puuy" value="Yes" <?php 
					if($invalid_input){ 
						if($session_data2['puu'] == "Yes") echo "checked";
					}	
					elseif($recordexist == true && $puu=='Yes') echo 'checked'; ?>>
				<td><input type="radio" name="puu" id="puun"value="No" <?php 
					if($invalid_input){ 
						if($session_data2['puu'] == "No") echo "checked";
					}	
					elseif($recordexist == true && $puu=='No') echo 'checked'; ?>>
				<td>Pain upon urination<font color='red'>*</font>
			</tr>
			<tr>
				<td><input type="radio" name="fslc" id="fslcy" value="Yes" <?php 
					if($invalid_input){ 
						if($session_data2['fslc'] == "Yes") echo "checked";
					}	
					elseif($recordexist == true && $fslc=='Yes') echo 'checked'; ?>>
				<td><input type="radio" name="fslc" id="fslcn" value="No" <?php 
					if($invalid_input){ 
						if($session_data2['fslc'] == "No") echo "checked";
					}	
					elseif($recordexist == true && $fslc=='No') echo 'checked'; ?>>
				<td>Fainting spells or loss of conciousness<font color='red'>*</font>
				<td><input type="radio" name="biu" id="biuy" value="Yes" <?php 
					if($invalid_input){ 
						if($session_data2['biu'] == "Yes") echo "checked";
					}	
					elseif($recordexist == true && $biu=='Yes') echo 'checked'; ?>>
				<td><input type="radio" name="biu" id="biun" value="No" <?php 
					if($invalid_input){ 
						if($session_data2['biu'] == "No") echo "checked";
					}	
					elseif($recordexist == true && $biu=='No') echo 'checked'; ?>>
				<td>Blood/pus in urine<font color='red'>*</font>
			</tr>
			<tr>
				<td><input type="radio" name="vi" id="viy" value="Yes" <?php 
					if($invalid_input){ 
						if($session_data2['vi'] == "Yes") echo "checked";
					}	
					elseif($recordexist == true && $vi=='Yes') echo 'checked'; ?>>
				<td><input type="radio" name="vi" id="vin" value="No" <?php 
					if($invalid_input){ 
						if($session_data2['vi'] == "No") echo "checked";
					}	
					elseif($recordexist == true && $vi=='No') echo 'checked'; ?>>
				<td>Visual impairment<font color='red'>*</font>
				<td><input type="radio" name="hep" id="hepy" value="Yes" <?php 
					if($invalid_input){ 
						if($session_data2['hep'] == "Yes") echo "checked";
					}	
					elseif($recordexist == true && $hep=='Yes') echo 'checked'; ?>>
				<td><input type="radio" name="hep" id="hepn" value="No" <?php 
					if($invalid_input){ 
						if($session_data2['hep'] == "No") echo "checked";
					}	
					elseif($recordexist == true && $hep=='No') echo 'checked'; ?>>
				<td>Hepatitis (A, B, C, D)<font color='red'>*</font>
			</tr>
			<tr>
				<td><input type="radio" name="hi" id="hiy" value="Yes" <?php 
					if($invalid_input){ 
						if($session_data2['hi'] == "Yes") echo "checked";
					}	
					elseif($recordexist == true && $hi=='Yes') echo 'checked'; ?>>
				<td><input type="radio" name="hi" id="hin" value="No" <?php 
					if($invalid_input){ 
						if($session_data2['hi'] == "No") echo "checked";
					}	
					elseif($recordexist == true && $hi=='No') echo 'checked'; ?>>
				<td>Hearing impairment<font color='red'>*</font>
				<td><input type="radio" name="hiv" id="hivy" value="Yes" <?php 
					if($invalid_input){ 
						if($session_data2['hiv'] == "Yes") echo "checked";
					}	
					elseif($recordexist == true && $hiv=='Yes') echo 'checked'; ?>>
				<td><input type="radio" name="hiv" id="hivn" value="No" <?php 
					if($invalid_input){ 
						if($session_data2['hiv'] == "No") echo "checked";
					}	
					elseif($recordexist == true && $hiv=='No') echo 'checked'; ?>>
				<td>HIV positive?<font color='red'>*</font>
			</tr>
			<tr>
				<td><input type="radio" name="art" id="arty" value="Yes" <?php 
					if($invalid_input){ 
						if($session_data2['art'] == "Yes") echo "checked";
					}	
					elseif($recordexist == true && $art=='Yes') echo 'checked'; ?>>
				<td><input type="radio" name="art" id="artn" value="No" <?php 
					if($invalid_input){ 
						if($session_data2['art'] == "No") echo "checked";
					}	
					elseif($recordexist == true && $art=='No') echo 'checked'; ?>>
				<td>Arthritis<font color='red'>*</font>
				<td><input type="radio" name="pad" id="pady" value="Yes" <?php 
					if($invalid_input){ 
						if($session_data2['pad'] == "Yes") echo "checked";
					}	
					elseif($recordexist == true && $pad=='Yes') echo 'checked'; ?>>
				<td><input type="radio" name="pad" id="padn" value="No" <?php 
					if($invalid_input){ 
						if($session_data2['pad'] == "No") echo "checked";
					}	
					elseif($recordexist == true && $pad=='No') echo 'checked'; ?>>
				<td>Pelvic/lower abdominal discomfort<font color='red'>*</font>
			</tr>
			<tr>
				<td><input type="radio" name="ner" id="nery" value="Yes" <?php 
					if($invalid_input){ 
						if($session_data2['ner'] == "Yes") echo "checked";
					}	
					elseif($recordexist == true && $ner=='Yes') echo 'checked'; ?>>
				<td><input type="radio" name="ner" id="nern" value="No" <?php 
					if($invalid_input){ 
						if($session_data2['ner'] == "No") echo "checked";
					}	
					elseif($recordexist == true && $ner=='No') echo 'checked'; ?>>
				<td>Nervousness<font color='red'>*</font>
				<td><input type="radio" name="dep" id="depy" value="Yes" <?php 
					if($invalid_input){ 
						if($session_data2['dep'] == "Yes") echo "checked";
					}	
					elseif($recordexist == true && $dep=='Yes') echo 'checked'; ?>>
				<td><input type="radio" name="dep" id="depn" value="No" <?php 
					if($invalid_input){ 
						if($session_data2['dep'] == "No") echo "checked";
					}	
					elseif($recordexist == true && $dep=='No') echo 'checked'; ?>>
				<td>Depression<font color='red'>*</font>
			</tr>
			<tr>
				<td><input type="radio" name="anx" id="anxy" value="Yes" <?php 
					if($invalid_input){ 
						if($session_data2['anx'] == "Yes") echo "checked";
					}	
					elseif($recordexist == true && $anx=='Yes') echo 'checked'; ?>>
				<td><input type="radio" name="anx" id="anxn" value="No" <?php 
					if($invalid_input){ 
						if($session_data2['anx'] == "No") echo "checked";
					}	
					elseif($recordexist == true && $anx=='No') echo 'checked'; ?>>
				<td>Anxiety<font color='red'>*</font>
				<td><input type="radio" name="oth" id="othy" value="Yes" onChange="showdiv(this.name, this.value);" onLoad="showdiv(this.name, this.value);" <?php 
					if($invalid_input){ 
						if($session_data2['oth'] == "Yes") echo "checked";
					}	
					elseif($recordexist == true && $patientoth=='Yes') echo 'checked'; ?>>
				<td><input type="radio" name="oth" id="othn" value="No" onChange="showdiv(this.name, this.value);" onLoad="showdiv(this.name, this.value);" <?php 
					if($invalid_input){ 
						if($session_data2['oth'] == "No") echo "checked";
					}	
					elseif($recordexist == true && $patientoth=='No') echo 'checked'; ?>>
				<td>Others<font color='red'>*</font>
			</tr>
			<tr>
				<td><input type="radio" name="ast" id="asty" value="Yes" <?php 
					if($invalid_input){ 
						if($session_data2['ast'] == "Yes") echo "checked";
					}	
					elseif($recordexist == true && $ast=='Yes') echo 'checked'; ?>>
				<td><input type="radio" name="ast" id="astn" value="No" <?php 
					if($invalid_input){ 
						if($session_data2['ast'] == "No") echo "checked";
					}	
					elseif($recordexist == true && $ast=='No') echo 'checked'; ?>>
				<td>Asthma<font color='red'>*</font>
				<td>
				<td>
				<td><div id="checklist"
					<?php 
					if($invalid_input){ 
						if($session_data2['oth'] == "Yes") echo "style='display:block;'";
						else echo "style='display:none;'";
					}	
					elseif(($recordexist == true && $patientoth=='Yes')){
						echo "style='display:block;'";
						}
					else
						echo "style='display:none;'";	
					?>><input type="text" name="cloth" placeholder="please specify here" value="<?php if($invalid_input) echo $session_data2['checklist']; elseif($recordexist == true) echo $patientotht; ?>"><font color='red'>*</font></div>
			</tr>
			<tr>
				<td colspan=6><br><b>Family History</b> (Grandparents, Parents, Brothers, Sisters, Children)
						<input type=button value="'Yes' all" onClick="checkAll2(true)"><input type=button value="'No' all" onClick="checkAll2(false)">
			</tr>
			<tr>
				<td>YES
				<td>NO
				<td>
				<td>
				<td>
				<td>
			</tr>
			<tr>
				<td><input type="radio" name="diaf" id="diafy" value="Yes" <?php 
					if($invalid_input){ 
						if($session_data2['diaf'] == "Yes") echo "checked";
					}	
					elseif($recordexist == true && $diaf=='Yes') echo 'checked'; ?>>
				<td><input type="radio" name="diaf" id="diafn" value="No" <?php 
					if($invalid_input){ 
						if($session_data2['diaf'] == "No") echo "checked";
					}	
					elseif($recordexist == true && $diaf=='No') echo 'checked'; ?>>
				<td>Diabetes<font color='red'>*</font>
				<td>
				<td>
				<td>
			</tr>
			<tr>
				<td><input type="radio" name="bdf" id="bdfy" value="Yes" <?php 
					if($invalid_input){ 
						if($session_data2['bdf'] == "Yes") echo "checked";
					}	
					elseif($recordexist == true && $bdf=='Yes') echo 'checked'; ?>>
				<td><input type="radio" name="bdf" id="bdfn" value="No" <?php 
					if($invalid_input){ 
						if($session_data2['bdf'] == "No") echo "checked";
					}	
					elseif($recordexist == true && $bdf=='No') echo 'checked'; ?>>
				<td>Bleeding disorders<font color='red'>*</font>
				<td>
				<td>
				<td>
			</tr>
			<tr>
				<td><input type="radio" name="hdf" id="hdfy" value="Yes" <?php 
					if($invalid_input){ 
						if($session_data2['hdf'] == "Yes") echo "checked";
					}	
					elseif($recordexist == true && $hdf=='Yes') echo 'checked'; ?>>
				<td><input type="radio" name="hdf" id="hdfn" value="No" <?php 
					if($invalid_input){ 
						if($session_data2['hdf'] == "No") echo "checked";
					}	
					elseif($recordexist == true && $hdf=='No') echo 'checked'; ?>>
				<td>Heart Diseases<font color='red'>*</font>
				<td>
				<td>
				<td>
			</tr>
			<tr>
				<td><input type="radio" name="canf" id="canfy" value="Yes" <?php 
					if($invalid_input){ 
						if($session_data2['canf'] == "Yes") echo "checked";
					}	
					elseif($recordexist == true && $canf=='Yes') echo 'checked'; ?>>
				<td><input type="radio" name="canf" id="canfn" value="No" <?php 
					if($invalid_input){ 
						if($session_data2['canf'] == "No") echo "checked";
					}	
					elseif($recordexist == true && $canf=='No') echo 'checked'; ?>>
				<td>Cancer<font color='red'>*</font>
				<td>
				<td>
				<td>
			</tr>
			<tr>
				<td><input type="radio" name="famoth" id="famothy" value="Yes" onClick="showdiv(this.name, this.value);" <?php 
					if($invalid_input){ 
						if($session_data2['famoth'] == "Yes") echo "checked";
					}	
					elseif($recordexist == true && $familyoth=='Yes') echo 'checked'; ?>>
				<td><input type="radio" name="famoth" id="famothn" value="No" onClick="showdiv(this.name, this.value);" <?php 
					if($invalid_input){ 
						if($session_data2['famoth'] == "No") echo "checked";
					}	
					elseif($recordexist == true && $familyoth=='No') echo 'checked';?>>
				<td>Others<font color='red'>*</font>
				<td>
				<td>
				<td>
			</tr>
			<tr>
				<td>
				<td>
				<td><div id="family" <?php 
					if($invalid_input){ 
						if($session_data2['famoth'] == "Yes") echo "style='display:block;'";
						else echo "style='display:none;'";
					}	
					elseif($recordexist == true && $familyoth=='Yes'){
						echo "style='display:block;'";
						}
					else
						echo "style='display:none;'";	
					?>><input type="text" name="famotht" placeholder="please specify here" value="<?php if($invalid_input) echo $session_data2['family']; elseif($recordexist == true) echo $familyotht; ?>"><font color='red'>*</font></div>
				<td>
				<td>
				<td>
			</tr>
			<tr>
				<td colspan=6><br><b>Allergies</b>
						<input type=button value="'Yes' all" onClick="checkAll3(true)"><input type=button value="'No' all" onClick="checkAll3(false)">
			</tr>
			<tr>
				<td>YES
				<td>NO
				<td>
				<td>
				<td>
				<td>
			</tr>
			<tr>
				<td><input type="radio" name="druga" id="drugay" value="Yes" <?php 
					if($invalid_input){ 
						if($session_data2['druga'] == "Yes") echo "checked";
					}	
					elseif($recordexist == true && $druga=='Yes') echo 'checked'; ?>>
				<td><input type="radio" name="druga" id="drugan" value="No" <?php 
					if($invalid_input){ 
						if($session_data2['druga'] == "No") echo "checked";
					}	
					elseif($recordexist == true && $druga=='No') echo 'checked'; ?>>
				<td>Drugs<font color='red'>*</font>
				<td>
				<td>
				<td>
			</tr>
			<tr>
				<td><input type="radio" name="fooda" id="fooday" value="Yes" <?php 
					if($invalid_input){ 
						if($session_data2['fooda'] == "Yes") echo "checked";
					}	
					elseif($recordexist == true && $fooda=='Yes') echo 'checked'; ?>>
				<td><input type="radio" name="fooda" id="foodan" value="No" <?php 
					if($invalid_input){ 
						if($session_data2['fooda'] == "No") echo "checked";
					}	
					elseif($recordexist == true && $fooda=='No') echo 'checked'; ?>>
				<td>Food<font color='red'>*</font>
				<td>
				<td>
				<td>
			</tr>
			<tr>
				<td><input type="radio" name="ruba" id="rubay" value="Yes" <?php 
					if($invalid_input){ 
						if($session_data2['ruba'] == "Yes") echo "checked";
					}	
					elseif($recordexist == true && $ruba=='Yes') echo 'checked'; ?>>
				<td><input type="radio" name="ruba" id="ruban" value="No" <?php 
					if($invalid_input){ 
						if($session_data2['ruba'] == "No") echo "checked";
					}	
					elseif($recordexist == true && $ruba=='No') echo 'checked'; ?>>
				<td>Rubber<font color='red'>*</font>
				<td>
				<td>
				<td>
			</tr>
			<tr>
				<td><input type="radio" name="aloth" id="alothy" value="Yes" onClick="showdiv(this.name, this.value);" <?php 
					if($invalid_input){ 
						if($session_data2['aloth'] == "Yes") echo "checked";
					}	
					elseif($recordexist == true && $allergyoth=='Yes') echo 'checked'; ?>>
				<td><input type="radio" name="aloth" id="alothn" value="No" onClick="showdiv(this.name, this.value);" <?php 
					if($invalid_input){ 
						if($session_data2['aloth'] == "No") echo "checked";
					}	
					elseif($recordexist == true && $allergyoth=='No') echo 'checked'; ?>>
				<td>Others<font color='red'>*</font>
				<td>
				<td>
				<td>
			</tr>
			<tr>
				<td>
				<td>
				<td><div id="allergy" <?php 
					if($invalid_input){ 
						if($session_data2['aloth'] == "Yes") echo "style='display:block;'";
						else echo "style='display:none;'";
					}	
					elseif($recordexist == true && $allergyoth=='Yes'){
						echo "style='display:block;'";
						}
					else
						echo "style='display:none;'";	
					?>><input type="text" name="alotht" placeholder="please specify here" value="<?php if($invalid_input) echo $session_data2['allergy']; elseif($recordexist == true) echo $allergyotht; ?>"><font color='red'>*</font></div>
				<td>
				<td>
				<td>
			</tr>
			<tr>
				<td colspan=6><br><b>Females</b>
						<input type=button value="'Yes' all" onClick="checkAll4(true)"><input type=button value="'No' all" onClick="checkAll4(false)">
			</tr>
			<tr>
				<td>YES
				<td>NO
				<td>
				<td>
				<td>
				<td>
			</tr>
			<tr>
				<td><input type="radio" name="pregfe" id="pregfey" value="Yes" <?php 
					if($invalid_input){ 
						if($session_data2['pregfe'] == "Yes") echo "checked";
					}	
					elseif($recordexist == true && $pregfe=='Yes') echo 'checked'; ?>>
				<td><input type="radio" name="pregfe" id="pregfen" value="No" <?php 
					if($invalid_input){ 
						if($session_data2['pregfe'] == "No") echo "checked";
					}	
					elseif($recordexist == true && $pregfe=='No') echo 'checked'; ?>>
				<td>Are you pregnant now?<font color='red'>*</font>
				<td>
				<td>
				<td>
			</tr>
			<tr>
				<td><input type="radio" name="bffe" id="bffey" value="Yes" <?php 
					if($invalid_input){ 
						if($session_data2['bffe'] == "Yes") echo "checked";
					}	
					elseif($recordexist == true && $bffe=='Yes') echo 'checked'; ?>>
				<td><input type="radio" name="bffe" id="bffen" value="No" <?php 
					if($invalid_input){ 
						if($session_data2['bffe'] == "No") echo "checked";
					}	
					elseif($recordexist == true && $bffe=='No') echo 'checked'; ?>>
				<td>Are you breastfeeding now?<font color='red'>*</font>
				<td>
				<td>
				<td>
			</tr>
			<tr>
				<td><input type="radio" name="hrtfe" id="hrtfey" value="Yes" <?php 
					if($invalid_input){ 
						if($session_data2['hrtfe'] == "Yes") echo "checked";
					}	
					elseif($recordexist == true && $hrtfe=='Yes') echo 'checked'; ?>>
				<td><input type="radio" name="hrtfe" id="hrtfen" value="No" <?php 
					if($invalid_input){ 
						if($session_data2['hrtfe'] == "No") echo "checked";
					}	
					elseif($recordexist == true && $hrtfe=='No') echo 'checked'; ?>>
				<td>Under hormone replacement therapy?<font color='red'>*</font>
				<td>
				<td>
				<td>
			</tr>
			<tr>
				<td><input type="radio" name="mensfe" id="mensfey" value="Yes" <?php 
					if($invalid_input){ 
						if($session_data2['mensfe'] == "Yes") echo "checked";
					}	
					elseif($recordexist == true && $mensfe=='Yes') echo 'checked'; ?>>
				<td><input type="radio" name="mensfe" id="mensfen" value="No" <?php 
					if($invalid_input){ 
						if($session_data2['mensfe'] == "No") echo "checked";
					}	
					elseif($recordexist == true && $mensfe=='No') echo 'checked'; ?>>
				<td>Menstruation?<font color='red'>*</font>
				<td>
				<td>
				<td>
			</tr>
			<tr>
				<td><input type="radio" name="confe" id="confey" value="Yes" <?php 
					if($invalid_input){ 
						if($session_data2['confe'] == "Yes") echo "checked";
					}	
					elseif($recordexist == true && $confe=='Yes') echo 'checked'; ?>>
				<td><input type="radio" name="confe" id="confen" value="No" <?php 
					if($invalid_input){ 
						if($session_data2['confe'] == "No") echo "checked";
					}	
					elseif($recordexist == true && $confe=='No') echo 'checked'; ?>>
				<td>Taking any form of contraceptive?<font color='red'>*</font>
				<td>
				<td>
				<td>
			</tr>
		</table>
		
		<br><br>

		<input type="submit" value="Save"/> <input type="reset" value="Clear entries"/><br><br>
		

</form></div>
</div>
 </body>
</html>


