<?php 
	include('header.php'); 
	echo "<link rel=\"stylesheet\" type=\"text/css\" href='".base_url()."css/style.css'>";

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
 <head>
<?php $session_data = $this->session->userdata('logged_in');
     	$sect = $session_data['section'];
	$section = "";
	foreach($sect as $row){
		if($row != "System Maintenance"){
			$section = $row;
			break;
		}
	}
?>

   <title>View Clinicians - <?php echo $section; ?> </title>
<link rel="shortcut icon" href="<?php echo base_url(); ?>images/upcd-20140224-favicon.ico">
	<script type="text/javascript">
		function confirmDelete(choice){
			var conf = confirm("Delete this user?");
			if(conf == true){
				var url = "http://localhost/DentISt/index.php/deleteuser/delete/" + choice;
				window.location = url;			
			}
		}

	</script>
 </head>
 <body>
<?php include('navigation.php'); ?>
<div class="maindiv">

<?php $session_data = $this->session->userdata('logged_in');
     	$sect = $session_data['section'];
	$section = "";
	foreach($sect as $row){
		if($row != "System Maintenance"){
			$section = $row;
			break;
		}
	}
?>

<h3 align=center> <?php echo $section; ?> Clinicians </h3>

<form action="<?php echo base_url().'index.php/searchuser'?>" method=post>

<!--<input type="text" name="searchuser" id="searchuser" class="search"> <input type="submit" value="Search" name="searchbtn"><br><br>-->


<hr width="95%">
<br>
	<center>
		<table class="altcolor" cellpadding=5px width="90%">
			<tr class="header">
				<td class="tab" align="center"> User
				<td class="tab" align="center"> Username
				<td class="tab" align="center"> Role
			</tr>
			<?php
				if($users == FALSE) echo "users:".$users;
				else{
					foreach($users as $row){
						$uname = $row['username'];
						echo "<tr class='tab'><td class='tab'>".$row['userFName']." ".$row['userLName'];
						echo "<td class='tab'>".$row['username'];
						echo "<td class='tab'>".$row['role_type'];
					}
				}
			?>
		</table>
		
	</center>	
</form>
</div>
 </body>
</html>


