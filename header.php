<?php 
  session_start();
  include 'config.php';
  if(isset($_SESSION['admin_Id'])) {
      header('Location: Admin/dashboard.php');
  } elseif(isset($_GET['household_Id'])) {
      header('Location: Users/about_me.php');
  } else {
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Sectorial Registration for MSWD</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <!-- Favicons -->
  <link href="images/download.png" rel="icon">
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets-homepage/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="assets-homepage/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets-homepage/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets-homepage/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets-homepage/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets-homepage/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets-homepage/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets-homepage/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
  <link href="assets-homepage/css/style.css" rel="stylesheet">
</head>

<body>

  <header id="header">
    <div class="container d-flex align-items-center">
      <a href="index.html" class="logo me-auto"><img src="images/download.png" alt="" > Sectorial Registration for MSWD</a>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <h1 class="logo me-auto"><a href="index.html">Medicio</a></h1> -->
      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <!-- <li><a class="nav-link scrollto" href="register.php">Registration</a></li> -->
          <!-- <li><a class="nav-link scrollto" href="index.php?#contact">Contact</a></li> -->
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>
      <!-- <a type="button" class="appointment-btn scrollto" data-bs-toggle="modal" data-bs-target="#memberlogin"><span class="d-none d-md-inline">Login</span></a> -->
    </div>
  </header><!-- End Header -->

<script>
  //-----------------------------ALERT TIMEOUT-------------------------//
  $(document).ready(function() {
      setTimeout(function() {
          $('.alert').hide();
      } ,6000);
  }
  );
//-----------------------------END ALERT TIMEOUT---------------------//
</script>

<?php } ?>