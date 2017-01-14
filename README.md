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
-Uspješno urađen deployment na OpenShift (link-->http://skillup-skillup.44fs.preview.openshiftapps.com/ )<br />
-Sve podstranicu su sad .php, a nove koju su dodane su spomenute u prethodnom tekstu<br />

**SPIRALA 4**<br />
-Urađene su sljedeće stavke **Spirale 4**:<br  />
-Napravila SQL bazu skillup sa tri tabele: govornik, lokacija i tema. Sve tri tabele su povezane i to na način da je kolona mjestorodjenja u tabeli govornik foreign key na lokaciju, a kolona govornik u tabeli tema foreign key na govornika. Podstranice Govornici i Admin panel sam izmijenila tako da sad prikazuju podatke iz svih tabela. <br  />
-Napravila PHP skriptu xmltodb.php koja će sve podatke iz XML prebaciti u bazu podataka (preskočiti one koji već postoje u bazi). XML fajlovi iz kojih se čitaju podaci su: govornici.xml, teme.xml i lokacije.xml . Ova skripta se poziva klikom na 'Dodaj iz XML-a' link koji se nalazi na Admin panelu.<br  />
-Prepravila sve PHP skripte tako da rade sa podacima u bazi.<br  />
-OpenShift link: http://skillup-skillup.44fs.preview.openshiftapps.com/ <br  />
-u skripti getmethod.php implementirana je metoda GET REST web servisa. Poziv ove skripte vrši se klikom na 'Pregledaj lokacija u Json-u' na dnu podstranice Admin panel.<br  />
-Testiranje koje sam uradila pomoću Postman možete pogledati u pdf-u postman.pdf
