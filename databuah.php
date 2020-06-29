<?php
include 'header.php';
?>

	<div class="judul">
		<h1><p align="center">Data Buah</p></h1>
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
<a href="input-buah.php"> <i class="btn btn-sm btn-primary">
	<i class="fa fa-user-plus"></i>Tambah Data Baru</i>
<a href="cetak-buah.php"><i class="btn btn-sm btn-primary">
	<i class="fa fa-user-plus"></i>Cetak</i>
</a>
<br/>
<br/>
	
	<div class="table-responsive">
		<table class="table table-bordertext table-striped table-hover">
	<tr>
<th>Kode Buah</th>
<th>Nama Buah</th>
<th>Kategori</th>
<th>Opsi</th>
</tr>
<?php
include "koneksi.php";
$query_mysql = mysql_query("SELECT * FROM tb_buah")or die(mysql_error());
		$nomor = 1;
		while($data = mysql_fetch_array($query_mysql)){
		?>
		<tr>
			<td><?php echo $nomor++; ?></td>
			<td><?php echo $data['nama_buah']; ?></td>
			<td><?php echo $data['kategori']==1 ? "Ekspor" : "Import" ?></td>
			<td>
				<a href="edit-buah.php?kd_buah=<?php echo $data['kd_buah']; ?>" class="btn btn-sm btn-warning"><span class="glyphicon-pencil">Edit</span></a> 
				<a href="hapus-buah.php?kd_buah=<?php echo $data['kd_buah']; ?>" class="btn btn-sm btn-danger" onclick="return confirm('apakah anda yakin menghapus?')"><span class="glyphicon glyphicon-trash">Hapus</span></a> 					
			</td>
		</tr>
		<?php } ?>
	</table>
</body>
</html>