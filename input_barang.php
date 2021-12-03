<?php include("koneksi.php");  
if(isset($_POST['save'])){ 
    $query_input=mysqli_query($koneksi,"insert into barang(nama) values( '".$_POST['nama']."')");
    if($query_input){ header('location:view_barang.php'); 
    }else{ 
    echo mysqli_error(); } } ?>
    <form method="POST"> 
        <table class="table table-bordered" border="1"> 	
            <tr>
                <td>Nama Barang</td>
                <td><input type="text" name="nama" class="form-control"></td> 	
            </tr> 	
            <tr>
                <td><input type="submit" name="save" class="btn btn-danger"></td>
                </tr>
        </table>
    </form>