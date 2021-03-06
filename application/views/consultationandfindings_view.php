<?php 
	include('header.php'); 
	include('navigation.php');
	
	echo "<link rel=\"stylesheet\" type=\"text/css\" href='".base_url()."css/style.css'>";
	echo "<script type\"text/javascript\" src=\"".base_url()."js/dynamic.js\"></script>";
//	echo "<script type\"text/javascript\" src=\"".base_url()."js/patientdb.js\"></script>"
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
 <head>
<link href="<?php echo base_url(); ?>css/ui-lightness/jquery-ui-1.10.3.custom.css" rel="stylesheet">
	<script src="<?php echo base_url(); ?>js/jquery-1.9.1.js"></script>
	<script src="<?php echo base_url(); ?>js/jquery-ui-1.10.3.custom.js"></script>

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

?>
   <title>Consultation and Findings - <?php echo $section; ?></title>
<link rel="shortcut icon" href="<?php echo base_url(); ?>images/upcd-20140224-favicon.ico">	

<script type="text/javascript">
var fieldNum2;
var j=0;
var year = new Date().getFullYear();

	$(function() {	
		$('#date_0').datepicker({
			dateFormat: 'yy-mm-dd',
			showAnim: 'slideDown',
			changeMonth: true,
			changeYear: true,
			yearRange: '1910:'+year
	    	});
	});
			
	$(function() {	
		$('#startdate_0').datepicker({
			dateFormat: 'yy-mm-dd',
			showAnim: 'slideDown',
			changeMonth: true,
			changeYear: true,
			yearRange: '1910:'+year ,
			onClose: function( selectedDate ) {
	       			$( "#enddate_0" ).datepicker( "option", "minDate", selectedDate );
	      		}
	    	});
	});

	$(function() {	
		$('#enddate_0').datepicker({
			dateFormat: 'yy-mm-dd',
			showAnim: 'slideDown',
			changeMonth: true,
			changeYear: true,
			yearRange: '1910:'+year ,
			onClose: function( selectedDate ) {
	       			$( "#startdate_0" ).datepicker( "option", "maxDate", selectedDate );
	      		}
	    	});
	});

function addConsult(tableID){
	fieldNum2= j+1;
			
	var table = document.getElementById(tableID);
	var numRows = table.rows.length;
	var row = table.insertRow(numRows);
	row.align = "center";

	var cellA = row.insertCell(0);
	cellA.innerHTML ="<input type='checkbox' name='"+fieldNum2+"' id='ck"+fieldNum2+"'>";
	var cellB = row.insertCell(1);
	cellB.innerHTML ="<input type='text' name='date[]' class='datepicker' id='date_" + fieldNum2 +"' size=8px readonly>";
	var cellC = row.insertCell(2);
	cellC.innerHTML ="<input type='text' name='reason[]' id='reason_" + fieldNum2 +"' size=10px>";
	var cellD = row.insertCell(3);
	cellD.innerHTML ="<input type='text' name='startdate[]' class='datepicker' id='startdate_" + fieldNum2 +"' size=8px readonly>";
	var cellE = row.insertCell(4);
	cellE.innerHTML ="<input type='text' name='enddate[]' class='datepicker' id='enddate_" + fieldNum2 +"' size=8px readonly>";
	var cellF = row.insertCell(5);
	cellF.innerHTML ="<textarea name='findings[]' id='findings_" + fieldNum2 +"' cols=30></textarea>";

	j++;

	var str = '#date_'+fieldNum2;
	$(str).datepicker({
		dateFormat: 'yy-mm-dd',
		showAnim: 'slideDown',
		changeMonth: true,
		changeYear: true,
		yearRange: '1910:'+year
    	});
			
	var str2 = '#startdate_'+fieldNum2;
	$(function() {	
		$(str2).datepicker({
			dateFormat: 'yy-mm-dd',
			showAnim: 'slideDown',
			changeMonth: true,
			changeYear: true,
			yearRange: '1910:'+year ,
			onClose: function( selectedDate ) {
	       			$( "#enddate_"+fieldNum2 ).datepicker( "option", "minDate", selectedDate );
	      		}
	    	});
	});

	var str3 = '#enddate_'+fieldNum2;
	$(function() {	
		$(str3).datepicker({
			dateFormat: 'yy-mm-dd',
			showAnim: 'slideDown',
			changeMonth: true,
			changeYear: true,
			yearRange: '1910:' +year ,
			onClose: function( selectedDate ) {
	       			$( "#startdate_"+fieldNum2 ).datepicker( "option", "maxDate", selectedDate );
	      		}
	    	});
	});
}

function deleteConsult(tableID){
	
	var table = document.getElementById(tableID);
        var rowCount = table.rows.length;
        for(var i=0; i<rowCount; i++) {
		var row = table.rows[i];
		var chkbox = row.cells[0].childNodes[0];
                if(null != chkbox && true == chkbox.checked) {
			if(rowCount <= 2) {
                        	alert("Cannot delete all the rows.");
                        	break;
                    	}
                    	table.deleteRow(i);
                    	rowCount--;
                    	i--;
                }
	}
}
	
	
</script>
 </head>
