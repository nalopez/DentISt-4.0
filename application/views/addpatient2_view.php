<?php 
	include('header.php'); 
	include('navigation.php');
	echo "<link rel=\"stylesheet\" type=\"text/css\" href='".base_url()."css/style.css'>";
	echo "<script type\"text/javascript\" src=\"".base_url()."js/dynamic.js\"></script>"
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
 <head>
<link href="<?php echo base_url(); ?>css/ui-lightness/jquery-ui-1.10.3.custom.css" rel="stylesheet">
	<script src="<?php echo base_url(); ?>js/jquery-1.9.1.js"></script>
	<script src="<?php echo base_url(); ?>js/jquery-ui-1.10.3.custom.js"></script>

   <title>Add User - Oral Diagnosis</title>

<script>
function tab(tab) {
	document.getElementById('tab1').style.display = 'none';
	document.getElementById('tab2').style.display = 'none';
	document.getElementById('tab3').style.display = 'none';
	document.getElementById('tab4').style.display = 'none';
	document.getElementById('tab5').style.display = 'none';
	document.getElementById('li_tab1').setAttribute("class", "");
	document.getElementById('li_tab2').setAttribute("class", "");
	document.getElementById('li_tab3').setAttribute("class", "");
	document.getElementById('li_tab4').setAttribute("class", "");
	document.getElementById('li_tab5').setAttribute("class", "");
	document.getElementById(tab).style.display = 'block';
	document.getElementById('li_'+tab).setAttribute("class", "active");
	document.getElementById('li_'+tab).setAttribute("class", "selected");
}

function getAge(value) {
    	var today = new Date();
    	var birthDate = new Date(value);
    	var age = today.getFullYear() - birthDate.getFullYear();
    	var m = today.getMonth() - birthDate.getMonth();
    	if (m < 0 || (m === 0 && today.getDate() < birthDate.getDate())) {
        age--;
    	}
    	
	document.getElementById('age').value = age;
	
	if(age >= 12){
		document.getElementById('wt').readOnly = true;
	}
	else{
		document.getElementById('wt').readOnly = false;
	}
}

function showHosp(element, value) {

	if(element == "ishosp"){
	    	if(value == "Yes"){
			document.getElementById('hosptb').style.display = "block";
		}
		else
			document.getElementById('hosptb').style.display = "none";
	}
	else if(element == "uapc"){
	    	if(value == "Yes"){
			document.getElementById('phytb').style.display = "block";
		}
		else
			document.getElementById('phytb').style.display = "none";
	}
	else if(element == "cig"){
	    	if(value == "Yes"){
			document.getElementById('cigtb').style.display = "block";
		}
		else
			document.getElementById('cigtb').style.display = "none";
	}
	else if(element == "alco"){
	    	if(value == "Yes"){
			document.getElementById('alcotb').style.display = "block";
		}
		else
			document.getElementById('alcotb').style.display = "none";
	}
	else if(element == "drug"){
	    	if(value == "Yes"){
			document.getElementById('drugtb').style.display = "block";
		}
		else
			document.getElementById('drugtb').style.display = "none";
	}
}

var fieldNum;
var i=0;

