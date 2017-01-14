<!DOCTYPE html>
<html>
<?php session_start();
if (isset($_SESSION['user']) && $_SESSION['user']=="admin")
 {
 	$adminhide="none";
 }
?>
<head>
	<meta charset="utf-8">
	<title>SkillUp</title>
	<link rel="stylesheet" href="main.css">
</head>

<body>
<script type="text/javascript" src="skripta.js"></script>
<div class="red header" id="header_govornici">
<div class="home">
	<a href="#" onclick="loadPage('index.php')"><img class="homeBtn" src="http://publish.uwo.ca/~hamendt/WD%20final%20Project/images/home.png"></a>
</div>
	<div class = "menu">
					<div class="ikona">
						<img class="meniIkona" onclick="onclick_meniBtn()" src="http://www.reachandteach.co.uk/wp-content/uploads/2016/03/menu-down-arrow.png">
					</div>
					<div class="stavke">
						<ul class="meni">
						<li class="meni stavka" style="display:<?php if (empty($adminhide)) {echo 'none';} else{ echo 'block';}?>"><a class="meni link" href="logout.php">Logout</a></li>
							<li class="meni stavka" style="display:<?php if (empty($adminhide)) {echo 'block';} else{ echo $adminhide;}?>"><a class="meni link" href="#" onclick="loadPage('signup.php')">Sign up</a></li>
							<li class="meni stavka" style="display: <?php if (empty($adminhide)) {echo 'block';} else{ echo $adminhide;}?>"><a class="meni link" href="#" onclick="loadPage('login.php')">Login</a></li>
							<li class="meni stavka"><a class="meni link" href="#" onclick="loadPage('kontakt.php')">Kontakt</a></li>
							<li class="meni stavka"><a class="meni link" href="#" onclick="loadPage('galerija.php')">Galerija</a></li>
							<li class="meni stavka"><a class="meni link" href="#" onclick="loadPage('govornici.php')">Govornici</a></li>
							<li class="meni stavka"><a class="meni link" href="#" onclick="loadPage('tedtalks.php')">TedTalks</a></li>
							
							<li class="meni stavka"><a class="meni link" href="#" onclick="loadPage('softskills.php')">SoftSkills</a></li>

						</ul>

					</div>
				</div>
				<p class="naslov">Govornici</p>
				<div id="dropdownMeni" class="dropdown podstranice">
					
					<ul class="meni">
							<li class="drop stavka"><a class="drop link" href="#" onclick="loadPage('softskills.php')">SoftSkills</a></li>
							
							<li class="drop stavka"><a class="drop link" href="#" onclick="loadPage('tedtalks.php')">TedTalks</a></li>
							<li class="drop stavka"><a class="drop link" href="#" onclick="loadPage('govornici.php')">Govornici</a></li>
							<li class="drop stavka"><a class="drop link" href="#" onclick="loadPage('galerija.php')">Galerija</a></li>
							<li class="drop stavka"><a class="drop link" href="#" onclick="loadPage('kontakt.php')">Kontakt</a></li>
							<li class="drop stavka"><a class="drop link" href="#" onclick="loadPage('login.php')">Login</a></li>
							<li class="drop stavka"><a class="drop link" href="#" onclick="loadPage('signup.php')">Sign up</a></li>
							

						</ul>
				</div>
</div>



<div class="red govornici">


	<input type="text" id="searchInput" onkeyup ="searchadmin()" placeholder="Pretraži govornike...">
	<img id="searchIcon"  src="http://www.freeiconspng.com/uploads/search-icon-png-2.png" onclick="searchBtn()">
	<div class="element" id="dodaj" style="border-color:<?php if (empty($color)) {echo "gray";} else{ echo $color;}?>">
		<p class='desc'>Unesi novog govornika:</p>
		<form action='adminadd.php' method='post'>
			<input name='ime' class='desc' id='listIme' placeholder="Ime i prezime"></input>
        	<input name='tema' class='desc' id='listTema' placeholder="Tema govora"></input><br>
        	
        	<input id='save' class='promjenaBtn' type='submit' class='btn' name='add' value='Dodaj' />	<br>	
        	
		</form>
		<a class="desc" href="xmltodb.php" >Dodaj iz XML-a</a>
		<p class="desc" style="margin-top: 15px!important; " ><?php if (empty($potvrda)) {echo "";} else {echo $potvrda;}?></p>
	</div>
	

			

			<div id="govornici">
			<?php
    	   		
    			$veza = new PDO("mysql:dbname=skillup;host=localhost;charset=utf8", "admin", "adminpass");
     			$veza->exec("set names utf8");
     			$rezultat = $veza->query("select id, ime, mjestorodjenja, slika from govornik");

			     if (!$rezultat) {
			          $greska = $veza->errorInfo();
			          print "SQL greška: " . $greska[2];
			          exit();
			     }


     foreach ($rezultat as $govornik) {
     	
         $lokacije=$veza->query("select id,drzava,grad from lokacija where id=".$govornik['mjestorodjenja']." ");
         if (!$lokacije) {
			          $greska = $veza->errorInfo();
			          print "SQL greška: " . $greska[2];
			          exit();
			     }

			     foreach ($lokacije as $lokacija) {
			     	
          ?>
          <div class="element">
          	<div class="kolona dva" id="kolona_lijevo">
          		<img src="<?php print $govornik['slika']?>" id="element_photo">
          	</div>
          	<form action="adminchange.php" method="post">
          	<div class="kolona dva" id="kolona_desno">
          		<br><input name="ime" class="desc" id="listIme" value="<?php print $govornik['ime']?>"/>
          		<input name="mjesto" class="desc" id="listMjesto" value="<?php print $lokacija['grad']?>"/>
          		<?php
          		$tema=$veza->query("select ime from tema where govornik=".$govornik['id']." ");
			     	if (!$tema) {
			          $greska = $veza->errorInfo();
			          print "SQL greška: " . $greska[2];
			          exit();
			     	}
			     	foreach ($tema as $temainfo) {
			     		?>
          		<input name="tema" class="desc" id="listTema" value="<?php print $temainfo['ime']?>"/>
          		<?php
          		}
          		?>
          		<input name="id" class="desc" style="display: none" id="listId" value="<?php print $govornik['id']?>"/>
          		<input id="save" class="promjenaBtn" type="submit" class="btn" name="save" value="Spremi" /><br><br>
									
				<input id="delete" class="promjenaBtn" type="submit" class="btn" name="delete" value="Izbriši" /><br><br>
          	</div>
          	</form>
          </div>
          
          <?php
      }  
      }
			?>
			</div>
		
	
	
	
<form action="pdfgovornici.php" method="post">
<br>
<input type="submit" class="btn" name="submit" value="Preuzmi PDF" /><br><br>
</form>
<form action="csvgovornici.php" method="post">

<input type="submit" style="margin-left: 0px" class="btn" name="submit" value="Preuzmi CSV" style="display:<?php if (empty($adminhide)) {echo 'none';} else{ echo 'block';}?>" /><br><br>
</form>
<br><a class="desc" style="margin-left: 580px" href="getmethod.php" >Pregledaj lokacije u Json-u</a>
</div>
<div class="red" id="footer"></div>

</body>
</html>