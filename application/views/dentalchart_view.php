<?php 
	include('header.php'); 
	//include('navigation.php');
	
	echo "<link rel=\"stylesheet\" type=\"text/css\" href='".base_url()."css/style.css'>";
	echo "<script type\"text/javascript\" src=\"".base_url()."js/dynamic.js\"></script>";
	echo "<script type\"text/javascript\" src=\"".base_url()."js/patientdb.js\"></script>";
	echo "<script type\"text/javascript\" src=\"".base_url()."js/dentalchartscripts.js\"></script>";
	echo "<script type\"text/javascript\" src=\"".base_url()."js/test.js\"></script>";
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

   <title>Dental Chart - <?php echo $section; ?></title>
<link rel="shortcut icon" href="<?php echo base_url(); ?>images/upcd-20140224-favicon.ico">
 </head>
<?php 
	$session_data = $this->session->userdata('logged_in');
     	$usernamelog = $session_data['username'];

	$session_data2 = $this->session->userdata('has_error');
	$invalid_input = $session_data2['invalid_input'];

	if($recordexist){
		foreach($info as $row){
			//caries
			$discar = $row['distal_caries'];
			$buccar = $row['buccal_caries'];
			$lincar = $row['lingual_caries'];
			$mescar = $row['mesial_caries'];
			$occcar = $row['occlusal_caries'];
			$disrescar = $row['distal_restorable_caries'];
			$bucrescar = $row['buccal_restorable_caries'];
			$linrescar = $row['lingual_restorable_caries'];
			$mesrescar = $row['mesial_restorable_caries'];
			$occrescar = $row['occlusal_restorable_caries'];

			$discaries = explode(" ", $discar);
			$buccaries = explode(" ", $buccar);
			$lincaries = explode(" ", $lincar);
			$mescaries = explode(" ", $mescar);
			$occcaries = explode(" ", $occcar);
			$disrescaries = explode(" ", $disrescar);
			$bucrescaries = explode(" ", $bucrescar);
			$linrescaries = explode(" ", $linrescar);
			$mesrescaries = explode(" ", $mesrescar);
			$occrescaries = explode(" ", $occrescar);

			//recurrent
			$disrec = $row['distal_recurrent'];
			$bucrec = $row['buccal_recurrent'];
			$linrec = $row['lingual_recurrent'];
			$mesrec = $row['mesial_recurrent'];
			$occrec = $row['occlusal_recurrent'];
			$disresrec = $row['distal_restorable_recurrent'];
			$bucresrec = $row['buccal_restorable_recurrent'];
			$linresrec = $row['lingual_restorable_recurrent'];
			$mesresrec = $row['mesial_restorable_recurrent'];
			$occresrec = $row['occlusal_restorable_recurrent'];

			$disrecurrent = explode(" ", $disrec);
			$bucrecurrent = explode(" ", $bucrec);
			$linrecurrent = explode(" ", $linrec);
			$mesrecurrent = explode(" ", $mesrec);
			$occrecurrent = explode(" ", $occrec);
			$disresrecurrent = explode(" ", $disresrec);
			$bucresrecurrent = explode(" ", $bucresrec);
			$linresrecurrent = explode(" ", $linresrec);
			$mesresrecurrent = explode(" ", $mesresrec);
			$occresrecurrent = explode(" ", $occresrec);

			//restoration
			$disres = $row['distal_restoration'];
			$bucres = $row['buccal_restoration'];
			$linres = $row['lingual_restoration'];
			$mesres = $row['mesial_restoration'];
			$occres = $row['occlusal_restoration'];
			$disresres = $row['distal_restorable_restoration'];
			$bucresres = $row['buccal_restorable_restoration'];
			$linresres = $row['lingual_restorable_restoration'];
			$mesresres = $row['mesial_restorable_restoration'];
			$occresres = $row['occlusal_restorable_restoration'];

			$disrestoration = explode(" ", $disres);
			$bucrestoration = explode(" ", $bucres);
			$linrestoration = explode(" ", $linres);
			$mesrestoration = explode(" ", $mesres);
			$occrestoration = explode(" ", $occres);
			$disresrestoration = explode(" ", $disresres);
			$bucresrestoration = explode(" ", $bucresres);
			$linresrestoration = explode(" ", $linresres);
			$mesresrestoration = explode(" ", $mesresres);
			$occresrestoration = explode(" ", $occresres);

			//serviceneeded
			$class1 = $row['class1'];
			$class2 = $row['class2'];
			$class3 = $row['class3'];
			$class4 = $row['class4'];
			$class5 = $row['class5'];
			$onlay = $row['onlay'];
			$extraction = $row['extraction'];
			$odontectomy = $row['odontectomy'];
			$special_case = $row['special_case'];
			$pulp_sedation = $row['pulp_sedation'];
			$crown_recementation = $row['crown_recementation'];
			$filling_service = $row['filling_service'];
			$laminated = $row['laminated'];
			$single_crown = $row['single_crown'];
			$bridge_service = $row['bridge_service'];
			$anterior = $row['anterior'];
			$posterior = $row['posterior'];
			$orthoendo = $row['orthoendo'];

			$c1 = explode(" ", $class1);
			$c2 = explode(" ", $class2);
			$c3 = explode(" ", $class3);
			$c4 = explode(" ", $class4);
			$c5 = explode(" ", $class5);
			$ol = explode(" ", $onlay);
			$ex = explode(" ", $extraction);
			$od = explode(" ", $odontectomy);
			$sc = explode(" ", $special_case);
			$ps = explode(" ", $pulp_sedation);
			$cr = explode(" ", $crown_recementation);
			$fs = explode(" ", $filling_service);
			$la = explode(" ", $laminated);
			$scr = explode(" ", $single_crown);
			$bs = explode(" ", $bridge_service);
			$ant = explode(" ", $anterior);
			$pos = explode(" ", $posterior);
			$or = explode(" ", $orthoendo);

			//dental chart
			$partialdenture = $row['removable_partial_denture'];
			$extru = $row['extrusion'];
			$intru = $row['intrusion'];
			$mesrot = $row['mesial_rotation'];
			$disrot = $row['distal_rotation'];
			$rot = $row['rotation'];
			$postcore = $row['postcore_crown'];
			$root = $row['rootcanal_treatment'];
			$pit = $row['pitfissure_sealants'];
			$extra = $row['extracted'];
			$miss = $row['missing'];
			$erup = $row['unerupted'];
			$impac = $row['impacted'];
			$porcr = $row['porcelain_crown'];
			$acrcr = $row['acrylic_crown'];
			$metcr = $row['metal_crown'];
			$porin = $row['porcelain_fused'];
			$fixed = $row['fixed_bridge'];

			$partialdentures = explode(" ", $partialdenture);
			$extrus = explode(" ", $extru);
			$intrus = explode(" ", $intru);
			$mesrots = explode(" ", $mesrot);
			$disrots = explode(" ", $disrot);
			$rots = explode(" ", $rot);
			$postcores = explode(" ", $postcore);
			$roots = explode(" ", $root);
			$pits = explode(" ", $pit);
			$extras = explode(" ", $extra);
			$misss = explode(" ", $miss);
			$erups = explode(" ", $erup);
			$impacs = explode(" ", $impac);
			$porcrs = explode(" ", $porcr);
			$acrcrs = explode(" ", $acrcr);
			$metcrs = explode(" ", $metcr);
			$porins = explode(" ", $porin);
			$fixeds = explode(" ", $fixed);

			//otherservices
			$perio = $row['periodontics'];
			$pedo = $row['pedodontics'];
			$ortho = $row['orthodontics'];
			$acute = $row['acuteinfections'];
			$traumatic = $row['traumaticinjuries'];
			$compdent = $row['completedenture'];
			$singdent = $row['singledenture'];
			$rempardent = $row['removablepartialdenture'];
			$othdent = $row['otherdenture'];
			$notes = $row['dentalnotes'];

			//dentures
			$dentcomp = $row['complete_denture'];
			$dentup = $row['upper_denture'];
			$dentlow = $row['lower_denture'];
		}
	}	
?>
 <body>
  <br>
<div style= "position:absolute; border: 2px #7F00FF solid; border-top-left-radius:12px; border-top-right-radius:12px;">

	<?php include('patient_header.php'); ?>

