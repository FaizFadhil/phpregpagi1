<?php
include "koneksi.php";
include "header.php"

?>
<h1><center> DAFTAR PELANGGAN </center></h1>

<table class="table table-striped table-dark table-success"border="1">

	<tr>
		<td>No</td>
		<td>Nama Pelanggan</td>
		<td>Nomor Telpon</td>
		<td>Keterangan</td>
		
	</tr>
	<?php
		$no=1;
		$query = "SELECT * FROM pelanggan
		";
		$sql_brg = mysqli_query($koneksi, $query) or die (mysqli_error($koneksi));
		while ($data = mysqli_fetch_array($sql_brg)) {
		
	?>
	<tr>
		<td><?= $no++; ?></td>
		<td><?=$data['nama_pelanggan']?></td>
		<td><?=$data['no_tlp']?></td>
		<td><?=$data['status']?></td>
	</tr>
	<?php }?>

</table>
<input type='button'value='Tambah Pelanggan'onClick='top.location="input_pelanggan.php"'class='btn btn-success btn-sm'>
	<?php
include "footer.php";
?>