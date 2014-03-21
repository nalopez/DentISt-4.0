<?php 
	include('header.php'); 
	echo "<link rel=\"stylesheet\" type=\"text/css\" href='".base_url()."css/style.css'>";
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
 <head>
<?php 
$session_data = $this->session->userdata('logged_in');
     	$sect = $session_data['section'];
	$section = "";
	foreach($sect as $row){
		if($row != "System Maintenance"){
			$section = $row;
			break;
		}
	}
	if($section == ""){
		$section = "System Administrator";
	}

?>

   <title>Audit Trail - <?php echo $section; ?> </title>
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

<script>

	$(function() {
		$("#auditfrom").datepicker({
			dateFormat: 'yy-mm-dd',
			showAnim: 'slideDown',
			changeMonth: true,
			changeYear: true,
			yearRange: '1910:2014',
			onClose: function( selectedDate ) {
				$( "#auditto" ).datepicker( "option", "minDate", selectedDate );
	      		}
	    	});
	});
	
	$(function() {
		$("#auditto").datepicker({
			dateFormat: 'yy-mm-dd',
			showAnim: 'slideDown',
			changeMonth: true,
			changeYear: true,
			yearRange: '1910:2014',
			onClose: function( selectedDate ) {
				$( "#auditfrom" ).datepicker( "option", "maxDate", selectedDate );
	      		}
	    	});
	});

</script>


 </head>
 <body>
<?php include('navigation.php'); ?>
<div class="maindiv">
<h3 align=center>Audit Trail </h3>

<form action="<?php echo base_url().'index.php/searchaudittrail'?>" method=post>

Search Input: <input type="text" name="searchtext" id="searchtext" class="search"> <input type="text" class="datepicker" name="auditfrom" id="auditfrom" placeholder="From"> <input type="text" class="datepicker" name="auditto" id="auditto" placeholder="To"> <br> <br>
<select name="audit_action"> 
	<option value=""> Select one..
	<option value="LOGIN"> LOGIN
	<option value="LOGOUT"> LOGOUT
	<option value="SELECT"> SELECT
	<option value="INSERT"> INSERT
	<option value="DELETE"> DELETE
	<option value="UPDATE"> UPDATE
</select>

<select name="audit_form"> 
	<option value=""> Select one..
	<option value="Users"> Users
	<option value="Patient"> Patient
	<option value="Patient Information"> Patient Information
	<option value="Patient Checklist"> Patient Checklist
	<option value="Medical and Social History"> Medical and Social History
	<option value="Dental Data"> Dental Data
	<option value="Dental Status Chart"> Dental Status Chart
	<option value="Treatment Plan"> Treatment Plan
	<option value="Radiographic Examination"> Radiographic Examination
	<option value="Services Rendered"> Services Rendered
	<option value="Consultations and Findings"> Consultations and Findings
</select>
<input type="submit" value="Search" name="searchbtn"><br><br>

<hr width="95%">
<br>
	<center>
		<table class="altcolor" color="violet" style="text-align: center;" cellpadding=5px width="90%" align="center">
			<tr class="header">
				<td class="tab" align="center"> Name
				<td class="tab" align="center"> Action
				<td class="tab" align="center"> Form
				<td class="tab" align="center"> Action Performed To
				<td class="tab"align="center"> Action Date
			</tr>
			<?php if($audit){
				$count = sizeof($audit);
				$ctr = 1;
				$patientname = "";
				foreach($audit as $row){
					$user = $this->user->getUserInfo($row['committedBy']);
					$usernym = $this->user->getUsernameTrue($row['committedBy']);
					$uname = $usernym['username'];
					//foreach($user as $row2){
						$username = $user['userFName']." ".substr($user['userMName'], 0, 1).". ".$user['userLName'];
					//	$uname = $user['username'];
					//}

					if($row['committedTo'] != ''){
						$patient = $this->patient->getPatient($row['committedTo']);
					
						if($patient){
							foreach($patient as $row2){
								$patientname = $row2['patientFName']." ".substr($row2['patientMName'], 0, 1).". ".$row2['patientLName'];
							}
						}
					}									
					echo "<tr>";
					echo "<td> $username <br> ($uname)";
					echo "<td> ".$row['action'];
					echo "<td> ".$row['form'];
					echo "<td>"; if($row['committedTo'] == '') echo "&nbsp;"; else echo $patientname;
					echo "<td> ".$row['committedOn'];						
					echo "</tr>";
					$ctr++;
				}
			}
				
			?>
		</table>
		
	</center>	
</form>
</div>
 </body>
</html>


