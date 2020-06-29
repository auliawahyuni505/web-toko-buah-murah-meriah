<?php
include 'header.php';
?>
	<div class="judul">
		<h1><p align="center">Edit Data Pelanggan</p></h1>
	</div>
	</br>
</br>
	
<form class="form-horizontal" action="update-pelanggan.php" method="post">
<table>
<div class="row">
	<div class="col-md-10 col-md-offset-1">
		
	<?php
	include "koneksi.php";
	$id_pelanggan=$_GET['id_pelanggan'];
	$query_mysql=mysql_query("SELECT * FROM tb_pelanggan WHERE id_pelanggan='$id_pelanggan'")or data(mysql_error());
	$nomor=1;
	while($data=mysql_fetch_array($query_mysql)){
	?>

    <div class="form-group">
		<label class="col-sm-4 control-label">ID Pelanggan</label>
		<div class="col-sm-6">
		<input type="text" name="id_pelanggan" class="form-control" value="<?php echo $data['id_pelanggan'] ?>">
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-4 control-label">Nama Pelanggan</label>
		<div class="col-sm-6">
		<input type="text" name="nama_pelanggan" class="form-control" value="<?php echo $data['nama_pelanggan'] ?>">
		</div>
	</div>
    <div class="form-group">
		<label class="col-sm-4 control-label">Alamat</label>
		<div class="col-sm-6">
		<input type="text" name="alamat" class="form-control" value="<?php echo $data['alamat'] ?>">
		</div>
	</div>
    <div class="form-group">
		<label class="col-sm-4 control-label">Nomor Telepon</label>
		<div class="col-sm-6">
		<input type="text" name="no_telp" class="form-control" value="<?php echo $data['no_telp'] ?>">
		</div>
	</div>
	<div class="form-group">
		<div class="col-sm-offset-4 col-sm-10">
			<button type="submit" class="btn btn-success">
				<i class="fa fa-paper-plane"></i> Simpan
		</button>
	<button type="reset" class="btn btn-warning">
		<i class="fa fa-paper-times"></i> Batal
		</button>
	<a href="pelanggan.php">  <i class="btn btn-primary">
	<i class="fa fa-user-plus"></i>Lihat Semua Data</i>
	</a>
				</div>
			</div>
		</div>
	</div>
		</table>
	</form>
	<?php } ?>
	</body>
	</html>
			