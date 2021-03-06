<?php
	session_start();
	if(isset($_SESSION['proceedToStep3']))
	{
		if(!$_SESSION['proceedToStep3'])
			header('location: steptwo.php');
		if(isset($_SESSION['done']))
			header('location: end.php');
	}
	else {
		header('location: steptwo.php');
	}
	
	$next_flag = FALSE;
	if(isset($_SESSION['proceedToStep4']))
		if($_SESSION['proceedToStep4'])
			$next_flag = TRUE;
?>	
	
	<header>
		<title>DentISt 4.0</title>
		<link href='../css/style.css' rel='stylesheet' type='text/css'>
	</header>

	<body>

		<center><img src="../images/upcd-main.png"></center>
			
			<div align="center">
				<div class="module-div">
						<b><a href="index.php"> Install DentISt</a></b>
				</div>
				<div class="module-div">
						<a href="stepone.php" <?php if(strpos($_SERVER["PHP_SELF"],"stepone")) echo 'class="current"'?>> STEP 1 - System Requirements</a>
				</div>
				<div class="module-div">
						<a href="steptwo.php" <?php if(strpos($_SERVER["PHP_SELF"],"steptwo")) echo 'class="current"'?>> STEP 2 - DentISt Database Setup</a>
				</div>
				<div class="module-div">
						<a href="stepthree.php" <?php if(strpos($_SERVER["PHP_SELF"],"stepthree")) echo 'class="current"'?>> STEP 3 - Create Tables </a>
				</div>
				<div class="module-div">
						<a href="stepfour.php" <?php if(strpos($_SERVER["PHP_SELF"],"stepfour")) echo 'class="current"'?>> STEP 4 - Create Administrator</a>
				</div>
				<div class="module-div">
						<a href="end.php" <?php if(strpos($_SERVER["PHP_SELF"],"end")) echo 'class="current"'?>> END of Installation</a>
				</div>
			</div>
	
			<div align="center">
				<h2>Step 4 - Create Tables </h2>
				<?php 
				if(isset($_SESSION['proceedToStep4']))
				{
					if($_SESSION['proceedToStep4'])
						echo "<font color = green>The following tables have been created.</font><br/>
						<ul>
							<li>users
							<li>users_role
							<li>users_auth
							<li>patient
							<li>patientinfo
							<li>phyassess
							<li>vitalsigns
							<li>patientchecklist
							<li>familychecklist
							<li>allergychecklist
							<li>femalechecklist
							<li>medicalhistory
							<li>socialhistory
							<li>dentalhistory
							<li>softtissueexamination
							<li>recurrentstatus
							<li>cariesstatus
							<li>restorationstatus
							<li>serviceneeded
							<li>dentalchart
							<li>dentures
							<li>otherservices
							<li>treatmentplan
							<li>patientinfoversion
							<li>patientchecklistversion
							<li>medandsochistoversion
							<li>dentaldataversion
							<li>dentalchartversion
							<li>treatmentplanversion
							<li>patientdashboardversion
							<li>studenttasks
							<li>remark
							<li>radiographicexam
							<li>radioexamversion
							<li>consultationandfindings
							<li>servicesrendered
							<li>servicesrenderedversion
							<li>confindversion
							<li>audittrail
							<li>appointment
						</ul>";
				}
				else
				{
					echo '
					<br/>
					Database configuration file has been well setup. <b><a href="createtables.php">Create tables</a></b> needed for the OSET.
					<br/><br/>
					';
				}
				?>
				
				<a href="stepfour.php"><input type="button" value="Next Step" <?php if(!$next_flag) echo "disabled";?>></a>
			</div>
		</div>	
	</body>
