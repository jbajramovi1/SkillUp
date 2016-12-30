# **SkillUp**
##Projekat na predmetu Web tehnologije
##Bajramović Jasmina, 16995
######SkillUp je web stranica na kojoj možete pronaći sve informacije o tzv. "mekim vještinama" (eng. **soft skills**), njihovoj važnosti i načinima na koje ih možete unaprijediti. :muscle:

**SPIRALA 1**<br />
-Urađene su sve stavke **Spirale 1**.<br />

-Nisam primjetila bugove, ali ono što planiram uraditi je collapsible meni za širinu ekrana manju od 768px.

Fajlovi: <br />
-index.html - početna stranica <br />
-softskills.html - stranica na kojoj će se nalaziti tekst o tome šta Soft skills predstavljaju <br />
-novosti.html - stranica sa novostima (člancima o pojedinim "mekim vještinama") <br />
-tedtalks.html - stranica sa youtube videima sa TedTalk seminara <br />
-kontakt.html - stranica sa kontakt informacijama i formom za ostavljanje poruke (maila) <br />
-login.html - stranica za prijavu <br />
-signup.html - stranica za registraciju <br />
-main.css - glavni css fajl<br />


**SPIRALA 2**<br />
-Urađene su sljedeće stavke **Spirale 2**:<br />
-Validacija polja formi za login i registraciju, sa ispisom odgovarajuće poruke<br />
-Dropdown meni za širinu ekrana manju od 768px.<br />
-Implementirana galerija sa traženom funkcionalnosti<br />
-Podstranice se učitavaju bez reloada cijele stranice (samo sadržaja), pomoću Ajaxa<br />

-Nisam primjetila bugove

Novi fajlovi koji su dodani:<br />
-galerija.html - stranica na kojoj je galerija sa motivacionim slikama<br />
-skripta.js - javascript fajl za koji se vežu svi html fajlovi <br />

**SPIRALA 3**<br />
-Urađene su sljedeće stavke **Spirale 3**:<br  />
-Napravila serijalizaciju podataka o govornicima u XML fajl govornici.xml . Adminu sam omogućila unos, uređivanje i brisanje podataka (govornika). Trenutno se username i pass za admina nalaze u fajlu admin.xml. Za ovaj zadatak dodala sam podstranicu Govornici (govornici.php) na kojoj je lista upisanih govornika te Admin panel (adminpanela.php) kojoj može pristupiti admin nakon što se loguje klikom na button "Admin panel". Prilikom upisa podataka o govornicima i ispisa u listu koristila sam funkciju htmlentities().<br />
-Omogućila adminu download podataka u obliku csv fajla. Admin može downloadovati ove podatke klikom na button "Preuzmi CSV" na podstranici Admin panel.<br />
-Omogućila generisanje pdf fajla sa podacima o govornicima. Moguće je preuzeti pdf na podstranici Govornici. Admin ovo može uraditi i na stranici Govornici(govornici.php) i Admin panel. Za generisanje pdf fajla koristila sam biblioteku fpdf.<br />
-Napravila opciju search na podstranici Govornici i Admin panel (pristup ima admin). Ispoštovano je sve što se tražilo u spirali što se tiče pretrage. Pretraga se vrši po poljima "Ime i prezime" i "Mjesto rodjenja" govornika.<br />
- Uspješno deployment na OpenShift (link-->http://skillup-skillup.44fs.preview.openshiftapps.com/ )<br />
- Sve podstranicu su sad .php, a nove koju su dodane su spomenute u prethodnom tekstu<br />
