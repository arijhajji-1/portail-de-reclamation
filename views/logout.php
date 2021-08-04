<?php

session_start();
unset($_SESSION["email"]);
unset($_SESSION["pwd"]);
session_destroy();
header("Location:index.php");

?>
