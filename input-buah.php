<?php
include 'header.php';
?>
<form class="form-horizontal" action="input-aksi-buah.php" method="post">
<table>
<div class="row">
	<div class="col-md-10 col-md-offset-1">
		
		<div class="form-group">
		<label class="col-sm-6 control-label"><h3>Input Data Baru</h3></label>
		</div>
		
		
	<div class="form-group">
		<label class="col-sm-4 control-label">Kode Buah</label>
		<div class="col-sm-6">
		<input type="text" name="kd_buah" class="form-control">
		</div>
		</div>

	<div class="form-group">
		<label class="col-sm-4 control-label">Nama Buah</label>
		<div class="col-sm-6">
		<input type="text" name="nama_buah" class="form-control">
		</div>
		</div>

	<div class="form-group">
		<label class="col-sm-4 control-label">Kategori</label>
		<div class="col-sm-6">
		<select name="kategori" class="form-control">
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
	<a href="databuah.php"> <i class="btn btn-warning">
		<i class="fa fa-paper-undo"></i> Kembali </i>
	</a>
	<a href="databuah.php">  <i class="btn btn-primary">
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