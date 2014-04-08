<?php 
	include('header.php'); 
	include('navigation.php');
	echo "<link rel=\"stylesheet\" type=\"text/css\" href='".base_url()."css/style.css'>";
	//echo "<script type\"text/javascript\" src=\"".base_url()."js/dynamic.js\"></script>"
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
 <head>
   <title>Edit User - System Administrator</title>
<link rel="shortcut icon" href="<?php echo base_url(); ?>images/upcd-20140224-favicon.ico">
	<script type="text/javascript">
		function restrict2(which2, itemx){
			alert(itemx);
		}
	</script>
 </head>
<?php 
	//$session_data = $this->session->userdata('logged_in');
     	//$usernamelog = $session_data['username'];
	/*$lname = "";
	$fname = "";
	$mname = "";
	$role = "";
	$section = "";
	$uname = "";

	*/

	if($invalid_input == false){
		foreach($info as $row){
		$lname = $row->userLName;
		$fname = $row->userFName;
		$mname = $row->userMName;
		//$role = $row->role_type;
		//$section = $row->role_section;
		$uname = $row->username;
		$secques = $row->secret_question;
		$secans = $row->secret_answer;
		//$pword = $row->userpword;
		}
	}

	
?>
 <body>
 

>
<div class="maindiv">
   <h3 align=center>Edit User</h3>
<div class="validationexc" style="display: <?php if($this->session->userdata('has_error')) echo 'block'; else 'none' ?>;">
   <?php $session_data = $this->session->userdata('has_error');
     	echo $session_data['error'];

	/*$tok = strtok($session_data['error'], "\n");
	while ($tok !== false) {
    		echo "Word=$tok<br />";
    	$tok = strtok("\n");
	}*/
	//print_r($session_data['error']['password']);
	?>
</div>

   <form id="EDITUSER" name="EDITUSER" action="<?php echo base_url().'index.php/verifyedituser';?>" method="post">
	<input type="hidden" name="userID" value="<?php echo $userID; ?>">
	<table align="center">
	<tr>
		<td>Name:
		<td><input type="text" name="firstname" value="<?php echo $fname; ?>" size=15>
			<input type="text" name="midname" value="<?php echo $mname; ?>"  size=15>
			<input type="text" name="lastname" value="<?php echo $lname; ?>"  size=15>
	</tr>
	<tr>
		<td colspan=3> <hr width=100% align="center" color="#d3d3d3">
	</tr>
	<tr>
		<td>Section/Role: 
		<td><input type="hidden" name="size" value="<?php echo sizeof($role); ?>">
		<?php
		//print_r($role);
		/*foreach($role as $row){
			$role2[] = $row['role_type'];
			$section[] = $row['role_section'];
		}*/
		
		for($i = 0; $i < sizeof($rolet); $i++){
			//print_r($rol);
			//echo "<br>";
			//print_r($section);
			echo "<input type='hidden' name='roleID".$i."' value='".$roleIDt[$i]."'>";
			echo "<select name='section".$i."' id='section".$i."' onChange='restrict2(this.selectedIndex, 'role".$i."')'>";
			echo "<option value='Select one..'";
			if($rolet[$i]=="System Administrator") {
				echo "selected";
			}
			echo "> Select one.. </option>";
		
			echo "<option value='Oral Diagnosis'"; 
			if($sectiont[$i]=="Oral Diagnosis"){ 
				echo "selected";
			}
			echo "> Oral Diagnosis </option>";

			echo "<option value='Oral Medicine'";
			if($sectiont[$i]=="Oral Medicine"){
				 echo "selected";
			}
			echo "> Oral Medicine </option>";
		
			echo "<option value='Prosthodontrics'";
			if($sectiont[$i]=="Prosthodontrics"){
			 	echo "selected";
			}
			echo "> Prosthodontrics </option>";

			echo "<option value='Operative Dentistry'";
			if($sectiont[$i]=="Operative Dentistry"){ 
				echo "selected";
			}
			echo "> Operative Dentistry </option>";

			echo "<option value='General Query'";
			if($sectiont[$i]=="General Query"){
				 echo "selected";
			}
			echo "> General Query </option>";

			echo "<option value='System Maintenance'";
			if($sectiont[$i]=="System Maintenance"){
				echo "selected";
			}
			echo "> System Maintenance </option></select>";

			echo"<select name='role".$i."' id='role".$i."'>";
			echo"<option value='Select one..'> Select one.. </option>";
			echo"<option value='System Administrator'";
			if($rolet[$i]=="System Administrator"){ 
				echo "selected";
			}
			echo "> System Administrator </option>";

			echo "<option value='Faculty'";
			if($rolet[$i]=="Faculty"){ 
				echo "selected";
			}
			echo "> Faculty </option>";
		
			echo "<option value='Student'";
			if($rolet[$i]=="Student"){
				 echo "selected";
			}
			echo "> Student </option></select><br>";
		}
				
	?>
	
		</td>
	</tr>
	<tr>
		<td colspan=3> <hr width=100% align="center" color="#d3d3d3">
	</tr>
	<!--<tr>
		<td>Role:
		<td><select name="role" id="role">
		<option value="Select one.."> Select one.. </option>
		<option value="System Administrator" <?php if($role=="System Administrator") echo "selected";?>> System Administrator </option>
		<option value="Faculty" <?php if($role=="Faculty") echo "selected";?>> Faculty </option>
		<option value="Student" <?php if($role=="Student") echo "selected";?>> Student </option>
		</select></td>
	</tr>-->
	<tr>
		<td><label for="username">Username:</label>
     		<td><input type="text" size="20" id="username" name="username" value="<?php echo $uname; ?>">
     	</tr>
     	<tr>
		<td><label for="password">Password:</label>
     		<td><input type="password" size="20" id="password" name="password">
     	</tr>
	<tr>
		<td><label for="password2">Retype password:</label>
     		<td><input type="password" size="20" id="password2" name="password2"/>
     	</tr>
	<tr>
		<td colspan=3> <hr width=100% align="center" color="#d3d3d3">
	</tr>
	<tr>
		<td><label for="secques">Security Question:</label>
     		<td><select name="secques" id="secques">
			<option value="Select a question.."> Select a question.. </option>
			<option value="What is your favorite childhood movie?" <?php if($secques == "What is your favorite childhood movie?") echo "selected";?>> What is your favorite childhood movie? </option>
			<option value="What is your mother's maiden name?" <?php if($secques == "What is your mother's maiden name?") echo "selected";?>> What is your mother's maiden name? </option>
			<option value="Where is you father's hometown?" <?php if($secques == "Where is you father's hometown?") echo "selected";?>> Where is you father's hometown? </option>
			<option value="What is the name of your first pet dog?" <?php if($secques == "What is the name of your first pet dog?") echo "selected";?>> What is the name of your first pet dog? </option>
			<option value="Who is your favorite elementary teacher?" <?php if($secques == "Who is your favorite elementary teacher?") echo "selected";?>> Who is your favorite elementary teacher? </option>
		</select></td>
		
     	</tr>
	<tr>
		<td><label for="secans">Security Answer:</label>
     		<td><input type="text" size="20" id="secans" name="secans" value="<?php echo $secans; ?>">
     	</tr>
	</table><br>
     <input type="submit" value="Edit User"/> <input type="reset" value="Clear entries"/>
   </form>
</div>
 </body>
</html>


