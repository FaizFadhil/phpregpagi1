<?php
include('koneksi.php');
session_start();
if(!($_SESSION['username'])){
	echo "<SCRIPT>alert('silahkan login terlebih dahulu');window.location='index.php'</SCRIPT>";
}
$kueri_tampil=mysqli_query($koneksi, "SELECT * from anggota");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="style.css">
    <title>View Anggota</title>
</head>
<body>
<div class="tabel">
<center><?php 
if(	$_SESSION['level'] == "admin"){
    echo '<a href="input_anggota.php">Tambah Anggota</a>';
}?> <a href="home.php">Halaman Utama</a></center>
<br>
<table align="center" border="1 px">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama Anggota</th>
            <th>Alamat</th>
            <th>No Telpon</th>
            <?php if($_SESSION['level'] == "admin"){ echo "<th colspan='2'>Aksi</th>";}?>
        </tr>
    </thead>
    <?php
        $no=1;
        while($tampil=mysqli_fetch_array($kueri_tampil)){?>
        <tr>
            <td><?php echo $no++;?></td>
            <td><?php echo $tampil['nama'];?></td>
            <td><?php echo $tampil['alamat'];?></td>
            <td><?php echo $tampil['no_tlpn'];?></td>
            <?php if($_SESSION['level'] == "admin"){ 
                echo '<td><a href="edit_anggota.php?id_anggota='.$tampil['id_anggota'].'">Edit</a></td>'; 
                echo '<td><a href="hapus_anggota.php?id_anggota='.$tampil['id_anggota'].'">Hapus</a></td>';
                }?>
        </tr>
    <?php }?>
</table>
</div>
</body>
</html>