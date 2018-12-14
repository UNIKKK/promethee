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
    
    
<body id="body">
 <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-M6FXJKX"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
    
<nav class="navbar navbar-fixed-top">
  <div class="container" id="beau">
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
        <div class="accessibilite-zoom" id="moin">A-</div>
    <div class="accessibilite-zoom" id="plus">A+</div>
    <button onclick="change_bg()">Contraste</button>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="quizz.php">Questionnaire</a></li>
        <li><a href="formations-list.php">Trouver une offre</a></li>
        <li><a href="propositions.php">Proposer une offre</a></li>
        <li><a href="contact.php">Contact</a></li>
      </ul>
    </div>
  </div>
</nav>
    
<div class="container" id="home-main">
  <div class="row">
    <div calss="col-sm-12">
    <div class="col-sm-6">
        <h1>Tu souhaites plus d’informations ? Contactes-nous,<br> Fais-nous confiance !</h1>
        <div class="sepBlanc"></div>
      </div>
      <div class="col-sm-6">
          <form class="form-cont"  method="post">
 
   <fieldset>

       <label for="nom">Nom</label><br>
       <input class="form-control" type="text" name="nom" id="nom" placeholder="Dupond"/><br>

       <label for="prenom">Prénom</label><br>
       <input class="form-control" type="text" name="prenom" id="prenom" placeholder="Jean"/><br>
 
       <label for="email">Quel est votre e-mail ?</label><br>
       <input class="form-control" type="email" name="email" id="email" placeholder="adresse@domaine.com"/><br>
       
       <label for="message">Message</label><br>
       <textarea class="form-control" type="text" name="message" id="message" placeholder="Votre message"></textarea><br>

   </fieldset>
              <br>
              <button type="submit" name="form_contact" class="button_contact" href="#"  onclick="alert('Formulaire envoyé merci');">Soumettre</button>
          </form>
        <?php
          if(isset($_POST['form_contact']))
{
        
        $bdd->exec("INSERT INTO `contact`(`nom`, `prenom`, `email`, `message`) VALUES('".$_POST ['nom']."', '".$_POST['prenom']."', '".$_POST['email']."', '".$_POST['message']."');");
    
        
    
}
        ?>
      </div>
</div>
    </div>
    </div>
    
<div class="grosconteneur">
    <div class="container" style="align-items:center;">
    <div class="row">
        <div class="col-sm-4" >
        <div id="content-contact">
        <i class="fas fa-home fa-3x"></i>
            <br>
            <br>
        <p class="font-contact">19 rue Voltaire, Paris 75011</p>
        </div>
        </div>
        <div class="col-sm-4" >
        <div id="content-contact">
        <a href="tel:0612345678"><i class="fas fa-phone fa-3x"></i> </a>  
            <br>
            <br>
        <p class="font-contact">0612345678</p>
        </div>
        </div>
        <div class="col-sm-4">
        <div id="content-contact">
            <a href="mailto:groupeheaven@gmail.com"><i class="fas fa-envelope fa-3x"></i> </a>  
            <br>
            <br>
        <p class="font-contact">groupeheaven@gmail.com</p>
        </div>
        </div>
    </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-sm-12">
        <h2 class="titre-contact">Retrouves-nous via Google Map</h2>
        <hr>
        <iframe class="maps" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2625.2909627130334!2d2.389226215902807!3d48.852661809063704!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e67274fd0b00b3%3A0xbd260b61f2c3e82!2s19+Rue+Voltaire%2C+75011+Paris!5e0!3m2!1sfr!2sfr!4v1544064702351" width="100%" height="auto" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
    </div>
</div>
    
<div class="container">
    <h1 class="titre-contact">Notre équipe</h1>
    <hr>
<div class="row" id="under-sep">
<div id="myCarousel" class="carousel slide">
  
