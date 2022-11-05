<?php
require ('fpdf/fpdf.php');

class PDF extends FPDF{
    include ('pdf.php');
}
$pdf = new PDF();
$pdf->SetFont('Times', '', 12);
$pdf->OutPut('Reporte.PDF', 'I');
?>