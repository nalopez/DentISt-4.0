<?php 
	session_start();
	unset($_SESSION['proceedToStep3']);

	$db_con = mysql_connect($_POST['host'].":".$_POST['port'], $_POST['username'], $_POST['password'], $_POST['dbname']);
	echo "here;";
	if($db_con)
	{
		$_SESSION['content'] = "<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
			\$active_group = 'default';
			\$active_record = TRUE;
			
			\$db['default']['hostname'] = '".$_POST['host']."';
			\$db['default']['port'] = '".$_POST['port']."';
			\$db['default']['username'] = '".$_POST['username']."';
			\$db['default']['password'] = '".$_POST['password']."';
			\$db['default']['database'] = '".$_POST['dbname']."';
			\$db['default']['dbdriver'] = 'mysql';
			\$db['default']['dbprefix'] = '';
			\$db['default']['pconnect'] = FALSE;
			\$db['default']['db_debug'] = TRUE;
			\$db['default']['cache_on'] = FALSE;
			\$db['default']['cachedir'] = '';
			\$db['default']['char_set'] = 'utf8';
			\$db['default']['dbcollat'] = 'utf8_general_ci';
			\$db['default']['swap_pre'] = '';
			\$db['default']['autoinit'] = TRUE;
			\$db['default']['stricton'] = FALSE;";

		$content = $_SESSION['content'];	
		
		$_SESSION['host'] = $_POST['host'];
		$_SESSION['username'] = $_POST['username'];
		$_SESSION['dbname'] = $_POST['dbname'];
		$_SESSION['port'] = $_POST['port'];
		$_SESSION['password'] = $_POST['password'];
		$_SESSION['proceedToStep3'] = TRUE;

		$fh = fopen('../application/config/database.php', 'w');
		fwrite($fh, $content);
		fclose($fh);
	}
	else
	{
		$_SESSION['host'] = $_POST['host'];
		$_SESSION['username'] = $_POST['username'];
		$_SESSION['dbname'] = $_POST['dbname'];
		$_SESSION['password'] = $_POST['password'];
		$_SESSION['proceedToStep3'] = FALSE;
	}
	header('location: steptwo.php');
?>
