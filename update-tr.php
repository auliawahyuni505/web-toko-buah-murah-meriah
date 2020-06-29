<?php

include "koneksi.php";
$kd_transaksi=$_POST['kd_transaksi'];
$id_supplier=$_POST['id_pelanggan'];
$id_satuan=$_POST['id_satuan'];
$kd_buah=$_POST['kd_buah'];
$harga=$_POST['harga'];
$jumlah_beli=$_POST['jumlah_beli'];
$total_harga=$_POST['total_harga'];
$jumlah_bayar=$_POST['jumlah_bayar'];
mysql_query("UPDATE tr_supplier SET  id_supplier='$id_supplier', id_satuan='$id_Satuan',kd_buah='$kd_buah', harga='$harga',jumlah_beli='$jumlah_beli',total_harga='$total_harga',jumlah_bayar='$jumlah_bayar' WHERE kd_transaksi='$kd_transaksi'");

header("location:tr-supplier.php?pesan=update");
?>