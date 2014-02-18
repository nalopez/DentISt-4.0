function drawPitFissure(tn) {
	
	if(document.getElementById(pitfissureformid).checked == true) {
		var toothvar=document.getElementById("toothvar"+tn).innerHTML;
		document.getElementById("toothvar"+tn).innerHTML=toothvar+" PFS,";
	}
	else if(document.getElementById(pitfissureformid).checked == false) {
		var toothvar=document.getElementById("toothvar"+tn).innerHTML;
		document.getElementById("toothvar"+tn).innerHTML=toothvar.replace(" PFS,","");
	}

	}

	
	
function drawPorcelainFused(tn) {
	
	if(document.getElementById(porcelainfusedformid).checked == true) {
		var toothvar=document.getElementById("toothvar"+tn).innerHTML;
		document.getElementById("toothvar"+tn).innerHTML=toothvar+" PFM,";
	}
	else if(document.getElementById(porcelainfusedformid).checked == false) {
		var toothvar=document.getElementById("toothvar"+tn).innerHTML;
		document.getElementById("toothvar"+tn).innerHTML=toothvar.replace(" PFM,","");
	}

	}


function drawRootCanal(tn) {
	
	if(document.getElementById(rootcanalformid).checked == true) {
		var toothvar=document.getElementById("toothvar"+tn).innerHTML;
		document.getElementById("toothvar"+tn).innerHTML=toothvar+" RCT,";
	}
	else if(document.getElementById(rootcanalformid).checked == false) {
		var toothvar=document.getElementById("toothvar"+tn).innerHTML;
		document.getElementById("toothvar"+tn).innerHTML=toothvar.replace(" RCT,","");
	}

	}

function drawFixedBridge(tn) {
	
	if(document.getElementById(fixedbridgeformid).checked == true) {
		var toothvar=document.getElementById("toothvar"+tn).innerHTML;
		document.getElementById("toothvar"+tn).innerHTML=toothvar+" FPD,";
	}
	else if(document.getElementById(fixedbridgeformid).checked == false) {
		var toothvar=document.getElementById("toothvar"+tn).innerHTML;
		document.getElementById("toothvar"+tn).innerHTML=toothvar.replace(" FPD,","");
	}

	}
function drawRPD(tn) {
	
	if(document.getElementById(removablepartialformid).checked == true) {
		var toothvar=document.getElementById("toothvar"+tn).innerHTML;
		document.getElementById("toothvar"+tn).innerHTML=toothvar+" RPD,";
	}
	else if(document.getElementById(removablepartialformid).checked == false) {
		var toothvar=document.getElementById("toothvar"+tn).innerHTML;
		document.getElementById("toothvar"+tn).innerHTML=toothvar.replace(" RPD,","");
	}

	}
function drawMetal(tn) {
	
	if(document.getElementById(metalcrownformid).checked == true) {
		var toothvar=document.getElementById("toothvar"+tn).innerHTML;
		document.getElementById("toothvar"+tn).innerHTML=toothvar+" C(M),";
	}
	else if(document.getElementById(metalcrownformid).checked == false) {
		var toothvar=document.getElementById("toothvar"+tn).innerHTML;
		document.getElementById("toothvar"+tn).innerHTML=toothvar.replace(" C(M),","");
	}

	}
function drawPorcelain(tn) {
	
	if(document.getElementById(porcelaincrownformid).checked == true) {
		var toothvar=document.getElementById("toothvar"+tn).innerHTML;
		document.getElementById("toothvar"+tn).innerHTML=toothvar+" C(P),";
	}
	else if(document.getElementById(porcelaincrownformid).checked == false) {
		var toothvar=document.getElementById("toothvar"+tn).innerHTML;
		document.getElementById("toothvar"+tn).innerHTML=toothvar.replace(" C(P),","");
	}

	}
function drawAcrylic(tn) {
	
	if(document.getElementById(acryliccrownformid).checked == true) {
		var toothvar=document.getElementById("toothvar"+tn).innerHTML;
		document.getElementById("toothvar"+tn).innerHTML=toothvar+" C(A),";
	}
	else if(document.getElementById(acryliccrownformid).checked == false) {
		var toothvar=document.getElementById("toothvar"+tn).innerHTML;
		document.getElementById("toothvar"+tn).innerHTML=toothvar.replace(" C(A),","");
	}

	}
function drawPostCore(tn) {
	
	if(document.getElementById(postcorecrownformid).checked == true) {
		var toothvar=document.getElementById("toothvar"+tn).innerHTML;
		document.getElementById("toothvar"+tn).innerHTML=toothvar+" PCC,";
	}
	else if(document.getElementById(postcorecrownformid).checked == false) {
		var toothvar=document.getElementById("toothvar"+tn).innerHTML;
		document.getElementById("toothvar"+tn).innerHTML=toothvar.replace(" PCC,","");
	}

	}
	
//row 1
function drawExtrusion(x, y, ctx50) {
	if(document.getElementById(extrusionformid).checked == true)  {
		ctx50.lineWidth="8";
		ctx50.moveTo(x,y-25);
		ctx50.lineTo(x,y+30);
		ctx50.stroke();
		ctx50.moveTo(x-20,y);
		//ctx50.lineTo(x+20,y-10);
		ctx50.lineTo(x,y-25);
		ctx50.lineTo(x+20, y);
		//ctx50.lineTo(x-20,y-10);
		ctx50.stroke();
		
		//ctx50.fillStyle = "#000";
		//ctx50.fill();
	}
	else if(document.getElementById(extrusionformid).checked == false)  {
		ctx50.clearRect(x-37,y-37,85,85);
	}
}

function drawIntrusion(x, y, ctx51) {
	if(document.getElementById(intrusionformid).checked == true)  {
		ctx51.lineWidth="8";
		ctx51.moveTo(x,y-30);
		ctx51.lineTo(x,y+25);
		ctx51.stroke();
		ctx51.moveTo(x-20,y);
		ctx51.lineTo(x,y+25);
		ctx51.lineTo(x+20,y);
		//ctx51.lineTo(x-20,y+10);
		//ctx51.fillStyle = "#000";
		//ctx51.fill();
		ctx51.stroke();
	}
	else if(document.getElementById(intrusionformid).checked == false)  {
		ctx51.clearRect(x-37,y-37,85,85);
	}
}

function drawMesialdrift(x, y, ctx52) {
	if(document.getElementById(mesialdriftformid).checked == true)  {
		ctx52.lineWidth = "7";
		ctx52.moveTo(x-25, y);
		ctx52.lineTo(x+30, y);
		ctx52.stroke();
		ctx52.moveTo(x,y+20);
		ctx52.lineTo(x-25,y);
		ctx52.lineTo(x,y-20);
		ctx52.stroke();
		
	}
	else if(document.getElementById(mesialdriftformid).checked == false)  {
		ctx52.clearRect(x-37,y-37,85,85);
	}
}

function drawDistaldrift(x, y, ctx53) {
	if(document.getElementById(distaldriftformid).checked == true)  {
		ctx53.lineWidth = "7";
		ctx53.moveTo(x-30, y);
		ctx53.lineTo(x+25, y);
		ctx53.stroke();
		ctx53.moveTo(x,y-20);
		ctx53.lineTo(x+25,y);
		ctx53.lineTo(x,y+20);
		ctx53.stroke();
		
	}
	else if(document.getElementById(distaldriftformid).checked == false)  {
		ctx53.clearRect(x-37,y-37,85,85);
	}
}

//------------------------------------------------------------------------------------

// row 2

function drawRotation(x, y, ctx54) {
	if(document.getElementById(rotationformid).checked == true)  {
		ctx54.lineWidth = "7";
		ctx54.beginPath();
		ctx54.arc(x, y, 23, 1 * Math.PI, 2.54 * Math.PI, false);
		ctx54.stroke();
		ctx54.moveTo(x-25,y);
		ctx54.lineTo(x-30, y-20);
		ctx54.stroke();
		ctx54.moveTo(x-27, y-1);
		ctx54.lineTo(x-5, y-10);
		ctx54.stroke();
		
	}
	else if(document.getElementById(rotationformid).checked == false)  {
		ctx54.clearRect(x-37,y-37,86,86);
	}
}

/*
function drawRootcanal(x, y, ctx23, ctx42) {
	if(document.getElementById(rootcanalformid).checked == true)  {
		ctx23.beginPath();
		ctx23.arc(x,y,35,0,Math.PI*2,false);
		ctx23.closePath();
		ctx23.fillStyle="orange";
		ctx23.fill();
		
		ctx42.beginPath();
		ctx42.arc(x,y,14,0,Math.PI*2,false);
		ctx42.closePath();
		ctx42.fillStyle="orange";
		ctx42.fill();
	}
	else if(document.getElementById(rootcanalformid).checked == false) {
		ctx23.clearRect(x-40,y-40,77,77);
		ctx42.clearRect(x-15, y-15, 50, 50);
	}
}

function drawPitfissure(x, y, ctx43) {
	if(document.getElementById(pitfissureformid).checked == true)  {
		ctx43.beginPath();
		ctx43.arc(x,y,14,0,Math.PI*2,false);
		ctx43.closePath();
		ctx43.fillStyle="#DC143C";
		ctx43.fill();
	}
	else if(document.getElementById(pitfissureformid).checked == false) {
		ctx43.clearRect(x-15, y-15, 50, 50);
	}
}
*/
//----------------------------------------------------------------------------------
//row 3

function drawExtracted(x, y, ctx55) {
	if(document.getElementById(extractedformid).checked == true)  {
		ctx55.lineWidth = "7";
		ctx55.moveTo(x-35,y-35);
		ctx55.lineTo(x+35,y+35);
		ctx55.stroke();
		ctx55.moveTo(x-35,y+35);
		ctx55.lineTo(x+35,y-35);
		ctx55.strokeStyle = "#000"
		ctx55.stroke();
	}
	else if(document.getElementById(extractedformid).checked == false)  {
		ctx55.clearRect(x-37,y-37,75,85);
	}
}

function drawMissing(x, y, ctx58) {	
	if(document.getElementById(missingformid).checked == true) {
		ctx58.font = "bold 20px sans-serif";
		ctx58.fillText("M", x-9, y+7);
	}
	else if(document.getElementById(missingformid).checked == false) {
		ctx58.clearRect(x-21, y-10, 40, 40);
		//ctx58.clearRect(x-5, y+11, 30, 30);
	}
}

function drawUnerupted(x, y, ctx58) {
	
	if(document.getElementById(uneruptedformid).checked == true) {
		ctx58.font = "bold 20px sans-serif";
		ctx58.fillText("UE", x-12, y-40);
	}
	else if(document.getElementById(uneruptedformid).checked == false) {
		ctx58.clearRect(x-20, y-60, 40, 40);
		//ctx58.clearRect(x-20, y-60, 25, 25);
	}
}

function drawImpacted(x, y, ctx58) {
	
	if(document.getElementById(impactedformid).checked == true) {
		ctx58.font = "bold 20px sans-serif";
		ctx58.fillText("IMP", x-13, y+55);
	}
	else if(document.getElementById(impactedformid).checked == false) {
		//ctx58.clearRect(x-20, y+65, 25, 25);
		ctx58.clearRect(x-18, y+30, 40, 40);
	}
}

//----------------------------------------------------------------------------------

//row 4
/*
function drawRemovable(x, y, ctx28, ctx48) {
	if(document.getElementById(removablepartialformid).checked == true)  {
		ctx28.beginPath();
		ctx28.arc(x,y,35,0,Math.PI*2,false);
		ctx28.closePath();
		ctx28.fillStyle="#00868B";
		ctx28.fill();
		
		ctx48.beginPath();
		ctx48.arc(x,y,14,0,Math.PI*2,false);
		ctx48.closePath();
		ctx48.fillStyle="#00868B";
		ctx48.fill();
	}
	else if(document.getElementById(removablepartialformid).checked == false) {
		ctx28.clearRect(x-40,y-40,77,77);
		ctx48.clearRect(x-15, y-15, 50, 50);
	}
}

function drawFixedbridge(x, y, ctx29, ctx49) {
	if(document.getElementById(fixedbridgeformid).checked == true)  {
		ctx29.beginPath();
		ctx29.arc(x,y,35,0,Math.PI*2,false);
		ctx29.closePath();
		ctx29.fillStyle="#FFA07A";
		ctx29.fill();
		
		ctx49.beginPath();
		ctx49.arc(x,y,14,0,Math.PI*2,false);
		ctx49.closePath();
		ctx49.fillStyle="#FFA07A";
		ctx49.fill();
	}
	else if(document.getElementById(fixedbridgeformid).checked == false) {
		ctx29.clearRect(x-40,y-40,77,77);
		ctx49.clearRect(x-15, y-15, 50, 50);
	}
}

function drawRestorable(x, y, ctx56) {
	if(document.getElementById(restorableformid).checked == true)  {
		ctx56.beginPath();
		ctx56.lineWidth="4";
		ctx56.arc(x,y,35,0,Math.PI*2,false);
		ctx56.closePath();
		ctx56.strokeStyle = "red";
		ctx56.stroke();
	}
	else if(document.getElementById(restorableformid).checked == false) {
		ctx56.clearRect(x-37,y-37,76,76);
	}
}

function drawNonrestorable(x, y, ctx57) {
	if(document.getElementById(nonrestorableformid).checked == true)  {
		ctx57.lineWidth = "8";
		ctx57.moveTo(x-35,y+35);
		ctx57.lineTo(x+35,y-35);
		ctx57.stroke();
	}
	else if(document.getElementById(nonrestorableformid).checked == false) {
		ctx57.clearRect(x-37,y-37,75,86);
	}
}
*/

		//end other drawings
		
// start draw dentures
function drawUpperDenture(ctx30, ctx58, x1, y1) {
	if(document.getElementById('upperdenture').checked == true) {			
		var width1 = 70;
		var width2 = 30;
		
		var space1 = 5;
		var space2 = 45;
		var space3 = 75;
		
		var lineX1 = 40;
		var lineY1 = 40;
		var lineX2 = 90;
		var lineY2 = 90;
		
		var verticalSpace = 120;
		var counter1 = 0;
		var counter2 = 0;
		
		//for loop starts drawing teeth!
		ctx30.beginPath();
		ctx58.beginPath();
		for (counter1=0; counter1<16; counter1++) {
			
			ctx30.arc(x1,y1,width1/2,0,Math.PI*2,false);
			ctx30.closePath();
			ctx30.fillStyle="#FF1493";
			ctx30.fill();
			
			ctx58.arc(x1,y1,14,0,Math.PI*2,false);
			ctx58.closePath();		
			ctx58.fillStyle="#FF1493";
			ctx58.fill();
			
			//ctx59.clearRect(0,125,1260,125);
	
			x1 = x1 + width1 + space1;
		
		}
		ctx30.closePath();
		ctx58.closePath();
	}
	else if(document.getElementById('upperdenture').checked == false) {
		ctx30.clearRect(0,0,1260,125);
		ctx58.clearRect(0,0,1260,125);
	}
		
}

function drawLowerDenture(ctx30, ctx58, x1, y1) {
	if(document.getElementById('lowerdenture').checked == true) {		
		//alert(x1 + " " + y1);
		var width1 = 70;
		var width2 = 30;
		
		var space1 = 5;
		var space2 = 45;
		var space3 = 75;
		
		var lineX1 = 40;
		var lineY1 = 40;
		var lineX2 = 90;
		var lineY2 = 90;
		
		var verticalSpace = 120;
		var counter1 = 0;
		var counter2 = 0;
		
		ctx30.beginPath();
		ctx58.beginPath();
		for (counter1=0; counter1<16; counter1++) {
			ctx30.lineWidth="1.5";
			
			ctx30.arc(x1,y1+verticalSpace,width1/2,0,Math.PI*2,false);
			ctx30.closePath();
			ctx30.fillStyle = "#FF1493";
			ctx30.fill();
				
			ctx58.arc(x1,y1+verticalSpace,14,0,Math.PI*2,false);
			ctx58.closePath();		
			ctx58.fillStyle="#FF1493";
			ctx58.fill();
				
				//ctx58.clearRect(0,0,1260,125);
				
			x1 = x1 + width1 + space1;
		}
		ctx30.closePath();
		ctx58.closePath();
	}
	else if(document.getElementById('lowerdenture').checked == false) {
		ctx30.clearRect(0,150,1260,125);
		ctx58.clearRect(0,150,1260,125);
	}
		
}

function drawCompletedenture(ctx31, ctx60, x1, y1) {
	if(document.getElementById('completedenture').checked == true) {
		
		var width1 = 70;
		var width2 = 31;
		
		var space1 = 5;
		var space2 = 60;
		var space3 = 75;
		
		var lineX1 = 40;
		var lineY1 = 40;
		var lineX2 = 90;
		var lineY2 = 90;
		
		var verticalSpace = 120;
		var counter1 = 0;
		var counter2 = 0;
		
		//for loop starts drawing teeth!
		for (counter1=0; counter1<16; counter1++) {
			ctx31.beginPath();
			ctx31.lineWidth="1.5";
			ctx31.arc(x1,y1+verticalSpace,width1/2,0,Math.PI*2,false);
			ctx31.closePath();
			ctx31.fillStyle = "#FF1493";
			ctx31.fill();
			
			ctx60.beginPath();
			ctx60.arc(x1,y1+verticalSpace,14,0,Math.PI*2,false);
			ctx60.closePath();		
			ctx60.fillStyle="#FF1493";
			ctx60.fill();
			
			ctx31.arc(x1,y1,width1/2,0,Math.PI*2,false);
			ctx31.closePath();
			ctx31.fill();
			
			ctx60.arc(x1,y1,14,0,Math.PI*2,false);
			ctx60.closePath();		
			ctx60.fillStyle="#FF1493";
			ctx60.fill();
	
			x1 = x1 + width1 + space1;
			
		}
	}
	else if(document.getElementById('completedenture').checked == false){
		ctx31.clearRect(0,0,1260,250);
		ctx60.clearRect(0,0,1260,250);
	}
}
		
		
// end draw dentures

//start of submit

function setid() {
	alert(toothnumber);
}

