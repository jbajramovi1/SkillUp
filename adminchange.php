<?php
    	   			
    $veza = new PDO("mysql:dbname=skillup;host=localhost;charset=utf8", "admin", "adminpass");
     			$veza->exec("set names utf8");
     			$rezultat = $veza->query("select id, ime, mjestorodjenja, slika from govornik");

			     if (!$rezultat) {
			          $greska = $veza->errorInfo();
			          print "SQL greška: " . $greska[2];
			          exit();
			     }
    
    
   	if (isset($_POST['save']))
	{
		foreach ($rezultat as $govornik) {
			if ($govornik['id']==$_POST['id'])
			{
				
				$upit=$veza->query("update govornik set ime='".$_POST['ime']."' where id='".$_POST['id']."' ");
				if (!$upit) {
			          $greska = $veza->errorInfo();
			          print "SQL greška: " . $greska[2];
			          exit();
			    }
         		$lokacije=$veza->query("select id,drzava,grad from lokacija where id=".$govornik['id']." ");
         		if (!$lokacije) {
			          $greska = $veza->errorInfo();
			          print "SQL greška: " . $greska[2];
			          exit();
			    }
			    foreach($lokacije as $lokacija)
			    {
			    	$upit=$veza->query("update lokacija set grad='".$_POST['mjesto']."' where id='".$lokacija['id']."' ");
				if (!$upit) {
			          $greska = $veza->errorInfo();
			          print "SQL greška: " . $greska[2];
			          exit();
			    }
			    }
			    $tema=$veza->query("update tema set ime='".$_POST['tema']."' where govornik=".$_POST['id']." ");
			     	if (!$tema) {
			          $greska = $veza->errorInfo();
			          print "SQL greška: " . $greska[2];
			          exit();
			     	}
			     	
			 }
			}
 		
    }
  	
  	if (isset($_POST['delete']))
	{
		foreach ($rezultat as $govornik) {
			if ($govornik['id']==$_POST['id'])
			{
				
				$upit=$veza->query("delete from tema where govornik='".$_POST['id']."' ");
				if (!$upit) {
			          $greska = $veza->errorInfo();
			          print "SQL greška: " . $greska[2];
			          exit();
			    }
         		
         		$upit=$veza->query("delete from govornik where id='".$_POST['id']."' ");
				if (!$upit) {
			          $greska = $veza->errorInfo();
			          print "SQL greška: " . $greska[2];
			          exit();
			    }
			    
			 }
			}
 		
    }
	
	require 'adminpanel.php';
?>