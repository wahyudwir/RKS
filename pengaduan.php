<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Universitas Budiyana Bengkulu</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/logo.png" rel="icon">
  <link href="assets/img/logo.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Green - v2.3.0
  * Template URL: https://bootstrapmade.com/green-free-one-page-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Top Bar ======= -->
  <div id="topbar" class="d-none d-lg-flex align-items-center fixed-top">
    <div class="container d-flex">
      <div class="contact-info mr-auto">
       <i class="icofont-envelope"></i> <a href="#">ubbengkulu@webmail.uad.ac.id</a>
       <i class="icofont-phone"></i> 085947362959
     </div>
     <div class="social-links">
      <a href="#" class="twitter"><i class="icofont-twitter"></i></a>
      <a href="#" class="facebook"><i class="icofont-facebook"></i></a>
      <a href="#" class="instagram"><i class="icofont-instagram"></i></a>
      <a href="#" class="skype"><i class="icofont-skype"></i></a>
      <a href="#" class="linkedin"><i class="icofont-linkedin"></i></i></a>
    </div>
  </div>
</div>

<header id="header" class="fixed-top">
  <div class="container d-flex align-items-center">

    <h1 class="logo mr-auto"><a href="index.php">Universitas Budiyana Bengkulu</a></h1>
    <!-- Uncomment below if you prefer to use an image logo -->
    <!-- <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

    <nav class="nav-menu d-none d-lg-block">
      <ul>
        <li class="active"><a href="index.php">Home</a></li>
        <li><a href="profile.php">Profile Universitas</a></li>
        <li><a href="informasi.php">Informasi Universitas</a></li>

        <li><a href="jadwalkuliah.php">Jadwal Prodi</a></li>
        <li><a href="pengaduan.php">Pengaduan Mahasiswa</a></li>


      </ul>
    </nav><!-- .nav-menu -->

    <a href="admin/index.php" class="get-started-btn scrollto">Login Admin</a>

  </div>
</header><!-- End Header -->



<main id="main">


  <br><br><br>
</main><!-- End #main -->

<!-- ======= Contact Section ======= -->
<section id="contact" class="contact">
  <div class="container">

    <div class="section-title">
      <h2>Pegaduan Mahasiswa</h2>
      <p>Universitas Budiyana Bengkulu</p>
    </div>

    <div class="row">

      <div class="col-lg-5 d-flex align-items-stretch">
        <div class="info">
          <div class="address">
            <i class="icofont-google-map"></i>
            <h4>Lokasi:</h4>
            <p>Manna, Kabupaten Bengkulu Selatan, Bengkulu, Indonesia.</p>
          </div>

          <div class="email">
            <i class="icofont-envelope"></i>
            <h4>Email:</h4>
            <p>ubbengkulu@webmail.uad.ac.id</p>
          </div>

          <div class="phone">
            <i class="icofont-phone"></i>
            <h4>Telepone:</h4>
            <p>085947362959</p>
          </div>
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d127290.80089926269!2d102.84173385772661!3d-4.441325210973928!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e37ae1b74bc03f9%3A0x4fa4ed0c46416544!2sKota%20Manna%2C%20Kabupaten%20Bengkulu%20Selatan%2C%20Bengkulu!5e0!3m2!1sid!2sid!4v1611493777100!5m2!1sid!2sid" frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen></iframe>

        </div>

      </div>

      <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">

        <form method="post" name="pengaduan" action="proses_pengaduan.php">
         <br><br> <br><br>
         <input name="id_pengaduan"  hidden />
         <div class="form-row">
          <div class="form-group col-md-6">
            <label for="name">Nama</label>
            <input type="text" name="nama" class="form-control" id="nama"  />
            <div class="validate"></div>
          </div>
          <div class="form-group col-md-6">
            <label for="name">Alamat</label>
            <input type="text" class="form-control" name="alamat" id="alamat"  />
            <div class="validate"></div>
          </div>
        </div>
        <div class="form-group">
          <label for="name">Pegaduan</label>
          <input type="text" class="form-control" name="pengaduan" id="pengaduan"   />
          <div class="validate"></div>
        </div>


        <div class="text-center"><button type="submit">Kirim Pengaduan</button></div>
      </form>
    </div>

  </div>

</div>
</section><!-- End Contact Section -->

<br><br><br>  
<br><br><br>

<!-- ======= Footer ======= -->
<footer id="footer">
  <div class="container">


    <div class="copyright">
      &copy; Copyright <strong><span>Universitas Budiyana Bengkulu</span></strong>. All Rights Reserved
    </div>

  </div>
</footer><!-- End Footer -->

<a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

<!-- Vendor JS Files -->
<script src="assets/vendor/jquery/jquery.min.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
<script src="assets/vendor/php-email-form/validate.js"></script>
<script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
<script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="assets/vendor/venobox/venobox.min.js"></script>

<!-- Template Main JS File -->
<script src="assets/js/main.js"></script>

</body>

</html>