function submitcond() {
	var toothno = toothnumber;
	document.getElementById('light' + toothno).style.display='none';
	document.getElementById('fade' + toothno).style.display='none';
	setIndex(toothnumber);
	checkToothDouble(toothno);
	drawAllCondition();
}
/*
NEWLY ADDED
*/
function checkToothDouble(toothno){
	getFormid(toothno);
	//caries
	if(document.getElementById(mesialformid).checked == false &&
	   document.getElementById(buccalformid).checked == false &&
	   document.getElementById(occlusalformid).checked == false &&
	   document.getElementById(distalformid).checked == false &&
	   document.getElementById(lingualformid).checked == false){
					
		document.getElementById(cariesformid).checked = false;
	}

	//recurrent
	if(document.getElementById(remesialformid).checked == false &&
	   document.getElementById(rebuccalformid).checked == false &&
	   document.getElementById(reocclusalformid).checked == false &&
	   document.getElementById(redistalformid).checked == false &&
	   document.getElementById(relingualformid).checked == false){
	   
	   	document.getElementById(recurrentformid).checked = false;

  	}
  //restoration
	 if(document.getElementById(restomesialformid).checked == false &&
	   document.getElementById(restobuccalformid).checked == false &&
	   document.getElementById(restoocclusalformid).checked == false &&
	   document.getElementById(restodistalformid).checked == false &&
	   document.getElementById(restolingualformid).checked == false){
	   
	   	document.getElementById(restorationformid).checked = false;

	 }

}
/*
END NEW ADDED
*/
function drawAllCondition(){
	getXval(toothnumber);
	getYval(toothnumber);
	clearContext(X, Y, ctx4);
	clearContext2(X, Y, ctx35);
	//alert(index);
	drawEverything(X, Y, ctx4);
	drawOcclusals(X, Y, ctx35);
	drawExtrusion(X, Y, ctx50);
	drawIntrusion(X, Y, ctx51);
	drawMesialdrift(X, Y, ctx52);
	drawDistaldrift(X, Y, ctx53);
	drawRotation(X, Y, ctx54);
//	drawPitfissure(X, Y, ctx43);
	drawExtracted(X, Y, ctx55);
	drawMissing(X, Y, ctx58);
	drawUnerupted(X, Y, ctx58);
	drawImpacted(X, Y, ctx58);
	//drawRestorable(X, Y, ctx56);
	//drawNonrestorable(X, Y, ctx57);
	clearContext3(X, Y, ctx23, ctx48);
	//drawCrowns(X, Y, ctx23, ctx48);
	
	drawPitFissure(toothnumber);	
	drawPorcelainFused(toothnumber);
	drawRootCanal(toothnumber);
	drawFixedBridge(toothnumber);
	drawRPD(toothnumber);
	drawMetal(toothnumber);
	drawPorcelain(toothnumber);
	drawAcrylic(toothnumber);
	drawPostCore(toothnumber);
	
	clearContext(X,Y,ctx65);
	clearContext(X,Y,ctx66);
	drawOthers(65,65,ctx63,ctx64,ctx65,ctx66);
	
	drawDentures(65, 65); 
	
}


//end of submit

//start of redraw


function redraw(r, s) {

	for(a = 0; a < 4; a++) {
		for(b = 18; b > 10; b--) {
			c = b + (a * 10);
			//alert(c);
			getFormid(c);
			getXval(c);
			getYval(c);
			initializevars();
			for(var i = 0; i < conditions.length; i++) { 
				for(var j = 0; j < positions.length; j++) {				
					drawCondition(conditions[i], positions[j], c);
				}
				drawCondition3(conditions2[i], c);
			}
			
							
			//alert(thisarray);
			drawEverything(X, Y, ctx4);
			drawOcclusals(X, Y, ctx35);

			drawExtrusion(X, Y, ctx50);
			drawIntrusion(X, Y, ctx51);
			drawMesialdrift(X, Y, ctx52);
			drawDistaldrift(X, Y, ctx53);
			drawRotation(X, Y, ctx54);
	//		drawPitfissure(X, Y, ctx48);
			drawExtracted(X, Y, ctx55);
			drawMissing(X, Y, ctx58);
			drawUnerupted(X, Y, ctx58);
			drawImpacted(X, Y, ctx58);
		//	drawRestorable(X, Y, ctx56);
		//	drawNonrestorable(X, Y, ctx57);
		//	drawCrowns(X, Y, ctx23, ctx43);
//			alert("boom");
	
		}
	}
	drawDentures(r, s); 
}

function drawDentures(x, y) {

	drawCompletedenture(ctx1, ctx30, x, y);
	drawUpperDenture(ctx2, ctx31, x, y);
	drawLowerDenture(ctx3, ctx32, x, y);

}

//end of redraw
function drawDivision(x) {
	ctx61.strokeStyle = "#D9D9D9";	
	ctx61.moveTo(0, 125);	
	ctx61.lineTo(1261, 125);
	ctx61.stroke();	
	ctx61.moveTo(x, 0);
	ctx61.lineTo(x, 250);	
	ctx61.stroke();
}
		
function drawCrowns(x, y, ctx1, ctx2) {	
	additional = 2/thisarray2[index].length;
	for(var i = 0; i < thisarray2[index].length; i++) {
		ctx1.beginPath();
		ctx1.arc(x, y, 35, (2-(thisarray2[index].length-i)*additional)*Math.PI, Math.PI*2, false);
		ctx1.lineTo(x,y);
		ctx1.closePath();
		ctx1.fillStyle=arrayFillColor2[index][i];
		ctx1.fill();
		ctx2.beginPath();
		ctx2.arc(x, y, 14 ,(2-(thisarray2[index].length-i)*additional)*Math.PI, Math.PI*2, false);
		ctx2.lineTo(x,y);
		ctx2.closePath();
		ctx2.fillStyle=arrayFillColor2[index][i];
		ctx2.fill();
	}
}

var X;
var Y;

function getXval(toothnumber) {	
	var space = 10;	
	if((toothnumber == 18) || (toothnumber == 48)){
		var toothvalue = 1;
		x = toothvalue * 65;
	}
	else {
		if((toothnumber == 17) || (toothnumber == 47)) {
			toothvalue = 2;
		}
		if((toothnumber == 16) || (toothnumber == 46)) {
			toothvalue = 3;
		}
		if((toothnumber == 15) || (toothnumber == 45)) {
			toothvalue = 4;
		}
		if((toothnumber == 14) || (toothnumber == 44)) {
			toothvalue = 5;
		}
		if((toothnumber == 13) || (toothnumber == 43)) {
			toothvalue = 6;
		}
		if((toothnumber == 12) || (toothnumber == 42)) {
			toothvalue = 7;
		}
		if((toothnumber == 11) || (toothnumber == 41)) {
			toothvalue = 8;
		}
		if((toothnumber == 21) || (toothnumber == 31)) {
			toothvalue = 9;
		}
		if((toothnumber == 22) || (toothnumber == 32)) {
			toothvalue = 10;
		}
		if((toothnumber == 23) || (toothnumber == 33)) {
			toothvalue = 11;
		}
		if((toothnumber == 24) || (toothnumber == 34)) {
			toothvalue = 12;
		}
		if((toothnumber == 25) || (toothnumber == 35)) {
			toothvalue = 13;
		}
		if((toothnumber == 26) || (toothnumber == 36)) {
			toothvalue = 14;
		}
		if((toothnumber == 27) || (toothnumber == 37)) {
			toothvalue = 15;
		}
		if((toothnumber == 28) || (toothnumber == 38)) {
			toothvalue = 16;
		}
		x = toothvalue * 65 + space * (toothvalue-1);
	}
	X = x;
}

function getYval(toothnumber) {	
	if((toothnumber >= 11)&&(toothnumber <= 28)) {
		y = 65;
	}
	else if ((toothnumber >= 31)&&(toothnumber <= 48)) {
		y = 185;
	}
	Y = y;
}
		
function getFormid(toothnumber) {
	restoreTypeSelectid = "restoreTypeSelect" + toothnumber;	
	cariesSelectid = "cariesSelect" + toothnumber; 
	recurrentSelectid = "recurrentSelect" + toothnumber;
	cariesSelectSurfaceid = "cariesSelectSurface" + toothnumber; 
	recurrentSelectSurfaceid = "recurrentSelectSurface" + toothnumber;
	distalformid = "distal" + toothnumber;	
	buccalformid = "buccal" + toothnumber;	
	mesialformid = "mesial" + toothnumber;	
	lingualformid = "lingual" + toothnumber;
	occlusalformid = "occlusal" + toothnumber;
	redistalformid = "redistal" + toothnumber;
	rebuccalformid = "rebuccal" + toothnumber;
	remesialformid = "remesial" + toothnumber;
	relingualformid = "relingual" + toothnumber;
	reocclusalformid = "reocclusal" + toothnumber;
	restodistalformid = "restodistal" + toothnumber;
	restobuccalformid = "restobuccal" + toothnumber;
	restomesialformid = "restomesial" + toothnumber;
	restolingualformid = "restolingual" + toothnumber;
	restoocclusalformid = "restoocclusal" + toothnumber;	
	amaldistalformid = "amaldistal" + toothnumber;	
	amalbuccalformid = "amalbuccal" + toothnumber;	
	amalmesialformid = "amalmesial" + toothnumber;	
	amallingualformid = "amallingual" + toothnumber;
	amalocclusalformid = "amalocclusal" + toothnumber;	
	compodistalformid = "compodistal" + toothnumber;
	compobuccalformid = "compobuccal" + toothnumber;
	compomesialformid = "compomesial" + toothnumber;
	compolingualformid = "compolingual" + toothnumber;
	compoocclusalformid = "compoocclusal" + toothnumber;	
	glassdistalformid = "glassdistal" + toothnumber;
	glassbuccalformid = "glassbuccal" + toothnumber;
	glassmesialformid = "glassmesial" + toothnumber;
	glasslingualformid = "glasslingual" + toothnumber;
	glassocclusalformid = "glassocclusal" + toothnumber;	
	fillingdistalformid = "fillingdistal" + toothnumber;
	fillingbuccalformid = "fillingbuccal" + toothnumber;
	fillingmesialformid = "fillingmesial" + toothnumber;
	fillinglingualformid = "fillinglingual" + toothnumber;
	fillingocclusalformid = "fillingocclusal" + toothnumber;	
	postcorecrownformid = "postcore" + toothnumber;
	porcelainfusedformid = "porcelainfused" + toothnumber;
	acryliccrownformid = "acrylic" + toothnumber;
	metalcrownformid = "metal" + toothnumber;
	porcelaincrownformid = "porcelain" + toothnumber;	
	rootcanalformid = "rootcanal" + toothnumber;
	pitfissureformid = "pitfissure" + toothnumber;
	removablepartialformid = "removablepartial" + toothnumber;
	fixedbridgeformid = "fixedbridge" + toothnumber;	
	extrusionformid = "extrusion" + toothnumber;
	intrusionformid = "intrusion" + toothnumber;	
	extractedformid = "extracted" + toothnumber;	
	mesialdriftformid = "mesialdrift" + toothnumber;
	distaldriftformid = "distaldrift" + toothnumber;
	rotationformid = "rotation" + toothnumber;	
	restorableformid = "restorable" + toothnumber;
	nonrestorableformid = "nonrestorable" + toothnumber;	
	cariesformid = "caries" + toothnumber;
	recurrentformid = "recurrentcaries" + toothnumber;
	amalgamformid = "amalgam" + toothnumber;
	compositeformid = "composite" + toothnumber;
	glassformid = "glassionomer" + toothnumber;
	fillingformid = "tempfilling" + toothnumber;	
	cariessurfaceid = "caries_surfaces" + toothnumber;
	recurrentsurfaceid = "recurrent_surfaces" + toothnumber;
	amalgamsurfaceid = "amalgam_surfaces" + toothnumber;
	compositesurfaceid = "composite_surfaces" + toothnumber;
	glasssurfaceid = "glass_surfaces" + toothnumber;
	fillingsurfaceid = "filling_surfaces" + toothnumber;	
	missingformid = "missing" + toothnumber;
	uneruptedformid = "unerupted" + toothnumber;
	impactedformid = "impacted" + toothnumber; 
	cariesSelectDistalid="cariesSelectDistal"+toothnumber;
	dentalstatussurfaceid="dentalstatussurface"+toothnumber;
	dentalstatusformid="dentalStatus"+toothnumber;
	alltoothsurfaceid="all_tooth_surfaces"+toothnumber; 
	alltoothformid="alltooth"+toothnumber; 
	restoreSelectSurfaceid="restoreSelectSurface"+toothnumber; 
	restorationformid= "restoration"+toothnumber; 
	restorationsurfaceid = "restoration_surfaces" + toothnumber; 
} 
		
function showCaries() {	
	if(document.getElementById(cariesformid).checked == true) {
		document.getElementById(cariessurfaceid).style.display = "block";
	}
	else if(document.getElementById(cariesformid).checked == false) {
		document.getElementById(cariessurfaceid).style.display = "none";
		document.getElementById(distalformid).checked = false;
		document.getElementById(buccalformid).checked = false;
		document.getElementById(mesialformid).checked = false;
		document.getElementById(lingualformid).checked = false;
		document.getElementById(occlusalformid).checked = false;
		deleteThis('caries');
	}
}

function showCaries2() {
	if(document.getElementById(cariesformid).checked == true) {
		document.getElementById(cariessurfaceid).style.display = "block";
	}
	else if(document.getElementById(cariesformid).checked == false) {
		document.getElementById(cariessurfaceid).style.display = "none";
		document.getElementById(distalformid).checked = false;
		document.getElementById(buccalformid).checked = false;
		document.getElementById(mesialformid).checked = false;
		document.getElementById(lingualformid).checked = false;
		document.getElementById(occlusalformid).checked = false;
		deleteThis('caries');
	}
}
		
function showRecurrent() {
	if(document.getElementById(recurrentformid).checked == true) {
		document.getElementById(recurrentsurfaceid).style.display = "block";
	}
	else if(document.getElementById(recurrentformid).checked == false) {
		document.getElementById(recurrentsurfaceid).style.display = "none";
		document.getElementById(redistalformid).checked = false;
		document.getElementById(rebuccalformid).checked = false;
		document.getElementById(remesialformid).checked = false;
		document.getElementById(relingualformid).checked = false;
		document.getElementById(reocclusalformid).checked = false;
		deleteThis('recurrent');
	}
}
		
function showAmalgam() {
	if(document.getElementById(amalgamformid).checked == true) {
		document.getElementById(amalgamsurfaceid).style.display = "block";
	}
	else if(document.getElementById(amalgamformid).checked == false) {
		document.getElementById(amalgamsurfaceid).style.display = "none";
		document.getElementById(amaldistalformid).checked = false;
		document.getElementById(amalbuccalformid).checked = false;
		document.getElementById(amalmesialformid).checked = false;
		document.getElementById(amallingualformid).checked = false;
		document.getElementById(amalocclusalformid).checked = false;
		deleteThis('amalgam');
	}
}
		
function showComposite() {
	if(document.getElementById(compositeformid).checked == true) {
		document.getElementById(compositesurfaceid).style.display = "block";
	}
	else if(document.getElementById(compositeformid).checked == false) {
		document.getElementById(compositesurfaceid).style.display = "none";
		document.getElementById(compodistalformid).checked = false;
		document.getElementById(compobuccalformid).checked = false;
		document.getElementById(compomesialformid).checked = false;
		document.getElementById(compolingualformid).checked = false;
		document.getElementById(compoocclusalformid).checked = false;
		deleteThis('composite');
	}
}
		
function showGlassionomer() {
	if(document.getElementById(glassformid).checked == true) {
		document.getElementById(glasssurfaceid).style.display = "block";
	}
	else if(document.getElementById(glassformid).checked == false) {
		document.getElementById(glasssurfaceid).style.display = "none";	
		document.getElementById(glassdistalformid).checked = false;
		document.getElementById(glassbuccalformid).checked = false;
		document.getElementById(glassmesialformid).checked = false;
		document.getElementById(glasslingualformid).checked = false;
		document.getElementById(glassocclusalformid).checked = false;
		deleteThis('glass');
	}
}
		
function showTempfilling() {
	if(document.getElementById(fillingformid).checked == true) {
		document.getElementById(fillingsurfaceid).style.display = "block";
	}
	else if(document.getElementById(fillingformid).checked == false) {
		document.getElementById(fillingsurfaceid).style.display = "none";
		document.getElementById(fillingdistalformid).checked = false;
		document.getElementById(fillingbuccalformid).checked = false;
		document.getElementById(fillingmesialformid).checked = false;
		document.getElementById(fillinglingualformid).checked = false;
		document.getElementById(fillingocclusalformid).checked = false;
		deleteThis('filling');
	}
}

var array11 = new Array();
var array12 = new Array();
var array13 = new Array();
var array14 = new Array();
var array15 = new Array();
var array21 = new Array();
var array22 = new Array();
var array23 = new Array();
var array24 = new Array();
var array25 = new Array();
var array31 = new Array();
var array32 = new Array();
var array33 = new Array();
var array34 = new Array();
var array35 = new Array();
var array41 = new Array();
var array42 = new Array();
var array43 = new Array();
var array44 = new Array();
var array45 = new Array();
var array51 = new Array();
var array52 = new Array();
var array53 = new Array();
var array54 = new Array();
var array55 = new Array();
var array61 = new Array();
var array62 = new Array();
var array63 = new Array();
var array64 = new Array();
var array65 = new Array();
var array71 = new Array();
var array72 = new Array();
var array73 = new Array();
var array74 = new Array();
var array75 = new Array();
var array81 = new Array();
var array82 = new Array();
var array83 = new Array();
var array84 = new Array();
var array85 = new Array();
var arrayPosition = new Array();
var arrayA = new Array();
var arrayB = new Array();
var conditions = new Array();
var conditions2 = new Array();
var positions = new Array();
var colors = new Array();
var colors2 = new Array();
var arrayfi1 = new Array();
var arrayfi2 = new Array();
var arrayfi3 = new Array();
var arrayfi4 = new Array();
var arrayfi5 = new Array();
var arrayFillColor = new Array();
var arrayFillColor2 = [[], [], [], [], [], [], [], [], [], [], [], [], [], [], [], [], [], [], [], [], [], [], [], [], [], [], [], [], [], [], [], []];
var arrayFormIds = new Array();
var thisarray18 = new Array();
var thisarray17 = new Array();
var thisarray = [[array11, array12, array13, array14, array15], [array21, array22, array23, array24, array25], [array31, array32, array33, array34, array35], [array41, array42, array43, array44, array45],[array51, array52, array53, array54, array55], [array61, array62, array63, array64, array65], [array71, array72, array73, array74, array75], [array81, array82, array83, array84, array85],
	[[], [], [], [], []], [[], [], [], [], []], [[], [], [], [], []], [[], [], [], [], []],[[], [], [], [], []], [[], [], [], [], []], [[], [], [], [], []], [[], [], [], [], []],
	[[], [], [], [], []], [[], [], [], [], []], [[], [], [], [], []], [[], [], [], [], []],[[], [], [], [], []], [[], [], [], [], []], [[], [], [], [], []], [[], [], [], [], []],
	[[], [], [], [], []], [[], [], [], [], []], [[], [], [], [], []], [[], [], [], [], []],[[], [], [], [], []], [[], [], [], [], []], [[], [], [], [], []], [[], [], [], [], []]];
	//[array11, array12, array13, array14, array15], [array21, array22, array23, array24, array25], [array31, array32, array33, array34, array35], [array41, array42, array43, array44, array45],[array11, array12, array13, array14, array15], [array21, array22, array23, array24, array25], [array31, array32, array33, array34, array35], [array41, array42, array43, array44, array45],
	//[array11, array12, array13, array14, array15], [array21, array22, array23, array24, array25], [array31, array32, array33, array34, array35], [array41, array42, array43, array44, array45],[array11, array12, array13, array14, array15], [array21, array22, array23, array24, array25], [array31, array32, array33, array34, array35], [array41, array42, array43, array44, array45]];

