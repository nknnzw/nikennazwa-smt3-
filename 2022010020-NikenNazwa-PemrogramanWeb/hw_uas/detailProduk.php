<?php
session_start();

// Include the database connection file
include("admin2/config/dbcon.php");

// Mendapatkan ID produk dari permintaan AJAX
$kode_produk = $_GET['kode_produk'];

// Query untuk mengambil data produk berdasarkan ID
$query = "SELECT * FROM produk WHERE kode_produk = '$kode_produk'";
$result = mysqli_query($conn, $query);

// Mengecek apakah data produk ditemukan
$id_details = mysqli_fetch_assoc($result);


?>
<?php 
include 'includes/header.php';
include 'includes/navbar.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Portfolio Details - Eterna Bootstrap Template</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

</head>

<body>

  <!-- ======= Top Bar ======= -->




  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <ol>
          <li><a href="index.html">Home</a></li>
          <li>Detail Produk</li>
        </ol>
        <h2>Detail Produk</h2>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-8">
            <div class="portfolio-details-slider swiper">
              <div class="swiper-wrapper align-items-center">

              <div class="swiper-slide"> 
    <img class="w-100" src="image/produk/<?= $id_details['image']; ?>" id="product-detail">
</div>

               
              </div>
              <div class="swiper-pagination"></div>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="portfolio-info">
              <h3>Detail Produk</h3>
              <ul>
              <li><strong>Nama</strong>: <?= $id_details['nama']; ?></li>
                <li><strong>Harga</strong>: Rp.<?= number_format($id_details['harga'], 2, ",", ".") ?></li>
                <li><strong>Deskripsi</strong>: <?= $id_details['deskripsi']; ?></li>
                <li><b>Jumlah</b> <input class="form-control" type="number" min="1" name="jml" value="1" style="width: 100px;"></li>
							<li>
              <?php 
				if(isset($_SESSION['user'])){
					?>
					<button type="submit" class="btn btn-success"><i class="glyphicon glyphicon-shopping-cart"></i> Keranjang</button>
					<?php 
				}else{

					?>
					<a href="keranjang.php" class="btn btn-success"><i class="glyphicon glyphicon-shopping-cart"></i>Keranjang</a>
					<?php 
				}
				?>
				<a href="produk.php" class="btn btn-warning"> Back</a>
              </li>
                
              </ul>
            </div>
            <div class="portfolio-description">
              <h2>Hotwheels.Yogyakarta</h2>
              <p>
              Hotwheels Yogyakarta adalah salah satu toko yang menjual diecast dalam bisnis online di Indonesia. Produk kami berkulitas, bagus, dan terjangkau oleh semua orang.
              </p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Portfolio Details Section -->

  </main><!-- End #main -->

  

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  <script>
        $("#add-pesanan").click(function () {
            $.ajax({
                type: "POST",
                url: "method/keranjang.php",
                data: {
                    productId: $(this).data("bs-id"),
                    productCount: parseInt($(jumlahProduk).val())
                },
                dataType: "json",
                cache: false,
                success: function (data) {
                    if (data.response == "True") {
                        Swal.fire({
                            icon: "success",
                            title: "Pesanan Ditambah!!!",
                            text: "Produk berjumlah : " + $("#jumlahProduk").val(),
                        });
                    }
                }
            });
        });
    </script>
</body>

</html>
<?php 
include 'includes/footer.php';
?>