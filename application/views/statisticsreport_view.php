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
		$section = "System Maintenance";
	}

	$session_data = $this->session->userdata('current_patient');
	$id = $session_data['id'];

?>

   <title>Statistics - <?php echo $section; ?></title>
<link rel="shortcut icon" href="<?php echo base_url(); ?>images/upcd-20140224-favicon.ico">	
<script type="text/javascript">
	
	
</script>
 </head>
<?php 
	$session_data = $this->session->userdata('logged_in');
     	$usernamelog = $session_data['username'];

	

	//print_r($patientmatch);

?>
 <body>
  
<div class="validation" style="display:<?php if(validation_errors() == true) echo 'block'; else echo 'none'?>">
   <?php echo validation_errors(); ?>
</div>
<div class="maindiv">
<h3 align="left" style="left: 1%;position: relative;">Statistics</h3>

  	<div align="left" style="left:1%; position: relative;"><a href="<?php echo base_url(); ?>index.php/viewstat">Go Back</a></div><br>
	
	<table frame="box" class="frame alttable" style="width:98%; left:1%;">
		<tr class="header">
			<td colspan=6> Patients registered from <?php echo $datefrom;?> to <?php echo $dateto; ?>
		</tr>
		<?php
			$femaleCount = 0;
			$maleCount = 0;
			foreach($datematch as $row){
				if($row['gender'] == "Female" && strtotime($row['date'])>=strtotime($datefrom) && strtotime($row['date'])<=strtotime($dateto)){
					$femaleCount++;
				}
				elseif($row['gender'] == "Male" && strtotime($row['date'])>=strtotime($datefrom) && strtotime($row['date'])<=strtotime($dateto)){
					$maleCount++;
				}
			}
			$totalCount = $femaleCount + $maleCount;
			
		?>
		<tr> 
			<td> Number of Females
			<td> <?php echo $femaleCount; ?>
			<td> <?php if($totalCount == 0) echo "0%"; else echo (round(($femaleCount/$totalCount)*100))."%"; ?>
		</tr>
		<tr> 
			<td> Number of Males
			<td> <?php echo $maleCount; ?>
			<td> <?php if($totalCount == 0) echo "0%"; else echo (round(($maleCount/$totalCount)*100))."%"; ?>
		</tr>
		<?php
		
		if($agexfrom != '' && $agexto != ''){
			echo "<tr>
				<td> &nbsp;
			</tr>";
		
			echo "<tr>
				<td><b> AGE GROUP ($agefrom - $ageto) </b>
			</tr>"; 
					$femaleage = 0;
					$maleage = 0;
					$totalage = 0;
			if($patientmatch){
				foreach($patientmatch as $row){
						if($row['gender'] == "Female" && $row['age'] >= $agefrom && $row['age'] <= $ageto && strtotime($row['date'])>=strtotime($datefrom) && strtotime($row['date'])<=strtotime($dateto)){
							$femaleage++;
							$totalage++;
						}
						if($row['gender'] == "Male" && $row['age'] >= $agefrom && $row['age'] <= $ageto && strtotime($row['date'])>=strtotime($datefrom) && strtotime($row['date'])<=strtotime($dateto)){
							$maleage++;
							$totalage++;
						}
					}
			}
			
						echo "<tr> 
							<td> Number of Females
							<td> $femaleage
							<td> ";
							if($totalage == 0) echo "0%"; else echo round(($femaleage/$totalage)*100)."%";
						echo "</tr>
						<tr> 
							<td> Number of Males
							<td> $maleage
							<td> ";
							if($totalage == 0) echo "0%"; else echo round(($maleage/$totalage)*100)."%";
						echo "</tr>";
			
		}

		if($city != ''){
			echo "<tr>
				<td> &nbsp;
			</tr>";
		
			echo "<tr>
				<td><b> CITY ($city) </b>
			</tr>"; 
					$femalecity = 0;
					$malecity = 0;
					$totalcity = 0;
			if($patientmatch){
					foreach($patientmatch as $row){
						if($row['gender'] == "Female" && $row['city'] == $city && strtotime($row['date'])>=strtotime($datefrom) && strtotime($row['date'])<=strtotime($dateto)){
							$femalecity++;
							$totalcity++;
						}
						if($row['gender'] == "Male" && $row['city'] == $city && strtotime($row['date'])>=strtotime($datefrom) && strtotime($row['date'])<=strtotime($dateto)){
							$malecity++;
							$totalcity++;
						}
					}
			}
			
					echo "<tr> 
						<td> Number of Females
						<td> $femalecity
						<td> ";
						if($totalcity == 0) echo "0%"; else echo round(($femalecity/$totalcity)*100)."%";
					echo "</tr>
					<tr> 
						<td> Number of Males
						<td> $malecity
						<td> ";
						if($totalcity == 0) echo "0%"; else echo round(($malecity/$totalcity)*100)."%";
					echo "</tr>";
		}
		?>
	</table><br>

	<table frame="box" class="frame alttable" style="width:98%; left:1%;">
		<tr class="header">
			<td colspan=2 class="noborder">Other Conditions (Using Demographics) (<?php echo $choice1; ?>) </td>
		</tr>
	</table><br>

	<?php
	if($secChoice == "Yes"){
	echo "<table frame='box' class='frame alttable' style='width:98%; left:1%; text-align:center;'>
		<tr class='header'>
			<td colspan=9 class='noborder' style='text-align:left;'>Sections </td>
		</tr>
		<tr style='text-align: center;'>
			<td><b> Conditions </b>
			<td><b> # of <br>Cases </b>
			<td><b> Females </b>
			<td><b> % <br>Females </b>
			<td><b> Males </b>
			<td><b> % <br>Males </b>
			<td><b> % Females <br>(over total <br>females) </b>
			<td><b> % Males <br>(over total <br>males) </b>
			<td><b> % Cases <br>(over total <br>patients) </b>
		</tr>";

			 
		$perioCount = 0;
		$osCount = 0;
		$endoCount = 0;
		$rpdCount = 0;
		$fpdCount = 0;
		$cdCount = 0;
		$orthoCount = 0;
		$pedoCount = 0;
		$restoCount = 0;
		$perioMCount = 0;
		$osMCount = 0;
		$endoMCount = 0;
		$rpdMCount = 0;
		$fpdMCount = 0;
		$cdMCount = 0;
		$orthoMCount = 0;
		$pedoMCount = 0;
		$restoMCount = 0;
		$perioFCount = 0;
		$osFCount = 0;
		$endoFCount = 0;
		$rpdFCount = 0;
		$fpdFCount = 0;
		$cdFCount = 0;
		$orthoFCount = 0;
		$pedoFCount = 0;
		$restoFCount = 0;

		if($patientmatch){
		foreach ($patientmatch as $row){
			if($perio == 'Yes' && $row['perio'] == 'Yes' && strtotime($row['date'])>=strtotime($datefrom) && strtotime($row['date'])<=strtotime($dateto)){
				$perioCount++;
				if($row['gender'] == 'Female') $perioFCount++;
				elseif($row['gender'] == 'Male') $perioMCount++;				
			}
			if($os == 'Yes' && $row['os'] == 'Yes' && strtotime($row['date'])>=strtotime($datefrom) && strtotime($row['date'])<=strtotime($dateto)){
				$osCount++;
				if($row['gender'] == 'Female') $osFCount++;
				elseif($row['gender'] == 'Male') $osMCount++;			
			}
			if($endo == 'Yes' && $row['endo'] == 'Yes' && strtotime($row['date'])>=strtotime($datefrom) && strtotime($row['date'])<=strtotime($dateto)){
				$endoCount++;
				if($row['gender'] == 'Female') $endoFCount++;
				elseif($row['gender'] == 'Male') $endoMCount++;			
			}
			if($rpd == 'Yes' && $row['rpd'] == 'Yes' && strtotime($row['date'])>=strtotime($datefrom) && strtotime($row['date'])<=strtotime($dateto)){
				$rpdCount++;
				if($row['gender'] == 'Female') $rpdFCount++;
				elseif($row['gender'] == 'Male') $rpdMCount++;
			}
			if($fpd == 'Yes' && $row['fpd'] == 'Yes' && strtotime($row['date'])>=strtotime($datefrom) && strtotime($row['date'])<=strtotime($dateto)){
				$fpdCount++;
				if($row['gender'] == 'Female') $fpdFCount++;
				elseif($row['gender'] == 'Male') $fpdMCount++;				
			}
			if($cd == 'Yes' && $row['cd'] == 'Yes' && strtotime($row['date'])>=strtotime($datefrom) && strtotime($row['date'])<=strtotime($dateto)){
				$cdCount++;
				if($row['gender'] == 'Female') $cdFCount++;
				elseif($row['gender'] == 'Male') $cdMCount++;
			}
			if($ortho == 'Yes' && $row['ortho'] == 'Yes' && strtotime($row['date'])>=strtotime($datefrom) && strtotime($row['date'])<=strtotime($dateto)){
				$orthoCount++;
				if($row['gender'] == 'Female') $orthoFCount++;
				elseif($row['gender'] == 'Male') $orthoMCount++;
			}
			if($pedo == 'Yes' && $row['pedo'] == 'Yes' && strtotime($row['date'])>=strtotime($datefrom) && strtotime($row['date'])<=strtotime($dateto)){
				$pedoCount++;
				if($row['gender'] == 'Female') $pedoFCount++;
				elseif($row['gender'] == 'Male') $pedoMCount++;					
			}
			if($resto == 'Yes' && $row['resto'] == 'Yes' && strtotime($row['date'])>=strtotime($datefrom) && strtotime($row['date'])<=strtotime($dateto)){
				$restoCount++;
				if($row['gender'] == 'Female') $restoFCount++;
				elseif($row['gender'] == 'Male') $restoMCount++;					
			}

		}
}



		echo "<tr>
			<td> Periodontics
			<td> $perioCount
			<td> $perioFCount
			<td> ";
			if($perioCount == 0) echo "0%"; else echo round(($perioFCount/$perioCount)*100)."%";
		echo	"<td> $perioMCount
			<td>";
			if($perioCount == 0) echo "0%"; else echo round(($perioMCount/$perioCount)*100)."%";
		echo 	"<td>";
			if($femaleCount == 0) echo "0%"; else echo round(($perioFCount/$femaleCount)*100)."%";
		echo	"<td>";
			if($maleCount == 0) echo "0%"; else echo round(($perioMCount/$maleCount)*100)."%";
		echo	"<td>";
			if($totalCount == 0) echo "0%"; else echo round(($perioCount/$totalCount)*100)."%";
		echo"</tr>
		<tr>
			<td> Oral Surgery
			<td> $osCount
			<td> $osFCount
			<td> ";
			if($osCount == 0) echo "0%"; else echo round(($osFCount/$osCount)*100)."%"; 
		echo	"<td> $osMCount
			<td>";
			if($osCount == 0) echo "0%"; else echo round(($osMCount/$osCount)*100)."%"; 
		echo	"<td>";
			if($femaleCount == 0) echo "0%"; else echo round(($osFCount/$femaleCount)*100)."%";
		echo	"<td>";
			if($maleCount == 0) echo "0%"; else echo round(($osMCount/$maleCount)*100)."%"; 
		echo	"<td>";
			if($totalCount == 0) echo "0%"; else echo round(($osCount/$totalCount)*100)."%"; 
		echo "</tr>
		<tr>
			<td> Endodontics
			<td> $endoCount
			<td> $endoFCount
			<td>";
			if($endoCount == 0) echo "0%"; else echo round(($endoFCount/$endoCount)*100)."%"; 
		echo	"<td> $endoMCount
			<td>";
			if($endoCount == 0) echo "0%"; else echo round(($endoMCount/$endoCount)*100)."%";
		echo	"<td>";
			if($femaleCount == 0) echo "0%"; else echo round(($endoFCount/$femaleCount)*100)."%"; 
		echo	"<td>";
			if($maleCount == 0) echo "0%"; else echo round(($endoMCount/$maleCount)*100)."%"; 
		echo	"<td>";
			if($totalCount == 0) echo "0%"; else echo round(($endoCount/$totalCount)*100)."%"; 
		echo "</tr>
		<tr>
			<td> Removable Prosthodontics
			<td> $rpdCount
			<td> $rpdFCount
			<td>";
			if($rpdCount == 0) echo "0%"; else echo round(($rpdFCount/$rpdCount)*100)."%"; 
		echo 	"<td> $rpdMCount
			<td>";
			if($rpdCount == 0) echo "0%"; else echo round(($rpdMCount/$rpdCount)*100)."%";
		echo	"<td>";
			if($femaleCount == 0) echo "0%"; else echo round(($rpdFCount/$femaleCount)*100)."%"; 
		echo	"<td>";
			if($maleCount == 0) echo "0%"; else echo round(($rpdMCount/$maleCount)*100)."%"; 
		echo	"<td>";
			if($totalCount == 0) echo "0%"; else echo round(($rpdCount/$totalCount)*100)."%"; 
		echo "</tr>
		<tr>
			<td> Fixed Partial Prosthodontics
			<td> $fpdCount
			<td> $fpdFCount
			<td>";
			if($fpdCount == 0) echo "0%"; else echo round(($fpdFCount/$fpdCount)*100)."%"; 
		echo	"<td> $fpdMCount
			<td>";
			if($fpdCount == 0) echo "0%"; else echo round(($fpdMCount/$fpdCount)*100)."%"; 
		echo	"<td>";
			if($femaleCount == 0) echo "0%"; else echo round(($fpdFCount/$femaleCount)*100)."%"; 
		echo	"<td>";
			if($maleCount == 0) echo "0%"; else echo round(($fpdMCount/$maleCount)*100)."%"; 
		echo	"<td>";
			if($totalCount == 0) echo "0%"; else echo round(($fpdCount/$totalCount)*100)."%"; 
		echo "</tr>
		<tr>
			<td> Complete Denture
			<td> $cdCount
			<td> $cdFCount
			<td>";
			if($cdCount == 0) echo "0%"; else echo round(($cdFCount/$cdCount)*100)."%"; 
		echo	"<td> $cdMCount
			<td>";
			if($cdCount == 0) echo "0%"; else echo round(($cdMCount/$cdCount)*100)."%"; 
		echo	"<td>";
			if($femaleCount == 0) echo "0%"; else echo round(($cdFCount/$femaleCount)*100)."%"; 
		echo	"<td>";
			if($maleCount == 0) echo "0%"; else echo round(($cdMCount/$maleCount)*100)."%"; 
		echo	"<td>";
			if($totalCount == 0) echo "0%"; else echo round(($cdCount/$totalCount)*100)."%"; 
		echo "</tr>
		<tr>
			<td> Orthodontics
			<td> $orthoCount
			<td> $orthoFCount
			<td>";
			if($orthoCount == 0) echo "0%"; else echo round(($orthoFCount/$orthoCount)*100)."%"; 
		echo	"<td> $orthoMCount
			<td>";
			if($orthoCount == 0) echo "0%"; else echo round(($orthoMCount/$orthoCount)*100)."%"; 
		echo	"<td>";
			if($femaleCount == 0) echo "0%"; else echo round(($orthoFCount/$femaleCount)*100)."%"; 
		echo	"<td>";
			if($maleCount == 0) echo "0%"; else echo round(($orthoMCount/$maleCount)*100)."%"; 
		echo	"<td>";
			if($totalCount == 0) echo "0%"; else echo round(($orthoCount/$totalCount)*100)."%"; 
		echo "</tr>
		<tr>
			<td> Pedodontics
			<td> $pedoCount
			<td> $pedoFCount
			<td>";
			if($pedoCount == 0) echo "0%"; else echo round(($pedoFCount/$pedoCount)*100)."%";
		echo	"<td> $pedoMCount
			<td>";
			if($pedoCount == 0) echo "0%"; else echo round(($pedoMCount/$pedoCount)*100)."%";
		echo	"<td>";
			if($femaleCount == 0) echo "0%"; else echo round(($pedoFCount/$femaleCount)*100)."%";
		echo	"<td>";
			if($maleCount == 0) echo "0%"; else echo round(($pedoMCount/$maleCount)*100)."%"; 
		echo	"<td>";
			if($totalCount == 0) echo "0%"; else echo round(($pedoCount/$totalCount)*100)."%";
		echo "</tr>
		<tr>
			<td> Restorative Dentistry
			<td> $restoCount
			<td> $restoFCount
			<td> ";
			if($restoCount == 0) echo "0%"; else echo round(($restoFCount/$restoCount)*100)."%"; 
		echo	"<td> $restoMCount
			<td>";
			if($restoCount == 0) echo "0%"; else echo round(($restoMCount/$restoCount)*100)."%"; 
		echo	"<td>";
			if($femaleCount == 0) echo "0%"; else echo round(($restoFCount/$femaleCount)*100)."%"; 
		echo 	"<td>"; 
			if($maleCount == 0) echo "0%"; else echo round(($restoMCount/$maleCount)*100)."%"; 
		echo	"<td>";
			if($totalCount == 0) echo "0%"; else echo round(($restoCount/$totalCount)*100)."%"; 
		echo "</tr>
		<tr>
			<td> <br>Total no. of cases
			<td> <br><b>".($perioCount + $osCount + $endoCount + $rpdCount + $fpdCount + $cdCount + $orthoCount + $pedoCount + $restoCount)."</b>
		</tr>
		
	</table><br>";
} ?>