<div id="Content_Area" >

<form id="ADDDENTALCHART" name="ADDDENTALCHART" action="<?php echo base_url();?>index.php/verifyadddentalchart" method="post">

<br><center><a href="<?php echo base_url();?>index.php/loaddashboard/patientdb/<?php echo $id; ?>"> Dashboard </a> &nbsp; <a href="<?php echo base_url();?>index.php/viewdentalchartversions"> View Versions </a></center><br><br>

<div class="validationexc" style="display: <?php if($this->session->userdata('has_error')) echo 'block'; else 'none' ?>;">
   		
<?php $session_data = $this->session->userdata('has_error');
     		echo $session_data['error'];
	?>
</div>


<div class="tempDent">
<h3>Patient: </h3>


	<!--		<input type="hidden" name="patient_id" value="${patient_id}" />
			<input type="hidden" name="version" value="${version}" />
			<input type="hidden" name="is_current" value="${is_current}" />-->

Tooth
<table class="toothAlign1">
<tr>

<td><a href = "javascript:void(0)" onclick = "toothclick(18)">18</a></td>
<td><a href = "javascript:void(0)" onclick = "toothclick(17)">17</a></td>
<td><a href = "javascript:void(0)" onclick = "toothclick(16)">16</a></td>
<td><a href = "javascript:void(0)" onclick = "toothclick(15)">15</a></td>
<td><a href = "javascript:void(0)" onclick = "toothclick(14)">14</a></td>
<td><a href = "javascript:void(0)" onclick = "toothclick(13)">13</a></td>
<td><a href = "javascript:void(0)" onclick = "toothclick(12)">12</a></td>
<td><a href = "javascript:void(0)" onclick = "toothclick(11)">11</a></td>
<td><a href = "javascript:void(0)" onclick = "toothclick(21)">21</a></td>
<td><a href = "javascript:void(0)" onclick = "toothclick(22)">22</a></td>
<td><a href = "javascript:void(0)" onclick = "toothclick(23)">23</a></td>
<td><a href = "javascript:void(0)" onclick = "toothclick(24)">24</a></td>
<td><a href = "javascript:void(0)" onclick = "toothclick(25)">25</a></td>
<td><a href = "javascript:void(0)" onclick = "toothclick(26)">26</a></td>
<td><a href = "javascript:void(0)" onclick = "toothclick(27)">27</a></td>
<td><a href = "javascript:void(0)" onclick = "toothclick(28)">28</a></td>
</tr>
</table>

<section>

<div id="canvasesdiv2" style="position:relative; width:1260px; height:70px; border: solid 1px #D9D9D9;">


<canvas id="layer63" style="z-index: 1; position:absolute; left:0px; top:0px;" height="70px" width="1260px">
</canvas>


<canvas id="layer65" style="z-index: 1; position:absolute; left:0px; top:0px;" height="70px" width="1260px">
</canvas>

<canvas id="layer67" style="z-index: 1; position:absolute; left:0px; top:0px;" height="70px" width="1260px">
</canvas>
</div>
</section>

<section>
<div id="canvasesdiv" style="position:relative; width:1260px; height:250px; border: solid 2px #D9D9D9;">
<canvas id="layer1"style="z-index: 1; position:absolute; left:0px; top:0px;" height="250px" width="1260">

</canvas>
<canvas id="layer2" style="z-index: 2; position:absolute; left:0px; top:0px;" height="250px" width="1260">
This text is displayed if your browser does not support HTML5 Canvas.
</canvas>
<canvas id="layer3" style="z-index: 3; position:absolute; left:0px; top:0px;" height="250px" width="1260">

</canvas>
<canvas id="layer4" style="z-index: 4; position:absolute; left:0px; top:0px;" height="250px" width="1260">

</canvas>

<canvas id="layer5"style="z-index: 5; position:absolute; left:0px; top:0px;" height="250px" width="1260">

</canvas>
<canvas id="layer6" style="z-index: 6; position:absolute; left:0px; top:0px;" height="250px" width="1260">

</canvas>
<canvas id="layer7" style="z-index: 7; position:absolute; left:0px; top:0px;" height="250px" width="1260">

</canvas>
<canvas id="layer8" style="z-index: 8; position:absolute; left:0px; top:0px;" height="250px" width="1260">

</canvas>

<canvas id="layer9"style="z-index: 9; position:absolute; left:0px; top:0px;" height="250px" width="1260">

</canvas>
<canvas id="layer10" style="z-index: 10; position:absolute; left:0px; top:0px;" height="250px" width="1260">

</canvas>
<canvas id="layer11" style="z-index: 11; position:absolute; left:0px; top:0px;" height="250px" width="1260">

</canvas>
<canvas id="layer12" style="z-index: 12; position:absolute; left:0px; top:0px;" height="250px" width="1260">

</canvas>

<canvas id="layer13"style="z-index: 13; position:absolute; left:0px; top:0px;" height="250px" width="1260">

</canvas>
<canvas id="layer14" style="z-index: 14; position:absolute; left:0px; top:0px;" height="250px" width="1260">

</canvas>
<canvas id="layer15" style="z-index: 15; position:absolute; left:0px; top:0px;" height="250px" width="1260">

</canvas>
<canvas id="layer16" style="z-index: 16; position:absolute; left:0px; top:0px;" height="250px" width="1260">

</canvas>

<canvas id="layer17" style="z-index: 17; position:absolute; left:0px; top:0px;" height="250px" width="1260">

</canvas>
<canvas id="layer18" style="z-index: 18; position:absolute; left:0px; top:0px;" height="250px" width="1260">

</canvas>

<canvas id="layer19"style="z-index: 19; position:absolute; left:0px; top:0px;" height="250px" width="1260">

</canvas>
<canvas id="layer20" style="z-index: 20; position:absolute; left:0px; top:0px;" height="250px" width="1260">

</canvas>
<canvas id="layer21" style="z-index: 21; position:absolute; left:0px; top:0px;" height="250px" width="1260">

</canvas>
<canvas id="layer22" style="z-index: 22; position:absolute; left:0px; top:0px;" height="250px" width="1260">

</canvas>

<canvas id="layer23"style="z-index: 23; position:absolute; left:0px; top:0px;" height="250px" width="1260">

</canvas>
<canvas id="layer24" style="z-index: 24; position:absolute; left:0px; top:0px;" height="250px" width="1260">

</canvas>
<canvas id="layer25" style="z-index: 25; position:absolute; left:0px; top:0px;" height="250px" width="1260">

</canvas>
<canvas id="layer26" style="z-index: 26; position:absolute; left:0px; top:0px;" height="250px" width="1260">

</canvas>

<canvas id="layer27" style="z-index: 27; position:absolute; left:0px; top:0px;" height="250px" width="1260">

</canvas>
<canvas id="layer28" style="z-index: 28; position:absolute; left:0px; top:0px;" height="250px" width="1260">

</canvas>

<canvas id="layer29"style="z-index: 29; position:absolute; left:0px; top:0px;" height="250px" width="1260">

</canvas>
<canvas id="layer30" style="z-index: 30; position:absolute; left:0px; top:0px;" height="250px" width="1260">

</canvas>
<canvas id="layer31" style="z-index: 31; position:absolute; left:0px; top:0px;" height="250px" width="1260">

</canvas>
<canvas id="layer32" style="z-index: 32; position:absolute; left:0px; top:0px;" height="250px" width="1260">

</canvas>

<canvas id="layer33"style="z-index: 33; position:absolute; left:0px; top:0px;" height="250px" width="1260">

</canvas>
<canvas id="layer34" style="z-index: 34; position:absolute; left:0px; top:0px;" height="250px" width="1260">

</canvas>
<canvas id="layer35" style="z-index: 35; position:absolute; left:0px; top:0px;" height="250px" width="1260">

</canvas>
<canvas id="layer36" style="z-index: 36; position:absolute; left:0px; top:0px;" height="250px" width="1260">

</canvas>

<canvas id="layer37" style="z-index: 37; position:absolute; left:0px; top:0px;" height="250px" width="1260">

</canvas>
<canvas id="layer38" style="z-index: 38; position:absolute; left:0px; top:0px;" height="250px" width="1260">

</canvas>

<canvas id="layer39"style="z-index: 39; position:absolute; left:0px; top:0px;" height="250px" width="1260">

