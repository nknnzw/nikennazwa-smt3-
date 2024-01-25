<!-- ======= Top Bar ======= -->
<section id="topbar" class="d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">
      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-envelope d-flex align-items-center"><a href="mailto:saddamarizona001@gmail.com">saddamarizona001@gmail.com</a></i>
        <i class="bi bi-phone d-flex align-items-center ms-4"><span>+6281215912727</span></i>
      </div>
      <div class="social-links d-none d-md-flex align-items-center">
        
        <a href="https://www.instagram.com/hotwheels.yogyakarta?utm_source=ig_web_button_share_sheet&igsh=OGQ5ZDc2ODk2ZA==" class="instagram"><i class="bi bi-instagram"></i></a>
        
      </div>
    </div>
  </section>

  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex justify-content-between align-items-center">

      <div class="logo">
        <h1><a href="index.html">Hotwheels.Yogyakarta</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="active" href="index.php">Home</a></li>
          <li><a href="produk.php">Produk</a></li>
          <li><a href="about.php">Tentang Kami</a></li>
          <li><a href="caraBelanja.php">Cara Belanja</a></li>
          <li><a href="kontak.php">Kontak</a></li>
          
          <?php 
					if(isset($_SESSION['kd_cs'])){
					$kode_cs = $_SESSION['kd_cs'];
					$cek = mysqli_query($conn, "SELECT kode_produk from keranjang where kode_customer = '$kode_cs' ");
					$value = mysqli_num_rows($cek);

						?>
						<li><a href="keranjang.php"><i class="bx bx-cart"></i> <b>[ <?= $value ?> ]</b></a></li>

						<?php 
					}else{
						echo "
						<li><a href='keranjang.php'><i class='bx bx-cart'></i> [0]</a></li>

						";
					}
					if(!isset($_SESSION['user'])){
						?>

						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="bx bx-user"></i> Akun <span class="caret"></span></a>
							<ul class="dropdown-menu">   
								<li><a href="user_login.php">login</a></li>
								<li><a href="register.php">Register</a></li>
							</ul>
						</li>
						<?php 
					}else{
						?>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="bx bx-user"></i> <?= $_SESSION['user']; ?> <span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li><a href="proses/logout.php">Log Out</a></li>
							</ul>
						</li>

						<?php 
					}
					?>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->
