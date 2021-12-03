<?php   
include("koneksi.php");
$queri_delete=mysqli_query($koneksi, "DELETE from barang WHERE id_barang='".$_GET['id_barang']."'");
if($queri_delete){
    header("location:view_barang.php");
}else{
    echo mysqli_error();
}
?>