</canvas>
<canvas id="layer40" style="z-index: 40; position:absolute; left:0px; top:0px;" height="250px" width="1260">

</canvas>
<canvas id="layer41" style="z-index: 41; position:absolute; left:0px; top:0px;" height="250px" width="1260">

</canvas>
<canvas id="layer42" style="z-index: 42; position:absolute; left:0px; top:0px;" height="250px" width="1260">

</canvas>

<canvas id="layer43"style="z-index: 43; position:absolute; left:0px; top:0px;" height="250px" width="1260">

</canvas>
<canvas id="layer44" style="z-index: 44; position:absolute; left:0px; top:0px;" height="250px" width="1260">

</canvas>
<canvas id="layer45" style="z-index: 45; position:absolute; left:0px; top:0px;" height="250px" width="1260">

</canvas>
<canvas id="layer46" style="z-index: 46; position:absolute; left:0px; top:0px;" height="250px" width="1260">

</canvas>

<canvas id="layer47" style="z-index: 47; position:absolute; left:0px; top:0px;" height="250px" width="1260">

</canvas>
<canvas id="layer48" style="z-index: 48; position:absolute; left:0px; top:0px;" height="250px" width="1260">

</canvas>

<canvas id="layer49"style="z-index: 49; position:absolute; left:0px; top:0px;" height="250px" width="1260">

</canvas>
<canvas id="layer50" style="z-index: 50; position:absolute; left:0px; top:0px;" height="250px" width="1260">

</canvas>
<canvas id="layer51" style="z-index: 51; position:absolute; left:0px; top:0px;" height="250px" width="1260">

</canvas>
<canvas id="layer52" style="z-index: 52; position:absolute; left:0px; top:0px;" height="250px" width="1260">

</canvas>

<canvas id="layer53"style="z-index: 53; position:absolute; left:0px; top:0px;" height="250px" width="1260">

</canvas>
<canvas id="layer54" style="z-index: 54; position:absolute; left:0px; top:0px;" height="250px" width="1260">

</canvas>
<canvas id="layer55" style="z-index: 55; position:absolute; left:0px; top:0px;" height="250px" width="1260">

</canvas>
<canvas id="layer56" style="z-index: 56; position:absolute; left:0px; top:0px;" height="250px" width="1260">

</canvas>
<canvas id="layer57" style="z-index: 57; position:absolute; left:0px; top:0px;" height="250px" width="1260">

</canvas>
<canvas id="layer58" style="z-index: 58; position:absolute; left:0px; top:0px;" height="250px" width="1260">

</canvas>

<canvas id="layer59" style="z-index: 59; position:absolute; left:0px; top:0px;" height="250px" width="1260">

</canvas>

<canvas id="layer60" style="z-index: 60; position:absolute; left:0px; top:0px;" height="250px" width="1260">

</canvas>
<canvas id="layer61" style="z-index: 61; position:absolute; left:0px; top:0px;" height="250px" width="1261">
</canvas>

<canvas id="layer62" style="z-index: 62; position:absolute; left:0px; top:0px;" height="250px" width="1262">
</canvas>



</div>
</section>



<section>
<div id="canvasesdiv3" style="position:relative; width:1260px; height:70px; border: solid 1px #D9D9D9;">

<canvas id="layer64" style="z-index: 64; position:absolute; left:0px; top:0;" height="70" width="1260px">
</canvas>

<canvas id="layer66" style="z-index: 64; position:absolute; left:0px; top:0;" height="70" width="1260px">
</canvas>


<canvas id="layer68" style="z-index: 64; position:absolute; left:0px; top:0;" height="70" width="1260px">
</canvas>
</div>
</section>

<table class="toothAlign1">
<tr>
<td><a href = "javascript:void(0)" onclick = "toothclick(48)">48</a></td>
<td><a href = "javascript:void(0)" onclick = "toothclick(47)">47</a></td>
<td><a href = "javascript:void(0)" onclick = "toothclick(46)">46</a></td>
<td><a href = "javascript:void(0)" onclick = "toothclick(45)">45</a></td>
<td><a href = "javascript:void(0)" onclick = "toothclick(44)">44</a></td>
<td><a href = "javascript:void(0)" onclick = "toothclick(43)">43</a></td>
<td><a href = "javascript:void(0)" onclick = "toothclick(42)">42</a></td>
<td><a href = "javascript:void(0)" onclick = "toothclick(41)">41</a></td>
<td><a href = "javascript:void(0)" onclick = "toothclick(31)">31</a></td>
<td><a href = "javascript:void(0)" onclick = "toothclick(32)">32</a></td>
<td><a href = "javascript:void(0)" onclick = "toothclick(33)">33</a></td>
<td><a href = "javascript:void(0)" onclick = "toothclick(34)">34</a></td>
<td><a href = "javascript:void(0)" onclick = "toothclick(35)">35</a></td>
<td><a href = "javascript:void(0)" onclick = "toothclick(36)">36</a></td>
<td><a href = "javascript:void(0)" onclick = "toothclick(37)">37</a></td>
<td><a href = "javascript:void(0)" onclick = "toothclick(38)">38</a></td>
</tr>
</table>
Tooth

<br/><br/>
<font size="2"><a href="javascript:void(0)" onclick="services()" class="button" style="text-decoration:none; color:#1aac9b;">Other Services| </a></font>
<font size="2"><a href="javascript:void(0)" onclick="dentures()" class="button" style="text-decoration:none; color:#1aac9b;">Dentures| </a></font>
<font size="2"><a href="javascript:void(0)" onclick="notesclick()" class="button" style="text-decoration:none; color:#1aac9b;">Notes| </a></font>
<font size="2"><a href="javascript:void(0)" onclick="needed_services()" class="button" style="text-decoration:none; color:#1aac9b;">Service Needed Summary| </a></font>
<br/><br/> Legend: <br/>
<table>
<tr>
	<td><a style="background-color: red; text-decoration: none;">&nbsp;&nbsp;&nbsp;</a>    &nbsp;&nbsp;&nbsp;&nbsp;   Caries<br/>
		<a style="background-color: #67D413; text-decoration: none;">&nbsp;&nbsp;&nbsp;</a> &nbsp;&nbsp;&nbsp;&nbsp;      Recurrent Caries<br/>
		<a style="background-color: blue; text-decoration: none;">&nbsp;&nbsp;&nbsp;</a>    &nbsp;&nbsp; &nbsp;  Restoration<br/>
		<a style="background-color: white; text-decoration: none; color: blue;"><b>Am</b></a> &nbsp;&nbsp;    Amalgam<br/>
		<a style="background-color: white; text-decoration: none; color: blue;"><b>Co</b></a> &nbsp;&nbsp;&nbsp;     Composite<br/>
		<a style="background-color: white; text-decoration: none; color: blue;"><b>GI</b></a> &nbsp;&nbsp;&nbsp;     Glass Ionomer<br/>
		<a style="background-color: white; text-decoration: none; color: blue;"><b>TF</b></a> &nbsp;&nbsp;&nbsp;     Temporary Filling<br/>
		<b>PCC</b>&nbsp;&nbsp;  Post Core Crown<br/>
		<b>RCT</b>&nbsp;&nbsp;  Root Canal Treatment<br/>
	</td>
	<td>
		<b>PFS</b> &nbsp;&nbsp;&nbsp;&nbsp;  Pit and Fissure Sealants<br/>
		<b>PFM</b> &nbsp;&nbsp;&nbsp;  Porcelain Fused to Metal<br/>
		<b>C(A)</b>&nbsp;&nbsp;&nbsp; Acrylic Crown<br/>
		<b>C(M)</b>&nbsp;&nbsp; Metal Crown<br/>
		<b>C(P)</b>&nbsp;&nbsp;&nbsp; Porcelain Crown<br/>
		<b>RPD</b> &nbsp;&nbsp;&nbsp;  Removable Partial Denture<br/>
		<b>FPD</b> &nbsp;&nbsp;&nbsp;  Fixed Bridge<br/>
		<br/>
	</td>
	<td><a style="background-color: white; text-decoration: none; color: black;">&nbsp;&uarr;&nbsp;</a> &nbsp;&nbsp;&nbsp;Extrusion<br/>
		<a style="background-color: white; text-decoration: none; color: black;">&nbsp;&darr;&nbsp;</a> &nbsp;&nbsp;&nbsp;Intrusion<br/>
		<a style="background-color: white; text-decoration: none; color: black;">&nbsp;&larr;&nbsp;</a> &nbsp;Mesial Drifting Rotation<br/>
		<a style="background-color: white; text-decoration: none; color: black;">&nbsp;&rarr;&nbsp;</a> &nbsp;Distal Drifting Rotation<br/>
		<b><a style="background-color: white; text-decoration: none; color: black;">&nbsp;&#8634;&nbsp;</a> </b>&nbsp;Rotation<br/>
		<b><a style="background-color: white; text-decoration: none; color: black;">&nbsp;X&nbsp;</a> </b>&nbsp;&nbsp;Extracted<br/>
		<b><a style="background-color: white; text-decoration: none; color: black;">&nbsp;M&nbsp;</a> </b>&nbsp;&nbsp;Missing<br/>
		<b><a style="background-color: white; text-decoration: none; color: black;">&nbsp;UE</a> </b>&nbsp;Unerupted<br/>
	</td>		
	<td>
		<b><a style="background-color: white; text-decoration: none; color: black;">&nbsp;IMP</a> </b>&nbsp;Impacted<br/>
		<b><a style="background-color: white; text-decoration: none; color: red;">&nbsp;O&nbsp;</a></b>&nbsp;&nbsp;&nbsp; restorable<br/>
		<b><a style="background-color: white; text-decoration: none; color: black;">&nbsp;/&nbsp;</a></b> &nbsp;&nbsp;&nbsp;non-restorable<br/>
		
	</td>
