<!DOCTYPE html>
<html>

<?php session_start();

 if (isset($_SESSION['user']) && $_SESSION['user']=="admin")
 {
 	$adminhide="none";
 	$buttonhide="block";
 }

?>
<head>
	<meta charset="utf-8">
	<title>SkillUp</title>
	<link rel="stylesheet" href="main.css">
</head>

<body id="index-body">
		<script type="text/javascript" src="skripta.js"></script>

		<div class="index_background">
			<div class = "shadow"></div>
			<div class="red">
				
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
				<div id="polje"></div>

				<div id="dropdownMeni" class="dropdown">
					
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
			<div id="red-naslov" class="red">
				<div class="kolona dva sakrij"></div>
				<div class="kolona dva rasiri">
					<p class="index title">SkillUp</p>
					<p class="index opis">Imate posjetnicu na kojoj piše: dr., mr. ili neka druga titula… impresivno! No sve te fascinantne titule, pa čak i mreža poznanstava koje imate, nisu više dovoljni da vam osiguraju posao iz snova, u tvrtki koja je ‘in’. Danas poslodavci žele znati koliko ste "jaki" na području vještina koje se popularno zovu soft skills. To je ono što će vam omogućiti napredak u karijeri, uspjeh u poslu i zadovoljstvo u životu. A što su to soft skills zapravo?</p>

					
				</div>
			</div>
			<?php if (!empty($buttonhide))
			{?>
			<input id="adminBtn" type="button" class="btn" name="adminpanel" onclick="loadPage('adminpanel.php')" value="Admin panel" >
			<?php } ?>

			<div class="red" id="footer"></div>
		</div>	
	

</body>
</html>