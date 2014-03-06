<?php 
	include('header.php'); 
	include('navigation.php');
	
	echo "<link rel=\"stylesheet\" type=\"text/css\" href='".base_url()."css/style.css'>";
	echo "<script type\"text/javascript\" src=\"".base_url()."js/dynamic.js\"></script>";
	echo "<script type\"text/javascript\" src=\"".base_url()."js/patientdb.js\"></script>"
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
 <head>
<link href="<?php echo base_url(); ?>css/ui-lightness/jquery-ui-1.10.3.custom.css" rel="stylesheet">
	<script src="<?php echo base_url(); ?>js/jquery-1.9.1.js"></script>
	<script src="<?php echo base_url(); ?>js/jquery-ui-1.10.3.custom.js"></script>

   <title>Patient Dashboard - Oral Diagnosis</title>
<link rel="shortcut icon" href="<?php echo base_url(); ?>images/upcd-20140224-favicon.ico">
<script type="text/javascript">
	function visibility(element){
		if(element == "patientinfocb"){
			if(document.getElementById(element).checked){
				document.getElementById('patientinfodiv').style.display = "block";
			} 
			else
				document.getElementById('patientinfodiv').style.display = "none";
		}
		else if(element == "patientchecklistcb"){
			if(document.getElementById(element).checked){
				document.getElementById('patientchecklistdiv').style.display = "block";
			} 
			else
				document.getElementById('patientchecklistdiv').style.display = "none";
		}
		else if(element == "medandsochistocb"){
			if(document.getElementById(element).checked){
				document.getElementById('medandsochistodiv').style.display = "block";
			} 
			else
				document.getElementById('medandsochistodiv').style.display = "none";
		}
		else if(element == "dentaldatacb"){
			if(document.getElementById(element).checked){
				document.getElementById('dentaldatadiv').style.display = "block";
			} 
			else
				document.getElementById('dentaldatadiv').style.display = "none";
		}
		else if(element == "dentalchartcb"){
			if(document.getElementById(element).checked){
				document.getElementById('dentalchartdiv').style.display = "block";
			} 
			else
				document.getElementById('dentalchartdiv').style.display = "none";
		}
		else if(element == "treatmentplancb"){
			if(document.getElementById(element).checked){
				document.getElementById('treatmentplandiv').style.display = "block";
			} 
			else
				document.getElementById('treatmentplandiv').style.display = "none";
		}
		

	}

	function decide(txt){
		document.getElementById('decision').value = txt;
		document.getElementById('CONFIRMPATIENTDB').submit();
	}

	/*document.getElementById('accept-button').addEventListener("click", function () {
    	var hiddenid = document.getElementById('decision');
    	var formid = document.getElementById('CONFIRMPATIENTDB');
    	hiddenid.value = 'Accepted';
    	formid.submit();
});*/
	
</script>
 </head>
<?php 
	$session_data = $this->session->userdata('logged_in');
     	$usernamelog = $session_data['username'];

	$session_data2 = $this->session->userdata('has_error');
	$invalid_input = $session_data2['invalid_input'];
?>
 <body>
  
<div class="validation" style="display:<?if(validation_errors() == true) echo 'block'; else echo 'none'?>">
   <?php echo validation_errors(); ?>
</div>
<div class="maindiv">
	<?php include('patient_header.php'); ?>

	<?php 
		$id = $this->uri->segment(3); 

	?>
	<center>
		<?php 	$sect = "";
			foreach($sec as $row){
			if($row != "System Maintenance");
			$sect = $row;
		} ?>
		<h2> <?php echo $sect; ?> </h2>

		<h3><a href="<?php echo base_url(); ?>index.php/patientinformation/view/<?php echo $id; ?>"> Patient Information </a></h3>
		<h3><a href="<?php echo base_url(); ?>index.php/patientchecklist/view/<?php echo $id; ?>"> Patient Checklist </a></h3>
		<h3><a href="<?php echo base_url(); ?>index.php/medandsochistory/view/<?php echo $id; ?>"> Medical and Social History </a></h3>
		<h3><a href="<?php echo base_url(); ?>index.php/dentaldata/view/<?php echo $id; ?>"> Dental Data </a></h3>
		<h3><a href="<?php echo base_url(); ?>index.php/dentalchart/view/<?php echo $id; ?>"> Dental Status Chart </a></h3>
		<h3><a href="<?php echo base_url(); ?>index.php/treatmentplan/view/<?php echo $id; ?>"> Treatment Plan </a></h3>
		<h3><a href="<?php echo base_url(); ?>index.php/radiographicexam/view/<?php echo $id;?>"> Radiographic Examination </a></h3>
		<h3><a href="<?php echo base_url(); ?>index.php/servicesrendered/view/<?php echo $id;?>"> Services Rendered </a></h3>
		<h3><a href="<?php echo base_url(); ?>index.php/consultationandfindings/view/<?php echo $id; ?>"> Consultation and Findings </a></h3>
<br>
		<!-- action="<?php //echo base_url().'index.php/verifypatientrecord';?>" -->

		<form id="CLAIMPATIENTDB" method="post" action="
		<?php if($sect != 'Oral Diagnosis') echo base_url().'index.php/setappointment/patient/'.$id; else echo base_url().'index.php/loaddashboard/clmptnt/'.$id; ?>">
		<input type="hidden" name="id" name="id" value="<?php echo $id;?>">
		
			<br>

			<input type="submit" name="Claim" value="Claim"><br>
		</form>
	</center>


</div>
<?php //include('footer.php') ?>
 </body>

</html>


