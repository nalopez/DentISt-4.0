<?php 
	include('header.php'); 
	include('navigation.php');
	
	echo "<link rel=\"stylesheet\" type=\"text/css\" href='".base_url()."css/style.css'>";
	echo "<script type\"text/javascript\" src=\"".base_url()."js/dynamic.js\"></script>";
	echo "<script type\"text/javascript\" src=\"".base_url()."js/patientdb.js\"></script>";

	$session_data = $this->session->userdata('logged_in');
	$sec = $session_data['section'];

	$session_data2 = $this->session->userdata('has_error');
	$invalid_input = $session_data2['invalid_input'];

	$section = "";
	foreach($sec as $row){
		if($row != "System Maintenance"){
			$section = $row;
		}
	}

	$userID = "";
	$uname = $session_data['username'];
	
	$users = $this->user->getUserID($uname);
	$userID = $users['userID'];
	
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
<link rel="shortcut icon" href="<?php echo base_url(); ?>images/upcd-20140224-favicon.ico">
	
<script>
var year = new Date().getFullYear();

	$(function() {
		$('.datepicker').each(function(){
    			$(this).datepicker({
				dateFormat: 'yy-mm-dd',
				showAnim: 'slideDown',
				changeMonth: true,
				changeYear: true,
				yearRange: '1910:'+year,
				minDate: 0
			});
		});

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

<div class="maindiv">

	<?php include('patient_header.php'); ?>

<div class="validationexc" style="display: <?php if($this->session->userdata('has_error')) echo 'block'; else 'none' ?>;">
   		<?php $session_data = $this->session->userdata('has_error');
     		echo $session_data['error'];
	?>
</div>

<?php $id = $this->uri->segment(3);  ?>

<input type="hidden" name="buttonx" id="buttonx">
<input type="hidden" name="id" id="id" value="<?php echo $id;?>">
<input type="hidden" name="user" value="<?php echo $userID; ?>">

<h4 style='color:red;' align='center'>This patient's record is under other clinician's supervision.<br> Setting an appointment is not allowed.</h4>
		
</form>
</div>

 </body>

</html>


