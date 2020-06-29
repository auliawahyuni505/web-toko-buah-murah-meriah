<?php
include 'koneksi.php';
$kd_transaksi= $_GET['kd_transaksi'];
mysql_query ("DELETE FROM tb_transaksi WHERE kd_transaksi='$kd_transaksi'")or die(mysql_error());

header("Location:tr-supplier.php?pesan=hapus");
?>
