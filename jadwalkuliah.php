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
        <li ><a href="index.php">Home</a></li>
        <li ><a href="profile.php">Profile Universitas</a></li>
        <li ><a href="informasi.php">Informasi Universitas</a></li>
        <li class="active"><a href="jadwalkuliah.php">Jadwal Prodi</a></li>
        <li><a href="pengaduan.php">Pengaduan Mahasiswa</a></li>


      </ul>
    </nav><!-- .nav-menu -->

    <a href="admin/index.php" class="get-started-btn scrollto">Login Admin</a>

  </div>
</header><!-- End Header -->



<main id="main">


  <br><br><br>
</main><!-- End #main -->

<!-- ======= Team Section ======= -->
<section id="team" class="team section-bg">

  <div class="container">

   <div class="section-title">
    <h2>Jadwal Prodi Informatika</h2>
    <p>Universitas Budiyana Bengkulu</p>
  </div>

  <div class="row">
    <?php  
    include "koneksi.php";  


    $query = "SELECT * from iventaris ORDER BY id ASC";  
    $result = mysqli_query($koneksi, $query);
    while($row = mysqli_fetch_array($result))

    {  
     ?>  
     <center>
      <div class="col-lg-5 col-md-6 d-flex align-items-stretch">
        <div class="member">
          <h1><?=$row['barang'];?></h1>
          <br><br>
          <img src="admin/gambar/iventaris/<?php echo $row['gambar_iventaris']; ?>" style="height: 40%; ">
          
          <h3></i>Jumlah : <?=$row['jumlah']; ?></h3>
          <p>
            <h5>
             <?=$row['deskripsi']; ?>
           </h5>

         </p>

       </div>
     </div>



   </div>

   <?php  
 }  
 ?> 
</center>
</div>
</section><!-- End Team Section -->
</section><!-- End About Us Section -->

<br><br><br>  
<br><br><br>

<!-- ======= Footer ======= -->
<footer id="footer">
  <div class="container">


    <div class="copyright">
      &copy; Copyright <strong><span>Universita Budiyana Bengkulu</span></strong>. All Rights Reserved
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