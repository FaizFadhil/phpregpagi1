<?php
$host = "localhost"; //host server
$user = "root"; //user login phpMyAdmin
$pass = ""; //pass login phpMyAdmin
$db = "cupcup"; //nama database
$conn = mysqli_connect($host, $user, $pass, $db) or die("Koneksi gagal");
// menyimpan data kedalam variabel
$id_barang   = $_POST['id_barang'];
$nama = $_POST['nama'];
$id_kategori = $_POST['id_kategori'];
$id_satuan = $_POST['id_satuan'];
// query SQL untuk insert data
$mysqli  = "INSERT INTO barang (id_barang,nama,id_kategori,id_satuan) VALUES ('$id_barang', '$nama','$id_kategori','$id_satuan')";
$result  = mysqli_query($conn, $mysqli);
mysqli_close($conn);
header("location:input_barang.php");