<?php
include 'koneksi.php';
$id_supplier=$_POST['id_supplier'];
$id_satuan=$_POST['id_satuan'];
$kd_buah=$_POST['kd_buah'];
$harga=$_POST['harga'];
$jumlah_beli=$_POST['jumlah_beli'];
$total_harga=$_POST['total_harga'];
$jumlah_bayar=$_POST['jumlah_bayar'];
mysql_query("INSERT INTO tr_supplier VALUE('', '$id_supplier','$id_satuan','$kd_buah','$harga','$jumlah_beli','$total_harga','$jumlah_bayar');");

header("location:tr-supplier.php?pesan=input");
?>