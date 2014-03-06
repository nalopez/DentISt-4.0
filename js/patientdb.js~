function tab(tab) {
	document.getElementById('tab1').style.display = 'none';
	document.getElementById('tab2').style.display = 'none';
	document.getElementById('tab3').style.display = 'none';
	document.getElementById('tab4').style.display = 'none';
	document.getElementById('tab5').style.display = 'none';
	document.getElementById('tab6').style.display = 'none';
	document.getElementById('li_tab1').setAttribute("class", "");
	document.getElementById('li_tab2').setAttribute("class", "");
	document.getElementById('li_tab3').setAttribute("class", "");
	document.getElementById('li_tab4').setAttribute("class", "");
	document.getElementById('li_tab5').setAttribute("class", "");
	document.getElementById('li_tab6').setAttribute("class", "");
	document.getElementById(tab).style.display = 'block';
	document.getElementById('li_'+tab).setAttribute("class", "active");
	document.getElementById('li_'+tab).setAttribute("class", "selected");
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

	var str = '#date'+fieldNum;
	$(str).datepicker({
		dateFormat: 'yy-mm-dd',
			showAnim: 'slideDown',
				changeMonth: true,
				changeYear: true,
				yearRange: '1910:2014'
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
	cellA.innerHTML ="<input type='checkbox' name='"+fieldNum2+"' id='ck"+fieldNum2+"'>";
	var cellB = row.insertCell(1);
	cellB.innerHTML ="<input type='text' name='date[]' class='datepicker' id='date_" + fieldNum2 +"' size=8px>";
	var cellC = row.insertCell(2);
	cellC.innerHTML ="<input type='text' name='reason[]' id='reason_" + fieldNum2 +"' size=10px>";
	var cellD = row.insertCell(3);
	cellD.innerHTML ="<input type='text' name='startdate[]' class='datepicker' id='startdate_" + fieldNum2 +"' size=8px>";
	var cellE = row.insertCell(4);
	cellE.innerHTML ="<input type='text' name='enddate[]' class='datepicker' id='enddate_" + fieldNum2 +"' size=8px>";
	var cellF = row.insertCell(5);
	cellF.innerHTML ="<textarea name='findings[]' id='findings_" + fieldNum2 +"'></textarea>";

	j++;

	var str = '#date_'+fieldNum2;
	$(str).datepicker({
		dateFormat: 'yy-mm-dd',
		showAnim: 'slideDown',
		changeMonth: true,
		changeYear: true,
		yearRange: '1910:2014'
    	});
			
	var str2 = '#startdate_'+fieldNum2;
	$(str2).datepicker({
		dateFormat: 'yy-mm-dd',
		showAnim: 'slideDown',
		changeMonth: true,
		changeYear: true,
		yearRange: '1910:2014'
    	});

	var str3 = '#enddate_'+fieldNum2;
	$(str3).datepicker({
		dateFormat: 'yy-mm-dd',
		showAnim: 'slideDown',
		changeMonth: true,
		changeYear: true,
		yearRange: '1910:2014'
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

var fieldNum3;
var k=0;

function addService(tableID){
	fieldNum3= k+1;
			
	var table = document.getElementById(tableID);
	var numRows = table.rows.length;
	var row = table.insertRow(numRows);
	row.align = "center";

	var cellA = row.insertCell(0);
	cellA.innerHTML ="<input type='checkbox' name='"+fieldNum3+"' id='ck"+fieldNum3+"'>";
	var cellB = row.insertCell(1);
	cellB.innerHTML ="<input type='text' name='servicedate[]' class='datepicker' id='servicedate_" + fieldNum3 +"' size=8px>";
	var cellC = row.insertCell(2);
	cellC.innerHTML ="<textarea name='rendered[]' id='rendered_" + fieldNum3 +"'></textarea>";
	var cellD = row.insertCell(3);
	cellD.innerHTML ="<input type='text' name='fees[]' id='fees_" + fieldNum3 +"' size=10px>";
	

	k++;

	var str = '#servicedate_'+fieldNum2;
	$(str).datepicker({
		dateFormat: 'yy-mm-dd',
		showAnim: 'slideDown',
		changeMonth: true,
		changeYear: true,
		yearRange: '1910:2014'
    	});
}

function deleteService(tableID){
	
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


var year = new Date().getFullYear();

	/*$(function() {
		$('.datepicker').each(function(){
    			$(this).datepicker({
				dateFormat: 'yy-mm-dd',
				showAnim: 'slideDown',
				changeMonth: true,
				changeYear: true,
				yearRange: '1910:'+year
			});
		});

	});*/
	
function checkAll1(value){
		if(value){
			document.getElementById('hbpy').checked=true;
			document.getElementById('pijy').checked=true;
			document.getElementById('hay').checked=true;
			document.getElementById('tremy').checked=true;
			document.getElementById('apcpy').checked=true;
			document.getElementById('bty').checked=true;
			document.getElementById('say').checked=true;
			document.getElementById('dptgby').checked=true;
			document.getElementById('fhfy').checked=true;
			document.getElementById('paly').checked=true;
			document.getElementById('pahvy').checked=true;
			document.getElementById('diay').checked=true;
			document.getElementById('empy').checked=true;
			document.getElementById('goiy').checked=true;
			document.getElementById('afy').checked=true;
			document.getElementById('bobty').checked=true;
			document.getElementById('ccy').checked=true;
			document.getElementById('swlogy').checked=true;
			document.getElementById('brpy').checked=true;
			document.getElementById('fty').checked=true;
			document.getElementById('bsy').checked=true;
			document.getElementById('fhy').checked=true;
			document.getElementById('siny').checked=true;
			document.getElementById('fury').checked=true;
			document.getElementById('fhay').checked=true;
			document.getElementById('chey').checked=true;
			document.getElementById('dizy').checked=true;
			document.getElementById('puuy').checked=true;
			document.getElementById('fslcy').checked=true;
			document.getElementById('biuy').checked=true;
			document.getElementById('viy').checked=true;
			document.getElementById('hepy').checked=true;
			document.getElementById('hiy').checked=true;
			document.getElementById('hivy').checked=true;
			document.getElementById('arty').checked=true;
			document.getElementById('pady').checked=true;
			document.getElementById('nery').checked=true;
			document.getElementById('depy').checked=true;
			document.getElementById('anxy').checked=true;
			document.getElementById('othy').checked=true;
			document.getElementById('asty').checked=true;

			document.getElementById('checklist').style.display = "block";
		}
		else{
			document.getElementById('hbpn').checked=true;
			document.getElementById('pijn').checked=true;
			document.getElementById('han').checked=true;
			document.getElementById('tremn').checked=true;
			document.getElementById('apcpn').checked=true;
			document.getElementById('btn').checked=true;
			document.getElementById('san').checked=true;
			document.getElementById('dptgbn').checked=true;
			document.getElementById('fhfn').checked=true;
			document.getElementById('paln').checked=true;
			document.getElementById('pahvn').checked=true;
			document.getElementById('dian').checked=true;
			document.getElementById('empn').checked=true;
			document.getElementById('goin').checked=true;
			document.getElementById('afn').checked=true;
			document.getElementById('bobtn').checked=true;
			document.getElementById('ccn').checked=true;
			document.getElementById('swlogn').checked=true;
			document.getElementById('brpn').checked=true;
			document.getElementById('ftn').checked=true;
			document.getElementById('bsn').checked=true;
			document.getElementById('fhn').checked=true;
			document.getElementById('sinn').checked=true;
			document.getElementById('furn').checked=true;
			document.getElementById('fhan').checked=true;
			document.getElementById('chen').checked=true;
			document.getElementById('dizn').checked=true;
			document.getElementById('puun').checked=true;
			document.getElementById('fslcn').checked=true;
			document.getElementById('biun').checked=true;
			document.getElementById('vin').checked=true;
			document.getElementById('hepn').checked=true;
			document.getElementById('hin').checked=true;
			document.getElementById('hivn').checked=true;
			document.getElementById('artn').checked=true;
			document.getElementById('padn').checked=true;
			document.getElementById('nern').checked=true;
			document.getElementById('depn').checked=true;
			document.getElementById('anxn').checked=true;
			document.getElementById('othn').checked=true;
			document.getElementById('astn').checked=true;

			document.getElementById('checklist').style.display = "none";
		}
		
	}

	function checkAll2(value){
		if(value){
			document.getElementById('diafy').checked=true;
			document.getElementById('bdfy').checked=true;
			document.getElementById('hdfy').checked=true;
			document.getElementById('canfy').checked=true;
			document.getElementById('famothy').checked=true;

			document.getElementById('family').style.display = "block";
		}
		else{			
			document.getElementById('diafn').checked=true;
			document.getElementById('bdfn').checked=true;
			document.getElementById('hdfn').checked=true;
			document.getElementById('canfn').checked=true;
			document.getElementById('famothn').checked=true;
		
			document.getElementById('family').style.display = "none";
		}
		
	}

	function checkAll3(value){
		if(value){
			document.getElementById('drugay').checked=true;
			document.getElementById('fooday').checked=true;
			document.getElementById('rubay').checked=true;
			document.getElementById('alothy').checked=true;

			document.getElementById('allergy').style.display = "block";
		}
		else{			
			document.getElementById('drugan').checked=true;
			document.getElementById('foodan').checked=true;
			document.getElementById('ruban').checked=true;
			document.getElementById('alothn').checked=true;
		
			document.getElementById('allergy').style.display = "none";
		}
		
	}

	function checkAll4(value){
		if(value){
			document.getElementById('pregfey').checked=true;
			document.getElementById('bffey').checked=true;
			document.getElementById('hrtfey').checked=true;
			document.getElementById('mensfey').checked=true;
			document.getElementById('confey').checked=true;
		}
		else{			
			document.getElementById('pregfen').checked=true;
			document.getElementById('bffen').checked=true;
			document.getElementById('hrtfen').checked=true;
			document.getElementById('mensfen').checked=true;
			document.getElementById('confen').checked=true;
		}
		
	}

function showdiv(element, val){
		if(element == "oth"){
			if(val == "Yes"){
				document.getElementById('checklist').style.display = "block";
			} 
			else
				document.getElementById('checklist').style.display = "none";
		}
		else if(element == "famoth"){
			if(val == "Yes"){
				document.getElementById('family').style.display = "block";
			} 
			else
				document.getElementById('family').style.display = "none";
		}
		else if(element == "aloth"){
			if(val == "Yes"){
				document.getElementById('allergy').style.display = "block";
			} 
			else
				document.getElementById('allergy').style.display = "none";
		}
	}


