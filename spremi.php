<?php
    	   			
    $govornici = simplexml_load_file("govornici.xml");
    
    foreach ($govornici as $govornikinfo):
    	$ime=$govornikinfo->ime;
        $mjesto=$govornikinfo->mjesto;
        $slika=$govornikinfo->slika;
    endforeach;
?>