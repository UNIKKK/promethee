<?php 
include("data_connexion.php");
?>

   

<!DOCTYPE HTML>
<html lang="fr">
    <head>
    <title>Promethée France</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/ico" href="favicon.ico" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,500,600,700,800,900" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/styles.css">
        <!-- meta for ranking -->
<meta name="keywords" content="formation rh handicap consulting semainehandicap">
<meta name="description" content="Prométhée">
<meta name="author" content="Prométhée, groupeheaven@gmail.com">
<meta name="copyright" content="Prométhée by Heaven">
<meta name="language" content="FR">
<meta name="robots" content="index, follow">

<!-- meta for social network -->
<meta property="og:type" content="website">
<meta property="og:title" content="Prométhée">
<meta property="og:url" content="promethee-france.net">
<meta property="og:image" content="promethee-france.net/img/logo.png">
<meta property="og:site_name" content="Prométhée France">
<meta property="og:description" content="Prométhée est la plateforme de formation sur mesure pour les handicapés.">

<meta name="twitter:title" content="Promethée">
<meta name="twitter:description" content="Prométhée, est une plateforme visant à étendre et faciliter la recherche d'emplois ainsi que la formation des personnes en situation de handicap.">
<meta name="twitter:image:src" content="promethee-france.net/img/logo.png">
<meta name="twitter:domain" content="promethee-france.net">
    <!-- end metaS -->


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>


  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.1.0/cookieconsent.min.css" />
<script src="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.1.0/cookieconsent.min.js"></script>


              
</head>
    
    
<body>
 <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-M6FXJKX"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
    
<nav class="navbar navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> 
      </button>
    <a href="home.php"><img class="logo-res" src="assets/img/logo.png"></a>
    </div>
      
    <div class="collapse navbar-collapse" id="myNavbar">
        <a href="home.php" class="navbar-left"><img class="logo" src="assets/img/logo.png"></a>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="quizz.php">Questionnaire</a></li>
        <li><a href="formations-list.php">Trouver une offre</a></li>
        <li><a href="propositions.php">Proposer une offre</a></li>
        <li><a href="contact.php">Contact</a></li>
      </ul>
    </div>
  </div>
</nav>
    
<div class="container" id="marge">
    <div class="row">
    <div class="col-sm-12">
        <h1 style="text-align:center;">Proposer une offre</h1>
        
        </div>
    </div>
    
    </div>
<div class="container" id="basMarge" style="margin-top:3%;">
    <div class="row">
    <div class="col-sm-12">
    <ul class="nav nav-pills">
  <li class="active" id="swap"><a data-toggle="tab" href="#menu1" >Proposer une formation</a></li>
  <li id="swap"><a data-toggle="tab" href="#menu2" >Proposer un emploi</a></li>
</ul>

<div class="tab-content">
  <div id="menu1" class="tab-pane fade in active">
    <div class="col-sm-12" id="bordure">
    <h4 style="color:white;text-align:center;margin-top:5%;margin-bottom:0%;">Tu souhaites proposer un emploi ? Il suffit de répondre à ces quelques questions.</h4>
        
        
    <form class="propalForma"  action="propositions.php" method="post">
        <div class="col-sm-6">
        <label for="nom_entreprise">Nom de votre établissement</label><br>
       <input class="form-control" type="text" name="nom_etablissement" id="nom_entreprise" placeholder="entreprise"/>
        <br>
        <br>
        
        <label for="nom">Votre nom</label><br>
       <input  class="form-control" type="text" name="nom" id="nom" placeholder="nom"/>
        <br>
        <br>
        
        <label for="nom">Votre numéro de téléphone</label><br>
       <input class="form-control" type="text" name="telephone" placeholder="0102030405"/>
        <br>
        <br>
         <label for="taille_entreprise">Taille de votre établissement</label><br>
        <select class="form-control" name="taille_entreprise">
          <option >---- Choisir ----</option>
          <option >TPE</option>
          <option >PME</option>
          <option >ETI</option>
          <option >GE</option>
          <option >SME</option>
        </select>   
        <br>
        <br>
            <label for="Ville">Ville</label><br>
        <input class="form-control" type="text" name="ville" id="description" placeholder="description du poste">
        </div>
        
        <div class="col-sm-6">
        
        
        
        <label for="Duree">Durée de la formation</label><br>
        <input class="form-control" type="text" name="duration" id="duree" placeholder="3 semaines">
            <br>
        <br>
        <label for="titre">Titre de la formation</label><br>
        <input class="form-control" type="text" name="titre_poste" id="titredupost" placeholder="description du poste">
            <br>
        <br>
        <label for="chap">Résumé rapide</label><br>
        <input class="form-control" type="text" name="chapo" id="chapo" placeholder="description du poste">
            <br>
        <br>
        <label for="description">Description de la formation</label><br>
            <textarea class="form-control" type="text" name="description_complete" id="description" placeholder="description du poste"></textarea>
        <br>
       
        <label for="connaissance">Comment nous avez vous connu ?</label><br>
        <select class="form-control" name="connu">
          <option >---- Choisir ----</option>
          <option >Facebook</option>
          <option >Instagram</option>
          <option >Twitter</option>
          <option >Autre</option>
        </select>   
        <br>
        <br>
            
        </div>
        
        <p class="place_btn" style="text-align: center;">
        <button type="submit" name="envoi_formation" class="button_emploi" style=" text-decoration:none" onclick="alert('Formulaire envoyé merci, votre offre ne devrait pas tarder à apparaître');" >Continuer</button>
        </p>
    </form>
    <?php
  
