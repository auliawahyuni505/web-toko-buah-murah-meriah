<?php

include "koneksi.php";
$kd_transaksi=$_POST['kd_transaksi'];
$id_pelanggan=$_POST['id_pelanggan'];
$kd_buah=$_POST['kd_buah'];
$id_satuan=$_POST['id_satuan'];
$harga=$_POST['harga'];
$jumlah=$_POST['jumlah'];
$total_harga=$_POST['total_harga'];
$jumlah_bayar=$_POST['jumlah_bayar'];
mysql_query("UPDATE tb_transaksi SET  id_pelanggan='$id_pelanggan',kd_buah='$kd_buah', id_satuan='$id_Satuan', harga='$harga',jumlah='$jumlah',total_harga='$total_harga',jumlah_bayar='$jumlah_bayar' WHERE kd_buah='$kd_buah'");

header("location:transaksi.php?pesan=update");
?>