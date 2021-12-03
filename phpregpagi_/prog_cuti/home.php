<?php
include('koneksi.php');
session_start();
if(!($_SESSION['aktif'])){
	echo "<SCRIPT>alert('silahkan login terlebih dahulu');window.location='login.php'</SCRIPT>";
}
$kueri_tampil=mysqli_query($conn, "SELECT * from karyawan");
?>
<link rel="stylesheet" type="text/css" href="style.css">
<title>Home</title>
<div class="kolom">
	<p>Selamat Datang <?php echo $_SESSION['aktif']." (".$_SESSION['jabatan'].")";	?></p>
<div id="related_links">
  <ul>
    <li><a href="pengajuan.php">Ajukan Cuti</a></li>
    <li><a href="daftar_cuti.php">Daftar Pengajuan Cuti Karyawan</a></li>
    <li><a href="cek_cuti.php?id_karyawan=<?php echo $_SESSION['id'];?>">Cek Sisa Cuti</a></li>
    <li><a href="logout.php" onclick="return confirm('Yakin keluar?')">Keluar</a></li>
  </ul>
</div>
	
</div>