<?php
include('koneksi.php');
session_start();
if(!($_SESSION['aktif'])){
	echo "<SCRIPT>alert('silahkan login terlebih dahulu');window.location='index.php'</SCRIPT>";
}
$tampil=mysqli_query($conn, "SELECT * from karyawan WHERE id_karyawan='".$_GET['id_karyawan']."'");
$hasil_data=mysqli_fetch_array($tampil);
?>
<link rel="stylesheet" type="text/css" href="style.css">
<title>Cek Sisa Cuti</title>
<div class="kolom">
	<p>Halo <?php echo $_SESSION['aktif']." (".$_SESSION['jabatan'].")";	?></p>
    Sisa Cuti Anda adalah <?php echo $hasil_data['hak_cuti'] ;?> Hari. <br><br>
    <a href="home.php" class="myButton">Kembali</a>
</div>