function addRadio(tableID){
	fieldNum= i+1;
	alert(fieldNum);
			
	var table = document.getElementById(tableID);
	var numRows = table.rows.length;
	var row = table.insertRow(numRows);
	row.align = "center";

	var cellA = row.insertCell(0);
	cellA.innerHTML ="<input type='checkbox' name='"+fieldNum+"' id='ck"+fieldNum+"'>";
	var cellB = row.insertCell(1);
	cellB.innerHTML ="<input type='text' name='date[]' class='datepicker' id='date" + fieldNum +"'>";
	var cellC = row.insertCell(2);
	cellC.innerHTML ="<input type='text' name='tooth[]' id='toothnum_" + fieldNum +"' size=1px >";
	var cellD = row.insertCell(3);
	cellD.innerHTML ="<textarea name='findings[]' id='findings_" + fieldNum +"'></textarea>";
	var cellE = row.insertCell(4);
	cellE.innerHTML ="<input type='text' name='clinician[]' id='clinician_" + fieldNum +"'>";

	var str = '#date'+fieldNum;
	$(str).datepicker({
		dateFormat: 'yy-mm-dd',
			showAnim: 'slideDown',
				changeMonth: true,
				changeYear: true,
				yearRange: '1910:2013'
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

var fieldNum2;
var j=0;

function addConsult(tableID){
	fieldNum2= j+1;
			
	var table = document.getElementById(tableID);
	var numRows = table.rows.length;
	var row = table.insertRow(numRows);
	row.align = "center";

	var cellA = row.insertCell(0);
	cellA.innerHTML ="<input type='checkbox' name='"+fieldNum+"' id='ck"+fieldNum2+"'>";
	var cellB = row.insertCell(1);
	cellB.innerHTML ="<input type='text' name='date[]' class='datepicker' id='date_" + fieldNum2 +"' size=2px>";
	var cellC = row.insertCell(2);
	cellC.innerHTML ="<input type='text' name='reason[]' id='reason_" + fieldNum2 +"' size=7px>";
	var cellD = row.insertCell(3);
	cellD.innerHTML ="<input type='text' name='startdate[]' class='datepicker' id='startdate_" + fieldNum2 +"' size=2px>";
	var cellE = row.insertCell(4);
	cellE.innerHTML ="<input type='text' name='enddate[]' class='datepicker' id='enddate_" + fieldNum2 +"' size=2px>";
	var cellF = row.insertCell(5);
	cellF.innerHTML ="<textarea name='findings2[]' id='findings2_" + fieldNum2 +"'></textarea>";
	var cellG = row.insertCell(6);
	cellG.innerHTML ="<input type='text' name='clinician2[]' id='clinician2_" + fieldNum2 +"' size=7px>";
	var cellH = row.insertCell(7);
	cellH.innerHTML ="<input type='text' name='clinician2_nat[]' id='clinician2nat_" + fieldNum2 +"' size=7px>";
	var cellI = row.insertCell(8);
	cellI.innerHTML ="<input type='text' name='fac[]' id='fac_" + fieldNum2 +"' size=7px>";

	j++;

	var str = '#date_'+fieldNum2;
	$(str).datepicker({
		dateFormat: 'yy-mm-dd',
		showAnim: 'slideDown',
		changeMonth: true,
		changeYear: true,
		yearRange: '1910:2013'
    	});
			
	var str2 = '#startdate_'+fieldNum2;
	$(str2).datepicker({
		dateFormat: 'yy-mm-dd',
		showAnim: 'slideDown',
		changeMonth: true,
		changeYear: true,
		yearRange: '1910:2013'
    	});

	var str3 = '#enddate_'+fieldNum2;
	$(str3).datepicker({
		dateFormat: 'yy-mm-dd',
		showAnim: 'slideDown',
		changeMonth: true,
		changeYear: true,
		yearRange: '1910:2013'
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


	var url = "/var/www/DentISt/";
	$(function() {/*
		$( "#birthdate" ).datepicker({
			changeMonth: true,
			changeYear: true,
			yearRange: '1910:2013'
    		});

		$( "#dolv" ).datepicker({
			changeMonth: true,
			changeYear: true,
			yearRange: '1910:2013'
    		});

		$( "#hospdate" ).datepicker({
			changeMonth: true,
			changeYear: true,
			yearRange: '1910:2013'
    		});
	
		$( "#cigdole" ).datepicker({
			changeMonth: true,
			changeYear: true,
			yearRange: '1910:2013'
    		});
	
		$( "#alcodole" ).datepicker({
			changeMonth: true,
			changeYear: true,
			yearRange: '1910:2013'
    		});
	
		$( "#drugdole" ).datepicker({
			changeMonth: true,
			changeYear: true,
			yearRange: '1910:2013'
    		});
	
		$( "#hnt" ).datepicker({
			changeMonth: true,
			changeYear: true,
			yearRange: '1910:2013'
    		});
	
		$( "#lfn" ).datepicker({
			changeMonth: true,
			changeYear: true,
			yearRange: '1910:2013'
    		});
	
		$( "#muc" ).datepicker({
			changeMonth: true,
			changeYear: true,
			yearRange: '1910:2013'
    		});
	
		$( "#sal" ).datepicker({
			changeMonth: true,
			changeYear: true,
			yearRange: '1910:2013'
    		});
	
		$( "#thy" ).datepicker({
			changeMonth: true,
			changeYear: true,
			yearRange: '1910:2013'
    		});

		$( "#plt" ).datepicker({
			changeMonth: true,
			changeYear: true,
			yearRange: '1910:2013'
    		});

		$( "#prx" ).datepicker({
			changeMonth: true,
			changeYear: true,
			yearRange: '1910:2013'
    		});

		$( "#ftm" ).datepicker({
			changeMonth: true,
			changeYear: true,
			yearRange: '1910:2013'
    		});

		$( "#tng" ).datepicker({
			changeMonth: true,
			changeYear: true,
			yearRange: '1910:2013'
    		});

		$( "#lym" ).datepicker({
			changeMonth: true,
			changeYear: true,
			yearRange: '1910:2013'
    		});

		$( "#ggv" ).datepicker({
			changeMonth: true,
			changeYear: true,
			yearRange: '1910:2013'
    		});

		$('#date0').datepicker({
			dateFormat: 'yy-mm-dd',
			showAnim: 'slideDown',
			changeMonth: true,
			changeYear: true,
			yearRange: '1910:2013'
    		});
		
		$('#date_0').datepicker({
			dateFormat: 'yy-mm-dd',
			showAnim: 'slideDown',
			changeMonth: true,
			changeYear: true,
			yearRange: '1910:2013'
    		});
			
		$('#startdate_0').datepicker({
			dateFormat: 'yy-mm-dd',
			showAnim: 'slideDown',
			changeMonth: true,
			changeYear: true,
			yearRange: '1910:2013'
	    	});

		$('#enddate_0').datepicker({
			dateFormat: 'yy-mm-dd',
			showAnim: 'slideDown',
			changeMonth: true,
			changeYear: true,
			yearRange: '1910:2013'
	    	});*/

		$('.datepicker').each(function(){
    			$(this).datepicker({
				dateFormat: 'yy-mm-dd',
				showAnim: 'slideDown',
				changeMonth: true,
				changeYear: true,
				yearRange: '1910:2013'
			});
		});

	});
	
</script>
	

 </head>
<?php 
	$session_data = $this->session->userdata('logged_in');
     	$usernamelog = $session_data['username'];
?>
 <body>
  
<div class="validation" style="display:<?if(validation_errors() == true) echo 'block'; else echo 'none'?>">
   <?php echo validation_errors(); ?>
</div>
<div class="maindiv" style="border:0px;">

  	<form id="ADDPATIENT" name="ADDPATIENT" action="verifyaddpatient" method="post">
	<div id="Tabs">
	<ul>
	<li id="li_tab1" onclick="tab('tab1')" class="selected"><a>Patient Information</a></li>
	<li id="li_tab2" onclick="tab('tab2')"><a>Patient History</a></li>
	<li id="li_tab3" onclick="tab('tab3')"><a>Examination</a></li>
	<li id="li_tab4" onclick="tab('tab4')"><a>Treatment Plan</a></li>
	<li id="li_tab5" onclick="tab('tab5')"><a>Consultation & Referral</a></li>
	</ul>
<div id="Content_Area" style="border: solid 1px #7F00FF;">
<div id="tab1">
	 <h3 align="center">Admitting Section Patient Form</h3>	
	<table align="center">
	<tr>
		<td width="20%"><label for="firstname">Name:</label>  
		<td><input type="text" name="firstname" placeholder="Given Name" size="15"><input type="text" name="midname" placeholder="Middle Name" size="15"><input type="text" name="lastname" placeholder="Surname" size="15">
	</tr>
	<tr>
		<td width="20%"><label for="address">Address:</label> 
		<td><input type="text" name="houseno" placeholder="No." size=4><input type="text" name="street" placeholder="Street">
			<input type="text" name="brgy" placeholder="Baranggay"><br>
			<input type="text" name="city" placeholder="City/Municipality"><input type="text" name="province" placeholder="Province">
	</tr>
</table>

		<label for="sex">Sex: </label>
		<select name="sex" id="sex">
		<option value="Select one.." selected> Select one.. </option>		
		<option value="Male"> Male </option>
		<option value="Female"> Female </option>
		</select> &nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp; 
		<label for="bdate">Birthdate:
		<input type="text" class="datepicker" id="birthdate" name="bdate" onchange="getAge(this.value);"> &nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp; 
		<label for="age">Age:
		<input type="text" name="age" id ="age" size=2 readonly>

	<table align="center">
	<tr>
		<td><label for="civstat">Civil Status: </td>
		<td><select name="civstat" id="civstat">
		<option value="Select one.." selected> Select one.. </option>		
		<option value="Single"> Single </option>
		<option value="Married"> Married </option>
		<option value="Separated"> Separated </option>
		<option value="Divorced"> Divorced </option>
		<option value="Widowed"> Widowed </option>
		</select></td>
		<td><label for="phone">Phone:</td>
		<td><input type="text" name="phone" placeholder="Phone Number"></td>
	</tr>
	<tr>
		<td><label for="edattain">Educational Attainment:
		<td><select name="edattain">
			<option>Elementary Graduate</option>
			<option>High School Graduate</option>
			<option>College Graduate</option>
			<option>Master's Decree</option>
		<td><label for="occupation">Occupation:
		<td><input type="text" name="occupation">
	</tr>
	</table><br>
	
	<table align=center>
	<tr>
		<td><label for="ptnicoe">Person to notify <br>in-case of emergency:</td>
		<td><input type="text" name="ptnicoe">
		<td><label for="ptnicoenum">Phone:
		<td><input type="text" name="ptnicoenum">
	</tr>
	</table><br>
	<table style="position: relative; left: 13%;">
	<tr>
		<td><label for="servcode">Service Code: 
		<td><select name="servcode" id="servcode">
		<option value="Select one.." selected> Select one.. </option>		
		<option value="Resto"> Resto </option>
		<option value="FPD"> FPD </option>
		<option value="PEDO"> PEDO </option>
		<option value="CD"> CD </option>
		<option value="RPD"> RPD </option>
		<option value="ENDO"> ENDO </option>
		<option value="PERIO"> PERIO </option>
		<option value="OS"> OS </option>
		<option value="Ortho"> Ortho </option>
		</select></td>
	</tr>
	<tr>
		<td> Chief Complaints:
		<td><textarea name="chiefcomp" id="chiefcomp"></textarea>
	</tr>
	<tr>
		<td> History of Present Illness:
		<td><textarea name="hopi" id="hopi"></textarea>
	</tr>	
	</table><br>
</div>


	<div id="tab2" style="display: none;">
		<h3 align="center">Dental History</h3>

		<table align="center">
		<tr>
			<td width="68%">Date of last visit:
			<td><input type="text" class="datepicker" name="dolv" id="dolv">
		</tr>
		<tr>
			<td width="68%">Procedures done on last visit:
			<td><textarea name="pdolv" cols="30"></textarea>
		</tr>
		<tr>
			<td width="68%">Frequency of dental visit:
			<td><input type="text" name="fodv">
		</tr>
		<tr>
			<td width="68%">Exposure or response to local anesthesia</td>
			<td><input type="text" name="eortle">
		</tr>
		<tr>
			<td width="68%">Complications during and or after dental procedure</td>
			<td><textarea name="cdaoadp" cols="30"></textarea>
		</tr>
		</table>

		<h3 align="center">Physical Assessment</h3>

		<h4 align="left" style="position:relative; left: 12%">General:</h4>
		<table align="center" width=75%>
			<td>Gait:<input type="text" name="gait" size=12px> 
			<td>Appearance:<input type="text" name="appear" size=12px>
			<td>Defects:<input type="text" name="dfcts" size=12px> 
		</table>

		<h4 align="left" style="position:relative; left: 12%">Vital Signs: <i>(to be filled up as dictated by the medical history and/or procedures <br>to be done.)</i></h4>
		<table align="center">
		<tr>
			<td>BP:
			<td><input type="text" name="dias" maxlength=3 size=1px>/<input type="text" name="sys" size=1px maxlength=3>
			<td>PR:
			<td><input type="text" name="pr" maxlength=3 size=1px placeholder="bpm">
			<td>RR:
			<td><input type="text" name="rr" size=1px>
			<td>Temperature<br>(if febrile):
			<td><input type="text" name="temp" maxlength=5 size="1px" placeholder="celsius"> &nbsp;
			<td>Weight <br>(<12y.o.):
			<td><input type="text" name="wt" id="wt" maxlength=5 size="5px" placeholder="kilograms"> &nbsp;
		</tr>
		</table><br>
		
		<h3 align="center">Medical History</h3>

		<table align="center">
		<tr>
			<td width=85%>Under a physician's care? </td>
			<td><input type="radio" name="uapc" value="Yes" onClick="showHosp(this.name, this.value)"> Yes <input type="radio" name="uapc" value="No" onClick="showHosp(this.name, this.value)"> No </td>
		</tr>
		</table>
			
		<div id="phytb" style="display: none; left:20%; position: relative;">
			<table>
			<tr>
				<td>Name: 
				<td><input type="text" name="physicianname">
			</tr>
			<tr>
				<td>Phone number: 
				<td><input type="text" name="physicianphone">
			</tr>
			</table>
		</div>
		
		<table align="center">
		<tr>
			<td width="85%">Is hospitalized? </td>
			<td><input type="radio" name="ishosp" value="Yes" onClick="showHosp(this.name, this.value)"> Yes <input type="radio" name="ishosp" value="No" onClick="showHosp(this.name, this.value)"> No </td>
		</tr>
		</table>

		<div id="hosptb" style="display: none; left:20%; position: relative;">
				<table>
				<tr>
					<td>Date of hospitalization: 
					<td><input type="text" name="hospdate" id="hospdate" class="datepicker">
				</tr>
				<tr>
					<td>Reason: 
					<td><input type="text" name="hospreason">
				</tr>
				</table>
		</div>

		<table align="center">
		<tr>
			<td width="68%">Allergies: 
			<td><input type="text" name="allergy">
		</tr>
		<tr>
			<td width="68%">Illnesses
			<td><input type="text" name="illnesses">
		</tr>
		<tr>
			<td width="68%">Medications
			<td><input type="text" name="medications">
		</tr>
		<tr>
			<td width="68%">Childhood illnesses (below 18 y.o.)
			<td><input type="text" name="ci">
		</tr>
		</table><br>

		<h3 align="center">Social History</h3>	
		
		<table align="center">
		<tr>
			<td width=85%>Are you using or have you used tobacco/cigarettes?
			<td><input type="radio" name="cig" value="Yes" onClick="showHosp(this.name, this.value)"> Yes <input type="radio" name="cig" value="No" onClick="showHosp(this.name, this.value)"> No 
		</tr>
		</table>
		<div id="cigtb" style="display: none; left:20%; position: relative;">
			<table>
				<tr>
					<td>Type: 
					<td><input type="text" name="cigkind">
				</tr>
				<tr>
					<td>Frequency: 
					<td><input type="text" name="cigfreq">
				</tr>
				<tr>
					<td>Duration: 
					<td><input type="text" name="cigdur">
				</tr>
				<tr>
					<td>Date of last exposure: 
					<td><input type="text" name="cigdole" id="cigdole" class=datepicker>
				</tr>
			</table>
		</div>
		
		<table align="center">
		<tr>
			<td width=85%>Do you drink alcoholic beverages? 
			<td><input type="radio" name="alco" value="Yes" onClick="showHosp(this.name, this.value)"> Yes <input type="radio" name="alco" value="No" onClick="showHosp(this.name, this.value)"> No 
		</tr>
		</table>

		<div id="alcotb" style="display: none; left:20%; position: relative;">
			<table>
				<tr>
					<td>Type: 
					<td><input type="text" name="alcokind">
				</tr>
				<tr>
					<td>Frequency: 
					<td><input type="text" name="alcofreq">
				</tr>
				<tr>
					<td>Duration: 
					<td><input type="text" name="alcodur">
				</tr>
				<tr>
					<td>Date of last exposure: 
					<td><input type="text" name="alcodole" id="alcodole" class="datepicker">
				</tr>
			</table>
		</div>
		<table align="center">
		<tr>
			<td width="85.5%">Have you ever used drugs for recreation<br>or non-therapeutic purposes? 
			<td><input type="radio" name="drug" value="Yes" onClick="showHosp(this.name, this.value)"> Yes <input type="radio" name="drug" value="No" onClick="showHosp(this.name, this.value)"> No 
		</tr>
		</table>
		
		<div id="drugtb" style="display: none; left:20%; position: relative;">
			<table>
				<tr>
					<td>Type: 
					<td><input type="text" name="drugkind">
				</tr>
				<tr>
					<td>Frequency: 
					<td><input type="text" name="drugfreq">
				</tr>
				<tr>
					<td>Duration: 
					<td><input type="text" name="drugdur">
				</tr>
				<tr>
					<td>Date of last exposure: 
					<td><input type="text" name="drugdole" class="datepicker" id="drugdole">
				</tr>
			</table>
		</div>
		
		<br><br>
		

	</div>
	<div id="tab3" style="display: none;">
		<h3 align="center">Soft Tissue Examination</h3>
		<table align="center" style="text-align: center;">
			<tr>
				<td>
				<td>Date
				<td>Description
			</tr>
			<tr>
				<td>Head, neck and TMJ
				<td><input type="text" class="datepicker" name="hnt" id="hnt">
				<td><textarea id="hntd" name="hntd" cols=50></textarea>
			</tr>
			<tr>
				<td>Lips/Frenum
				<td><input type="text" class="datepicker" name="lfn" id="lfn">
				<td><textarea id="lfnd" name="lfnd" cols=50></textarea>
			</tr>
			<tr>
				<td>Mucosa
				<td><input type="text" class="datepicker" name="muc" id="muc">
				<td><textarea id="mucd" name="mucd" cols=50></textarea>
			</tr>
			<tr>
				<td>Palate
				<td><input type="text" class="datepicker" name="plt" id="plt">
				<td><textarea id="pltd" name="pltd" cols=50></textarea>
			</tr>
			<tr>
				<td>Pharynx
				<td><input type="text" class="datepicker" name="prx" id="prx">
				<td><textarea id="prxd" name="prxd" cols=50></textarea>
			</tr>
			<tr>
				<td>Floor of the mouth
				<td><input type="text" class="datepicker" name="ftm" id="ftm">
				<td><textarea id="ftmd" name="ftmd" cols=50></textarea>
			</tr>
			<tr>
				<td>Tongue
				<td><input type="text" class="datepicker" name="tng" id="tng">
				<td><textarea id="tngd" name="tngd" cols=50></textarea>
			</tr>
			<tr>
				<td>Lymph nodes
				<td><input type="text" class="datepicker" name="lym" id="lym">
				<td><textarea id="lymd" name="lymd" cols=50></textarea>
			</tr>
			<tr>
				<td>Salivary Gland
				<td><input type="text" class="datepicker" name="sal" id="sal">
				<td><textarea id="sald" name="sald" cols=50></textarea>
			</tr>
			<tr>
				<td>Thyroid
				<td><input type="text" class="datepicker" name="thy" id="thy">
				<td><textarea id="thyd" name="thyd" cols=50></textarea>
			</tr>
			<tr>
				<td>Gingiva
				<td><input type="text" class="datepicker" name="ggv" id="ggv">
				<td><textarea id="ggvd" name="ggvd" cols=50></textarea>
			</tr>
		</table>
		<h3 align="center">Radiographic Examination</h3>
		<table id="radio" align="center" style="text-align:center;">
			<tr>
				<td>
				<td>Date
				<td>Tooth No.
				<td>Findings
				<td>Clinician Name
			</tr>
			<tr>
				<td><input type="checkbox" name=0 id="ck0" /></td>
				<td><input type="text" name="date[]" class="datepicker" id="date0" /></td>
				<td><input type="text" name="tooth[]" id="toothnum_0" size=1px /></td>
				<td><textarea name="findings[]" id="findings_0"></textarea></td>
				<td><input type="text" name="clinician[]" id="clinician_0" /></td>
			</tr>
		</table>
		<input type="button" onClick="addRadio('radio')" value="Add Row">
		<input type="button" onClick="deleteRadio('radio')" value="Delete Row/s"><br><br>
		<h3 align="center">Dental Status Chart</h3>
	</div>
	<div id="tab4" style="display: none;">
		<h3 align="center">Proposed Treatment Plan</h3>
		
	</div>
	<div id="tab5" style="display: none;">
		<h3 align="center">Consultation or Referral</h3><br>
		<table id="consult" align="center" style="text-align:center;">
			<tr>
				<td>
				<td>Date
				<td>Reason for<br>Consult
				<td>From
				<td>To
				<td>Findings or<br>Recommendation
				<td>Clinician Name
				<td>Clinician Nature
				<td>Faculty
			</tr>
			<tr>
				<td><input type='checkbox' name='0' id='ck0'>
				<td><input type='text' name='date[]' class='datepicker' id='date_0' size=2px>
				<td><input type='text' name='reason[]' id='reason_0' size=7px>
				<td><input type='text' name='startdate[]' class='datepicker' id='startdate_0' size=2px>
				<td><input type='text' name='enddate[]' class='datepicker' id='enddate_0' size=2px>
				<td><textarea name='findings2[]' id='findings2_0'></textarea>
				<td><input type='text' name='clinician2[]' id='clinician2_0' size=7px>
				<td><input type='text' name='clinician2_nat[]' id='clinician2nat_0' size=7px>
				<td><input type='text' name='fac[]' id='fac_0' size=7px>
			</tr>
		</table>
		<input type="button" onClick="addConsult('consult')" value="Add Row">
		<input type="button" onClick="deleteConsult('consult')" value="Delete Row/s"><br><br><br>

		<input type="submit" value="Add Patient"/> <input type="reset" value="Clear entries"/><br><br><br>
	</div>
   </form>

</div>
</div>
</div>

 </body>
</html>


