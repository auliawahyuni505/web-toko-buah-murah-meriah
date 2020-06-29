<?php

include "koneksi.php";
$id_pelanggan=$_POST['id_pelanggan'];
$nama_pelanggan=$_POST['nama_pelanggan'];
$alamat=$_POST['alamat'];
$no_telp=$_POST['no_telp'];

mysql_query("UPDATE tb_pelanggan SET nama_pelanggan='$nama_pelanggan', alamat='$alamat', no_telp='$no_telp' WHERE id_pelanggan='$id_pelanggan'");

header("location:pelanggan.php?pesan=update");
?>