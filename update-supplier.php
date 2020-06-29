<?php

include "koneksi.php";
$id_supplier=$_POST['id_supplier'];
$nama_supplier=$_POST['nama_supplier'];
$alamat=$_POST['alamat'];
$email=$_POST['email'];
$no_tlp=$_POST['no_tlp'];

mysql_query("UPDATE tb_supplier SET nama_supplier='$nama_supplier', alamat='$alamat', email='$email', no_tlp='$no_tlp' WHERE id_supplier='$id_supplier'");

header("location:supplier.php?pesan=update");
?>