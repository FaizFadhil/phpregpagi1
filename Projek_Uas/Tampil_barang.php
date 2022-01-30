<?php
include "koneksi.php";
include "header.php";

?>
<h1><center> DAFTAR BARANG </center></h1>

		<table class="table table-striped table-dark"border="1">
	<tr>
		<td>No</td>
		<td>Nama</td>
		<td>Kategori</td>
		<td>Satuan</td>
		<td>Harga</td>
	</tr>
	<?php
		$no=1;
		$query = "SELECT * FROM satuan 
		INNER JOIN barang on barang.satuan_id = satuan.nama_satuan
		";
		$sql_brg = mysqli_query($koneksi, $query) or die (mysqli_error($koneksi));
		while ($data = mysqli_fetch_array($sql_brg)) {
		
	?>
	<tr>
		<td><?= $no++; ?></td>
		<td><?=$data['nama_barang']?></td>
		<td><?=$data['kategori_id']?></td>
		<td><?=$data['nama_satuan']?></td>
		<td><?=$data['harga']?></td>
	</tr>
	<?php }?>

</table>
<input type='button'value='Tambah Barang'onClick='top.location="input_barang.php"'class='btn btn-primary btn-sm'><?php include "footer.php";