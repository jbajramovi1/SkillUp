<?php
	function zag() {
    header("{$_SERVER['SERVER_PROTOCOL']} 200 OK");
    header('Content-Type: text/html');
    header('Access-Control-Allow-Origin: *');
	}

	function rest_get($request, $data)
	{
		$veza = new PDO("mysql:dbname=skillup;host=localhost;charset=utf8", "admin", "adminpass");
     			$veza->exec("set names utf8");
     	$rezultat = $veza->query("select * from lokacija");

			     if (!$rezultat) {
			          $greska = $veza->errorInfo();
			          print "SQL greška: " . $greska[2];
			          exit();
			     }
		print "{ \"lokacije\": " . json_encode($rezultat->fetchAll(PDO::FETCH_ASSOC)) . "}";

	}
	$request=$_SERVER['REQUEST_URI'];
	zag(); 
	$data = $_GET; 
	
	rest_get($request, $data);

	echo "<br><br><a class='desc' href='adminpanel.php'>Vrati se na admin panel</a>";
?>