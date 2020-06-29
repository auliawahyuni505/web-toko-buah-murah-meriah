<?php

//memanggil library FPDF
require('library/fpdf.php');
// intance object dan memberikan pengaturan halaman PDF
$pdf = new FPDF('l','mm','letter');
//membuat halaman baru
$pdf->AddPage();
// setting jenis font yang akan digunakan 
$pdf->SetFont('Arial','B',16);
//mencetak string
$pdf->Cell(190,7,'PT BUAH MURAH MERIAH',0,1,'C');
$pdf->SetFont('Arial','B',12);
$pdf->Cell(190,7,'DAFTAR SUPPLIER',0,1,'C');
//Memberikan space kebawah agar tidak terlalu rapat
$pdf->Cell(10,7,'',0,1);

$pdf->SetFont('Arial','B',10);
$pdf->Cell(30,6,'ID PELANGGAN',1,0);
$pdf->Cell(50,6,'NAMA PELANGGAN',1,0);
$pdf->Cell(50,6,'ALAMAT',1,0);
$pdf->Cell(45,6,'EMAIL',1,0);
$pdf->Cell(40,6,'NOMOR TELEPON',1,1);
 
$pdf->SetFont('Arial','',10);
include "koneksi.php";
$query_mysql = mysql_query("SELECT * FROM tb_supplier")or die(mysql_error());
while ($row = mysql_fetch_array($query_mysql)){
    $pdf->Cell(30,6,$row['id_supplier'],1,0);
    $pdf->Cell(50,6,$row['nama_supplier'],1,0);
    $pdf->Cell(50,6,$row['alamat'],1,0);
    $pdf->Cell(45,6,$row['email'],1,0);
    $pdf->Cell(40,6,$row['no_tlp'],1,1);
}

$pdf->Output();
?>