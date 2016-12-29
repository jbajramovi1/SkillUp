<?php
    	   			
    $govornici = simplexml_load_file("govornici.xml");
    
    
   	if (isset($_POST['save']))
	{
 		foreach ($govornici as $govornikinfo):
    
	 		if ($govornikinfo->id==$_POST['id'])
	 		{
		    	$govornikinfo->ime=htmlentities($_POST['ime']);
		        $govornikinfo->mjesto=htmlentities($_POST['mjesto']);
		     }
    	endforeach;
    }
    elseif (isset($_POST['delete']))
	{
		foreach ($govornici as $govornikinfo):
    
	 		if ($govornikinfo->id==$_POST['id'])
	 		{
		    	
		    	unset($govornikinfo[0][0]);
		    	$govornici->asXML("govornici.xml");
		    	require 'adminpanel.php';
		    	exit();
		     }
    	endforeach;
	}
    $govornici->asXML("govornici.xml");
	
	
	require 'adminpanel.php';
?>