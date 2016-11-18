var script = document.createElement('script');
script.src = 'skripta.js';
script.onload = function()
{};
document.head.appendChild(script);

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

    button=document.getElementById("registracijaBtn");
    
	var regex=/^([a-zA-Z0-9_\-\.]+)@([a-zA-Z0-9_\-\.]+)\.([a-zA-Z]{2,5})$/;
	if (user=="" || pass1=="" || pass2=="" || email==""){
		tekst="Unesite podatke u sva polja.";
        button.disabled=true;
	}
	else if (!email.match(regex)){
		tekst="E-mail nije validan.";
        button.disabled=true;
	}

	else if (pass1!=pass2) {
        tekst = "Unesene lozinke nisu iste.";
        button.disabled=true;
    } 
    
    else{
    	tekst="";
        button.disabled=false;
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

function loadPage(stranica) {
	
    var ajax = new XMLHttpRequest();	
	ajax.onreadystatechange = function () {
        if (ajax.readyState == 4 && ajax.status == 200)
        {
            document.open();
            document.write(ajax.responseText);
            document.close();
        }
        if (ajax.readyState == 4 && ajax.status == 404)
        alert("error");
       
    }   
    ajax.open("GET",stranica, true);
	     
	ajax.send();

}
