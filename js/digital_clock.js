
/*setInterval(digitalclock,1000);

function digitalclock(){
	var time=new Date();
	var H=time.getHours();
	var M=time.getMinutes();
	var S=time.getSeconds();
	var AP="AM";
	

	
	if(H >= 12){
		AP="PM";
		H=H-12;
	}


	else if(H <= 12){
		AP="AM";
		H=12;    
	}

	
	

	if(H < 10){
		
		H = 0 + H;
	}
	
	
	
	if(M < 10){
		M="0" + M;
	}
	
	if(S < 10){
		S="0" + S;
	}
	
	var displaystyle= H + ":" + M + ":" + S + " " + AP;
	
	document.getElementById("watch").innerHTML=displaystyle;

}

*/

$(document).ready(function(){

    setInterval(function(){

       $("#watch").load("time.php");

    },1000);
});




