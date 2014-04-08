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

   <title>Treatment Plan - <?php echo $section; ?></title>
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
			
		}
	}
?>
 <body>
  
<div class="maindiv" style="border:0px;">
	<?php include('patient_header.php'); ?>

<div id="Content_Area" style="border: solid 1px #7F00FF;">

<form id="ADDTREATMENTPLAN" name="ADDTREATMENTPLAN" action="<?php echo base_url();?>index.php/verifyaddtreatmentplan" method="post">

<br><?php if($forapproval) echo "<h4 style='color:red;'>This patient's record is currently subject for approval.</h4>";
elseif($private) echo "<h4 style='color:red;' align='center'>This patient's record is under other clinician's supervision.</h4>"; ?>

<div class="validationexc" style="display: <?php if($this->session->userdata('has_error')) echo 'block'; else 'none' ?>;">
   		<?php $session_data = $this->session->userdata('has_error');
     		echo $session_data['error'];
	?>
</div>


		<table frame="box" class="frame">
			<tr class="header">
				<td colspan=2>Treatment Plan
			</tr>
			<tr>
				<td> Chief Complaints:
				<td><input type="text" name="chiefcomp" id="chiefcomp" value="<?php if($invalid_input) echo $session_data2['chiefcomp']; elseif($recordexist == true) echo $chiefcomp; ?>" readonly disabled>
			</tr>
			<tr>
				<td><label for="servcode">Service Code: 
				<td>
				<table>
				<tr>
					<td><input type="checkbox" name="servcode[]" value="PERIO" <?php if($invalid_input && $session_data2['perio']) echo "checked"; elseif($recordexist == true && $perio=="Yes") echo 'checked'; ?> disabled> PERIO	
					<td><input type="checkbox" name="servcode[]" value="RPD" <?php if($invalid_input && $session_data2['rpd']) echo "checked"; elseif($recordexist == true && $rpd=="Yes") echo 'checked'; ?> disabled> RPD
					<td><input type="checkbox" name="servcode[]" value="Resto" <?php if($invalid_input && $session_data2['resto']) echo "checked"; elseif($recordexist == true && $resto=="Yes") echo 'checked'; ?> disabled> Resto 
				</tr>
				<tr>
					<td><input type="checkbox" name="servcode[]" value="OS" <?php if($invalid_input && $session_data2['os']) echo "checked"; elseif($recordexist == true && $os=="Yes") echo 'checked'; ?> disabled> OS 
					<td><input type="checkbox" name="servcode[]" value="FPD" <?php if($invalid_input && $session_data2['fpd']) echo "checked"; elseif($recordexist == true && $fpd=="Yes") echo 'checked'; ?> disabled> FPD 
					<td><input type="checkbox" name="servcode[]" value="PEDO" <?php if($invalid_input && $session_data2['pedo']) echo "checked"; elseif($recordexist == true && $pedo=="Yes") echo 'checked'; ?> disabled> PEDO 
				</tr>
					<td><input type="checkbox" name="servcode[]" value="ENDO"<?php if($invalid_input && $session_data2['endo']) echo "checked"; elseif($recordexist == true && $endo=="Yes") echo 'checked'; ?> disabled> ENDO 
					<td><input type="checkbox" name="servcode[]" value="CD" <?php if($invalid_input && $session_data2['cd']) echo "checked"; elseif($recordexist == true && $cd=="Yes") echo 'checked'; ?> disabled> CD
					<td><input type="checkbox" name="servcode[]" value="Ortho" <?php if($invalid_input && $session_data2['ortho']) echo "checked"; elseif($recordexist == true && $ortho=="Yes") echo 'checked'; ?> disabled> Ortho
				</tr>
				</table>
			</tr>
			<tr>
				<td>Proposed Treatment Plan
				<td><textarea id="ptp" name="ptp" cols=30 readonly disabled><?php if($invalid_input) echo $session_data2['ptp']; elseif($recordexist == true) echo $ptp; ?></textarea>
			<tr>
			
		</table><br><br>

		<br><br>
	</div>
   </form>

</div>

 </body>
</html>


