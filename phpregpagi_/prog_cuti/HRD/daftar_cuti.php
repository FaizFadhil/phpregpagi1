<?php 
include '../koneksi.php';
 
// mengaktifkan session
session_start();
 
// cek apakah user telah login, jika belum login maka di alihkan ke halaman login
//if(	$_SESSION['aktif'] == ""){
//	echo "<SCRIPT>alert('silahkan login terlebih dahulu');window.location='login.php'</SCRIPT>";
//}
$kueri_tampil=mysqli_query($conn, "SELECT * from pengajuan");
?>
 
<link rel="stylesheet" type="text/css" href="../style.css">
<title>Daftar Pengajuan Cuti Karyawan</title>
<div class="daftar">
	
<center><h2>Daftar Pengajuan Cuti Karyawan</h2></center>
<table>
	<tr>
		<th>No</th>
		<th>Nama</th>
		<th>Bagian</th>
		<th>Jabatan</th>
		<th>Tanggal Pengajuan</th>
		<th>Tanggal Mulai Cuti</th>
		<th>Tanggal Cuti Berakhir</th>
		<th>Alasan</th>
		<th>Status</th>
		<th colspan='2'>Aksi</th>
	</tr>
	<?php
        $no=1;
        while($tampil=mysqli_fetch_array($kueri_tampil)){?>
	<tr>
		<td><?php echo $no++;?></td>
		<td><?php echo $tampil['nama'];?></td>
		<td><?php echo $tampil['bagian'];?></td>
		<td><?php echo $tampil['jabatan'];?></td>
		<td><?php echo $tampil['tgl_ajuan'];?></td>
		<td><?php echo $tampil['mulai_cuti'];?></td>
		<td><?php echo $tampil['akhir_cuti'];?></td>
		<td><?php echo $tampil['alasan'];?></td>
		<td><?php $status=$tampil['status']; if($status==0){
			echo "Belum Disetujui";
		}else if($status==1){
			echo "Disetujui";
		}else {
			echo "Ditolak";
		}?></td>
		<td><a href="cek_ajuan.php?id_ajuan=<?php echo $tampil['id_ajuan']; ?>" class="myButton">Review</a></td>
	</tr>
	<?php }?>
</table>
<br><br>
    <a href="home.php" class="myButton">Kembali</a>	
</div>