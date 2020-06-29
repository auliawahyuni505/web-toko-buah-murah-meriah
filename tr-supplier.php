<?php
include 'header.php';
?>

	<div class="judul">
		<h1><p align="center">Data Transaksi Suplier</p></h1>
	</div>
<br/>
	<?php
		if(isset($_GET['pesan'])){
			$pesan=$_GET ['pesan'];
				if($pesan=="input"){
					echo "data berhasil di input.";
				}elseif($pesan=="update"){
					echo "Data berhasil di update.";
				}elseif($pesan=="hapus"){
					echo "data berhasil dihapus.";
					}
		}
	?>
<br/>
<a href="input-tr.php"> <i class="btn btn-sm btn-primary">
	<i class="fa fa-user-plus"></i>Tambah Data Baru</i>
</a>
<a href="cetak-tr.php"> <i class="btn btn-sm btn-primary">
	<i class="fa fa-user-plus"></i>Cetak</i>
</a>
<br/>
<br/>
	
	<div class="table-responsive">
		<table class="table table-bordertext table-striped table-hover">
	<tr>
<th>Nomor</th>
<th>Id Pelanggan</th>
<th>Nama Pelanggan</th>
<th>ID Satuan</th>
<th>Satuan</th>
<th>Kode Buah</th>
<th>Nama Buah</th>
<th>Harga</th>
<th>Jumlah Beli</th>
<th>Total Harga</th>
<th>Jumlah Bayar</th>
<th>Opsi</th>
</tr>
<?php
include "koneksi.php";
$query_mysql = mysql_query("SELECT * FROM view_supplier")or die(mysql_error());
		$nomor = 1;
		while($data = mysql_fetch_array($query_mysql)){
		?>
		<tr>
			<td><?php echo $nomor++; ?></td>
			<td><?php echo $data['id_supplier']; ?></td>
			<td><?php echo $data['nama_supplier']; ?></td>
			<td><?php echo $data['id_satuan']; ?></td>
			<td><?php echo $data['nm_satuan']; ?></td>
			<td><?php echo $data['kd_buah']; ?></td>
            <td><?php echo $data['nama_buah']; ?></td>
			<td><?php echo $data['harga']; ?></td>
            <td><?php echo $data['jumlah_beli']; ?></td>
            <td><?php echo $data['total_harga']; ?></td>
            <td><?php echo $data['jumlah_bayar']; ?></td>
			<td>
				<a href="edit-tr.php?kd_transaksi=<?php echo $data['kd_transaksi']; ?>" class="btn btn-sm btn-warning"><span class="glyphicon-pencil">Edit</span></a> 
				<a href="hapus-tr.php?kd_transaksi=<?php echo $data['kd_transaksi']; ?>" class="btn btn-sm btn-danger" onclick="return confirm('apakah anda yakin menghapus?')"><span class="glyphicon glyphicon-trash">Hapus</span></a> 					
			</td>
		</tr>
		<?php } ?>
	</table>
</body>
</html>