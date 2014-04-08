<?php	
	session_start();
	if($_POST['password'] != $_POST['password2'])
	{
		echo '<script language = "javascript">alert("Passwords do not match.");</script>';
		$_SESSION['admin'] = $_POST['username'];			
		$_SESSION['firstname'] = $_POST['firstname'];
		$_SESSION['lastname'] = $_POST['lastname'];
	}
	else
	{
		echo ("jd");
		$username = $_POST['username'];			
		$fname = $_POST['firstname'];
		$lname = $_POST['lastname'];
		$salt = substr(MD5(uniqid(rand(), true)), 0, 6);
		$password = $_POST['password'].$salt;
		
		echo ("jd");
		
		$db_con = mysql_connect($_SESSION['host'], $_SESSION['username'], $_SESSION['password']) or die("Could not establish MySQL connection");
		$connection_string = mysql_select_db($_SESSION['dbname']);
			
		echo ("INSERT INTO users (username, first_name, last_name, user_type, salt, password) 
			VALUES('$username', '$fname', '$lname', '1', '$salt', MD5('$password'))");
			
		mysql_query("INSERT INTO users (username, , first_name, last_name, user_type, salt, password) 
			VALUES('$username', '$fname', '$lname', '1', '$salt', MD5('$password'))");

		$_SESSION['done'] = TRUE;			
		//header('Location: end.php');					
	}
?>