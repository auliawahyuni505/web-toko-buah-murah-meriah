<?php
include 'header.php';
?>

	<div class="judul">
		<h1><p align="center">Data Pelanggan</p></h1>
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
<a href="input-pelanggan.php"> <i class="btn btn-sm btn-primary">
	<i class="fa fa-user-plus"></i>Tambah Data Baru</i>
<a href="cetak-pelanggan.php"><i class="btn btn-sm btn-primary">
	<i class="fa fa-user-plus"></i>Cetak</i>
</a>
<br/>
<br/>
	
	<div class="table-responsive">
		<table class="table table-bordertext table-striped table-hover">
	<tr>
<th>Id Pelanggan</th>
<th>Nama Pelanggan</th>
<th>Alamat</th>
<th>Nomor Telepon</th>
<th>Opsi</th>
</tr>
<?php
include "koneksi.php";
$query_mysql = mysql_query("SELECT * FROM tb_pelanggan")or die(mysql_error());
		$nomor = 1;
		while($data = mysql_fetch_array($query_mysql)){
		?>
		<tr>
			<td><?php echo $nomor++; ?></td>
			<td><?php echo $data['nama_pelanggan']; ?></td>
            <td><?php echo $data['alamat']; ?></td>
            <td><?php echo $data['no_telp']; ?></td>
			<td>
				<a href="edit-pelanggan.php?id_pelanggan=<?php echo $data['id_pelanggan']; ?>" class="btn btn-sm btn-warning"><span class="glyphicon-pencil">Edit</span></a> 
				<a href="hapus-pelanggan.php?id_pelanggan=<?php echo $data['id_pelanggan']; ?>" class="btn btn-sm btn-danger" onclick="return confirm('apakah anda yakin menghapus?')"><span class="glyphicon glyphicon-trash">Hapus</span></a> 					
			</td>
		</tr>
		<?php } ?>
	</table>
</body>
</html>