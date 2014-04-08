<?php
	session_start();
	if(isset($_SESSION['proceedToStep2']))
	{
		if(!$_SESSION['proceedToStep2'])
			header('location: stepone.php');
		if(isset($_SESSION['done']))
			header('location: end.php');
	}
	else {
		header('location: stepone.php');
	}
	
	$next_flag = FALSE;
	if(isset($_SESSION['proceedToStep3']))
		if($_SESSION['proceedToStep3'])
			$next_flag = TRUE;
?>	
	
<?php  
	//include('header.php'); 
	//include(dirname(__DIR__).'/application/views/navigation.php');
	echo "<link rel=\"stylesheet\" type=\"text/css\" href='".dirname(__DIR__)."/css/style.css'>";
	echo "<script type\"text/javascript\" src=\"".dirname(__DIR__)."/js/dynamic.js\"></script>";
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

 <body>
			
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
						<a href="stepthree.php" <?php if(strpos($_SERVER["PHP_SELF"],"stepthree")) echo 'class="current"'?>> STEP 3 - Create Tables </a>
				</div>
				<div class="module-div">
						<a href="stepfour.php" <?php if(strpos($_SERVER["PHP_SELF"],"stepfour")) echo 'class="current"'?>> STEP 4 - Create Administrator</a>
				</div>
				<div class="module-div">
						<a href="end.php" <?php if(strpos($_SERVER["PHP_SELF"],"end")) echo 'class="current"'?>> END of Installation</a>
				</div>
			</div>
	
			<div class="right">
				<h2>Step 2 - DentISt Database Setup</h2>
				<form action="checkdb.php" method=POST>
				<br/>
				<?php 
				if(isset($_SESSION['proceedToStep3']))
				{
					if($_SESSION['proceedToStep3'])
						echo "<font color = green>Connection to database successful</font><br/><br/>";
					else
						echo "<font color=red>Cannot connect to database<br/><br/>";
				}
				
				?>
				<font color=red align=center> To run the system efficiently, replace the database name only. </font>
				<table>
					<tr><td>IP Address/Hostname:</td>
						<td><input type="text" name="host" value="127.0.0.1" ></td>
					</tr>
					<tr><td>Database Name:</td>
						<td><input type="text" name="dbname" value="<?php if(isset($_SESSION['dbname'])) echo $_SESSION['dbname'];?>"></td>
					</tr>
					<tr><td>Username:</td>
						<td><input type="text" name="username" value="root"></td>
					</tr>
					<tr><td>Password:</td>
						<td><input type="password" name="password" value="letmein" ></td>
					</tr>
					<tr><td></td><td><input type="submit" value="Check">
				</td></tr>
				</table>
				<br/><br/>
				</form>
				<form action="stepthree.php" method=POST>
				<input type="submit" value="Next Step" <?php if(!$next_flag) echo "disabled";?>></a>
				</form>
			</div>
		</div>	
	</body>

