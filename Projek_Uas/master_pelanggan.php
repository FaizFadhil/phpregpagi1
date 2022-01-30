<?php
$host = "localhost"; //host server
$user = "root"; //user login phpMyAdmin
$pass = ""; //pass login phpMyAdmin
$db = "cupcup"; //nama database
$conn = mysqli_connect($host, $user, $pass, $db) or die("Koneksi gagal");

// menyimpan data kedalam variabel
$id_pelanggan   = $_POST['id_pelanggan'];
$nama_pelanggan = $_POST['nama_pelanggan'];
$no_telp = $_POST['no_telp'];
$status = $_POST['status'];
// query SQL untuk insert data
$mysqli  = "INSERT INTO pelanggan (id_pelanggan,nama_pelanggan,no_telp,status) VALUES ('$id_pelanggan', '$nama_pelanggan','$no_telp','$status')";
$result  = mysqli_query($conn, $mysqli);
mysqli_close($conn);
header("location:input_pelanggan.php");