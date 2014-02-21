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

<?php			$sec = $session_data['section']; 	
			$sect = "";
			foreach($sec as $row){
			if($row != "System Maintenance");
			$sect = $row;
		} ?>

   <title>View Appointments - <?php echo $sect; ?></title>
	
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

	<table frame="box" class="frame" style="width:98%; left:1%; text-align: center;">
		<tr class="header">
			<td colspan=6> Appointments
		</tr>
		<tr>
			<td><br>
			<td><br>Patient
			<td><br>Date
		</tr>
		<?php 	if($appointments){
				$count = sizeof($appointments);
				$ctr = 1;
				$patientname = "";
				foreach($appointments as $row){
					$patient = $this->patient->getPatient($row['UPCD_ID']);
					foreach($patient as $row2){
						$patientname = $row2['patientFName']." ".substr($row2['patientMName'], 0, 1).". ".$row2['patientLName'];
					}					
					echo "<tr><td>".$ctr;
					echo "<td><a href='".base_url()."index.php/loaddashboard/patientdb/".$row['UPCD_ID']."'>".$patientname."</a>";
					echo "<td>".$row['appointmentDate'];
					echo "</tr>";
					$ctr++;
				}
			}
		?>
		
	</table><br>

	</form>	
</div><br><br>

 </body>
</html>