//var thisarray = (function(thisarray){ while(thisarray.push([]) < 9); return thisarray})([]);
var thisarray2 = [[], [], [], [], [], [], [], [], [], [], [], [], [], [], [], [], [], [], [], [], [], [], [], [], [], [], [], [], [], [], [], []];
var otherConds = new Array();
var otherFormIds = new Array();
var allquads = new Array();
var index = 0;
var listofTNs = new Array();
		
//NEWLY ADDED
function showAllTooth(){
//alert("boom"):
	if(document.getElementById(alltoothformid).checked == true) {	
		document.getElementById(alltoothsurfaceid).style.display = "block";
	}
	else if(document.getElementById(alltoothformid).checked == false) {
		document.getElementById(alltoothsurfaceid).style.display = "none";	
	}
}
				
function hideAllTooth(){
	if(document.getElementById(dentalstatusformid).checked == true) {	
		document.getElementById(dentalstatussurfaceid).style.display = "block";
		document.getElementById(missingformid).disabled = true;				
		document.getElementById(extractedformid).disabled = true;				
		document.getElementById(uneruptedformid).disabled = true;
		document.getElementById(impactedformid).disabled = true;	
	}
	else if(document.getElementById(alltoothformid).checked == false) {					
		document.getElementById(dentalstatussurfaceid).style.display = "none";
		document.getElementById(missingformid).disabled = false;				
		document.getElementById(extractedformid).disabled = false;				
		document.getElementById(uneruptedformid).disabled = false;
		document.getElementById(impactedformid).disabled = false;	
	}
}
				
function hideOtherExtracted(){
	if(document.getElementById(extractedformid).checked == true) {	
		document.getElementById(missingformid).disabled = true;				
		document.getElementById(uneruptedformid).disabled = true;
		document.getElementById(impactedformid).disabled = true;
		document.getElementById(rotationformid).disabled = true;		
		document.getElementById(extrusionformid).disabled = true;
		document.getElementById(intrusionformid).disabled = true;
		document.getElementById(mesialdriftformid).disabled = true;				
		document.getElementById(distaldriftformid).disabled = true;
		document.getElementById(pitfissureformid).disabled = true;				
		document.getElementById(porcelainfusedformid).disabled = true;
		document.getElementById(rootcanalformid).disabled = true;
		document.getElementById(fixedbridgeformid).disabled = true;		
		document.getElementById(removablepartialformid).disabled = true;
		document.getElementById(metalcrownformid).disabled = true;
		document.getElementById(porcelaincrownformid).disabled = true;				
		document.getElementById(acryliccrownformid).disabled = true;
		document.getElementById(postcorecrownformid).disabled = true;	
	}
	else if(document.getElementById(extractedformid).checked == false) {
		document.getElementById(missingformid).disabled = false;				
		document.getElementById(uneruptedformid).disabled = false;
		document.getElementById(impactedformid).disabled = false;
		document.getElementById(rotationformid).disabled = false;		
		document.getElementById(extrusionformid).disabled = false;
		document.getElementById(intrusionformid).disabled = false;
		document.getElementById(mesialdriftformid).disabled = false;				
		document.getElementById(distaldriftformid).disabled = false;	
		document.getElementById(pitfissureformid).disabled = false;				
		document.getElementById(porcelainfusedformid).disabled = false;
		document.getElementById(rootcanalformid).disabled = false;
		document.getElementById(fixedbridgeformid).disabled = false;		
		document.getElementById(removablepartialformid).disabled = false;
		document.getElementById(metalcrownformid).disabled = false;
		document.getElementById(porcelaincrownformid).disabled = false;				
		document.getElementById(acryliccrownformid).disabled = false;
		document.getElementById(postcorecrownformid).disabled = false;
	}
}
				
function hideOtherMissing(){
	if(document.getElementById(missingformid).checked == true) {	
		document.getElementById(extractedformid).disabled = true;				
		document.getElementById(uneruptedformid).disabled = true;
		document.getElementById(impactedformid).disabled = true;
		document.getElementById(rotationformid).disabled = true;		
		document.getElementById(extrusionformid).disabled = true;
		document.getElementById(intrusionformid).disabled = true;
		document.getElementById(mesialdriftformid).disabled = true;				
		document.getElementById(distaldriftformid).disabled = true;
		document.getElementById(pitfissureformid).disabled = true;				
		document.getElementById(porcelainfusedformid).disabled = true;
		document.getElementById(rootcanalformid).disabled = true;
		document.getElementById(fixedbridgeformid).disabled = true;		
		document.getElementById(removablepartialformid).disabled = true;
		document.getElementById(metalcrownformid).disabled = true;
		document.getElementById(porcelaincrownformid).disabled = true;				
		document.getElementById(acryliccrownformid).disabled = true;
		document.getElementById(postcorecrownformid).disabled = true;
	}
	else if(document.getElementById(missingformid).checked == false) {
		document.getElementById(extractedformid).disabled = false;				
		document.getElementById(uneruptedformid).disabled = false;
		document.getElementById(impactedformid).disabled = false;
		document.getElementById(rotationformid).disabled = false;		
		document.getElementById(extrusionformid).disabled = false;
		document.getElementById(intrusionformid).disabled = false;
		document.getElementById(mesialdriftformid).disabled = false;				
		document.getElementById(distaldriftformid).disabled = false;							
		document.getElementById(pitfissureformid).disabled = false;		
		document.getElementById(porcelainfusedformid).disabled = false;
		document.getElementById(rootcanalformid).disabled = false;
		document.getElementById(fixedbridgeformid).disabled = false;		
		document.getElementById(removablepartialformid).disabled = false;
		document.getElementById(metalcrownformid).disabled = false;
		document.getElementById(porcelaincrownformid).disabled = false;				
		document.getElementById(acryliccrownformid).disabled = false;
		document.getElementById(postcorecrownformid).disabled = false;
	}
}
				
function hideOtherUnerupted(){
	if(document.getElementById(uneruptedformid).checked == true) {	
		document.getElementById(missingformid).disabled = true;				
		document.getElementById(extractedformid).disabled = true;
		document.getElementById(impactedformid).disabled = true;
		document.getElementById(rotationformid).disabled = true;		
		document.getElementById(extrusionformid).disabled = true;
		document.getElementById(intrusionformid).disabled = true;
		document.getElementById(mesialdriftformid).disabled = true;				
		document.getElementById(distaldriftformid).disabled = true;
		document.getElementById(pitfissureformid).disabled = true;				
		document.getElementById(porcelainfusedformid).disabled = true;
		document.getElementById(rootcanalformid).disabled = true;
		document.getElementById(fixedbridgeformid).disabled = true;		
		document.getElementById(removablepartialformid).disabled = true;
		document.getElementById(metalcrownformid).disabled = true;
		document.getElementById(porcelaincrownformid).disabled = true;				
		document.getElementById(acryliccrownformid).disabled = true;
		document.getElementById(postcorecrownformid).disabled = true;	
	}
	else if(document.getElementById(uneruptedformid).checked == false) {
		document.getElementById(missingformid).disabled = false;				
		document.getElementById(extractedformid).disabled = false;
		document.getElementById(impactedformid).disabled = false;
		document.getElementById(rotationformid).disabled = false;;		
		document.getElementById(extrusionformid).disabled = false;
		document.getElementById(intrusionformid).disabled = false;
		document.getElementById(mesialdriftformid).disabled = false;				
		document.getElementById(distaldriftformid).disabled = false;	
		document.getElementById(pitfissureformid).disabled = false;				
		document.getElementById(porcelainfusedformid).disabled = false;
		document.getElementById(rootcanalformid).disabled = false;
		document.getElementById(fixedbridgeformid).disabled = false;		
		document.getElementById(removablepartialformid).disabled = false;
		document.getElementById(metalcrownformid).disabled = false;
		document.getElementById(porcelaincrownformid).disabled = false;				
		document.getElementById(acryliccrownformid).disabled = false;
		document.getElementById(postcorecrownformid).disabled = false;
	}
}
				
function hideOtherImpacted(){
	if(document.getElementById(impactedformid).checked == true) {	
		document.getElementById(missingformid).disabled = true;				
		document.getElementById(uneruptedformid).disabled = true;
		document.getElementById(extractedformid).disabled = true;
		document.getElementById(rotationformid).disabled = true;		
		document.getElementById(extrusionformid).disabled = true;
		document.getElementById(intrusionformid).disabled = true;
		document.getElementById(mesialdriftformid).disabled = true;				
		document.getElementById(distaldriftformid).disabled = true;
		document.getElementById(pitfissureformid).disabled = true;				
		document.getElementById(porcelainfusedformid).disabled = true;
		document.getElementById(rootcanalformid).disabled = true;
		document.getElementById(fixedbridgeformid).disabled = true;		
		document.getElementById(removablepartialformid).disabled = true;
		document.getElementById(metalcrownformid).disabled = true;
		document.getElementById(porcelaincrownformid).disabled = true;				
		document.getElementById(acryliccrownformid).disabled = true;
		document.getElementById(postcorecrownformid).disabled = true;	
	}
	else if(document.getElementById(impactedformid).checked == false) {
		document.getElementById(missingformid).disabled = false;				
		document.getElementById(uneruptedformid).disabled = false;
		document.getElementById(extractedformid).disabled = false;
		document.getElementById(rotationformid).disabled = false;		
		document.getElementById(extrusionformid).disabled = false;
		document.getElementById(intrusionformid).disabled = false;
		document.getElementById(mesialdriftformid).disabled = false;				
		document.getElementById(distaldriftformid).disabled = false;	
		document.getElementById(pitfissureformid).disabled = false;				
		document.getElementById(porcelainfusedformid).disabled = false;
		document.getElementById(rootcanalformid).disabled = false;
		document.getElementById(fixedbridgeformid).disabled = false;		
		document.getElementById(removablepartialformid).disabled = false;
		document.getElementById(metalcrownformid).disabled = false;
		document.getElementById(porcelaincrownformid).disabled = false;				
		document.getElementById(acryliccrownformid).disabled = false;
		document.getElementById(postcorecrownformid).disabled = false;
	}
}
				
function hideOtherExtrusion(){
	if(document.getElementById(extrusionformid).checked == true) {	
		document.getElementById(intrusionformid).disabled = true;
		document.getElementById(mesialdriftformid).disabled = true;				
		document.getElementById(distaldriftformid).disabled = true;	
		document.getElementById(rotationformid).disabled = true;		
		document.getElementById(missingformid).disabled = true;				
		document.getElementById(extractedformid).disabled = true;				
		document.getElementById(uneruptedformid).disabled = true;
		document.getElementById(impactedformid).disabled = true;						
	}
	else if(document.getElementById(extrusionformid).checked == false) {
		document.getElementById(intrusionformid).disabled = false;				
		document.getElementById(mesialdriftformid).disabled = false;				
		document.getElementById(distaldriftformid).disabled = false;
		document.getElementById(rotationformid).disabled = false;		
		document.getElementById(missingformid).disabled = false;				
		document.getElementById(extractedformid).disabled = false;				
		document.getElementById(uneruptedformid).disabled = false;
		document.getElementById(impactedformid).disabled = false;					
	}				
}
				
function hideOtherIntrusion(){
	if(document.getElementById(intrusionformid).checked == true) {	
		document.getElementById(extrusionformid).disabled = true;	
		document.getElementById(mesialdriftformid).disabled = true;				
		document.getElementById(distaldriftformid).disabled = true;	
		document.getElementById(rotationformid).disabled = true;		
		document.getElementById(missingformid).disabled = true;				
		document.getElementById(extractedformid).disabled = true;				
		document.getElementById(uneruptedformid).disabled = true;
		document.getElementById(impactedformid).disabled = true;						
	}
	else if(document.getElementById(intrusionformid).checked == false) {
		document.getElementById(extrusionformid).disabled = false;				
		document.getElementById(mesialdriftformid).disabled = false;				
		document.getElementById(distaldriftformid).disabled = false;
		document.getElementById(rotationformid).disabled = false;		
		document.getElementById(missingformid).disabled = false;				
		document.getElementById(extractedformid).disabled = false;				
		document.getElementById(uneruptedformid).disabled = false;
		document.getElementById(impactedformid).disabled = false;
	}				
}
				
