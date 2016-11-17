function onclick_homeBtn(){
	window.location="index.html";
}

function onclick_meniBtn(){
	var meni=document.getElementById("dropdownMeni");
	if (meni.style.visibility=='visible') {meni.style.visibility='hidden';}
	else {meni.style.visibility='visible';}
}

function validirajLogin(){
	user=document.getElementById("loginUser").value;
	pass=document.getElementById("loginPass").value;
	if (user=="" && pass==""){
		tekst="Unesite podatke u sva polja.";

	}
	else if (user=="") {
        tekst = "Unesite korisničko ime.";
    } 
    else if (pass==""){
    	tekst="Unesite lozinku.";
    }
    else{
    	tekst="";
    }
    document.getElementById("greskaLogin").innerHTML = tekst;
}

function validirajRegistraciju(){
	user=document.getElementById("signupUser").value;
	email=document.getElementById("signupEmail").value;
	pass1=document.getElementById("signupPass1").value;
	pass2=document.getElementById("signupPass2").value;

	var regex=/\S+@\S+\.\S+/;
	if (user=="" || pass1=="" || pass2=="" || email==""){
		tekst="Unesite podatke u sva polja.";

	}
	else if (!regex.test(email)){
		tekst="E-mail nije validan.";
	}

	else if (pass1!=pass2) {
        tekst = "Unesene lozinke nisu iste.";
    } 
    
    else{
    	tekst="";
    }
    document.getElementById("greskaSignup").innerHTML = tekst;
}

function hover(element)
{
	element.style.opacity="0.7";
}

function exithover(element)
{
	element.style.opacity="1.0";
}

function otvorisliku(slika)
{
	var modal = document.getElementById('photoModal');
	var modalImg = document.getElementById("img01");

 	modal.style.display = "block";
    modalImg.src = slika.src;

}

window.onkeydown = function(event) {
    var modal = document.getElementById('photoModal');
    if (event.keyCode == 27) {
        modal.style.display="none";
    }
}

