<?php
	session_start();
	if(isset($_SESSION['proceedToStep4']))
	{
		if(!$_SESSION['proceedToStep4'])
			header('location: stepthree.php');
		if(isset($_SESSION['done']))
			header('location: end.php');
	}
	else {
		header('location: stepthree.php');
	}
		
	if($_SERVER['REQUEST_METHOD'] == 'POST')
	{
		if($_POST['password'] != $_POST['password2'])
		{
			echo '<script language = "javascript">alert("Passwords do not match.");</script>';
			$_SESSION['admin'] = $_POST['username'];			
			$_SESSION['firstname'] = $_POST['firstname'];
			$_SESSION['middlename'] = $_POST['middlename'];
			$_SESSION['lastname'] = $_POST['lastname'];
			$_SESSION['secques'] = $_POST['secques'];
			$_SESSION['secans'] = $_POST['secans'];
		}
		else
		{
			$username = $_POST['username'];			
			$fname = $_POST['firstname'];
			$mname = $_POST['middlename'];
			$lname = $_POST['lastname'];
			$salt = substr(MD5(uniqid(rand(), true)), 0, 6);
			$salted = hash("sha256", $_POST['password'].$saltx);
			$secques = $_POST['secques'];
			$secans = $_POST['secans'];
		
			$db_con = mysql_connect($_SESSION['host'].":3307", $_SESSION['username'], $_SESSION['password']) or die("Could not establish MySQL connection");
			$connection_string = mysql_select_db($_SESSION['dbname']);
			$date = date("Y-m-d");
			
			mysql_query("insert into users values(1, '$fname', '$mname', '$lname');");
			mysql_query("insert into users_role values(1, 1, 'System Administrator', 'System Maintenance', '$date');");
			mysql_query("insert into users_auth values (1, 1, '$username', '$salted', '$salt', '$secques', '$secans');");

			$done = true;
			$_SESSION['done'] = true;
			
			header('Location: end.php');					
		}
	}	
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
						<a href="stepfour.php" <?php if(strpos($_SERVER["PHP_SELF"],"stepthree")) echo 'class="current"'?>> STEP 3 - Create Tables </a>
				</div>
				<div class="module-div">
						<a href="stepfive.php" <?php if(strpos($_SERVER["PHP_SELF"],"stepfour")) echo 'class="current"'?>> STEP 4 - Create Administrator</a>
				</div>
				<div class="module-div">
						<a href="end.php" <?php if(strpos($_SERVER["PHP_SELF"],"end")) echo 'class="current"'?>> END of Installation</a>
				</div>
			</div>
	
			<div align="center">
				<h2>Step 4 - Create Administrator </h2>
				<form action="stepfour.php" method=POST>
				<table>
					<tr><td><div id ="divpass"></div></td></tr>
					<tr><td width="200px">Username: <font color = red>*</font></td>
						<td><input type="text" name="username" value="<?php if(isset($_SESSION['admin'])) echo $_SESSION['admin']; ?>" required></td>
					</tr>
					<tr><td>First name: <font color = red>*</font></td>
						<td><input type="text" name="firstname" value="<?php if(isset($_SESSION['firstname'])) echo $_SESSION['firstname']; ?>" required></td>
					</tr>
					<tr><td>Middle name: <font color = red>*</font></td>
						<td><input type="text" name="middlename" value="<?php if(isset($_SESSION['middlename'])) echo $_SESSION['middlename']; ?>" required></td>
					</tr>
					<tr><td>Last name: <font color = red>*</font></td>
						<td><input type="text" name="lastname" value="<?php if(isset($_SESSION['lastname'])) echo $_SESSION['lastname']; ?>" required></td>
					</tr>
					<tr><td>Password: <font color = red>*</font></td>
						<td><input type="password" name="password" required></td>
					</tr>
					<tr><td>Confirm Password: <font color = red>*</font></td>
						<td><input type="password" name="password2" required></td>
					</tr>
					<tr><td>Security Question: <font color = red>*</font></td>
     						<td><select name="secques" id="secques">
							<option value="Select a question.."> Select a question.. </option>
							<option value="What is your favorite childhood movie?"> What is your favorite childhood movie? </option>
							<option value="What is your mother's maiden name?"> What is your mother's maiden name? </option>
							<option value="Where is you father's hometown?"> Where is you father's hometown? </option>
							<option value="What is the name of your first pet dog?"> What is the name of your first pet dog? </option>
							<option value="Who is your favorite elementary teacher?"> Who is your favorite elementary teacher? </option>
						</select></td>
		
     					</tr>
					<tr>
						<td>Security Answer:
				     		<td><input type="text" size="20" id="secans" name="secans" >
				     	</tr>
					<tr>
						<td></td>
						<td><input type="submit" value="Save and Finish Installation"></td>
					</tr>
				</table>
				
				</form>
			</div>
		</div>	
	</body>
