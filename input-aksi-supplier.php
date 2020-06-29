<?php
include 'koneksi.php';

$id_supplier=$_POST['id_supplier'];
$nama_supplier=$_POST['nama_supplier'];
$alamat=$_POST['alamat'];
$email=$_POST['email'];
$no_tlp=$_POST['no_tlp'];

mysql_query("INSERT INTO tb_supplier VALUE('$id_supplier', '$nama_supplier', '$alamat','$email','$no_tlp');");

header("location:supplier.php?pesan=input");
?>