</tr>
</table>

<div id="dentureslight" class="white_content">
	<font size = "2">
	<b>Dentures Status</b><br/>
	<hr>
	<input type="checkbox" name="completedenture" value="Yes" id="completedenture" onclick="drawCompletedenture(ctx1, ctx30, 65, 65)" <?php if($recordexist && $dentcomp == "Yes") echo "checked"; ?>>Complete Denture
	<br/><br/>
	<u> Single Denture </u><br/>
	<input type="checkbox" name="singledenture[]" value="upper" id="upperdenture" onclick="drawUpperDenture(ctx2, ctx31, 65, 65)" <?php if($recordexist && $dentup == "Yes") echo "checked"; ?>>Upper Single Denture <br/>
	<input type="checkbox" name="singledenture[]" value="lower" id="lowerdenture" onclick="drawLowerDenture(ctx3, ctx32, 65, 65)" <?php if($recordexist && $dentlow == "Yes") echo "checked"; ?>>Lower Single Denture <br/>
	<hr>
	<a href = "javascript:void(0)" onclick = "document.getElementById('dentureslight').style.display='none';document.getElementById('denturesfade').style.display='none'">Done</a>

	</font>
</div> 
	
<?php 	
	$i = 18;
	$j = 1;
	$tn = 18;
	for($j = 0; $j < 4; $j++) {
		for($i = 18; $i > 10; $i--) {
			$tn = $i+$j*10;
			$restorableVar= "restorable".$tn;
			$nonrestorableVar="nonrestorable".$tn;
			$amVar="AM".$tn;
			$coVar="CO".$tn;
			$giVar="GI".$tn;
			$tfVar="TF".$tn;
				
				
echo"<div id='light".$tn."' class='white_content' name='light".$tn."'>
<div id='canvasesdiv' >
<canvas id='layer1mini".$tn."' style=' border:solid 2px; z-index: 1; position:absolute; right:20px; top:20px;' height='125px' width='125'></canvas>
<canvas id='layer2mini".$tn."' style=' border:solid 2px; z-index: 2; position:absolute; right:20px; top:20px;' height='125px' width='125'></canvas>
<canvas id='layer3mini".$tn."' style=' border:solid 2px; z-index: 3; position:absolute; right:20px; top:20px;' height='125px' width='125'></canvas>
<canvas id='layer4mini".$tn."' style=' border:solid 2px; z-index: 4; position:absolute; right:20px; top:20px;' height='125px' width='125'></canvas>
<canvas id='layer5mini".$tn."' style=' border:solid 2px; z-index: 5; position:absolute; right:20px; top:20px;' height='125px' width='125'></canvas>
<canvas id='layer6mini".$tn."' style=' border:solid 2px; z-index: 6; position:absolute; right:20px; top:20px;' height='125px' width='125'></canvas>
<canvas id='layer7mini".$tn."' style=' border:solid 2px; z-index: 7; position:absolute; right:20px; top:20px;' height='125px' width='125'></canvas>
<canvas id='layer8mini".$tn."' style=' border:solid 2px; z-index: 8; position:absolute; right:20px; top:20px;' height='125px' width='125'></canvas>
<canvas id='layer9mini".$tn."' style=' border:solid 2px; z-index: 9; position:absolute; right:20px; top:20px;' height='125px' width='125'></canvas>
<canvas id='layer10mini".$tn."' style=' border:solid 2px; z-index: 10; position:absolute; right:20px; top:20px;' height='125px' width='125'></canvas>
<canvas id='layer11mini".$tn."' style=' border:solid 2px; z-index: 11; position:absolute; right:20px; top:20px;' height='125px' width='125'></canvas>
<canvas id='layer12mini".$tn."' style=' border:solid 2px; z-index: 12; position:absolute; right:20px; top:20px;' height='125px' width='125'></canvas>
<canvas id='layer13mini".$tn."' style=' border:solid 2px; z-index: 13; position:absolute; right:20px; top:20px;' height='125px' width='125'></canvas>
<canvas id='layer14mini".$tn."' style=' border:solid 2px; z-index: 14; position:absolute; right:20px; top:20px;' height='125px' width='125'></canvas>
<canvas id='layer15mini".$tn."' style=' border:solid 2px; z-index: 15; position:absolute; right:20px; top:20px;' height='125px' width='125'></canvas>
<canvas id='layer16mini".$tn."' style=' border:solid 2px; z-index: 16; position:absolute; right:20px; top:20px;' height='125px' width='125'></canvas>
<canvas id='layer17mini".$tn."' style=' border:solid 2px; z-index: 17; position:absolute; right:20px; top:20px;' height='125px' width='125'></canvas></div>
<b>Tooth ".$tn."  </b><br/><br/><font color='red'><div id='toothvar".$tn."'></div></font><br/><br/><a href = 'javascript:void(0)' onclick = 'submitcond()'>Submit</a>&nbsp;	
<a href = 'javascript:void(0)' onclick = 'cancelcond(".$tn.")'>Cancel</a><br/> <br/>
<br><input type='checkbox' name='dentalStatus' value='".$tn."' id='dentalStatus".$tn."' onclick='hideAllTooth()'"; 
if($recordexist){
	if(in_array($tn, $discaries) || in_array($tn, $mescaries) || in_array($tn, $lincaries) || in_array($tn, $buccaries) || in_array($tn, $occcaries) ||  in_array($tn, $disrecurrent) || in_array($tn,$mesrecurrent) || in_array($tn, $linrecurrent) || in_array($tn, $bucrecurrent) || in_array($tn, $occrecurrent) || in_array($tn, $disrestoration) || in_array($tn,$mesrestoration) || in_array($tn, $linrestoration) || in_array($tn, $bucrestoration) || in_array($tn, $occrestoration)) echo "checked";
}
echo "><b>Dental Status</b><br/>	
<div id='dentalstatussurface".$tn."' style='display:none;'><table><tr><td></td><td><input type='checkbox' name='caries' value='".$tn."' id='caries".$tn."' onclick='hideOtherCaries()' ";
if($recordexist){
	if(in_array($tn, $discaries) || in_array($tn, $mescaries) || in_array($tn, $lincaries) || in_array($tn, $buccaries) || in_array($tn, $occcaries)) echo "checked";
}

echo "></td><td>Caries</td>	
<td><input type='checkbox' name='recurrentcaries' value='".$tn."' id='recurrentcaries".$tn."' onclick='hideOtherReccurent()'";
if($recordexist){
	if(in_array($tn, $disrecurrent) || in_array($tn,$mesrecurrent) || in_array($tn, $linrecurrent) || in_array($tn, $bucrecurrent) || in_array($tn, $occrecurrent)) echo "checked";
} 

echo "></td><td>Reccurent</td>
<td><input type='checkbox' name='restoration' value='".$tn."' id='restoration".$tn."' onclick='hideOtherRestoration()'";
if($recordexist){if(in_array($tn, $disrestoration) || in_array($tn,$mesrestoration) || in_array($tn, $linrestoration) || in_array($tn, $bucrestoration) || in_array($tn, $occrestoration)) echo "checked";}

echo "></td><td>Restoration</td>
</tr>


<tr><td>Mesial</td><td><div id='caries_surfaces".$tn."mesial' style='display:none;'><input type='checkbox' name='mesialcaries[]' value='".$tn."' id='mesial".$tn."' onclick='showvar(\"mesial\"+cariesSelectSurfaceid,mesialformid);drawConditionMini(\"caries\", \"mesial\",".$tn.") '";
if($recordexist && in_array($tn, $mescaries)) echo "checked";

echo "/></div></td>	
<td><div id='mesialcariesSelectSurface".$tn."' style='display:none;'><select name='selectCariesMesial[]'  id='mesialcariesSelect".$tn."'>";
echo "<option value='".$tn."'></option><option value='restorable".$tn."' ";
if($recordexist && in_array("restorable".$tn, $mesrescaries)) echo "selected";

echo "> O </option><option value='nonrestorable".$tn."' ";
if($recordexist && in_array("nonrestorable".$tn, $mesrescaries)) echo "selected";

echo "> / </option>
</select></div></td>
	<td><div id='recurrent_surfaces".$tn."mesial' style='display:none;'><input type='checkbox' name='mesialrecurrent[]' value='".$tn."' id='remesial".$tn."' onclick='showvar(\"mesial\"+recurrentSelectSurfaceid,remesialformid);drawConditionMini(\"recurrent\", \"mesial\",".$tn.") ' ";
if($recordexist && in_array($tn, $mesrecurrent)) echo "checked";

echo "/></div></td>	 
	<td><div id='mesialrecurrentSelectSurface".$tn."' style='display:none;'><select name='selectRecurrentMesial[]' id='mesialrecurrentSelect".$tn."'>
	<option value='".$tn."'></option><option value='restorable".$tn."' ";
if($recordexist && in_array("restorable".$tn, $mesresrecurrent)) echo "selected";

echo "> O </option>
	<option value='nonrestorable".$tn."' ";
if($recordexist && in_array("nonrestorable".$tn, $mesresrecurrent)) echo "selected";

echo "> / </option>
	</select></div></td>
	<td><div id='restoration_surfaces".$tn."mesial' style='display:none;'><input type='checkbox' name='mesialrestoration[]' value='".$tn."' id='restomesial".$tn."' onclick='showvar(\"mesial\"+restoreSelectSurfaceid,restomesialformid);drawConditionMini(\"restoration\", \"mesial\",".$tn.") ' ";
if($recordexist && in_array($tn, $mesrestoration)) echo "checked";

echo "/></div></td><td><div id='mesialrestoreSelectSurface".$tn."' style='display:none;'><select name='selectRestorationMesial[]' id='mesialrestoreTypeSelect".$tn."'>
<option value='".$tn."' ></option>
<option value='AM".$tn."' ";
if($recordexist && in_array("AM".$tn, $mesresrestoration)) echo "selected";

echo ">AM</option>
<option value='CO".$tn."' ";
if($recordexist && in_array("CO".$tn, $mesresrestoration)) echo "selected";

echo ">CO</option>
<option value='GI".$tn."' ";
if($recordexist && in_array("GI".$tn, $mesresrestoration)) echo "selected";

echo ">GI</option>
<option value='TF".$tn."' ";
if($recordexist && in_array("TF".$tn, $mesresrestoration)) echo "selected";

echo ">TF</option>
</select></div></td></tr>
		

		
<tr><td>Distal</td><td><div id='caries_surfaces".$tn."distal' style='display:none;'><input type='checkbox' name='distalcaries[]' value='".$tn."' id='distal".$tn."' onclick='showvar(\"distal\"+cariesSelectSurfaceid,distalformid);drawConditionMini(\"caries\", \"distal\", ".$tn." )' ";
if($recordexist && in_array($tn, $discaries)) echo "checked";

echo "/></div></td>	
<td><div id='distalcariesSelectSurface".$tn."' style='display:none;'>
<select name='selectCariesDistal[]' id='distalcariesSelect".$tn."'>
<option value='".$tn."'></option>
  <option value='restorable".$tn."' ";
if($recordexist && in_array("restorable".$tn, $disrescaries)) echo "selected";

echo "> O </option>
  <option value='nonrestorable".$tn."' ";
if($recordexist && in_array("nonrestorable".$tn, $disrescaries)) echo "selected";

echo "> / </option>
	</select></div></td>	
	<td><div id='recurrent_surfaces".$tn."distal' style='display:none;'><input type='checkbox' name='distalrecurrent[]' value='".$tn."' id='redistal".$tn."' onclick='showvar(\"distal\"+recurrentSelectSurfaceid,redistalformid);drawConditionMini(\"recurrent\", \"distal\",".$tn.") ' ";
if($recordexist && in_array($tn, $disrecurrent)) echo "checked";

echo "/></div></td>	 
	<td><div id='distalrecurrentSelectSurface".$tn."' style='display:none;'>
	<select name='selectRecurrentDistal[]' id='distalrecurrentSelect".$tn."'>
	<option value='".$tn."'></option>
	<option value='restorable".$tn."' ";
if($recordexist && in_array("restorable".$tn, $disresrecurrent)) echo "selected";

echo "> O </option>
	<option value='nonrestorable".$tn."' ";
if($recordexist && in_array("nonrestorable".$tn, $disresrecurrent)) echo "selected";

echo "> / </option>
	</select></div></td>
	<td><div id='restoration_surfaces".$tn."distal' style='display:none;'><input type='checkbox' name='distalrestoration[]' value='".$tn."' id='restodistal".$tn."' onclick='showvar(\"distal\"+restoreSelectSurfaceid,restodistalformid);drawConditionMini(\"restoration\", \"distal\",".$tn.") ' ";
if($recordexist && in_array($tn, $disrestoration)) echo "checked";

echo "/></div></td><td><div id='distalrestoreSelectSurface".$tn."' style='display:none;'><select name='selectRestorationDistal[]' id='distalrestoreTypeSelect".$tn."'>
<option value='".$tn."'></option>
<option value='AM".$tn."' ";
if($recordexist && in_array("AM".$tn, $disresrestoration)) echo "selected";

echo ">AM</option>
<option value='CO".$tn."' ";
if($recordexist && in_array("CO".$tn, $disresrestoration)) echo "selected";

echo ">CO</option>
<option value='GI".$tn."' ";
if($recordexist && in_array("GI".$tn, $disresrestoration)) echo "selected";

echo ">GI</option>
<option value='TF".$tn."' ";
if($recordexist && in_array("TF".$tn, $disresrestoration)) echo "selected";

echo ">TF</option>
</select></div></td></tr>
		
		
		
<tr><td>Occlusal</td><td><div id='caries_surfaces".$tn."occlusal' style='display:none;'><input type='checkbox' name='occlusalcaries[]' value='".$tn."' id='occlusal".$tn."' onclick='showvar(\"occlusal\"+cariesSelectSurfaceid,occlusalformid);drawConditionMini(\"caries\", \"occlusal\",".$tn.") ' ";
if($recordexist && in_array($tn, $occcaries)) echo "checked";

echo " /></div></td>	
<td><div id='occlusalcariesSelectSurface".$tn."' style='display:none;'>
<select name='selectCariesOcclusal[]'  id='occlusalcariesSelect".$tn."'>
<option value='".$tn."'></option>
  <option value='restorable".$tn."' ";
if($recordexist && in_array("restorable".$tn, $occrescaries)) echo "selected";

echo "> O </option>
  <option value='nonrestorable".$tn."' ";
if($recordexist && in_array("nonrestorable".$tn, $occrescaries)) echo "selected";

echo "> / </option>
	</select></div></td>		
	<td><div id='recurrent_surfaces".$tn."occlusal' style='display:none;'><input type='checkbox' name='occlusalrecurrent[]' value='".$tn."' id='reocclusal".$tn."' onclick='showvar(\"occlusal\"+recurrentSelectSurfaceid,reocclusalformid);drawConditionMini(\"recurrent\", \"occlusal\",".$tn.") ' ";
if($recordexist && in_array($tn, $occrecurrent)) echo "checked";

echo "/></div></td>		
	<td><div id='occlusalrecurrentSelectSurface".$tn."' style='display:none;'>
	<select name='selectRecurrentOcclusal[]' id='occlusalrecurrentSelect".$tn."'>
	<option value='".$tn."'></option><option value='restorable".$tn."' ";
if($recordexist && in_array("restorable".$tn, $occresrecurrent)) echo "selected";

echo "> O </option>
	<option value='nonrestorable".$tn."' ";
if($recordexist && in_array("nonrestorable".$tn, $occresrecurrent)) echo "selected";

echo "> / </option>
	</select></div></td>
	<td><div id='restoration_surfaces".$tn."occlusal' style='display:none;'><input type='checkbox' name='occlusalrestoration[]' value='".$tn."' id='restoocclusal".$tn."' onclick='showvar(\"occlusal\"+restoreSelectSurfaceid,restoocclusalformid);drawConditionMini(\"restoration\", \"occlusal\",".$tn.") ' ";
if($recordexist && in_array($tn, $occrestoration)) echo "checked";

echo "/></div></td><td><div id='occlusalrestoreSelectSurface".$tn."' style='display:none;'><select name='selectRestorationOcclusal[]' id='occlusalrestoreTypeSelect".$tn."'>
<option value='".$tn."'></option>
<option value='AM".$tn."' ";
if($recordexist && in_array("AM".$tn, $occresrestoration)) echo "selected";

echo ">AM</option>
<option value='CO".$tn."' ";
if($recordexist && in_array("CO".$tn, $occresrestoration)) echo "selected";

echo ">CO</option>
<option value='GI".$tn."' ";
if($recordexist && in_array("GI".$tn, $occresrestoration)) echo "selected";

echo ">GI</option>
<option value='TF".$tn."' ";
if($recordexist && in_array("TF".$tn, $occresrestoration)) echo "selected";

echo ">TF</option>

</select></div></td></tr>
		
		
		
		
<tr><td>Buccal</td><td><div id='caries_surfaces".$tn."buccal' style='display:none;'><input type='checkbox' name='buccalcaries[]' value='".$tn."' id='buccal".$tn."' onclick='showvar(\"buccal\"+cariesSelectSurfaceid,buccalformid);drawConditionMini(\"caries\", \"buccal\",".$tn.") '";
if($recordexist && in_array($tn, $buccaries)) echo "checked";

echo "/></div></td><td><div id='buccalcariesSelectSurface".$tn."' style='display:none;'><select name='selectCariesBuccal[]' id='buccalcariesSelect".$tn."'><option value='".$tn."'></option>
  <option value='restorable".$tn."' ";
if($recordexist && in_array("restorable".$tn, $bucrescaries)) echo "selected";

echo "> O </option>
  <option value='nonrestorable".$tn."' ";
if($recordexist && in_array("nonrestorable".$tn, $bucrescaries)) echo "selected";

echo "> / </option>
	</select></div></td>			
	<td><div id='recurrent_surfaces".$tn."buccal' style='display:none;'><input type='checkbox' name='buccalrecurrent[]' value='".$tn."' id='rebuccal".$tn."' onclick='showvar(\"buccal\"+recurrentSelectSurfaceid,rebuccalformid);drawConditionMini(\"recurrent\", \"buccal\",".$tn.") ' ";
if($recordexist && in_array($tn, $bucrecurrent)) echo "checked";

echo "/></div></td>	
	<td><div id='buccalrecurrentSelectSurface".$tn."' style='display:none;'>
	<select name='selectRecurrentBuccal[]' id='buccalrecurrentSelect".$tn."'>
	<option value='".$tn."'></option>
	<option value='restorable".$tn."' ";
if($recordexist && in_array("restorable".$tn, $bucresrecurrent)) echo "selected";

echo "> O </option>
	<option value='nonrestorable".$tn."' ";
if($recordexist && in_array("nonrestorable".$tn, $bucresrecurrent)) echo "selected";

echo "> / </option>
	</select></div></td>	
	<td><div id='restoration_surfaces".$tn."buccal' style='display:none;'><input type='checkbox' name='buccalrestoration[]' value='".$tn."' id='restobuccal".$tn."' onclick='showvar(\"buccal\"+restoreSelectSurfaceid,restobuccalformid);drawConditionMini(\"restoration\", \"buccal\",".$tn.") ' ";
if($recordexist && in_array($tn, $bucrestoration)) echo "checked";

echo "/></div></td><td><div id='buccalrestoreSelectSurface".$tn."' style='display:none;'><select name='selectRestorationBuccal[]' id='buccalrestoreTypeSelect".$tn."'>
<option value='".$tn."'></option>
<option value='AM".$tn."' ";
if($recordexist && in_array("AM".$tn, $bucresrestoration)) echo "selected";

echo ">AM</option>
<option value='CO".$tn."' ";
if($recordexist && in_array("CO".$tn, $bucresrestoration)) echo "selected";

echo ">CO</option>
<option value='GI".$tn."' ";
if($recordexist && in_array("GI".$tn, $bucresrestoration)) echo "selected";

echo ">GI</option>
<option value='TF".$tn."' ";
if($recordexist && in_array("TF".$tn, $bucresrestoration)) echo "selected";

echo ">TF</option>
</select></div></td></tr>


		
<tr><td>Lingual</td><td><div id='caries_surfaces".$tn."lingual' style='display:none;'><input type='checkbox' name='lingualcaries[]' value='".$tn."' id='lingual".$tn."' onclick='showvar(\"lingual\"+cariesSelectSurfaceid,lingualformid);drawConditionMini(\"caries\", \"lingual\",".$tn.") ' ";
if($recordexist && in_array($tn, $lincaries)) echo "checked";

echo "/></div>	</td>	
<td><div id='lingualcariesSelectSurface".$tn."' style='display:none;'><select name='selectCariesLingual[]'  id='lingualcariesSelect".$tn."'>
<option value='".$tn."'></option>
  <option value='restorable".$tn."' ";
if($recordexist && in_array("restorable".$tn, $linrescaries)) echo "selected";

echo "> O </option>
  <option value='nonrestorable".$tn."' ";
if($recordexist && in_array("nonrestorable".$tn, $linrescaries)) echo "selected";

echo "> / </option>
	</select></div></td>
	<td><div id='recurrent_surfaces".$tn."lingual' style='display:none;'><input type='checkbox' name='lingualrecurrent[]' value='".$tn."' id='relingual".$tn."' onclick='showvar(\"lingual\"+recurrentSelectSurfaceid,relingualformid);drawConditionMini(\"recurrent\", \"lingual\",".$tn.") ' ";
if($recordexist && in_array($tn, $linrecurrent)) echo "checked";

echo "/></div></td>		
	<td><div id='lingualrecurrentSelectSurface".$tn."' style='display:none;'>
	<select name='selectRecurrentLingual[]' id='lingualrecurrentSelect".$tn."'>
	<option value='".$tn."'></option>
	<option value='restorable".$tn."' ";
if($recordexist && in_array("restorable".$tn, $linresrecurrent)) echo "selected";

echo "> O </option>
	<option value='nonrestorable".$tn."' ";
if($recordexist && in_array("nonrestorable".$tn, $linresrecurrent)) echo "selected";

echo "> / </option>
	</select></div></td>
	<td><div id='restoration_surfaces".$tn."lingual' style='display:none;'><input type='checkbox' name='lingualrestoration[]' value='".$tn."' id='restolingual".$tn."' onclick='showvar(\"lingual\"+restoreSelectSurfaceid,restolingualformid);drawConditionMini(\"restoration\", \"lingual\",".$tn.") ' ";
if($recordexist && in_array($tn, $linrestoration)) echo "checked";

echo "/></div></td><td><div id='lingualrestoreSelectSurface".$tn."' style='display:none;'><select name='selectRestorationLingual[]' id='lingualrestoreTypeSelect".$tn."'>
<option value='".$tn."'></option>
<option value='AM".$tn."' ";
if($recordexist && in_array("AM".$tn, $linresrestorable)) echo "selected";

echo ">AM</option>
<option value='CO".$tn."' ";
if($recordexist && in_array("CO".$tn, $linresrestorable)) echo "selected";

echo ">CO</option>
<option value='GI".$tn."' ";
if($recordexist && in_array("GI".$tn, $linresrestorable)) echo "selected";

echo ">GI</option>
<option value='TF".$tn."' ";
if($recordexist && in_array("TF".$tn, $linresrestorable)) echo "selected";

echo ">TF</option>

</select></div></td></tr>
</table></div><hr>	
<br><input type='checkbox' name='toothAll' value='".$tn."' id='alltooth".$tn."' onclick='showAllTooth()' ";

if($recordexist){if(in_array($tn, $partialdentures) || in_array($tn, $extrus) || in_array($tn, $intrus) || in_array($tn, $mesrots) || in_array($tn, $disrots) || in_array($tn, $rots) || in_array($tn, $postcores) || in_array($tn, $roots) || in_array($tn, $pits) || in_array($tn, $extras) || in_array($tn, $misss) || in_array($tn, $erups) || in_array($tn, $impacs) || in_array($tn, $porcrs) || in_array($tn, $acrcrs) || in_array($tn, $metcrs) || in_array($tn, $porins) || in_array($tn, $fixeds)) echo "checked";}

echo "><b>Whole Tooth</b>
<div id='all_tooth_surfaces".$tn."' style='display:none;'><table>


<tr>
<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type='checkbox' name='extrusion[]' value='".$tn."' id='extrusion".$tn."' onclick='drawConditionMini2(\"extrusion\",".$tn.")' ";
if($recordexist && in_array($tn, $extrus)) echo "checked";

echo "></td>
<td>Extrusion</td>
<td><input type='checkbox' name='intrusion[]' value='".$tn."' id='intrusion".$tn."' onclick='drawConditionMini2(\"intrusion\",".$tn.")' ";
if($recordexist && in_array($tn, $intrus)) echo "checked";

echo "></td>
<td>Intrusion</td>
<td><input type='checkbox' name='mesialdrift[]' value='".$tn."' id='mesialdrift".$tn."' onclick='drawConditionMini2(\"mesialdrift\",".$tn.")' "; 
if($recordexist && in_array($tn, $mesrots)) echo "checked";

echo "></td>
<td>Mesial Drift Rotation</td>
<td><input type='checkbox' name='distaldrift[]' value='".$tn."' id='distaldrift".$tn."' onclick='drawConditionMini2(\"distaldrift\",".$tn.") '";
if($recordexist && in_array($tn, $disrots)) echo "checked"; 

echo "></td>
<td>Distal Drift Rotation</td>
<td><input type='checkbox' name='rotation[]' value='".$tn."' id='rotation".$tn."' onclick='drawConditionMini2(\"rotation\",".$tn.")' ";
if($recordexist && in_array($tn, $rots)) echo "checked";

echo "></td>
<td>Rotation</td>
</tr>

<tr>
<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type='checkbox' name='removablepartial[]' value='".$tn."' id='removablepartial".$tn."' onclick='drawConditionMini2(\"removablepartial\",".$tn.")' ";
if($recordexist && in_array($tn, $partialdentures)) echo "checked";

echo "></td>
<td>Removable Partial Denture</td>
<td><input type='checkbox' name='fixedbridge[]' value='".$tn."' id='fixedbridge".$tn."' onclick='drawConditionMini2(\"fixedbridge\",".$tn.")' ";
if($recordexist && in_array($tn, $fixeds)) echo "checked";

echo "></td>
<td>Fixed Bridged</td>
<td><input type='checkbox' name='rootcanal[]' value='".$tn."' id='rootcanal".$tn."' onclick='drawConditionMini2(\"rootcanal\",".$tn.")' ";
if($recordexist && in_array($tn, $roots)) echo "checked";

echo "></td>
<td>Root Canal Treatment</td>
<td><input type='checkbox' name='porcelainfused[]' value='".$tn."' id='porcelainfused".$tn."' onclick='drawConditionMini2(\"porcelainfused\",".$tn.")' ";
if($recordexist && in_array($tn, $porins)) echo "checked";

echo "></td>
<td>Porcelain Fused to Metal</td>
<td><input type='checkbox' name='pitandfissure[]' value='".$tn."' id='pitfissure".$tn."' onclick='drawConditionMini2(\"pitfissure\",".$tn.")' ";
if($recordexist && in_array($tn, $pits)) echo "checked";

echo "></td>
<td>Pit and Fissure Sealants</td>

</tr>

<tr>
<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type='checkbox' name='postcore[]' value='".$tn."' id='postcore".$tn."' onclick='drawConditionMini2(\"postcore\",".$tn.")' ";
if($recordexist && in_array($tn, $postcores)) echo "checked";

echo "></td>
<td>Post Core Crown</td>
<td><input type='checkbox' name='acrylic[]' value='".$tn."' id='acrylic".$tn."' onclick='drawConditionMini2(\"acrylic\",".$tn.")' ";
if($recordexist && in_array($tn, $acrcrs)) echo "checked";

echo "></td>
<td>Acrylic Crown</td>
<td><input type='checkbox' name='metal[]' value='".$tn."' id='metal".$tn."' onclick='drawConditionMini2(\"metal\",".$tn.")' ";
if($recordexist && in_array($tn, $metcrs)) echo "checked";

echo "></td>
<td>Metal Crown</td>
<td><input type='checkbox' name='porcelain[]' value='".$tn."' id='porcelain".$tn."' onclick='drawConditionMini2(\"porcelain\",".$tn.")' ";
if($recordexist && in_array($tn, $porcrs)) echo "checked"; 

echo "></td>
<td>Porcelain Crown</td>
		
</tr>


<tr>
<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type='checkbox' name='extracted[]' value='".$tn."' id='extracted".$tn."' onclick='drawConditionMini2(\"extracted\",".$tn.")' ";
if($recordexist && in_array($tn, $extras)) echo "checked";

echo "></td>
<td>Extracted</td>
<td><input type='checkbox' name='missing[]' value='".$tn."' id='missing".$tn."' onclick='drawConditionMini2(\"missing\",".$tn.")' ";
if($recordexist && in_array($tn, $misss)) echo "checked";

echo "></td>
<td>Missing</td>
<td><input type='checkbox' name='unerupted[]' value='".$tn."' id='unerupted".$tn."' onclick='drawConditionMini2(\"unerupted\",".$tn.")' ";
if($recordexist && in_array($tn, $erups)) echo "checked";

echo "></td>
<td>Unerupted</td>
<td><input type='checkbox' name='impacted[]' value='".$tn."' id='impacted".$tn."' onclick='drawConditionMini2(\"impacted\",".$tn.")' ";
if($recordexist && in_array($tn, $impacs)) echo "checked";

echo "></td>
<td>Impacted</td>
</tr>


</table></div>


	<hr>
		<a href = 'javascript:void(0)' onclick = 'submitcond()'>Submit</a>
		<a href = 'javascript:void(0)' onclick = 'document.getElementById(\"light".$tn."\").style.display='none';document.getElementById(\"fade".$tn."\").style.display=\"none\"'>Cancel</a>

		<br/>
		<br/>
		<b>Services needed</b>
		<br/>
						<hr>
		<u>Operative Dentistry</u><br/>
		<input type='checkbox' name='class1[]' id='class1".$tn."' value='".$tn."' ";
if($recordexist && in_array($tn, $c1)) echo "checked";

echo ">Class I
		<input type='checkbox' name='class2[]' id='class2".$tn."' value='".$tn."' ";
if($recordexist && in_array($tn, $c2)) echo "checked";

echo ">Class II
		<input type='checkbox' name='class3[]' id='class3".$tn."' value='".$tn."' ";
if($recordexist && in_array($tn, $c3)) echo "checked";

echo ">Class III
		<input type='checkbox' name='class4[]' id='class4".$tn."' value='".$tn."' ";
if($recordexist && in_array($tn, $c4)) echo "checked";

echo ">Class IV
		<input type='checkbox' name='class5[]' id='class5".$tn."' value='".$tn."' ";
if($recordexist && in_array($tn, $c5)) echo "checked";

echo ">Class V
		<input type='checkbox' name='onlay[]' id='onlay".$tn."' value='".$tn."' "; 
if($recordexist && in_array($tn, $ol)) echo "checked";

echo ">Onlay
		<br/><br/>
		<u> Surgery </u><br/>
		<input type='checkbox' name='extraction[]' id='extractss".$tn."' value='".$tn."' ";
if($recordexist && in_array($tn, $ex)) echo "checked";

echo ">Extraction
		<input type='checkbox' name='odontectomy[]' id='odontectomy".$tn."' value='".$tn."' "; 
if($recordexist && in_array($tn, $od)) echo "checked";

echo ">Odontectomy
		<input type='checkbox' name='specialcase[]' id='specialcase".$tn."' value='".$tn."' ";
if($recordexist && in_array($tn, $sc)) echo "checked";

echo ">Special Case
		<br/><br/>
		<u> Emergency Treatment </u><br/>
		<input type='checkbox' name='pulpsedation[]' id='pulpsedation".$tn."' value='".$tn."' ";
if($recordexist && in_array($tn, $ps)) echo "checked";

echo ">Pulp Sedation
		<input type='checkbox' name='crownrecementation[]' id='crownrecementation".$tn."' value='".$tn."' ";
if($recordexist && in_array($tn, $cr)) echo "checked";

echo ">Recementation of crowns
		<input type='checkbox' name='fillingservice[]' id='fillingservice".$tn."' value='".$tn."' ";
if($recordexist && in_array($tn, $fs)) echo "checked";

echo ">Temporary fillings
		<br/><br/>
		<u> Fixed Partial Dentures </u><br/>
		<input type='checkbox' name='laminated[]' id='laminated".$tn."' value='".$tn."' ";
if($recordexist && in_array($tn, $la)) echo "checked";

echo ">Laminated
		<input type='checkbox' name='singlecrown[]' id='singlecrown".$tn."' value='".$tn."' ";
if($recordexist && in_array($tn, $scr)) echo "checked";

echo ">Single Crown
		<input type='checkbox' name='bridgeservice[]' id='bridgeservice".$tn."' value='".$tn."' ";
if($recordexist && in_array($tn, $bs)) echo "checked"; 

echo ">Bridge
		<br/><br/>
		<u> Endodontics </u><br/>
		<input type='checkbox' name='anterior[]' id='anterior".$tn."' value='".$tn."' ";
if($recordexist && in_array($tn, $ant)) echo "checked";

echo ">Anterior
		<input type='checkbox' name='posterior[]' id='posterior".$tn."' value='".$tn."' "; 
if($recordexist && in_array($tn, $pos)) echo "checked";

echo ">Posterior
		<input type='checkbox' name='otherendodontics[]' id='otherendodontics".$tn."' value='".$tn."' ";
if($recordexist && in_array($tn, $or)) echo "checked";

echo ">Others (Endosurgery, Bleaching, etc.)
		<br/><br/>
		<hr>
		<a href = 'javascript:void(0)' onclick = 'submitcond()'>Submit</a>
		<a href = 'javascript:void(0)' onclick = 'document.getElementById(\"light".$tn."\").style.display=\"none\";document.getElementById(\"fade".$tn."\").style.display=\"none\"'>Cancel</a>

		
</div><div id='fade".$tn."' class='black_overlay'></div>";

		} 
	}
