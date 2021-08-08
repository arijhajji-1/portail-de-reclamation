
<?php
require_once '../config.php';


if (isset($_POST['email'])){
    $email=$_POST['email'];
    $pwd=$_POST['pwd'];

    $sql="SELECT * FROM user WHERE email='" . $email . "' && pwd = '". $pwd."' ";
    $db = getConnexion();
    try {

        $query = $db->prepare($sql);
        $query->execute();
        $count = $query->rowCount();
        if ($count == 1) {
            session_start();
            $user = $query->fetch();
            
                $_SESSION['email'] = $_POST['email'];
                $_SESSION['pwd'] = $_POST['pwd'];
                $_SESSION['id_user'] = $user['id_user'];
                $_SESSION['nom'] = $user['nom'];
                $_SESSION['prenom'] = $user['prenom'];
            if($email=="admin"){
                header('Location:retour.php');}
                else{
                  header('Location:index.php');
                }
           
        }
    }
    catch (Exception $e){
        die('Erreur: '.$e->getMessage());
    }

}

?>
<!doctype html>
<html lang="en">
  <head>
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="../fonts/icomoon/style.css">

  <link rel="stylesheet" href="../css/owl.carousel.min.css">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="../css/bootstrap.min.css">
  
  <!-- Style -->
  <link rel="stylesheet" href="../css/style.css">
  <link rel="stylesheet" href="../css/login.css">
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
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  
    <link href="../assets/css/style.css" rel="stylesheet">
  </head>
<body>
    <header id="header" class="fixed-top d-flex align-items-center">
        <div class="container d-flex align-items-center">
        
           <a href="http://www.oaca.nat.tn/index.php?" class="logo me-auto"><img src="../assets/img/logo.gif" alt=""></a>
    
          <nav id="navbar" class="navbar order-last order-lg-0">
            <ul>
              <li><a class="nav-link scrollto active" href="index.php">Accueil</a></li>
              <li><a class="nav-link scrollto" href="apropos.php">A propos</a></li>
              
              <li><a href="inscription.php">Inscription</a></li>
              <li><a href="login.php">Se connecter</a></li>
             
              <li><a class="nav-link scrollto" href="contact.php">Contact</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
          </nav><!-- .navbar -->
    
          
        </div>
      </header><!-- End Header -->

      <br>
    <br>
    <br>
    <br>
    <br>
    <br>
  
      
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                        <form   action="" method="post">
                            <h3 class="text-center text-info">Se connecter</h3>
                            <div class="form-group">
                                
                                <input type="text" name="email" id="username" class="form-control" placeholder="email" required>
                            </div>
                            <div class="form-group">
                           
                                <input type="password" name="pwd" id="password" class="form-control" placeholder="mot de passe" required>
                            </div>
                            <div id="register-link" class="text-right">
                                <a href="inscription.php" class="text-info">s'inscrire ici</a>
                            </div>
                            <div class="form-group">
                              
                                <input type="submit" name="submit" class="btn btn-info btn-md" value="Se connecter">
                            </div>
                         
                        </form>
                    </div>
                </div>
            </div>
        </div>
    <br>
    <br>
    <br>
    <br>
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
  <script src="../js/jquery-3.3.1.min.js"></script>
  <script src="../js/popper.min.js"></script>
  <script src="../js/bootstrap.min.js"></script>
  <script src="../js/main.js"></script>
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
#footer{
    position: fixed;
   left: 0;
   bottom: 0;
   right:0;
}
</style>
</html>