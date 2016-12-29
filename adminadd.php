<?php
    	   			
    $govornici = simplexml_load_file("govornici.xml");
   
    $color="grey"; 
   	if (isset($_POST['add']))
	{
		if ($_POST['ime']!="" && $_POST['mjesto']!="")
		{
		foreach ($govornici as $govornikinfo) {
			$id=$govornikinfo->id+1;
		}

		$govornik=$govornici->addChild("govornik");
		$govornik->addChild("id",$id);
		$govornik->addChild("ime",htmlentities($_POST['ime']));
		$govornik->addChild("mjesto",htmlentities($_POST['mjesto']));
		$govornik->addChild("slika","https://pi.tedcdn.com/r/pa.tedcdn.com/images/TED_logo.png");
		}
		else{
			$color="red";
		}
    }
    
    $govornici->asXML("govornici.xml");
	
	require 'adminpanel.php';
?>