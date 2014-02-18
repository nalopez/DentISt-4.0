<?php 
	include('header.php'); 
	include('navigation.php');
	
	echo "<link rel=\"stylesheet\" type=\"text/css\" href='".base_url()."css/style.css'>";
	echo "<script type\"text/javascript\" src=\"".base_url()."js/dynamic.js\"></script>";
	echo "<script type\"text/javascript\" src=\"".base_url()."js/patientdb.js\"></script>";

	$session_data = $this->session->userdata('logged_in');
	$sec = $session_data['section'];
	$section = "";
	foreach($sec as $row){
		if($row != "System Maintenance"){
			$section = $row;
		}
	}

	$userID = "";
	$uname = $session_data['username'];
	
	$users = $this->user->getUserID($uname);
	foreach($users as $row){
		$userID = $row['userID'];
	}
	
	$name = "";
	$usrname = $this->user->getUserInfo($userID);
	$usersname = $usrname['userFName']." ".substr($usrname['userMName'], 0, 1).". ".$usrname['userLName'];

	$id = $this->uri->segment(3); 
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
 <head>
<link href="<?php echo base_url(); ?>css/ui-lightness/jquery-ui-1.10.3.custom.css" rel="stylesheet">
	<script src="<?php echo base_url(); ?>js/jquery-1.9.1.js"></script>
	<script src="<?php echo base_url(); ?>js/jquery-ui-1.10.3.custom.js"></script>

   <title>Set Appointment - <?php echo $section; ?></title>
	
<script>
	$('appntmentdate').datepicker({
		dateFormat: 'yy-mm-dd',
		showAnim: 'slideDown',
		changeMonth: true,
		changeYear: true,
		yearRange: '1910:2014'
    	});
	
</script>

<script type="text/javascript">
	function appoint(str){
		document.getElementById('buttonx').value = str;
		document.getElementById('SETAPPOINTMENT').submit();
	}
</script>
 </head>

 <body>

<form name="SETAPPOINTMENT" id="SETAPPOINTMENT" method="post" onSubmit="<?php echo base_url().'index.php/verifysetappointment';?>" action="<?php echo base_url().'index.php/verifysetappointment';?>">
<div class="validation" style="display:<?if(validation_errors() == true) echo 'block'; else echo 'none'?>">
   <?php echo validation_errors(); ?>
</div>
<div class="maindiv" style="border:0px;">
	<?php include('patient_header.php'); ?>

<input type="hidden" name="buttonx" id="buttonx">
<input type="hidden" name="id" id="id" value="<?php echo $id;?>">
<input type="hidden" name="user" value="<?php echo $userID; ?>">
	<table frame="box" class="frame" style="width: 80%;">
		<tr class="header">
			<td colspan=2> Set Appointment
		</tr>
		<tr><td> &nbsp; </tr>
		<tr>
			<td> Date of Appointment
			<td> <input type="text" class="datepicker" id="appntmntdate" name="appntmntdate">
		</tr>
		<tr><td> &nbsp; </tr>
		<tr>
			<td> <b>Clinician</b>
			<td> <?php echo $usersname;?> 
		</tr>
		<tr><td> &nbsp; </tr>
	</table><br>
	
	<input type="button" name="sas" value="Save and Submit" onClick="appoint(this.name)"> &nbsp; <input type="button" name="skip" value="Skip" onClick="appoint(this.name)">
		
</form>
</div>

 </body>

</html>


