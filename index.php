<?php
require('fpdf183/fpdf.php');
$pdf= new FPDF();

$pdf-> AddPage();
$pdf->SetFont('Arial','',16);
  

$pdf-> Cell(190,10,'HOTEL_CAFE',1,1,'C');
$pdf->ln(5);
$pdf->Cell(47.5,5,'CustomerName',0,0);
$pdf->Cell(78,5,': Shivam',0,0);
$pdf->Cell(30,5,'Cafe_mob',0,0);
$pdf->Cell(30,5,': 7379555105',0,1);
$pdf->Cell(47.5,5,'MobileNo.',0,0);
$pdf->Cell(47.5,5,': 6394319359',0,1);
$pdf->Cell(47.5,5,'Date',0,0);
$pdf->Cell(47.5,5,': 1-06-2021 12:18 AM',0,1);
$pdf->Line(10,45,200,45);

$pdf->ln(5);
$pdf->Cell(40,8,'SNo',1,0,'C');
$pdf->Cell(40.5,8,'Item Name',1,0,'C');
$pdf->Cell(40,8,'No. of Item',1,0,'C');
$pdf->Cell(40,8,'Rs.',1,0,'C');
$pdf->Cell(30,8,'Total',1,1,"C");
$pdf->ln(2);
$pdf->Cell(40,5,'1',0,0,'C');
$pdf->Cell(40.5,5,'Burger',0,0,'C');
$pdf->Cell(40,5,'2',0,0,'C');
$pdf->Cell(40,5,'50',0,0,'C');
$pdf->Cell(30,5,'100',0,1,'C');
$pdf->ln(2);
$pdf->Cell(40,5,'2',0,0,'C');
$pdf->Cell(40.5,5,'Chowmin',0,0,'C');
$pdf->Cell(40,5,'1',0,0,'C');
$pdf->Cell(40,5,'60',0,0,'C');
$pdf->Cell(30,5,'60',0,1,'C');

$pdf->ln(13);
$pdf->Cell(160,8,'Total',1,0,'C');
$pdf->Cell(30,8,'160',1,1,'C');
$pdf->Cell(47.5,8,'Tax',1,0,'C');
$pdf->Cell(47.5,8,'0.00',1,0,'C');
$pdf->Cell(47.5,8,'Delivery Charge',1,0,'C');
$pdf->Cell(47.5,8,'0.00',1,1,'C');
$pdf->Cell(150,8,'Total',1,0,'C');
$pdf->Cell(40,8,'160.00',1,1,'C');
$pdf->ln(24);
$pdf->Line(10,120,200,120);
$pdf->Cell(100,8,'THANK YOU',0,0,'C');
$pdf->Cell(50,8,'Signature',0,0,'R');
$pdf->Cell(40,8,': ____________',0,1);


$pdf->Line(10,53,10,70);
$pdf->Line(50,53,50,70);
$pdf->Line(90.5,53,90.5,70);
$pdf->Line(130.5,53,130.5,70);
$pdf->Line(170.5,53,170.5,70);
$pdf->Line(200.5,53,200.5,70);
$pdf->line(10,70,200,70);








$pdf->Output();

?>