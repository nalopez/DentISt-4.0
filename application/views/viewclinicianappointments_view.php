<?php 
	include('header.php'); 
	include('navigation.php');
	
	echo "<link rel=\"stylesheet\" type=\"text/css\" href='".base_url()."css/style.css'>";
	echo "<script type=\"text/javascript\" src=\"".base_url()."js/dynamic.js\"></script>";
	echo "<script type=\"text/javascript\" src=\"".base_url()."js/patientdb.js\"></script>";
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

	$session_data = $this->session->userdata('current_patient');
	$id = $session_data['id'];

?>

   <title>View Clinician Appointments - <?php echo $section; ?></title>
<link rel="shortcut icon" href="<?php echo base_url(); ?>images/upcd-20140224-favicon.ico">	
<script type="text/javascript">
	
	
</script>
 </head>
<?php 
	$session_data = $this->session->userdata('logged_in');
     	$usernamelog = $session_data['username'];

	$session_data = $this->session->userdata('current_patient');
	$id = $session_data['id'];

?>
 <body>
  
<div class="validation" style="display:<?if(validation_errors() == true) echo 'block'; else echo 'none'?>">
   <?php echo validation_errors(); ?>
</div>
<div class="maindiv">
  	<!--<br><div align="left" style="left:1%; position: relative;"><a href="<?php echo base_url(); ?>index.php/searchpatient">Go Back</a></div><br>-->
	
<div align="left"><br><a href="<?php echo base_url();?>index.php/dentaldata/patient/<?php echo $id; ?>"> Go Back </a></div><br>

	<table class="altcolor" align="center" style="width:98%; left:1%; text-align: center;">
		<tr class="header">
			<td colspan=6> Clinician Appointments
		</tr>
		<tr>
			<td><br>
			<td><b>Patient</b>
			<td><b>Clinician</b>
			<td><b>Date of Appointment</b>
		</tr>
		<?php
			$ctr = 0;
			//print_r($appointments);
		 	if($appointments){
				//echo "appointments";
				//print_r($appointments);
				$count = sizeof($appointments);
				$patientname = "";
				$studentname = "";
				foreach($appointments as $row){
					//echo "row: ".$row;
					//$id = $row;
					//$patient = $this->patient->getPatient($row['UPCD_ID']);

					if(!empty($row)){
						foreach($row as $row2){
							//if($row2 != ""){
								//echo $row2;
								//echo "<tr><td>".$row2['UPCD_ID'].", ".$row2['studentID']."</tr>";
								$patient = $this->patient->getPatient($row2['UPCD_ID']);
								foreach($patient as $row3){
									$patientname = $row3['patientFName']." ".substr($row3['patientMName'], 0, 1).". ".$row3['patientLName'];
								}
								$student = $this->user->getUserInfopt1($row2['studentID']);
								foreach($student as $row3){
									$studentname = $row3['userFName']." ".substr($row3['userMName'], 0, 1).". ".$row3['userLName'];
								}			
								echo "<tr><td>".($ctr+1);
								echo "<td><a href='".base_url()."index.php/loaddashboard/patientdb/".$row2['UPCD_ID']."'>".$patientname."</a>";
								echo "<td>".$studentname;
								echo "<td>".$row2['appointmentDate'];
								echo "</tr>";
								$ctr++;
							//}
						}
					}
				}
				//echo "ctr = $ctr";
			}
			if($ctr == 0) echo "<tr> <td colspan=4> <br> No appointments found </br>";
		?>
		
	</table><br>

	</form>	
</div><br><br>

 </body>
</html>


