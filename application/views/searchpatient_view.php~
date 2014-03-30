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

	$session_data = $this->session->userdata('current_patient');
	$id = $session_data['id'];

?>

   <title>Search Patient - <?php echo $section;?></title>
<link rel="shortcut icon" href="<?php echo base_url(); ?>images/upcd-20140224-favicon.ico">	
<script type="text/javascript">
	
	function goBack(){
		 window.history.back()
	}

	function visible(element){
		if(element == "sasections"){
			if(document.getElementById(element).checked){
				document.getElementById('perio').checked = true;
				document.getElementById('ortho').checked = true;
				document.getElementById('pedo').checked = true;
				document.getElementById('cd').checked = true;
				document.getElementById('fpd').checked = true;
				document.getElementById('rpd').checked = true;
				document.getElementById('os').checked = true;
				document.getElementById('endo').checked = true;
				document.getElementById('resto').checked = true;
			} 
			else{
				document.getElementById('perio').checked = false;
				document.getElementById('ortho').checked = false;
				document.getElementById('pedo').checked = false;
				document.getElementById('cd').checked = false;
				document.getElementById('fpd').checked = false;
				document.getElementById('rpd').checked = false;
				document.getElementById('os').checked = false;
				document.getElementById('endo').checked = false;
				document.getElementById('resto').checked = false;
			}
		}
		else if(element == "sadentcond"){
			if(document.getElementById(element).checked){
				document.getElementById('caries').checked = true;
				document.getElementById('extrusion').checked = true;
				document.getElementById('compdent').checked = true;
				document.getElementById('impacted').checked = true;
				document.getElementById('recurrent').checked = true;
				document.getElementById('intrusion').checked = true;
				document.getElementById('singdent').checked = true;
				document.getElementById('missing').checked = true;
				document.getElementById('restoration').checked = true;
				document.getElementById('mdr').checked = true;
				document.getElementById('rempardent').checked = true;
				document.getElementById('acrcr').checked = true;
				document.getElementById('pftm').checked = true;
				document.getElementById('ddr').checked = true;
				document.getElementById('pafs').checked = true;
				document.getElementById('metcr').checked = true;
				document.getElementById('rot').checked = true;
				document.getElementById('rct').checked = true;
				document.getElementById('pcc').checked = true;
				document.getElementById('extracted').checked = true;
				document.getElementById('unerupted').checked = true;
				document.getElementById('porcr').checked = true;
			} 
			else{
				document.getElementById('caries').checked = false;
				document.getElementById('extrusion').checked = false;
				document.getElementById('compdent').checked = false;
				document.getElementById('impacted').checked = false;
				document.getElementById('recurrent').checked = false;
				document.getElementById('intrusion').checked = false;
				document.getElementById('singdent').checked = false;
				document.getElementById('missing').checked = false;
				document.getElementById('restoration').checked = false;
				document.getElementById('mdr').checked = false;
				document.getElementById('rempardent').checked = false;
				document.getElementById('acrcr').checked = false;
				document.getElementById('pftm').checked = false;
				document.getElementById('ddr').checked = false;
				document.getElementById('pafs').checked = false;
				document.getElementById('metcr').checked = false;
				document.getElementById('rot').checked = false;
				document.getElementById('rct').checked = false;
				document.getElementById('pcc').checked = false;
				document.getElementById('extracted').checked = false;
				document.getElementById('unerupted').checked = false;
				document.getElementById('porcr').checked = false;
			}
		}
		else if(element == "saservneed"){
			if(document.getElementById(element).checked){
				document.getElementById('mopd').checked = true;
				document.getElementById('class1').checked = true;
				document.getElementById('extraction').checked = true;
				document.getElementById('pulpsed').checked = true;
				document.getElementById('class2').checked = true;
				document.getElementById('odon').checked = true;
				document.getElementById('roc').checked = true;
				document.getElementById('class3').checked = true;
				document.getElementById('specclass').checked = true;
				document.getElementById('temfill').checked = true;
				document.getElementById('class4').checked = true;
				document.getElementById('pedodontics').checked = true;
				document.getElementById('moai').checked = true;
				document.getElementById('class5').checked = true;
				document.getElementById('orthodontics').checked = true;
				document.getElementById('moti').checked = true;
				document.getElementById('onlay').checked = true;
				document.getElementById('lamented').checked = true;
				document.getElementById('completedenture').checked = true;
				document.getElementById('anterior').checked = true;
				document.getElementById('singlecrown').checked = true;
				document.getElementById('singledenture').checked = true;
				document.getElementById('posterior').checked = true;
				document.getElementById('bridge').checked = true;
				document.getElementById('removablepartialdenture').checked = true;
			} 
			else{
				document.getElementById('mopd').checked = false;
				document.getElementById('class1').checked = false;
				document.getElementById('extraction').checked = false;
				document.getElementById('pulpsed').checked = false;
				document.getElementById('class2').checked = false;
				document.getElementById('odon').checked = false;
				document.getElementById('roc').checked = false;
				document.getElementById('class3').checked = false;
				document.getElementById('specclass').checked = false;
				document.getElementById('temfill').checked = false;
				document.getElementById('class4').checked = false;
				document.getElementById('pedodontics').checked = false;
				document.getElementById('moai').checked = false;
				document.getElementById('class5').checked = false;
				document.getElementById('orthodontics').checked = false;
				document.getElementById('moti').checked = false;
				document.getElementById('onlay').checked = false;
				document.getElementById('lamented').checked = false;
				document.getElementById('completedenture').checked = false;
				document.getElementById('anterior').checked = false;
				document.getElementById('singlecrown').checked = false;
				document.getElementById('singledenture').checked = false;
				document.getElementById('posterior').checked = false;
				document.getElementById('bridge').checked = false;
				document.getElementById('removablepartialdenture').checked = false;
			}
		}
		/**/
	}

	function makeRadio(element){
		if(element == "demo1Or") document.getElementById('demo1And').checked = false;
		if(element == "demo1And") document.getElementById('demo1Or').checked = false;
		if(element == "demo2Or") document.getElementById('demo2And').checked = false;
		if(element == "demo2And") document.getElementById('demo2Or').checked = false;
		if(element == "demo3Or") document.getElementById('demo3And').checked = false;
		if(element == "demo3And") document.getElementById('demo3Or').checked = false;
	}

	function enableDemos(element){
		if(element == "demo1Or" || element == "demo1And"){
			if(document.getElementById(element).checked){
				document.getElementById('sasections').disabled = false;
				document.getElementById('demo2Or').disabled = false;
				document.getElementById('demo2And').disabled = false;
				document.getElementById('demo3Or').disabled = false;
				document.getElementById('demo3And').disabled = false;

				disable_section(false);
			}
			else{
				document.getElementById('sasections').disabled = true;
				document.getElementById('sadentcond').disabled = true;
				document.getElementById('saservneed').disabled = true;
				document.getElementById('demo2Or').disabled = true;
				document.getElementById('demo2And').disabled = true;
				document.getElementById('demo3Or').disabled = true;
				document.getElementById('demo3And').disabled = true;

				document.getElementById('sasections').checked = false;
				document.getElementById('sadentcond').checked = false;
				document.getElementById('saservneed').checked = false;
				document.getElementById('demo2Or').checked = false;
				document.getElementById('demo2And').checked = false;
				document.getElementById('demo3Or').checked = false;
				document.getElementById('demo3And').checked = false;

				visible('sasections');
				disable_section(true);
				visible('sadentcond');
				disable_condition(true);
				visible('saservneed');
				disable_service(true);

			}	
		}
		else if(element == "demo2Or" || element == "demo2And"){
			if(document.getElementById(element).disabled){
				document.getElementById("demo1Or").style.border="solid 1px red";
			}
			else{
				document.getElementById("demo1Or").style.border="solid 1px black";
			}

			if(document.getElementById(element).checked){
				document.getElementById('sadentcond').disabled = false;
				disable_condition(false);

				
			}
			else{
				document.getElementById('sadentcond').disabled = true;
				document.getElementById('sadentcond').checked = false;
				visible('sadentcond');
		
				disable_condition(true);

			}	
		}
		else if(element == "demo3Or" || element == "demo3And"){
			if(document.getElementById(element).checked){
				document.getElementById('saservneed').disabled = false;
				disable_service(false);

				
			}
			else{
				document.getElementById('saservneed').disabled = true;
				document.getElementById('saservneed').checked = false;
				visible('saservneed');
		
				disable_condition(true);

			}	
		}
		
	}

	function disable_section(bool){
		if(bool){
			document.getElementById('perio').disabled = true;
			document.getElementById('ortho').disabled = true;
			document.getElementById('pedo').disabled = true;
			document.getElementById('cd').disabled = true;
			document.getElementById('fpd').disabled = true;
			document.getElementById('rpd').disabled = true;
			document.getElementById('os').disabled = true;
			document.getElementById('endo').disabled = true;
			document.getElementById('resto').disabled = true;
		}
		else{
			document.getElementById('perio').disabled = false;
			document.getElementById('ortho').disabled = false;
			document.getElementById('pedo').disabled = false;
			document.getElementById('cd').disabled = false;
			document.getElementById('fpd').disabled = false;
			document.getElementById('rpd').disabled = false;
			document.getElementById('os').disabled = false;
			document.getElementById('endo').disabled = false;
			document.getElementById('resto').disabled = false;
		}
	}

	function disable_condition(bool){
		if(bool){
			document.getElementById('sadentcond').disabled = true;
			document.getElementById('caries').disabled = true;
			document.getElementById('extrusion').disabled = true;
			document.getElementById('compdent').disabled = true;
			document.getElementById('impacted').disabled = true;
			document.getElementById('recurrent').disabled = true;
			document.getElementById('intrusion').disabled = true;
			document.getElementById('singdent').disabled = true;
			document.getElementById('missing').disabled = true;
			document.getElementById('restoration').disabled = true;
			document.getElementById('mdr').disabled = true;
			document.getElementById('rempardent').disabled = true;
			document.getElementById('acrcr').disabled = true;
			document.getElementById('pftm').disabled = true;
			document.getElementById('ddr').disabled = true;
			document.getElementById('pafs').disabled = true;
			document.getElementById('metcr').disabled = true;
			document.getElementById('rot').disabled = true;
			document.getElementById('rct').disabled = true;
			document.getElementById('pcc').disabled = true;
			document.getElementById('extracted').disabled = true;
			document.getElementById('unerupted').disabled = true;
			document.getElementById('porcr').disabled = true;
		}
		else{
			document.getElementById('sadentcond').disabled = false;
			document.getElementById('caries').disabled = false;
			document.getElementById('extrusion').disabled = false;
			document.getElementById('compdent').disabled = false;
			document.getElementById('impacted').disabled = false;
			document.getElementById('recurrent').disabled = false;
			document.getElementById('intrusion').disabled = false;
			document.getElementById('singdent').disabled = false;
			document.getElementById('missing').disabled = false;
			document.getElementById('restoration').disabled = false;
			document.getElementById('mdr').disabled = false;
			document.getElementById('rempardent').disabled = false;
			document.getElementById('acrcr').disabled = false;
			document.getElementById('pftm').disabled = false;
			document.getElementById('ddr').disabled = false;
			document.getElementById('pafs').disabled = false;
			document.getElementById('metcr').disabled = false;
			document.getElementById('rot').disabled = false;
			document.getElementById('rct').disabled = false;
			document.getElementById('pcc').disabled = false;
			document.getElementById('extracted').disabled = false;
			document.getElementById('unerupted').disabled = false;
			document.getElementById('porcr').disabled = false;
		}
	}

	function disable_service(bool){
		if(bool){
			document.getElementById('mopd').disabled = true;
			document.getElementById('class1').disabled = true;
			document.getElementById('extraction').disabled = true;
			document.getElementById('pulpsed').disabled = true;
			document.getElementById('class2').disabled = true;
			document.getElementById('odon').disabled = true;
			document.getElementById('roc').disabled = true;
			document.getElementById('class3').disabled = true;
			document.getElementById('specclass').disabled = true;
			document.getElementById('temfill').disabled = true;
			document.getElementById('class4').disabled = true;
			document.getElementById('pedodontics').disabled = true;
			document.getElementById('moai').disabled = true;
			document.getElementById('class5').disabled = true;
			document.getElementById('orthodontics').disabled = true;
			document.getElementById('moti').disabled = true;
			document.getElementById('onlay').disabled = true;
			document.getElementById('lamented').disabled = true;
			document.getElementById('completedenture').disabled = true;
			document.getElementById('anterior').disabled = true;
			document.getElementById('singlecrown').disabled = true;
			document.getElementById('singledenture').disabled = true;
			document.getElementById('posterior').disabled = true;
			document.getElementById('bridge').disabled = true;
			document.getElementById('removablepartialdenture').disabled = true;
		}
		else{
			document.getElementById('mopd').disabled = false;
			document.getElementById('class1').disabled = false;
			document.getElementById('extraction').disabled = false;
			document.getElementById('pulpsed').disabled = false;
			document.getElementById('class2').disabled = false;
			document.getElementById('odon').disabled = false;
			document.getElementById('roc').disabled = false;
			document.getElementById('class3').disabled = false;
			document.getElementById('specclass').disabled = false;
			document.getElementById('temfill').disabled = false;
			document.getElementById('class4').disabled = false;
			document.getElementById('pedodontics').disabled = false;
			document.getElementById('moai').disabled = false;
			document.getElementById('class5').disabled = false;
			document.getElementById('orthodontics').disabled = false;
			document.getElementById('moti').disabled = false;
			document.getElementById('onlay').disabled = false;
			document.getElementById('lamented').disabled = false;
			document.getElementById('completedenture').disabled = false;
			document.getElementById('anterior').disabled = false;
			document.getElementById('singlecrown').disabled = false;
			document.getElementById('singledenture').disabled = false;
			document.getElementById('posterior').disabled = false;
			document.getElementById('bridge').disabled = false;
			document.getElementById('removablepartialdenture').disabled = false;
		}
	}

