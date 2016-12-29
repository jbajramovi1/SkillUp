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
        	<input name='mjesto' class='desc' id='listMjesto' placeholder="Mjesto"></input><br>
        	
        	<input id='save' class='promjenaBtn' type='submit' class='btn' name='add' value='Dodaj' />	<br>	
        	
		</form>
	</div>
		
			<?php
    	   			
    			$govornici = simplexml_load_file("govornici.xml");
    			echo "<div id='govornici'>";
    			foreach ($govornici as $govornikinfo):
        		$ime=htmlentities($govornikinfo->ime);
        		$mjesto=htmlentities($govornikinfo->mjesto);
        		$slika=htmlentities($govornikinfo->slika);
        		$id=htmlentities($govornikinfo->id);
        		echo "<div class='element'>
        					<div class='kolona dva' id='kolona_lijevo'>
        						<img src='",$slika,"' id='element_photo'>
        					</div>
        					<form action='adminchange.php' method='post'><br>
        					<div class='kolona dva' id='kolona_desno'>
        						<input name='ime' class='desc' id='listIme' value='",$ime,"''></input>
        						<input name='mjesto' class='desc' id='listMjesto' value='",$mjesto,"'></input>
        						
        						<input name='id' class='desc' type='hidden' id='listId' value='",$id,"'></input>
	        					
										<input id='save' class='promjenaBtn' type='submit' class='btn' name='save' value='Spremi' /><br><br>
									
										<input id='delete' class='promjenaBtn' type='submit' class='btn' name='delete' value='Izbriši' /><br><br>
										</div>
									</form>
							</div>";
        					
    			endforeach;
    			echo "</div>";
			?>
		
	
	
	
<form action="pdfgovornici.php" method="post">
<br>
<input type="submit" class="btn" name="submit" value="Preuzmi PDF" /><br><br>
</form>
<form action="csvgovornici.php" method="post">

<input type="submit" style="margin-left: 0px" class="btn" name="submit" value="Preuzmi CSV" style="display:<?php if (empty($adminhide)) {echo 'none';} else{ echo 'block';}?>" /><br><br>
</form>

</div>
<div class="red" id="footer"></div>

</body>
</html>