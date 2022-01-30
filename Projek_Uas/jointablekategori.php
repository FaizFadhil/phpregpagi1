<!DOCTYPE html>
<html>
<head>
 <title>Join Table</title>
</head>
<body>
<table class="table table-bordered" border="1">
  <tr>
    <td>No</td>
    <td>Nama Barang</td>
    <td>Kategori</td>
    <td>Satuan</td>
</tr>
  
  <?php
  include ("konek.php");
  $query =mysqli_query($koneksi, "SELECT * FROM barang INNER JOIN kategori ON barang.id_kategori = kategori.id_kategori INNER JOIN satuan ON barang.id_satuan = satuan.id_satuan");
  $no=1;
  while($tampil=mysqli_fetch_array($query)){?>
    <tr>
      <td><?php echo $no++;?></td>
      <td><?php echo $tampil ['nama_barang'];?></td>
      <td><?php echo $tampil ['nama_kategori'];?></td>
      <td><?php echo $tampil ['nama_satuan'];?></td>
	</tr>
    <?php }?>
 </table>
</body>
</html>