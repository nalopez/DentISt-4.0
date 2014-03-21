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

   <title>Dental Data - <?php echo $section; ?></title>
<link rel="shortcut icon" href="<?php echo base_url(); ?>images/upcd-20140224-favicon.ico">	
<script type="text/javascript">
	
	
</script>
 </head>
<?php 
	$session_data = $this->session->userdata('logged_in');
     	$usernamelog = $session_data['username'];

	$session_data2 = $this->session->userdata('has_error');
	$invalid_input = $session_data2['invalid_input'];

	if($recordexist){
		foreach($info as $row){
			$dolv = $row['dateoflastvisit'];
			$pdolv = $row['proceduresonlastvisit'];
			$fodv = $row['frequencyofvisit'];
			$eortle = $row['anesthesia_exposure'];
			$cdaoadp = $row['dental_complications'];
			$hnt = $row['headneckTMJ'];
			$lfn = $row['lipsfrenum'];
			$muc = $row['mucosa'];
			$plt = $row['palate'];
			$prx = $row['pharynx'];
			$ftm = $row['floorofthemouth'];
			$tng = $row['tongue'];
			$lym = $row['lymphnodes'];
			$sal = $row['salivarygland'];
			$thy = $row['thyroid'];
			$ggv = $row['gingiva'];

			
		}
	}
?>
 <body>
  
<div class="maindiv" style="border:0px;">
	<?php include('patient_header.php'); ?>

<div id="Content_Area" style="border: solid 1px #7F00FF;">

	<form id="ADDDENTALDATA" name="ADDDENTALDATA" action="<?php echo base_url();?>index.php/verifyadddentaldata" method="post">

<br><a href="<?php echo base_url();?>index.php/loaddashboard/patientdb/<?php echo $id; ?>"> Dashboard </a> &nbsp; <a href="<?php echo base_url();?>index.php/viewdentaldataversions"> View Versions </a><br><br>

<div class="validationexc" style="display: <?php if($this->session->userdata('has_error')) echo 'block'; else 'none' ?>;">
   		<?php $session_data = $this->session->userdata('has_error');
     		echo $session_data['error'];
	?>
</div>

<?php if($forapproval) echo "<h4 style='color:red;'>This patient's record is currently subject for approval.</h4>";
elseif($private) echo "<h4 style='color:red;' align='center'>This patient's record is under other clinician's supervision.</h4>"; ?>


		<table frame="box" class="frame">
		<tr class=header>
			<td colspan=2>Dental History
		</tr>
		<tr>
			<td>Date of last visit:
			<td><input type="text" name="dolv" id="dolv" value="<?php if($invalid_input) echo $session_data2['dolv']; elseif($recordexist == true) echo $dolv; ?>" readonly>
		</tr>
		<tr>
			<td>Procedures done on last visit:
			<td><input type="text" name="pdolv" id="pdolv" value="<?php if($invalid_input) echo $session_data2['pdolv']; elseif($recordexist == true) echo $pdolv; ?>" readonly>
		</tr>
		<tr>
			<td>Frequency of dental visit:
			<td><input type="text" name="fodv" value="<?php if($invalid_input) echo $session_data2['fodv']; elseif($recordexist == true) echo $fodv; ?>" readonly>
		</tr>
		<tr>
			<td>Exposure or response to local anesthesia</td>
			<td><input type="text" name="eortle" value="<?php if($invalid_input) echo $session_data2['eortle']; elseif($recordexist == true) echo $eortle; ?>" readonly>
		</tr>
		<tr>
			<td>Complications during and or after dental procedure</td>
			<td><input type="text" name="cdaoadp" value="<?php if($invalid_input) echo $session_data2['cdaoadp']; else if($recordexist == true) echo $cdaoadp; ?>" readonly>
		</tr>
		</table><br>

		<table frame="box" class="frame">
			<tr class="header">
				<td colspan=4>Soft Tissue Examination
			</tr>
			<tr>
				<td>Head, neck and TMJ
				<td><textarea id="hntd" name="hntd" cols=30 readonly><?php if($invalid_input) echo $session_data2['hntd']; elseif($recordexist == true) echo $hnt; ?></textarea>
				<td>Lips/Frenum
				<td><textarea id="lfnd" name="lfnd" cols=30 readonly><?php if($invalid_input) echo $session_data2['lfnd']; elseif($recordexist == true) echo $lfn; ?></textarea>
			</tr>
			<tr>
				<td>Mucosa
				<td><textarea id="mucd" name="mucd" cols=30 readonly><?php if($invalid_input) echo $session_data2['mucd']; elseif($recordexist == true) echo $muc; ?></textarea>
				<td>Palate
				<td><textarea id="pltd" name="pltd" cols=30 readonly><?php if($invalid_input) echo $session_data2['pltd']; elseif($recordexist == true) echo $plt; ?></textarea>
			</tr>
			<tr>
				<td>Pharynx
				<td><textarea id="prxd" name="prxd" cols=30 readonly><?php if($invalid_input) echo $session_data2['prxd']; elseif($recordexist == true) echo $prx; ?></textarea>
				<td>Floor of the mouth
				<td><textarea id="ftmd" name="ftmd" cols=30 readonly><?php if($invalid_input) echo $session_data2['ftmd']; elseif($recordexist == true) echo $ftm; ?></textarea>
			</tr>
			<tr>
				<td>Tongue
				<td><textarea id="tngd" name="tngd" cols=30 readonly><?php if($invalid_input) echo $session_data2['tngd']; elseif($recordexist == true) echo $tng; ?></textarea>
				<td>Lymph nodes
				<td><textarea id="lymd" name="lymd" cols=30 readonly><?php if($invalid_input) echo $session_data2['lymd']; elseif($recordexist == true) echo $lym; ?></textarea>
			</tr>
			<tr>
				<td>Salivary Gland
				<td><textarea id="sald" name="sald" cols=30 readonly><?php if($invalid_input) echo $session_data2['sald']; elseif($recordexist == true) echo $sal; ?></textarea>
				<td>Thyroid
				<td><textarea id="thyd" name="thyd" cols=30 readonly><?php if($invalid_input) echo $session_data2['thyd']; elseif($recordexist == true) echo $thy; ?></textarea>
			</tr>
			<tr>
				<td>Gingiva
				<td><textarea id="ggvd" name="ggvd" cols=30 readonly><?php if($invalid_input) echo $session_data2['ggvd']; elseif($recordexist == true) echo $ggv; ?></textarea>
			</tr>
		</table><br><br>

		<br><br>
		
</form>

</div>

 </body>
</html>


