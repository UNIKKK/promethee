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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link href="https://fonts.googleapis.com/css?family=Raleway:400,500,600,700,800,900" rel="stylesheet">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
<link rel="stylesheet" href="assets/css/styles.css">
<script src="assets/js/slider_team.js"></script>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>


<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
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
    <img class="logo-res" src="assets/img/logo.png">
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
    
    
    <h1 style="margin-top:5%;text-align: center;margin-bottom: 2%;">Trouver une offre</h1>
<div class="container" style="margin-bottom: 2%;">
<div clas="row">
    <form class="rechercheForm" action="envoi_form.php" method="post" > <!-- get pour id recherche -->
    <div class="col-sm-3">
    
      
            <input class="form-control" type="text" placeholder="Rechercher">
           
        
  
    
    </div>
    
<div class="col-sm-3">
<select class="form-control">
  <option>---- Ville ----</option>
  <?php
    
    $filtres = $bdd->query('SELECT Ville from proposer_formations');
    
    while($ville = $filtres->fetch())
    {
         echo '<option>'.$ville[0].'</option>' ;
            
    }
          
    ?>
</select>
</div>
    
<div class="col-sm-3" class="filtreurs">

<select class="form-control"  name="taille_entreprise">
    <option>---- Taille entreprise ---</option>
 <?php
    
    $filtres = $bdd->query('SELECT taille_entreprise from proposer_formations');
    
    while($choix_taille = $filtres->fetch())
    {
         echo '<option>'.$choix_taille[0].'</option>' ;
            
    }
          
    ?>
</select>
    
    </div>
<div class="col-sm-3">
    
    

    <select class="form-control" name="duree">
    <option>---- Durée de la formation ---</option>
    <?php
    
    $filtres = $bdd->query('SELECT duration from proposer_formations');
    
    while($duree = $filtres->fetch())
    {
         echo '<option>'.$duree[0].'</option>' ;
            
    }
          
    ?>
    </select>

</div>
        <div class="col-sm-12">
    <button id="lol" class="button_emploi" type="submit" name="filtre" >Filtrer</button>
    </div>
         </form>
</div>
   
</div> 

    <p style="text-align: center;color:white;">$var offres correspondent à votre recherche</p>
    
    <div class="container">
  <div class="row">

<div id="myCarousel" class="carousel slide" style="margin-left:0;">
    <div class="carousel-inner" id="innerDeux">
        <div class="item active" id="pageUn">
            <?php 
        //recup du contenus des tables articles
       $reponse= $bdd->query('SELECT * FROM proposer_formations ORDER BY id DESC LIMIT 0,4');
        //affichage des elements
        while($donnees = $reponse->fetch())
        {
?>
            
            <div class="col-sm-3">
                <a href="formations.php?art=<?= $donnees['id']?>" class="card">
                    <div class="content-card">
                        <span class="dureeman"><?= $donnees['duration']?></span>
                        <img class="card-img-top" src="assets/img/formations.png" alt="Card image cap">
                        <p calss="text-center" style="margin-top:5%;"><?= $donnees['Ville']?></p>
                        <h3><?= $donnees['titre_poste']?></h3>
                        <p style="font-size:0.8em;"><?= $donnees['chapo']?></p>
                        <a class="savoir_plus" href="formations.php?art=<?= $donnees['id']?>">En savoir plus</a>
                    </div>
                </a>
            </div>
            
            
            <?php } 
            
?>
        </div>
      <div class="item" id="pageDeux">      
            <?php 
        //recup du contenus des tables articles
       $reponse= $bdd->query('SELECT * FROM proposer_formations ORDER BY id DESC LIMIT 4,8');
        //affichage des elements
        while($donnees = $reponse->fetch())
        {
?>
            
            <div class="col-sm-3">
                <a href="formations.php?art=<?= $donnees['id']?>" class="card">
                    <div class="content-card">
                        <span class="dureeman"><?= $donnees['duration']?></span>
                        <img class="card-img-top" src="assets/img/formations.png" alt="Card image cap">
                        <p calss="text-center" style="margin-top:5%;"><?= $donnees['Ville']?></p>
                        <h3><?= $donnees['titre_poste']?></h3>
                        <p style="font-size:0.8em;"><?= $donnees['chapo']?></p>
                        <a class="savoir_plus" href="formations.php?art=<?= $donnees['id']?>">En savoir plus</a>
                    </div>
                </a>
            </div>
            
            
            <?php } 
            
