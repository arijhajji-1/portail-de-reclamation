<?php

require_once '../controller/reclamationc.php';
require_once '../model/reclamation.php';
require_once '../controller/userc.php';
require_once '../model/user.php';
session_start();
  
   

  

if (isset($_SESSION['id_user']) && isset($_POST['description']) && isset($_POST['type']) && isset($_POST['nom'])  ) {
    $reclamation = new reclamation($_SESSION['id_user'],$_POST['description'], $_POST['type'], $_POST['nom']);
 $reclamationc =  new reclamationc();
    $reclamationc->ajouterreclamation($reclamation);
    header('Location:reclamations.php');
}



?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>inscription</title>
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
  <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="../css2/style.css">
    <link href="../vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="../vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="../vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="../vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="../css/main (2).css" rel="stylesheet" media="all">
  <link href="../assets/css/style.css" rel="stylesheet">

 
</head>
        
        <body>
        
          <!-- ======= Header ======= -->
          <header id="header" class="fixed-top d-flex align-items-center">
            <div class="container d-flex align-items-center">
            
               <a href="http://www.oaca.nat.tn/index.php?" class="logo me-auto"><img src="../assets/img/logo.gif" alt=""></a>
        
              <nav id="navbar" class="navbar order-last order-lg-0">
                <ul>
                  <li><a class="nav-link scrollto active" href="index.php">Accueil</a></li>
                  <li><a class="nav-link scrollto" href="apropos.php">A propos</a></li>
                  
                  <li><a href="logout.php">déconnecter</a></li>
                  <li><a href="listrec.php">liste réclamation</a></li>
                  <li><a class="nav-link scrollto" href="contact.php">Contact</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
              </nav><!-- .navbar -->
        
              
            </div>
          </header><!-- End Header -->
         






          <div class="page-wrapper bg-gra-02 p-t-130 p-b-100 font-poppins">
        <div class="wrapper wrapper--w680">
            <div class="card card-4">
                <div class="card-body">
                    <h2 class="title">Réclamation</h2>
                    <form method="POST">
                        <div class="row row-space">
                         
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Description</label>
                                    <textarea  class="input--style-4"  name="description"> </textarea>
                                </div>
                            </div>
                        </div>
                        <input type="hidden" value="<?PHP echo $_SESSION['nom']; ?>" name="nom">
                        
                        <div class="input-group">
                            <label class="label">type</label>
                            <br>
                            <div class="rs-select2 js-select-simple select--no-search">
                                <select name="type">
                                    <option disabled="disabled" selected="selected">choisissez le type de probléme ci_dessous</option>
                                    <option>Matériel</option>
                                    <option>Réseau</option>
                                </select>
                                <div class="select-dropdown"></div>
                            </div>
                        </div>
                        <div class="p-t-15">
                            <button class="btn btn--radius-2 btn--blue" type="submit">Envoyer</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>






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
  <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../js/main (2).js"></script>

    <!-- Vendor JS-->
    <script src="../vendor/select2/select2.min.js"></script>
    <script src="../vendor/datepicker/moment.min.js"></script>
    <script src="../vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="../js/global (2).js"></script>

</body>

</html>