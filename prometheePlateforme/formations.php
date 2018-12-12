<?php 
include("data_connexion.php");
include("envoi_form.php");

if(isset($_GET['art'])){
          
    $read_art = htmlspecialchars($_GET['art']);
    $get_art = $bdd->prepare('SELECT * FROM proposer_formations WHERE id=?');
    $get_art->execute(array($read_art));
          
          if($get_art->rowCount()==1){
              
              $get_art = $get_art->fetch();
              
          }else
          {
              die('Erreur');
          }
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
        <div class="col-sm-6">
            <iframe class="maps" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2625.2909627130334!2d2.389226215902807!3d48.852661809063704!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e67274fd0b00b3%3A0xbd260b61f2c3e82!2s19+Rue+Voltaire%2C+75011+Paris!5e0!3m2!1sfr!2sfr!4v1544064702351" width="100%" height="auto" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
        <div class="col-sm-6">
            <h1 style="color:white;"><?= $get_art['titre_poste']?></h1>
            <hr style="width:12%;margin-bottom:5%;">
            <p class="text"><?= $get_art['description_complete'] ?></p>
        </div>
        
    
    </div>
    
    
    
    </div>
    <div class="container" id="basMarge2">
    <div class="row">
        <div class="col-sm-12">
    <div class="col-sm-6">
        <div class="col-sm-6" style="color:white; padding:5%;">
        <p class="textD">
        <i class="fas fa-map-marked-alt fa-3x" style="color:white;"></i>
        <?= $get_art['Ville']?>, France</p>
       
    
        </div>
        <div class="col-sm-6" style="padding:5%;">
        <p class="textD">
        <i class="far fa-clock fa-3x"></i>
        <?= $get_art['duration']?></p>
        </div>
    </div>
    <div class="col-sm-6">
    <div class="boutonman">
        <a class="button_form" href="tel:<?= $get_art['telephone']?>">Postuler</a>
        <a class="button_form" href="formations-list.php">Retour</a>    
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
        <?php }



    
    ?>
