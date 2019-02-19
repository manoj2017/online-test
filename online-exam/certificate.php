
<?php
	require("fpdf/fpdf.php");
$pdf= new fpdf();
$pdf->AddPage();
$pdf->Image('fpdf/cer.png',0,10,-95,-55);
$pdf->Output();
?>