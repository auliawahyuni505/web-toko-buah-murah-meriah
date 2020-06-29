<?php
include 'koneksi.php';
$id_pelanggan=$_POST['id_pelanggan'];
$kd_buah=$_POST['kd_buah'];
$id_satuan=$_POST['id_satuan'];
$harga=$_POST['harga'];
$jumlah=$_POST['jumlah'];
$total_harga=$_POST['total_harga'];
$jumlah_bayar=$_POST['jumlah_bayar'];
mysql_query("INSERT INTO tb_transaksi VALUE('', '$id_pelanggan','$kd_buah','$id_satuan','$harga','$jumlah','$total_harga','$jumlah_bayar');");

header("location:transaksi.php?pesan=input");
?>