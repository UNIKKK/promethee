<?php 
include("data_connexion.php");  

    







if(isset($_POST['filtre']))
   {
      header('Location: formations-list.php'); 
    /*  if( !empty($_POST['duree']) && !empty($_POST['taille_entreprise'])){
   
    
   $filtres = $bdd->exec("SELECT * FROM `proposer_formations` WHERE (duration = '".$_POST['duree']."') AND (taille_entreprise='".$_POST['taille_entreprise']."')");
    
    $resultats = $filtres->fetch();
          
   
   header('Location: formations-list.php/".$resultats[0]."');*/
    
    
    
    

   }

    

?>