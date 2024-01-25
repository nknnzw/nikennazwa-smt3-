<?php
session_start();

if(isset($_SESSION['user'])){
    header('location:index.php');
}

include('DATABASE/retrieve.php'); // Assuming your database connection configuration is in a file called config.php

if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $password = md5($_POST['pass']); // Using MD5 for simplicity; consider using more secure hashing methods

    $query = "SELECT * FROM customer WHERE username='$username' AND password='$password'";
    $result = mysqli_query($conn, $query);

    if(mysqli_num_rows($result) > 0){
        $_SESSION['user'] = $username;
        header('location:index.php');
    } else {
        echo "Invalid username or password.";
    }
}
?>

 
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login User</title>
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
        background-color: #fff; /* Change to your desired background color */
    }
</style>

<body>
    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">
                <div class="login100-pic js-tilt" data-tilt>
                    <img src="login/images/user.jpg" alt="IMG">
                </div>

                <div class="login100-form validate-form">
                    <span class="login100-form-title">
                        User Login
                    </span>

                    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                        <div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
                            <input type="text" class="input100" id="exampleInputEmail1" placeholder="Username"
                                name="username">
                            <span class="focus-input100"></span>
                            <span class="symbol-input100">
                                <i class="fa fa-envelope" aria-hidden="true"></i>
                            </span>
                        </div>

                        <div class="wrap-input100 validate-input" data-validate="Password is required">
                            <input type="password" class="input100" id="exampleInputEmail1" placeholder="Password"
                                name="pass">
                            <span class="focus-input100"></span>
                            <span class="symbol-input100">
                                <i class="fa fa-lock" aria-hidden="true"></i>
                            </span>
                        </div>

                        <div class="container-login100-form-btn">
                            <button type="submit" class="login100-form-btn" name="submit">
                                Login
                            </button>
                        </div>
                    </form>

                    <div class="text-center p-t-136">
                        <a class="txt2" href="register.php">
                            Belum Punya Akun? Register
                            <i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
                        </a>
                    </div>
                </div>
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