<?php 

function crearPDF($nombre)
{
	ob_start();
	include('pdf.php');
	$content = ob_get_clean();


	try {

		require_once('html2pdf-5.2.5');
		$html2pdf = new HTML2PDF('P', 'LETTER', 'es', true, 'UTF-8');
		$html2pdf->pdf->SetDisplayMode('fullpage');

		$html2pdf->pdf->SetTitle("PDF");

		$html2pdf->writeHTML($content);
		ob_end_clean();

		$html2pdf->Output($nombre.'.pdf', 'D');
		
	} catch (HTML2PDF_exception $e) {
		echo $e;
		exit;
	}
}

crearPDF("pdf");
 ?>