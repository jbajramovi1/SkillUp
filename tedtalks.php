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
<div class="red header" id="header_tedtalks">
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
				<p class="naslov">TedTalks</p>
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
<div class="red">
	<div class="kolona tri"></div>
	<div class="kolona tri"></div>
	<div class="kolona tri"></div>
</div>
<div class="red" id="footer" ></div>

</body>
</html>