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

   <title>Services Rendered - <?php echo $section; ?></title>
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

			$servicedatetxt = $row['date'];
			$renderedtxt = $row['services'];
			$feestxt = $row['fees'];
			
		}

		$servicedate = explode("|", $servicedatetxt);
		$rendered = explode("|", $renderedtxt);
		$fees = explode("|", $feestxt);
	}
?>
 <body>
  
<div class="maindiv">
	<?php include('patient_header.php'); ?>

<div id="Content_Area">

<center><a href="<?php echo base_url();?>index.php/loaddashboard/patientdb/<?php echo $id; ?>"> Dashboard </a> &nbsp; <a href="<?php echo base_url();?>index.php/viewdentalchartversions"> View Versions </a><br><br></center><br><br>

	<form id="ADDCONSULTATIONFINDINGS" name="ADDCONSULTATIONFINDINGS" action="<?php echo base_url();?>index.php/verifyaddservicerendered" method="post">



<div class="validationexc" style="display: <?php if($this->session->userdata('has_error')) echo 'block'; else 'none' ?>;">
   		<?php $session_data = $this->session->userdata('has_error');
     		echo $session_data['error'];
	?>
</div>

<?php if($forapproval) echo "<h4 style='color:red;'>This patient's record is currently subject for approval.</h4>";
elseif($private) echo "<h4 style='color:red;' align='center'>This patient's record is under other clinician's supervision.</h4>"; ?>

		<table id="service" frame="box" class="frame">
		<tr class=header>
			<td colspan=4>Services Rendered
		</tr>
		<tr>
			<td>
			<td>Date <font color="red">*</font>
			<td>Services Rendered <font color="red">*</font>
			<td>Fees <font color="red">*</font>
		</tr>
		<?php
			if($recordexist){
				$size = sizeof($servicedate);
				for($i=0; $i<$size; $i++){
				echo "
					<tr>
						<td>";//<input type='checkbox' name='0' id='ck0'>
					echo "	<td><input type='text' name='servicedate[]' class='datepicker' id='servicedate_$id' value='".$servicedate[$i]."' readonly disabled>
						<td><textarea name='rendered[]' id='rendered_$id' cols=50 readonly>".$rendered[$i]."</textarea>
						<td><input type='text' name='fees[]' id='fees_$id' value='".$fees[$i]."' readonly disabled>
				
					</tr>";
				}
			}
			else{
				echo "<tr>
					<td>";//<input type='checkbox' name='0' id='ck0'>
				echo "	<td><input type='text' name='servicedate[]' class='datepicker' id='servicedate_0' readonly disabled>
					<td><textarea name='rendered[]' id='rendered_0' cols=50 readonly></textarea>
					<td><input type='text' name='fees[]' id='fees_$0' readonly disabled>
				</tr>";
			}
		?>
		</table><br><br>

</form>

</div>

 </body>
</html>