?>
            </div>
        
        <div class="item" id="pageTrois">      
            <?php 
        //recup du contenus des tables articles
       $reponse= $bdd->query('SELECT * FROM proposer_formations ORDER BY id DESC LIMIT 8,12');
        //affichage des elements
        while($donnees = $reponse->fetch())
        {
?>
            
            <div class="col-sm-3">
                <a href="formations.php?art=<?= $donnees['id']?>" class="card">
                    <div class="content-card">
                        <span class="dureeman"><?= $donnees['duration']?></span>
                        <img class="card-img-top" src="assets/img/formations.png" alt="Card image cap">
                        <p calss="text-center" style="margin-top:5%;"><?= $donnees['Ville']?></p>
                        <h3><?= $donnees['titre_poste']?></h3>
                        <p style="font-size:0.8em;"><?= $donnees['chapo']?></p>
                        <a class="savoir_plus" href="formations.php?art=<?= $donnees['id']?>">En savoir plus</a>
                    </div>
                </a>
            </div>
            
            
            <?php } 
            
?>
            </div>
        <div class="item" id="pageQuatre">      
            <?php 
        //recup du contenus des tables articles
       $reponse= $bdd->query('SELECT * FROM proposer_formations ORDER BY id DESC LIMIT 12,16');
        //affichage des elements
        while($donnees = $reponse->fetch())
        {
?>
            
            <div class="col-sm-3">
                <a href="formations.php?art=<?= $donnees['id']?>" class="card">
                    <div class="content-card">
                        <span class="dureeman"><?= $donnees['duration']?></span>
                        <img class="card-img-top" src="assets/img/formations.png" alt="Card image cap">
                        <p calss="text-center" style="margin-top:5%;"><?= $donnees['Ville']?></p>
                        <h3><?= $donnees['titre_poste']?></h3>
                        <p style="font-size:0.8em;"><?= $donnees['chapo']?></p>
                        <a class="savoir_plus" href="formations.php?art=<?= $donnees['id']?>">En savoir plus</a>
                    </div>
                </a>
            </div>
            
            
            <?php } 
            
?>
            </div>
         
</div>  

        </div>
</div>
          </div>
           <!-- Controls -->
  
  
<div class="container" id="basMarge">
<div class="row">
<div class="col-sm-12">
<ul class="pagination">

<!--  <li><a href="formations-list.php" data-slide="prev"> << </a></li>
  <li><a href="#myCarousel" data-slide="prev">1</a></li>
  <li><a href="#myCarousel" data-slide="next">2</a></li>
  <li><a href="#myCarousel" data-slide="next">3</a></li>
  <li><a href="#myCarousel" data-slide="next">4</a></li>
  <li><a href="#">5</a></li>
  <li><a href="formations-list.php" data-slide="prev">>></a></li>  -->
  <li><a href="#myCarousel" data-slide="prev"> <- </a></li>
  <li><a href="#pageUn">1</a></li>
  <li><a href="#pageDeux">2</a></li>
  <li><a href="#pageTrois">3</a></li>
  <li><a href="#pageQuatre">4</a></li>
  <li><a href="#">5</a></li>
  <li><a href="#myCarousel" data-slide="prev">-></a></li> 
</ul>  
   
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
            <a href="presse.php">Communiqué de presse</a>
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
    
<script>
$('#myCarousel').carousel({
  interval: 10000
})
if($( window ).width() >= 780){
$('.carousel .item').each(function(){
  var next = $(this).next();
  if (!next.length) {
    next = $(this).siblings(':first');
  }
  next.children(':first-child').clone().appendTo($(this));
  
  if (next.next().length>0) {
    next.next().children(':first-child').clone().appendTo($(this));
  }
  else {
  	$(this).siblings(':first').children(':first-child').clone().appendTo($(this));
  }
});
}
</script>    


</body>
</html>