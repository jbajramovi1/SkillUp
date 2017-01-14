<?php

	$veza = new PDO("mysql:dbname=skillup;host=localhost;charset=utf8", "admin", "adminpass");
     			$veza->exec("set names utf8");

  /*  $lokacije = simplexml_load_file("lokacije.xml");
	foreach ($lokacije as $lokacijainfo) {
			
			$kontinent=$lokacijainfo->kontinent;
			$drzava=$lokacijainfo->drzava;
			$grad=$lokacijainfo->grad;

			$postoji=$veza->query("select count(*) from lokacija where grad='".$grad."'");
			if (!$postoji) {
			          $greska = $veza->errorInfo();
			          print "SQL greška: " . $greska[2];
			          exit();
			    }
			foreach($postoji as $postojijedan)
				{
				
				if ($postojijedan[0]=='0')
				{
				$upit=$veza->query("insert into lokacija (kontinent,drzava,grad) values ('".$kontinent."','".$drzava."','".$grad."')");
					if (!$upit) {
				          $greska = $veza->errorInfo();
				          print "SQL greška: " . $greska[2];
				          exit();
			    	}
			    }
				}
			 
	}*/
     			
	$govornici = simplexml_load_file("govornici.xml");
	foreach ($govornici as $govornikinfo) {
			$id=$govornikinfo->id;
			$ime=$govornikinfo->ime;
			$mjesto=$govornikinfo->mjesto;
			$slika=$govornikinfo->slika;

			$postoji=$veza->query("select count(*) from govornik where ime='".$ime."'");
			if (!$postoji) {
			          $greska = $veza->errorInfo();
			          print "SQL greška: " . $greska[2];
			          exit();
			    }
			foreach($postoji as $postojijedan)
				{
				
				if ($postojijedan[0]=='0')
				{
				$upit=$veza->query("insert into govornik (ime,mjestorodjenja,slika) values ('".$ime."','".$mjesto."','".$slika."')");
					if (!$upit) {
				          $greska = $veza->errorInfo();
				          print "SQL greška: " . $greska[2];
				          exit();
			    	}
			    }
				}
			 
	}

	$teme = simplexml_load_file("teme.xml");
	foreach ($teme as $temainfo) {
			
			$ime=$temainfo->ime;
			$opis=$temainfo->opis;
			$govornik=$temainfo->govornik;

			$postoji=$veza->query("select count(*) from tema where ime='".$ime."'");
			if (!$postoji) {
			          $greska = $veza->errorInfo();
			          print "SQL greška: " . $greska[2];
			          exit();
			    }
			foreach($postoji as $postojijedan)
				{
				
				if ($postojijedan[0]=='0')
				{
				$upit=$veza->query("insert into tema (ime,opis,govornik) values ('".$ime."','".$opis."','".$govornik."')");
					if (!$upit) {
				          $greska = $veza->errorInfo();
				          print "SQL greška: " . $greska[2];
				          exit();
			    	}
			    }
				}
			 
	}
	$potvrda="Uspješno dodani podaci u bazu!";
	require 'adminpanel.php';
	
?>