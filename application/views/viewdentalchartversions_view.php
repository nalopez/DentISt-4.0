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

   <title>Dental Chart - View Versions</title>
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
	
<div align="left"><br><a href="<?php echo base_url();?>index.php/dentalchart/patient/<?php echo $id; ?>"> Go Back </a></div><br>

	<table align="center" class="altcolor" style="width:98%; left:1%; text-align: center;">
		<tr class="header">
			<td colspan=6> Dental Chart Versions
		</tr>
		<tr>
			<td><b>Version</b>
			<td><b>Updated By</b>
			<td><b>Update Date</b>
			<td><b>Status</b>
			<td><b>Approved By</b>
		</tr>
		<?php 	if($version){
				$count = sizeof($version);
				$ctr = 1;
				foreach($version as $row){
					echo "<tr><td><a href=".base_url()."index.php/dentalchart/view/".$row['UPCD_ID']."/".$row['dentalchartversionID'].">"."Version ".$ctr."</a>";
					$student = $this->user->getUserInfo($row['updatedBy']);
					$faculty = $this->user->getUserInfo($row['approvedBy']);
					echo "<td>".$student['userFName']." ".substr($student['userMName'], 0, 1).". ".$student['userLName'];
					echo "<td>".$row['updateDate'];
					echo "<td>".$row['updateStatus'];
					echo "<td>".$faculty['userFName']." ".substr($faculty['userMName'], 0, 1).". ".$faculty['userLName'];
					echo "</tr>";
					echo "<td>".$row['approvedOn'];
					$ctr++;
				}
			}
			else echo "<tr> <td colspan=5> <br>No versions found </tr> ";
		?>
		
	</table><br>

	</form>	
</div><br><br>

 </body>
</html>


