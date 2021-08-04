<?php
require_once '../Controller/reclamationc.php';
require_once '../Model/reclamation.php';
$reclamationc = new reclamationc();
if (isset($_POST['modifier'])){
 
    
if ( isset($_POST['etat'])) {

   
    $id_rec=$_GET['id_rec'];
   

    $reclamationc->modifier($_POST['etat'],$id_rec);
    //echo $_POST['id_reclamation'] ;
header("Location: retour.php");
}
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
    
    <a href="retour.php">- Reclamation</a>
    <a href="user.php">- User</a>
    <a href="#">- Logout</a>
    
  </div>





<?php
  
        if (isset($_GET['id_rec'])) {
            
            $result = $reclamationc->recupereretat($_GET['id_rec']);
            if ($result !== false) {
    ?>  
 <form class="" action="#" method="POST">
<table >

<tr>
<th scope="col">id user </th><td>  <input type="text" name="id_user" value="<?= $result['id_user'] ?>" > </td></tr>                            
<th scope="col">nom </th><td>  <input type="text" name="nom" value="<?= $result['nom'] ?>" > </td></tr>                            

<th scope="col">id reclamation </th><td>  <input type="text" name="id_rec" value="<?= $result['id_rec'] ?>" > </td></tr>                            
  <th scope="col">Date </th><td>  <input type="text" name="date_reclamation" value="<?= $result['date_reclamation'] ?>" > </td></tr>
  <tr> <th scope="col">Description</th>    <td> <input type="text" name="description" value="<?= $result['description'] ?>"> </td></tr>
  <tr>  <th scope="col">type</th>   <td>  <input type="text" name="type" value="<?= $result['type'] ?>" >  </td>
</tr>
                             
    <tr>  <th scope="col">etat</th> <td>  

<select name="etat" id="etat">
    <option value=""><?= $result['etat'] ?></option>
    <option value="réglé">réparé</option>
    <option value="non réglé">non réparé</option>
    
</select>
 </td>
</tr>
<tr>
 <td><input  type="submit" name="modifier" class="more" value="modifier"></td>  
   </tr>
     </tr>

  
     <?php
        }
    }
        else {
            header('Location:retour.php');
        }
   
    ?>

</table>
</form>

<style>
body {
  font-family: "Lato", sans-serif;
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
form{
   position:absolute;
   top:40%;
   left:40%;
   width:500px; /* A toi de donner la bonne largeur */
   height:200px; /* A toi de donner la bonne hauteur */
   margin-left:-90px; /* -largeur/2 */
   margin-top:-150px; /* -hauteur/2 */
   border : none;
   font-size: 25px;

}

input{
    width: 100% ;
    margin: 10px 0;
    margin-left: 20px;
    background-color: transparent;
    color: white;
    padding: 10px 6px;
    font-size: 20px;
    font-weight: bold;
    box-sizing: border-box;
    border: none;
    border-bottom: 1px white solid;
}


</style>

<script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
  </body>

</html>