<?php
include 'koneksi.php';

$id_pelanggan=$_POST['id_pelanggan'];
$nama_pelanggan=$_POST['nama_pelanggan'];
$alamat=$_POST['alamat'];
$no_telp=$_POST['no_telp'];

mysql_query("INSERT INTO tb_pelanggan VALUE('$id_pelanggan', '$nama_pelanggan', '$alamat','$no_telp');");

header("location:pelanggan.php?pesan=input");
?>