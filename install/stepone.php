<?php 
	session_start();
	if(isset($_SESSION['done']))
			header('location: end.php');
	
	$next_flag = TRUE;
	$PG_SQL = TRUE;
	$MY_SQL = TRUE;
	$config_writable = TRUE;
	$folders_writable = TRUE;
		
	
	if(!extension_loaded('mysql')){
		$MY_SQL = FALSE;
		$next_flag= FALSE;
	}
	if(!is_writable(dirname(__DIR__).'/application/config/database.php')){
		$config_writable = FALSE;
		$next_flag = FALSE;
	}
		
		
	if($next_flag)
		$_SESSION['proceedToStep2'] = TRUE;
	else 
		$_SESSION['proceedToStep2'] = FALSE;

?>	
	
	<header>
		<title>DentISt 4.0</title>
		<link href='../css/style.css' rel='stylesheet' type='text/css'>
	</header>

	<body>
		<div class="wrapper">
			
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
				
				<h2>Step 1 - System Requirements</h2>
				
				The following must be working for DentISt to work properly:
				<br/><br/>
				<table class=records>
					<tr>
						<th></th>
						<th></th>
						<th>Status</th>						
					</tr>
					<tr>
						<td>MySQL Support Module</td>
						<td>Needed for the main database access</td>
						<td><?php if($MY_SQL) echo "<font color=green>OK</font>"; else echo 
							"<font color=red>Extension not found</font>"; ?></td>
					</tr>
					<tr>
						<td>Configuration settings</td>
						<td>Must be writable (application/config/database.php)</td>
						<td><?php if($config_writable) echo "<font color=green>Writable</font>"; else echo 
							"<font color=red>Not writable</font>"; ?></td>
					</tr>
				</table>
				<br/><br/>
				<form action="steptwo.php" method=POST>
				<input type="submit" class="none" value="Next Step" <?php if(!$next_flag) echo "disabled";?>></a>
				</form>
			</div>
		</div>	
	</body>
