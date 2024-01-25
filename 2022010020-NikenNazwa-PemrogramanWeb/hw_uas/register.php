<?php
include('DATABASE/retrieve.php');

if(isset($_POST['submit'])){
    $nama = $_POST['nama'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $telp = $_POST['telp'];
    $password = md5($_POST['pass']);

    $query = "INSERT INTO customer (nama, username, email, telp, password) VALUES ('$nama', '$username', '$email', '$telp', '$password')";
    
    if(mysqli_query($conn, $query)){
        echo "<script>alert('Registration successful!');</script>";
        echo "<script>window.location.href = 'userLogin.php';</script>";
        exit;
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($conn);
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<title>Register</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/png" href="login/images/icons/favicon.ico" />
	<link rel="stylesheet" type="text/css" href="login/vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="login/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="login/vendor/animate/animate.css">
	<link rel="stylesheet" type="text/css" href="login/vendor/css-hamburgers/hamburgers.min.css">
	<link rel="stylesheet" type="text/css" href="login/vendor/select2/select2.min.css">
	<link rel="stylesheet" type="text/css" href="login/css/util.css">
	<link rel="stylesheet" type="text/css" href="login/css/main.css">
	<script src="https://code.jquery.com/jquery-3.7.1.slim.js"
		integrity="sha256-UgvvN8vBkgO0luPSUl2s8TIlOSYRoGFAX4jlCIm9Adc=" crossorigin="anonymous"></script>
</head>

<style>
	.container-login100 {
		background-color: #fff;
		display: flex;
		justify-content: center;
		align-items: center;
		height: 100vh;
	}

	.login100-form {
		display: flex;
		flex-wrap: wrap;
		justify-content: space-between;
	}

	.wrap-input100 {
		width: calc(50% - 10px);
		position: relative;
		margin-bottom: 20px;
	}

	.input100 {
		width: 100%;
		padding: 10px;
		padding-left: 40px; /* Add padding-left to make space for the icon */
	}

	.symbol-input100 {
		position: absolute;
		top: 50%;
		transform: translateY(-50%);
		left: 15px; /* Adjust the position to the left */
	}

	.container-login100-form-btn {
		width: 100%;
		display: flex;
		justify-content: center;
		align-items: center;
		margin-top: 20px;
	}

	.login100-form-btn {
		width: 100%;
		cursor: pointer;
		background-color: #4CAF50;
		color: #fff;
		padding: 10px;
		text-align: center;
		border: none;
		border-radius: 5px;
		font-size: 16px;
	}

	.text-center {
		text-align: center;
		margin-top: 15px;
	}
	.wrap-input100 {
    width: 100%;
    position: relative;
    margin-bottom: 20px;
}

.input100 {
    width: 100%;
    padding: 10px;
    padding-left: 80px; /* Add padding-left to make space for the icon */
}
	
</style>

<body>
<div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">
                <!-- Form updates: added 'name' attributes, method, and action -->
                <form class="login100-form validate-form" method="post" action="register.php">
                    <span class="login100-form-title">
                        Register
                    </span>

                    <!-- Updated input names -->
                    <div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
                        <span class="symbol-input100">
                            <i class="fa fa-user" aria-hidden="true"></i>
                        </span>
                        <input class="input100" type="text" name="nama" placeholder="Nama" required>
                        <span class="focus-input100"></span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
                        <span class="symbol-input100">
                            <i class="fa fa-user" aria-hidden="true"></i>
                        </span>
                        <input class="input100" type="text" name="username" placeholder="Username" required>
                        <span class="focus-input100"></span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
                        <span class="symbol-input100">
                            <i class="fa fa-envelope" aria-hidden="true"></i>
                        </span>
                        <input class="input100" type="text" name="email" placeholder="Email" required>
                        <span class="focus-input100"></span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
                        <span class="symbol-input100">
                            <i class="fa fa-phone" aria-hidden="true"></i>
                        </span>
                        <input class="input100" type="text" name="telp" placeholder="No Telp" required>
                        <span class="focus-input100"></span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate="Password is required">
                        <span class="symbol-input100">
                            <i class="fa fa-lock" aria-hidden="true"></i>
                        </span>
                        <input class="input100" type="password" name="pass" placeholder="Password" required>
                        <span class="focus-input100"></span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate="Password is required">
                        <span class="symbol-input100">
                            <i class="fa fa-lock" aria-hidden="true"></i>
                        </span>
                        <input class="input100" type="password" name="confirm_pass" placeholder="Konfirmasi Password" required>
                        <span class="focus-input100"></span>
                    </div>

                    <div class="container-login100-form-btn">
                        <!-- Updated button type and added 'name' attribute -->
                        <button class="login100-form-btn" type="submit" name="submit">
                            Register
                        </button>
                    </div>

                    <div class="text-center p-t-136">
                        <a class="txt2" href="userLogin.php">
                            Sudah Punya Akun? Login
                            <i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>

	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="vendor/select2/select2.min.js"></script>
	<script src="vendor/tilt/tilt.jquery.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function () {
			$("#target").click(function () {
				alert("dfdf");
			});
		});
	</script>

</body>

</html>