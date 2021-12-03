<?php 
session_start();
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
	<?php include ('layout_alert.php');?>
	<center><h2>Login ke akun</h2></center>
		<form action="cek_login.php" method="post" onSubmit="return validasi()">
		<div>
			<label>Username:</label>
			<input type="text" name="username" id="username"></input>
		</div>
		<div>
			<label>Password:</label>
			<input type="password" name="password" id="password"></input>
		</div>			
		<div>
		<div class="input-group mb-3">
		    <span class="input-group-text bg-primary"><i class="bi bi-person-plus-fill text-white"></i></span>
				<select class="form-control" name="akses" required>
				<option value="">======= Login Sebagai =======</option>
				<option value="Admin">Administrator/HRD</option>
				<option value="Lead">Leader</option>
				<option value="Mng">Manager</option>
				<option value="stf">Staff</option>
				<option value="Spv">Supervisor</option>
				</select>
			</div>
			<br>
		<input name="login" type="submit" value="Login" class="myButton">
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