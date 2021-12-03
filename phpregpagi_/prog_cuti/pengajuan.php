<?php include("koneksi.php");  
session_start();
if(isset($_POST['save'])){ 
    $aj = $_POST['tgl_ajuan'];
    $ajuan = date('Y-m-d', strtotime($aj));
    $mu = $_POST['mulai_cuti'];
    $mulai = date('Y-m-d', strtotime($mu));
    $ak = $_POST['akhir_cuti'];
    $akhir = date('Y-m-d', strtotime($ak));
    $query_input=mysqli_query($conn,"INSERT INTO pengajuan(nama,bagian,jabatan,tgl_ajuan,mulai_cuti,akhir_cuti,alasan,status) 
    values( 
        '".$_POST['nama']."',
        '".$_POST['bagian']."',
        '".$_POST['jabatan']."',
        '".$ajuan."',
        '".$mulai."',
        '".$akhir."',
        '".$_POST['alasan']."',
        '0')");
    if($query_input){
        header('location:daftar_cuti.php'); 
    }else{ 
    echo mysqli_error(); } } ?>
<link rel="stylesheet" type="text/css" href="style.css">
<title>Pengajuan Cuti Karyawan</title>
<div class="tabel">
    <center><h2>Formulir Pengajuan Cuti Karyawan</h2></center>
    <form method="post" onSubmit="return validasi()">
        <label name="nama" >Nama Karyawan</label>
        <input class="input" type="text"></input>

		<label>Bagian</label>
		<input class="input" type="text" name="bagian"></input>
        
        <label>Jabatan</label>
		<input class="input" type="text" name="jabatan"></input>
		
        <label>Tanggal Pengajuan     :</label>
		<input class="input" type="date" name="tgl_ajuan"></input><br>

        <label>Tanggal Mulai Cuti    :</label>
		<input class="input" type="date" name="mulai_cuti"></input><br>

        <label>Tanggal Cuti Berakhir :</label>
		<input class="input" type="date" name="akhir_cuti"></input><br>
		<br>
        <label>Alasan</label>
		<input class="input" type="text" name="alasan"></input>
		<br>
        <input Name="save" type="submit" value="Ajukan" class="myButton"></input>
        <a href="home.php" class="myButton">Kembali</a>	
    </form>
</div>