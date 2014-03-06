<?php 
	include('header.php'); 
	//include('navigation.php');
	
	echo "<link rel=\"stylesheet\" type=\"text/css\" href='".base_url()."css/style.css'>";
	echo "<script type=\"text/javascript\" src=\"".base_url()."js/dynamic.js\"></script>";
	echo "<script type=\"text/javascript\" src=\"".base_url()."js/patientdb.js\"></script>";
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
 <head>

<meta charset="utf-8">
<link href="<?php echo base_url(); ?>css/ui-lightness/jquery-ui-1.10.3.custom.css" rel="stylesheet">
	<script src="<?php echo base_url(); ?>js/jquery-1.9.1.js"></script>
	<script src="<?php echo base_url(); ?>js/jquery-ui-1.10.3.custom.js"></script>

   <title>Statistics - Oral Diagnosis</title>
<link rel="shortcut icon" href="<?php echo base_url(); ?>images/upcd-20140224-favicon.ico">	

<script>
	$("#datefrom").datepicker({
		dateFormat: 'yy-mm-dd',
		showAnim: 'slideDown',
		changeMonth: true,
		changeYear: true,
		yearRange: '1910:2014',
		onClose: function( selectedDate ) {
        		$( "#dateto" ).datepicker( "option", "minDate", selectedDate );
      		}
    	});
	
	$("#dateto").datepicker({
		dateFormat: 'yy-mm-dd',
		showAnim: 'slideDown',
		changeMonth: true,
		changeYear: true,
		yearRange: '1910:2014',
		onClose: function( selectedDate ) {
        		$( "#datefrom" ).datepicker( "option", "maxDate", selectedDate );
      		}
    	});
	
</script>