function hideOtherMesialDrift(){
	if(document.getElementById(mesialdriftformid).checked == true) {	
		document.getElementById(distaldriftformid).disabled = true;
		document.getElementById(extrusionformid).disabled = true;	
		document.getElementById(intrusionformid).disabled = true;
		document.getElementById(rotationformid).disabled = true;		
		document.getElementById(missingformid).disabled = true;				
		document.getElementById(extractedformid).disabled = true;				
		document.getElementById(uneruptedformid).disabled = true;
		document.getElementById(impactedformid).disabled = true;
	}
	else if(document.getElementById(mesialdriftformid).checked == false) {
		document.getElementById(distaldriftformid).disabled = false;				
		document.getElementById(extrusionformid).disabled = false;	
		document.getElementById(intrusionformid).disabled = false;	
		document.getElementById(rotationformid).disabled = false;		
		document.getElementById(missingformid).disabled = false;				
		document.getElementById(extractedformid).disabled = false;				
		document.getElementById(uneruptedformid).disabled = false;
		document.getElementById(impactedformid).disabled = false;
	}				
}
				
						function hideOtherDistalDrift(){
				if(document.getElementById(distaldriftformid).checked == true) {	
						document.getElementById(mesialdriftformid).disabled = true;		
						document.getElementById(extrusionformid).disabled = true;	
						document.getElementById(intrusionformid).disabled = true;	
						document.getElementById(rotationformid).disabled = true;		

						document.getElementById(missingformid).disabled = true;				
						document.getElementById(extractedformid).disabled = true;				
						document.getElementById(uneruptedformid).disabled = true;
						document.getElementById(impactedformid).disabled = true;						
					}
					else if(document.getElementById(distaldriftformid).checked == false) {
					document.getElementById(mesialdriftformid).disabled = false;				
					document.getElementById(extrusionformid).disabled = false;	
					document.getElementById(intrusionformid).disabled = false;
					document.getElementById(rotationformid).disabled = false;		
				
					document.getElementById(missingformid).disabled = false;				
					document.getElementById(extractedformid).disabled = false;				
					document.getElementById(uneruptedformid).disabled = false;
					document.getElementById(impactedformid).disabled = false;
					}				
				}
				
							function hideOtherRotation(){
				if(document.getElementById(rotationformid).checked == true) {	
						document.getElementById(mesialdriftformid).disabled = true;		
						document.getElementById(extrusionformid).disabled = true;	
						document.getElementById(intrusionformid).disabled = true;	
						document.getElementById(distaldriftformid).disabled = true;		

						document.getElementById(missingformid).disabled = true;				
						document.getElementById(extractedformid).disabled = true;				
						document.getElementById(uneruptedformid).disabled = true;
						document.getElementById(impactedformid).disabled = true;						
					}
					else if(document.getElementById(rotationformid).checked == false) {
					document.getElementById(mesialdriftformid).disabled = false;				
					document.getElementById(extrusionformid).disabled = false;	
					document.getElementById(intrusionformid).disabled = false;
					document.getElementById(distaldriftformid).disabled = false;		

					document.getElementById(missingformid).disabled = false;				
					document.getElementById(extractedformid).disabled = false;				
					document.getElementById(uneruptedformid).disabled = false;
					document.getElementById(impactedformid).disabled = false;
					}				
				}
				
				function hideOtherStandard(name) {	
					
					
					if(document.getElementById(rootcanalformid).checked == true) {
					document.getElementById(missingformid).disabled = true;				
					document.getElementById(extractedformid).disabled = true;				
					document.getElementById(uneruptedformid).disabled = true;
					document.getElementById(impactedformid).disabled = true;
					}
					else if(document.getElementById(porcelainfusedformid).checked == true) {
					document.getElementById(missingformid).disabled = true;				
					document.getElementById(extractedformid).disabled = true;				
					document.getElementById(uneruptedformid).disabled = true;
					document.getElementById(impactedformid).disabled = true;
					
					
	
					}
					else if(document.getElementById(acryliccrownformid).checked == true) {
					document.getElementById(missingformid).disabled = true;				
					document.getElementById(extractedformid).disabled = true;				
					document.getElementById(uneruptedformid).disabled = true;
					document.getElementById(impactedformid).disabled = true;
					
					
					document.getElementById(porcelaincrownformid ).disabled = true;				
					document.getElementById(metalcrownformid ).disabled = true;
					}
						else if(document.getElementById(metalcrownformid ).checked == true) {
					document.getElementById(missingformid).disabled = true;				
					document.getElementById(extractedformid).disabled = true;				
					document.getElementById(uneruptedformid).disabled = true;
					document.getElementById(impactedformid).disabled = true;
					
					document.getElementById(porcelaincrownformid ).disabled = true;
					document.getElementById(acryliccrownformid ).disabled = true;
					}
						else if(document.getElementById(porcelaincrownformid ).checked == true) {
					document.getElementById(missingformid).disabled = true;				
					document.getElementById(extractedformid).disabled = true;				
					document.getElementById(uneruptedformid).disabled = true;
					document.getElementById(impactedformid).disabled = true;
					
					document.getElementById(acryliccrownformid ).disabled = true;
					document.getElementById(metalcrownformid ).disabled = true;
					}
						else if(document.getElementById(pitfissureformid ).checked == true) {
					document.getElementById(missingformid).disabled = true;				
					document.getElementById(extractedformid).disabled = true;				
					document.getElementById(uneruptedformid).disabled = true;
					document.getElementById(impactedformid).disabled = true;
					}
						else if(document.getElementById(removablepartialformid  ).checked == true) {
					document.getElementById(missingformid).disabled = true;				
					document.getElementById(extractedformid).disabled = true;				
					document.getElementById(uneruptedformid).disabled = true;
					document.getElementById(impactedformid).disabled = true;
					}
						else if(document.getElementById(fixedbridgeformid  ).checked == true) {
					document.getElementById(missingformid).disabled = true;				
					document.getElementById(extractedformid).disabled = true;				
					document.getElementById(uneruptedformid).disabled = true;
					document.getElementById(impactedformid).disabled = true;
					}
						else if(document.getElementById(postcorecrownformid ).checked == true) {
					document.getElementById(missingformid).disabled = true;				
					document.getElementById(extractedformid).disabled = true;				
					document.getElementById(uneruptedformid).disabled = true;
					document.getElementById(impactedformid).disabled = true;
					

					}
					else{
					
					document.getElementById(missingformid).disabled = false;				
					document.getElementById(extractedformid).disabled = false;				
					document.getElementById(uneruptedformid).disabled = false;
					document.getElementById(impactedformid).disabled = false;
					}

					if(name=='metal'){
					if(document.getElementById(metalcrownformid).checked == false){
					document.getElementById(porcelaincrownformid ).disabled = false;				
					document.getElementById(acryliccrownformid ).disabled = false;
					
					}
					}else if(name=='porcelain'){
					if(document.getElementById(porcelaincrownformid).checked == false){
					document.getElementById(metalcrownformid ).disabled = false;				
					document.getElementById(acryliccrownformid ).disabled = false;
					
					}
					}else if(name=='acrylic'){
					if(document.getElementById(acryliccrownformid).checked == false){
					document.getElementById(porcelaincrownformid ).disabled = false;				
					document.getElementById(metalcrownformid ).disabled = false;
					
					}
					}
				}
				
				
				function hideOtherCaries() {	
				if(document.getElementById(cariesformid).checked == true) {	
				    document.getElementById(cariessurfaceid+'mesial').style.display = "inline";
				    document.getElementById(cariessurfaceid+'buccal').style.display = "inline";
				    document.getElementById(cariessurfaceid+'occlusal').style.display = "inline";
				    document.getElementById(cariessurfaceid+'distal').style.display = "inline";
				    document.getElementById(cariessurfaceid+'lingual').style.display = "inline";

					
					}
				else if(document.getElementById(cariesformid).checked == false) {
				    document.getElementById(cariessurfaceid+'mesial').style.display = "none";
				    document.getElementById(cariessurfaceid+'buccal').style.display = "none";
				    document.getElementById(cariessurfaceid+'occlusal').style.display = "none";
				    document.getElementById(cariessurfaceid+'distal').style.display = "none";
				    document.getElementById(cariessurfaceid+'lingual').style.display = "none";
				    
				    document.getElementById('mesial'+cariesSelectSurfaceid).style.display = "none";
				    document.getElementById('buccal'+cariesSelectSurfaceid).style.display = "none";
				    document.getElementById('occlusal'+cariesSelectSurfaceid).style.display = "none";
				    document.getElementById('distal'+cariesSelectSurfaceid).style.display = "none";
				    document.getElementById('lingual'+cariesSelectSurfaceid).style.display = "none";
						
					
					document.getElementById(mesialformid).checked = false;
					document.getElementById(buccalformid).checked = false;
					document.getElementById(occlusalformid).checked = false;
					document.getElementById(distalformid).checked = false;
					document.getElementById(lingualformid).checked = false;

					document.getElementById(remesialformid).disabled = false;
					document.getElementById(rebuccalformid).disabled = false;
					document.getElementById(reocclusalformid).disabled = false;
					document.getElementById(redistalformid).disabled = false;
					document.getElementById(relingualformid).disabled = false;

					document.getElementById(restomesialformid).disabled = false;
					document.getElementById(restobuccalformid).disabled = false;
					document.getElementById(restoocclusalformid).disabled = false;
					document.getElementById(restodistalformid).disabled = false;
					document.getElementById(restolingualformid).disabled = false;



					deleteThis('caries');

					}
					
				}
			function hideOtherReccurent() {	
				if(document.getElementById(recurrentformid).checked == true) {	
				    document.getElementById(recurrentsurfaceid+'mesial').style.display = "inline";
				    document.getElementById(recurrentsurfaceid+'buccal').style.display = "inline";
				    document.getElementById(recurrentsurfaceid+'occlusal').style.display = "inline";
				    document.getElementById(recurrentsurfaceid+'distal').style.display = "inline";
				    document.getElementById(recurrentsurfaceid+'lingual').style.display = "inline";


					}
				else if(document.getElementById(recurrentformid).checked == false) {
				
					document.getElementById(recurrentsurfaceid+'mesial').style.display = "none";
				    document.getElementById(recurrentsurfaceid+'buccal').style.display = "none";
				    document.getElementById(recurrentsurfaceid+'occlusal').style.display = "none";
				    document.getElementById(recurrentsurfaceid+'distal').style.display = "none";
				    document.getElementById(recurrentsurfaceid+'lingual').style.display = "none";
					
				    document.getElementById('mesial'+recurrentSelectSurfaceid).style.display = "none";
				    document.getElementById('buccal'+recurrentSelectSurfaceid).style.display = "none";
				    document.getElementById('occlusal'+recurrentSelectSurfaceid).style.display = "none";
				    document.getElementById('distal'+recurrentSelectSurfaceid).style.display = "none";
				    document.getElementById('lingual'+recurrentSelectSurfaceid).style.display = "none";
						
					
					document.getElementById(remesialformid).checked = false;
					document.getElementById(rebuccalformid).checked = false;
					document.getElementById(reocclusalformid).checked = false;
					document.getElementById(redistalformid).checked = false;
					document.getElementById(relingualformid).checked = false;

					document.getElementById(mesialformid).disabled = false;
					document.getElementById(buccalformid).disabled = false;
					document.getElementById(occlusalformid).disabled = false;
					document.getElementById(distalformid).disabled = false;
					document.getElementById(lingualformid).disabled = false;
					
					document.getElementById(restomesialformid).disabled = false;
					document.getElementById(restobuccalformid).disabled = false;
					document.getElementById(restoocclusalformid).disabled = false;
					document.getElementById(restodistalformid).disabled = false;
					document.getElementById(restolingualformid).disabled = false;

					
					
					deleteThis('recurrent');
					}
			}
			
					
			function hideOtherRestoration() {	
				if(document.getElementById(restorationformid).checked == true) {	
					document.getElementById(restorationsurfaceid+'mesial').style.display = "inline";
				    document.getElementById(restorationsurfaceid+'buccal').style.display = "inline";
				    document.getElementById(restorationsurfaceid+'occlusal').style.display = "inline";
				    document.getElementById(restorationsurfaceid+'distal').style.display = "inline";
				    document.getElementById(restorationsurfaceid+'lingual').style.display = "inline";


					}
				else if(document.getElementById(restorationformid).checked == false) {
					document.getElementById(restorationsurfaceid+'mesial').style.display = "none";
				    document.getElementById(restorationsurfaceid+'buccal').style.display = "none";
				    document.getElementById(restorationsurfaceid+'occlusal').style.display = "none";
				    document.getElementById(restorationsurfaceid+'distal').style.display = "none";
				    document.getElementById(restorationsurfaceid+'lingual').style.display = "none";

					document.getElementById('mesial'+restoreSelectSurfaceid).style.display = "none";
				    document.getElementById('buccal'+restoreSelectSurfaceid).style.display = "none";
				    document.getElementById('occlusal'+restoreSelectSurfaceid).style.display = "none";
				    document.getElementById('distal'+restoreSelectSurfaceid).style.display = "none";
				    document.getElementById('lingual'+restoreSelectSurfaceid).style.display = "none";
				
					
					//alert(restomesialformid);
					document.getElementById(restomesialformid).checked = false;
					document.getElementById(restobuccalformid).checked = false;
					document.getElementById(restoocclusalformid).checked = false;
					document.getElementById(restodistalformid).checked = false;
					document.getElementById(restolingualformid).checked = false;

					document.getElementById(mesialformid).disabled = false;
					document.getElementById(buccalformid).disabled = false;
					document.getElementById(occlusalformid).disabled = false;
					document.getElementById(distalformid).disabled = false;
					document.getElementById(lingualformid).disabled = false;
					
					document.getElementById(remesialformid).disabled = false;
					document.getElementById(rebuccalformid).disabled = false;
					document.getElementById(reocclusalformid).disabled = false;
					document.getElementById(redistalformid).disabled = false;
					document.getElementById(relingualformid).disabled = false;

					deleteThis('restoration');
					//alert("booms!");
					}
			}
			
			function hideCariesMesial(){
			if(document.getElementById(mesialformid).checked == true) {	
						document.getElementById(remesialformid).disabled = true;	
						document.getElementById(restomesialformid).disabled = true;				
						
					}
			else if(document.getElementById(mesialformid).checked == false) {
						document.getElementById(remesialformid).disabled = false;				
						document.getElementById(restomesialformid).disabled = false;				

				}
			
			}
			
			function hideReMesial(){
			
			if(document.getElementById(remesialformid).checked == true) {
						document.getElementById(mesialformid).disabled = true;				
						document.getElementById(restomesialformid).disabled = true;				

				}
			else if(document.getElementById(remesialformid).checked == false) {
						document.getElementById(mesialformid).disabled = false;				
						document.getElementById(restomesialformid).disabled = false;				

				}
			}
			
			function hideRestoreMesial(){
			if(document.getElementById(restomesialformid).checked == true) {
						document.getElementById(mesialformid).disabled = true;				
						document.getElementById(remesialformid).disabled = true;				

				}
			else if(document.getElementById(restomesialformid).checked == false) {
						document.getElementById(remesialformid).disabled = false;				
						document.getElementById(mesialformid).disabled = false;				

				}
			}
			
			
			function hideCariesDistal(){
			if(document.getElementById(distalformid).checked == true) {	
						document.getElementById(redistalformid).disabled = true;		
						document.getElementById(restodistalformid).disabled = true;				
						
					}
			else if(document.getElementById(distalformid).checked == false) {
						document.getElementById(redistalformid).disabled = false;				
						document.getElementById(restodistalformid).disabled = false;				

				}
			
			}
			
			function hideReDistal(){
			if(document.getElementById(redistalformid).checked == true) {
						document.getElementById(distalformid).disabled = true;				
						document.getElementById(restodistalformid).disabled = true;				

				}
			else if(document.getElementById(redistalformid).checked == false) {
						document.getElementById(distalformid).disabled = false;				
						document.getElementById(restodistalformid).disabled = false;				

				}
			
			}
			
			function hideRestoreDistal(){
			if(document.getElementById(restodistalformid).checked == true) {
						document.getElementById(distalformid).disabled = true;				
						document.getElementById(redistalformid).disabled = true;				

				}
			else if(document.getElementById(restodistalformid).checked == false) {
						document.getElementById(distalformid).disabled = false;				
						document.getElementById(redistalformid).disabled = false;				

				}
			
			}
			
			function hideCariesBuccal(){
			if(document.getElementById(buccalformid).checked == true) {	
						document.getElementById(rebuccalformid).disabled = true;	
						document.getElementById(restobuccalformid).disabled = true;				
						
					}
			else if(document.getElementById(buccalformid).checked == false) {
						document.getElementById(rebuccalformid).disabled = false;				
						document.getElementById(restobuccalformid).disabled = false;				

				}
			
			}
			
			function hideReBuccal(){
			if(document.getElementById(rebuccalformid).checked == true) {
						document.getElementById(buccalformid).disabled = true;				
						document.getElementById(restobuccalformid).disabled = true;				

				}
			else if(document.getElementById(rebuccalformid).checked == false) {
						document.getElementById(buccalformid).disabled = false;				
						document.getElementById(restobuccalformid).disabled = false;				

				}
			
			}
			
			function hideRestoreBuccal(){
			if(document.getElementById(restobuccalformid).checked == true) {
						document.getElementById(buccalformid).disabled = true;				
						document.getElementById(rebuccalformid).disabled = true;				

				}
			else if(document.getElementById(restobuccalformid).checked == false) {
						document.getElementById(buccalformid).disabled = false;				
						document.getElementById(rebuccalformid).disabled = false;				

				}
			
			}
			
			function hideCariesOcclusal(){
			if(document.getElementById(occlusalformid).checked == true) {	
						document.getElementById(reocclusalformid).disabled = true;	
						document.getElementById(restoocclusalformid).disabled = true;				
						
					}
			else if(document.getElementById(occlusalformid).checked == false) {
						document.getElementById(reocclusalformid).disabled = false;				
						document.getElementById(restoocclusalformid).disabled = false;				

				}
			
			}
			
			function hideReOcclusal(){
			if(document.getElementById(reocclusalformid).checked == true) {
						document.getElementById(occlusalformid).disabled = true;				
						document.getElementById(restoocclusalformid).disabled = true;				

				}
			else if(document.getElementById(reocclusalformid).checked == false) {
						document.getElementById(occlusalformid).disabled = false;				
						document.getElementById(restoocclusalformid).disabled = false;				

				}
			
			}
			
			function hideRestoreOcclusal(){
			if(document.getElementById(restoocclusalformid).checked == true) {
						document.getElementById(occlusalformid).disabled = true;				
						document.getElementById(reocclusalformid).disabled = true;				

				}
			else if(document.getElementById(restoocclusalformid).checked == false) {
						document.getElementById(occlusalformid).disabled = false;				
						document.getElementById(reocclusalformid).disabled = false;				

				}
			
			}
			
			
			function hideCariesLingual(){
			if(document.getElementById(lingualformid).checked == true) {	
						document.getElementById(relingualformid).disabled = true;	
						document.getElementById(restolingualformid).disabled = true;				
						
					}
			else if(document.getElementById(lingualformid).checked == false) {
						document.getElementById(relingualformid).disabled = false;
						document.getElementById(restolingualformid).disabled = false;				
						

				}
			
			}
			
			function hideReLingual(){
			if(document.getElementById(relingualformid).checked == true) {
						document.getElementById(lingualformid).disabled = true;				
						document.getElementById(restolingualformid).disabled = true;				
				}
			else if(document.getElementById(relingualformid).checked == false) {
						document.getElementById(lingualformid).disabled = false;				
						document.getElementById(restolingualformid).disabled = false;				

				}
			
			}
			
			function hideRestoreLingual(){
			if(document.getElementById(restolingualformid).checked == true) {
						document.getElementById(lingualformid).disabled = true;				
						document.getElementById(relingualformid).disabled = true;				

				}
			else if(document.getElementById(restolingualformid).checked == false) {
						document.getElementById(lingualformid).disabled = false;				
						document.getElementById(relingualformid).disabled = false;				

				}
			
			}
			
			//new selections
			function selectValues(){
				cariesSelect=["restorable","non-restorable"];
				restorationTypeSelect=["AM","CO","GI","TF","PCC","RCT","PFS","PFM","AC","MC","APC","RPD","FPD"];
			}
			
		//END NEWLY ADDED
		function showvar(surface,id){
				if(document.getElementById(id).checked == true){
				document.getElementById(surface).style.display = "block";
				}
				else if(document.getElementById(id).checked == false){
				document.getElementById(surface).style.display = "none";
				}
				
				
				
		}
		
		
		function hideCariesInit(){
					if(document.getElementById(mesialformid).checked == true) {	
						document.getElementById(remesialformid).disabled = true;	
						document.getElementById(restomesialformid).disabled = true;				

					}
					if(document.getElementById(distalformid).checked == true) {	
						document.getElementById(redistalformid).disabled = true;	
						document.getElementById(restodistalformid).disabled = true;				

					}
					if(document.getElementById(occlusalformid).checked == true) {	
						document.getElementById(reocclusalformid).disabled = true;	
						document.getElementById(restoocclusalformid).disabled = true;				

					}
					if(document.getElementById(buccalformid).checked == true) {	
						document.getElementById(rebuccalformid).disabled = true;	
						document.getElementById(restobuccalformid).disabled = true;				

					}
					if(document.getElementById(lingualformid).checked == true) {	
						document.getElementById(relingualformid).disabled = true;	
						document.getElementById(restolingualformid).disabled = true;				

					}
		}
		
		
			function hideRecurrentInit(){
					if(document.getElementById(remesialformid).checked == true) {	
						document.getElementById(mesialformid).disabled = true;	
						document.getElementById(restomesialformid).disabled = true;				

					}
					if(document.getElementById(redistalformid).checked == true) {	
						document.getElementById(distalformid).disabled = true;	
						document.getElementById(restodistalformid).disabled = true;				

					}
					if(document.getElementById(reocclusalformid).checked == true) {	
						document.getElementById(occlusalformid).disabled = true;	
						document.getElementById(restoocclusalformid).disabled = true;				

					}
					if(document.getElementById(rebuccalformid).checked == true) {	
						document.getElementById(buccalformid).disabled = true;	
						document.getElementById(restobuccalformid).disabled = true;				

					}
					if(document.getElementById(relingualformid).checked == true) {	
						document.getElementById(lingualformid).disabled = true;	
						document.getElementById(restolingualformid).disabled = true;				

					}
		}
		
		
			function hideRestoreInit(){
					if(document.getElementById(restomesialformid).checked == true) {	
						document.getElementById(mesialformid).disabled = true;	
						document.getElementById(remesialformid).disabled = true;				

					}
					if(document.getElementById(restodistalformid).checked == true) {	
						document.getElementById(distalformid).disabled = true;	
						document.getElementById(redistalformid).disabled = true;				

					}
					if(document.getElementById(restoocclusalformid).checked == true) {	
						document.getElementById(occlusalformid).disabled = true;	
						document.getElementById(reocclusalformid).disabled = true;				

					}
					if(document.getElementById(restobuccalformid).checked == true) {	
						document.getElementById(buccalformid).disabled = true;	
						document.getElementById(rebuccalformid).disabled = true;				

					}
					if(document.getElementById(restolingualformid).checked == true) {	
						document.getElementById(lingualformid).disabled = true;	
						document.getElementById(relingualformid).disabled = true;				

					}
		}
		
		
function newArray() {
	var heyarray = new Array();
	return heyarray;
}
		
function setIndex(TN) {
	if(TN > 10 && TN < 19) {
		index = 18-TN;
	}
	else if(TN > 20 && TN < 29) {
		index = TN-13;
	}
	else if(TN > 40 && TN < 49) {
		index = (48-TN)+16;
	}
	else if(TN > 30  && TN < 39) {
		index = TN-7;
	}
}
		
function checkTNs(TN) {
	var count = 0;
	for(var i = 0; i < listofTNs.length; i++) {
		if(listofTNs[i] == TN)
			count++;
		else 
			break;
	}
	if(count == listofTNs.length)
		listofTNs.push(TN);
}
	