?>

<div id="serviceslight" class="white_content">
	<font size = "2">
	<b>Other Services</b><br/>
	<hr>
	<u>Periodontics</u><br/>
	<input type="checkbox" name="periodontics" id="periodontics" value="Yes" <?php if($recordexist && $perio == "Yes") echo "checked"; ?>>Management of Periodontal Disease
	<br/><br/>
	<u> Surgery </u><br/>
	<input type="checkbox" name="surgery[]" id="pedodontics" value="pedodontics" <?php if($recordexist && $pedo == "Yes") echo "checked"; ?>>Pedodontics <br/>
	<input type="checkbox" name="surgery[]" id="orthodontics" value="orthodontics" <?php if($recordexist && $ortho == "Yes") echo "checked"; ?>>Orthodontics
	<br/><br/>
	<u> Emergency Treatment </u><br/>
	<input type="checkbox" name="emergencytreatment[]" id="acuteinfections" value="acute infections" <?php if($recordexist && $acute == "Yes") echo "checked"; ?>>Management of Acute Infections <br/>
	<input type="checkbox" name="emergencytreatment[]" id="traumaticinjuries" value="traumatic injuries" <?php if($recordexist && $traumatic == "Yes") echo "checked"; ?>>Management of Temporary Injuries
	<br/><br/>
	<u> Prosthodontics </u><br/>
	<input type="checkbox" name="prosthodontics[]" id="completedent" value="complete denture" <?php if($recordexist && $compdent == "Yes") echo "checked"; ?>>Complete Denture<br/>
	<input type="checkbox" name="prosthodontics[]" id="singledent" value="single denture" <?php if($recordexist && $singdent == "Yes") echo "checked"; ?>>Single Denture<br/>
	<input type="checkbox" name="prosthodontics[]" id="removedent" value="removable partial" <?php if($recordexist && $rempardent == "Yes") echo "checked"; ?>>Removable Partial Denture<br/>
	<input type="checkbox" name="prosthodontics[]" id="otherss" value="others" <?php if($recordexist && $othdent == "Yes") echo "checked"; ?>>Other Denture Services
	<br/><br/>
	<hr>
	<a href = "javascript:void(0)" onclick = "document.getElementById('serviceslight').style.display='none';document.getElementById('servicesfade').style.display='none'">Done</a>

	</font>
