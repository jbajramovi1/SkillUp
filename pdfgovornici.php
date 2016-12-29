<?php
	require('./fpdf181/fpdf.php');

			  	$pdf = new FPDF();
				$pdf->AddPage();
				$pdf->SetFont('Arial','B',16);
				$pdf->Cell(0,5,'Govornici:',0,1);
				
			    $govornici = simplexml_load_file("govornici.xml");
    			$pdf->SetFont('Arial','B',10);
    			$br=0;
    			$visina=20;
    			$visinat=10;
    			foreach ($govornici as $govornikinfo):    
    				$br=$br+1;
    						
	        		$ime=$govornikinfo->ime;
	        		$mjesto=$govornikinfo->mjesto;
	        		$slika=$govornikinfo->slika;
	        		$pdf->setY($visina);
	        		$pdf->Cell(0,$visinat,$br.'. '.$ime.' - '.$mjesto,0,1);

	        		$pdf->Image(''.$slika.'',15,$visina+10,40,0,'JPG');
	        		$visina=$visina+40;
	        		

	        		//$visina=$visina+40;	
        		endforeach;
        		$pdf->Output();
			
?>