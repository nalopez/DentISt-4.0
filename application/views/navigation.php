
<?php
	echo "<link rel=\"stylesheet\" type=\"text/css\" href='".base_url()."css/style.css'>";
	$session_data = $this->session->userdata('logged_in');
	$username = $session_data['username'];
	
?>

	<meta charset="utf-8">
	<link href="<?php echo base_url(); ?>css/ui-lightness/jquery-ui-1.10.3.custom.css" rel="stylesheet">
	<script src="<?php echo base_url(); ?>js/jquery-1.9.1.js"></script>
	<script src="<?php echo base_url(); ?>js/jquery-ui-1.10.3.custom.js"></script>
	<script>
		$(function() {
			$( "#accordion" ).accordion();
		});
	</script>
	<body><br>
	<div style="align: left; width: 20%; position: absolute; height:100%; ">
	<?php

		$sysad = false;
		$fac = false;
		$stud = false;
		$ODi = false;
		$OM = false;
		$PD = false;
		$ODe = false;
		$GQ = false;

		$session_data = $this->session->userdata('logged_in');
		$role = $session_data['role'];
		$section = $session_data['section'];

		foreach($role as $row){
			if($row == "System Administrator")
				$sysad = true;
			elseif($row == "Faculty")
				$fac = true;
			elseif($row == "Student")
				$stud = true;
		}

		foreach($section as $row){
			if($row == "Oral Diagnosis")
				$ODi = true;
			elseif($row == "Oral Medicine")
				$OM = true;
			elseif($row == "Prosthodontrics")
				$PD = true;
			elseif($row == "Operative Dentistry")
				$ODe = true;
			elseif($row == "General Query")
				$GQ = true;
		}
		echo "<div id='accordion'>";
		//echo "<center>";
		if($sysad){
			echo "<h3 align='center'> System Administrator</h3>";
			echo "<div><p><a href='".base_url()."index.php/adduser'>Add a User</a><br><a href='".base_url()."index.php/manageusers'> View Users </a><br>
		<a href='".base_url()."index.php/viewstat'> View Statistics </a></p></div>";
		}
		if($fac){
			echo "<h3 align='center'> Faculty<br> (";
				if($ODi) echo "Oral Diagnosis";
				elseif($OM) echo "Oral Medicine";
				elseif($PD) echo "Prosthodontrics";
				elseif($ODe) echo "Operative Dentistry";
				elseif($GQ) echo "General Query"; 
			echo ") </h3><div>";
			if($ODi){
				echo "<a href='".base_url()."index.php/addpatient'> Add a Patient </a><br>";
			}
			echo "<a href='".base_url()."index.php/searchpatient'> Search a Patient </a><br>";
			echo "<a href='".base_url()."index.php/facultytasks'> Tasks </a><br>";
		echo "<a href='".base_url()."index.php/clinicianappointments'> View Clinician Appointments </a> </div>";
		}
		if($stud){
			echo "<h3 align='center'> Student<br> (";
				if($ODi) echo "Oral Diagnosis";
				elseif($OM) echo "Oral Medicine";
				elseif($PD) echo "Prosthodontrics";
				elseif($ODe) echo "Operative Dentistry";
				elseif($GQ) echo "General Query"; 
			echo ") </h3><div>";
			if($ODi){
				echo "<a href='".base_url()."index.php/addpatient'> Add a Patient </a><br>";
			}
			echo "<a href='".base_url()."index.php/searchpatient'> Query for Patient/s </a><br>
				<a href='".base_url()."index.php/studenttasks'> Tasks </a><br>
				<a href='".base_url()."index.php/viewappointments'> View Appointments </a> </div>";
		}
		echo "</center>";
		echo"</div>"

 
	?>
	</div>
	</body>

