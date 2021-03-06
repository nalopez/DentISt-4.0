<style>
/* calendar */
table.calendar		{ 
	border-left:1px solid #999; 
}
tr.calendar-row	{  }
td.calendar-day	{ 
	min-height:80px; 
	font-size:11px; 
	position:relative; 
	} * html div.calendar-day { height:80px; }

td.calendar-day:hover	{ 
	background:#eceff5; 
}
td.calendar-day-np	{ 
	background:#eee; min-height:80px; 
	} * html div.calendar-day-np { height:80px; }

td.calendar-day-head { 
background:#9400D3; 
font-weight:bold; 
text-align:center; 
width:120px; 
padding:1px; 
border-bottom:1px solid #999; 
border-top:1px solid #999; 
border-right:1px solid #999;
color: white;
 }

div.day-number		{ 
background:#999; 
padding:5px; 
color:#fff; 
font-weight:bold; 
float:right; 
margin:-5px -5px 0 0;
 width:10px;
 text-align:center; }
/* shared */
td.calendar-day, td.calendar-day-np { width:120px; padding:5px; border: 1px solid #999;}

#accordion .ui-accordion-content { padding: 0;}

</style>
<?php
	echo "<link rel=\"stylesheet\" type=\"text/css\" href='".base_url()."css/style.css'>";
	$session_data = $this->session->userdata('logged_in');
	$username = $session_data['username'];
	
?>

	<meta charset="utf-8">
	<link href="<?php echo base_url(); ?>css/ui-lightness/jquery-ui-1.10.3.custom.css" rel="stylesheet">
	<script src="<?php echo base_url(); ?>js/jquery-1.9.1.js"></script>
	<script src="<?php echo base_url(); ?>js/jquery-ui-1.10.3.custom.js"></script>
	<script>
		$(function() {
			$( "#accordion" ).accordion();
		});
	</script>
	<body><br>
	<div style="align: left; width: 20%; position: absolute; height:100%;">
	<?php

		$sysad = false;
		$fac = false;
		$stud = false;
		$ODi = false;
		$OM = false;
		$PD = false;
		$ODe = false;
		$GQ = false;

		$session_data = $this->session->userdata('logged_in');
		$role = $session_data['role'];
		$section = $session_data['section'];

		foreach($role as $row){
			if($row == "System Administrator")
				$sysad = true;
			elseif($row == "Faculty")
				$fac = true;
			elseif($row == "Student")
				$stud = true;
		}

		foreach($section as $row){
			if($row == "Oral Diagnosis")
				$ODi = true;
			elseif($row == "Oral Medicine")
				$OM = true;
			elseif($row == "Prosthodontrics")
				$PD = true;
			elseif($row == "Operative Dentistry")
				$ODe = true;
			elseif($row == "General Query")
				$GQ = true;
		}
		echo "<div id='accordion'>";
		//echo "<center>";
		if($sysad){
			echo "<h3 align='center'> System Administrator</h3>";
			echo "<div style='text-align:center;'>
		<div class='accord'><a href='".base_url()."index.php/adduser'>Add a User</a></div>
		<div class='accord'><a href='".base_url()."index.php/manageusers'> View Users </a></div>
		<div class='accord'><a href='".base_url()."index.php/viewstat'> View Statistics </a></div>
		<div class='accord'><a href='".base_url()."index.php/searchpatient'><a href='".base_url()."index.php/viewaudittrail'> View Audit Trail </a></div></div>";
		}
		if($fac){
			echo "<h3 align='center'> Faculty<br> (";
				if($ODi) echo "Oral Diagnosis";
				elseif($OM) echo "Oral Medicine";
				elseif($PD) echo "Prosthodontrics";
				elseif($ODe) echo "Operative Dentistry";
				elseif($GQ) echo "General Query"; 
			echo ") </h3><div style='text-align:left;' >";
			if($ODi){
				echo "<div class='accord'><a href='".base_url()."index.php/addpatient'> Add a Patient </a></div>";
			}
			echo "<div class='accord'><a href='".base_url()."index.php/searchpatient'> Query for Patient/s </a></div>";
			echo "<div class='accord'><a href='".base_url()."index.php/facultytasks'> Tasks </a></div>";
			echo "<div class='accord'><a href='".base_url()."index.php/clinicianappointments'> View Clinician Appointments </a></div>";
			echo "<div class='accord'><a href='".base_url()."index.php/viewclinicians'> View Section Clinicians </a></div>";
			echo "<div class='accord'><a href='".base_url()."index.php/viewstat'> View Statistics </a></div> </div>";
		}
		if($stud){
			echo "<h3 align='center'> Student<br> (";
				if($ODi) echo "Oral Diagnosis";
				elseif($OM) echo "Oral Medicine";
				elseif($PD) echo "Prosthodontrics";
				elseif($ODe) echo "Operative Dentistry";
				elseif($GQ) echo "General Query"; 
			echo ") </h3><div style='text-align:center;'>";
			if($ODi){
				echo "<div class='accord'><a href='".base_url()."index.php/searchpatient'><a href='".base_url()."index.php/addpatient'> Add a Patient </a></div>";
			}
			echo "<div class='accord'><a href='".base_url()."index.php/searchpatient'> Query for Patient/s </a></div>
				<div class='accord'><a href='".base_url()."index.php/studenttasks'> Tasks </a></div>
				<div class='accord'><a href='".base_url()."index.php/viewappointments'> View Appointments </a></div> </div>";
		}
		echo "</center>";
		echo"</div>"

 
	?>


	<?php

	/* draws a calendar */
function draw_calendar($month,$year){

	/* draw table */
	$calendar = '<table cellpadding="0" cellspacing="0" class="calendar">';

	/* table headings */
	$headings = array('Sun','Mon','Tue','Wed','Thu','Fri','Sat');
	$calendar.= '<tr class="calendar-row"><td class="calendar-day-head">'.implode('</td><td class="calendar-day-head">',$headings).'</td></tr>';

	/* days and weeks vars now ... */
	$running_day = date('w',mktime(0,0,0,$month,1,$year));
	$days_in_month = date('t',mktime(0,0,0,$month,1,$year));
	$days_in_this_week = 1;
	$day_counter = 0;
	$dates_array = array();

	/* row for week one */
	$calendar.= '<tr class="calendar-row">';

	/* print "blank" days until the first of the current week */
	for($x = 0; $x < $running_day; $x++):
		$calendar.= '<td class="calendar-day-np"> </td>';
		$days_in_this_week++;
	endfor;

	/* keep going with days.... */
	for($list_day = 1; $list_day <= $days_in_month; $list_day++):
		$calendar.= '<td class="calendar-day">';
			/* add in the day number */
			$calendar.= '<div class="day-number">'.$list_day.'</div>';

			/** QUERY THE DATABASE FOR AN ENTRY FOR THIS DAY !!  IF MATCHES FOUND, PRINT THEM !! **/
			$calendar.= str_repeat('<p> </p>',2);
			
		$calendar.= '</td>';
		if($running_day == 6):
			$calendar.= '</tr>';
			if(($day_counter+1) != $days_in_month):
				$calendar.= '<tr class="calendar-row">';
			endif;
			$running_day = -1;
			$days_in_this_week = 0;
		endif;
		$days_in_this_week++; $running_day++; $day_counter++;
	endfor;

	/* finish the rest of the days in the week */
	if($days_in_this_week < 8):
		for($x = 1; $x <= (8 - $days_in_this_week); $x++):
			$calendar.= '<td class="calendar-day-np"> </td>';
		endfor;
	endif;

	/* final row */
	$calendar.= '</tr>';

	/* end the table */
	$calendar.= '</table>';
	
	/* all done, return result */
	return $calendar;
}

/* sample usages */
echo '<font color=#9400D3><h2 align=center>'. date('F Y') .'</h2></font>';
echo draw_calendar(date("n"),date("Y"));

?>
	</div>
	</body>

