<?php 
// memulai session
session_start();
// memanggil file koneksi
include("koneksi.php");

// mengecek apakah tombol login sudah di tekan atau belum
if(isset($_POST['login'])) {
	// mengecek apakah username dan password sudah di isi atau belum
	if(empty($_POST['username']) || empty($_POST['password'])) {
		// mengarahkan ke halaman login.php
		header("location: login.php?err=empty");
	}
	else {
		// membaca nilai variabel username dan password
		$username = $_POST['username'];
		$password = $_POST['password'];
		$akses = $_POST['akses'];
		// memeriksa username di tabel admin

			if($akses=="Admin"){
				$aks = "Admin";	
				$sql = "SELECT * FROM karyawan WHERE jabatan='$aks' AND username='$username' AND password='$password'";
				$ress = mysqli_query($conn, $sql);
				$rows = mysqli_num_rows($ress);
				$dataku = mysqli_fetch_array($ress);
				// mendaftarkan session jika username di temukan
				if($rows == 1) {
					// membuat variabel session
					$_SESSION['jabatan'] = $dataku['jabatan'];
					$_SESSION['id'] = $dataku['id_karyawan'];
					$_SESSION['aktif'] = $dataku['nama'];
					// mengarahkan ke halaman indeks.php
					header("location: hrd/home.php?login=success");
				}else{
					header("location: login.php?err=not_found");
				}
			}else if($akses=="Lead"){
				$aks = "Leader";
				$sql = "SELECT * FROM karyawan WHERE jabatan='$aks' AND username='$username' AND password='$password'";
				$ress = mysqli_query($conn, $sql);
				$rows = mysqli_num_rows($ress);
				$dataku = mysqli_fetch_array($ress);
				// mendaftarkan session jika username di temukan
				if($rows == 1) {
					// membuat variabel session
					$_SESSION['jabatan'] = $dataku['jabatan'];
					$_SESSION['id'] = $dataku['id_karyawan'];
					$_SESSION['aktif'] = $dataku['nama'];
					// mengarahkan ke halaman indeks.php
					header("location: home.php?login=success");
				}else{
					header("location: login.php?err=not_found");
				}
			}else if($akses=="Mng"){			
				$aks = "Manager";
				$sql = "SELECT * FROM karyawan WHERE jabatan='$aks' AND username='$username' AND password='$password'";
				$ress = mysqli_query($conn, $sql);
				$rows = mysqli_num_rows($ress);
				$dataku = mysqli_fetch_array($ress);
				// mendaftarkan session jika username di temukan
				if($rows == 1) {
					// membuat variabel session
					$_SESSION['jabatan'] = $dataku['jabatan'];
					$_SESSION['id'] = $dataku['id_karyawan'];
					$_SESSION['aktif'] = $dataku['nama'];
					// mengarahkan ke halaman indeks.php
					header("location: home.php?login=success");
				}else{
					header("location: login.php?err=not_found");
				}
			}else if($akses=="stf"){		
				$aks = "Staff";
				$sql = "SELECT * FROM karyawan WHERE jabatan='$aks' AND username='$username' AND password='$password'";
				$ress = mysqli_query($conn, $sql);
				$rows = mysqli_num_rows($ress);
				$dataku = mysqli_fetch_array($ress);
				// mendaftarkan session jika username di temukan
				if($rows == 1) {
					// membuat variabel session
					$_SESSION['jabatan'] = $dataku['jabatan'];
					$_SESSION['id'] = $dataku['id_karyawan'];
					$_SESSION['aktif'] = $dataku['nama'];
					// mengarahkan ke halaman indeks.php
					header("location: home.php?login=success");
				}else{
					header("location: login.php?err=not_found");
				}
			}else{			
				$aks = "Supervisor";
				$sql = "SELECT * FROM karyawan WHERE jabatan='$aks' AND username='$username' AND password='$password'";
				$ress = mysqli_query($conn, $sql);
				$rows = mysqli_num_rows($ress);
				$dataku = mysqli_fetch_array($ress);
				// mendaftarkan session jika username di temukan
				if($rows == 1) {
					// membuat variabel session
					$_SESSION['jabatan'] = $dataku['jabatan'];
					$_SESSION['id'] = $dataku['id_karyawan'];
					$_SESSION['aktif'] = $dataku['nama'];
					// mengarahkan ke halaman indeks.php
					header("location: home.php?login=success");
				}else{
					header("location: login.php?err=not_found");
				}
			}
	}
}
?>