<?php 
	$session_data = $this->session->userdata('logged_in');
     	$usernamelog = $session_data['username'];

	$session_data2 = $this->session->userdata('has_error');
	$invalid_input = $session_data2['invalid_input'];

	if($invalid_input){
		$date2[] = $session_data2['date'];
		$reason2[] = $session_data2['reason'];
		$startdate2[] = $session_data2['startdate'];
		$enddate2[] = $session_data2['enddate'];
		$findings2[] = $session_data2['findings'];
		
	}


	if($recordexist){
		foreach($info as $row){

			$datetxt = $row['date'];
			$reasontxt = $row['reason'];
			$startdatetxt = $row['startdate'];
			$enddatetxt = $row['enddate'];
			$findingstxt = $row['findings'];
			
		}

		$date = explode("|", $datetxt);
		$reason = explode("|", $reasontxt);
		$startdate = explode("|", $startdatetxt);
		$enddate = explode("|", $enddatetxt);
		$findings = explode("|", $findingstxt);


		
	}
?>
 <body>
  
<div class="maindiv">
	<?php include('patient_header.php'); ?>

<div id="Content_Area">

	<form id="ADDCONSULTATIONFINDINGS" name="ADDCONSULTATIONFINDINGS" action="<?php echo base_url();?>index.php/verifyaddconsultationandfindings" method="post">

<br><a href="<?php echo base_url();?>index.php/loaddashboard/patientdb/<?php echo $id; ?>"> Dashboard </a> &nbsp; <a href="<?php echo base_url();?>index.php/viewconsultationversions"> View Versions </a><br><br>

<div class="validationexc" style="display: <?php if($this->session->userdata('has_error')) echo 'block'; else 'none' ?>;">
   		<?php $session_data = $this->session->userdata('has_error');
     		echo $session_data['error'];
	?>
</div>
<div style="position: relative; text-align:right; color: red; right: 5%;"><i>* means required</i></div>
		<table id="consult" frame="box" class="frame">
		<tr class=header>
			<td colspan=6>Consultation and Findings
		</tr>
		<tr>
				<td>
				<td>Date <font color="red">*</font>
				<td>Reason for Consult <font color="red">*</font>
				<td>From <font color="red">*</font>
				<td>To <font color="red">*</font>
				<td>Findings/Recommendation <font color="red">*</font>
			</tr>
			<?php

			if($invalid_input){
				$size = sizeof($date2);
				//echo $size;
				for($i=0; $i<$size; $i++){
					echo "<tr>";
						echo "<td><input type='checkbox' name='$id' id='ck$id' checked>";
						echo "<td><input type='text' name='datenew[]' class='datepicker' id='date_$i' size=8px value='".$date2[0][$i]."' readonly>
						<td><input type='text' name='reason[]' id='reason_$i' size=10px value='".$reason2[0][$i]."'>
						<td><input type='text' name='startdate[]' class='datepicker' id='startdate_$i' size=8px value='".$startdate2[0][$i]."' readonly>
						<td><input type='text' name='enddate[]' class='datepicker' id='enddate_$i' size=8px value='".$enddate2[0][$i]."' readonly>
						<td><textarea name='findings[]' id='findings_$i' cols=30>".$findings2[0][$i]."</textarea>
					</tr>";
				}
			}
			elseif($recordexist){
				$size = sizeof($date);
				for($i=0; $i<$size; $i++){
					echo "<tr>";
						echo "<td><input type='checkbox' name='$id' id='ck$id' checked>";
						echo "<td><input type='text' name='datenew[]' class='datepicker' id='date_$i' size=8px value='".$date[$i]."' readonly>
						<td><input type='text' name='reason[]' id='reason_$i' size=10px value='".$reason[$i]."'>
						<td><input type='text' name='startdate[]' class='datepicker' id='startdate_$i' size=8px value='".$startdate[$i]."' readonly>
						<td><input type='text' name='enddate[]' class='datepicker' id='enddate_$i' size=8px value='".$enddate[$i]."' readonly>
						<td><textarea name='findings[]' id='findings_$i' cols=30>".$findings[$i]."</textarea>
					</tr>";
				}
			}
			else{
				echo "<tr>
					<td><input type='checkbox' name='0' id='ck0'>
					<td><input type='text' name='datenew[]' class='datepicker' id='date_0' size=8px readonly>
					<td><input type='text' name='reason[]' id='reason_0' size=10px>
					<td><input type='text' name='startdate[]' class='datepicker' id='startdate_0' size=8px readonly>
					<td><input type='text' name='enddate[]' class='datepicker' id='enddate_0' size=8px readonly>
					<td><textarea name='findings[]' id='findings_0' cols=30></textarea>
					<!--<td><input type='text' name='clinician2[]' id='clinician2_0' size=7px>
					<td><input type='text' name='clinician2_nat[]' id='clinician2nat_0' size=7px>
					<td><input type='text' name='fac[]' id='fac_0' size=7px>-->
				</tr>";
			}
			?>
		</table><br><br>
		<input type="button" onClick="addConsult('consult')" value="Add Row">
		<input type="button" onClick="deleteConsult('consult')" value="Delete Row/s"><br><br>
		<input type="submit" value="Save"/> <input type="reset" value="Clear entries"/>
</form>

</div>

 </body>
</html>


