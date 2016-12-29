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
        
	}
	else if (!email.match(regex)){
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

function validirajKontakt(){
    poruka=document.getElementById("porukaKontakt").value;
    if (trimfield(poruka)=="")
    {
        tekst="Ne mozete poslati praznu poruku.";
    }
    else{
        tekst="";
    }
    document.getElementById("greskaKontakt").innerHTML=tekst;
}

function trimfield(str) 
{ 
    return str.replace(/^\s+|\s+$/g,''); 
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

function search() {
    
    var input, filter, ul, li, a, i;
    input = document.getElementById('searchInput');
    filter = input.value.toUpperCase();
   

    var parent = document.getElementById('govornici');
    var brojac=0;
    itemDivs=parent.children;
    for(var i = 0; i < itemDivs.length; i++) {   
        
            kolona=itemDivs[i].children[1];
            ime=kolona.firstChild.nextSibling;
            mjesto=kolona.children[0].nextSibling.nextSibling;
            
            if (brojac>=10)
            {
                itemDivs[i].style.display = "none";   
            }
            else if (ime.innerHTML.toUpperCase().indexOf(filter) > -1 || mjesto.innerHTML.toUpperCase().indexOf(filter) > -1) {
                itemDivs[i].style.display = "";
                brojac=brojac+1;
            } 

            else {
                itemDivs[i].style.display = "none";
            }
        
   
    }
 


}

function searchadmin() {
    
    var input, filter, ul, li, a, i;
    input = document.getElementById('searchInput');
    filter = input.value.toUpperCase();
   

    var parent = document.getElementById('govornici');
    var brojac=0;
    itemDivs=parent.children;
    for(var i = 0; i < itemDivs.length; i++) {   
        
            forma=itemDivs[i].children[1];
            kolona=forma.children[1];
            ime=kolona.firstChild.nextSibling;
            mjesto=kolona.children[0].nextSibling.nextSibling;
            if (brojac>=10)
            {
                itemDivs[i].style.display = "none";   
            }
            else if (ime.value.toUpperCase().indexOf(filter) > -1 || mjesto.value.toUpperCase().indexOf(filter) > -1) {
                itemDivs[i].style.display = "";
                brojac=brojac+1;
            } 

            else {
                itemDivs[i].style.display = "none";
            }
        
   
    }
 


}



function searchBtn()
{
    var input, filter, ul, li, a, i;
    input = document.getElementById('searchInput');
    filter = input.value.toUpperCase();
   

    var parent = document.getElementById('govornici');
    
    itemDivs=parent.children;
    for(var i = 0; i < itemDivs.length; i++) {
        itemDivs[i].style.display = "";
    }
    for(var i = 0; i < itemDivs.length; i++) {   
        
            kolona=itemDivs[i].children[1];
            ime=kolona.firstChild.nextSibling;
            mjesto=kolona.children[0].nextSibling.nextSibling;
            
            
            if (ime.innerHTML.toUpperCase().indexOf(filter) > -1 || mjesto.innerHTML.toUpperCase().indexOf(filter) > -1) {
                itemDivs[i].style.display = "";
                
            } 

            else {
                itemDivs[i].style.display = "none";
            }
        
   
    }
}