<div class="carousel-inner">
    <div class="item active">
        <li><a target="_blank" href="https://fr.linkedin.com/in/melissa-kernou-1106a2140"><img class="img-circle img-responsive" id="sliderino" src="assets/img/melk.png" alt="img1" width="auto" height="auto"/></a>
      <p id="ligneUne">Melissa</p>
      <p id="ligneUne">Kernou</p>
      <p id="ligneTrois">Chef de projet</p>
      </li>
    
    
        <li><a target="_blank" href="https://www.linkedin.com/in/valentine-collet/"><img class="img-circle img-responsive" id="sliderino" src="assets/img/valentine.png" alt="img2"/></a><p id="ligneUne">Valentine</p>
      <p id="ligneUne">Collet</p>
      <p id="ligneTrois">Motion Designer</p>
      </li>
    </div>
    
    <div class="item">
        <li><a target="_blank" href="https://www.linkedin.com/in/shemseddine-o-940676a4/"><img class="img-circle img-responsive" id="sliderino" src="assets/img/shems.png" alt="img3"/></a><p id="ligneUne">Shemseddine</p>
      <p id="ligneUne">Ouhssaine</p>
      <p id="ligneTrois">Graphic Designer</p>
      </li>
    
        <li><a target="_blank" href="https://www.linkedin.com/in/alexis-vlavonou-915465106/"><img class="img-circle img-responsive" id="sliderino" src="assets/img/alexis.png" alt="img4"/></a><p id="ligneUne">Alexis</p>
      <p id="ligneUne">Vlavonou</p>
      <p id="ligneTrois">UX Designer</p>
      </li>
    </div> 
    <div class="item">
        <li><a target="_blank" href="https://www.linkedin.com/in/leo-saderne-161a37138/"><img class="img-circle img-responsive" id="sliderino" src="assets/img/leo.png" alt="img5"/></a><p id="ligneUne">Léo</p>
      <p id="ligneUne">Saderne</p>
      <p id="ligneTrois">UX Designer</p>
      </li>
    
        <li><a target="_blank" href="https://www.linkedin.com/in/stephen-ammerman-8b4749113/"><img class="img-circle img-responsive" id="sliderino" src="assets/img/stephen.png" alt="img6"/></a><p id="ligneUne">Stephen</p>
      <p id="ligneUne">Ammerman</p>
      <p id="ligneTrois">UX Designer</p>
      </li>
    </div>
    <div class="item">
        <li><a target="_blank" href="https://www.linkedin.com/in/nicolas-anastasion/"><img class="img-circle img-responsive" id="sliderino" src="assets/img/nicolas.png" alt="img6"/></a><p id="ligneUne">Nicolas</p>
      <p id="ligneUne">Anastasion</p>
      <p id="ligneTrois">Motion Designer</p>
      </li>
  
        <li><a targe="_blank" href="https://www.linkedin.com/in/loic-barondiot-481258b2/"><img class="img-circle img-responsive" id="sliderino" src="assets/img/loic.png" alt="img6"/></a>
      <p id="ligneUne">Loïc</p>
      <p id="ligneUne">Barondiot</p>
      <p id="ligneTrois">Graphic Designer</p>
      </li>
    </div>
    <div class="item">
      <li><a target="_blank" href="https://www.linkedin.com/in/frank-lubin/"><img class="img-circle img-responsive" id="sliderino" src="assets/img/frank.png" alt="img6"/></a>
      <p id="ligneUne">Frank</p>
      <p id="ligneUne">Lubin</p>
      <p id="ligneTrois">Motion Designer</p>
      </li>
    
    
        <li><a target="_blank" href="https://www.linkedin.com/in/blf-cedric/"><img class="img-circle img-responsive" id="sliderino" src="assets/img/cedric.png" alt="img6"/></a>
        <p id="ligneUne">Cédric</p>
      <p id="ligneUne">Beziers la fosse</p>
      <p id="ligneTrois">Développeur</p>
      </li>
    </div>

</div>
  <!-- Controls -->
  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next"style="background-image:none;">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true" ></span>
    <span class="sr-only">Next</span>
  </a>
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
<script>
$(document).ready(function() {
    $(window).scroll(function() {
        if ($(window).scrollTop() == 0) {
            $('#scrollToTop').fadeOut("fast");
        } else {
            if ($('#scrollToTop').length == 0) {
                $('body').append('<div id="scrollToTop">' + '<a href="#"></a>' + '</div>');
            }
            $('#scrollToTop').fadeIn("fast");
        }
    });
    $('body').on('click', '#scrollToTop a', function(event) {
        event.preventDefault();
        $('html,body').animate({
            scrollTop: 0
        }, 'slow');
    });
});
</script> 
<script>
$('#plus').click(function(e){
        var elements = $("body").find("p"),
            fontSizeArray = [];

        elements.each(function() {
            var obj = {
                element: $(this),
                originalSize: $(this).css("font-size"),
                size: $(this).css("font-size")
            };
            if (!fontSizeArray.some(function(item) {
                return item.element === obj.element &&
                    item.originalSize === obj.originalSize &&
                    item.size === obj.size;
            })) {
                fontSizeArray.push(obj);
            }

        });
        fontSizeArray.forEach(function(element) {
            let s = element.element.css('font-size');
            s =parseInt(s.substring(0, 2))
            s= s+1
            if(s >= 30){}else{
                element.element.css('font-size',s+'px')
                console.log( s)}
        })
    })
    $('#moin').click(function(e){
        var elements = $("body").find("p"),
            fontSizeArray = [];

        elements.each(function() {
            var obj = {
                element: $(this),
                originalSize: $(this).css("font-size"),
                size: $(this).css("font-size")
            };
            if (!fontSizeArray.some(function(item) {
                return item.element === obj.element &&
                    item.originalSize === obj.originalSize &&
                    item.size === obj.size;
            })) {
                fontSizeArray.push(obj);
            }

        });
        fontSizeArray.forEach(function(element) {
            let s = element.element.css('font-size');
            s =parseInt(s.substring(0, 2))
            s= s-1

            if(s <= 10){}else{
                element.element.css('font-size',s+'px')
                console.log( s)}
        })
        })
</script>
    <script>
    function change_bg(){
        
    
    
    
    document.getElementById('body').style.background="black";
    }
</script>
    
</body>
</html>