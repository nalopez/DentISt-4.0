<?php 
	echo "<link rel=\"stylesheet\" type=\"text/css\" href='".base_url()."css/style.css'>";
	include('header.php');
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
 <head>
   <title>DentISt 4.0</title>
<link rel="shortcut icon" href="<?php echo base_url(); ?>images/upcd-20140224-favicon.ico">
 </head>
 <body>
   
   	<?php if(!$this->session->userdata('logged_in')){
	echo "<div style='margin: 0 auto; text-align:center;'>
	<img src='";
	echo base_url().'images/upcd-main.png';
	echo "'><br>
	<br>
	
	<h4 align='center'> <font color=red>  Password successfully changed.  </font></h4><br>
	

	<input type='button' value='Login' onClick='window.open(\" ".base_url()."/index.php/login\", \"_parent\")' /> <input type='button' value='Cancel' onClick='history.go(-1)'>

</div>
   </form>";

	}
	else{
		include('navigation.php');
		echo "<div class='maindiv'>
 			<h4 align='center'><font color=red> Password successfully changed </font> </h4>
		</div>";
	}
	?>


 </body>
</html>



	

