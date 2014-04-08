<html>
<head>
<link href="<?php echo base_url(); ?>css/ui-lightness/jquery-ui-1.10.3.custom.css" rel="stylesheet">
	<script src="<?php echo base_url(); ?>js/jquery-1.9.1.js"></script>
	<script src="<?php echo base_url(); ?>js/jquery-ui-1.10.3.custom.js"></script>
</head>
<body>
<?php
	echo "<link rel=\"stylesheet\" type=\"text/css\" href='".base_url()."css/style.css'>";
	$session_data = $this->session->userdata('logged_in');
	$username = $session_data['username'];
	
?>

	<?php echo "<img src='".base_url()."images/upcd.png' style='position: absolute; top: 0%;' height='95px'>"; ?>
	<!--<div class="rounded" style="position: absolute; top: 0px; background: #FF7F50; width: 100%; height: 13%; z-index: 1;"> &nbsp; </div><br>-->
<?php
	if($this->session->userdata('logged_in')){
		echo "<div style='position: absolute; top: 1.25%; left: 7%; color: white;'><h1><font face='Liberation Serif'>Dental Information System 4.0</font></h1></div>";
	}
?>	
<!--<div class="rounded4" style="position: absolute; margin-top: 4%; background: #FF7F50; width: 100%;" height="4px"> &nbsp; </div>-->

	<div align=right class="rounded" style="margin-top: 2%; width: 98%; background: #9400D3; height:30px; line-height:30px; padding: 7px; color: white;">
	<?php

	
 
	if($this->session->userdata('logged_in'))
 	{
		echo "You are logged in as: <a href='".base_url()."index.php/home'> $username </a> | <a href='".base_url()."index.php/profile'> My Profile </a> | <a href='".base_url()."index.php/home/logout'>Logout</a></div><br>";
	}
	else {
		echo "You are not logged in | <a href='".base_url()."index.php/login'>Login</a></div><br><br><br>";
		}
	?>
</body>
</html>
