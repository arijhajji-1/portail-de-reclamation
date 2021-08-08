<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Portail de reclamation</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="../assets/img/favicon.png" rel="icon">
  <link href="../assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="../assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="../assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="../assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">


  <link href="../assets/css/style.css" rel="stylesheet">

 
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center">
    
       <a href="http://www.oaca.nat.tn/index.php?" class="logo me-auto"><img src="../assets/img/logo.gif" alt=""></a>

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
        <?php
        if(empty($_SESSION))
{
  ?>
          <li><a class="nav-link scrollto active" href="index.php">Accueil</a></li>
          <li><a class="nav-link scrollto" href="apropos.php">A propos</a></li>
          
          <li><a href="inscription.php">Inscription</a></li>
          <li><a href="login.php">Se connecter</a></li>
          <?php
}
else if(!empty($_SESSION))
{

    ?>
      <li><a class="nav-link scrollto active" href="index.php">Accueil</a></li>
          <li><a class="nav-link scrollto" href="apropos.php">A propos</a></li>
      <li><a class="nav-link scrollto" href="reclamations.php">réclamation</a></li>
      <li><a class="nav-link scrollto" href="logout.php">déconnecter</a></li>
      <?php
}
?>
          <li><a class="nav-link scrollto" href="contact.php">Contact</a></li>
          
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      
    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">

    <div class="container" data-aos="zoom-out" data-aos-delay="100">
      <div class="row">
        <div class="col-xl-6">
        <?php
        if(empty($_SESSION))
{
  ?>
          <h1>Portail de réclamation</h1>
          <?php
}
else if (!empty($_SESSION)){

?>
<h1> Bienvenue <?php echo $_SESSION['nom']  ?>   <?php echo $_SESSION['prenom']  ?></h1>
<?php
}
?>

         <?php
        if(empty($_SESSION))
{
  ?>
          <a href="login.php" class="btn-get-started scrollto"> Se connecter</a>
          <?php
}
else if (!empty($_SESSION)){

?>
<a href="reclamations.php" class="btn-get-started scrollto"> Réclamation </a>
<a href="listrec.php" class="btn-get-started scrollto"> liste Réclamation </a>


          <?php

 if ($_SESSION['email']=="admin"){

?>
<a href="retour.php" class="btn-get-started scrollto"> Admin </a>

<?php
}
}
?>

        </div>
      </div>
    </div>

  </section><!-- End Hero -->


  <!-- ======= Footer ======= -->
  <footer id="footer">

    

    <div class="container d-md-flex py-4">
      
      <div class="me-md-auto text-center text-md-start">
        <div class="copyright">
          &copy; Copyright <strong><span></span></strong> All Rights Reserved 2021
        </div>
        
      </div>
      <div class="social-links text-center text-md-end pt-3 pt-md-0">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
    </div>
  </footer><!-- End Footer -->


  <!-- Vendor JS Files -->
  <script src="../assets/vendor/aos/aos.js"></script>
  <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="../assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="../assets/vendor/php-email-form/validate.js"></script>
  <script src="../assets/vendor/purecounter/purecounter.js"></script>
  <script src="../assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Template Main JS File -->
  <script src="../assets/js/main.js"></script>

</body>

</html>