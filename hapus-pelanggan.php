<?php
include 'koneksi.php';
$id_pelanggan= $_GET['id_pelanggan'];
mysql_query ("DELETE FROM tb_pelanggan WHERE id_pelanggan='$id_pelanggan'")or die(mysql_error());

header("Location:pelanggan.php?pesan=hapus");
?>