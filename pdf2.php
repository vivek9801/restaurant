<?php
$tn=$_POST['tn'];
$in=$_POST['in'];
$d=$_POST['d'];
$pb=$_POST['pb'];





$a_name=$_POST['name'];
$a_number=$_POST['number'];
$a_total=$_POST['total'];
$a_amount=$_POST['amount'];

$a_name1=$_POST['name1'];
$a_number1=$_POST['number1'];
$a_total1=$_POST['total1'];
$a_amount1=$_POST['amount1'];

    

require('fpdf.php');
$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont("Arial", "", 18);
$pdf->Cell(0,20,"DYNAMICROPE OG STATEMENT",0,1,"C");

$pdf->SetFont("Arial", "", 10);
$pdf->Cell(30,10,"PARTY NAME:",0,0);
$pdf->Cell(45,10,$tn,0,1);
$pdf->Cell(30,10,"INVOICE NO:",0,0);
$pdf->Cell(45,10,$in,0,1);
$pdf->Cell(30,10,"DATE:",0,0);
$pdf->Cell(45,10,$d,0,1);
$pdf->Cell(30,10,"PARCEL BAG:",0,0);
$pdf->Cell(45,10,$pb,0,1);

$pdf->Cell(45,10,"Description",1,0,"C");
$pdf->Cell(45,10,"Qty",1,0,"C");
$pdf->Cell(45,10,"Rate",1,0,"C");
$pdf->Cell(0,10,"Amount",1,1,"C");

$pdf->Cell(45,10,$a_name,0,0,"C");
$pdf->Cell(45,10,$a_number,0,0,"C");
$pdf->Cell(45,10,$a_total,0,0,"C");
$pdf->Cell(0,10,$a_amount,0,1,"C");

$pdf->Cell(45,10,$a_name1,0,0,"C");
$pdf->Cell(45,10,$a_number1,0,0,"C");
$pdf->Cell(45,10,$a_total1,0,0,"C");
$pdf->Cell(0,10,$a_amount1,0,1,"C");


$pdf->Output();

?>
