<?php
include 'header.php';
?>
<form class="form-horizontal" action="input-aksi-pelanggan.php" method="post">
<table>
<div class="row">
	<div class="col-md-10 col-md-offset-1">
		
		<div class="form-group">
		<label class="col-sm-6 control-label"><h3>Input Data Baru</h3></label>
		</div>
		

	<div class="form-group">
		<label class="col-sm-4 control-label">Nama Pelanggan</label>
		<div class="col-sm-6">
		<input type="text" name="nama_pelanggan" class="form-control">
		</div>
		</div>

    <div class="form-group">
		<label class="col-sm-4 control-label">Alamat</label>
		<div class="col-sm-6">
		<input type="text" name="alamat" class="form-control">
		</div>
	</div>

    <div class="form-group">
		<label class="col-sm-4 control-label">Nomor Telepon</label>
		<div class="col-sm-6">
		<input type="text" name="no_telp" class="form-control">
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
	<a href="pelanggan.php"> <i class="btn btn-warning">
		<i class="fa fa-paper-undo"></i> Kembali </i>
	</a>
	<a href="pelanggan.php">  <i class="btn btn-primary">
	<i class="fa fa-user-plus"></i>Lihat Semua Data</i>
	</a>
				</div>
			</div>
		</div>
	</div>
</table>
</form>
</body>
</html>