<script type="text/javascript">
	
	function goBack(){
		 window.history.back()
	}
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
<br><br>
<div style="border: 2px #7F00FF solid; text-align: center; -moz-border-radius: 12px; border-radius: 12px;">
<h3 align="left" style="left: 1%;position: relative;">Statistics</h3>

  	<form id="SEARCHPATIENT" name="SEARCHPATIENT" action="<?php echo base_url();?>index.php/querypatient" method="post">
	
	<table frame="box" class="frame" style="width:98%; left:1%;">
		<tr class="header">
			<td colspan=4> Demographics
		</tr>
		<tr>
			<td>Specify range of date
			<td colspan=2>
				<input type="text" class="datepicker" name="datefrom" id="datefrom" placeholder="From"> - 
				<input type="text" name="dateto" id="dateto" class="datepicker" placeholder="To">
			<td>
		</tr>
		<tr>
			<td>Age
			<td colspan=2><input type="text" name="agefrom" placeholder="From"> - 
			<input type="text" name="ageto" placeholder="To">
			<td>
		</tr>
		<!--<tr>
			<td>Gender
			<td><input type="radio" name="gendersearch" value="Male">M &nbsp; <input type="radio" name="gendersearch" value="Female">F &nbsp; <input type="radio" name="gendersearch" value="">Both &nbsp; 
			<td>
			<td>
		</tr>-->
		<tr>
			<td>City
			<td><input type="text" name="citysearch"> 
			<td>
			<td>
		<!--</tr>
		<tr>
			<td>Occupation
			<td><input type="text" name="occsearch">
			<td>
			<td> 
		</tr>-->
		<tr>
			<td colspan=4>&nbsp;
		</tr>	
		<tr class="header">
			<td colspan=2>Other Conditions (Using Demographics)</td>
			<td>
			<td style='text-align:right;'><input type="checkbox"> Or | <input type="checkbox"> And
		</tr>
		<tr>
			<td colspan=4>&nbsp;
		</tr>	
		<tr class=header>
			<td colspan=2>Sections
			<td>
			<td style='text-align:right;'><input type="checkbox"> Select All
		</tr>
		<tr>
			<td><b>Operative Dentistry</b>
			<td><b>Oral Medicine</b>
			<td><b>Prosthodontics</b>
			<td>
		</tr>
		<tr>
			<td><input type="checkbox" name="perio" value="Yes">Periodontics
			<td><input type="checkbox" name="rpd" value="Yes">Removable Prosthodontics
			<td><input type="checkbox" name="ortho" value="Yes">Orthodontics
			<td>
		</tr>
		<tr>
			<td><input type="checkbox" name="os" value="Yes">Oral Surgery
			<td><input type="checkbox" name="fpd" value="Yes">Fixed Partial Prosthodontics
			<td><input type="checkbox" name="pedo" value="Yes">Pedodontics
			<td>
		</tr>
		<tr>
			<td><input type="checkbox" name="endo" value="Yes">Endodontics
			<td><input type="checkbox" name="cd" value="Yes">Complete Denture
			<td><input type="checkbox" name="resto" value="Yes">Restorative Dentistry
			<td>
		</tr>
		<tr>
			<td colspan=4>&nbsp;
		</tr>	
		<tr class="header">
			<td colspan=2>Dental Condition
			<td>
			<td style='text-align:right;'><input type="checkbox"> Or | <input type="checkbox"> And | <input type="checkbox"> Select All
		</tr>
		<tr>
			<td><input type="checkbox" name="caries" value="Yes">Caries
			<td><input type="checkbox" name="extrusion" value="Yes">Extrusion
			<td><input type="checkbox" name="compdent" value="Yes">Complete Denture
			<td><input type="checkbox" name="impacted" value="Yes">Impacted
		</tr>
		<tr>
			<td><input type="checkbox" name="recurrent" value="Yes">Recurrent Caries
			<td><input type="checkbox" name="intrusion" value="Yes">Intrusion
			<td><input type="checkbox" name="singdent" value="Yes">Single Denture
			<td><input type="checkbox" name="missing" value="Yes">Missing
		</tr>
		<tr>
			<td><input type="checkbox" name="restoration" value="Yes">Restoration
			<td><input type="checkbox" name="mdr" value="Yes">Mesial Drifting Rotation
			<td><input type="checkbox" name="rempardent" value="Yes">Removable Partial Denture
			<td><input type="checkbox" name="acrcr" value="Yes">Acrylic Crown
		</tr>
		<tr>
			<td><input type="checkbox" name="pftm" value="Yes">Porcelain Fused To Metal
			<td><input type="checkbox" name="ddr" value="Yes">Distal Drifting Rotation
			<td><input type="checkbox" name="pafs" value="Yes">Pit and Fissure Sealants
			<td><input type="checkbox" name="metcr" value="Yes">Metal Crown
		</tr>
		<tr>
			<td><input type="checkbox" name="rot" value="Yes">Rotation
			<td><input type="checkbox" name="rct" value="Yes">Root Canal Treatment
			<td><input type="checkbox" name="pcc" value="Yes">Post Core Crown
			<td>
		</tr>
		<tr>
			<td><input type="checkbox" name="extracted" value="Yes">Extracted
			<td><input type="checkbox" name="unerupted" value="Yes">Unerupted
			<td><input type="checkbox" name="porcr" value="Yes">Porcelain Crown
			<td>
		</tr>
		<tr>
			<td colspan=4>&nbsp;
		</tr>	
		<tr class="header">
			<td colspan=2>Services Needed
			<td>
			<td style='text-align:right;'><input type="checkbox"> Or | <input type="checkbox"> And | <input type="checkbox"> Select All
		</tr>
		<tr>
			<td colspan=4><u>Periodontics</u>
		<tr>
		<tr>
			<td colspan=4><input type="checkbox" name="mopd">Management of Periodontal Disease
		</tr>
		<tr>
			<td><br><u>Operative Dentistry</u>
			<td><br><u>Surgery</u>
			<td><br><u>Emergency Treatment</u>
		</tr>
		<tr>
			<td><input type="checkbox" name="class1" value="Yes">Class I
			<td><input type="checkbox" name="extraction" value="Yes">Extraction
			<td><input type="checkbox" name="pulpsed" value="Yes">Pulp Sedation
			<td>
		</tr>
		<tr>
			<td><input type="checkbox" name="class2" value="Yes">Class II
			<td><input type="checkbox" name="odon" value="Yes">Odontectomy
			<td><input type="checkbox" name="roc" value="Yes">Recementation of Crowns
			<td>
		</tr>
		<tr>
			<td><input type="checkbox" name="class3" value="Yes">Class III
			<td><input type="checkbox" name="specclass" value="Yes">Special Class
			<td><input type="checkbox" name="temfill" value="Yes">Temporary Fillings
			<td>
		</tr>
		<tr>
			<td><input type="checkbox" name="class4" value="Yes">Class IV
			<td><input type="checkbox" name="pedodontics" value="Yes">Pedodontics
			<td><input type="checkbox" name="moai" value="Yes">Management of Acute Infections
			<td>
		</tr>
		<tr>
			<td><input type="checkbox" name="class5" value="Yes">Class V
			<td><input type="checkbox" name="orthodontics" value="Yes">Orthodontics
			<td><input type="checkbox" name="moti" value="Yes">Management of Temporary Injuries
			<td>
		</tr>
		<tr>
			<td><input type="checkbox" name="onlay" value="Yes">Onlay
			<td>
			<td>
			<td>
		</tr>
		<tr>
			<td colspan=4>&nbsp;
		</tr>
		<tr>
			<td><u>Fixed Partial Denture</u>
			<td><u>Prosthodontics</u>
			<td><u>Endodontics</u>
			<td>
		</tr>
		<tr>
			<td><input type="checkbox" name="lamented" value="Yes">Lamented
			<td><input type="checkbox" name="completedenture" value="Yes">Complete Denture
			<td><input type="checkbox" name="anterior" value="Yes">Anterior
			<td>
		</tr>
		<tr>
			<td><input type="checkbox" name="singlecrown" value="Yes">Single Crown
			<td><input type="checkbox" name="singledenture" value="Yes">Single Denture
			<td><input type="checkbox" name="posterior" value="Yes">Posterior
			<td>
		</tr>
		<tr>
			<td><input type="checkbox" name="bridge" value="Yes">Bridge
			<td><input type="checkbox" name="removablepartialdenture" value="Yes">Removable Partial Denture
			<td>
			<td>
		</tr>
	</table>

	<br><input type="submit" value="Search"/> <input type="reset" value="Clear entries"/> <input type="button" value="Go Back" onClick="goBack()"><br>
	</form>	
</div><br><br>

 </body>
</html>


