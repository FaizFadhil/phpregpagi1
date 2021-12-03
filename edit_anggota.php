<?php
include("koneksi.php");
if(isset($_POST['save'])){
$queri_edit=mysqli_query($koneksi,"UPDATE anggota set
    nama='".$_POST['nama']."',
    id_anggota='".$_POST['idanggota']."',
    alamat='".$_POST['alamat']."',
    no_tlpn='".$_POST['no_tlpn']."' WHERE id_anggota='".$_POST['id_anggota']."'");
if($queri_edit){
    header("location:view_anggota.php");
}else{
    echo mysqli_error();
}
}
$tampil=mysqli_query($koneksi, "SELECT * from anggota WHERE id_anggota='".$_GET['id_anggota']."'");
$hasil_data=mysqli_fetch_array($tampil);
?>

<form method="POST" >
<table border="1 px">
    <input type="hidden" name="id_anggota" value="<?php echo $hasil_data['id_anggota'];?>">
    <tr>
        <td>ID Anggota</td>
        <td><input type="text" name="idanggota" class="form-control" value="<?php echo $hasil_data['id_anggota'];?>"></td>
    </tr>
    <tr>
        <td>Nama Anggota</td>
        <td><input type="text" name="nama" class="form-control" value="<?php echo $hasil_data['nama'];?>"></td>
    </tr>
    <tr>
        <td>Alamat</td>
        <td><input type="text" name="alamat" class="form-control" value="<?php echo $hasil_data['alamat'];?>"></td>
    </tr>
    <tr>
        <td>No Tlpon</td>
        <td><input type="text" name="no_tlpn" class="form-control" value="<?php echo $hasil_data['no_tlpn'];?>"></td>
    </tr>
    <tr>
        <td><input type="submit" value="Update Data" name="save"></td>
    </tr>
    <table>
</form>