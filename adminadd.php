<?php
    	   			
    $veza = new PDO("mysql:dbname=skillup;host=localhost;charset=utf8", "admin", "adminpass");
     			$veza->exec("set names utf8");
     			$rezultat = $veza->query("select id, ime, mjestorodjenja, slika from govornik");

			     if (!$rezultat) {
			          $greska = $veza->errorInfo();
			          print "SQL greška: " . $greska[2];
			          exit();
			     }
   
    $color="grey"; 
   	if (isset($_POST['add']))
	{
		if ($_POST['ime']!="" && $_POST['tema']!="")
		{
		

				$upit=$veza->query("insert into govornik (ime,slika) values ('".htmlentities($_POST['ime'])."','https://pi.tedcdn.com/r/pa.tedcdn.com/images/TED_logo.png')");
				if (!$upit) {
			          $greska = $veza->errorInfo();
			          print "SQL greška: " . $greska[2];
			          exit();
			    }

			    $id=$veza->query("select id from govornik where ime='".htmlentities($_POST['ime'])."'");
			    foreach ($id as $govornikid)
			    {
			    
				$upit=$veza->query("insert into tema (ime,opis,govornik) values ('".htmlentities($_POST['tema'])."','/','".$govornikid['id']."')");
			}
				if (!$upit) {
			          $greska = $veza->errorInfo();
			          print "SQL greška: " . $greska[2];
			          exit();
			    }			    
		}
		else{
			$color="red";
		}
    }
    
  
	
	require 'adminpanel.php';
?>