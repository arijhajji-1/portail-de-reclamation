
        <?php
require_once '../controller/userc.php';
require_once '../model/user.php';
$userc =  new userc();

if (isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['email']) &&isset($_POST['pwd'])&&isset($_POST['sexe'])) {

    
        $user = new user($_POST['nom'], $_POST['prenom'], $_POST['email'],$_POST['pwd'],$_POST['sexe']);
   
                $userc->ajouterUser($user);
           

            header('Location:index.php');
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
    <script type="text/javascript" src="../js/verif.js"></script>
  <link href="../assets/css/style.css" rel="stylesheet">

 
</head>
        
        <body>
        
          <!-- ======= Header ======= -->
          <header id="header" class="fixed-top d-flex align-items-center">
            <div class="container d-flex align-items-center">
            
               <a href="http://www.oaca.nat.tn/index.php?" class="logo me-auto"><img src="../assets/img/logo.gif" alt=""></a>
        
              <nav id="navbar" class="navbar order-last order-lg-0">
                <ul>
                  <li><a class="nav-link scrollto active" href="index.php">Acceuil</a></li>
                  <li><a class="nav-link scrollto" href="apropos.php">A propos</a></li>
                  
                  <li><a href="inscription.php">Inscription</a></li>
                  <li><a href="login.php">Se connecter</a></li>
                 
                  <li><a class="nav-link scrollto" href="contact.php">Contact</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
              </nav><!-- .navbar -->
        
              
            </div>
          </header><!-- End Header -->
         
        


   <div>
    <div class="container">
        <div class="signup-content">
            <form method="POST" name="f" >
                <h2 class="form-title">Inscription</h2>
                <div class="form-group">
                    <input type="text" class="form-input" name="nom" id="nom" placeholder="votre nom"/>
                </div>
                <div class="form-group">
                    <input type="text" class="form-input" name="prenom" id="prenom" placeholder="votre prenom"/>
                </div>
                <div class="form-group">
                    <input type="email" class="form-input" name="email" id="email" placeholder="votre Email"/>
                </div>
                <div class="form-group">
                    <input type="text" class="form-input" name="pwd" id="pwd" placeholder="mot de passe"/>
                    <span toggle="#password" class="zmdi zmdi-eye field-icon toggle-password"></span>
                </div>
               
                <div class="form-group">
                <select  name="sexe" class="form-select" aria-label="Default select example">
  <option selected>SEXE</option>
  <option value="female">Female</option>
  <option value="male">Male</option>
 
</select>
</div>             
                <div class="form-group">
                    <input type="submit" name="submit" id="submit" class="form-submit" onclick="return verif()" value="Valider"/>
                </div>
            </form>
            <p class="loginhere">
            Vous avez déjà un compte? <a href="login.php" class="loginhere-link">Se connecter ici</a>
            </p>
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

</body>

<style>
  #footer{
    position:absolute ;
   left: 0;
   margin-top:  70px;;
   bottom: -1000;
   right:0;
  }
</style>
</html>