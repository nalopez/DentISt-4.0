<?php 
	include('header.php'); 
	include('navigation.php');
	
	echo "<link rel=\"stylesheet\" type=\"text/css\" href='".base_url()."css/style.css'>";
	echo "<script type=\"text/javascript\" src=\"".base_url()."js/dynamic.js\"></script>";
	echo "<script type=\"text/javascript\" src=\"".base_url()."js/patientdb.js\"></script>";

	$session_data = $this->session->userdata('logged_in');
     	$usernamelog = $session_data['username'];

	$session_data = $this->session->userdata('current_patient');
	$id = $session_data['id'];
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
 <head>
<link href="<?php echo base_url(); ?>css/ui-lightness/jquery-ui-1.10.3.custom.css" rel="stylesheet">
	<script src="<?php echo base_url(); ?>js/jquery-1.9.1.js"></script>
	<script src="<?php echo base_url(); ?>js/jquery-ui-1.10.3.custom.js"></script>

   <title>Add User - Oral Diagnosis</title>
	
 </head>

 <body>
  
<div class="maindiv">	
<div align="left"><br><a href="<?php echo base_url();?>index.php/home"> Go Back </a></div><br>

	<table frame="box" class="frame" style="width:90%; left:5%; text-align: center;">
		<tr class="header">
			<td colspan=6> Tasks Lists
		</tr>
		<tr>
			<td>
			<td> Tasks
			<td> Updated By
			<td> Update Date
			<td> Patient Name
		</tr>
		<?php if($info){
				$patientname="";
				$count = sizeof($info);
				$ctr = 1;
				foreach($info as $row){
					if($row['patientdashboardversionID'] && $row['updateStatus7'] == "Pending"){
						echo "<tr><td> $ctr ";
						echo "<td> Verify Referral to ".$row['section7'];
						echo "<td>".$row['updatedBy7'];
							echo "<td>".$row['updateDate7'];
							$patient = $this->patient->getPatient($row['UPCD_ID7']);
							foreach($patient as $row2){
								$patientname = $row2['patientFName']." ".substr($row2['patientMName'], 0, 1).". ".$row2['patientLName']; 
							}
							echo "<td><a href=".base_url()."index.php/loaddashboard/verifyentry/".$row['UPCD_ID7'].">".$patientname;
							echo "</tr>";
							$ctr++;
						}/*
						if($row['patientchecklistversionID'] && $row['updateStatus2'] == "Pending"){
							echo "<tr><td> $ctr ";
							echo "<td> Verify Patient Checklist Form Entry";
							echo "<td>".$row['updatedBy2'];
							echo "<td>".$row['updateDate2'];
							$patient = $this->patient->getPatient($row['UPCD_ID2']);
							foreach($patient as $row2){
								$patientname = $row2['patientFName']." ".substr($row2['patientMName'], 0, 1).". ".$row2['patientLName']; 
							}
							echo "<td><a href=".base_url()."index.php/loaddashboard/verifyentry/".$row['UPCD_ID'].">".$patientname;
							echo "</tr>";
							$ctr++;
						}
						if($row['medandsochistoversionID'] && $row['updateStatus3'] == "Pending"){
							echo "<tr><td> $ctr ";
							echo "<td> Verify Medical & Social History Form Entry";
							echo "<td>".$row['updatedBy3'];
							echo "<td>".$row['updateDate3'];
							$patient = $this->patient->getPatient($row['UPCD_ID3']);
							foreach($patient as $row2){
								$patientname = $row2['patientFName']." ".substr($row2['patientMName'], 0, 1).". ".$row2['patientLName']; 
							}
							echo "<td><a href=".base_url()."index.php/loaddashboard/verifyentry/".$row['UPCD_ID'].">".$patientname;
							echo "</tr>";
							$ctr++;
						}
						if($row['dentaldataversionID'] && $row['updateStatus4'] == "Pending"){
							echo "<tr><td> $ctr ";
							echo "<td> Verify Dental Data Form Entry";
							echo "<td>".$row['updatedBy4'];
							echo "<td>".$row['updateDate4'];
							$patient = $this->patient->getPatient($row['UPCD_ID4']);
							foreach($patient as $row2){
								$patientname = $row2['patientFName']." ".substr($row2['patientMName'], 0, 1).". ".$row2['patientLName']; 
							}
							echo "<td><a href=".base_url()."index.php/loaddashboard/verifyentry/".$row['UPCD_ID'].">".$patientname;
							echo "</tr>";
							$ctr++;
						}
						if($row['dentalchartversionID'] && $row['updateStatus5'] == "Pending"){
							echo "<tr><td> $ctr ";
							echo "<td> Verify Dental Chart Form Entry";
							echo "<td>".$row['updatedBy5'];
							echo "<td>".$row['updateDate5'];
							$patient = $this->patient->getPatient($row['UPCD_ID5']);
							foreach($patient as $row2){
								$patientname = $row2['patientFName']." ".substr($row2['patientMName'], 0, 1).". ".$row2['patientLName']; 
							}
							echo "<td><a href=".base_url()."index.php/loaddashboard/verifyentry/".$row['UPCD_ID'].">".$patientname;
							echo "</tr>";
							$ctr++;
						}
						if($row['treatmentplanversionID'] && $row['updateStatus6'] == "Pending"){
							echo "<tr><td> $ctr ";
							echo "<td> Verify Treatment Plan Form Entry";
							echo "<td>".$row['updatedBy6'];
							echo "<td>".$row['updateDate6'];
							$patient = $this->patient->getPatient($row['UPCD_ID6']);
							foreach($patient as $row2){
								$patientname = $row2['patientFName']." ".substr($row2['patientMName'], 0, 1).". ".$row2['patientLName']; 
							}
							echo "<td><a href=".base_url()."index.php/loaddashboard/verifyentry/".$row['UPCD_ID'].">".$patientname;
							echo "</tr>";
							$ctr++;
						}*/
						
					}
			}

		?>
		
	</table><br>

	</form>	
</div><br><br>

 </body>
</html>


