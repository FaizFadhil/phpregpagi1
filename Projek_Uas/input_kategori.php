<?php
include "koneksi.php";
if(isset($_POST['Save'])){
	$nama_ktg=$_POST['nama_ktg'];

$query=mysqli_query($koneksi,"insert into kategori(nama_ktg)
value ('$nama_ktg')");
if($query){
	header("location:tampil_kategori.php");
}else{
	echo mysqli_error($koneksi);
}
};
include "header.php";
?>
<h1><center> TAMBAHKAN KATEGORI </center></h1>
<form method ="POST">
<table border="1" class="table table-bordered table-dark">
	<tr>
		<td>Nama Kategori</td>

	</tr>
	<tr>
		<td><input class="form-control" type="text" name="nama_ktg"></td>
	</tr>
</table>
		<button><input type="submit" class="btn btn-primary btn-sm"name="Save" value="Simpan"></button>
		<input type='button'value='Tambah Satuan'onClick='top.location="input_Satuan.php"'class='btn btn-primary btn-sm'>

</form>
<?php
include "footer.php";
?>