<?php 
session_start();
include 'koneksi/koneksi.php';
if(isset($_SESSION['kd_cs'])){

	$kode_cs = $_SESSION['kd_cs'];
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Hotwheels.yogyakarta</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.css">
	<script  src="js/jquery.js"></script>
	<script  src="js/bootstrap.min.js"></script>
	<script src="https://kit.fontawesome.com/d4dda72d68.js" crossorigin="anonymous"></script>


</head>
<body>
	<div class="container-fluid">
		<div class="row top">
			<center>
				<div class="col-md-4" style="padding: 3px;">
					<span> <i class="glyphicon glyphicon-earphone"></i> +6281215912727</span>
				</div>


				<div class="col-md-4"  style="padding: 3px;">
					<span><i class="glyphicon glyphicon-envelope"></i> saddamarizona001@gmail.com</span>
				</div>

				<div class="col-md-4" style="padding: 3px;">
    <span>
        <a href="https://www.instagram.com/hotwheels.yogyakarta?utm_source=ig_web_button_share_sheet&igsh=OGQ5ZDc2ODk2ZA==" target="_blank" style="color: white; text-decoration: none;">
            <i class="fab fa-instagram"></i> hotwheels.yogyakarta
        </a>
    </span>
</div>


				</div>
			</center>
		</div>
	</div>

	<nav class="navbar navbar-default" style="padding: 5px;">
		<div class="container">

			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#" style="color: #e7241d"><b>HOTWHEELS.YOGYAKARTA</b></a>
			</div>

			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav navbar-right">
					<li><a href="index.php">Home</a></li>
					<li><a href="produk.php">Produk</a></li>
					<li><a href="about.php">Tentang Kami</a></li>
					<li><a href="cara_belanja.php">Cara Belanja</a></li>
					<?php 
					if(isset($_SESSION['kd_cs'])){
					$kode_cs = $_SESSION['kd_cs'];
					$cek = mysqli_query($conn, "SELECT kode_produk from keranjang where kode_customer = '$kode_cs' ");
					$value = mysqli_num_rows($cek);

						?>
						<li><a href="keranjang.php"><i class="glyphicon glyphicon-shopping-cart"></i> <b>[ <?= $value ?> ]</b></a></li>

						<?php 
					}else{
						echo "
						<li><a href='keranjang.php'><i class='glyphicon glyphicon-shopping-cart'></i> [0]</a></li>

						";
					}
					if(!isset($_SESSION['user'])){
						?>

						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="glyphicon glyphicon-user"></i> Akun <span class="caret"></span></a>
							<ul class="dropdown-menu">   
								<li><a href="user_login.php">login</a></li>
								<li><a href="register.php">Register</a></li>
							</ul>
						</li>
						<?php 
					}else{
						?>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="glyphicon glyphicon-user"></i> <?= $_SESSION['user']; ?> <span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li><a href="proses/logout.php">Log Out</a></li>
							</ul>
						</li>

						<?php 
					}
					?>
				</ul>
			</div><!-- /.navbar-collapse -->
		</div><!-- /.container-fluid -->
	</nav>