<?php

include "koneksi.php";
$kd_buah=$_POST['kd_buah'];
$nama_buah=$_POST['nama_buah'];
$kategori=$_POST['kategori'];

mysql_query("UPDATE tb_buah SET nama_buah='$nama_buah', kategori='$kategori' WHERE kd_buah='$kd_buah'");

header("location:databuah.php?pesan=update");
?>