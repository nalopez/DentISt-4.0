<?php 
	include('header.php'); 
	include('navigation.php');
	echo "<link rel=\"stylesheet\" type=\"text/css\" href='".base_url()."css/style.css'>";
	echo "<script type\"text/javascript\" src=\"".base_url()."js/dynamic.js\"></script>"
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
 <head>
<link href="<?php echo base_url(); ?>css/ui-lightness/jquery-ui-1.10.3.custom.css" rel="stylesheet">
	<script src="<?php echo base_url(); ?>js/jquery-1.9.1.js"></script>
	<script src="<?php echo base_url(); ?>js/jquery-ui-1.10.3.custom.js"></script>

   <title>Add Patient - Oral Diagnosis</title>
<link rel="shortcut icon" href="<?php echo base_url(); ?>images/upcd-20140224-favicon.ico">
<script>

window.onload = function() {
	var year = new Date().getFullYear();
	var yyr = year.toString();
	var yr = yyr.substring(2); 
  	document.getElementById('idyr').value = yr;

	var today = new Date();
    	var birthDate = new Date(document.getElementById('birthdate').value);
    	var age = 0;
    	var m = today.getMonth() - birthDate.getMonth();
    	if (m < 0 || (m === 0 && today.getDate() < birthDate.getDate())) {
        age--;
    	}
    	
	document.getElementById('age').value = age;
}

function getAge(value) {
    	var today = new Date();
    	var birthDate = new Date(value);
    	var age = today.getFullYear() - birthDate.getFullYear();
    	var m = today.getMonth() - birthDate.getMonth();
    	if (m < 0 || (m === 0 && today.getDate() < birthDate.getDate())) {
        age--;
    	}
    	
	document.getElementById('age').value = age;

}

	var url = "/var/www/DentISt/";
	$(function() {

		$('.datepicker').each(function(){
    			$(this).datepicker({
				dateFormat: 'yy-mm-dd',
				showAnim: 'slideDown',
				changeMonth: true,
				changeYear: true,
				yearRange: '1910:2014'
			});
		});

	});
	
</script>
	

 </head>
<?php 
	$session_data = $this->session->userdata('logged_in');
     	$usernamelog = $session_data['username'];
?>
 <body>
 
<div class="maindiv">
  	<form id="ADDPATIENT" name="ADDPATIENT" action="verifyaddpatient" method="post">
	
	 <h3 align="center">Create New Patient</h3>


	<div class="validation" style="display:<?if(validation_errors() == true) echo 'block'; else echo 'none'?>">
   <?php if(form_error('firstname')) echo form_error('firstname');
	elseif(form_error('midname')) echo form_error('midname');
	elseif(form_error('lastname')) echo form_error('lastname');
	elseif(form_error('houseno')) echo form_error('houseno');
	elseif(form_error('street')) echo form_error('street');
	elseif(form_error('brgy')) echo form_error('brgy');
	elseif(form_error('city')) echo form_error('city');
	elseif(form_error('province')) echo form_error('province');
	elseif(form_error('sex')) echo form_error('sex');
	elseif(form_error('bdate')) echo form_error('bdate');
	elseif(form_error('deceased')) echo form_error('deceased');


 ?>
</div>	
	<table align="center">
	<tr>
		<td colspan=3> <hr width=100% align="center" color="#d3d3d3">
	</tr>
	<tr>
		<td width="20%"><label for="firstname">Name:</label>  
		<td colspan=2><input type="text" name="firstname" placeholder="Given Name" size="15" value="<?php echo set_value('firstname'); ?>"><input type="text" name="midname" placeholder="Middle Name" size="15" value="<?php echo set_value('midname'); ?>"><input type="text" name="lastname" placeholder="Surname" size="15" value="<?php echo set_value('lastname'); ?>">
	</tr>
	<tr>
		<td colspan=3> <hr width=100% align="center" color="#d3d3d3">
	</tr>
	<tr>
		<td width="20%"><label for="UPCDid"> UPCD ID
		<td colspan=2><input type="text" name="idyr" id="idyr" size=1px maxlength=2 readonly>-<input type="text" name="idnum" size=1px maxlength=5 readonly value="<?php echo str_pad($maxID+1, 5, '0', STR_PAD_LEFT); ?>">
	</tr>
	<tr>
		<td colspan=3> <hr width=100% align="center" color="#d3d3d3">
	</tr>
	<tr>
		<td width="20%"><label for="address">Address:</label> 
		<td colspan=2><input type="text" name="houseno" placeholder="No." size=4 value="<?php echo set_value('houseno'); ?>"><input type="text" name="street" placeholder="Street" value="<?php echo set_value('street'); ?>">
			<input type="text" name="brgy" placeholder="Baranggay" value="<?php echo set_value('brgy'); ?>"><br>
			<input type="text" name="city" placeholder="City/Municipality" value="<?php echo set_value('city'); ?>"><input type="text" name="province" placeholder="Province" value="<?php echo set_value('province'); ?>">
	</tr>
	<tr>
		<td colspan=3> <hr width=100% align="center" color="#d3d3d3">
	</tr>
	<tr>
		<td width="20%">Demographics
		<td><table>
			<tr>
				<td><label for="sex">Gender: </label>
				<td><select name="sex" id="sex">
					<option value="Select one.." <?php if(set_value('sex') == 'Select one..') echo 'selected';  ?>> Select one.. </option>		
					<option value="Male" <?php if(set_value('sex') == 'Male') echo 'selected';  ?>> Male </option>
					<option value="Female" <?php if(set_value('sex') == 'Female') echo 'selected';  ?>> Female </option>
					</select> 
			</tr>
			<tr>
				<td><label for="bdate">Birthdate:</td>
				<td><input type="text" class="datepicker" id="birthdate" name="bdate" onchange="getAge(this.value);" value="<?php echo set_value('bdate'); ?>" size=12>
			</tr> 
			<tr>
				<td><label for="age">Age:</label>
				<td><input type="text" name="age" id ="age" size=2 readonly value="<?php echo set_value('age'); ?>">
			</tr>
		</table>
	</tr>
	<tr>
		<td colspan=3> <hr width=100% align="center" color="#d3d3d3">
	</tr>
	<tr>
		<td>Deceased?
		<td><input name="deceased" type="radio" value="Yes" <?php if(set_value('deceased') == 'Yes') echo 'checked';  ?>> Yes &nbsp; <input name="deceased" type="radio" value="No" <?php if(set_value('deceased') == 'No') echo 'checked';  ?>> No 
	</tr>
	<tr>
		<td colspan=3> <hr width=100% align="center" color="#d3d3d3">
	</tr>
</table>

		
	
	<br>
		<input type="submit" value="Add Patient"/> <input type="reset" value="Clear entries"/><br><br><br>
	</div>
   </form>

</div>
</div>
</div>

 </body>
</html>


