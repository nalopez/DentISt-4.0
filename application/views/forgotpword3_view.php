<?php 
	echo "<link rel=\"stylesheet\" type=\"text/css\" href='".base_url()."css/style.css'>";
	include('header.php');
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
 <head>
   <title>DentISt 4.0</title>
<link rel="shortcut icon" href="<?php echo base_url(); ?>images/upcd-20140224-favicon.ico">
 </head>
 <body>
<?php 

	/*$secques = "";
	foreach($secret_question as $row){
		$secques = $row['secret_question'];
	}*/
?>
   
   <?php echo form_open('verifyresetpword2'); ?>
	<div style="margin: 0 auto; text-align:center;">
	<img src="<?php echo base_url().'images/upcd-main.png'; ?>"><br>
	<!--<h1><font color="#7F00FF">DentISt 4.0</font></h1>-->
	<div class="validation" style="display:<?if(validation_errors() == true) echo 'block'; else echo 'none'?>">
   <?php echo validation_errors(); ?>
</div><br>
	<table align="center" style="text-align:center;">
	<tr>
	     <td> Enter your new password (minimum of 6 characters):    
	</tr>
		<td><input type="password" size="30" id="password" name="password"/> <input type=hidden name="username" value="<?php echo $uname; ?>">
	<tr>
		<td> &nbsp;
	</tr>
	</tr>
	<tr>
	     <td> Re-type password:    
	</tr>
		<td><input type="password" size="30" id="password2" name="password2"/>
	</tr>
	</table><br>
	<input type="submit" value="Next"/><input type="button" value="Cancel" onClick="history.go(-1)">
</div>
   </form>
 </body>
</html>



	

