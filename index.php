<?php 
session_start();
if(isset($_SESSION['username'])){
	header("location:home.php");
}
	if(isset($_GET['pesan'])){
		if($_GET['pesan']=="gagaluser"){
			echo "<SCRIPT>alert('Username dan Password tidak sesuai !');window.location='index.php'</SCRIPT>";
		}else if($_GET['pesan']=="gagalaktif"){
			echo "<SCRIPT>alert('User tidak aktif !');window.location='index.php'</SCRIPT>";
		}
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login Member</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<br/>
	<br/>
	<br/>
	<br/>
	<div class="login">
	<center><h2>Login ke akun</h2></center>
		<form action="cek_login.php" method="post" onSubmit="return validasi()">
		<div>
			<label>Username:</label>
			<input type="text" name="username" id="username" />
		</div>
		<div>
			<label>Password:</label>
			<input type="password" name="password" id="password" />
		</div>			
		<div>
			<input type="submit" value="Login" class="tombol">
		</div>
		</form>
	</div>
</body>
<script type="text/javascript">
	function validasi() {
		var username = document.getElementById("username").value;
		var password = document.getElementById("password").value;		
		if (username != "" && password!="") {
			return true;
		}else{
			alert('Username dan Password harus di isi !');
			return false;
		}
	}
 
</script>

</html>