</script>
 </head>
<?php 
	$session_data = $this->session->userdata('logged_in');
     	$usernamelog = $session_data['username'];

?>
 <body>
  

<br><br>
<div style="border: 2px #7F00FF solid; text-align: center; -moz-border-radius: 12px; border-radius: 12px;">
<h3 align="left" style="left: 1%;position: relative;">Query Patient</h3>

  	<form id="SEARCHPATIENT" name="SEARCHPATIENT" action="<?php echo base_url();?>index.php/querypatient" method="post">
	<div class="validation" style="display:<?if(validation_errors() == true) echo 'block'; else echo 'none'?>">
   <?php if(form_error('gendersearch')) echo form_error('gendersearch'); ?>
</div>

<div style="position: relative; text-align:right; color: red; right: 1%;"><i>* means required</i></div>
	<table frame="box" class="frame" style="width:98%; left:1%;">
		<tr class="header">
			<td colspan=4> Demographics
		</tr>
		<tr>
			<td>Age
			<td colspan=2><input type="text" name="agefrom" placeholder="From" value="<?php echo set_value('agefrom'); ?>"> - 
			<input type="text" name="ageto" placeholder="To" value="<?php echo set_value('ageto'); ?>">
			<td>
		</tr>
		<tr>
			<td>Gender <font color='red'>*</font>
			<td><input type="radio" name="gendersearch" value="Male" <?php if(set_value('gendersearch') == 'Male') echo "checked"; ?>>M &nbsp; <input type="radio" name="gendersearch" value="Female" <?php if(set_value('gendersearch') == 'Female') echo "checked"; ?>>F &nbsp; <input type="radio" name="gendersearch" value="Both" <?php if(set_value('gendersearch') == 'Both') echo "checked"; ?>>Both &nbsp; 
			<td>
			<td>
		</tr>
		<tr>
			<td>City
			<td><input type="text" name="citysearch" value="<?php echo set_value('citysearch'); ?>"> 
			<td>
			<td>
		</tr>
		<tr>
			<td>Occupation
			<td><input type="text" name="occsearch" value="<?php echo set_value('occsearch'); ?>">
			<td>
			<td> 
		</tr>
	</table><br><br>
	<table frame="box" class="frame" style="width:98%; left:1%;">	
		<tr class="header">
			<td colspan=2 class="noborder">Other Conditions (Using Demographics)</td>
			<td class="noborder">
			<td class="noborder" style='text-align:right;'><input type="checkbox" name="demo[]" id="demo1Or" value="or" onClick="makeRadio(this.id); enableDemos(this.id);"> Or | <input type="checkbox" name="demo[]" value="and" id="demo1And" onClick="makeRadio(this.id); enableDemos(this.id);"> And
		</tr>
		<tr>
			<td colspan=4>&nbsp;
		</tr>	
		<tr class=header>
			<td colspan=2>Sections
			<td>
			<td style='text-align:right;'><input type="checkbox" name="sasections" id="sasections" onClick="visible(this.name)" disabled> Select All
		</tr>
		<tr>
			<td><b>Operative Dentistry</b>
			<td><b>Oral Medicine</b>
			<td><b>Prosthodontics</b>
			<td>
		</tr>
		<tr>
			<td><input type="checkbox" name="perio" id="perio" value="Yes" disabled>Periodontics
			<td><input type="checkbox" name="rpd" id="rpd" value="Yes" disabled>Removable Prosthodontics
			<td><input type="checkbox" name="ortho" id="ortho" value="Yes" disabled>Orthodontics
			<td>
		</tr>
		<tr>
			<td><input type="checkbox" name="os" id="os" value="Yes" disabled>Oral Surgery
			<td><input type="checkbox" name="fpd" id="fpd" value="Yes" disabled>Fixed Partial Prosthodontics
			<td><input type="checkbox" name="pedo" id="pedo" value="Yes" disabled>Pedodontics
			<td>
		</tr>
		<tr>
			<td><input type="checkbox" name="endo" id="endo" value="Yes" disabled>Endodontics
			<td><input type="checkbox" name="cd" id="cd" value="Yes" disabled>Complete Denture
			<td><input type="checkbox" name="resto" id="resto" value="Yes" disabled>Restorative Dentistry
			<td>
		</tr>
		</table><br><br>
		<table frame="box" class="frame" style="width:98%; left:1%;">	
		<tr class="header">
			<td colspan=2>Dental Condition
			<td>
			<td style='text-align:right;'><input type="checkbox" name="dentdemo[]" id="demo2Or" value="or" onClick="makeRadio(this.id); enableDemos(this.id);" disabled> Or | <input type="checkbox" name="dentdemo[]" id="demo2And" value="and" onClick="makeRadio(this.id); enableDemos(this.id);" disabled> And | <input type="checkbox" name="sadentcond" id="sadentcond" onClick="visible(this.name)" disabled> Select All
		</tr>
		<tr>
			<td><input type="checkbox" name="caries" id="caries" value="Yes" disabled>Caries
			<td><input type="checkbox" name="extrusion" id="extrusion" value="Yes" disabled>Extrusion
			<td><input type="checkbox" name="compdent" id="compdent" value="Yes" disabled>Complete Denture
			<td><input type="checkbox" name="impacted" id="impacted" value="Yes" disabled>Impacted
		</tr>
		<tr>
			<td><input type="checkbox" name="recurrent" id="recurrent" value="Yes" disabled>Recurrent Caries
			<td><input type="checkbox" name="intrusion" id="intrusion" value="Yes" disabled>Intrusion
			<td><input type="checkbox" name="singdent" id="singdent" value="Yes" disabled>Single Denture
			<td><input type="checkbox" name="missing" id="missing" value="Yes" disabled>Missing
		</tr>
		<tr>
			<td><input type="checkbox" name="restoration" id="restoration" value="Yes" disabled>Restoration
			<td><input type="checkbox" name="mdr" id="mdr" value="Yes" disabled>Mesial Drifting Rotation
			<td><input type="checkbox" name="rempardent" id="rempardent" value="Yes" disabled>Removable Partial Denture
			<td><input type="checkbox" name="acrcr" id="acrcr" value="Yes" disabled>Acrylic Crown
		</tr>
		<tr>
			<td><input type="checkbox" name="pftm" id="pftm" value="Yes" disabled>Porcelain Fused To Metal
			<td><input type="checkbox" name="ddr" id="ddr" value="Yes" disabled>Distal Drifting Rotation
			<td><input type="checkbox" name="pafs" id="pafs" value="Yes" disabled>Pit and Fissure Sealants
			<td><input type="checkbox" name="metcr" id="metcr" value="Yes" disabled>Metal Crown
		</tr>
		<tr>
			<td><input type="checkbox" name="rot" id="rot" value="Yes" disabled>Rotation
			<td><input type="checkbox" name="rct" id="rct" value="Yes" disabled>Root Canal Treatment
			<td><input type="checkbox" name="pcc" id="pcc" value="Yes" disabled>Post Core Crown
			<td>
		</tr>
		<tr>
			<td><input type="checkbox" name="extracted" id="extracted" value="Yes">Extracted
			<td><input type="checkbox" name="unerupted" id="unerupted" value="Yes">Unerupted
			<td><input type="checkbox" name="porcr" id="porcr" value="Yes">Porcelain Crown
			<td>
		</tr>
		</table><br><br>
		<table frame="box" class="frame" style="width:98%; left:1%;">
		<tr class="header">
			<td colspan=2>Services Needed
			<td>
			<td style='text-align:right;'><input type="checkbox" name="servdemo[]" value="or" id="demo3Or" onClick="makeRadio(this.id); enableDemos(this.id);" disabled> Or | <input type="checkbox" name="servdemo[]" value="and" id="demo3And" onClick="makeRadio(this.id); enableDemos(this.id);" disabled> And | <input type="checkbox" name="saservneed" id="saservneed" onClick="visible(this.name)" disabled> Select All
		</tr>
		<tr>
			<td colspan=4><u>Periodontics</u>
		<tr>
		<tr>
			<td colspan=4><input type="checkbox" name="mopd" id="mopd" value="Yes">Management of Periodontal Disease
		</tr>
		<tr>
			<td><br><u>Operative Dentistry</u>
			<td><br><u>Surgery</u>
			<td><br><u>Emergency Treatment</u>
		</tr>
		<tr>
			<td><input type="checkbox" name="class1" id="class1" value="Yes" disabled>Class I
			<td><input type="checkbox" name="extraction" id="extraction" value="Yes" disabled>Extraction
			<td><input type="checkbox" name="pulpsed" id="pulpsed" value="Yes" disabled>Pulp Sedation
			<td>
		</tr>
		<tr>
			<td><input type="checkbox" name="class2" id="class2" value="Yes" disabled>Class II
			<td><input type="checkbox" name="odon" id="odon" value="Yes" disabled>Odontectomy
			<td><input type="checkbox" name="roc" id="roc" value="Yes" disabled>Recementation of Crowns
			<td>
		</tr>
		<tr>
			<td><input type="checkbox" name="class3" id="class3" value="Yes" disabled>Class III
			<td><input type="checkbox" name="specclass" id="specclass" value="Yes" disabled>Special Class
			<td><input type="checkbox" name="temfill" id="temfill" value="Yes" disabled>Temporary Fillings
			<td>
		</tr>
		<tr>
			<td><input type="checkbox" name="class4" id="class4" value="Yes" disabled>Class IV
			<td><input type="checkbox" name="pedodontics" id="pedodontics" value="Yes" disabled>Pedodontics
			<td><input type="checkbox" name="moai" id="moai" value="Yes" disabled>Management of Acute Infections
			<td>
		</tr>
		<tr>
			<td><input type="checkbox" name="class5" id="class5" value="Yes" disabled>Class V
			<td><input type="checkbox" name="orthodontics" id="orthodontics" value="Yes" disabled>Orthodontics
			<td><input type="checkbox" name="moti" id="moti" value="Yes" disabled>Management of Temporary Injuries
			<td>
		</tr>
		<tr>
			<td><input type="checkbox" name="onlay" id="onlay" value="Yes"  disabled>Onlay
			<td>
			<td>
			<td>
		</tr>
		<tr>
			<td> &nbsp;
		<tr>
		<tr>
			<td><u>Fixed Partial Denture</u>
			<td><u>Prosthodontics</u>
			<td><u>Endodontics</u>
			<td>
		</tr>
		<tr>
			<td><input type="checkbox" name="lamented" id="lamented" value="Yes" disabled>Laminated
			<td><input type="checkbox" name="completedenture" id="completedenture" value="Yes" disabled>Complete Denture
			<td><input type="checkbox" name="anterior" id="anterior" value="Yes" disabled>Anterior
			<td>
		</tr>
		<tr>
			<td><input type="checkbox" name="singlecrown" id="singlecrown" value="Yes" disabled>Single Crown
			<td><input type="checkbox" name="singledenture" id="singledenture" value="Yes" disabled>Single Denture
			<td><input type="checkbox" name="posterior" id="posterior" value="Yes" disabled>Posterior
			<td>
		</tr>
		<tr>
			<td><input type="checkbox" name="bridge" id="bridge" value="Yes" disabled>Bridge
			<td><input type="checkbox" name="removablepartialdenture" id="removablepartialdenture" value="Yes" disabled>Removable Partial Denture
			<td>
			<td>
		</tr>
	</table>

	<br><input type="submit" value="Search"/> <input type="reset" value="Clear entries"/> <input type="button" value="Go Back" onClick="goBack()"><br>
	</form>	
</div><br><br>

 </body>
</html>