function drawCondition(condition, position, TN) {
	//alert(TN);
	x = 62;
	y = 65;
	var formid;
	setIndex(TN);
	//alert(index+ " " + TN);
	for(var r = 0; r < positions.length; r++) {
		if(position == positions[r]) {
			for(var s = 0; s < condition.length; s++) {
				if(condition == conditions[s]) {
					formid = arrayFormIds[r][s];
					fillcolor = colors[s];
					//alert(formid);
					break;
				}
			}
			//	alert(formid);				
			if(document.getElementById(formid).checked == true)  {	
				thisarray[index][r].push(formid);
			//	alert(thisarray[index][r]);
				arrayFillColor.push(fillcolor);
			//	alert(formid);
			}
			else if(document.getElementById(formid).checked == false) {
				//alert(thisarray);
			//	alert(index + "form" + thisarray[index][r]);
				for(var i=0; i<thisarray[index][r].length; i++) {
					if(thisarray[index][r][i] == formid) {
						thisarray[index][r].splice(i, 1);
						
						arrayFillColor.splice(i+r, 1);
					}
				}
			}
			break;
		}
		
	}
	
}

function drawConditionMini(condition, position, tn) {
	drawCondition(condition, position, tn);
	redrawWidget();
	if(condition=='caries' && position=='mesial'){
		hideCariesMesial();
	}
	else if(condition=='caries' && position=='distal'){
		hideCariesDistal();
	}
	else if(condition=='caries' && position=='occlusal'){
		hideCariesOcclusal();
	}
	else if(condition=='caries' && position=='lingual'){
		hideCariesLingual();
	}
	else if(condition=='caries' && position=='buccal'){
		hideCariesBuccal();
	}
	else if(condition=='recurrent' && position=='mesial'){
		hideReMesial();
	} 
	else if(condition=='recurrent' && position=='distal'){
		hideReDistal();
	} 
	else if(condition=='recurrent' && position=='occlusal'){
		hideReOcclusal();
	}
 	else if(condition=='recurrent' && position=='lingual'){
		hideReLingual();
	} 
	else if(condition=='recurrent' && position=='buccal'){
		hideReBuccal();
	}
	else if(condition=='restoration' && position=='mesial'){
		hideRestoreMesial();
	}
	else if(condition=='restoration' && position=='distal'){ 
		hideRestoreDistal();
	} 
	else if(condition=='restoration' && position=='occlusal'){
		hideRestoreOcclusal();
	}
	else if(condition=='restoration' && position=='lingual'){ 
		hideRestoreLingual();
	}
	else if(condition=='restoration' && position=='buccal'){ 
		hideRestoreBuccal();
	} 
} 
		
function drawCondition2(condition,TN) {
	if(condition == 'extrusion') {
		drawExtrusion(62, 65, ctxmini11);
		 hideOtherExtrusion();
	}
	else if(condition == 'intrusion') {
		drawIntrusion(62, 65, ctxmini7);
 		hideOtherIntrusion();
	}
	else if(condition == 'mesialdrift') {
		drawMesialdrift(62, 65, ctxmini8);
 		hideOtherMesialDrift();
	}
	else if(condition == 'distaldrift') {
		drawDistaldrift(62, 65, ctxmini9); 
		hideOtherDistalDrift();
	}
	else if(condition == 'rotation') {
		drawRotation(62, 65, ctxmini10);
		hideOtherRotation();
	}
	else if(condition == 'pitfissure') {
		drawPitfissure(62, 65, ctxmini6);
 	}
	else if(condition == 'extracted') {
		drawExtracted(62, 65, ctxmini12); 
		hideOtherExtracted();
	}
	else if(condition == 'missing') {
		drawMissing(62, 65, ctxmini13); 
		hideOtherMissing();
	}
	else if(condition == 'unerupted') {
		drawUnerupted(62, 65, ctxmini14); hideOtherUnerupted();	
	}
	else if(condition == 'impacted') {
		drawImpacted(62, 65, ctxmini15);
	 	hideOtherImpacted();
	}
	else if(condition == 'restorable') {
		drawRestorable(62, 65, ctxmini16);
 	}
	else if(condition == 'nonrestorable') {
		drawNonrestorable(62, 65, ctxmini17);
 	}
	else if(condition == 'acrylic') {
		drawAcrylic(TN);
 	}
	else if(condition == 'postcore') {
		drawPostCore(TN);
 	}
	else if(condition == 'metal') {
		drawMetal(TN);
 	}
	else if(condition == 'porcelain') {
		drawPorcelain(TN);
 	}
	else if(condition == 'removablepartial') {
		drawRPD(TN);
 	}
	else if(condition == 'fixedbridge') {
		drawFixedBridge(TN);
 	}
	else if(condition == 'rootcanal') {
		drawRootCanal(TN);
 	}
	else if(condition == 'porcelainfused') {
		drawPorcelainFused(TN);
 	}
	else if(condition == 'pitfissure') {
		drawPitFissure(TN);
 	}
}
		
function drawConditionMini2(condition, TN) {
	drawCondition2(condition, TN);
	redrawWidget();
}
		
function drawConditionMini3(condition, TN) { 
	hideOtherStandard(condition);
	//drawCondition3(condition, TN);	
	clearContext3(62, 65, ctxmini2, ctxmini5);
	drawCrowns(62, 65, ctxmini2, ctxmini5);
}
		
function drawCondition3(condition, TN) { 
	hideOtherStandard(condition);	
	setIndex(TN);
	var formid;
	for(var i = 0; i < otherConds.length; i++) {
		if(otherConds[i] == condition) {
	 		formid = otherFormIds[i];
			if(document.getElementById(otherFormIds[i]).checked == true)  {	
				thisarray2[index].push(formid);
				arrayFillColor2[index].push(colors2[i]);
			}
			else if(document.getElementById(otherFormIds[i]).checked == false){
				for(var i=0; i<thisarray2[index].length; i++) {
					if(thisarray2[index][i] == formid) {
						thisarray2[index].splice(i, 1);	
						arrayFillColor2[index].splice(i,1);
					}
				}
			}
			break;
		}
	}
}
		
function clearContext(x, y, ctx) {
	ctx.clearRect(x-40,y-40,77,77);
}
		
function clearContext2(x, y, ctx) {
	ctx.clearRect(x-15, y-15, 50, 50);	
}
		
function clearContext3(x, y, ctx1, ctx2) {
	ctx1.clearRect(x-40,y-40,77,77);
	ctx2.clearRect(x-15, y-15, 50, 50);
}

function drawEverything(x, y, ctxmini1) {
	for(var i = 0; i < thisarray[index].length-1; i++) {
		for(var j = 0; j < thisarray[index][i].length; j++) {
			if(thisarray[index][i].length > 0) {
				//alert(i + " " + thisarray[index][i]);
				additional = 0.5/thisarray[index][i].length;
				ctxmini1.beginPath();
				ctxmini1.arc(x, y, 35, (arrayB[i] - (thisarray[index][i].length-j)*additional)* Math.PI, arrayB[i] * Math.PI, false);
				ctxmini1.lineTo(x,y);
				var mycolor = "FFFFFF";
				for(var r = 0; r < arrayFormIds.length; r++) {
					for(var s = 0; s < arrayFormIds[r].length; s++) {
						if(thisarray[index][i][j] == arrayFormIds[r][s]) {
							mycolor = colors[s];
							break;
						}
					}
					if(mycolor != "FFFFFF") break;
				}
				//alert(mycolor);
				ctxmini1.fillStyle = mycolor;
				ctxmini1.fill()
			}
		}
	}

}		

function drawOcclusals(x, y, ctxmini31) {
	additional = 2/thisarray[index][4].length;
	for(var i = 0; i < thisarray[index][4].length; i++) {
		ctxmini31.beginPath();
		ctxmini31.arc(x, y, 14, (2-(thisarray[index][4].length-i)*additional)*Math.PI, Math.PI*2, false);
		ctxmini31.lineTo(x,y);
		var mycolor = "FFFFFF";
		for(var s = 0; s < arrayFormIds[4].length; s++) {
			if(thisarray[index][4][i] == arrayFormIds[4][s]) {
				mycolor = colors[s];
				break;
			}
		}
		ctxmini31.fillStyle = mycolor;
		ctxmini31.fill();
	}
}

function initializevars() {
	arrayA = [0.75, 1.25, 1.75, 2.25, 0];
	arrayB = [1.25, 1.75, 2.25, 2.75, 2];
 	conditions = ["caries", "recurrent", "restoration"];
	conditions2 = ["postcore", "removablepartial", "fixedbridge", "rootcanal", "porcelainfused", "acrylic", "metal", "porcelain"];
	colors = ["red", "#67D413", "blue"];
	colors2 = ["orange", "#00868B", "#FFA07A", "#00008B", "#CAFF70", "#97FFFF", "#555555", "#9400D3", "#00868B", "#FFA07A"];
	positions = ["distal", "buccal", "mesial", "lingual", "occlusal"];
	arrayfi1 = [distalformid, redistalformid, restodistalformid];
	arrayfi2 = [buccalformid, rebuccalformid, restobuccalformid];
	arrayfi3 = [mesialformid, remesialformid, restomesialformid];
	arrayfi4 = [lingualformid, relingualformid, restolingualformid];
	arrayfi5 = [occlusalformid, reocclusalformid, restoocclusalformid];
	arrayFormIds = [arrayfi1,arrayfi2,arrayfi3,arrayfi4,arrayfi5];
	otherFormIds = [rootcanalformid, removablepartialformid, fixedbridgeformid, porcelainfusedformid, postcorecrownformid, acryliccrownformid, metalcrownformid, porcelaincrownformid];
 	otherConds = ["rootcanal", "removablepartial", "fixedbridge", "porcelainfused", "postcore", "acrylic", "metal", "porcelain"];
}
		
function deleteThis(condition) {
	var ind;
	for(var i = 0; i < conditions.length; i++) {
		if(conditions[i] == condition) {
			ind = i;
		}
	}
	for(var i = 0; i < thisarray[index].length; i++) {
		for(var j = 0; j < thisarray[index][i].length; j++) {
			if(thisarray[index][i][j] == arrayFormIds[i][ind]) {
				thisarray[index][i].splice(j, 1);
				break;
			}
		}
	}
	redrawWidget();
}
		
function redrawWidget() {
	clearContext(62, 65, ctxmini1);	
	clearContext2(62, 65, ctxmini4);
	drawEverything(62, 65, ctxmini1);
	drawOcclusals(62, 65, ctxmini4);
}

var layer1;
var layer2;
var layer3;
var ctx1;
var ctx2;
var ctx3;
var x = 400;
var y = 300;
var dx = 2;
var dy = 4;
var WIDTH = 400;
var HEIGHT = 300;
var city = new Image();

function drawTooth(ctxmini30) {		
	var x1 = 62;	
	var y1 = 65;	
	var width1 = 70;
	var width2 = 30;		
	var space1 = 5;	
	var space2 = 45;
	var space3 = 75;	
	var lineX1 = 39;	
	var lineY1 = 39;	
	var lineX2 = 89;	
	var lineY2 = 89;	
		ctxmini30.lineWidth="1.5";		
		ctxmini30.beginPath();	
		ctxmini30.arc(x1,y1,width1/2,0,Math.PI*2,false);	
		ctxmini30.closePath();	ctxmini30.strokeStyle="#000";
		ctxmini30.stroke();			
		ctxmini30.beginPath();
		ctxmini30.arc(x1,y1,width2/2,0,Math.PI*2,false);	
		ctxmini30.closePath();	
		ctxmini30.strokeStyle="#000";	
		ctxmini30.stroke();		
		ctxmini30.moveTo(lineX1, lineY1);
		ctxmini30.lineTo(lineX2, lineY2);
		ctxmini30.stroke();	
		ctxmini30.moveTo(lineX2, lineY1);
		ctxmini30.lineTo(lineX1, lineY2);
		ctxmini30.stroke();		
		
		ctxmini30.beginPath();
		ctxmini30.arc(x1,y1,14,0,Math.PI*2,false);	
		ctxmini30.closePath();	
		ctxmini30.fillStyle="#FFF";
		ctxmini30.fill();
		
		}
function services() {	document.getElementById('serviceslight').style.display='block';document.getElementById('servicesfade').style.display='block';}
function dentures() {	document.getElementById('dentureslight').style.display='block';document.getElementById('denturesfade').style.display='block';}
function notesclick() {	document.getElementById('noteslight').style.display='block';document.getElementById('notesfade').style.display='block';}
		
