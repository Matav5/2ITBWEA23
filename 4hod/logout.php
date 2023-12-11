<?php
  session_start();
  var_dump($_SESSION);
//  session_destroy();
    $_SESSION["isLogged"] = false;
    unset($_SESSION["username"]);
    header("location: index.php");
    die();
?>