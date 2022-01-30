<?php
$host = "localhost"; //host server
$user = "root"; //user login phpMyAdmin
$pass = ""; //pass login phpMyAdmin
$db = "cupcup"; //nama database
$conn = mysqli_connect($host, $user, $pass, $db) or die("Koneksi gagal");

// menyimpan data kedalam variabel
$id_transaksi   = $_POST['id_transaksi'];
$nama_transaksi = $_POST['nama_transaksi'];
$tgl_transaksi = $_POST['tgl_transaksi'];
$harga = $_POST['harga'];
$qty = $_POST['qty'];
$id_barang = $_POST['id_barang'];
$diskon = $diskonmember;
$id_pelanggan = $_POST['id_pelanggan'];





// query SQL untuk insert data
$mysqli  = "INSERT INTO transaksi (id_transaksi,nama_transaksi,tgl_transaksi,harga,qty,id_barang,diskon,id_pelanggan) VALUES ('$id_transaksi', '$nama_transaksi','$tgl_transaksi','$harga','$qty','$id_barang','$diskon','$id_pelanggan')";
$result  = mysqli_query($conn, $mysqli);
mysqli_close($conn);
header("location:input_transaksi.php");