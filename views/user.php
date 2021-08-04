<?php
require_once '../Controller/reclamationc.php';
require_once '../Model/reclamation.php';
require_once '../Controller/userc.php';
$userc = new userc();
$userc = $userc->afficheruserc();

?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/owl.carousel.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    
    <!-- Style -->
    <link rel="stylesheet" href="css/style.css">

    <title>User</title>
  </head>
  <body>
  <div class="sidenav">
  <a href="index.php">- Home</a>
    <a href="retour.php">- Reclamation</a>
    <a href="user.php">- User</a>
    <a href="logout.php">- Logout</a>
    
  </div>
  <div class="k">

  <div class="content">
    
    <div class="container">
      <h2 class="mb-5">User</h2>
      

      <div class="table-responsive">

        <table class="table table-striped custom-table">
        <table class="table table-striped custom-table">
          <thead>
            <tr>
              
              <th scope="col">id_user</th>
              <th scope="col">Nom</th>
              <th scope="col">prenom</th>
              <th scope="col">email</th>
              <th scope="col">sexe</th>
              <th scope="col"></th>
            </tr>
          </thead>
          <?php
 foreach ($userc  as $userc  )
 
 {
  
           ?>
          <tbody>
            
            <tr>
                                  
                                    <td>  <?=  $userc['id_user'] ?> </td>
                                    
                                 <td>  <?=  $userc['nom'] ?> </td>
                                
                                    <td>  <?=  $userc['prenom'] ?> </td>
                                     <td>  <?=  $userc['email'] ?> </td>
                                      <td>  <?=  $userc['sexe'] ?> </td>
   
                             
       
</tr>
                 
                
          </tbody>

             <?php
        }
        ?>

          </table>
      </div>


    </div>

  </div>
    
    
  </div>
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
   
  
<style>
body {
  font-family: "Lato", sans-serif;
}
.content{
  margin-left:200px;
}

.sidenav {
  height: 100%;
  width: 200px;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #111;
  overflow-x: hidden;
  padding-top: 20px;
}

.sidenav a {
  padding: 6px 6px 6px 32px;
  text-decoration: none;
  font-size: 25px;
  color: #818181;
  display: block;
}

.sidenav a:hover {
  color: #f1f1f1;
}

.main {
  margin-left: 200px; /* Same as the width of the sidenav */
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
</style>



  </body>
</html>