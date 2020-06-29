<?php
include 'koneksi.php';
$kd_buah= $_GET['kd_buah'];
mysql_query ("DELETE FROM tb_buah WHERE kd_buah='$kd_buah'")or die(mysql_error());

header("Location:databuah.php?pesan=hapus");
?>