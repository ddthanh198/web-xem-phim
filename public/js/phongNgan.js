var rate = 14.32;
function changeStar(){
	//console.log(this);
	var x = Math.round(rate/20);
	for(var i=1;i<=x&&x<6;i++){
		document.getElementById("star"+i).style.color="#fce903";
	}
}
// onload=changeStar();