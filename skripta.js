function onclick_homeBtn(){
	window.location="index.html";
}

function onclick_meniBtn(){
	var meni=document.getElementById("dropdownMeni");
	if (meni.style.visibility=='visible') {meni.style.visibility='hidden';}
	else {meni.style.visibility='visible';}

}