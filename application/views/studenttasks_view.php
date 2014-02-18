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

	<table frame="box" class="frame" style="width:80%; left:10%; text-align: center;">
		<tr class="header">
			<td colspan=6> Tasks Lists
		</tr>
		<tr>
			<td><br>
			<td><br> Tasks
			<td><br> Patient Name
		</tr>
		<?php if($info){
				$count = sizeof($info);
				$ptntname = "";
				$ctr = 1;
				foreach($info as $row){
					$patient = $this->patient->getPatient($row['UPCD_ID']);

					foreach($patient as $row2){
						$ptntname = $row2['patientFName']." ".substr($row2['patientMName'], 0, 1).". ".$row2['patientLName']; 
					}

					echo "<tr><td> $ctr ";
					echo "<td> ".$row['taskdescription'];
					echo "<td><a href=".base_url()."index.php/loaddashboard/claimpatient/".$row['UPCD_ID'].">".$ptntname."</a>";
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


