<?php
require_once '../controller/reclamationc.php';
require_once '../model/reclamation.php';
require_once '../controller/userc.php';
$reclamationc = new reclamationc();
$reclamation = $reclamationc->afficherreclamation();

if(isset($_GET['search'])){
  $reclamation = (new reclamationc())->rechercherreclamation($_GET['search']);

}
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

    <title>reclamation</title>
  </head>
  <body>
  <div class="sidenav">
  <a href="index.php">- Home</a>
    <a href="retour.php">- Reclamation</a>
    <a href = "user.php">- User</a>
    <a href="logout.php">- Logout</a>
    
  </div>
  
  <div class="k">
  <div class="content">
    
    <div class="container">
      <h2 class="mb-5">les reclamation</h2>
      

      <div class="table-responsive">

        <table class="table table-striped custom-table">
        <table class="table table-striped custom-table">
          <thead>
            <form method="get">
          <tr> <input type="text" placeholder="Taper ici .... " name="search" class="form-control" />
           <button class="btn btn-dark" >Rechercher</button></tr>
            <tr>
</form>
              <th scope="col">id_user</th>
              <th scope="col">nom</th>
              <th scope="col">date</th>
              <th scope="col">description</th>
              <th scope="col">Etat</th>
              <th scope="col"></th>
            </tr>
          </thead>
          <?php
 foreach ($reclamation  as $reclamation  )
 
 {
  
           ?>
          <tbody>
            
            <tr>
                                  
                                    <td>  <?=  $reclamation['id_user'] ?> </td>
                                    <td>  <?=  $reclamation['nom'] ?> </td>
                                 
                                
                                    <td>  <?=  $reclamation['date_reclamation'] ?> </td>
                                     <td>  <?=  $reclamation['description'] ?> </td>
                                      <td>  <?=  $reclamation['etat'] ?> </td>
   
       <td><a type="submit" class="more" href = "modifieretat.php?id_rec=<?= $reclamation['id_rec'] ?>">Modifier</a></td> 
                             
       
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