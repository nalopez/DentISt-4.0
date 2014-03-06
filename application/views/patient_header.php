<body>
<?php
	echo "<link rel=\"stylesheet\" type=\"text/css\" href='".base_url()."css/style.css'>";
	$session_data = $this->session->userdata('logged_in');
	$username = $session_data['username'];
	
?>

	<div class="rounded2" style="position: relative; background: #9400D3; color: white; padding-top: 5px; padding-bottom: 5px; padding-left: 5px;height:80px; border:2px solid; border-top-left-radius:12px; border-top-right-radius:12px;">
	
	<?php

	$session_data = $this->session->userdata('current_patient');
	$name = $session_data['name'];
	$address = $session_data['address'];
	$age = $session_data['age'];
	$gender = $session_data['gender'];
	$id = $session_data['id'];
 
	if($this->session->userdata('current_patient'))
 	{
		echo "<div width='50%' style='position:absolute; text-align:left;'><font align='left' size=4>".$name."</font><br><br>";
		echo "<font align='left' size=3>".$gender."     ".$age." years old </font><br>";
		echo "<font align='left' size=2>".$address."</font></div>";

		echo "<div width='50%' style='position:absolute; left: 80%; text-align: right;'><font style='text-align: right;' size=4>UPCD ID ".$id."</font></div>";
	}
	
	?>
	</div>
	<br>
	
</body>
