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

   <title>Radiographic Exam - <?php echo $section; ?> </title>
<link rel="shortcut icon" href="<?php echo base_url(); ?>images/upcd-20140224-favicon.ico">	
<script type="text/javascript">


	
	
</script>
 </head>
<?php 
	$session_data = $this->session->userdata('logged_in');
     	$usernamelog = $session_data['username'];

	$session_data2 = $this->session->userdata('has_error');
	$invalid_input = $session_data2['invalid_input'];

	$session_data = $this->session->userdata('logged_in');
     	$usernamelog = $session_data['username'];

	$session_data2 = $this->session->userdata('has_error');
	$invalid_input = $session_data2['invalid_input'];

	if($recordexist){
		foreach($info as $row){
			$datetxt = $row['date'];
			$toothtxt = $row['toothno'];
			$findingstxt = $row['findings'];
		}

		$date = explode("|", $datetxt);
		$tooth = explode("|", $toothtxt);
		$findings = explode("|", $findingstxt);

		
	}
?>
 <body>
  
<div class="maindiv">
	<?php include('patient_header.php'); ?>

<div id="Content_Area">

<center><a href="<?php echo base_url();?>index.php/loaddashboard/patientdb/<?php echo $id; ?>"> Dashboard </a> &nbsp; <a href="<?php echo base_url();?>index.php/viewdentalchartversions"> View Versions </a><br><br></center><br><br>

	<form id="ADDRADIOGRAPHICEXAM" name="ADDRADIOGRAPHICEXAM" action="<?php echo base_url();?>index.php/verifyaddradiographicexam" method="post">



<div class="validationexc" style="display: <?php if($this->session->userdata('has_error')) echo 'block'; else 'none' ?>;">
   		<?php $session_data = $this->session->userdata('has_error');
     		echo $session_data['error'];
	?>
</div>

<?php if($forapproval) echo "<h4 style='color:red;'>This patient's record is currently subject for approval.</h4>";
elseif($private) echo "<h4 style='color:red;' align='center'>This patient's record is under other clinician's supervision.</h4>"; ?>

		<table frame="box" class="frame" id="radio">
		<tr class=header>
			<td colspan=4>Radiographic Exam
		</tr>
		<tr>
			<td>
			<td>Date
			<td>Tooth No.
			<td>Findings
		</tr>
		<?php
		if($recordexist){
			$size = sizeof($date);
			for($i=0; $i<$size; $i++){
				echo "<tr>";
					echo "<td>";//<input type='checkbox' name=0 id='ck0' checked/></td>
					echo "<td><input type='text' name='date[]' class='datepicker' id='date$i' value='".$date[$i]."' readonly /></td>
					<td><input type='text' name='tooth[]' id='toothnum_$i' value='".$tooth[$i]."' readonly /></td>
					<td><textarea name='findings[]' id='findings_$i' cols='40' readonly>".$findings[$i]."</textarea></td>
				</tr>";
			}
		}
		else{
			echo "<tr>";
			echo "<td>";//<input type='checkbox' name=0 id='ck0' checked/></td>
			echo "<td><input type='text' name='date[]' class='datepicker' id='date0' readonly /></td>
			<td><input type='text' name='tooth[]' id='toothnum_0' readonly /></td>
			<td><textarea name='findings[]' id='findings_0' cols='40' readonly></textarea></td>
			</tr>";
		}
		?>
		</table><br><br>
		<!--<input type="button" onClick="addRadio('radio')" value="Add Row">
		<input type="button" onClick="deleteRadio('radio')" value="Delete Row/s"><br><br>
		<input type="submit" value="Save"/> <input type="reset" value="Clear entries"/>-->
</form>

</div>

 </body>
</html>


