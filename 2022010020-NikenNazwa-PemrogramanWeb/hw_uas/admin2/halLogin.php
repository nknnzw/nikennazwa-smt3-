<?php 
  session_start();
  if(isset($_SESSION['admin'])){
  header('location:index.php');
}

 ?>
<!DOCTYPE html>
<html lang="en">

<head>
	<title>Login admin</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="login/images/icons/favicon.ico" />
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login/vendor/bootstrap/css/bootstrap.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login/vendor/animate/animate.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login/vendor/css-hamburgers/hamburgers.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login/vendor/select2/select2.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login/css/util.css">
	<link rel="stylesheet" type="text/css" href="login/css/main.css">
	<script src="https://code.jquery.com/jquery-3.7.1.slim.js"
		integrity="sha256-UgvvN8vBkgO0luPSUl2s8TIlOSYRoGFAX4jlCIm9Adc=" crossorigin="anonymous"></script>
	<!--===============================================================================================-->
</head>
<style>
		/* Tambahkan gaya di bawah ini untuk mengganti warna background */
		.container-login100 {
			background-color: #fff; /* Ganti dengan warna yang diinginkan, misalnya biru (#3498db) */
		}
	</style>
	  

<body>
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="login/images/admin.png" alt="IMG">
				</div>

				<div class="login100-form validate-form">
					<span class="login100-form-title">
						Admin Login
					</span>
					<form action="proses/login.php" method="post">
					<div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
					<input class="input100" type="text" placeholder="Email/Username" name="username">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Password is required">
					<input class="input100" type="password" placeholder="Password" name="pass">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>
					<div class="container-login100-form-btn">
						<div class="login100-form-btn" id="target">
							<button value='123' name='proseslogin'>Login</button>
						</div>
					</div>
					
				</form>
					
				

					
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>




	<!--===============================================================================================-->
	<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/tilt/tilt.jquery.min.js"></script>
	<script type="text/javascript">
    // Hapus atau perbaiki fungsi JavaScript yang sesuai dengan kebutuhan
    // $(document).ready(function () {
    //     $("#target").click(function () {
    //         Contoh alert
    //         alert("dfdf");
    //     });
    // });
</script>
	<!--===============================================================================================-->
	<!-- <script src="js/main.js"></script> -->

</body>

</html>