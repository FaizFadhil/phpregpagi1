<?php
include("../koneksi.php");
session_start();
if(isset($_POST['save'])){
$queri_edit=mysqli_query($conn,"UPDATE pengajuan set
    status='".$_POST['status']."' WHERE id_ajuan='".$_POST['id_ajuan']."'");
if($queri_edit){
    header("location:daftar_cuti.php");
}else{
    echo mysqli_error();
}
}
$tampil=mysqli_query($conn, "SELECT * from pengajuan WHERE id_ajuan='".$_GET['id_ajuan']."'");
$hasil_data=mysqli_fetch_array($tampil);
?>
<link rel="stylesheet" type="text/css" href="../style.css">
<title>Review Status Pengajuan Cuti Karyawan</title>
<div class="tabel">
<form method="POST" >
    <table >
    <input type="hidden" name="id_ajuan" value="<?php echo $hasil_data['id_ajuan'];?>">
        <label>Nama Karyawan</label>
        <input class="input" type="text" value="<?php echo $hasil_data['nama'];?>" disabled></input>

		<label>Bagian</label>
		<input class="input" type="text" value="<?php echo $hasil_data['bagian'];?>" disabled></input>
        
        <label>Jabatan</label>
		<input class="input" type="text" value="<?php echo $hasil_data['jabatan'];?>" disabled></input>
		
        <label>Tanggal Pengajuan     :</label>
		<input class="input" type="text" value="<?php echo $hasil_data['tgl_ajuan'];?>" disabled></input><br>

        <label>Tanggal Mulai Cuti    :</label>
		<input class="input" type="text" value="<?php echo $hasil_data['mulai_cuti'];?>" disabled></input><br>

        <label>Tanggal Cuti Berakhir :</label>
		<input class="input" type="text" value="<?php echo $hasil_data['akhir_cuti'];?>" disabled></input><br>

        <label>Alasan</label>
		<input class="input" type="text" value="<?php echo $hasil_data['alasan'];?>" disabled></input> <br>
        <label>Status </label>
        		<select name="status" required>
				<option value="">======= Pilih Aksi =======</option>
				<option value="0">Belum Disetujui</option>
				<option value="1">Disetujui</option>
				<option value="2">Ditolak</option>
				</select><br>
				<br>
        <input Name="save" type="submit" value="Update" class="myButton"></input>
    <table>
</form>
</div>