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

   <title>Add User - Oral Diagnosis</title>
<link rel="shortcut icon" href="<?php echo base_url(); ?>images/upcd-20140224-favicon.ico">	
<script type="text/javascript">
	
	
</script>
 </head>
<?php 
	$session_data = $this->session->userdata('logged_in');
     	$usernamelog = $session_data['username'];

	

?>
 <body>
  
<div class="validation" style="display:<?if(validation_errors() == true) echo 'block'; else echo 'none'?>">
   <?php echo validation_errors(); ?>
</div>
<div class="maindiv">
  	<!--<br><div align="left" style="left:1%; position: relative;"><a href="<?php echo base_url(); ?>index.php/searchpatient">Go Back</a></div><br>-->
	
	<table frame="box" class="frame" style="width:98%; left:1%; text-align: center;">
		<tr class="header">
			<td colspan=6> Versions
		</tr>
		<tr>
			<td><br>Version
			<td><br>Updated By
			<td><br>Update Date
			<td><br>Status
			<td><br>Approved By
		</tr>
		<?php 	if($version){
				$count = sizeof($version);
				$ctr = 1;
				foreach($version as $row){
					echo "<tr><td><a href=".base_url()."index.php/loaddashboard/patientdb/".$row['UPCD_ID']."/".$row['versiontableID'].">"."Version ".$ctr."</a>";
					echo "<td>".$row['updatedBy'];
					echo "<td>".$row['updateDate'];
					echo "<td>".$row['updateStatus'];
					echo "<td>".$row['approvedBy'];
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