</div>
<div id="servicesfade" class="black_overlay"></div>



<div id="noteslight" class="white_content">
	<font size = "2">
	<b>Notes</b><br/>
	<hr>
	<br/>
	<textarea name="notes" rows="6" cols="100" ><?php if($recordexist) echo $notes; ?></textarea>
	<br/><br/>
	<hr>
	<a href = "javascript:void(0)" onclick = "document.getElementById('noteslight').style.display='none';document.getElementById('notesfade').style.display='none'">Submit</a>
	<a href = "javascript:void(0)" onclick = "document.getElementById('noteslight').style.display='none';document.getElementById('notesfade').style.display='none'">Cancel</a>

	</font>
</div>

<div id="neededlight" class="white_content">
<b>Service Needed Summary</b> &nbsp;&nbsp;||&nbsp;&nbsp;
<a href = "javascript:void(0)" onclick = "clearneeded_service();">Cancel</a>

<table>
<tr>
<td>
<u><div id="periodonticsdiv"></div></u>
<div id="periodiv"></div>
</td>

<td>
<u><div id="emergencytreatmentdiv"></div></u>
<div id="pulpsedationdiv"></div>
<div id="crownrecementationdiv"></div>
<div id="fillingservicediv"></div>
<div id="acuteinfectionsdiv"></div>
<div id="traumaticdiv"></div>