<?php if($choice2 != ""){
	echo "<table frame='box' class='frame alttable' style='width:98%; left:1%; text-align:center;'>
		<tr class='header'>
			<td colspan=9 class='noborder' style='text-align:left;'> Dental Status Chart ($choice2) </td>
		</tr>
		<tr style='text-align: center;'>
			<td><b> Conditions </b>
			<td><b> # of <br>Cases </b>
			<td><b> Females </b>
			<td><b> % <br>Females </b>
			<td><b> Males </b>
			<td><b> % <br>Males </b>
			<td><b> % Females <br>(over total <br>females) </b>
			<td><b> % Males <br>(over total <br>males) </b>
			<td><b> % Cases <br>(over total <br>patients) </b>
		</tr>";
		
		$carCount = 0;
		$recCount = 0;
		$resCount = 0;
		$ddrCount = 0;
		$rotCount = 0;
		$extruCount = 0;
		$extraCount = 0;
		$intCount = 0;
		$mdrCount = 0;
		$pafsCount = 0;
		$misCount = 0;
		$rctCount = 0;
		$compdentCount = 0;
		$singdentCount = 0;
		$rempardentCount = 0;
		$metcrCount = 0;
		$porcrCount = 0;
		$uneCount = 0;
		$impCount = 0;
		$pccCount = 0;
		$acrcrCount = 0;
		$pftmCount = 0;
		$compCount = 0;
		$singCount = 0;
		$remparCount = 0;
		$carFCount = 0;
		$recFCount = 0;
		$resFCount = 0;
		$ddrFCount = 0;
		$rotFCount = 0;
		$extruFCount = 0;
		$extraFCount = 0;
		$intFCount = 0;
		$mdrFCount = 0;
		$pafsFCount = 0;
		$misFCount = 0;
		$rctFCount = 0;
		$compdentFCount = 0;
		$singdentFCount = 0;
		$rempardentFCount = 0;
		$metcrFCount = 0;
		$porcrFCount = 0;
		$uneFCount = 0;
		$impFCount = 0;
		$pccFCount = 0;
		$acrcrFCount = 0;
		$pftmFCount = 0;
		$compFCount = 0;
		$singFCount = 0;
		$remparFCount = 0;
		$carMCount = 0;
		$recMCount = 0;
		$resMCount = 0;
		$ddrMCount = 0;
		$rotMCount = 0;
		$extruMCount = 0;
		$extraMCount = 0;
		$intMCount = 0;
		$mdrMCount = 0;
		$pafsMCount = 0;
		$misMCount = 0;
		$rctMCount = 0;
		$compdentMCount = 0;
		$singdentMCount = 0;
		$rempardentMCount = 0;
		$metcrMCount = 0;
		$porcrMCount = 0;
		$uneMCount = 0;
		$impMCount = 0;
		$pccMCount = 0;
		$acrcrMCount = 0;
		$pftmMCount = 0;
		$compMCount = 0;
		$singMCount = 0;
		$remparMCount = 0;

if($patientmatch){
		foreach ($patientmatch as $row){
			if($caries == 'Yes' && ($row['distal_caries'] != ' ' || $row['buccal_caries'] != ' ' || $row['lingual_caries'] != ' ' || $row['mesial_caries'] != ' ' || $row['occlusal_caries']  != ' ') && strtotime($row['date'])>=strtotime($datefrom) && strtotime($row['date'])<=strtotime($dateto)){
				$carCount++;
				if($row['gender'] == 'Female') $carFCount++;
				elseif($row['gender'] == 'Male') $carMCount++;
			}
			if($recurrent == 'Yes' && ($row['distal_recurrent'] != ' ' || $row['buccal_recurrent'] != ' ' || $row['lingual_recurrent'] != ' ' || $row['mesial_recurrent'] != ' ' || $row['occlusal_recurrent']  != ' ') && strtotime($row['date'])>=strtotime($datefrom) && strtotime($row['date'])<=strtotime($dateto)){
				$recCount++;
				if($row['gender'] == 'Female') $recFCount++;
				elseif($row['gender'] == 'Male') $recMCount++;				
			}
			if($restoration == 'Yes' && ($row['distal_restoration'] != ' ' || $row['buccal_restoration'] != ' ' || $row['lingual_restoration'] != ' ' || $row['mesial_restoration'] != ' ' || $row['occlusal_restoration']  != ' ') && strtotime($row['date'])>=strtotime($datefrom) && strtotime($row['date'])<=strtotime($dateto)){
				$resCount++;
				if($row['gender'] == 'Female') $resFCount++;
				elseif($row['gender'] == 'Male') $resMCount++;				
			}
			if($ddr == 'Yes' && $row['distal_rotation'] != ' ' && strtotime($row['date'])>=strtotime($datefrom) && strtotime($row['date'])<=strtotime($dateto)){
				$ddrCount++;
				if($row['gender'] == 'Female') $ddrFCount++;
				elseif($row['gender'] == 'Male') $ddrMCount++;		
			}
			if($rot == 'Yes' && $row['rotation'] != ' ' && strtotime($row['date'])>=strtotime($datefrom) && strtotime($row['date'])<=strtotime($dateto)){
				$rotCount++;
				if($row['gender'] == 'Female') $rotFCount++;
				elseif($row['gender'] == 'Male') $rotMCount++;				
			}
			if($extracted == 'Yes' && $row['extracted'] != ' ' && strtotime($row['date'])>=strtotime($datefrom) && strtotime($row['date'])<=strtotime($dateto)){
				$extraCount++;
				if($row['gender'] == 'Female') $extraFCount++;
				elseif($row['gender'] == 'Male') $extraMCount++;				
				}
			if($extrusion == 'Yes' && $row['extrusion'] != ' ' && strtotime($row['date'])>=strtotime($datefrom) && strtotime($row['date'])<=strtotime($dateto)){
				$extruCount++;
				if($row['gender'] == 'Female') $extruFCount++;
				elseif($row['gender'] == 'Male') $extruMCount++;
			}
			if($intrusion == 'Yes' && $row['intrusion'] != ' ' && strtotime($row['date'])>=strtotime($datefrom) && strtotime($row['date'])<=strtotime($dateto)){
				$intCount++;
				if($row['gender'] == 'Female') $intFCount++;
				elseif($row['gender'] == 'Male') $intMCount++;					
			}
			if($mdr == 'Yes' && $row['mesial_rotation'] != ' ' && strtotime($row['date'])>=strtotime($datefrom) && strtotime($row['date'])<=strtotime($dateto)){
				$mdrCount++;
				if($row['gender'] == 'Female') $mdrFCount++;
				elseif($row['gender'] == 'Male') $mdrMCount++;					
			}
			if($pafs == 'Yes' && $row['pitfissure_sealants'] != ' ' && strtotime($row['date'])>=strtotime($datefrom) && strtotime($row['date'])<=strtotime($dateto)){
				$pafsCount++;
				if($row['gender'] == 'Female') $pafsFCount++;
				elseif($row['gender'] == 'Male') $pafsMCount++;					
			}
			if($missing == 'Yes' && $row['missing'] != ' ' && strtotime($row['date'])>=strtotime($datefrom) && strtotime($row['date'])<=strtotime($dateto)){
				$misCount++;
				if($row['gender'] == 'Female') $misFCount++;
				elseif($row['gender'] == 'Male') $misMCount++;					
			}
			if($rct == 'Yes' && $row['rootcanal_treatment'] != ' ' && strtotime($row['date'])>=strtotime($datefrom) && strtotime($row['date'])<=strtotime($dateto)){
				$rctCount++;
				if($row['gender'] == 'Female') $rctFCount++;
				elseif($row['gender'] == 'Male') $rctMCount++;					
			}
			if($completedenture == 'Yes' && $row['completedenture'] == 'Yes' && strtotime($row['date'])>=strtotime($datefrom) && strtotime($row['date'])<=strtotime($dateto)){
				$compCount++;
				if($row['gender'] == 'Female') $compFCount++;
				elseif($row['gender'] == 'Male') $compMCount++;					
			}
			if($singledenture == 'Yes' && $row['singledenture'] != 'Yes' && strtotime($row['date'])>=strtotime($datefrom) && strtotime($row['date'])<=strtotime($dateto)){
				$singCount++;
				if($row['gender'] == 'Female') $singFCount++;
				elseif($row['gender'] == 'Male') $singMCount++;					
			}
			if($removablepartialdenture == 'Yes' && $row['removablepartialdenture'] != 'Yes' && strtotime($row['date'])>=strtotime($datefrom) && strtotime($row['date'])<=strtotime($dateto)){
				$remparCount++;
				if($row['gender'] == 'Female') $remparFCount++;
				elseif($row['gender'] == 'Male') $remparMCount++;					
			}
			if($metcr == 'Yes' && $row['metal_crown'] != ' ' && strtotime($row['date'])>=strtotime($datefrom) && strtotime($row['date'])<=strtotime($dateto)){
				$metcrCount++;
				if($row['gender'] == 'Female') $metcrFCount++;
				elseif($row['gender'] == 'Male') $metcrMCount++;					
			}
			if($porcr == 'Yes' && $row['porcelain_crown'] != ' ' && strtotime($row['date'])>=strtotime($datefrom) && strtotime($row['date'])<=strtotime($dateto)){
				$porcrCount++;
				if($row['gender'] == 'Female') $metcrFCount++;
				elseif($row['gender'] == 'Male') $metcrMCount++;					
			}
			if($unerupted == 'Yes' && $row['unerupted'] != ' ' && strtotime($row['date'])>=strtotime($datefrom) && strtotime($row['date'])<=strtotime($dateto)){
				$uneCount++;
				if($row['gender'] == 'Female') $uneFCount++;
				elseif($row['gender'] == 'Male') $uneMCount++;					
			}
			if($impacted == 'Yes' && $row['impacted'] != ' ' && strtotime($row['date'])>=strtotime($datefrom) && strtotime($row['date'])<=strtotime($dateto)){
				$impCount++;
				if($row['gender'] == 'Female') $impFCount++;
				elseif($row['gender'] == 'Male') $impMCount++;					
			}
			if($pcc== 'Yes' && $row['postcore_crown'] != ' ' && strtotime($row['date'])>=strtotime($datefrom) && strtotime($row['date'])<=strtotime($dateto)){
				$pccCount++;
				if($row['gender'] == 'Female') $pccFCount++;
				elseif($row['gender'] == 'Male') $pccMCount++;					
			}
			if($acrcr == 'Yes' && $row['acrylic_crown'] != ' ' && strtotime($row['date'])>=strtotime($datefrom) && strtotime($row['date'])<=strtotime($dateto)){
				$acrcrCount++;
				if($row['gender'] == 'Female') $acrcrFCount++;
				elseif($row['gender'] == 'Male') $acrcrMCount++;					
			}
			if($pftm == 'Yes' && $row['porcelain_fused'] != ' ' && strtotime($row['date'])>=strtotime($datefrom) && strtotime($row['date'])<=strtotime($dateto)){
				$pftmCount++;
				if($row['gender'] == 'Female') $pftmFCount++;
				elseif($row['gender'] == 'Male') $pftmMCount++;					
			}
		}
}

			if($caries == 'Yes') {
				echo "<tr>
					<td>Caries
					<td>$carCount
					<td>$carFCount
					<td>";
					if($carCount == 0) echo "0%"; else echo round(($carFCount/$carCount)*100)."%";
				echo "	<td>$carMCount
					<td>";
					if($carCount == 0) echo "0%"; else echo round(($carMCount/$carCount)*100)."%";
				echo "	<td>";
					if($femaleCount == 0) echo "0%"; else echo round(($carFCount/$femaleCount)*100)."%";
				echo "	<td>";
					if($maleCount == 0) echo "0%"; else echo round(($carMCount/$maleCount)*100)."%";
				echo "	<td>";
					if($totalCount == 0) echo "0%"; else echo round(($carCount/$totalCount)*100)."%"; 
				echo "</tr>";
			}
			if($recurrent == 'Yes') {
				echo "<tr>
					<td>Recurrent Caries
					<td>$recCount
					<td>$recFCount
					<td>";
					if($recCount == 0) echo "0%"; else echo round(($recFCount/$recCount)*100)."%";
				echo "	<td>$recMCount
					<td>";
					if($recCount == 0) echo "0%"; else echo round(($recMCount/$recCount)*100)."%";
				echo "	<td>";
					if($femaleCount == 0) echo "0%"; else echo round(($recFCount/$femaleCount)*100)."%";
				echo "	<td>";
					if($maleCount == 0) echo "0%"; else echo round(($recMCount/$maleCount)*100)."%";
				echo "	<td>";
					if($totalCount == 0) echo "0%"; else echo round(($recCount/$totalCount)*100)."%"; 
				echo "</tr>";
			}
			if($restoration == 'Yes') {
				echo "<tr>
					<td>Restoration
					<td>$resCount
					<td>$resFCount
					<td>";
					if($resCount == 0) echo "0%"; else echo round(($resFCount/$resCount)*100)."%";
				echo "	<td>$resMCount
					<td>";
					if($resCount == 0) echo "0%"; else echo round(($resMCount/$resCount)*100)."%";
				echo "	<td>";
					if($femaleCount == 0) echo "0%"; else echo round(($resFCount/$femaleCount)*100)."%";
				echo "	<td>";
					if($maleCount == 0) echo "0%"; else echo round(($resMCount/$maleCount)*100)."%";
				echo "	<td>";
					if($totalCount == 0) echo "0%"; else echo round(($resCount/$totalCount)*100)."%"; 
				echo "</tr>";
			}
			if($extrusion == 'Yes') {
				echo "<tr>
					<td>Extrusion
					<td>$extruCount
					<td>$extruFCount
					<td>";
					if($extruCount == 0) echo "0%"; else echo round(($extruFCount/$extruCount)*100)."%";
				echo "	<td>$extruMCount
					<td>";
					if($extruCount == 0) echo "0%"; else echo round(($extruMCount/$extruCount)*100)."%";
				echo "	<td>";
					if($femaleCount == 0) echo "0%"; else echo round(($extruFCount/$femaleCount)*100)."%";
				echo "	<td>";
					if($maleCount == 0) echo "0%"; else echo round(($extruMCount/$maleCount)*100)."%";
				echo "	<td>";
					if($totalCount == 0) echo "0%"; else echo round(($extruCount/$totalCount)*100)."%"; 
				echo "</tr>";
			}
			if($intrusion == 'Yes') {
				echo "<tr>
					<td>Intrusion
					<td>$intCount
					<td>$intFCount
					<td>";
					if($intCount == 0) echo "0%"; else echo round(($intFCount/$intCount)*100)."%";
				echo "	<td>$intMCount
					<td>";
					if($intCount == 0) echo "0%"; else echo round(($intMCount/$intCount)*100)."%";
				echo "	<td>";
					if($femaleCount == 0) echo "0%"; else echo round(($intFCount/$femaleCount)*100)."%";
				echo "	<td>";
					if($maleCount == 0) echo "0%"; else echo round(($intMCount/$maleCount)*100)."%";
				echo "	<td>";
					if($totalCount == 0) echo "0%"; else echo round(($intCount/$totalCount)*100)."%"; 
				echo "</tr>";
			}
			if($missing == 'Yes') {
				echo "<tr>
					<td>Missing
					<td>$misCount
					<td>$misFCount
					<td>";
					if($misCount == 0) echo "0%"; else echo round(($misFCount/$misCount)*100)."%";
				echo "	<td>$misMCount
					<td>";
					if($misCount == 0) echo "0%"; else echo round(($misMCount/$misCount)*100)."%";
				echo "	<td>";
					if($femaleCount == 0) echo "0%"; else echo round(($misFCount/$femaleCount)*100)."%";
				echo "	<td>";
					if($maleCount == 0) echo "0%"; else echo round(($misMCount/$maleCount)*100)."%";
				echo "	<td>";
					if($totalCount == 0) echo "0%"; else echo round(($misCount/$totalCount)*100)."%"; 
				echo "</tr>";
			}
			if($impacted == 'Yes') {
				echo "<tr>
					<td>Impacted
					<td>$impCount
					<td>$impFCount
					<td>";
					if($impCount == 0) echo "0%"; else echo round(($impFCount/$impCount)*100)."%";
				echo "	<td>$impMCount
					<td>";
					if($impCount == 0) echo "0%"; else echo round(($impMCount/$impCount)*100)."%";
				echo "	<td>";
					if($femaleCount == 0) echo "0%"; else echo round(($impFCount/$femaleCount)*100)."%";
				echo "	<td>";
					if($maleCount == 0) echo "0%"; else echo round(($impMCount/$maleCount)*100)."%";
				echo "	<td>";
					if($totalCount == 0) echo "0%"; else echo round(($impCount/$totalCount)*100)."%"; 
				echo "</tr>";
			}
			if($extracted == 'Yes') {
				echo "<tr>
					<td>Extracted
					<td>$extraCount
					<td>$extraFCount
					<td>";
					if($extraCount == 0) echo "0%"; else echo round(($extraFCount/$extraCount)*100)."%";
				echo "	<td>$extraMCount
					<td>";
					if($extraCount == 0) echo "0%"; else echo round(($extraMCount/$extraCount)*100)."%";
				echo "	<td>";
					if($femaleCount == 0) echo "0%"; else echo round(($extraFCount/$femaleCount)*100)."%";
				echo "	<td>";
					if($maleCount == 0) echo "0%"; else echo round(($extraMCount/$maleCount)*100)."%";
				echo "	<td>";
					if($totalCount == 0) echo "0%"; else echo round(($extraCount/$totalCount)*100)."%"; 
				echo "</tr>";
			}
			if($mdr == 'Yes') {
				echo "<tr>
					<td>Mesial Drifting Rotation
					<td>$mdrCount
					<td>$mdrFCount
					<td>";
					if($mdrCount == 0) echo "0%"; else echo round(($mdrFCount/$mdrCount)*100)."%";
				echo "	<td>$mdrMCount
					<td>";
					if($mdrCount == 0) echo "0%"; else echo round(($mdrMCount/$mdrCount)*100)."%";
				echo "	<td>";
					if($femaleCount == 0) echo "0%"; else echo round(($mdrFCount/$femaleCount)*100)."%";
				echo "	<td>";
					if($maleCount == 0) echo "0%"; else echo round(($mdrMCount/$maleCount)*100)."%";
				echo "	<td>";
					if($totalCount == 0) echo "0%"; else echo round(($mdrCount/$totalCount)*100)."%"; 
				echo "</tr>";
			}
			if($ddr == 'Yes') {
				echo "<tr>
					<td>Distal Drifting Rotation
					<td>$ddrCount
					<td>$ddrFCount
					<td>";
					if($ddrCount == 0) echo "0%"; else echo round(($ddrFCount/$ddrCount)*100)."%";
				echo "	<td>$ddrMCount
					<td>";
					if($ddrCount == 0) echo "0%"; else echo round(($ddrMCount/$ddrCount)*100)."%";
				echo "	<td>";
					if($femaleCount == 0) echo "0%"; else echo round(($ddrFCount/$femaleCount)*100)."%";
				echo "	<td>";
					if($maleCount == 0) echo "0%"; else echo round(($ddrMCount/$maleCount)*100)."%";
				echo "	<td>";
					if($totalCount == 0) echo "0%"; else echo round(($ddrCount/$totalCount)*100)."%"; 
				echo "</tr>";
			}
			if($rot == 'Yes') {
				echo "<tr>
					<td>Rotation
					<td>$rotCount
					<td>$rotFCount
					<td>";
					if($rotCount == 0) echo "0%"; else echo round(($rotFCount/$rotCount)*100)."%";
				echo "	<td>$rotMCount
					<td>";
					if($rotCount == 0) echo "0%"; else echo round(($rotMCount/$rotCount)*100)."%";
				echo "	<td>";
					if($femaleCount == 0) echo "0%"; else echo round(($rotFCount/$femaleCount)*100)."%";
				echo "	<td>";
					if($maleCount == 0) echo "0%"; else echo round(($rotMCount/$maleCount)*100)."%";
				echo "	<td>";
					if($totalCount == 0) echo "0%"; else echo round(($rotCount/$totalCount)*100)."%"; 
				echo "</tr>";
			}
			if($unerupted == 'Yes') {
				echo "<tr>
					<td>Unerupted
					<td>$uneCount
					<td>$uneFCount
					<td>";
					if($uneCount == 0) echo "0%"; else echo round(($uneFCount/$uneCount)*100)."%";
				echo "	<td>$uneMCount
					<td>";
					if($uneCount == 0) echo "0%"; else echo round(($uneMCount/$uneCount)*100)."%";
				echo "	<td>";
					if($femaleCount == 0) echo "0%"; else echo round(($uneFCount/$femaleCount)*100)."%";
				echo "	<td>";
					if($maleCount == 0) echo "0%"; else echo round(($uneMCount/$maleCount)*100)."%";
				echo "	<td>";
					if($totalCount == 0) echo "0%"; else echo round(($uneCount/$totalCount)*100)."%"; 
				echo "</tr>";
			}
			if($compdent == 'Yes') {
				echo "<tr>
					<td>Complete Denture
					<td>$compCount
					<td>$compFCount
					<td>";
					if($compCount == 0) echo "0%"; else echo round(($compFCount/$compCount)*100)."%";
				echo "	<td>$compMCount
					<td>";
					if($compCount == 0) echo "0%"; else echo round(($compMCount/$compCount)*100)."%";
				echo "	<td>";
					if($femaleCount == 0) echo "0%"; else echo round(($compFCount/$femaleCount)*100)."%";
				echo "	<td>";
					if($maleCount == 0) echo "0%"; else echo round(($compMCount/$maleCount)*100)."%";
				echo "	<td>";
					if($totalCount == 0) echo "0%"; else echo round(($compCount/$totalCount)*100)."%"; 
				echo "</tr>";
			}
			if($singdent == 'Yes') {
				echo "<tr>
					<td>Sing Denture
					<td>$singCount
					<td>$singFCount
					<td>";
					if($singCount == 0) echo "0%"; else echo round(($singFCount/$singCount)*100)."%";
				echo "	<td>$singMCount
					<td>";
					if($singCount == 0) echo "0%"; else echo round(($singMCount/$singCount)*100)."%";
				echo "	<td>";
					if($femaleCount == 0) echo "0%"; else echo round(($singFCount/$femaleCount)*100)."%";
				echo "	<td>";
					if($maleCount == 0) echo "0%"; else echo round(($singMCount/$maleCount)*100)."%";
				echo "	<td>";
					if($totalCount == 0) echo "0%"; else echo round(($singCount/$totalCount)*100)."%"; 
				echo "</tr>";
			}
			if($rempardent == 'Yes') {
				echo "<tr>
					<td>Removable Partial Denture
					<td>$remparCount
					<td>$remparFCount
					<td>";
					if($remparCount == 0) echo "0%"; else echo round(($remparFCount/$remparCount)*100)."%";
				echo "	<td>$remparMCount
					<td>";
					if($remparCount == 0) echo "0%"; else echo round(($remparMCount/$remparCount)*100)."%";
				echo "	<td>";
					if($femaleCount == 0) echo "0%"; else echo round(($remparFCount/$femaleCount)*100)."%";
				echo "	<td>";
					if($maleCount == 0) echo "0%"; else echo round(($remparMCount/$maleCount)*100)."%";
				echo "	<td>";
					if($totalCount == 0) echo "0%"; else echo round(($remparCount/$totalCount)*100)."%"; 
				echo "</tr>";
			}
			if($acrcr == 'Yes') {
				echo "<tr>
					<td>Acrylic Crown
					<td>$acrcrCount
					<td>$acrcrFCount
					<td>";
					if($acrcrCount == 0) echo "0%"; else echo round(($acrcrFCount/$acrcrCount)*100)."%";
				echo "	<td>$acrcrMCount
					<td>";
					if($acrcrCount == 0) echo "0%"; else echo round(($acrcrMCount/$acrcrCount)*100)."%";
				echo "	<td>";
					if($femaleCount == 0) echo "0%"; else echo round(($acrcrFCount/$femaleCount)*100)."%";
				echo "	<td>";
					if($maleCount == 0) echo "0%"; else echo round(($acrcrMCount/$maleCount)*100)."%";
				echo "	<td>";
					if($totalCount == 0) echo "0%"; else echo round(($acrcrCount/$totalCount)*100)."%"; 
				echo "</tr>";
			}
			if($metcr == 'Yes') {
				echo "<tr>
					<td>Metal Crown
					<td>$metcrCount
					<td>$metcrFCount
					<td>";
					if($metcrCount == 0) echo "0%"; else echo round(($metcrFCount/$metcrCount)*100)."%";
				echo "	<td>$metcrMCount
					<td>";
					if($metcrCount == 0) echo "0%"; else echo round(($metcrMCount/$metcrCount)*100)."%";
				echo "	<td>";
					if($femaleCount == 0) echo "0%"; else echo round(($metcrFCount/$femaleCount)*100)."%";
				echo "	<td>";
					if($maleCount == 0) echo "0%"; else echo round(($metcrMCount/$maleCount)*100)."%";
				echo "	<td>";
					if($totalCount == 0) echo "0%"; else echo round(($metcrCount/$totalCount)*100)."%"; 
				echo "</tr>";
			}
			if($porcr == 'Yes') {
				echo "<tr>
					<td>Porcelain Crown
					<td>$porcrCount
					<td>$porcrFCount
					<td>";
					if($porcrCount == 0) echo "0%"; else echo round(($porcrFCount/$porcrCount)*100)."%";
				echo "	<td>$porcrMCount
					<td>";
					if($porcrCount == 0) echo "0%"; else echo round(($porcrMCount/$porcrCount)*100)."%";
				echo "	<td>";
					if($femaleCount == 0) echo "0%"; else echo round(($porcrFCount/$femaleCount)*100)."%";
				echo "	<td>";
					if($maleCount == 0) echo "0%"; else echo round(($porcrMCount/$maleCount)*100)."%";
				echo "	<td>";
					if($totalCount == 0) echo "0%"; else echo round(($porcrCount/$totalCount)*100)."%"; 
				echo "</tr>";
			}
			if($pftm == 'Yes') {
				echo "<tr>
					<td>Porcelain Fused to Metal
					<td>$pftmCount
					<td>$pftmFCount
					<td>";
					if($pftmCount == 0) echo "0%"; else echo round(($pftmFCount/$pftmCount)*100)."%";
				echo "	<td>$pftmMCount
					<td>";
					if($pftmCount == 0) echo "0%"; else echo round(($pftmMCount/$pftmCount)*100)."%";
				echo "	<td>";
					if($femaleCount == 0) echo "0%"; else echo round(($pftmFCount/$femaleCount)*100)."%";
				echo "	<td>";
					if($maleCount == 0) echo "0%"; else echo round(($pftmMCount/$maleCount)*100)."%";
				echo "	<td>";
					if($totalCount == 0) echo "0%"; else echo round(($pftmCount/$totalCount)*100)."%"; 
				echo "</tr>";
			}
			if($pafs == 'Yes') {
				echo "<tr>
					<td>Pit and Fissure Sealants
					<td>$pafsCount
					<td>$pafsFCount
					<td>";
					if($pafsCount == 0) echo "0%"; else echo round(($pafsFCount/$pafsCount)*100)."%";
				echo "	<td>$pafsMCount
					<td>";
					if($pafsCount == 0) echo "0%"; else echo round(($pafsMCount/$pafsCount)*100)."%";
				echo "	<td>";
					if($femaleCount == 0) echo "0%"; else echo round(($pafsFCount/$femaleCount)*100)."%";
				echo "	<td>";
					if($maleCount == 0) echo "0%"; else echo round(($pafsMCount/$maleCount)*100)."%";
				echo "	<td>";
					if($totalCount == 0) echo "0%"; else echo round(($pafsCount/$totalCount)*100)."%"; 
				echo "</tr>";
			}
			if($rct == 'Yes') {
				echo "<tr>
					<td>Root Canal Treatment
					<td>$rctCount
					<td>$rctFCount
					<td>";
					if($rctCount == 0) echo "0%"; else echo round(($rctFCount/$rctCount)*100)."%";
				echo "	<td>$rctMCount
					<td>";
					if($rctCount == 0) echo "0%"; else echo round(($rctMCount/$rctCount)*100)."%";
				echo "	<td>";
					if($femaleCount == 0) echo "0%"; else echo round(($rctFCount/$femaleCount)*100)."%";
				echo "	<td>";
					if($maleCount == 0) echo "0%"; else echo round(($rctMCount/$maleCount)*100)."%";
				echo "	<td>";
					if($totalCount == 0) echo "0%"; else echo round(($rctCount/$totalCount)*100)."%"; 
				echo "</tr>";
			}
			if($pcc == 'Yes') {
				echo "<tr>
					<td>Post Core Crown
					<td>$pccCount
					<td>$pccFCount
					<td>";
					if($pccCount == 0) echo "0%"; else echo round(($pccFCount/$pccCount)*100)."%";
				echo "	<td>$pccMCount
					<td>";
					if($pccCount == 0) echo "0%"; else echo round(($pccMCount/$pccCount)*100)."%";
				echo "	<td>";
					if($femaleCount == 0) echo "0%"; else echo round(($pccFCount/$femaleCount)*100)."%";
				echo "	<td>";
					if($maleCount == 0) echo "0%"; else echo round(($pccMCount/$maleCount)*100)."%";
				echo "	<td>";
					if($totalCount == 0) echo "0%"; else echo round(($pccCount/$totalCount)*100)."%"; 
				echo "</tr>";
			}
			
		echo "<tr>
			<td> <br>Total no. of cases
			<td> <br><b>".($carCount + $recCount + $resCount + $ddrCount + $rotCount + $extruCount + $extraCount + $intCount + $mdrCount + $pafsCount + $misCount + $rctCount + $compdentCount + $singdentCount + $rempardentCount + $metcrCount + $porcrCount + $uneCount + $impCount + $pccCount + $acrcrCount + $pftmCount)."</b>
		</tr>
	</table><br>";
}
?>


