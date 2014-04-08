<?php 
	include('header.php'); 
	include('navigation.php');
	
	echo "<link rel=\"stylesheet\" type=\"text/css\" href='".base_url()."css/style.css'>";
	//echo "<script type\"text/javascript\" src=\"".base_url()."js/dynamic.js\"></script>";
	//echo "<script type\"text/javascript\" src=\"".base_url()."js/patientdb.js\"></script>"
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

   <title>Consultation and Findings - <?php echo $section; ?></title>
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

			$datetxt = $row['date'];
			$reasontxt = $row['reason'];
			$startdatetxt = $row['startdate'];
			$enddatetxt = $row['enddate'];
			$findingstxt = $row['findings'];
			
		}

		$date = explode("|", $datetxt);
		$reason = explode("|", $reasontxt);
		$startdate = explode("|", $startdatetxt);
		$enddate = explode("|", $enddatetxt);
		$findings = explode("|", $findingstxt);

	}
?>
 <body>
  
<div class="maindiv">
	<?php include('patient_header.php'); ?>

<div id="Content_Area">

	<form id="ADDCONSULTATIONFINDINGS" name="ADDCONSULTATIONFINDINGS" action="<?php echo base_url();?>index.php/verifyaddconsultationandfindings" method="post">

<br><a href="<?php echo base_url();?>index.php/loaddashboard/patientdb/<?php echo $id; ?>"> Dashboard </a> &nbsp; <a href="<?php echo base_url();?>index.php/viewconsultationversions"> View Versions </a><br><br>

<div class="validationexc" style="display: <?php if($this->session->userdata('has_error')) echo 'block'; else 'none' ?>;">
   		<?php $session_data = $this->session->userdata('has_error');
     		echo $session_data['error'];
	?>
</div>

<?php if($forapproval) echo "<h4 style='color:red;'>This patient's record is currently subject for approval.</h4>";
elseif($private) echo "<h4 style='color:red;'>This patient's record is under other clinician's supervision.</h4>"; ?>

		<table id="consult" frame="box" class="frame">
		<tr class=header>
			<td colspan=6>Consultation and Findings
		</tr>
		<tr>
				<td>
				<td>Date
				<td>Reason for Consult
				<td>From
				<td>To
				<td>Findings/Recommendation
			</tr>
			<?php
		if($recordexist){
			$size = sizeof($date);
			for($i=0; $i<$size; $i++){
				echo "<tr>";
					echo "<td>";//<input type='checkbox' name='0' id='ck0'>
					echo "<td><input type='text' name='datenew[]' class='datepicker' id='date_$i' size=8px value='".$date[$i]."' readonly disabled>
					<td><input type='text' name='reason[]' id='reason_$i' size=10px value='".$reason[$i]."' readonly disabled>
					<td><input type='text' name='startdate[]' class='datepicker' id='startdate_$i' size=8px value='".$startdate[$i]."' readonly disabled>
					<td><input type='text' name='enddate[]' class='datepicker' id='enddate_$i' size=8px value='".$enddate[$i]."' readonly disabled>
					<td><textarea name='findings[]' id='findings_$i' cols=30 readonly>".$findings[$i]."</textarea>
				</tr>";
			}
		}
		else{	
			echo "<tr>";
			echo "<td>";//<input type='checkbox' name='0' id='ck0'>
			echo "<td><input type='text' name='datenew[]' class='datepicker' id='date_0' size=8px readonly disabled>
				<td><input type='text' name='reason[]' id='reason_0' size=10px readonly disabled>
				<td><input type='text' name='startdate[]' class='datepicker' id='startdate_0' size=8px  readonly disabled>
				<td><input type='text' name='enddate[]' class='datepicker' id='enddate_0' size=8px readonly disabled>
				<td><textarea name='findings[]' id='findings_0' cols=30 readonly></textarea>
				</tr>";

		}
		?>
		</table><br><br>
		<!--<input type="button" onClick="addConsult('consult')" value="Add Row">
		<input type="button" onClick="deleteConsult('consult')" value="Delete Row/s"><br><br>
		<input type="submit" value="Save"/> <input type="reset" value="Clear entries"/>-->
</form>

</div>

 </body>
</html>


