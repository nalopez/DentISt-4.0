<body>
<?php
	echo "<link rel=\"stylesheet\" type=\"text/css\" href='".base_url()."css/style.css'>";
	$session_data = $this->session->userdata('logged_in');
	$username = $session_data['username'];
	
?>

	<?php echo "<img src='".base_url()."images/upcd.png' style='position: absolute' height='95px'><br>"; ?>

	<div align=right class="rounded" style="width: 98%; background: #9400D3; height:30px; line-height:30px; padding: 7px; color: white;">
	<?php

	
 
	if($this->session->userdata('logged_in'))
 	{
		echo "You are logged in as: <a href='".base_url()."index.php/home'> $username </a> | <a href='".base_url()."index.php/home/logout'>Logout</a></div><br>";
	}
	else 
		echo "You are not logged in | <a href='".base_url()."index.php/login'>Login</a></div><br><br><br>";
	?>
</body>