function clearneeded_service(){
		
		
		document.getElementById('periodonticsdiv').innerHTML="";
		document.getElementById('periodiv').innerHTML="";
		document.getElementById('emergencytreatmentdiv').innerHTML="";
		document.getElementById('pulpsedationdiv').innerHTML="";
		document.getElementById('crownrecementationdiv').innerHTML="";
		document.getElementById('fillingservicediv').innerHTML="";
		document.getElementById('acuteinfectionsdiv').innerHTML="";
		document.getElementById('traumaticdiv').innerHTML="";
		document.getElementById('operativedentistrydiv').innerHTML="";
		document.getElementById('class1div').innerHTML="";
		document.getElementById('class2div').innerHTML="";
		document.getElementById('class3div').innerHTML="";
		document.getElementById('class4div').innerHTML="";
		document.getElementById('class5div').innerHTML="";
		document.getElementById('onlaydiv').innerHTML="";
		document.getElementById('fixedpartialdenturediv').innerHTML="";
		document.getElementById('laminateddiv').innerHTML="";
		document.getElementById('singlecrowndiv').innerHTML="";
		document.getElementById('bridgeservicediv').innerHTML="";
		document.getElementById('anteriordiv').innerHTML="";
		document.getElementById('posteriordiv').innerHTML="";
		document.getElementById('othersdiv').innerHTML="";
		document.getElementById('surgerydiv').innerHTML="";
		document.getElementById('extractiondiv').innerHTML="";
		document.getElementById('odontectomydiv').innerHTML="";
		document.getElementById('specialcasediv').innerHTML="";
		document.getElementById('pedonticsdiv').innerHTML="";
		document.getElementById('prosthodonticsdiv').innerHTML="";
		document.getElementById('completedentdiv').innerHTML="";
		document.getElementById('singledentdiv').innerHTML="";
		document.getElementById('removedentdiv').innerHTML="";
		document.getElementById('otherssdiv').innerHTML="";
	
		document.getElementById('neededlight').style.display='none';
		document.getElementById('neededfade').style.display='none';
		}
		
		function needed_services(){
			
		var class1check=false;
		var class2check=false;
		var class3check=false;
		var class4check=false;
		var class5check=false;
		var onlaycheck=false;

		var laminatedcheck=false;
		var singlecrowncheck=false;
		var bridgeservicecheck=false;
		
		var anteriorcheck=false;
		var posteriorcheck=false;
		var otherscheck=false;
		
		var extractioncheck=false;
		var odontectomycheck=false;
		var specialcasecheck=false;
		
		var pulpsedationcheck=false;
		var crownrecementationcheck=false;
		var fillingservicecheck=false;
			
		var emergencytreatmentcheck=false;
		var surgerycheck=false;
		var prosthodonticscheck=false;
		var operativedentistrycheck=false;
		var fixedpartialdenturecheck=false;
		var endodonticscheck=false;
			if(document.getElementById("periodontics").checked == true){
							document.getElementById('periodonticsdiv').innerHTML="Periodontics ";

				document.getElementById('periodiv').innerHTML="&nbsp;&nbsp;<input type='checkbox' checked disabled>Management of Periodontical Disease ";
			
			}

		

			if(document.getElementById("acuteinfections").checked == true){
			
					if(emergencytreatmentcheck==false)
										document.getElementById('emergencytreatmentdiv').innerHTML="Emergency Treatment ";

				document.getElementById('acuteinfectionsdiv').innerHTML="&nbsp;&nbsp;<input type='checkbox' checked disabled>Management of acute infections ";
				emergencytreatmentcheck=true;
			}
			
			
			if(document.getElementById("traumaticinjuries").checked == true){
				if(emergencytreatmentcheck==false)
										document.getElementById('emergencytreatmentdiv').innerHTML="Emergency Treatment ";
										
				document.getElementById('traumaticdiv').innerHTML="&nbsp;&nbsp;<input type='checkbox' checked disabled>Management of Traumatic Injuries ";	
				emergencytreatmentcheck=true;

			}
			

		
		
			//surgery
			if(document.getElementById("pedodontics").checked == true){
					if(surgerycheck==false)
										document.getElementById('surgerydiv').innerHTML="Surgery ";
				
				document.getElementById('pedonticsdiv').innerHTML="&nbsp;&nbsp;<input type='checkbox' checked disabled>Pedodontics ";
				surgerycheck=true;
			
			}
			if(document.getElementById("orthodontics").checked == true){
				if(surgerycheck=false)
										document.getElementById('surgerydiv').innerHTML="Surgery ";
				
				document.getElementById('orthodonticsdiv').innerHTML="&nbsp;&nbsp;<input type='checkbox' checked disabled>Orthodontics ";
			
			surgerycheck=true;
			}
				
				
			//prostho
			if(document.getElementById("completedent").checked == true){
				if(prosthodonticscheck==false)
										document.getElementById('prosthodonticsdiv').innerHTML="Prosthodontics ";
										
				document.getElementById('completedentdiv').innerHTML="&nbsp;&nbsp;<input type='checkbox' checked disabled>Complete Denture ";
				prosthodonticscheck=true;
			}
			if(document.getElementById("singledent").checked == true){
				if(prosthodonticscheck==false)
										document.getElementById('prosthodonticsdiv').innerHTML="Prosthodontics ";
				document.getElementById('singledentdiv').innerHTML="&nbsp;&nbsp;<input type='checkbox' checked disabled>Single Denture ";
				
								prosthodonticscheck=true;

			}
			if(document.getElementById("removedent").checked == true){
				if(prosthodonticscheck==false)
										document.getElementById('prosthodonticsdiv').innerHTML="Prosthodontics ";
				document.getElementById('removedentdiv').innerHTML="&nbsp;&nbsp;<input type='checkbox' checked disabled>Removable Partial Denture ";
								prosthodonticscheck=true;

			}
			if(document.getElementById("otherss").checked == true){
				if(prosthodonticscheck==false)
										document.getElementById('prosthodonticsdiv').innerHTML="Prosthodontics ";
				document.getElementById('otherssdiv').innerHTML="&nbsp;&nbsp;<input type='checkbox' checked disabled>Other Partial Denture ";
				
				prosthodonticscheck=true;
			}
		
		
		
		for(a = 0; a < 4; a++) {
		for(b = 18; b > 10; b--) {
			c = b + (a * 10);
		

		//operative	
			if(document.getElementById("class1"+c).checked == true){
				if(operativedentistrycheck==false)
						document.getElementById('operativedentistrydiv').innerHTML="Operative Dentistry ";
		
				if(class1check==false)
						document.getElementById('class1div').innerHTML="&nbsp;&nbsp;Class 1 : ";

				document.getElementById('class1div').innerHTML+=c+", ";
				class1check=true;
				operativedentistrycheck=true;
			}
			if(document.getElementById("class2"+c).checked == true){
				if(operativedentistrycheck==false)
						document.getElementById('operativedentistrydiv').innerHTML="Operative Dentistry ";
						
					if(class2check==false)
					document.getElementById('class2div').innerHTML="&nbsp;&nbsp;Class 2 : ";

				document.getElementById('class2div').innerHTML+=c+", "
				class2check=true;
				operativedentistrycheck=true;

			}
				if(document.getElementById("class3"+c).checked == true){
					if(operativedentistrycheck==false)
						document.getElementById('operativedentistrydiv').innerHTML="Operative Dentistry ";
						
					if(class3check==false)
					document.getElementById('class3div').innerHTML="&nbsp;&nbsp;Class 3 : ";

				document.getElementById('class3div').innerHTML+=c+", "
				class3check=true;
				operativedentistrycheck=true;

			}
		if(document.getElementById("class4"+c).checked == true){
			if(operativedentistrycheck==false)
						document.getElementById('operativedentistrydiv').innerHTML="Operative Dentistry ";
						
					if(class4check==false)
					document.getElementById('class4div').innerHTML="&nbsp;&nbsp;Class 4 : ";

				document.getElementById('class4div').innerHTML+=c+", "
				class4check=true;
				operativedentistrycheck=true;

			}
				if(document.getElementById("class5"+c).checked == true){
					if(operativedentistrycheck==false)
						document.getElementById('operativedentistrydiv').innerHTML="Operative Dentistry ";
						
					if(class5check==false)
					document.getElementById('class5div').innerHTML="&nbsp;&nbsp;Class 5 : ";

				document.getElementById('class5div').innerHTML+=c+", "
				class5check=true;
				operativedentistrycheck=true;

			}
			if(document.getElementById("onlay"+c).checked == true){
				if(operativedentistrycheck==false)
						document.getElementById('operativedentistrydiv').innerHTML="Operative Dentistry ";
						
					if(onlaycheck==false)
					document.getElementById('onlaydiv').innerHTML="&nbsp;&nbsp;Onlay : ";

				document.getElementById('onlaydiv').innerHTML+=c+", "
				onlaycheck=true;
				operativedentistrycheck=true;

			}
		
		//FIXED
		if(document.getElementById("laminated"+c).checked == true){
		if(fixedpartialdenturecheck==false)
						document.getElementById('fixedpartialdenturediv').innerHTML="Fixed partial Denture ";
					if(laminatedcheck==false)
					document.getElementById('laminateddiv').innerHTML="&nbsp;&nbsp;Laminated : ";

				document.getElementById('laminateddiv').innerHTML+=c+", ";				
				laminatedcheck=true;
				fixedpartialdenturecheck=true;
			}
			if(document.getElementById("singlecrown"+c).checked == true){
			if(fixedpartialdenturecheck==false)
						document.getElementById('fixedpartialdenturediv').innerHTML="Fixed partial Denture ";
						
					if(singlecrowncheck==false)
					document.getElementById('singlecrowndiv').innerHTML="&nbsp;&nbsp;Single Crown : ";

				document.getElementById('singlecrowndiv').innerHTML+=c+", ";				
				singlecrowncheck=true;
				fixedpartialdenturecheck=true;

			}
			if(document.getElementById("bridgeservice"+c).checked == true){
			if(fixedpartialdenturecheck==false)
						document.getElementById('fixedpartialdenturediv').innerHTML="Fixed partial Denture ";
						
					if(bridgeservicecheck==false)
					document.getElementById('bridgeservicediv').innerHTML="&nbsp;&nbsp;Bridge Service : ";

				document.getElementById('bridgeservicediv').innerHTML+=c+", ";
				bridgeservicecheck=true;
				fixedpartialdenturecheck=true;

			}				
		//endo
			if(document.getElementById("anterior"+c).checked == true){
			if(endodonticscheck==false)
						document.getElementById('endodonticsdiv').innerHTML="Endodontics ";
						
				if(anteriorcheck==false)
							document.getElementById('anteriordiv').innerHTML="&nbsp;&nbsp;Anterior : ";
			
				document.getElementById('anteriordiv').innerHTML+=c+", ";
				anteriorcheck=true;
				endodonticscheck=true;
			}
			if(document.getElementById("posterior"+c).checked == true){
			if(endodonticscheck==false)
						document.getElementById('endodonticsdiv').innerHTML="Endodontics ";
						if(posteriorcheck==false)
											document.getElementById('posteriordiv').innerHTML="&nbsp;&nbsp;Posterior : ";

				document.getElementById('posteriordiv').innerHTML+=c+", ";		
				posteriorcheck=true;
				endodonticscheck=true;
			}
			if(document.getElementById("otherendodontics"+c).checked == true){
			if(endodonticscheck==false)
						document.getElementById('endodonticsdiv').innerHTML="Endodontics ";
				if(otherscheck==false)
						document.getElementById('othersdiv').innerHTML="&nbsp;&nbsp;Others<br> &nbsp;&nbsp;&nbsp;&nbsp;(Endosurgery,<br>&nbsp;&nbsp;&nbsp;&nbsp;Bleaching,etc) : ";

				document.getElementById('othersdiv').innerHTML+=c+", ";
				
				endodonticscheck=true;
				otherscheck=true;
			}
			
		//surgery
			if(document.getElementById("extractss"+c).checked == true){
				if(surgerycheck==false)
							document.getElementById('surgerydiv').innerHTML="Surgery ";
			
			if(extractioncheck==false)
						document.getElementById('extractiondiv').innerHTML="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Extraction: ";

				document.getElementById('extractiondiv').innerHTML+=c+", ";
			
			surgerycheck=true;
			extractioncheck=true;
			}
			if(document.getElementById("odontectomy"+c).checked == true){
				if(surgerycheck==false)
							document.getElementById('surgerydiv').innerHTML="Surgery ";
										
			if(odontectomycheck==false)
					document.getElementById('odontectomydiv').innerHTML="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Odontectomy : ";
						
				document.getElementById('odontectomydiv').innerHTML+=c+", ";
				odontectomycheck=true;
				surgerycheck=true;

			}
			if(document.getElementById("specialcase"+c).checked == true){
				if(surgerycheck==false)
							document.getElementById('surgerydiv').innerHTML="Surgery ";
										
				if(specialcasecheck==false)
						document.getElementById('specialcasediv').innerHTML="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Special case : ";
					
				document.getElementById('specialcasediv').innerHTML+=c+", ";
				specialcasecheck=true;
				surgerycheck=true;

			}
			//emergency treatment
			if(document.getElementById("pulpsedation"+c).checked == true){
			if(emergencytreatmentcheck==false)
										document.getElementById('emergencytreatmentdiv').innerHTML="Emergency Treatment ";

				if(pulpsedationcheck==false)
						document.getElementById('pulpsedationdiv').innerHTML="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pulp Sedation : ";
					
				document.getElementById('pulpsedationdiv').innerHTML+=c+", ";
				pulpsedationcheck=true;
				emergencytreatmentcheck=true;

			}
			
			if(document.getElementById("crownrecementation"+c).checked == true){
			if(emergencytreatmentcheck==false)
										document.getElementById('emergencytreatmentdiv').innerHTML="Emergency Treatment ";

				if(crownrecementationcheck==false)
					document.getElementById('crownrecementationdiv').innerHTML="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Crown Recementations : ";
					
				document.getElementById('crownrecementationdiv').innerHTML+=c+", ";
				crownrecementationcheck=true;
				emergencytreatmentcheck=true;

			}
			if(document.getElementById("fillingservice"+c).checked == true){
			if(emergencytreatmentcheck==false)
										document.getElementById('emergencytreatmentdiv').innerHTML="Emergency Treatment ";

				if(fillingservicecheck==false)
						document.getElementById('fillingservicediv').innerHTML="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Temporary Fillings : ";
					
				document.getElementById('fillingservicediv').innerHTML+=c+", ";
				fillingservicecheck=true;
				emergencytreatmentcheck=true;
			}
		
			}// end 1st for loop
			
		}//end 2nd for loop
	//	alert("boom");
		document.getElementById('neededlight').style.display='block';
		document.getElementById('neededfade').style.display='block';

	}
		
function cancelcond(tn) {
	thisID = 'light' + tn;
	thisID2 = 'fade' + tn;
	document.getElementById(thisID).style.display='none';
	document.getElementById(thisID2).style.display='none';
}		
		
function initMini(tn) {	
	id = "layer1mini" + tn;	layermini1 = document.getElementById(id);
	ctxmini1 = layermini1.getContext("2d");
	layermini2 = document.getElementById("layer2mini" + tn);
	ctxmini2 = layermini2.getContext("2d");
	layermini3 = document.getElementById("layer3mini" + tn);
	ctxmini3 = layermini3.getContext("2d");
	layermini4 = document.getElementById("layer4mini" + tn);
	ctxmini4 = layermini4.getContext("2d");
	layermini5 = document.getElementById("layer5mini" + tn);
	ctxmini5 = layermini5.getContext("2d");
	layermini6 = document.getElementById("layer6mini" + tn);
	ctxmini6 = layermini6.getContext("2d");
	layermini7 = document.getElementById("layer7mini" + tn);
	ctxmini7 = layermini7.getContext("2d");
	layermini8 = document.getElementById("layer8mini" + tn);
	ctxmini8 = layermini8.getContext("2d");
	layermini9 = document.getElementById("layer9mini" + tn);
	ctxmini9 = layermini9.getContext("2d");
	layermini10 = document.getElementById("layer10mini" + tn);
	ctxmini10 = layermini10.getContext("2d");
	layermini11 = document.getElementById("layer11mini" + tn);
	ctxmini11 = layermini11.getContext("2d");
	layermini12 = document.getElementById("layer12mini" + tn);
	ctxmini12 = layermini12.getContext("2d");
	layermini13 = document.getElementById("layer13mini" + tn);
	ctxmini13 = layermini13.getContext("2d");
	layermini14 = document.getElementById("layer14mini" + tn);
	ctxmini14 = layermini14.getContext("2d");
	layermini15 = document.getElementById("layer15mini" + tn);
	ctxmini15 = layermini15.getContext("2d");
	layermini16 = document.getElementById("layer16mini" + tn);
	ctxmini16 = layermini16.getContext("2d");
	layermini17 = document.getElementById("layer17mini" + tn);
	ctxmini17 = layermini17.getContext("2d");
	drawTooth(ctxmini3);
}
		
function toothclick(tn) {
	 initMini(tn);
 	thisID = 'light' + tn;	thisID2 = 'fade' + tn;
	document.getElementById(thisID).style.display='block';
	document.getElementById(thisID2).style.display='block';
	toothnumber = tn;
	getFormid(toothnumber);
	initializevars();
	hideAllTooth(); 
	showAllTooth();  
	hideOtherExtracted();
	hideOtherMissing(); 
	hideOtherUnerupted();
	hideOtherImpacted();
	hideOtherExtrusion(); 
	hideOtherIntrusion(); 
	hideOtherMesialDrift(); 
	hideOtherDistalDrift(); 
	hideOtherRotation(); 
	hideOtherStandard('metal'); 
	hideOtherStandard('porcelain'); 
	hideOtherStandard('acrylic');
	showvar('mesial'+cariesSelectSurfaceid,mesialformid);
	showvar('lingual'+cariesSelectSurfaceid,lingualformid); 
	showvar('distal'+cariesSelectSurfaceid,distalformid);  
	showvar('buccal'+cariesSelectSurfaceid,buccalformid); 
	showvar('occlusal'+cariesSelectSurfaceid,occlusalformid); 
	showvar('distal'+recurrentSelectSurfaceid,redistalformid); 
	showvar('lingual'+recurrentSelectSurfaceid,relingualformid); 
	showvar('buccal'+recurrentSelectSurfaceid,rebuccalformid); 
	showvar('occlusal'+recurrentSelectSurfaceid,reocclusalformid); 
	showvar('mesial'+recurrentSelectSurfaceid,remesialformid);
	showvar('distal'+restoreSelectSurfaceid,restodistalformid); 
	showvar('lingual'+restoreSelectSurfaceid,restolingualformid); 
	showvar('buccal'+restoreSelectSurfaceid,restobuccalformid); 
	showvar('occlusal'+restoreSelectSurfaceid,restoocclusalformid); 
	showvar('mesial'+restoreSelectSurfaceid,restomesialformid);
	hideOtherCaries(); 
	hideOtherReccurent(); 
	hideOtherRestoration(); 
	hideCariesInit();
	hideRecurrentInit();
	hideRestoreInit();
		setIndex(tn);	
		drawEverything(62, 65, ctxmini1);	   
		drawOcclusals(62, 65, ctxmini4);	
		drawExtrusion(62, 65, ctxmini6); 
		drawIntrusion(62, 65, ctxmini7); 
		drawMesialdrift(62, 65, ctxmini8);  	
		drawDistaldrift(62, 65, ctxmini9); 
		drawRotation(62, 65, ctxmini10); 
		drawPitfissure(62, 65, ctxmini11); 
		drawExtracted(62, 65, ctxmini12); 	
		drawMissing(62, 65, ctxmini13); 	
		drawUnerupted(62, 65, ctxmini14); 
		drawImpacted(62, 65, ctxmini15); 
		}
	//NEWLY EDITED	
	
	
	
