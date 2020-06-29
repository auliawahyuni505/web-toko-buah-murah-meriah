<?php

//memanggil library FPDF
require('library/fpdf.php');
// intance object dan memberikan pengaturan halaman PDF
$pdf = new FPDF('l','mm','Legal');
//membuat halaman baru
$pdf->AddPage();
// setting jenis font yang akan digunakan 
$pdf->SetFont('Arial','B',16);
//mencetak string
$pdf->Cell(270,7,'TRANSAKSI',0,1,'C');
$pdf->SetFont('Arial','B',12);
$pdf->Cell(270,7,'DAFTAR DATA PEMBELIAN',0,1,'C');
//Memberikan space kebawah agar tidak terlalu rapat
$pdf->Cell(10,7,'',0,1);

$pdf->SetFont('Arial','B',10);
$pdf->Cell(35,6,'Nomor',1,0);
$pdf->Cell(50,6,'Nama Pelanggan',1,0);
$pdf->Cell(40,6,'Nama Buah',1,0);
$pdf->Cell(50,6,'Satuan',1,0);
$pdf->Cell(50,6,'Harga',1,0);
$pdf->Cell(30,6,'Jumlah Beli',1,0);
$pdf->Cell(50,6,'Total Harga',1,0);
$pdf->Cell(30,6,'Jumlah Bayar',1,1);

 
$pdf->SetFont('Arial','',10);
include "koneksi.php";
$query_mysql = mysql_query("SELECT * FROM vw_transaksi")or die(mysql_error());
while ($row = mysql_fetch_array($query_mysql)){
    $pdf->Cell(35,6,$row['kd_transaksi'],1,0);
    $pdf->Cell(50,6,$row['nama_pelanggan'],1,0);
    $pdf->Cell(40,6,$row['nama_buah'],1,0);
    $pdf->Cell(50,6,$row['nm_satuan'],1,0);
    $pdf->Cell(50,6,$row['harga'],1,0);
    $pdf->Cell(30,6,$row['jumlah'],1,0);
    $pdf->Cell(50,6,$row['total_harga'],1,0);
	$pdf->Cell(30,6,$row['jumlah_bayar'],1,1);
    
}

$pdf->Output();
?>