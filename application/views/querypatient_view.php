<?php 
	include('header.php'); 
	include('navigation.php');
	
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

   <title>Query Patient - Oral Diagnosis</title>
	
<script type="text/javascript">
	
	
</script>
 </head>
<?php 
	$session_data = $this->session->userdata('logged_in');
     	$usernamelog = $session_data['username'];

	if($gender == "") $gender="both";

?>
 <body>
  
<div class="validation" style="display:<?if(validation_errors() == true) echo 'block'; else echo 'none'?>">
   <?php echo validation_errors(); ?>
</div>
<div class="maindiv">
<h3 align="left" style="left: 1%;position: relative;">Query Patient</h3>

  	<div align="left" style="left:1%; position: relative;"><a href="<?php echo base_url(); ?>index.php/searchpatient">Go Back</a></div><br>
	
	<table frame="box" class="frame alttable" style="width:98%; left:1%;">
		<tr class="header">
			<td colspan=6> Patient
		</tr>
		<tr>
			<td colspan=6> 
			<?php 
				if($agefrom != 0 && $ageto != 100){
					echo " | Age: ".$agefrom."-".$ageto;
				}
				echo " | Gender: ".$gender;
				if($city != ""){
					echo " | City: ".$city;
				}
				if($occ != ""){
					echo " | Occupation: ".$occ;
				}
				echo " |";
			?>
		</tr>
		<tr>
			<td style="text-align:center;"><br><b>Id</b>
			<td style="text-align:center;"><br><b>Name</b>
			<td style="text-align:center;"><br><b>Age</b>
		</tr>
		<?php 	if($patientmatch){
				foreach($patientmatch as $row){
					echo "<tr><td style='text-align:center;'><a href=".base_url()."index.php/loaddashboard/patientdb/".$row['UPCD_ID'].">".$row['UPCD_ID']."</a>";
					echo "<td style='text-align:center;'>".$row['patientFName']." ".substr($row['patientMName'], 0, 1).". ".$row['patientLName'];
					echo "<td style='text-align:center;'>".$row['age'];
					echo "</tr>";
				}
			}
		?>
		<tr>
			<td colspan=6> <?php echo "<br>".(sizeof($patientmatch)-1)?> record/s found.
		</tr>
		<tr>
			<td> &nbsp;
		<tr>
		<tr class="header">
			<td colspan=6> Patients
		</tr>
		<tr>
			<td>
			<td style="text-align:center;"> <b>Id</b>
			<td style="text-align:center;"> <b>Name</b>
			<td>
		</tr>
		<?php 	if($sectionmatch){
				foreach($sectionmatch as $row){
					if($perio == "Yes"){
						echo "<tr><td style='text-align:center;'> Periodontics";
						foreach($sectionmatch as $row2){
							if($row2['perio'] == "Yes") {
								echo "<td style='text-align:center;'><a href=".base_url()."index.php/loaddashboard/patientdb/".$row2['UPCD_ID'].">".$row2['UPCD_ID']."</a>"; 
								echo "<td style='text-align:center;'>".$row2['patientFName']." ".substr($row2['patientMName'], 0, 1).". ".$row2['patientLName'];
							}
						}
					}
					if($rpd == "Yes"){
						echo "<tr><td style='text-align:center;'> Removable Prosthodontics";
						foreach($sectionmatch as $row2){
							if($row2['rpd'] == "Yes") {
								echo "<td style='text-align:center;'><a href=".base_url()."index.php/loaddashboard/patientdb/".$row2['UPCD_ID'].">".$row2['UPCD_ID']."</a>"; 
								echo "<td style='text-align:center;'>".$row2['patientFName']." ".substr($row2['patientMName'], 0, 1).". ".$row2['patientLName'];
							}
						}
					}
					if($ortho == "Yes"){
						echo "<tr><td style='text-align:center;'> Orthodontics";
						foreach($sectionmatch as $row2){
							if($row2['ortho'] == "Yes") {
								echo "<td style='text-align:center;'><a href=".base_url()."index.php/loaddashboard/patientdb/".$row2['UPCD_ID'].">".$row2['UPCD_ID']."</a>"; 
								echo "<td style='text-align:center;'>".$row2['patientFName']." ".substr($row2['patientMName'], 0, 1).". ".$row2['patientLName'];
							}
						}
					}
					if($os == "Yes"){
						echo "<tr><td style='text-align:center;'> Oral Surgery";
						foreach($sectionmatch as $row2){
							if($row2['os'] == "Yes") {
								echo "<td style='text-align:center;'><a href=".base_url()."index.php/loaddashboard/patientdb/".$row2['UPCD_ID'].">".$row2['UPCD_ID']."</a>"; 
								echo "<td style='text-align:center;'>".$row2['patientFName']." ".substr($row2['patientMName'], 0, 1).". ".$row2['patientLName'];
							}
						}
					}
					if($fpd == "Yes"){
						echo "<tr><td style='text-align:center;'> Fixed Partial Prosthodontics";
						foreach($sectionmatch as $row2){
							if($row2['fpd'] == "Yes") {
								echo "<td style='text-align:center;'><a href=".base_url()."index.php/loaddashboard/patientdb/".$row2['UPCD_ID'].">".$row2['UPCD_ID']."</a>"; 
								echo "<td style='text-align:center;'>".$row2['patientFName']." ".substr($row2['patientMName'], 0, 1).". ".$row2['patientLName'];
							}
						}
					}
					if($pedo == "Yes"){
						echo "<tr><td style='text-align:center;'> Pedodontics";
						foreach($sectionmatch as $row2){
							if($row2['pedo'] == "Yes") {
								echo "<td style='text-align:center;'><a href=".base_url()."index.php/loaddashboard/patientdb/".$row2['UPCD_ID'].">".$row2['UPCD_ID']."</a>"; 
								echo "<td style='text-align:center;'>".$row2['patientFName']." ".substr($row2['patientMName'], 0, 1).". ".$row2['patientLName'];
							}
						}
					}
					if($endo == "Yes"){
						echo "<tr><td style='text-align:center;'> Endodontics";
						foreach($sectionmatch as $row2){
							if($row2['endo'] == "Yes") {
								echo "<td style='text-align:center;'><a href=".base_url()."index.php/loaddashboard/patientdb/".$row2['UPCD_ID'].">".$row2['UPCD_ID']."</a>"; 
								echo "<td style='text-align:center;'>".$row2['patientFName']." ".substr($row2['patientMName'], 0, 1).". ".$row2['patientLName'];
							}
						}
					}
					if($cd == "Yes"){
						echo "<tr><td style='text-align:center;'> Complete Denture";
						foreach($sectionmatch as $row2){
							if($row2['cd'] == "Yes") {
								echo "<td style='text-align:center;'><a href=".base_url()."index.php/loaddashboard/patientdb/".$row2['UPCD_ID'].">".$row2['UPCD_ID']."</a>"; 
								echo "<td style='text-align:center;'>".$row2['patientFName']." ".substr($row2['patientMName'], 0, 1).". ".$row2['patientLName'];
							}
						}
					}
					if($resto == "Yes"){
						echo "<tr><td style='text-align:center;'> Restorative Dentistry";
						foreach($sectionmatch as $row2){
							if($row2['resto'] == "Yes") {
								echo "<td style='text-align:center;'><a href=".base_url()."index.php/loaddashboard/patientdb/".$row2['UPCD_ID'].">".$row2['UPCD_ID']."</a>"; 
								echo "<td style='text-align:center;'>".$row2['patientFName']." ".substr($row2['patientMName'], 0, 1).". ".$row2['patientLName'];
							}
						}
					}
				
					echo "<td>";
					echo "</tr>";
				}
			}
		?>
		<tr>
			<td> &nbsp;
		<tr>
		<tr class="header">
			<td colspan=6> Dental Chart Queries
		</tr>
		<tr>
			<td>
			<td style='text-align:center;'> <b>Id</b>
			<td style='text-align:center;'> <b>Name</b>
			<td style='text-align:center;'> <b>Tooth Number(s)</b>
		</tr>
		<?php 	if($dentalstatmatch){
				foreach($dentalstatmatch as $row){
					if($caries == "Yes"){
						echo "<tr><td style='text-align:center;'> Caries";
						foreach($dentalstatmatch as $row2){
							if($row2['distal_caries'] != "" || $row2['buccal_caries'] != "" || $row2['mesial_caries'] != "" || $row2['occlusal_caries'] != "" || $row2['lingual_caries'] != "") {
								echo "<td style='text-align:center;'><a href=".base_url()."index.php/loaddashboard/patientdb/".$row2['UPCD_ID'].">".$row2['UPCD_ID']."</a>"; 
								echo "<td style='text-align:center;'>".$row2['patientFName']." ".substr($row2['patientMName'], 0, 1).". ".$row2['patientLName'];
								echo "<td style='text-align:center;'>".$row2['distal_caries']." ".$row2['buccal_caries']." ".$row2['mesial_caries']." ".$row2['occlusal_caries']." ".$row2['lingual_caries'];
							}
						}
					}
					if($recurrent == "Yes"){
						echo "<tr><td style='text-align:center;'> Recurrent Caries";
						foreach($dentalstatmatch as $row2){
							if($row2['distal_recurrent'] != "" || $row2['buccal_recurrent'] != "" || $row2['mesial_recurrent'] != "" || $row2['occlusal_recurrent'] != "" || $row2['lingual_recurrent'] != "") {
								echo "<td style='text-align:center;'><a href=".base_url()."index.php/loaddashboard/patientdb/".$row2['UPCD_ID'].">".$row2['UPCD_ID']."</a>"; 
								echo "<td style='text-align:center;'>".$row2['patientFName']." ".substr($row2['patientMName'], 0, 1).". ".$row2['patientLName'];
								echo "<td style='text-align:center;'>".$row2['distal_recurrent']." ".$row2['buccal_recurrent']." ".$row2['mesial_recurrent']." ".$row2['occlusal_recurrent']." ".$row2['lingual_recurrent'];
							}
							else echo "<td colspan='3'>No results found";
						}
					}
					if($restoration == "Yes"){
						echo "<tr><td style='text-align:center;'> Restoration";
						foreach($dentalstatmatch as $row2){
							if($row2['distal_restoration'] != "" || $row2['buccal_restoration'] != "" || $row2['mesial_restoration'] != "" || $row2['occlusal_restoration'] != "" || $row2['lingual_restoration'] != "") {
								echo "<td style='text-align:center;'><a href=".base_url()."index.php/loaddashboard/patientdb/".$row2['UPCD_ID'].">".$row2['UPCD_ID']."</a>"; 
								echo "<td style='text-align:center;'>".$row2['patientFName']." ".substr($row2['patientMName'], 0, 1).". ".$row2['patientLName'];
								echo "<td style='text-align:center;'>".$row2['distal_restoration']." ".$row2['buccal_restoration']." ".$row2['mesial_restoration']." ".$row2['occlusal_restoration']." ".$row2['lingual_restoration'];
							}
						}
					}
					if($pftm == "Yes"){
						echo "<tr><td style='text-align:center;'> Porcelain Fused to Metal";
						foreach($dentalstatmatch as $row2){
							if($row2['porcelain_fused'] != "") {
								echo "<td style='text-align:center;'><a href=".base_url()."index.php/loaddashboard/patientdb/".$row2['UPCD_ID'].">".$row2['UPCD_ID']."</a>"; 
								echo "<td style='text-align:center;'>".$row2['patientFName']." ".substr($row2['patientMName'], 0, 1).". ".$row2['patientLName'];
								echo "<td style='text-align:center;'>".$row2['porcelain_fused'];
							}
						}
					}
					if($rot == "Yes"){
						echo "<tr><td style='text-align:center;'> Rotation";
						foreach($dentalstatmatch as $row2){
							if($row2['rotation'] != "") {
								echo "<td style='text-align:center;'><a href=".base_url()."index.php/loaddashboard/patientdb/".$row2['UPCD_ID'].">".$row2['UPCD_ID']."</a>"; 
								echo "<td style='text-align:center;'>".$row2['patientFName']." ".substr($row2['patientMName'], 0, 1).". ".$row2['patientLName'];
								echo "<td style='text-align:center;'>".$row2['rotation'];
							}
						}
					}
					if($extracted == "Yes"){
						echo "<tr><td style='text-align:center;'> Extracted";
						foreach($dentalstatmatch as $row2){
							if($row2['extracted'] != "") {
								echo "<td style='text-align:center;'><a href=".base_url()."index.php/loaddashboard/patientdb/".$row2['UPCD_ID'].">".$row2['UPCD_ID']."</a>"; 
								echo "<td style='text-align:center;'>".$row2['patientFName']." ".substr($row2['patientMName'], 0, 1).". ".$row2['patientLName'];
								echo "<td style='text-align:center;'>".$row2['extracted'];
							}
						}
					}
					if($extrusion == "Yes"){
						echo "<tr><td style='text-align:center;'> Extrusion";
						foreach($dentalstatmatch as $row2){
							if($row2['extrusion'] != "") {
								echo "<td style='text-align:center;'><a href=".base_url()."index.php/loaddashboard/patientdb/".$row2['UPCD_ID'].">".$row2['UPCD_ID']."</a>"; 
								echo "<td style='text-align:center;'>".$row2['patientFName']." ".substr($row2['patientMName'], 0, 1).". ".$row2['patientLName'];
								echo "<td style='text-align:center;'>".$row2['extrusion'];
							}
						}
					}
					if($intrusion == "Yes"){
						echo "<tr><td style='text-align:center;'> Intrusion";
						foreach($dentalstatmatch as $row2){
							if($row2['extracted'] != "") {
								echo "<td style='text-align:center;'><a href=".base_url()."index.php/loaddashboard/patientdb/".$row2['UPCD_ID'].">".$row2['UPCD_ID']."</a>"; 
								echo "<td style='text-align:center;'>".$row2['patientFName']." ".substr($row2['patientMName'], 0, 1).". ".$row2['patientLName'];
								echo "<td style='text-align:center;'>".$row2['intrusion'];
							}
						}
					}
					if($mdr == "Yes"){
						echo "<tr><td style='text-align:center;'> Mesial Drifting Rotation";
						foreach($dentalstatmatch as $row2){
							if($row2['mesial_rotation'] != "") {
								echo "<td style='text-align:center;'><a href=".base_url()."index.php/loaddashboard/patientdb/".$row2['UPCD_ID'].">".$row2['UPCD_ID']."</a>"; 
								echo "<td style='text-align:center;'>".$row2['patientFName']." ".substr($row2['patientMName'], 0, 1).". ".$row2['patientLName'];
								echo "<td style='text-align:center;'>".$row2['mesial_rotation'];
							}
						}
					}
					if($ddr == "Yes"){
						echo "<tr><td style='text-align:center;'> Distal Drift Rotation";
						foreach($dentalstatmatch as $row2){
							if($row2['distal_rotation'] != "") {
								echo "<td style='text-align:center;'><a href=".base_url()."index.php/loaddashboard/patientdb/".$row2['UPCD_ID'].">".$row2['UPCD_ID']."</a>"; 
								echo "<td style='text-align:center;'>".$row2['patientFName']." ".substr($row2['patientMName'], 0, 1).". ".$row2['patientLName'];
								echo "<td style='text-align:center;'>".$row2['distal_rotation'];
							}
						}
					}
					if($rct == "Yes"){
						echo "<tr><td style='text-align:center;'> Root Canal Treatment";
						foreach($dentalstatmatch as $row2){
							if($row2['rootcanal_treatment'] != "") {
								echo "<td style='text-align:center;'><a href=".base_url()."index.php/loaddashboard/patientdb/".$row2['UPCD_ID'].">".$row2['UPCD_ID']."</a>"; 
								echo "<td style='text-align:center;'>".$row2['patientFName']." ".substr($row2['patientMName'], 0, 1).". ".$row2['patientLName'];
								echo "<td style='text-align:center;'>".$row2['rootcanal_treatment'];
							}
						}
					}
					if($rct == "Yes"){
						echo "<tr><td style='text-align:center;'> Root Canal Treatment";
						foreach($dentalstatmatch as $row2){
							if($row2['rootcanal_treatment'] != "") {
								echo "<td style='text-align:center;'><a href=".base_url()."index.php/loaddashboard/patientdb/".$row2['UPCD_ID'].">".$row2['UPCD_ID']."</a>"; 
								echo "<td style='text-align:center;'>".$row2['patientFName']." ".substr($row2['patientMName'], 0, 1).". ".$row2['patientLName'];
								echo "<td style='text-align:center;'>".$row2['rootcanal_treatment'];
							}
						}
					}
					if($unerupted == "Yes"){
						echo "<tr><td style='text-align:center;'> Unerupted";
						foreach($dentalstatmatch as $row2){
							if($row2['unerupted'] != "") {
								echo "<td style='text-align:center;'><a href=".base_url()."index.php/loaddashboard/patientdb/".$row2['UPCD_ID'].">".$row2['UPCD_ID']."</a>"; 
								echo "<td style='text-align:center;'>".$row2['patientFName']." ".substr($row2['patientMName'], 0, 1).". ".$row2['patientLName'];
								echo "<td style='text-align:center;'>".$row2['unerupted'];
							}
						}
					}
					/*if($compdent == "Yes"){
						echo "<tr><td style='text-align:center;'> Complete Denture";
						foreach($dentalstatmatch as $row2){
							if($row2['unerupted'] != "") {
								echo "<td style='text-align:center;'><a href=".base_url()."index.php/loaddashboard/patientdb/".$row2['UPCD_ID'].">".$row2['UPCD_ID']."</a>"; 
								echo "<td style='text-align:center;'>".$row2['patientFName']." ".substr($row2['patientMName'], 0, 1).". ".$row2['patientLName'];
								echo "<td style='text-align:center;'>".$row2['unerupted'];
							}
						}
					}
					if($singdent == "Yes"){
						echo "<tr><td style='text-align:center;'> Single Denture";
						foreach($dentalstatmatch as $row2){
							if($row2['unerupted'] != "") {
								echo "<td style='text-align:center;'><a href=".base_url()."index.php/loaddashboard/patientdb/".$row2['UPCD_ID'].">".$row2['UPCD_ID']."</a>"; 
								echo "<td style='text-align:center;'>".$row2['patientFName']." ".substr($row2['patientMName'], 0, 1).". ".$row2['patientLName'];
								echo "<td style='text-align:center;'>".$row2['unerupted'];
							}
						}
					}*/
					if($rempardent == "Yes"){
						echo "<tr><td style='text-align:center;'> Removable Partial Denture";
						foreach($dentalstatmatch as $row2){
							if($row2['removable_partial_denture'] != "") {
								echo "<td style='text-align:center;'><a href=".base_url()."index.php/loaddashboard/patientdb/".$row2['UPCD_ID'].">".$row2['UPCD_ID']."</a>"; 
								echo "<td style='text-align:center;'>".$row2['patientFName']." ".substr($row2['patientMName'], 0, 1).". ".$row2['patientLName'];
								echo "<td style='text-align:center;'>".$row2['removable_partial_denture'];
							}
						}
					}
					if($pafs == "Yes"){
						echo "<tr><td style='text-align:center;'> Pit and Fissure Sealants";
						foreach($dentalstatmatch as $row2){
							if($row2['pitfissure_sealants'] != "") {
								echo "<td style='text-align:center;'><a href=".base_url()."index.php/loaddashboard/patientdb/".$row2['UPCD_ID'].">".$row2['UPCD_ID']."</a>"; 
								echo "<td style='text-align:center;'>".$row2['patientFName']." ".substr($row2['patientMName'], 0, 1).". ".$row2['patientLName'];
								echo "<td style='text-align:center;'>".$row2['pitfissure_sealants'];
							}
						}
					}
					if($pcc == "Yes"){
						echo "<tr><td style='text-align:center;'> Postcore Crown";
						foreach($dentalstatmatch as $row2){
							if($row2['postcore_crown'] != "") {
								echo "<td style='text-align:center;'><a href=".base_url()."index.php/loaddashboard/patientdb/".$row2['UPCD_ID'].">".$row2['UPCD_ID']."</a>"; 
								echo "<td style='text-align:center;'>".$row2['patientFName']." ".substr($row2['patientMName'], 0, 1).". ".$row2['patientLName'];
								echo "<td style='text-align:center;'>".$row2['postcore_crown'];
							}
						}
					}
					if($porcr == "Yes"){
						echo "<tr><td style='text-align:center;'> Porcelain Crown";
						foreach($dentalstatmatch as $row2){
							if($row2['porcelain_crown'] != "") {
								echo "<td style='text-align:center;'><a href=".base_url()."index.php/loaddashboard/patientdb/".$row2['UPCD_ID'].">".$row2['UPCD_ID']."</a>"; 
								echo "<td style='text-align:center;'>".$row2['patientFName']." ".substr($row2['patientMName'], 0, 1).". ".$row2['patientLName'];
								echo "<td style='text-align:center;'>".$row2['porcelain_crown'];
							}
						}
					}
					if($impacted == "Yes"){
						echo "<tr><td style='text-align:center;'> Impacted";
						foreach($dentalstatmatch as $row2){
							if($row2['impacted'] != "") {
								echo "<td style='text-align:center;'><a href=".base_url()."index.php/loaddashboard/patientdb/".$row2['UPCD_ID'].">".$row2['UPCD_ID']."</a>"; 
								echo "<td style='text-align:center;'>".$row2['patientFName']." ".substr($row2['patientMName'], 0, 1).". ".$row2['patientLName'];
								echo "<td style='text-align:center;'>".$row2['impacted'];
							}
						}
					}
					if($missing == "Yes"){
						echo "<tr><td style='text-align:center;'> Missing";
						foreach($dentalstatmatch as $row2){
							if($row2['unerupted'] != "") {
								echo "<td style='text-align:center;'><a href=".base_url()."index.php/loaddashboard/patientdb/".$row2['UPCD_ID'].">".$row2['UPCD_ID']."</a>"; 
								echo "<td style='text-align:center;'>".$row2['patientFName']." ".substr($row2['patientMName'], 0, 1).". ".$row2['patientLName'];
								echo "<td style='text-align:center;'>".$row2['unerupted'];
							}
						}
					}
					if($acrcr == "Yes"){
						echo "<tr><td style='text-align:center;'> Acrylic Crown";
						foreach($dentalstatmatch as $row2){
							if($row2['acrylic_crown'] != "") {
								echo "<td style='text-align:center;'><a href=".base_url()."index.php/loaddashboard/patientdb/".$row2['UPCD_ID'].">".$row2['UPCD_ID']."</a>"; 
								echo "<td style='text-align:center;'>".$row2['patientFName']." ".substr($row2['patientMName'], 0, 1).". ".$row2['patientLName'];
								echo "<td style='text-align:center;'>".$row2['acrylic_crown'];
							}
						}
					}
					if($metcr == "Yes"){
						echo "<tr><td style='text-align:center;'> Metal Crown";
						foreach($dentalstatmatch as $row2){
							if($row2['metal_crown'] != "") {
								echo "<td style='text-align:center;'><a href=".base_url()."index.php/loaddashboard/patientdb/".$row2['UPCD_ID'].">".$row2['UPCD_ID']."</a>"; 
								echo "<td style='text-align:center;'>".$row2['patientFName']." ".substr($row2['patientMName'], 0, 1).". ".$row2['patientLName'];
								echo "<td style='text-align:center;'>".$row2['metal_crown'];
							}
						}
					}


					echo "</tr>";
				}
			}
		?>
		<tr>
			<td> &nbsp;
		<tr>
		<tr class="header">
			<td colspan=6> Needed Services Queries
		</tr>
		<tr>
			<td>
			<td> <b>Id</b>
			<td> <b>Name</b>
			<td> <b>Tooth Number(s)</b>
		</tr>
		<?php 	if($servicematch){
				foreach($servicematch as $row){
					if($class1 == "Yes"){
						echo "<tr><td style='text-align:center;'> Class I";
						foreach($servicematch as $row2){
							if($row2['class1']) {
								echo "<td style='text-align:center;'><a href=".base_url()."index.php/loaddashboard/patientdb/".$row2['UPCD_ID'].">".$row2['UPCD_ID']."</a>"; 
								echo "<td style='text-align:center;'>".$row2['patientFName']." ".substr($row2['patientMName'], 0, 1).". ".$row2['patientLName'];
								echo "<td style='text-align:center;'>".$row2['class1'];
							}
						}
					}
					if($class2 == "Yes"){
						echo "<tr><td style='text-align:center;'> Class II";
						foreach($servicematch as $row2){
							if($row2['class2']) {
								echo "<td style='text-align:center;'><a href=".base_url()."index.php/loaddashboard/patientdb/".$row2['UPCD_ID'].">".$row2['UPCD_ID']."</a>"; 
								echo "<td style='text-align:center;'>".$row2['patientFName']." ".substr($row2['patientMName'], 0, 1).". ".$row2['patientLName'];
								echo "<td style='text-align:center;'>".$row2['class2'];
							}
						}
					}
					if($class3 == "Yes"){
						echo "<tr><td style='text-align:center;'> Class III";
						foreach($servicematch as $row2){
							if($row2['class3']) {
								echo "<td style='text-align:center;'><a href=".base_url()."index.php/loaddashboard/patientdb/".$row2['UPCD_ID'].">".$row2['UPCD_ID']."</a>"; 
								echo "<td style='text-align:center;'>".$row2['patientFName']." ".substr($row2['patientMName'], 0, 1).". ".$row2['patientLName'];
								echo "<td style='text-align:center;'>".$row2['class3'];
							}
						}
					}
					if($class4 == "Yes"){
						echo "<tr><td style='text-align:center;'> Class IV";
						foreach($servicematch as $row2){
							if($row2['class4']) {
								echo "<td style='text-align:center;'><a href=".base_url()."index.php/loaddashboard/patientdb/".$row2['UPCD_ID'].">".$row2['UPCD_ID']."</a>"; 
								echo "<td style='text-align:center;'>".$row2['patientFName']." ".substr($row2['patientMName'], 0, 1).". ".$row2['patientLName'];
								echo "<td style='text-align:center;'>".$row2['class4'];
							}
						}
					}
					if($class5 == "Yes"){
						echo "<tr><td style='text-align:center;'> Class V";
						foreach($servicematch as $row2){
							if($row2['class5']) {
								echo "<td style='text-align:center;'><a href=".base_url()."index.php/loaddashboard/patientdb/".$row2['UPCD_ID'].">".$row2['UPCD_ID']."</a>"; 
								echo "<td style='text-align:center;'>".$row2['patientFName']." ".substr($row2['patientMName'], 0, 1).". ".$row2['patientLName'];
								echo "<td style='text-align:center;'>".$row2['class5'];
							}
						}
					}
					if($onlay == "Yes"){
						echo "<tr><td style='text-align:center;'> Onlay";
						foreach($servicematch as $row2){
							if($row2['onlay']) {
								echo "<td style='text-align:center;'><a href=".base_url()."index.php/loaddashboard/patientdb/".$row2['UPCD_ID'].">".$row2['UPCD_ID']."</a>"; 
								echo "<td style='text-align:center;'>".$row2['patientFName']." ".substr($row2['patientMName'], 0, 1).". ".$row2['patientLName'];
								echo "<td style='text-align:center;'>".$row2['onlay'];
							}
						}
					}
					if($extraction == "Yes"){
						echo "<tr><td style='text-align:center;'> Extraction";
						foreach($servicematch as $row2){
							if($row2['extraction']) {
								echo "<td style='text-align:center;'><a href=".base_url()."index.php/loaddashboard/patientdb/".$row2['UPCD_ID'].">".$row2['UPCD_ID']."</a>"; 
								echo "<td style='text-align:center;'>".$row2['patientFName']." ".substr($row2['patientMName'], 0, 1).". ".$row2['patientLName'];
								echo "<td style='text-align:center;'>".$row2['extraction'];
							}
						}
					}
					if($odon == "Yes"){
						echo "<tr><td style='text-align:center;'> Odontectomy";
						foreach($servicematch as $row2){
							if($row2['odontectomy']) {
								echo "<td style='text-align:center;'><a href=".base_url()."index.php/loaddashboard/patientdb/".$row2['UPCD_ID'].">".$row2['UPCD_ID']."</a>"; 
								echo "<td style='text-align:center;'>".$row2['patientFName']." ".substr($row2['patientMName'], 0, 1).". ".$row2['patientLName'];
								echo "<td style='text-align:center;'>".$row2['odontectomy'];
							}
						}
					}
					if($specclass == "Yes"){
						echo "<tr><td style='text-align:center;'> Special Case";
						foreach($servicematch as $row2){
							if($row2['special_case']) {
								echo "<td style='text-align:center;'><a href=".base_url()."index.php/loaddashboard/patientdb/".$row2['UPCD_ID'].">".$row2['UPCD_ID']."</a>"; 
								echo "<td style='text-align:center;'>".$row2['patientFName']." ".substr($row2['patientMName'], 0, 1).". ".$row2['patientLName'];
								echo "<td style='text-align:center;'>".$row2['special_case'];
							}
						}
					}
					if($pedodontics == "Yes"){
						echo "<tr><td style='text-align:center;'> Pedodontics";
						foreach($servicematch as $row2){
							if($row2['pedodontics']) {
								echo "<td style='text-align:center;'><a href=".base_url()."index.php/loaddashboard/patientdb/".$row2['UPCD_ID'].">".$row2['UPCD_ID']."</a>"; 
								echo "<td style='text-align:center;'>".$row2['patientFName']." ".substr($row2['patientMName'], 0, 1).". ".$row2['patientLName'];
								echo "<td style='text-align:center;'>".$row2['pedodontics'];
							}
						}
					}
					if($orthodontics == "Yes"){
						echo "<tr><td style='text-align:center;'> Orthodontics";
						foreach($servicematch as $row2){
							if($row2['orthodontics']) {
								echo "<td style='text-align:center;'><a href=".base_url()."index.php/loaddashboard/patientdb/".$row2['UPCD_ID'].">".$row2['UPCD_ID']."</a>"; 
								echo "<td style='text-align:center;'>".$row2['patientFName']." ".substr($row2['patientMName'], 0, 1).". ".$row2['patientLName'];
								echo "<td style='text-align:center;'>".$row2['orthodontics'];
							}
						}
					}
					if($pulpsed == "Yes"){
						echo "<tr><td style='text-align:center;'> Pulp Sedation";
						foreach($servicematch as $row2){
							if($row2['pulp_sedation']) {
								echo "<td style='text-align:center;'><a href=".base_url()."index.php/loaddashboard/patientdb/".$row2['UPCD_ID'].">".$row2['UPCD_ID']."</a>"; 
								echo "<td style='text-align:center;'>".$row2['patientFName']." ".substr($row2['patientMName'], 0, 1).". ".$row2['patientLName'];
								echo "<td style='text-align:center;'>".$row2['pulp_sedation'];
							}
						}
					}
					if($roc == "Yes"){
						echo "<tr><td style='text-align:center;'> Recementation of Crown";
						foreach($servicematch as $row2){
							if($row2['crown_recementation']) {
								echo "<td style='text-align:center;'><a href=".base_url()."index.php/loaddashboard/patientdb/".$row2['UPCD_ID'].">".$row2['UPCD_ID']."</a>"; 
								echo "<td style='text-align:center;'>".$row2['patientFName']." ".substr($row2['patientMName'], 0, 1).". ".$row2['patientLName'];
								echo "<td style='text-align:center;'>".$row2['crown_recementation'];
							}
						}
					}
					if($temfill == "Yes"){
						echo "<tr><td style='text-align:center;'> Temporary Fillings";
						foreach($servicematch as $row2){
							if($row2['filling_service']) {
								echo "<td style='text-align:center;'><a href=".base_url()."index.php/loaddashboard/patientdb/".$row2['UPCD_ID'].">".$row2['UPCD_ID']."</a>"; 
								echo "<td style='text-align:center;'>".$row2['patientFName']." ".substr($row2['patientMName'], 0, 1).". ".$row2['patientLName'];
								echo "<td style='text-align:center;'>".$row2['filling_service'];
							}
						}
					}
					/*if($moai == "Yes"){
						echo "<tr><td style='text-align:center;'> Management of Acute Infections";
						foreach($servicematch as $row2){
							if($row2['extraction']) {
								echo "<td style='text-align:center;'><a href=".base_url()."index.php/loaddashboard/patientdb/".$row2['UPCD_ID'].">".$row2['UPCD_ID']."</a>"; 
								echo "<td style='text-align:center;'>".$row2['patientFName']." ".substr($row2['patientMName'], 0, 1).". ".$row2['patientLName'];
								echo "<td style='text-align:center;'>".$row2['extraction'];
							}
						}
					}
					if($moti == "Yes"){
						echo "<tr><td style='text-align:center;'> Management of Temporary Injuries";
						foreach($servicematch as $row2){
							if($row2['extraction']) {
								echo "<td style='text-align:center;'><a href=".base_url()."index.php/loaddashboard/patientdb/".$row2['UPCD_ID'].">".$row2['UPCD_ID']."</a>"; 
								echo "<td style='text-align:center;'>".$row2['patientFName']." ".substr($row2['patientMName'], 0, 1).". ".$row2['patientLName'];
								echo "<td style='text-align:center;'>".$row2['extraction'];
							}
						}
					}*/
					echo "</tr>";
				}
			}
		?>
	</table><br>

	</form>	
</div><br><br>

 </body>
</html>


