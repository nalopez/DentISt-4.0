function drawUpperDenture1(ctx30, ctx58, x1, y1) {

	alert("hi");

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
