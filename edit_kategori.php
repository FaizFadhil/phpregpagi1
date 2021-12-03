<?php
include("koneksi.php");
if(isset($_POST['save'])){
$queri_edit=mysqli_query($koneksi,"UPDATE kategori set
    nama='".$_POST['nama']."',
    id_kategori='".$_POST['idkategori']."' 
    WHERE id_kategori='".$_POST['id_kategori']."'");
if($queri_edit){
    header("location:view_kategori.php");
}else{
    echo mysqli_error();
}
}
$tampil=mysqli_query($koneksi, "SELECT * from kategori WHERE id_kategori='".$_GET['id_kategori']."'");
$hasil_data=mysqli_fetch_array($tampil);
?>

<form method="POST" >
<table border="1 px">
    <input type="hidden" name="id_kategori" value="<?php echo $hasil_data['id_kategori'];?>">
    <tr>
        <td>Nama Kategori</td>
        <td><input type="text" name="nama" class="form-control" value="<?php echo $hasil_data['nama'];?>"></td>
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