<?php
include 'header.php';
?>
	<div class="judul">
		<h1><p align="center">Edit Data Buah</p></h1>
	</div>
	</br>
</br>
	
<form class="form-horizontal" action="update-buah.php" method="post">
<table>
<div class="row">
	<div class="col-md-10 col-md-offset-1">
		
	<?php
	include "koneksi.php";
	$kd_buah=$_GET['kd_buah'];
	$query_mysql=mysql_query("SELECT * FROM tb_buah WHERE kd_buah='$kd_buah'")or data(mysql_error());
	$nomor=1;
	while($data=mysql_fetch_array($query_mysql)){
	?>

	<div class="form-group">
		<label class="col-sm-4 control-label">Kode Buah</label>
		<div class="col-sm-6">
		<input type="text" name="kd_buah" class="form-control" value="<?php echo $data['kd_buah'] ?>">
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-4 control-label">Nama Buah</label>
		<div class="col-sm-6">
		<input type="text" name="nama_buah" class="form-control" value="<?php echo $data['nama_buah'] ?>">
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-4 control-label">Kategori</label>
		<div class="col-sm-6">
		<select name="kategori" type="text" class="form-control" value="<?php echo $data['kategori']==1 ? "Ekspor" : "Import" ?>">
				<option value="1">Ekspor</option>
				<option value="2">Import</option>
		</select>
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
	<a href="databuah.php">  <i class="btn btn-primary">
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
			