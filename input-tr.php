<?php
include 'header.php';
?>
<form class="form-horizontal" action="input-aksi-tr.php" method="post">
<table>
<div class="row">
	<div class="col-md-10 col-md-offset-1">
		
		<div class="form-group">
		<label class="col-sm-6 control-label"><h3>Input Data Baru</h3></label>
		</div>
	<div class="form-group">
		<label class="col-sm-4 control-label">Nama Supplier</label>
			<div class="col-sm-6">
				<select name="id_supplier" class="form-control">
					<option value="" selected="selected">-Pilih-</option>
						<?php
						include 'koneksi.php';
						// query untuk menampilkan semua data mata pelajaran dari tabel
						$query="SELECT*FROM tb_supplier";
						$hasil=mysql_query($query);
						while ($data= mysql_fetch_array($hasil))
						{
						echo "<option value='",$data['id_supplier'],"'>",$data['nama_supplier'],"</option>";
						}
						?>
				</select>
			</div>
		</div>

 
		
        <div class="form-group">
		<label class="col-sm-4 control-label">Satuan</label>
			<div class="col-sm-6">
				<select name="id_satuan" class="form-control">
					<option value="" selected="selected">-Pilih-</option>
						<?php
						include 'koneksi.php';
						// query untuk menampilkan semua data mata pelajaran dari tabel
						$query="SELECT*FROM tb_satuan";
						$hasil=mysql_query($query);
						while ($data= mysql_fetch_array($hasil))
						{
						echo "<option value='",$data['id_satuan'],"'>",$data['nm_satuan'],"</option>";
						}
						?>
				</select>
			</div>
		</div>	
		<div class="form-group">
		<label class="col-sm-4 control-label">Nama Buah</label>
			<div class="col-sm-6">
				<select name="id_pelanggan" class="form-control">
					<option value="" selected="selected">-Pilih-</option>
						<?php
						include 'koneksi.php';
						// query untuk menampilkan semua data mata pelajaran dari tabel
						$query="SELECT*FROM tb_buah";
						$hasil=mysql_query($query);
						while ($data= mysql_fetch_array($hasil))
						{
						echo "<option value='",$data['kd_buah'],"'>",$data['nama_buah'],"</option>";
						}
						?>
				</select>
			</div>
		</div>
	<div class="form-group">
		<label class="col-sm-4 control-label">Harga</label>
		<div class="col-sm-6">
		<input type="text" name="harga" class="form-control">
		</div>
	</div>
	
	<div class="form-group">
		<label class="col-sm-4 control-label">Jumlah Beli</label>
		<div class="col-sm-6">
		<input type="text" name="jumlah_beli" class="form-control">
		</div>
	</div>
    <div class="form-group">
		<label class="col-sm-4 control-label">Total Harga</label>
		<div class="col-sm-6">
		<input type="text" name="total_harga" class="form-control">
		</div>
	</div>
    <div class="form-group">
		<label class="col-sm-4 control-label">Total Bayar</label>
		<div class="col-sm-6">
		<input type="text" name="jumlah_bayar" class="form-control">
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
	<a href="transaksi.php"> <i class="btn btn-warning">
		<i class="fa fa-paper-undo"></i> Kembali </i>
	</a>
	<a href="transaksi.php">  <i class="btn btn-primary">
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