<?php
    
    if (file_exists('govornici.xml'))  
    {
        $xml = simplexml_load_file('govornici.xml'); 
        $x = 1;
        $v = [];

        $header = array('id','Ime i prezime', 'Mjesto rodjenja','Slika');

        $csvFile = fopen('govornici.csv', 'w');
        fputcsv($csvFile, $header);      
        fclose($csvFile);

        $result = $xml->xpath('//govornik'); 

        foreach ($result as $r) 
        {           
            $child = $xml->xpath('//govornik['.$x .']/*');      

            foreach ($child as $value) {
                $v[] = $value;         
            }

   
            $csvFile = fopen('govornici.csv', 'a');
            fputcsv($csvFile, $v);      
            fclose($csvFile);  

            $v = [];
            $x++; 
        }

        $contenttype = "application/force-download";
        header("Content-Type: " . $contenttype);
        header("Content-Disposition: attachment; filename=\"" . basename('govornici.csv') . "\";");
        readfile('govornici.csv');
        exit();
    }
?>