function tnloop(){
	for(var j = 0; j < 4; j++) {
		for(var i = 18; i > 10; i--) {
			var tn = i+j*10;
			document.write("<div id='light" +tn+ "' class='white_content' name='light" +tn+ "'>" +	"<div id='canvasesdiv' >" +	"	<canvas id='layer1mini" +tn+ "' style=' border:solid 2px; z-index: 1; position:absolute; right:20px; top:20px;' height='125px' width='125'>" +	 "	</canvas> " +	"	<canvas id='layer2mini" +tn+ "' style=' border:solid 2px; z-index: 2; position:absolute; right:20px; top:20px;' height='125px' width='125'>" +	 "	</canvas> " +	"	<canvas id='layer3mini" +tn+ "' style=' border:solid 2px; z-index: 3; position:absolute; right:20px; top:20px;' height='125px' width='125'>" +	 "	</canvas> " +	"	<canvas id='layer4mini" +tn+ "' style=' border:solid 2px; z-index: 4; position:absolute; right:20px; top:20px;' height='125px' width='125'>" +	 "	</canvas> " +	"	<canvas id='layer5mini" +tn+ "' style=' border:solid 2px; z-index: 5; position:absolute; right:20px; top:20px;' height='125px' width='125'>" +	 "	</canvas> " +	"	<canvas id='layer6mini" +tn+ "' style=' border:solid 2px; z-index: 6; position:absolute; right:20px; top:20px;' height='125px' width='125'>" +	 "	</canvas> " +	"	<canvas id='layer7mini" +tn+ "' style=' border:solid 2px; z-index: 7; position:absolute; right:20px; top:20px;' height='125px' width='125'>" +	 "	</canvas> " +	"	<canvas id='layer8mini" +tn+ "' style=' border:solid 2px; z-index: 8; position:absolute; right:20px; top:20px;' height='125px' width='125'>" +	 "	</canvas> " +	"	<canvas id='layer9mini" +tn+ "' style=' border:solid 2px; z-index: 9; position:absolute; right:20px; top:20px;' height='125px' width='125'>" +	 "	</canvas> " +	"	<canvas id='layer10mini" +tn+ "' style=' border:solid 2px; z-index: 10; position:absolute; right:20px; top:20px;' height='125px' width='125'>" +	 "	</canvas> " +	"	<canvas id='layer11mini" +tn+ "' style=' border:solid 2px; z-index: 11; position:absolute; right:20px; top:20px;' height='125px' width='125'>" +	 "	</canvas> " +	"	<canvas id='layer12mini" +tn+ "' style=' border:solid 2px; z-index: 12; position:absolute; right:20px; top:20px;' height='125px' width='125'>" +	 "	</canvas> " +	"	<canvas id='layer13mini" +tn+ "' style=' border:solid 2px; z-index: 13; position:absolute; right:20px; top:20px;' height='125px' width='125'>" +	 "	</canvas> " +	"	<canvas id='layer14mini" +tn+ "' style=' border:solid 2px; z-index: 14; position:absolute; right:20px; top:20px;' height='125px' width='125'>" +	 "	</canvas> " +	"	<canvas id='layer15mini" +tn+ "' style=' border:solid 2px; z-index: 15; position:absolute; right:20px; top:20px;' height='125px' width='125'>" +	 "	</canvas> " +	"	<canvas id='layer16mini" +tn+ "' style=' border:solid 2px; z-index: 16; position:absolute; right:20px; top:20px;' height='125px' width='125'>" +	 "	</canvas> " +	"	<canvas id='layer17mini" +tn+ "' style=' border:solid 2px; z-index: 17; position:absolute; right:20px; top:20px;' height='125px' width='125'>" +	 "	</canvas> " +	"</div>	" +	"<b>Tooth "+tn+"  </b><br/><br/><br/>" +	"<a href = 'javascript:void(0)' onclick = 'submitcond()'>Submit</a>&nbsp;"+	"<a href = 'javascript:void(0)' onclick = 'cancelcond("+tn+")'>Cancel</a>" +	"<br/> <br/>"+
		"<br><input type='checkbox' name='dentalStatus' value='"+tn+"' id='dentalStatus"+tn+"' onclick='hideAllTooth()'><b>Dental Status</b><br/>"+	
		
		
		"<div id='dentalstatussurface"+tn+"' style='display:none;'><table><tr><td></td><td>Caries</td>"+	
	
		"<td><input type='checkbox' name='recurrentcaries' value='"+ tn +"' id='recurrentcaries"+tn+"'  onclick='hideOtherReccurent()'>Reccurent</td>"+
  
		"<td><input type='checkbox' name='restoration' value='"+tn+"' id='restoration"+tn+"' onclick='hideOtherRestoration()'>Restoration</td>"+
		"<td><div id='restoreSelectSurface"+tn+"' style='display:none;'><select name='selectRestoreType' value='"+tn+"' id='restoreTypeSelect"+tn+"'>"+
		"<option value='AM'>AM</option>"+
		"<option value='CO'>CO</option>"+
		"<option value='GI'>GI</option>"+
		"<option value='TF'>TF</option>"+
		"</select></div></td></tr>"+
		"<tr><td>Mesial</td><td><div id='caries_surfaces"+tn+"mesial' style='display:inline;'><input type='checkbox' name='mesialcaries' value='"+ tn +"' id='mesial"+tn+"' onclick='showvar(\"mesial\"+cariesSelectSurfaceid,mesialformid);drawConditionMini(\"caries\", \"mesial\", "+tn +") '  /></div></td>	"+"<td><div id='mesialcariesSelectSurface"+tn+"' style='display:none;'><select name='selectCaries' value='"+tn+"' id='cariesSelect"+tn+"'>"+"<option value='restorable'>Restorable</option>"+"<option value='nonrestorable'>Non-Restorable</option>"+"</select></div></td>" +
		"	<td></td>		<td><div id='recurrent_surfaces"+tn+"mesial' style='display:inline;'><input type='checkbox' name='mesialrecurrent' value='"+ tn +"' id='remesial"+tn+"' onclick='showvar(\"mesial\"+recurrentSelectSurfaceid,remesialformid);drawConditionMini(\"recurrent\", \"mesial\", "+tn +") '  /></div></td>	"+ "<td><div id='mesialrecurrentSelectSurface"+tn+"' style='display:none;'><select name='selectRecurrent' value='"+tn+"' id='recurrentSelect"+tn+"'>"+"<option value='restorable'>Restorable</option>"+"<option value='nonrestorable'>Non-Restorable</option>"+"</select></div></td>"+
	"	<td></td> <td><div id='restoration_surfaces"+tn+"mesial' style='display:none;'><input type='checkbox' name='mesialrestoration' value='"+ tn +"' id='restorationmesial"+tn+"' onclick='drawConditionMini(\"restoration\", \"mesial\", "+tn +") '  /></div></td></tr>"+
		
		
		
		
		
		"<tr><td>Distal</td><td><div id='caries_surfaces"+tn+"distal' style='display:inline;'><input type='checkbox' name='distalcaries' value='"+tn+"' id='distal"+tn+"' onclick='showvar(\"distal\"+cariesSelectSurfaceid,distalformid);drawConditionMini(\"caries\", \"distal\", " +tn +" )'/></div></td>	"+"<td><div id='distalcariesSelectSurface"+tn+"' style='display:none;'><select name='selectCaries' value='"+tn+"' id='cariesSelect"+tn+"'>"+
  "<option value='restorable'>Restorable</option>"+
  "<option value='nonrestorable'>Non-Restorable</option>"+
	"</select></div></td>" +	
	"<td></td>		<td><div id='recurrent_surfaces"+tn+"distal' style='display:inline;'><input type='checkbox' name='distalrecurrent' value='"+ tn +"' id='redistal"+tn+"' onclick='showvar(\"distal\"+recurrentSelectSurfaceid,redistalformid);drawConditionMini(\"recurrent\", \"distal\", "+tn +") '  /></div></td>	"+ "<td><div id='distalrecurrentSelectSurface"+tn+"' style='display:none;'><select name='selectRecurrent' value='"+tn+"' id='recurrentSelect"+tn+"'>"+"<option value='restorable'>Restorable</option>"+"<option value='nonrestorable'>Non-Restorable</option>"+"</select></div></td>"+
	"<td></td> <td><div id='restoration_surfaces"+tn+"distal' style='display:none;'><input type='checkbox' name='distalrestoration' value='"+ tn +"' id='restorationdistal"+tn+"' onclick='drawConditionMini(\"restoration\", \"distal\", "+tn +") '  /></div></td></tr>"+
		
		
		
		"<tr><td>Occlusal</td><td><div id='caries_surfaces"+tn+"occlusal' style='display:inline;'><input type='checkbox' name='occlusalcaries' value='"+ tn +"' id='occlusal"+tn+"' onclick='showvar(\"occlusal\"+cariesSelectSurfaceid,occlusalformid);drawConditionMini(\"caries\", \"occlusal\", "+tn +") '  /></div></td>	"+"<td><div id='occlusalcariesSelectSurface"+tn+"' style='display:none;'><select name='selectCaries' value='"+tn+"' id='cariesSelect"+tn+"'>"+
  "<option value='restorable'>Restorable</option>"+
  "<option value='nonrestorable'>Non-Restorable</option>"+
	"</select></div></td>" +	"	<td></td>		<td><div id='recurrent_surfaces"+tn+"occlusal' style='display:none;'><input type='checkbox' name='occlusalrecurrent' value='"+ tn +"' id='reocclusal"+tn+"' onclick='drawConditionMini(\"recurrent\", \"occlusal\", "+tn +") '  /></div></td>		<td></td> <td><div id='restoration_surfaces"+tn+"occlusal' style='display:none;'><input type='checkbox' name='occlusalrestoration' value='"+ tn +"' id='restorationocclusal"+tn+"' onclick='drawConditionMini(\"restoration\", \"occlusal\", "+tn +") '  /></div></td></tr>"+
		
		
		
		
		"<tr><td>Buccal</td><td><div id='caries_surfaces"+tn+"buccal' style='display:inline;'><input type='checkbox' name='buccalcaries' value='"+ tn +"' id='buccal"+tn+"' onclick='showvar(\"buccal\"+cariesSelectSurfaceid,buccalformid);drawConditionMini(\"caries\", \"buccal\", "+tn +") '/></div></td>"+"<td><div id='buccalcariesSelectSurface"+tn+"' style='display:none;'><select name='selectCaries' value='"+tn+"' id='cariesSelect"+tn+"'>"+
  "<option value='restorable'>Restorable</option>"+
  "<option value='nonrestorable'>Non-Restorable</option>"+
	"</select></div></td>" +	"	<td></td>			<td><div id='recurrent_surfaces"+tn+"buccal' style='display:none;'><input type='checkbox' name='buccalrecurrent' value='"+ tn +"' id='rebuccal"+tn+"' onclick='drawConditionMini(\"recurrent\", \"buccal\", "+tn +") '  /></div></td>		<td></td> <td><div id='restoration_surfaces"+tn+"buccal' style='display:none;'><input type='checkbox' name='buccalrestoration' value='"+ tn +"' id='restorationbuccal"+tn+"' onclick='drawConditionMini(\"restoration\", \"buccal\", "+tn +") '  /></div></td></tr>"+
		
		
		
		
		"<tr><td>Lingual</td><td><div id='caries_surfaces"+tn+"lingual' style='display:inline;'><input type='checkbox' name='lingualcaries' value='"+ tn +"' id='lingual"+tn+"' onclick='showvar(\"lingual\"+cariesSelectSurfaceid,lingualformid);drawConditionMini(\"caries\", \"lingual\", "+tn +") '  /></div>	</td>	"+"<td><div id='lingualcariesSelectSurface"+tn+"' style='display:none;'><select name='selectCaries' value='"+tn+"' id='cariesSelect"+tn+"'>"+
  "<option value='restorable'>Restorable</option>"+
  "<option value='nonrestorable'>Non-Restorable</option>"+
	"</select></div></td>" +	"	<td></td><td><div id='recurrent_surfaces"+tn+"lingual' style='display:none;'><input type='checkbox' name='lingualrecurrent' value='"+ tn +"' id='relingual"+tn+"' onclick='drawConditionMini(\"recurrent\", \"lingual\", "+tn +") '/></div</td>		<td></td> <td><div id='restoration_surfaces"+tn+"lingual' style='display:none;'><input type='checkbox' name='lingualrestoration' value='"+ tn +"' id='restorationlingual"+tn+"' onclick='drawConditionMini(\"restoration\", \"lingual\", "+tn +") '  /></div></td></tr>"+
		"</table></div><hr>"+	
		"<br><input type='checkbox' name='toothAll' value='"+tn+"' id='alltooth"+tn+"' onclick='showAllTooth()'><b>Whole Tooth</b>"+
		"<div id='all_tooth_surfaces"+tn+"' style='display:none;'><table><tr>"+
		"<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type='checkbox' name='extracted' value='"+tn+"' id='extracted"+tn+"' onclick='drawConditionMini2(\"extracted\")',"+tn +">Extracted</td>"+
		"<td><input type='checkbox' name='missing' value='"+tn+"' id='missing"+tn+"' onclick='drawConditionMini2(\"missing\","+tn +")'>Missing</td>"+
		"<td><input type='checkbox' name='unerupted' value='"+tn+"' id='unerupted"+tn+"' onclick='drawConditionMini2(\"unerupted\","+tn +")'>Unerupted</td>"+
		"<td><input type='checkbox' name='impacted' value='"+tn+"' id='impacted"+tn+"' onclick='drawConditionMini2(\"impacted\","+tn +")'>Impacted</td>"+
		"</tr><tr>"+
		"<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type='checkbox' name='extrusion' value='"+tn+"' id='extrusion"+tn+"' onclick='drawConditionMini2(\"extrusion\","+tn +")'>Extrusion</td>"+
		"<td><input type='checkbox' name='intrusion' value='"+tn+"' id='intrusion"+tn+"' onclick='drawConditionMini2(\"intrusion\","+tn +")'>Intrusion</td>"+
		"<td><input type='checkbox' name='mesialdrift' value='"+tn+"' id='mesialdrift"+tn+"' onclick='drawConditionMini2(\"mesialdrift\","+tn +")'>Mesial Drift Rotation</td>"+
		"<td><input type='checkbox' name='distaldrift' value='"+tn+"' id='distaldrift"+tn+"' onclick='drawConditionMini2(\"distaldrift\","+tn +")'>Distal Drift Rotation</td>"+
		"<td><input type='checkbox' name='rotation' value='"+tn+"' id='rotation"+tn+"' onclick='drawConditionMini2(\"rotation\","+tn +")'>Rotation</td>"+
		"</tr>"+
		"<tr>"+
		"<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type='checkbox' name='postcore' value='"+tn+"' id='postcore"+tn+"' onclick='drawConditionMini3(\"postcore\","+tn +")'>Post Core Crown</td>"+
		"<td><input type='checkbox' name='acrylic' value='"+tn+"' id='acrylic"+tn+"' onclick='drawConditionMini3(\"acrylic\","+tn +")'>Acrylic Crown</td>"+
		"<td><input type='checkbox' name='metal' value='"+tn+"' id='metal"+tn+"' onclick='drawConditionMini3(\"metal\","+tn +")'>Metal Crown</td>"+
		"<td><input type='checkbox' name='porcelain' value='"+tn+"' id='porcelain"+tn+"' onclick='drawConditionMini3(\"porcelain\","+tn +")'>Porcelain</td>"+
		
		"</tr>"+
		"<tr>"+
		"<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type='checkbox' name='removablepartial' value='"+tn+"' id='removablepartial"+tn+"' onclick='drawConditionMini3(\"removablepartial\","+tn +")'>Removable Partial Denture</td>"+
		"<td><input type='checkbox' name='fixedbridge' value='"+tn+"' id='fixedbridge"+tn+"' onclick='drawConditionMini3(\"fixedbridge\","+tn +")'>Fixed Bridged</td>"+
		"<td><input type='checkbox' name='rootcanal' value='"+tn+"' id='rootcanal"+tn+"' onclick='drawConditionMini3(\"rootcanal\","+tn +")'>Root Canal Treatment</td>"+
		"<td><input type='checkbox' name='porcelainfused' value='"+tn+"' id='porcelainfused"+tn+"' onclick='drawConditionMini3(\"porcelainfused\","+tn +")'>Porcelain Fused to Metal</td>"+
		"<td><input type='checkbox' name='pitfissure' value='"+tn+"' id='pitfissure"+tn+"' onclick='drawConditionMini3(\"pitfissure\","+tn +")'>Pit and Fissure Sealants</td>"+

		"</tr>"+
		"</table></div>"+
		"</div>" +"<div id='fade" +tn+ "' class='black_overlay'></div>");		}	}}
		
function drawTeeth(ctx33, x1, y1) {		
	var width1 = 70;
	var width2 = 30;
	var space1 = 5;
	var space2 = 45;
	var space3 = 75;
	var lineX1 = x1-25;
	var lineY1 = 40;
	var lineX2 = x1+25;
	var lineY2 = 90;		
	var verticalSpace = 120;
	var counter1 = 0;
	var counter2 = 0;			
	for (counter1=0; counter1<16; counter1++) {				
		ctx33.lineWidth="1.5";
		ctx33.beginPath();		
		ctx33.arc(x1,y1+verticalSpace,width1/2,0,Math.PI*2,false);		
		ctx33.closePath();
		ctx33.strokeStyle="#000";
		ctx33.stroke();		
		ctx33.beginPath();
		ctx33.arc(x1,y1+verticalSpace,width2/2,0,Math.PI*2,false);	
		ctx33.closePath();
		ctx33.strokeStyle="#000";
		ctx33.stroke();				
		ctx33.moveTo(lineX1, lineY1+verticalSpace);		ctx33.lineTo(lineX2, lineY2+verticalSpace);	
		ctx33.stroke();		ctx33.moveTo(lineX2, lineY1+verticalSpace);		
		ctx33.lineTo(lineX1, lineY2+verticalSpace);		ctx33.stroke();			
		ctx26.beginPath();		ctx26.arc(x1,y1+verticalSpace,14,0,Math.PI*2,false);	
		ctx26.closePath();				ctx26.fillStyle="#FFF";		ctx26.fill();			
		ctx33.beginPath();		ctx33.arc(x1,y1,width1/2,0,Math.PI*2,false);	
		ctx33.closePath();		ctx33.stroke();				ctx33.beginPath();		
		ctx33.arc(x1,y1,width2/2,0,Math.PI*2,false);		ctx33.closePath();		
		ctx33.stroke();				ctx33.moveTo(lineX1, lineY1);	
		ctx33.lineTo(lineX2, lineY2);		ctx33.moveTo(lineX2, lineY1);	
		ctx33.lineTo(lineX1, lineY2);		ctx33.stroke();						
		ctx26.beginPath();		ctx26.arc(x1,y1,14,0,Math.PI*2,false);		
		ctx26.closePath();						ctx26.fillStyle="#FFF";		ctx26.fill();	
		x1 = x1 + width1 + space1;			lineX1 = lineX1 + space3;			
		lineX2 = lineX2 + space3;	}}
		
function drawAll(x, y, div) {
	drawTeeth(ctx25, x, y); 
	drawDivision(div); 
	redraw(x,y);
}
		
function init(x, y, div) {
	layer1 = document.getElementById("layer1");
	ctx1 = layer1.getContext("2d");
	layer2 = document.getElementById("layer2");
	ctx2 = layer2.getContext("2d");
	layer3 = document.getElementById("layer3");
	ctx3 = layer3.getContext("2d");
	layer4 = document.getElementById("layer4");
	ctx4 = layer4.getContext("2d");
	layer5 = document.getElementById("layer5");
	ctx5 = layer5.getContext("2d");
	layer6 = document.getElementById("layer6");
	ctx6 = layer6.getContext("2d");
	layer7 = document.getElementById("layer7");
	ctx7 = layer7.getContext("2d");
	layer8 = document.getElementById("layer8");
	ctx8 = layer8.getContext("2d");
	layer9 = document.getElementById("layer9");
	ctx9 = layer9.getContext("2d");
	layer10 = document.getElementById("layer10");
	ctx10 = layer10.getContext("2d");
	layer11 = document.getElementById("layer11");
	ctx11 = layer11.getContext("2d");
	layer12 = document.getElementById("layer12");
	ctx12 = layer12.getContext("2d");
	layer13 = document.getElementById("layer13");
	ctx13 = layer13.getContext("2d");
	layer14 = document.getElementById("layer14");
	ctx14 = layer14.getContext("2d");
	layer15 = document.getElementById("layer15");
	ctx15 = layer15.getContext("2d");
	layer16 = document.getElementById("layer16");
	ctx16 = layer16.getContext("2d");
	layer17 = document.getElementById("layer17");
	ctx17 = layer17.getContext("2d");
	layer18 = document.getElementById("layer18");
	ctx18 = layer18.getContext("2d");
	layer19 = document.getElementById("layer19");
	ctx19 = layer19.getContext("2d");
	layer20 = document.getElementById("layer20");
	ctx20 = layer20.getContext("2d");
	layer21 = document.getElementById("layer21");
	ctx21 = layer21.getContext("2d");
	layer22 = document.getElementById("layer22");
	ctx22 = layer22.getContext("2d");
	layer23 = document.getElementById("layer23");
	ctx23 = layer23.getContext("2d");
	layer24 = document.getElementById("layer24");
	ctx24 = layer24.getContext("2d");
	layer25 = document.getElementById("layer25");
	ctx25 = layer25.getContext("2d");
	layer26 = document.getElementById("layer26");
	ctx26 = layer26.getContext("2d");
	layer27 = document.getElementById("layer27");
	ctx27 = layer27.getContext("2d");
	layer28 = document.getElementById("layer28");
	ctx28 = layer28.getContext("2d");
	layer29 = document.getElementById("layer29");
	ctx29 = layer29.getContext("2d");
	layer30 = document.getElementById("layer30");
	ctx30 = layer30.getContext("2d");
	layer31 = document.getElementById("layer31");
	ctx31 = layer31.getContext("2d");
	layer32 = document.getElementById("layer32");
	ctx32 = layer32.getContext("2d");
	layer33 = document.getElementById("layer33");
	ctx33 = layer33.getContext("2d");
	layer34 = document.getElementById("layer34");
	ctx34 = layer34.getContext("2d");
	layer35 = document.getElementById("layer35");
	ctx35 = layer35.getContext("2d");
	layer36 = document.getElementById("layer36");
	ctx36 = layer36.getContext("2d");
	layer37 = document.getElementById("layer37");
	ctx37 = layer37.getContext("2d");
	layer38 = document.getElementById("layer38");
	ctx38 = layer38.getContext("2d");
	layer39 = document.getElementById("layer39");
	ctx39 = layer39.getContext("2d");
	layer40 = document.getElementById("layer40");
	ctx40 = layer40.getContext("2d");
	layer41 = document.getElementById("layer41");
	ctx41 = layer41.getContext("2d");
	layer42 = document.getElementById("layer42");
	ctx42 = layer42.getContext("2d");
	layer43 = document.getElementById("layer43");
	ctx43 = layer43.getContext("2d");
	layer44 = document.getElementById("layer44");
	ctx44 = layer44.getContext("2d");
	layer45 = document.getElementById("layer45");
	ctx45 = layer45.getContext("2d");
	layer46 = document.getElementById("layer46");
	ctx46 = layer46.getContext("2d");
	layer47 = document.getElementById("layer47")
	ctx47 = layer47.getContext("2d");
	layer48 = document.getElementById("layer48");
	ctx48 = layer48.getContext("2d");
	layer49 = document.getElementById("layer49");
	ctx49 = layer49.getContext("2d");
	layer50 = document.getElementById("layer50");
	ctx50 = layer50.getContext("2d");
	layer51 = document.getElementById("layer51");
	ctx51 = layer51.getContext("2d");
	layer52 = document.getElementById("layer52");
	ctx52 = layer52.getContext("2d");
	layer53 = document.getElementById("layer53");
	ctx53 = layer53.getContext("2d");
	layer54 = document.getElementById("layer54");
	ctx54 = layer54.getContext("2d");
	layer55 = document.getElementById("layer55");
	ctx55 = layer55.getContext("2d");
	layer56 = document.getElementById("layer56");
	ctx56 = layer56.getContext("2d");
	layer57 = document.getElementById("layer57");
	ctx57 = layer57.getContext("2d");
	layer58 = document.getElementById("layer58");
	ctx58 = layer58.getContext("2d");
	layer59 = document.getElementById("layer59");
	ctx59 = layer59.getContext("2d");
	layer60 = document.getElementById("layer60");
	ctx60 = layer60.getContext("2d");
	layer61 = document.getElementById("layer61");
	ctx61 = layer61.getContext("2d");
	layer62 = document.getElementById("layer62");
	ctx62 = layer62.getContext("2d");
	
	
	
	//drawTeeth(ctx25, x, y);
	drawAll(x, y, div);
	
	layer63 = document.getElementById("layer63");
	ctx63 = layer63.getContext("2d");
	
	layer64 = document.getElementById("layer64");
	ctx64 = layer64.getContext("2d");
	
	layer65 = document.getElementById("layer65");
	ctx65 = layer65.getContext("2d");
	
	layer66 = document.getElementById("layer66");
	ctx66 = layer66.getContext("2d");
	
	layer67 = document.getElementById("layer67");
	ctx67 = layer67.getContext("2d");
	
	layer68 = document.getElementById("layer68");
	ctx68 = layer68.getContext("2d");
	
	drawOthers(x,y,ctx63,ctx64,ctx65,ctx66);
	drawLastBorder(x,y,ctx67,ctx68);
}

