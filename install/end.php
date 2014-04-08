<?php
	session_start();
	if(isset($_SESSION['done']))
	{
		if(!$_SESSION['done'])
			header('location: stepfour.php');
	}
	else {
		header('location: stepfour.php');
	}
	
	$next_flag = FALSE;
	if(isset($_SESSION['done']))
		if($_SESSION['done'])
			$next_flag = TRUE;
?>	
	
	<header>
		<title>OSET 4.0</title>
		<link href='../css/style.css' rel='stylesheet' type='text/css'>
	</header>

	<body>
		<header>
		<title>DentISt 4.0</title>
		<link href='../css/style.css' rel='stylesheet' type='text/css'>
	</header>

	<body>
		
			
			<div class="left">
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
						<a href="stepfour.php" <?php if(strpos($_SERVER["PHP_SELF"],"stepthree")) echo 'class="current"'?>> STEP 3 - Create Tables </a>
				</div>
				<div class="module-div">
						<a href="stepfive.php" <?php if(strpos($_SERVER["PHP_SELF"],"stepfour")) echo 'class="current"'?>> STEP 4 - Create Administrator</a>
				</div>
				<div class="module-div">
						<a href="end.php" <?php if(strpos($_SERVER["PHP_SELF"],"end")) echo 'class="current"'?>> END of Installation</a>
				</div>
			</div>
	
			<div class="right">
				<h2>End of Installation </h2>
				
				Successfully installed DentISt.
				<br/><br/>
				<font color=green><b>REMINDERS:</b></font>
				<ul>
					<li>Set the configuration file (application/config/database.php) to be unwritable for non-owner users. <br/><br/></li>
					<li>Delete the installation folder (DentISt/install/)</li>
				</ul>
				</div>
			</div>
		</div>	
	</body>
