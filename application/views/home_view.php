<?php 
	include('header.php'); 
	include('navigation.php');
	echo "<link rel=\"stylesheet\" type=\"text/css\" href='".base_url()."css/style.css'>";
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
 <head>
   <title>Home</title>
 </head>
 <body>
<div class="home" style="border: 0px; width: 80%;">


<?php
/*		$sysad = false;
		$fac = false;
		$stud = false;
		$ODi = false;
		$OM = false;
		$PD = false;
		$ODe = false;
		$GQ = false;

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
	
		if($sysad){
			echo "<h3 align='center'> System Administrator</h3>";
			echo "<a href='".base_url()."index.php/manageusers'> Manage Users </a><br>
		<a href='".base_url()."index.php/viewstat'> View Statistics </a> <br><br><br>";
		}
		if($fac){
			echo "<h3 align='center'> Faculty (";
				if($ODi) echo "Oral Diagnosis";
				elseif($OM) echo "Oral Medicine";
				elseif($PD) echo "Prosthodontrics";
				elseif($ODe) echo "Operative Dentistry";
				elseif($GQ) echo "General Query"; 
			echo ") </h3>";
			if($ODi){
				echo "<a href='".base_url()."index.php/querypatient'> Add a Patient/s </a><br>";
			}
			echo "<a href='".base_url()."index.php/querypatient'> Query for Patient/s </a><br>
		<a href='".base_url()."index.php/viewsched'> View Schedule </a> <br><br><br>";
		}
		if($stud){
			echo "<h3 align='center'> Student (";
				if($ODi) echo "Oral Diagnosis";
				elseif($OM) echo "Oral Medicine";
				elseif($PD) echo "Prosthodontrics";
				elseif($ODe) echo "Operative Dentistry";
				elseif($GQ) echo "General Query"; 
			echo ") </h3>";
			if($ODi){
				echo "<a href='".base_url()."index.php/addpatient'> Add a Patient/s </a><br>";
			}
			echo "<a href='".base_url()."index.php/querypatient'> Query for Patient/s </a><br>
		<a href='".base_url()."index.php/viewsched'> View Schedule </a> <br>";
		}*/
	?>		
		<h1 align="center"> Schedule </h1>

</div>			


 </body>
</html>