function getXvalSTAMP(toothnumber) {	
var space = 10;	
if((toothnumber == 18) || (toothnumber == 48)){		
var toothvalue = 1;		x = toothvalue * 35;	}	
else {		
if((toothnumber == 17) || (toothnumber == 47)) {			
toothvalue = 2;		
}		
if((toothnumber == 16) || (toothnumber == 46)) {			
toothvalue = 3;		}		
if((toothnumber == 15) || (toothnumber == 45)) {
			toothvalue = 4;		}		
			if((toothnumber == 14) || (toothnumber == 44)) {	
			toothvalue = 5;		}	
			if((toothnumber == 13) || (toothnumber == 43)) {
			toothvalue = 6;		}	
			if((toothnumber == 12) || (toothnumber == 42)) {	
			toothvalue = 7;		}	
			if((toothnumber == 11) || (toothnumber == 41)) {	
			toothvalue = 8;		}	
			if((toothnumber == 21) || (toothnumber == 31)) {	
			toothvalue = 9;		}	
			if((toothnumber == 22) || (toothnumber == 32)) {	
			toothvalue = 10;		}	
			if((toothnumber == 23) || (toothnumber == 33)) {		
			toothvalue = 11;		}	
			if((toothnumber == 24) || (toothnumber == 34)) {	
			toothvalue = 12;		}	
			if((toothnumber == 25) || (toothnumber == 35)) {	
			toothvalue = 13;		}	
			if((toothnumber == 26) || (toothnumber == 36)) {	
			toothvalue = 14;		}	
			if((toothnumber == 27) || (toothnumber == 37)) {	
			toothvalue = 15;		}	
			if((toothnumber == 28) || (toothnumber == 38)) {	
			toothvalue = 16;		}	
			x = ((toothvalue-1) * 74.5) + 35;
			}
					

			X = x;}
		
function getYvalSTAMP(toothnumber) {	if((toothnumber >= 11)&&(toothnumber <= 28)) {		y = 65;	}	else if ((toothnumber >= 31)&&(toothnumber <= 48)) {		y = 185;	}	Y = y;}

function drawLastBorder(x,y,ctx67,ctx68){

		ctx67.strokeStyle="#D9D9D9";
		ctx67.lineWidth = "2";
		ctx67.moveTo(1220,y-70);
		ctx67.lineTo(1220,y+5);
		ctx67.stroke();
		
		ctx68.strokeStyle="#D9D9D9";
		ctx68.lineWidth = "2";
		ctx68.moveTo(1220,y-70);
		ctx68.lineTo(1220,y+5);
		ctx68.stroke();
		
	//	alert("boom");
}
		
function drawOthers(x,y,ctx63,ctx64,ctx65,ctx66){
var x_move1=74;
var x_move2=74;

var x_init1=x-30;
var x_init2=x-30;

var conditionAll=['restomesial', 'restodistal','restoocclusal','restolingual','restobuccal'];
var  typeAll=['AM','CO','GI','TF'];
var cariesAll=['mesial', 'distal','occlusal','lingual','buccal'];
var recAll=['remesial', 'redistal','reocclusal','relingual','rebuccal'];
var  carType=['restorable','nonrestorable'];

ctx65.font="12px Arial";
ctx66.font="12px Arial";
/*
for (counter1=11; counter1<29; counter1++) {		
		ctx63.strokeStyle="#D9D9D9";
		ctx63.lineWidth = "2";
		ctx63.moveTo(x_init,y-70);
		ctx63.lineTo(x_init,y+5);
		ctx63.stroke();
		
		ctx64.strokeStyle="#D9D9D9";
		ctx64.lineWidth = "2";
		ctx64.moveTo(x_init,y-70);
		ctx64.lineTo(x_init,y+5);
		ctx64.stroke();
		x_init=x_init+x_move;
	}
		*/

		for(a = 0; a < 4; a++) {
		for(b = 18; b > 10; b--) {
			c = b + (a * 10);
			
			getXvalSTAMP(c);
			getYval(c);
			index_x=0;
			index_y=0;
		//	alert(X);
			
		if(c>10 && c<29){	
		ctx63.strokeStyle="#D9D9D9";
		ctx63.lineWidth = "2";
		ctx63.moveTo(x_init1,y-70);
		ctx63.lineTo(x_init1,y+5);
		ctx63.stroke();
		
		if(document.getElementById("postcore"+c).checked == true){
			ctx65.fillStyle="#000";

			ctx65.fillText("PCC,",X,70-index_y);	
			index_y=+index_y+15;

		}
		if(document.getElementById("acrylic"+c).checked == true){
			ctx65.fillStyle="#000";
		

			ctx65.fillText("C(A),",X,70-index_y);	
			index_y=+index_y+15;

		}
		if(document.getElementById("metal"+c).checked == true){
			ctx65.fillText("C(M),",X,70-index_y);	
			index_y=+index_y+15;

		}
		if(document.getElementById("porcelain"+c).checked == true){
			ctx65.fillStyle="#000";

			ctx65.fillText("C(P),",X,70-index_y);	
			index_y=+index_y+15;

		}
		
		if(document.getElementById("removablepartial"+c).checked == true){
		if(index_y>60){
				index_x=index_x+35;
				index_y=0;
			}
			ctx65.fillStyle="#000";

			ctx65.fillText("RPD,",X+index_x,70-index_y);	
			index_y=+index_y+15;

		}
		if(document.getElementById("fixedbridge"+c).checked == true){
		if(index_y>60){
				index_x=index_x+35;
				index_y=0;
			}
			ctx65.fillStyle="#000";

			ctx65.fillText("FPD,",X+index_x,70-index_y);	
			index_y=+index_y+15;

		}
		if(document.getElementById("rootcanal"+c).checked == true){
		if(index_y>60){
				index_x=index_x+35;
				index_y=0;
			}
			ctx65.fillStyle="#000";

			
			ctx65.fillText("RCT,",X+index_x,70-index_y);	
			index_y=+index_y+15;

		}
		if(document.getElementById("porcelainfused"+c).checked == true){
		if(index_y>60){
				index_x=index_x+35;
				index_y=0;
			}
			ctx65.fillStyle="#000";

			ctx65.fillText("PFM,",X+index_x,70-index_y);	
			index_y=+index_y+15;

		}
		if(document.getElementById("pitfissure"+c).checked == true){
		if(index_y>60){
				index_x=index_x+35;
				index_y=0;
			}
			ctx65.fillStyle="#000";

			
			ctx65.fillText("PFS,",X+index_x,70-index_y);	
			index_y=+index_y+15;

		}
	//caries
		if(document.getElementById("mesial"+c).checked == true || document.getElementById("distal"+c).checked == true ||
		document.getElementById("occlusal"+c).checked == true|| document.getElementById("lingual"+c).checked == true || 
		document.getElementById("buccal"+c).checked == true){		
		for (cLength=0; cLength<cariesAll.length; cLength++) {		
				for (typeLength=0; typeLength<carType.length; typeLength++) {		
		if(index_y>60){
				index_x=index_x+35;
				index_y=0;
				}
			ctx65.fillStyle="red";
				var condLength= cariesAll[cLength].length;

		if(document.getElementById(cariesAll[cLength]+c).checked == true && 
	document.getElementById(cariesAll[cLength]+"cariesSelect"+c).value==carType[typeLength]+c ){
			if(carType[typeLength]=="restorable")
					ctx65.fillText("O ("+cariesAll[cLength].toUpperCase().charAt(0)+"),",X+index_x,70-index_y);	
				else
					ctx65.fillText("/ ("+cariesAll[cLength].toUpperCase().charAt(0)+"),",X+index_x,70-index_y);	
					
					index_y=+index_y+15;
			}
		
				}
			}
		
		}//end caries
		
		//recurrent
		if(document.getElementById("remesial"+c).checked == true || document.getElementById("redistal"+c).checked == true ||
		document.getElementById("reocclusal"+c).checked == true|| document.getElementById("relingual"+c).checked == true || 
		document.getElementById("rebuccal"+c).checked == true){		

		for (rLength=0; rLength<recAll.length; rLength++) {		
				for (typeLength=0; typeLength<carType.length; typeLength++) {		
		if(index_y>60){
				index_x=index_x+35;
				index_y=0;
				}
			ctx65.fillStyle="green";
				var condLength= recAll[rLength].length;

		if(document.getElementById(recAll[rLength]+c).checked == true && 
	document.getElementById(recAll[rLength].substring(2,condLength)+"recurrentSelect"+c).value==carType[typeLength]+c ){

				if(carType[typeLength]=='restorable')
					ctx65.fillText("O ("+recAll[rLength].charAt(2).toUpperCase()+"),",X+index_x,70-index_y);	
				else
					ctx65.fillText("/ ("+recAll[rLength].charAt(2).toUpperCase()+"),",X+index_x,70-index_y);	

					index_y=+index_y+15;
			}
		
				}
			}
		
		}//end recurrent		
	
	
		//RESTO
		if(document.getElementById("restomesial"+c).checked == true || document.getElementById("restodistal"+c).checked == true ||
		document.getElementById("restoocclusal"+c).checked == true|| document.getElementById("restolingual"+c).checked == true || 
		document.getElementById("restobuccal"+c).checked == true){			
			for (restoCheck=0; restoCheck<conditionAll.length; restoCheck++) {		
				for (typeResto=0; typeResto<typeAll.length; typeResto++) {		
				if(index_y>60){
				index_x=index_x+35;
				index_y=0;
				}
			ctx65.fillStyle="blue";
				var condLength= conditionAll[restoCheck].length;
				
	if(document.getElementById(conditionAll[restoCheck]+c).checked == true && 
	document.getElementById(conditionAll[restoCheck].substring(5,condLength)+"restoreTypeSelect"+c).value==typeAll[typeResto]+c ){
				ctx65.fillText(typeAll[typeResto]+"("+conditionAll[restoCheck].toUpperCase().charAt(5)+"),",X+index_x,70-index_y);	
					
					index_y=+index_y+15;
			}
		}
	}
}	
	//END FOR RESTO	
		//START FOR SERVICE NEEDED


		// END FOR SERVICE NEEDED
			x_init1=x_init1+x_move1;	
		}
//LOWERPART
		if(c>30 && c<49){
		ctx64.strokeStyle="#D9D9D9";
		ctx64.lineWidth = "2";
		ctx64.moveTo(x_init2,y-70);
		ctx64.lineTo(x_init2,y+5);
		ctx64.stroke();
		
		if(document.getElementById("postcore"+c).checked == true){	
			ctx66.fillStyle="#000";

			ctx66.fillText("PCC,",X,70-index_y);	
			index_y=+index_y+15;
		}
		if(document.getElementById("acrylic"+c).checked == true){
			ctx66.fillStyle="#000";

			ctx66.fillText("C(A),",X,70-index_y);
			index_y=+index_y+15;
			
		}
		if(document.getElementById("metal"+c).checked == true){
			ctx66.fillStyle="#000";

			ctx66.fillText("C(M),",X,70-index_y);
			index_y=+index_y+15;

			}
		if(document.getElementById("porcelain"+c).checked == true){
			ctx66.fillStyle="#000";
		
			ctx66.fillText("C(P),",X,70-index_y);	
			index_y=+index_y+15;

			}
		if(document.getElementById("removablepartial"+c).checked == true){
		if(index_y>60){
				index_x=index_x+35;
				index_y=0;
			}
			ctx66.fillStyle="#000";

			ctx66.fillText("RPD,",X+index_x,70-index_y);	
			index_y=+index_y+15;
			}
		if(document.getElementById("fixedbridge"+c).checked == true){
		if(index_y>60){
				index_x=index_x+35;
				index_y=0;
			}
			ctx66.fillStyle="#000";

			ctx66.fillText("FPD,",X+index_x,70-index_y);	
			index_y=+index_y+15;

			}
		if(document.getElementById("rootcanal"+c).checked == true){
		if(index_y>60){
				index_x=index_x+35;
				index_y=0;
			}
			ctx66.fillStyle="#000";

			ctx66.fillText("RCT,",X+index_x,70-index_y);	
			index_y=+index_y+15;

			}
		if(document.getElementById("porcelainfused"+c).checked == true){
		if(index_y>60){
				index_x=index_x+35;
				index_y=0;
			}
			ctx66.fillStyle="#000";

			ctx66.fillText("PFM,",X+index_x,70-index_y);	
			index_y=+index_y+15;

			}
		if(document.getElementById("pitfissure"+c).checked == true){
		if(index_y>60){
				index_x=index_x+35;
				index_y=0;
			}
			ctx66.fillStyle="#000";

			ctx66.fillText("PFS,",X+index_x,70-index_y);	
			index_y=+index_y+15;

			}
			
	//caries
		if(document.getElementById("mesial"+c).checked == true || document.getElementById("distal"+c).checked == true ||
		document.getElementById("occlusal"+c).checked == true|| document.getElementById("lingual"+c).checked == true || 
		document.getElementById("buccal"+c).checked == true){		
		for (cLength=0; cLength<cariesAll.length; cLength++) {		
				for (typeLength=0; typeLength<carType.length; typeLength++) {		
		if(index_y>60){
				index_x=index_x+35;
				index_y=0;
				}
			ctx66.fillStyle="red";
				var condLength= cariesAll[cLength].length;

		if(document.getElementById(cariesAll[cLength]+c).checked == true && 
	document.getElementById(cariesAll[cLength]+"cariesSelect"+c).value==carType[typeLength]+c ){
			if(carType[typeLength]=="restorable")
					ctx66.fillText("O ("+cariesAll[cLength].toUpperCase().charAt(0)+"),",X+index_x,70-index_y);	
				else
					ctx66.fillText("/ ("+cariesAll[cLength].toUpperCase().charAt(0)+"),",X+index_x,70-index_y);	
					
					index_y=+index_y+15;
			}
		
				}
			}
		
		}//end caries
		
	//recurrent
		if(document.getElementById("remesial"+c).checked == true || document.getElementById("redistal"+c).checked == true ||
		document.getElementById("reocclusal"+c).checked == true|| document.getElementById("relingual"+c).checked == true || 
		document.getElementById("rebuccal"+c).checked == true){		

		for (rLength=0; rLength<recAll.length; rLength++) {		
				for (typeLength=0; typeLength<carType.length; typeLength++) {		
		if(index_y>60){
				index_x=index_x+35;
				index_y=0;
				}
			ctx66.fillStyle="green";
				var condLength= recAll[rLength].length;

		if(document.getElementById(recAll[rLength]+c).checked == true && 
	document.getElementById(recAll[rLength].substring(2,condLength)+"recurrentSelect"+c).value==carType[typeLength]+c ){

				if(carType[typeLength]=='restorable')
					ctx66.fillText("O ("+recAll[rLength].charAt(2).toUpperCase()+"),",X+index_x,70-index_y);	
				else
					ctx66.fillText("/ ("+recAll[rLength].charAt(2).toUpperCase()+"),",X+index_x,70-index_y);	

					index_y=+index_y+15;
			}
				}
			}
		//		alert("boom");

		}//end recurrent		
	
	
	
			
	//start of resto		
if(document.getElementById("restomesial"+c).checked == true || document.getElementById("restodistal"+c).checked == true ||
		document.getElementById("restoocclusal"+c).checked == true|| document.getElementById("restolingual"+c).checked == true || 
		document.getElementById("restobuccal"+c).checked == true){			
			for (restoCheck=0; restoCheck<conditionAll.length; restoCheck++) {		
				for (typeResto=0; typeResto<typeAll.length; typeResto++) {		
				if(index_y>60){
				index_x=index_x+35;
				index_y=0;
				}
			ctx66.fillStyle="blue";
				var condLength= conditionAll[restoCheck].length;
					//				alert(conditionAll[restoCheck].substring(5,condLength)+"restoreTypeSelect"+c);

					//	alert(document.getElementById(conditionAll[restoCheck].substring(5,condLength)+"restoreTypeSelect"+c).value);
				//distalrestoreSelectSurface
	if(document.getElementById(conditionAll[restoCheck]+c).checked == true && 
	document.getElementById(conditionAll[restoCheck].substring(5,condLength)+"restoreTypeSelect"+c).value==typeAll[typeResto]+c ){
				ctx66.fillText(typeAll[typeResto]+"("+conditionAll[restoCheck].toUpperCase().charAt(5)+"),",X+index_x,70-index_y);	
					
					index_y=+index_y+15;
			}
		}
	}
}//end of resto
						x_init2=x_init2+x_move2;	
		}//end of else
			
	}//end of 2nd loop
			

}//end of 1st loop


}