if(isset($_POST['envoi_formation']))
{
    
    
    $bdd->exec("INSERT INTO `proposer_formations`(`nom_etablissement`, `nom`, `telephone`, `taille_entreprise`, `Ville`, `duration`, `titre_poste`, `chapo`,`description_complete`) VALUES('".$_POST ['nom_etablissement']."', '".$_POST['nom']."', '".$_POST['telephone']."', '".$_POST['taille_entreprise']."', '".$_POST['ville']."', '".$_POST['duration']."', '".$_POST['titre_poste']."', '".$_POST['chapo']."', '".$_POST['description_complete']."');");
    
 

    
}

    ?>
    </div>
  </div>
  <div id="menu2" class="tab-pane fade">
     <div class="col-sm-12" id="bordure">
    <h4 style="color:white;text-align:center;margin-top:5%;margin-bottom:0%;">Tu souhaites proposer une formation ? Il suffit de répondre à ces quelques questions.</h4>
        
        
    <form class="propalForma"  action="propositions.php" method="post">
        <div class="col-sm-6">
        <label for="nom_entreprise">Nom de votre entreprise</label><br>
       <input class="form-control" type="text" name="nom_etablissement" id="nom_entreprise" placeholder="entreprise"/>
        <br>
        <br>
        
        <label for="nom">Votre nom</label><br>
       <input  class="form-control" type="text" name="nom" id="nom" placeholder="nom"/>
        <br>
        <br>
        
        <label for="nom">Votre numéro de téléphone</label><br>
       <input class="form-control" type="text" name="telephone" placeholder="0102030405"/>
        <br>
        <br>
         <label for="taille_entreprise">Taille de votre établissement</label><br>
        <select class="form-control" name="taille_entreprise">
          <option >---- Choisir ----</option>
          <option >TPE</option>
          <option >PME</option>
          <option >ETI</option>
          <option >GE</option>
          <option >SME</option>
        </select>   
        <br>
        <br>
            <label for="description">Ville</label><br>
        <input class="form-control" type="text" name="ville" id="description" placeholder="Ville, ex: Paris">
        </div>
        
        <div class="col-sm-6">
        
        
        
        <label for="description">Durée du poste</label><br>
        <input class="form-control" type="text" name="duration" id="duree" placeholder="3 semaines">
            <br>
        <br>
        <label for="description">Titre du poste</label><br>
        <input class="form-control" type="text" name="titre_poste" id="titredupost" placeholder="Graphiste, UX Designer">
            <br>
        <br>
        <label for="description">Résumé rapide</label><br>
        <input class="form-control" type="text" name="chapo" id="chapo" placeholder="description rapide du poste">
            <br>
        <br>
        <label for="description">Description du poste</label><br>
            <textarea class="form-control" type="text" name="description_complete" id="description" placeholder="description du poste"></textarea>
        <br>
        
        <label for="connaissance">Comment nous avez vous connu ?</label><br>
        <select class="form-control" name="connu">
          <option >---- Choisir ----</option>
          <option >Facebook</option>
          <option >Instagram</option>
          <option >Twitter</option>
        </select>   
        <br>
        <br>
            
        </div>
        
        <p class="place_btn" style="text-align: center;">
        <button type="submit" name="envoi_formation" class="button_emploi" style="text-decoration:none," onclick="alert('Formulaire envoyé merci, votre offre ne devrait pas tarder à apparaître');">Continuer</button>
        </p>
    </form>
    
         
    </div>
  </div>
</div>    
        
    </div>
    
    </div>
    </div>
    

    
     <!-- Footer -->
<footer class="page-footer font-small cyan darken-3" style="background:#47484b;">

    <!-- Footer Elements -->
    <div class="container">

      <!-- Grid row-->
      <div class="row">

        <!-- Grid column -->
        <div class="col-md-12 py-5">
            
        <div class="arbo-footer">
          <p class="text-right" style="margin-top: 1%;">  
            <a href="formations-list.php">Trouver une offre</a>
            <a href="propositions.php">Proposer une offre</a>
            <a href="quizz.php">Questionnaire</a>
            <a href="contact.php">Contact</a>
            <span class="separateur">|</span>
              
            <a href="cgu.php" style="margin-left: 0%;">CGU</a>
            <a href="cgu.php#conditions">Mentions légales</a>
            <a href="assets/presse.pdf" target="_blank">Communiqué de presse</a>
            <span class="separateur">|</span>
           
             <a class="fb-ic">
            <a target="_blank" href="https://www.facebook.com/Prom%C3%A9th%C3%A9e-286251385344865/">
              <img src="assets/img/Facebook.png" alt="">
            </a>
          </a>
          <!-- Twitter -->
          <a class="tw-ic">
            <a target="_blank" href="https://www.instagram.com/promethee_us/">
              <img src="assets/img/Insta.png" alt="">
            </a>
          </a>
          <!--Instagram-->
          <a class="ins-ic">
            <a target="_blank" href="https://twitter.com/promethee_us">
              <img src="assets/img/Twitter.png" alt="">
            </a>
          </a>
          </p>  
        </div>
        </div>
        <!-- Grid column -->

      </div>
      <!-- Grid row-->

    </div>
    <!-- Footer Elements -->

    <!-- Copyright 
    <div class="footer-copyright text-center py-3" style="color:white;">© 2018 Copyright :
      <a href="https://www.promethee-france.net" style="color:white;">Heaven Group</a>
    </div>
    Copyright -->

  </footer>
  <!-- Footer -->
    
    
    <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-130602223-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-130602223-1');
</script>
   <!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-M6FXJKX');</script>
    
    </body>
</html>