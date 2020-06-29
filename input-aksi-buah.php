<?php
include 'koneksi.php';

$kd_buah=$_POST['kd_nuah'];
$nama_buah=$_POST['nama_buah'];
$kategori=$_POST['kategori'];

mysql_query("INSERT INTO tb_buah VALUE('$kd_buah', '$nama_buah', '$kategori');");

header("location:databuah.php?pesan=input");
?>