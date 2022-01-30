<?php
include "koneksi.php";
if(isset($_POST['Save'])){
	$nama_transaksi=$_POST['nama_transaksi'];
	$tgl_transaksi=$_POST['tgl_transaksi'];
	$qty=$_POST['qty'];
	$id_barang=$_POST['id_barang'];
	$diskon=$_POST['diskon'];
	$id_pelanggan=$_POST['id_pelanggan'];
$query=mysqli_query($koneksi,"insert into transaksi(nama_transaksi,tgl_transaksi,qty,id_barang,diskon,id_pelanggan)
value ('$nama_transaksi',
'$tgl_transaksi',
'$qty','$id_barang','$diskon','$id_pelanggan')");
if($query){
	header("location:tampil_transaksi.php");
}else{
	echo mysqli_error($koneksi);
}
};
include "header.php"
?>
<h1><center> TAMBAHKAN TRANSAKSI </center></h1>
<form method ="POST">
<table border="1" class="table table-bordered table-dark">
	<tr>
		<td>Nama</td>
		<td>Tanggal Transaksi</td>
		<td>Qty</td>
		<td>Nama Barang</td>
		<td>Nama Pelanggan</td>
		<td>Diskon</td>
	</tr>
	<tr>
		<td><input class="form-control" type="text" name="nama_transaksi"></td>
		<td><input class="form-control" type="date" name="tgl_transaksi"></td>
		<td><input class="form-control" type="number" name="qty"></td>

		<td><input class="form-control" type="text" name="id_barang"></td>
		<td><select class="form-control" name="nama_pelanggan">
			<option value="">-----Pilih-----</option>
			<?php 
			$sql_satuan = mysqli_query ($koneksi, "Select * from pelanggan" ) or die
			(mysql_error($koneksi));
			while ($satuan = mysqli_fetch_array($sql_satuan)) {
				echo '<option value="'.$satuan['nama_pelanggan'].'">'.$satuan['nama_pelanggan'].'</option>';
			} ?>
		</select></td>
		<td><input class="form-control" type="number" name="diskon"></td>
	</tr>
	<td>
	<button><input type="submit" class="btn btn-primary btn-sm"name="Save" value="Simpan"></button>
	</td>
</table>
</form><input type='button'value='Tambah Pelanggan'onClick='top.location="input_pelanggan.php"'class='btn btn-primary btn-sm'>