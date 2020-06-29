<?php
include 'koneksi.php';
$id_supplier= $_GET['id_supplier'];
mysql_query ("DELETE FROM tb_supplier WHERE id_supplier='$id_supplier'")or die(mysql_error());

header("Location:supplier.php?pesan=hapus");
?>