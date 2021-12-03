<?php   
include("koneksi.php");
$queri_delete=mysqli_query($koneksi, "DELETE from anggota WHERE id_anggota='".$_GET['id_anggota']."'");
if($queri_delete){
    header("location:view_anggota.php");
}else{
    echo mysqli_error();
}
?>