</td>
</tr>

<tr>
<td>
<u><div id="operativedentistrydiv"></div></u>
<div id="class1div"></div>
<div id="class2div"></div>
<div id="class3div"></div>
<div id="class4div"></div>
<div id="class5div"></div>
<div id="onlaydiv"></div>
</td>

<td>
<u><div id="fixedpartialdenturediv"></div></u>
<div id="laminateddiv"></div>
<div id="singlecrowndiv"></div>
<div id="bridgeservicediv"></div>
<br/>
<u><div id="endodonticsdiv"></div></u>
<div id="anteriordiv"></div>
<div id="posteriordiv"></div>
<div id="othersdiv"></div>
</td>
</tr>

<tr>
<td>
<u><div id="surgerydiv"></div></u>
<div id="extractiondiv"></div>
<div id="odontectomydiv"></div>
<div id="specialcasediv"></div>
<div id="pedonticsdiv"></div>
<div id="orthodonticsdiv"></div>
</td>

<td>
<u><div id="prosthodonticsdiv"></div></u>
<div id="completedentdiv"></div>
<div id="singledentdiv"></div>
<div id="removedentdiv"></div>
<div id="otherssdiv"></div>
</td>
</tr>
</table>

</div>

	<center><vr><input value="Submit" type="submit"></center>
	

	<script type="text/javascript"> init(65, 65, 627);     </script>



<br/> <br/>
</div>


</form>
</div>
</div>

 </body>
</html>


