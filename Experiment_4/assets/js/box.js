
function change(){

var button = document.getElementById("bttn");
var chkbox = document.getElementById("box");
if (chkbox.checked == true){
	button.disabled = false;
}
else{
	button.disabled = true;
}
}

function myFunction(){
	document.getElementById("bttn").disabled = true;
}