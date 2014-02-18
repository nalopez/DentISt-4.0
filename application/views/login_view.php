<?php 
	echo "<link rel=\"stylesheet\" type=\"text/css\" href='".base_url()."css/style.css'>";
	include('header.php');
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
 <head>
   <title>DentISt 4.0</title>
 </head>
 <body>
   
   <?php echo form_open('verifylogin'); ?>
	<div style="margin: 0 auto; text-align:center;">
	<img src="<?php echo base_url().'images/upcd-main.png'; ?>"><br>
	<!--<h1><font color="#7F00FF">DentISt 4.0</font></h1>-->
	<div class="validation" style="display:<?if(validation_errors() == true) echo 'block'; else echo 'none'?>">
   <?php echo validation_errors(); ?>
</div><br>
	<table align="center"><tr>
     <td><label for="username">Username:</label>
     <td><input type="text" size="20" id="username" name="username"/>
     </tr>
	<tr>
     <td><label for="password">Password:</label>
     <td><input type="password" size="20" id="password" name="password"/>
     </tr>
	</table>
	<a href="<?php echo base_url().'index.php/forgotpword'?>">Forgot Password?</a><br><br>
     <input type="submit" value="Login"/>
</div>
   </form>
 </body>
</html>


