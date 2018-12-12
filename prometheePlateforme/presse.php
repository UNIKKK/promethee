<?php
include("data_connexion.php");

  function forcerTelechargement($nom, $situation, $poids)
  {
    header('Content-Type: application/octet-stream');
    header('Content-Length: '. $poids);
    header('Content-disposition: attachment; filename='. $nom);
    header('Pragma: no-cache');
    header('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');
    header('Expires: 0');
    readfile($situation);
    exit();
  }
 
  /*******************************************************
  *  Appel de la fonction
  *******************************************************/
  forcerTelechargement('presse.pdf', './assets/presse.pdf', 90000);
  header('location:home.php')
 
?>