<?php if($choice3 != ""){
	echo "<table frame='box' class='frame alttable' style='width:98%; left:1%; text-align:center;'>
		<tr class='header'>
			<td colspan=9 class='noborder' style='text-align:left;'> Services Needed ($choice3) </td>
		</tr>
		<tr style='text-align: center;'>
			<td><b> Conditions </b>
			<td><b> # of <br>Cases </b>
			<td><b> Females </b>
			<td><b> % <br>Females </b>
			<td><b> Males </b>
			<td><b> % <br>Males </b>
			<td><b> % Females <br>(over total <br>females) </b>
			<td><b> % Males <br>(over total <br>males) </b>
			<td><b> % Cases <br>(over total <br>patients) </b>
		</tr>";


				$c1Count = 0;
				$c2Count = 0;
				$c3Count = 0;
				$c4Count = 0;
				$c5Count = 0;
				$olCount = 0;
				$extracCount = 0;
				$odonCount = 0;
				$specclassCount = 0;
				$orthodonticsCount = 0;
				$pedodonticsCount = 0;
				$periodonticsCount = 0;
				$acuteCount = 0;
				$injuryCount = 0;
				$pulpsedCount = 0;
				$rocCount = 0;
				$temfillCount = 0;
				$lamentedCount = 0;
				$antCount = 0;
				$posCount = 0;
				$bridgeCount = 0;
				$singlecrownCount = 0;
				$c1MCount = 0;
				$c2MCount = 0;
				$c3MCount = 0;
				$c4MCount = 0;
				$c5MCount = 0;
				$olMCount = 0;
				$extracMCount = 0;
				$odonMCount = 0;
				$specclassMCount = 0;
				$orthodonticsMCount = 0;
				$pedodonticsMCount = 0;
				$periodonticsMCount = 0;
				$acuteMCount = 0;
				$injuryMCount = 0;
				$pulpsedMCount = 0;
				$rocMCount = 0;
				$temfillMCount = 0;
				$lamentedMCount = 0;
				$antMCount = 0;
				$posMCount = 0;
				$bridgeMCount = 0;
				$singlecrownMCount = 0;
				$c1FCount = 0;
				$c2FCount = 0;
				$c3FCount = 0;
				$c4FCount = 0;
				$c5FCount = 0;
				$olFCount = 0;
				$extracFCount = 0;
				$odonFCount = 0;
				$specclassFCount = 0;
				$orthodonticsFCount = 0;
				$pedodonticsFCount = 0;
				$periodonticsFCount = 0;
				$acuteFCount = 0;
				$injuryFCount = 0;
				$pulpsedFCount = 0;
				$rocFCount = 0;
				$temfillFCount = 0;
				$lamentedFCount = 0;
				$antFCount = 0;
				$posFCount = 0;
				$bridgeFCount = 0;
				$singlecrownFCount = 0;

if($patientmatch){
				foreach ($patientmatch as $row){
					if($class1 == 'Yes' && $row['class1'] != ' ' && strtotime($row['date'])>=strtotime($datefrom) && strtotime($row['date'])<=strtotime($dateto)){
						$c1Count++;
						if($row['gender'] == 'Female') $c1FCount++;
						elseif($row['gender'] == 'Male') $c1MCount++;
					
					}
					if($class2 == 'Yes' && $row['class2'] != ' ' && strtotime($row['date'])>=strtotime($datefrom) && strtotime($row['date'])<=strtotime($dateto)){
						$c2Count++;
						if($row['gender'] == 'Female') $c2FCount++;
						elseif($row['gender'] == 'Male') $c2MCount++;
					
					}
					if($class3 == 'Yes' && $row['class3'] != ' ' && strtotime($row['date'])>=strtotime($datefrom) && strtotime($row['date'])<=strtotime($dateto)){
						$c3Count++;
						if($row['gender'] == 'Female') $c3FCount++;
						elseif($row['gender'] == 'Male') $c3MCount++;
					
					}
					if($class4 == 'Yes' && $row['class4'] != ' ' && strtotime($row['date'])>=strtotime($datefrom) && strtotime($row['date'])<=strtotime($dateto)){
						$c4Count++;
						if($row['gender'] == 'Female') $c4FCount++;
						elseif($row['gender'] == 'Male') $c4MCount++;
					
					}
					if($class5 == 'Yes' && $row['class5'] != ' ' && strtotime($row['date'])>=strtotime($datefrom) && strtotime($row['date'])<=strtotime($dateto)){
						$c5Count++;
						if($row['gender'] == 'Female') $c5FCount++;
						elseif($row['gender'] == 'Male') $c5MCount++;
					
					}
					if($onlay == 'Yes' && $row['onlay'] != ' ' && strtotime($row['date'])>=strtotime($datefrom) && strtotime($row['date'])<=strtotime($dateto)){
						$olCount++;
						if($row['gender'] == 'Female') $olFCount++;
						elseif($row['gender'] == 'Male') $olMCount++;
					
					}
					if($extraction == 'Yes' && $row['extraction'] != ' ' && strtotime($row['date'])>=strtotime($datefrom) && strtotime($row['date'])<=strtotime($dateto)){
						$extracCount++;
						if($row['gender'] == 'Female') $extracFCount++;
						elseif($row['gender'] == 'Male') $extracMCount++;
					}
					if($odon == 'Yes' && $row['odontectomy'] != ' ' && strtotime($row['date'])>=strtotime($datefrom) && strtotime($row['date'])<=strtotime($dateto)){
						$odonCount++;
						if($row['gender'] == 'Female') $odonFCount++;
						elseif($row['gender'] == 'Male') $odonMCount++;					
					}
					if($specclass == 'Yes' && $row['special_case'] != ' ' && strtotime($row['date'])>=strtotime($datefrom) && strtotime($row['date'])<=strtotime($dateto)){
						$specclassCount++;
						if($row['gender'] == 'Female') $specclassFCount++;
						elseif($row['gender'] == 'Male') $specclassMCount++;					
					}
					if($orthodontics == 'Yes' && $row['orthodontics'] == 'Yes' && strtotime($row['date'])>=strtotime($datefrom) && strtotime($row['date'])<=strtotime($dateto)){
						$orthodonticsCount++;
						if($row['gender'] == 'Female') $orthodonticsFCount++;
						elseif($row['gender'] == 'Male') $orthodonticsMCount++;					
					}
					if($pedodontics == 'Yes' && $row['pedodontics'] == 'Yes' && strtotime($row['date'])>=strtotime($datefrom) && strtotime($row['date'])<=strtotime($dateto)){
						$pedodonticsCount++;
						if($row['gender'] == 'Female') $pedodonticsFCount++;
						elseif($row['gender'] == 'Male') $pedodonticsMCount++;					
					}
					if($mopd == 'Yes' && $row['periodontics'] == 'Yes' && strtotime($row['date'])>=strtotime($datefrom) && strtotime($row['date'])<=strtotime($dateto)){
						$periodonticsCount++;
						if($row['gender'] == 'Female') $periodonticsFCount++;
						elseif($row['gender'] == 'Male') $periodonticsMCount++;					
					}
					if($moai == 'Yes' && $row['acuteinfections'] == 'Yes' && strtotime($row['date'])>=strtotime($datefrom) && strtotime($row['date'])<=strtotime($dateto)){
						$acuteCount++;
						if($row['gender'] == 'Female') $acuteFCount++;
						elseif($row['gender'] == 'Male') $acuteMCount++;					
					}
					if($moti == 'Yes' && $row['traumaticinjuries'] == 'Yes' && strtotime($row['date'])>=strtotime($datefrom) && strtotime($row['date'])<=strtotime($dateto)){
						$injuryCount++;
						if($row['gender'] == 'Female') $injuryFCount++;
						elseif($row['gender'] == 'Male') $injuryMCount++;					
					}
					if($pulpsed == 'Yes' && $row['pulp_sedation'] != ' ' && strtotime($row['date'])>=strtotime($datefrom) && strtotime($row['date'])<=strtotime($dateto)){
						$rctCount++;
						if($row['gender'] == 'Female') $pulpsedFCount++;
						elseif($row['gender'] == 'Male') $pulpsedMCount++;					
					}
					if($roc == 'Yes' && $row['crown_recementation'] != ' ' && strtotime($row['date'])>=strtotime($datefrom) && strtotime($row['date'])<=strtotime($dateto)){
						$rocCount++;
						if($row['gender'] == 'Female') $rocFCount++;
						elseif($row['gender'] == 'Male') $rocMCount++;					
					}
					if($temfill == 'Yes' && $row['filling_service'] != ' ' && strtotime($row['date'])>=strtotime($datefrom) && strtotime($row['date'])<=strtotime($dateto)){
						$temfillCount++;
						if($row['gender'] == 'Female') $temfillFCount++;
						elseif($row['gender'] == 'Male') $temfillMCount++;					
					}
					if($unerupted == 'Yes' && $row['unerupted'] != ' ' && strtotime($row['date'])>=strtotime($datefrom) && strtotime($row['date'])<=strtotime($dateto)){
						$uneCount++;
						if($row['gender'] == 'Female') $uneFCount++;
						elseif($row['gender'] == 'Male') $uneMCount++;					
					}
					if($lamented == 'Yes' && $row['laminated'] != ' ' && strtotime($row['date'])>=strtotime($datefrom) && strtotime($row['date'])<=strtotime($dateto)){
						$lamentedCount++;
						if($row['gender'] == 'Female') $lamentedFCount++;
						elseif($row['gender'] == 'Male') $lamentedMCount++;					
					}
					if($anterior == 'Yes' && $row['anterior'] != ' ' && strtotime($row['date'])>=strtotime($datefrom) && strtotime($row['date'])<=strtotime($dateto)){
						$antCount++;
						if($row['gender'] == 'Female') $antFCount++;
						elseif($row['gender'] == 'Male') $antMCount++;					
					}
					if($posterior == 'Yes' && $row['posterior'] != ' ' && strtotime($row['date'])>=strtotime($datefrom) && strtotime($row['date'])<=strtotime($dateto)){
						$posCount++;
						if($row['gender'] == 'Female') $posFCount++;
						elseif($row['gender'] == 'Male') $posMCount++;					
					}
					if($bridge == 'Yes' && $row['bridge_service'] != ' ' && strtotime($row['date'])>=strtotime($datefrom) && strtotime($row['date'])<=strtotime($dateto)){
						$bridgeCount++;
						if($row['gender'] == 'Female') $bridgeFCount++;
						elseif($row['gender'] == 'Male') $bridgeMCount++;					
					}
					if($singlecrown == 'Yes' && $row['single_crown'] != ' ' && strtotime($row['date'])>=strtotime($datefrom) && strtotime($row['date'])<=strtotime($dateto)){
						$singlecrownCount++;
						if($row['gender'] == 'Female') $singlecrownFCount++;
						elseif($row['gender'] == 'Male') $singlecrownMCount++;					
					}

				}
}

		
			if($class1 == 'Yes') {
				echo "<tr>
					<td>Class I
					<td>$c1Count
					<td>$c1FCount
					<td>";
					if($c1Count == 0) echo "0%"; else echo round(($c1FCount/$c1Count)*100)."%";
				echo "	<td>$c1MCount
					<td>";
					if($c1Count == 0) echo "0%"; else echo round(($c1MCount/$c1Count)*100)."%";
				echo "	<td>";
					if($femaleCount == 0) echo "0%"; else echo round(($c1FCount/$femaleCount)*100)."%";
				echo "	<td>";
					if($maleCount == 0) echo "0%"; else echo round(($c1MCount/$maleCount)*100)."%";
				echo "	<td>";
					if($totalCount == 0) echo "0%"; else echo round(($c1Count/$totalCount)*100)."%"; 
				echo "</tr>";
			}
			if($class2 == 'Yes') {
				echo "<tr>
					<td>Class II
					<td>$c2Count
					<td>$c2FCount
					<td>";
					if($c2Count == 0) echo "0%"; else echo round(($c2FCount/$c2Count)*100)."%";
				echo "	<td>$c2MCount
					<td>";
					if($c2Count == 0) echo "0%"; else echo round(($c2MCount/$c2Count)*100)."%";
				echo "	<td>";
					if($femaleCount == 0) echo "0%"; else echo round(($c2FCount/$femaleCount)*100)."%";
				echo "	<td>";
					if($maleCount == 0) echo "0%"; else echo round(($c2MCount/$maleCount)*100)."%";
				echo "	<td>";
					if($totalCount == 0) echo "0%"; else echo round(($c2Count/$totalCount)*100)."%"; 
				echo "</tr>";
			}
			if($class3 == 'Yes') {
				echo "<tr>
					<td>Class III
					<td>$c3Count
					<td>$c3FCount
					<td>";
					if($c3Count == 0) echo "0%"; else echo round(($c3FCount/$c3Count)*100)."%";
				echo "	<td>$c3MCount
					<td>";
					if($c2Count == 0) echo "0%"; else echo round(($c3MCount/$c3Count)*100)."%";
				echo "	<td>";
					if($femaleCount == 0) echo "0%"; else echo round(($c3FCount/$femaleCount)*100)."%";
				echo "	<td>";
					if($maleCount == 0) echo "0%"; else echo round(($c3MCount/$maleCount)*100)."%";
				echo "	<td>";
					if($totalCount == 0) echo "0%"; else echo round(($c3Count/$totalCount)*100)."%"; 
				echo "</tr>";
			}
			if($class4 == 'Yes') {
				echo "<tr>
					<td>Class IV
					<td>$c4Count
					<td>$c4FCount
					<td>";
					if($c4Count == 0) echo "0%"; else echo round(($c4FCount/$c4Count)*100)."%";
				echo "	<td>$c4MCount
					<td>";
					if($c4Count == 0) echo "0%"; else echo round(($c4MCount/$c4Count)*100)."%";
				echo "	<td>";
					if($femaleCount == 0) echo "0%"; else echo round(($c4FCount/$femaleCount)*100)."%";
				echo "	<td>";
					if($maleCount == 0) echo "0%"; else echo round(($c4MCount/$maleCount)*100)."%";
				echo "	<td>";
					if($totalCount == 0) echo "0%"; else echo round(($c4Count/$totalCount)*100)."%"; 
				echo "</tr>";
			}
			if($class5 == 'Yes') {
				echo "<tr>
					<td>Class V
					<td>$c5Count
					<td>$c5FCount
					<td>";
					if($c5Count == 0) echo "0%"; else echo round(($c5FCount/$c5Count)*100)."%";
				echo "	<td>$c5MCount
					<td>";
					if($c2Count == 0) echo "0%"; else echo round(($c5MCount/$c5Count)*100)."%";
				echo "	<td>";
					if($femaleCount == 0) echo "0%"; else echo round(($c5FCount/$femaleCount)*100)."%";
				echo "	<td>";
					if($maleCount == 0) echo "0%"; else echo round(($c5MCount/$maleCount)*100)."%";
				echo "	<td>";
					if($totalCount == 0) echo "0%"; else echo round(($c5Count/$totalCount)*100)."%"; 
				echo "</tr>";
			}
			if($onlay == 'Yes') {
				echo "<tr>
					<td>Onlay
					<td>$olCount
					<td>$olFCount
					<td>";
					if($olCount == 0) echo "0%"; else echo round(($olFCount/$olCount)*100)."%";
				echo "	<td>$olMCount
					<td>";
					if($olCount == 0) echo "0%"; else echo round(($olMCount/$olCount)*100)."%";
				echo "	<td>";
					if($femaleCount == 0) echo "0%"; else echo round(($olFCount/$femaleCount)*100)."%";
				echo "	<td>";
					if($maleCount == 0) echo "0%"; else echo round(($olMCount/$maleCount)*100)."%";
				echo "	<td>";
					if($totalCount == 0) echo "0%"; else echo round(($olCount/$totalCount)*100)."%"; 
				echo "</tr>";
			}
			if($extraction == 'Yes') {
				echo "<tr>
					<td>Extraction
					<td>$extracCount
					<td>$extracFCount
					<td>";
					if($extracCount == 0) echo "0%"; else echo round(($extracFCount/$extracCount)*100)."%";
				echo "	<td>$extracMCount
					<td>";
					if($extracCount == 0) echo "0%"; else echo round(($extracMCount/$extracCount)*100)."%";
				echo "	<td>";
					if($femaleCount == 0) echo "0%"; else echo round(($extracFCount/$femaleCount)*100)."%";
				echo "	<td>";
					if($maleCount == 0) echo "0%"; else echo round(($extracMCount/$maleCount)*100)."%";
				echo "	<td>";
					if($totalCount == 0) echo "0%"; else echo round(($extracCount/$totalCount)*100)."%"; 
				echo "</tr>";
			}
			if($odon == 'Yes') {
				echo "<tr>
					<td>Odontectomy
					<td>$odonCount
					<td>$odonFCount
					<td>";
					if($odonCount == 0) echo "0%"; else echo round(($odonFCount/$odonCount)*100)."%";
				echo "	<td>$odonMCount
					<td>";
					if($extracCount == 0) echo "0%"; else echo round(($odonMCount/$odonCount)*100)."%";
				echo "	<td>";
					if($femaleCount == 0) echo "0%"; else echo round(($odonFCount/$femaleCount)*100)."%";
				echo "	<td>";
					if($maleCount == 0) echo "0%"; else echo round(($odonMCount/$maleCount)*100)."%";
				echo "	<td>";
					if($totalCount == 0) echo "0%"; else echo round(($odonCount/$totalCount)*100)."%"; 
				echo "</tr>";
			}
			if($specclass == 'Yes') {
				echo "<tr>
					<td>Special Case
					<td>$specclassCount
					<td>$specclassFCount
					<td>";
					if($specclassCount == 0) echo "0%"; else echo round(($specclassFCount/$specclassCount)*100)."%";
				echo "	<td>$specclassMCount
					<td>";
					if($specclassCount == 0) echo "0%"; else echo round(($specclassMCount/$specclassCount)*100)."%";
				echo "	<td>";
					if($femaleCount == 0) echo "0%"; else echo round(($specclassFCount/$femaleCount)*100)."%";
				echo "	<td>";
					if($maleCount == 0) echo "0%"; else echo round(($specclassMCount/$maleCount)*100)."%";
				echo "	<td>";
					if($totalCount == 0) echo "0%"; else echo round(($specclassCount/$totalCount)*100)."%"; 
				echo "</tr>";
			}
			if($pedodontics == 'Yes') {
				echo "<tr>
					<td>Pedodontics
					<td>$pedodonticsCount
					<td>$pedodonticsFCount
					<td>";
					if($pedodonticsCount == 0) echo "0%"; else echo round(($pedodonticsFCount/$pedodonticsCount)*100)."%";
				echo "	<td>$pedodonticsMCount
					<td>";
					if($pedodonticsCount == 0) echo "0%"; else echo round(($pedodonticsMCount/$pedodonticsCount)*100)."%";
				echo "	<td>";
					if($femaleCount == 0) echo "0%"; else echo round(($pedodonticsFCount/$femaleCount)*100)."%";
				echo "	<td>";
					if($maleCount == 0) echo "0%"; else echo round(($pedodonticsMCount/$maleCount)*100)."%";
				echo "	<td>";
					if($totalCount == 0) echo "0%"; else echo round(($pedodonticsCount/$totalCount)*100)."%"; 
				echo "</tr>";
			}
			if($orthodontics == 'Yes') {
				echo "<tr>
					<td>Orthodontics
					<td>$orthodonticsCount
					<td>$orthodonticsFCount
					<td>";
					if($orthodonticsCount == 0) echo "0%"; else echo round(($orthodonticsFCount/$orthodonticsCount)*100)."%";
				echo "	<td>$orthodonticsMCount
					<td>";
					if($orthodonticsCount == 0) echo "0%"; else echo round(($orthodonticsMCount/$orthodonticsCount)*100)."%";
				echo "	<td>";
					if($femaleCount == 0) echo "0%"; else echo round(($orthodonticsFCount/$femaleCount)*100)."%";
				echo "	<td>";
					if($maleCount == 0) echo "0%"; else echo round(($orthodonticsMCount/$maleCount)*100)."%";
				echo "	<td>";
					if($totalCount == 0) echo "0%"; else echo round(($orthodonticsCount/$totalCount)*100)."%"; 
				echo "</tr>";
			}
			if($mopd == 'Yes') {
				echo "<tr>
					<td>Management of Periodontal Disease
					<td>$periodonticsCount
					<td>$periodonticsFCount
					<td>";
					if($periodonticsCount == 0) echo "0%"; else echo round(($periodonticsFCount/$periodonticsCount)*100)."%";
				echo "	<td>$periodonticsMCount
					<td>";
					if($periodonticsCount == 0) echo "0%"; else echo round(($periodonticsMCount/$periodonticsCount)*100)."%";
				echo "	<td>";
					if($femaleCount == 0) echo "0%"; else echo round(($periodonticsFCount/$femaleCount)*100)."%";
				echo "	<td>";
					if($maleCount == 0) echo "0%"; else echo round(($periodonticsMCount/$maleCount)*100)."%";
				echo "	<td>";
					if($totalCount == 0) echo "0%"; else echo round(($periodonticsCount/$totalCount)*100)."%"; 
				echo "</tr>";
			}
			if($moai == 'Yes') {
				echo "<tr>
					<td>Management of Acute Infections
					<td>$acuteCount
					<td>$acuteFCount
					<td>";
					if($acuteCount == 0) echo "0%"; else echo round(($acuteFCount/$acuteCount)*100)."%";
				echo "	<td>$acuteMCount
					<td>";
					if($acuteCount == 0) echo "0%"; else echo round(($acuteMCount/$acuteCount)*100)."%";
				echo "	<td>";
					if($femaleCount == 0) echo "0%"; else echo round(($acuteFCount/$femaleCount)*100)."%";
				echo "	<td>";
					if($maleCount == 0) echo "0%"; else echo round(($acuteMCount/$maleCount)*100)."%";
				echo "	<td>";
					if($totalCount == 0) echo "0%"; else echo round(($acuteCount/$totalCount)*100)."%"; 
				echo "</tr>";
			}
			if($moti == 'Yes') {
				echo "<tr>
					<td>Management of Traumatic Injuries
					<td>$injuryCount
					<td>$injuryFCount
					<td>";
					if($injuryCount == 0) echo "0%"; else echo round(($injuryFCount/$injuryCount)*100)."%";
				echo "	<td>$injuryMCount
					<td>";
					if($injuryCount == 0) echo "0%"; else echo round(($injuryMCount/$injuryCount)*100)."%";
				echo "	<td>";
					if($femaleCount == 0) echo "0%"; else echo round(($injuryFCount/$femaleCount)*100)."%";
				echo "	<td>";
					if($maleCount == 0) echo "0%"; else echo round(($injuryMCount/$maleCount)*100)."%";
				echo "	<td>";
					if($totalCount == 0) echo "0%"; else echo round(($injuryCount/$totalCount)*100)."%"; 
				echo "</tr>";
			}
			if($pulpsed == 'Yes') {
				echo "<tr>
					<td>Pulp Sedation
					<td>$pulpsedCount
					<td>$pulpsedFCount
					<td>";
					if($pulpsedCount == 0) echo "0%"; else echo round(($pulpsedFCount/$pulpsedCount)*100)."%";
				echo "	<td>$pulpsedMCount
					<td>";
					if($pulpsedCount == 0) echo "0%"; else echo round(($pulpsedMCount/$pulpsedCount)*100)."%";
				echo "	<td>";
					if($femaleCount == 0) echo "0%"; else echo round(($pulpsedFCount/$femaleCount)*100)."%";
				echo "	<td>";
					if($maleCount == 0) echo "0%"; else echo round(($pulpsedMCount/$maleCount)*100)."%";
				echo "	<td>";
					if($totalCount == 0) echo "0%"; else echo round(($pulpsedCount/$totalCount)*100)."%"; 
				echo "</tr>";
			}
			if($roc == 'Yes') {
				echo "<tr>
					<td>Recementation of crowns
					<td>$rocCount
					<td>$rocFCount
					<td>";
					if($rocCount == 0) echo "0%"; else echo round(($rocFCount/$rocCount)*100)."%";
				echo "	<td>$rocMCount
					<td>";
					if($rocCount == 0) echo "0%"; else echo round(($rocMCount/$rocCount)*100)."%";
				echo "	<td>";
					if($femaleCount == 0) echo "0%"; else echo round(($rocFCount/$femaleCount)*100)."%";
				echo "	<td>";
					if($maleCount == 0) echo "0%"; else echo round(($rocMCount/$maleCount)*100)."%";
				echo "	<td>";
					if($totalCount == 0) echo "0%"; else echo round(($rocCount/$totalCount)*100)."%"; 
				echo "</tr>";
			}
			if($temfill == 'Yes') {
				echo "<tr>
					<td>Temporary Fillings
					<td>$temfillCount
					<td>$temfillFCount
					<td>";
					if($temfillCount == 0) echo "0%"; else echo round(($temfillFCount/$temfillCount)*100)."%";
				echo "	<td>$rocMCount
					<td>";
					if($temfillCount == 0) echo "0%"; else echo round(($temfillMCount/$temfillCount)*100)."%";
				echo "	<td>";
					if($femaleCount == 0) echo "0%"; else echo round(($temfillFCount/$femaleCount)*100)."%";
				echo "	<td>";
					if($maleCount == 0) echo "0%"; else echo round(($temfillMCount/$maleCount)*100)."%";
				echo "	<td>";
					if($totalCount == 0) echo "0%"; else echo round(($temfillCount/$totalCount)*100)."%"; 
				echo "</tr>";
			}
			/*if($moai == 'Yes') echo "<tr><td>Class I</tr>";
			if($moti == 'Yes') echo "<tr><td>Class I</tr>";*/
			if($lamented == 'Yes') {
				echo "<tr>
					<td>Laminated
					<td>$lamentedCount
					<td>$lamentedFCount
					<td>";
					if($lamentedCount == 0) echo "0%"; else echo round(($lamentedFCount/$lamentedCount)*100)."%";
				echo "	<td>$lamentedMCount
					<td>";
					if($lamentedCount == 0) echo "0%"; else echo round(($lamentedMCount/$lamentedCount)*100)."%";
				echo "	<td>";
					if($femaleCount == 0) echo "0%"; else echo round(($lamentedFCount/$femaleCount)*100)."%";
				echo "	<td>";
					if($maleCount == 0) echo "0%"; else echo round(($lamentedMCount/$maleCount)*100)."%";
				echo "	<td>";
					if($totalCount == 0) echo "0%"; else echo round(($lamentedCount/$totalCount)*100)."%"; 
				echo "</tr>";
			}
			//if($completedenture == 'Yes') echo "<tr><td>Complete Denture</tr>";
			if($anterior == 'Yes') {
				echo "<tr>
					<td>Anterior
					<td>$antCount
					<td>$antFCount
					<td>";
					if($antCount == 0) echo "0%"; else echo round(($antFCount/$antCount)*100)."%";
				echo "	<td>$antMCount
					<td>";
					if($antCount == 0) echo "0%"; else echo round(($antMCount/$antCount)*100)."%";
				echo "	<td>";
					if($femaleCount == 0) echo "0%"; else echo round(($antFCount/$femaleCount)*100)."%";
				echo "	<td>";
					if($maleCount == 0) echo "0%"; else echo round(($antMCount/$maleCount)*100)."%";
				echo "	<td>";
					if($totalCount == 0) echo "0%"; else echo round(($antCount/$totalCount)*100)."%"; 
				echo "</tr>";
			}
			if($singlecrown == 'Yes') {
				echo "<tr>
					<td>Single Crown
					<td>$singlecrownCount
					<td>$singlecrownFCount
					<td>";
					if($singlecrownCount == 0) echo "0%"; else echo round(($singlecrownFCount/$singlecrownCount)*100)."%";
				echo "	<td>$singlecrownMCount
					<td>";
					if($singlecrownCount == 0) echo "0%"; else echo round(($singlecrownMCount/$singlecrownCount)*100)."%";
				echo "	<td>";
					if($femaleCount == 0) echo "0%"; else echo round(($singlecrownFCount/$femaleCount)*100)."%";
				echo "	<td>";
					if($maleCount == 0) echo "0%"; else echo round(($singlecrownMCount/$maleCount)*100)."%";
				echo "	<td>";
					if($totalCount == 0) echo "0%"; else echo round(($singlecrownCount/$totalCount)*100)."%"; 
				echo "</tr>";
			}
			if($posterior == 'Yes') {
				echo "<tr>
					<td>Posterior
					<td>$posCount
					<td>$posFCount
					<td>";
					if($posCount == 0) echo "0%"; else echo round(($posFCount/$posCount)*100)."%";
				echo "	<td>$posMCount
					<td>";
					if($posCount == 0) echo "0%"; else echo round(($posMCount/$posCount)*100)."%";
				echo "	<td>";
					if($femaleCount == 0) echo "0%"; else echo round(($posFCount/$femaleCount)*100)."%";
				echo "	<td>";
					if($maleCount == 0) echo "0%"; else echo round(($posMCount/$maleCount)*100)."%";
				echo "	<td>";
					if($totalCount == 0) echo "0%"; else echo round(($posCount/$totalCount)*100)."%"; 
				echo "</tr>";
			}
			if($bridge == 'Yes') {
				echo "<tr>
					<td>Bridge
					<td>$bridgeCount
					<td>$bridgeFCount
					<td>";
					if($bridgeCount == 0) echo "0%"; else echo round(($bridgeFCount/$bridgeCount)*100)."%";
				echo "	<td>$bridgeMCount
					<td>";
					if($bridgeCount == 0) echo "0%"; else echo round(($bridgeMCount/$bridgeCount)*100)."%";
				echo "	<td>";
					if($femaleCount == 0) echo "0%"; else echo round(($bridgeFCount/$femaleCount)*100)."%";
				echo "	<td>";
					if($maleCount == 0) echo "0%"; else echo round(($bridgeMCount/$maleCount)*100)."%";
				echo "	<td>";
					if($totalCount == 0) echo "0%"; else echo round(($bridgeCount/$totalCount)*100)."%"; 
				echo "</tr>";
			}
			//if($singledenture == 'Yes') echo "<tr><td>Single Denture</tr>";
			//if($removablepartialdenture == 'Yes') echo "<tr><td>Removable Partial Denture</tr>";
		echo"<tr>
			<td> <br>Total no. of cases
			<td> <br><b> ".($c1Count + $c2Count + $c3Count + $c4Count + $c5Count + $olCount + $extracCount + $odonCount + $specclassCount + $orthodonticsCount + $pedodonticsCount + $pulpsedCount + $rocCount + $temfillCount + $lamentedCount + $antCount + $posCount + $bridgeCount + $singlecrownCount)." </b>
		</tr>
		</table>";

}

?>

<br>


	<br>

	</form>	
</div><br><br>

 </body>
</html>

