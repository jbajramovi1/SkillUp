<!DOCTYPE html>
<html>
<?php 
session_start();
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
<div class="red header" id="header_galerija">
<div class="home">
	<a href="#" onclick="loadPage('index.php')"><img class="homeBtn" src="http://publish.uwo.ca/~hamendt/WD%20final%20Project/images/home.png"></a>
	
</div>
<div class = "menu">
					<div class="ikona">
						<img class="meniIkona" src="http://www.reachandteach.co.uk/wp-content/uploads/2016/03/menu-down-arrow.png" onclick="onclick_meniBtn()">
						
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
				<p class="naslov">Galerija</p>
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

<div id="red_galerija" class="red">
	<div class="kolona tri">
		<img class="galerija_slika" src="http://www.huzzbuzz.nz/uploads/8/8/6/2/8862912/7545610.jpg?697" onmouseover="hover(this)" onmouseleave="exithover(this)" onclick="otvorisliku(this)">
	</div>
	<div class="kolona tri">
		<img class="galerija_slika" src="https://s-media-cache-ak0.pinimg.com/736x/04/a9/7f/04a97fb1632ebe4b7722506af47b6ca3.jpg" onmouseover="hover(this)" onmouseleave="exithover(this)" onclick="otvorisliku(this)">
	</div>
	<div class="kolona tri">
		<img class="galerija_slika" src="https://s-media-cache-ak0.pinimg.com/736x/bc/64/e9/bc64e9bddae6bbda3c2290c20fdb6c96.jpg" onmouseover="hover(this)" onmouseleave="exithover(this)" onclick="otvorisliku(this)">
	</div>
</div>

<div id="red_galerija" class="red">
	<div class="kolona tri">
		<img  class="galerija_slika" src="https://pbs.twimg.com/media/Cn1QAaDUsAAjLCu.jpg" onmouseover="hover(this)" onmouseleave="exithover(this)" onclick="otvorisliku(this)">
	</div>
	<div class="kolona tri">
		<img class="galerija_slika" src="http://www.hippoquotes.com/img/amy-cuddy-quotes/70cd38a1328d6231ad80805fc53cf91a.jpg" onmouseover="hover(this)" onmouseleave="exithover(this)" onclick="otvorisliku(this)">
	</div>
	<div class="kolona tri">
		<img class="galerija_slika" src="https://s-media-cache-ak0.pinimg.com/600x315/bd/ea/61/bdea61170e0a60fa42e13a8a1459719e.jpg" onmouseover="hover(this)" onmouseleave="exithover(this)" onclick="otvorisliku(this)" >
	</div>
</div>
<div class="red" id="footer"></div>

<div id="photoModal" class="modal">
  
  <img class="modal-slika" id="img01">
  
</div>

</body>
</html>