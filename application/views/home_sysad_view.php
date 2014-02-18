<?php 
	include('header.php'); 
	echo "<link rel=\"stylesheet\" type=\"text/css\" href='".base_url()."css/style.css'>";
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
 <head>
   <title>Home - System Administrator </title>
 </head>
 <body>
		<div class="home" style="border:0px;">
		<a href="<?php echo base_url(); ?>index.php/manageusers"> Manage Users </a><br><br>
		<a href="<?php echo base_url(); ?>index.php/viewstat"> View Statistics </a> <br>
		</div>			


 </body>
</html>


