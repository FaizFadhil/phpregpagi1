<?php
include "koneksi.php";
if(isset($_POST['Save'])){
	$nama_pelanggan=$_POST['nama_pelanggan'];
	$no_tlp=$_POST['no_tlp'];
	$status=$_POST['status'];
$query=mysqli_query($koneksi,"insert into pelanggan(nama_pelanggan, no_tlp, status)
value ('$nama_pelanggan','$no_tlp','$status')");
if($query){
	header("location:tampil_pelanggan.php");
}else{
	echo mysqli_error($koneksi);
}
};
include "header.php"
?>
<h1><center> TAMBAHKAN DATA PELANGGAN </center></h1>
<form method ="POST">
<table border="1" class="table table-bordered table-dark">
	<tr>
		<td>Nama Pelanggan</td>
		<td>Nomor Telpon</td>
		<td>Setatus Pelanggan</td>
	</tr>
	<tr>
		<td><input class="form-control" type="text" name="nama_pelanggan"></td>
		<td><input class="form-control" type="number" name="no_tlp"></td>
		<td><select class="form-control" name="status">
			<option value="">-----Pilih-----</option>
			<option value="Member">Member</option>
			<option value="Non">Non Member</option>
	</tr>
</table>
		<button><input type="submit" class="btn btn-primary btn-sm"name="Save" value="Simpan"></button>
		<input type='button'value='Tambah Transaksi'onClick='top.location="input_transaksi.php"'class='btn btn-primary btn-sm'>
</form>
<?php include "footer.php";
?>