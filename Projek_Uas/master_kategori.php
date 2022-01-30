<?php
$host = "localhost"; //host server
$user = "root"; //user login phpMyAdmin
$pass = ""; //pass login phpMyAdmin
$db = "cupcup"; //nama database
$conn = mysqli_connect($host, $user, $pass, $db) or die("Koneksi gagal");

// menyimpan data kedalam variabel
$id_kategori   = $_POST['id_kategori'];
$nama = $_POST['nama'];
// query SQL untuk insert data
$mysqli  = "INSERT INTO kategori (id_kategori,nama) VALUES ('$id_kategori', '$nama')";
$result  = mysqli_query($conn, $mysqli);
mysqli_close($conn);
header("location:input_kategori.php");