<?php 
	include('header.php'); 
	include('navigation.php');
	echo "<link rel=\"stylesheet\" type=\"text/css\" href='".base_url()."css/style.css'>";
	echo "<script type\"text/javascript\" src=\"".base_url()."js/dynamic.js\"></script>";
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
 <head>

   <title>Add User - System Administrator</title>
<link rel="shortcut icon" href="<?php echo base_url(); ?>images/upcd-20140224-favicon.ico">
 </head>
<?php 
	$session_data = $this->session->userdata('logged_in');
     	$usernamelog = $session_data['username'];

?>
 <body>

<div class="maindiv">
 <h3 align="center">Change Password</h3>
	<div class="validation" style="display:<?if(validation_errors() == true) echo 'block'; else echo 'none'?>">
	   <?php if(form_error('password2')) echo form_error('password2'); ?>
	</div>
	<form id="CHANGEPWORD" name="CHANGEPWORD" action="verifychangepassword" method="post">
	<input type="hidden" name="username" value="<?php echo $usernamelog; ?>">
		<table align="center" width="70%">
		<tr>
			<td colspan=3> <hr width=100% align="center" color="#d3d3d3">
		</tr>
	     	<tr>
			<td><label for="password">New password:</label>
	     		<td><input type="password" size="20" id="password" name="password" value="<?php echo set_value('password'); ?>">
	     	</tr>
		<tr>
			<td><label for="password2">Re-type new password:</label>
	     		<td><input type="password" size="20" id="password2" name="password2" value="<?php echo set_value('password2'); ?>">
	     	</tr>
		<tr>
			<td colspan=3> <hr width=100% align="center" color="#d3d3d3">
		</tr>
		</table><br>
	     <input type="submit" value="Submit"/> <input type="reset" value="Clear entries"/>
	   </form>
</div>
 </body>
</html>


