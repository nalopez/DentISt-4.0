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

   <title>Medical & Social History - <?php echo $section; ?></title>
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
		}
	}
?>
 <body>
  
<div class="maindiv" style="border:0px;">
	<?php include('patient_header.php'); ?>

<div id="Content_Area" style="border: solid 1px #7F00FF;">

<form id="ADDMEDANDSOCHISTORY" name="ADDMEDANDSOCHISTORY" action="<?php echo base_url();?>index.php/verifyaddmedandsochistory" method="post">

<br><a href="<?php echo base_url();?>index.php/loaddashboard/patientdb/<?php echo $id; ?>"> Dashboard </a> &nbsp; <a href="<?php echo base_url();?>index.php/viewmedandsochistoversions"> View Versions </a><br><br>

<?php if($forapproval) echo "<h4 style='color:red;'>This patient's record is currently subject for approval.</h4>";
elseif($private) echo "<h4 style='color:red;' align='center'>This patient's record is under other clinician's supervision.</h4>"; ?>
<br>

<div class="validationexc" style="display: <?php if($this->session->userdata('has_error')) echo 'block'; else 'none' ?>;">
   		<?php $session_data = $this->session->userdata('has_error');
     		echo $session_data['error'];
	?>
</div>




		<table frame="box" class="frame">
		<tr class="header">
			<td colspan=2>Medical History
		</tr>
		<tr>
			<td>Physician Name: 
			<td><input type="text" name="physicianname" value="<?php if($invalid_input) echo $session_data2['phyname']; elseif($recordexist == true) echo $phyname; ?>" readonly>
		</tr>
		<tr>
			<td>Phone number: 
			<td><input type="text" name="physicianphone" value="<?php if($invalid_input) echo $session_data2['phyphone']; elseif($recordexist == true) echo $phynum; ?>" readonly>
		</tr>
		<tr>
			<td>Date of latest hospitalization: 
			<td><input type="text" name="hospdate" id="hospdate" value="<?php if($invalid_input) echo $session_data2['hospdate']; elseif($recordexist == true) echo $hospdate; ?>" readonly>
		</tr>
		<tr>
			<td>Reason: 
			<td><input type="text" name="hospreason" value="<?php if($invalid_input) echo $session_data2['hospreason']; elseif($recordexist == true) echo $hospreason; ?>" readonly>
		</tr>
		<tr>
			<td>Allergies: 
			<td><input type="text" name="allergies" value="<?php if($invalid_input) echo $session_data2['allergies']; elseif($recordexist == true) echo $allergies; ?>" readonly>
		</tr>
		<tr>
			<td>Illnesses
			<td><input type="text" name="illnesses" value="<?php if($invalid_input) echo $session_data2['illnesses']; elseif($recordexist == true) echo $illnesses; ?>" readonly>
		</tr>
		<tr>
			<td>Medications
			<td><input type="text" name="medications" value="<?php if($invalid_input) echo $session_data2['medications']; elseif($recordexist == true) echo $med; ?>" readonly>
		</tr>
		<tr>
			<td>Childhood illnesses (below 18 y.o.)
			<td><input type="text" name="ci" value="<?php if($invalid_input) echo $session_data2['ci']; elseif($recordexist == true) echo $ci; ?>" readonly>
		</tr>
		</table><br>
		
		<table frame="box" class="frame">
		<tr class="header">
			<td colspan=2>Social History
		</tr>
		<tr>
			<td width=75%>Are you using or have you used tobacco/cigarettes?
			<td><input type="radio" name="cig" value="Yes" onClick="showHosp(this.name, this.value)" <?php 
					if($invalid_input){ 
						if($session_data2['cig'] == "Yes") echo "checked";
					}	
					elseif($recordexist == true && $cig=='Yes') echo 'checked'; ?> readonly> Yes <input type="radio" name="cig" value="No" onClick="showHosp(this.name, this.value)" <?php 
					if($invalid_input){ 
						if($session_data2['cig'] == "No") echo "checked";
					}	
					elseif($recordexist == true && $cig=='No') echo 'checked'; ?> readonly> No 
		</tr>
		<tr>
			<td colspan=2><div id="cigtb"  
					<?php if($invalid_input){ 
						if($session_data2['cig'] == "Yes") echo "style='display:block;left:15%; position: relative;'";
						else echo "style='display:none;left:15%; position: relative;'";
					}	
					elseif($recordexist == true && $cig=='Yes'){
						echo "style='display:block; left:15%; position: relative;'";
						}
					else
						echo "style='display:none; left:15%; position: relative;'";	
					?>>
				<table>
				<tr>
					<td>Type: 
					<td><input type="text" name="cigkind" value="<?php if($invalid_input) echo $session_data2['cigkind']; elseif($recordexist == true && $cig=='Yes') echo $cigkind; ?>" readonly>
				</tr>
				<tr>
					<td>Frequency: 
					<td><input type="text" name="cigfreq" value="<?php if($invalid_input) echo $session_data2['cigfreq']; elseif($recordexist == true && $cig=='Yes') echo $cigfreq; ?>" readonly>
				</tr>
				<tr>
					<td>Duration: 
					<td><input type="text" name="cigdur" value="<?php if($invalid_input) echo $session_data2['cigdur']; elseif($recordexist == true && $cig=='Yes') echo $cigdur; ?>" readonly>
				</tr>
				<tr>
					<td>Date of last exposure: 
					<td><input type="text" name="cigdole" id="cigdole" value="<?php if($invalid_input) echo $session_data2['cigdole']; elseif($recordexist == true && $cig=='Yes') echo $cigdole; ?>" readonly>
				</tr>
				</table>
			</div></td>
		</tr>
		<tr>
			<td width=75%>Do you drink alcoholic beverages? 
			<td><input type="radio" name="alco" value="Yes" onClick="showHosp(this.name, this.value)" <?php 
					if($invalid_input){ 
						if($session_data2['alco'] == "Yes") echo "checked";
					}	
					elseif($recordexist == true && $alco=='Yes') echo 'checked'; ?> readonly> Yes <input type="radio" name="alco" value="No" onClick="showHosp(this.name, this.value)" <?php 
					if($invalid_input){ 
						if($session_data2['alco'] == "No") echo "checked";
					}	
					elseif($recordexist == true && $alco=='No') echo 'checked'; ?> readonly> No 
		</tr>
		<tr>
			<td colspan=2><div id="alcotb" 
					<?php if($invalid_input){ 
						if($session_data2['alco'] == "Yes") echo "style='display:block;left:15%; position: relative;'";
						else echo "style='display:none;left:15%; position: relative;'";
					}	
					elseif($recordexist == true && $alco=='Yes'){
						echo "style='display:block; left:15%; position: relative;'";
						}
					else
						echo "style='display:none; left:15%; position: relative;'";	
					?>>
				<table>
				<tr>
					<td>Type: 
					<td><input type="text" name="alcokind" value="<?php if($invalid_input) echo $session_data2['alcokind']; elseif($recordexist == true && $alco=='Yes') echo $alcokind; ?>" readonly>
				</tr>
				<tr>
					<td>Frequency: 
					<td><input type="text" name="alcofreq" value="<?php if($invalid_input) echo $session_data2['alcofreq']; elseif($recordexist == true && $alco=='Yes') echo $alcofreq; ?>" readonly>
				</tr>
				<tr>
					<td>Duration: 
					<td><input type="text" name="alcodur" value="<?php if($invalid_input) echo $session_data2['alcodur']; elseif($recordexist == true && $alco=='Yes') echo $alcodur; ?>" readonly>
				</tr>
				<tr>
					<td>Date of last exposure: 
					<td><input type="text" name="alcodole" id="alcodole" value="<?php if($invalid_input) echo $session_data2['alcodole']; elseif($recordexist == true && $cig=='Yes') echo $alcodole; ?>" readonly>
				</tr>
				</table>
			</div></td>
		</tr>
		<tr>
			<td width="75%">Have you ever used drugs for recreation or non-therapeutic purposes? 
			<td><input type="radio" name="drug" value="Yes" onClick="showHosp(this.name, this.value)" <?php 
					if($invalid_input){ 
						if($session_data2['drug'] == "Yes") echo "checked";
					}	
					elseif($recordexist == true && $drug=='Yes') echo 'checked'; ?> readonly> Yes <input type="radio" name="drug" value="No" onClick="showHosp(this.name, this.value)" <?php 
					if($invalid_input){ 
						if($session_data2['drug'] == "No") echo "checked";
					}	
					elseif($recordexist == true && $drug=='No') echo 'checked'; ?> readonly> No 
		</tr>
		<tr>
			<td colspan=2><div id="drugtb" <?php 
					if($invalid_input){ 
						if($session_data2['drug'] == "Yes") echo "style='display:block;left:15%; position: relative;'";
						else echo "style='display:none;left:15%; position: relative;'";
					}	
					elseif($recordexist == true && $drug=='Yes'){
						echo "style='display:block; left:15%; position: relative;'";
						}
					else
						echo "style='display:none; left:15%; position: relative;'";	
					?>>
				<table>
				<tr>
					<td>Type: 
					<td><input type="text" name="drugkind" value="<?php if($invalid_input) echo $session_data2['drugkind']; elseif($recordexist == true && $drug=='Yes') echo $drugkind; ?>" readonly>
				</tr>
				<tr>
					<td>Frequency: 
					<td><input type="text" name="drugfreq" value="<?php if($invalid_input) echo $session_data2['drugfreq']; elseif($recordexist == true && $drug=='Yes') echo $drugfreq; ?>" readonly>
				</tr>
				<tr>
					<td>Duration: 
					<td><input type="text" name="drugdur" value="<?php if($invalid_input) echo $session_data2['drugdur']; elseif($recordexist == true && $drug=='Yes') echo $drugdur; ?>" readonly>
				</tr>
				<tr>
					<td>Date of last exposure: 
					<td><input type="text" name="drugdole" id="drugdole" value="<?php if($invalid_input) echo $session_data2['drugdole']; elseif($recordexist == true && $drug=='Yes') echo $drugdole; ?>" readonly>
				</tr>
				</table>
			</div></td>
		</tr>
	</table>

		
	<br><br>

		<br><br>
</form>
</div>
</div>

 </body>
</html>


