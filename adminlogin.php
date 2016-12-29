<?php  	   		
    session_start();	
    $admin = simplexml_load_file("admin.xml");
    $username=$admin->username;
    $password=$admin->password;

    $usernameInput = htmlentities( trim($_POST['username']));
    $passwordInput =htmlentities( trim($_POST['password']));
    $tekst="";
    if ($usernameInput=="" && $passwordInput==""){
		$tekst="Unesite podatke u sva polja.";
		require 'login.php';
		
	}
	else if ($usernameInput=="") {
        $tekst = "Unesite korisničko ime.";
        require 'login.php';
		
    } 
    else if ($passwordInput==""){
    	$tekst="Unesite lozinku.";
    	require 'login.php';
		
    }
    else if($username!=$usernameInput || $password!=$passwordInput)
    {
    	$tekst="Uneseni korisnički podaci nisu ispravni.";
    	require 'login.php';
		
        
    }
    else{
    	$tekst="";

    
    $_SESSION['user']="admin";
    $adminhide="none";
    $buttonhide="block";
    header('Location:index.php');

    }
    
     
    
?>