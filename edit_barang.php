<?php
include("koneksi.php");
if(isset($_POST['save'])){
$queri_edit=mysqli_query($koneksi,"UPDATE barang set
    nama='".$_POST['nama']."',
    id_barang='".$_POST['idbarang']."',
    id_kategori='".$_POST['idkategori']."' WHERE id_barang='".$_POST['id_barang']."'");
if($queri_edit){
    header("location:view_barang.php");
}else{
    echo mysqli_error();
}
}
$tampil=mysqli_query($koneksi, "SELECT * from barang WHERE id_barang='".$_GET['id_barang']."'");
$hasil_data=mysqli_fetch_array($tampil);
?>

<form method="POST" >
<table border="1 px">
    <input type="hidden" name="id_barang" value="<?php echo $hasil_data['id_barang'];?>">
    <tr>
        <td>Nama Barang</td>
        <td><input type="text" name="nama" class="form-control" value="<?php echo $hasil_data['nama'];?>"></td>
    </tr>
    <tr>
        <td>ID Barang</td>
        <td><input type="text" name="idbarang" class="form-control" value="<?php echo $hasil_data['id_barang'];?>"></td>
    </tr>
    <tr>
        <td>ID Kategori</td>
        <td><input type="text" name="idkategori" class="form-control" value="<?php echo $hasil_data['id_kategori'];?>"></td>
    </tr>
    <tr>
        <td><input type="submit" value="Update Data" name="save"></td>
    </tr>
    <table>
</form>