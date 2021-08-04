<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>contact</title>
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
          <li><a class="nav-link scrollto active" href="index.php">Acceuil</a></li>
          <li><a class="nav-link scrollto" href="apropos.php">A propos</a></li>
          
          <li><a href="inscription.php">Inscription</a></li>
          <li><a href="login.php">Se connecter</a></li>
          <?php
}
else if(!empty($_SESSION))
{

    ?>
      <li><a class="nav-link scrollto active" href="index.php">Acceuil</a></li>
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
    <br>
  </header><!-- End Header -->

  <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

           



<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

            <div class="d">    
                <div class="jumbotron">
                  <div class="row">
                      <div class="col-md-4 col-xs-12 col-sm-6 col-lg-4">
                          <img src="../assets/img/daly.jpg" alt="stack photo" class="img">
                      </div>
                      <div class="col-md-8 col-xs-12 col-sm-6 col-lg-8">
                          <div class="container" style="border-bottom:1px solid black">
                            <h2>Tlili Mohamed Ali</h2>
                          </div>
                            <hr>
                          <ul class="container details">
                            <li><p><span class="glyphicon glyphicon-earphone one" style="width:50px;" ></span><a href="tel:55947170">55947170</a></p></li>
                            <li><p><span class="glyphicon glyphicon-envelope one" style="width:50px;"></span><a href="mailto:mohamedalitlili8@gmail.com?">mohamedalitlili8@gmail.com</a></p></li>
                            <li><p><span class="glyphicon glyphicon-map-marker one" style="width:50px;"></span><a href="https://goo.gl/maps/tEY8wpEqPEB3Dq7SA">La marsa</a></p></li>
                            
                          </ul>
                      </div>
                  </div>
                </div>

                <div class="k">
                <div class="jumbotron">
                <div class="row">
                      <div class="col-md-4 col-xs-12 col-sm-6 col-lg-4">
                          <img src="../assets/img/arij.jpg" alt="stack photo" class="img">
                      </div>
                      <div class="col-md-8 col-xs-12 col-sm-6 col-lg-8">
                          <div class="container" style="border-bottom:1px solid black">
                            <h2>Hajji Arij</h2>
                          </div>
                            <hr>
                          <ul class="container details">
                            <li><p><span class="glyphicon glyphicon-earphone one" style="width:50px;" ></span><a href="tel:90197079">90197079</a></p></li>
                            <li><p><span class="glyphicon glyphicon-envelope one" style="width:50px;"></span><a href="mailto:Arij.hajji@esprit.tn?">Arij.hajji@esprit.tn</a></p></li>
                            <li><p><span class="glyphicon glyphicon-map-marker one" style="width:50px;"></span><a href="https://goo.gl/maps/AybiRnszW3ByLd3X6">Ariana soghra</a></p></li>
                            
                          </ul>
                      </div>
                      </div>
                      </div>
                    </div>

<br>
<br>



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


<style>
.jumbotron{
    margin : auto;
    
    margin-top :60px;
    height: 308px;
    width: 780px;
    
    
}
.k{
    margin-top :1px; 
} 

img{
    width: 259px;
}
</style>




</html>