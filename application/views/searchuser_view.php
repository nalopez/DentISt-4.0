<?php 
	include('header.php'); 
	include('navigation.php');
	echo "<link rel=\"stylesheet\" type=\"text/css\" href='".base_url()."css/style.css'>";
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
 <head>
   <title>Users - System Administrator </title>
<link rel="shortcut icon" href="<?php echo base_url(); ?>images/upcd-20140224-favicon.ico">
	<script type="text/javascript">
		function confirmDelete(choice){
			alert("choice: "+choice);
			var conf = confirm("Delete this user?");
			alert("conf: "+conf);
			if(conf == true){
				var url = "http://localhost/DentISt/index.php/deleteuser/delete/" + choice;
				window.location = url;			
			}
		}	
	</script>
 </head>
 <body>
<div class="maindiv">
<h3 align=center>Users</h3>

<form action="<?php echo base_url().'index.php/searchuser'?>" method=post>


<input type="text" class="search" name="searchuser" value="<?php echo $string; ?>"> <input type="submit" value="Search" name="searchbtn" value="<?php echo $string; ?>"> <br><br>
There <?php if($users == FALSE){
		echo "are no records";
 	}elseif($count == 1){
		echo "is 1 record";
	}else
		echo "are ".$count." records"; 

?> that matched the keyword '<?php echo $string; ?>' <br><br>
	<center>
		<table class="altcolor" style="width: 90%;" cellpadding=5>
			<tr class="header">
				<td class="tab" align="center"> User
				<td class="tab" align="center"> Username
				<td class="tab" align="center"> Role
				<td class="tab" align="center"> Section
				<td class="tab"align="center"> Options
			</tr>
			<?php
				if($users == FALSE) echo "users:".$users;
				else{
					foreach($users as $row){
						$uname = $row->username;
						echo "<tr class='tab'><td class='tab'>".$row->userFName." ".$row->userLName;
						echo "<td class='tab'>".$row->username;
						echo "<td class='tab'>";
						foreach($users2[$uname] as $row2){
							echo $row2->role_type."<br>";
						}
						echo "<td class='tab'>";
						foreach($users2[$uname] as $row2){
							echo $row2->role_section."<br>";
						}
						echo "<td class='tab'><a href='".base_url()."index.php/edituser/edit/".$row->userID."'>Edit</a>&nbsp;<a href=# onClick='confirmDelete(".$row->userID.")'>Delete</a></tr>";
					}
				}
			?>
		</table>
		
	</center>	
</form>
</div>
 </body>
</html>


