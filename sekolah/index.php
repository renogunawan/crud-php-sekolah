<?php
// Include config file
require_once "config.php";


if (isset($_POST['kirim'])) {
	// Mendapatkan data pengguna dari database
	$username = $_POST['nama'];
	$query = "SELECT * FROM register WHERE nama='$username'";
	$result = mysqli_query($link, $query);
	$user = mysqli_fetch_assoc($result);
  
	// Memeriksa apakah password yang dimasukkan sesuai
	if (password_verify($_POST['password'], $user['password'])) {
	  // Jika password sesuai, proses login berhasil
	  session_start();
	  $_SESSION['id'] = $user['id'];
	  $_SESSION['nama'] = $user['nama'];
  
	  // Menampilkan pesan alert ketika login berhasil
	  echo "<script>alert('Login berhasil!');</script>";
  
	  header("Location: dashboard.php");
	  exit();
	} else {
		// Jika password tidak sesuai, proses login gagal
		echo "<script>alert('Username atau password salah!');</script>";
	  } 
  }
  
  
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login </title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	
	<div class="limiter">
	<form action="" method="post">
		<div class="container-login100" style="background-image: url('images/bg-01.jpg');">
			<div class="wrap-login100 p-t-30 p-b-50">
				<span class="login100-form-title p-b-41">
					Account Login
				</span>
				<form class="login100-form validate-form p-b-33 p-t-5">

					<div class="wrap-input100 validate-input" data-validate = "Enter nama">
						<input class="input100" type="nama" name="nama" placeholder="Username" style="background-color: white;">
						<span class="focus-input100" data-placeholder="&#xe82a;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<input class="input100" type="password" name="password" placeholder="Password" style="background-color: white;">
						<span class="focus-input100" data-placeholder="&#xe80f;"></span>
					</div>

					<div class="container-login100-form-btn m-t-32" >
					<button class="login100-form-btn" name="kirim">
							Login  
                 </button>&nbsp;&nbsp;&nbsp;&nbsp;
				<button class="login100-form-btn">
		        <a href="register.php" style="color:white">Register</a>
				</button>
					</div>
					<a href="http://localhost/sekolah/forgot_password.php" style="color:white">Lupa password?</a>

				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>

</body>
</html>
