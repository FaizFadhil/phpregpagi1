<?php   
include("koneksi.php");
$queri_delete=mysqli_query($koneksi, "DELETE from kategori WHERE id_kategori='".$_GET['id_kategori']."'");
if($queri_delete){
    header("location:view_kategori.php");
}else{
    echo mysqli_error();
}
?>