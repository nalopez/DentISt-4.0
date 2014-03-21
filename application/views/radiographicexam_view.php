<?php 
	include('header.php'); 
	include('navigation.php');
	
	echo "<link rel=\"stylesheet\" type=\"text/css\" href='".base_url()."css/style.css'>";
	echo "<script type\"text/javascript\" src=\"".base_url()."js/dynamic.js\"></script>";
	echo "<script type\"text/javascript\" src=\"".base_url()."js/patientdb.js\"></script>"
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

   <title>Radiographic Exam - <?php echo $section; ?></title>
<link rel="shortcut icon" href="<?php echo base_url(); ?>images/upcd-20140224-favicon.ico">	
<script type="text/javascript">

var fieldNum;
var i=0;
var year = new Date().getFullYear();

$(function() {
	$('#date0').datepicker({
		dateFormat: 'yy-mm-dd',
			showAnim: 'slideDown',
				changeMonth: true,
				changeYear: true,
				yearRange: '1910:' + year
    			});
});

function addRadio(tableID){
	fieldNum= i+1;
			
	var table = document.getElementById(tableID);
	var numRows = table.rows.length;
	var row = table.insertRow(numRows);
	row.align = "center";

	var cellA = row.insertCell(0);
	cellA.innerHTML ="<input type='checkbox' name='"+fieldNum+"' id='ck"+fieldNum+"'>";
	var cellB = row.insertCell(1);
	cellB.innerHTML ="<input type='text' name='date[]' class='datepicker' id='date" + fieldNum +"'>";
	var cellC = row.insertCell(2);
	cellC.innerHTML ="<input type='text' name='tooth[]' id='toothnum_" + fieldNum +"'>";
	var cellD = row.insertCell(3);
	cellD.innerHTML ="<textarea name='findings[]' id='findings_" + fieldNum +"' cols=40></textarea>";

	var str = '#date'+fieldNum;
	$(str).datepicker({
		dateFormat: 'yy-mm-dd',
			showAnim: 'slideDown',
				changeMonth: true,
				changeYear: true,
				yearRange: '1910:' + year
    			});

	i++;
}

function deleteRadio(tableID){
	
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
		$tooth2[] = $session_data2['tooth'];
		$findings2[] = $session_data2['findings'];

		
	}


	if($recordexist){
		foreach($info as $row){
			$datetxt = $row['date'];
			$toothtxt = $row['toothno'];
			$findingstxt = $row['findings'];
		}

		$date = explode("|", $datetxt);
		$tooth = explode("|", $toothtxt);
		$findings = explode("|", $findingstxt);

		
	}
?>
 <body>
  
<div class="maindiv">
	<?php include('patient_header.php'); ?>

<div id="Content_Area">

	<form id="ADDRADIOGRAPHICEXAM" name="ADDRADIOGRAPHICEXAM" action="<?php echo base_url();?>index.php/verifyaddradiographicexam" method="post">

<br><a href="<?php echo base_url();?>index.php/loaddashboard/patientdb/<?php echo $id; ?>"> Dashboard </a> &nbsp; <a href="<?php echo base_url();?>index.php/viewradioexamversions"> View Versions </a><br><br>

<div class="validationexc" style="display: <?php if($this->session->userdata('has_error')) echo 'block'; else 'none' ?>;">
   		<?php $session_data = $this->session->userdata('has_error');
     		echo $session_data['error'];
	?>
</div>
<div style="position: relative; text-align:right; color: red; right: 5%;"><i>* means required</i></div>
		<table frame="box" class="frame" id="radio">
		<tr class=header>
			<td colspan=4>Radiographic Exam
		</tr>
		<tr>
			<td>
			<td>Date <font color="red">*</font>
			<td>Tooth No. <font color="red">*</font>
			<td>Findings <font color="red">*</font>
		</tr>
		<?php
		if($invalid_input){
			$size = sizeof($date2[0]);
			for($i=0; $i<$size; $i++){
				echo "<tr>";
					echo "<td><input type='checkbox' name=$id id='ck$i' checked /></td>";
					echo "<td><input type='text' name='date[]' class='datepicker' id='date$i' value='".$date2[0][$i]."'/></td>
					<td><input type='text' name='tooth[]' id='toothnum_$i' value='".$tooth2[0][$i]."' /></td>
					<td><textarea name='findings[]' id='findings_$i' cols='40'>".$findings2[0][$i]."</textarea></td>
				</tr>";
			}
		}
		elseif($recordexist){
			$size = sizeof($date);
			for($i=0; $i<$size; $i++){
				echo "<tr>";
					echo "<td><input type='checkbox' name=$id id='ck$i' checked /></td>";
					echo "<td><input type='text' name='date[]' class='datepicker' id='date$i' value='".$date[$i]."'/></td>
					<td><input type='text' name='tooth[]' id='toothnum_$i' value='".$tooth[$i]."' /></td>
					<td><textarea name='findings[]' id='findings_$i' cols='40' >".$findings[$i]."</textarea></td>
				</tr>";
			}
		}
		else
			echo "<tr>
			<td><input type='checkbox' name=0 id='ck0' /></td>
			<td><input type='text' name='date[]' class='datepicker' id='date0' /></td>
			<td><input type='text' name='tooth[]' id='toothnum_0' /></td>
			<td><textarea name='findings[]' id='findings_0' cols=40></textarea></td>
			</tr>";
		?>
		</table><br><br>
		<input type="button" onClick="addRadio('radio')" value="Add Row">
		<input type="button" onClick="deleteRadio('radio')" value="Delete Row/s"><br><br>
		<input type="submit" value="Save"/> <input type="reset" value="Clear entries"/>
</form>

</div>

 </body>
</html>


