function enableButton(){
	
	if(document.getElementById("checkB").checked){
		document.getElementById("log").disabled=false;
	}
	
	else{
		document.getElementById("log").disabled=true;
	}
}