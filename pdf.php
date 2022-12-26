<?php

    $a_name=$_POST['name'];
    $a_number=$_POST['number'];
    $a_total=$_POST['total'];
    $a_amount=$_POST['amount'];
    

require('fpdf.php');
$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont("Arial", "", 18);
$pdf->Cell(0,20,"DYNAMICROPE OG STATEMENT",0,1,"C");
$pdf->Cell(45,10,"Description",1,0,"C");
$pdf->Cell(45,10,"Qty",1,0,"C");
$pdf->Cell(45,10,"Rate",1,0,"C");
$pdf->Cell(0,10,"Amount",1,1,"C");

$pdf->Cell(45,10,$a_name,0,0,"C");
$pdf->Cell(45,10,$a_number,0,0,"C");
$pdf->Cell(45,10,$a_total,0,0,"C");
$pdf->Cell(0,10,$a_amount,0,1,"C");
$pdf->Output();


?>