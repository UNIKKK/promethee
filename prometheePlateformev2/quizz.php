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
        <div class="col-sm-12" style="text-align: center;">
            <div class="quizz-title">
            <h1>Bienvenue !</h1>
                <hr class="separator" >
            <h3>Tu recherches un <strong>emploi</strong> ou une <strong>formation</strong> ? Prométhée est là pour te <strong>guider</strong>. C’est simple réponds à ce <strong>questionnaire</strong>.</h3>
            </div>
        </div>
    </div>
</div> 

<div class="container">
    <div class="row">
        <div class="col-sm-12" style="margin-bottom:9%;">
        <br>


    <form id="quizzed" action="quizz.php" method="post">
        
        <label  for="mail" style="font-weight:400;">Quel est ton email ?</label>
        <br><input name="mail" type="text" id="mail"  class="champ" placeholder="aaa@domaine.com"/>
        
        
        <br>
        <br>
        <div  id="i1">
        <label for="tel" style="font-weight:400;">Ton numéro de téléphone ?</label> 
        <br><input type="mobile" id="mobile" name="mobile" class="champ" placeholder="0605040301"/>
        <br>
        <br>
        </div>
         <div  id="i2" style="font-weight:400;">
        <label for="geo">Quelle est ta localisation ?</label>
        <br><input type="text" id="geo" name="geo" class="champ" placeholder="Paris"/>
        <br>
        <br>
        </div>
         <div  id="i3" style="font-weight:400;">
        <label for="confirmation">Ton domaine d'activité ?</label>
        <br><input type="text" id="domaine" name="domaine" class="champ" placeholder="Informatique, santé"/>
        <br>
        <br>
        </div>    
         <div  id="i4" style="font-weight:400;">
        <label for="mail">Que recherches-tu ?</label>
        <br><input type="text" id="typerecherche" name="typerecherche" class="champ" placeholder="Emplois, Formations"/>
        <br>
        <br>
        </div>
         <div  id="i5" style="font-weight:400;">
        <label for="mail">Quel est ton niveau d'étude ?</label>
        <br><input type="text" id="etude" name="etude" class="champ" placeholder="BAC/BAC+2/Non diplome"/>
        <br>
        <br>
        
        </div>
    <div>
        <a class="button_quizz2" type="submit" name="envoyer" id="envoyer"  onclick="alert('Formulaire envoyé merci.');">Valider</a>
        <a class="button_quizz2" id="byebye" onclick="next_quizz()">Suivant</a>
    </div>
<?php 
    
    if(isset($_POST['envoyer']))
    {
        
       
        
        $bdd->exec("INSERT INTO `handicap`(`mail`, `mobile`, `geo`, `secteur`, `type`,`niv_etude`) VALUES('".$_POST ['mail']."', '".$_POST['mobile']."', '".$_POST['geo']."', '".$_POST['domaine']."', '".$_POST['typerecherche']."', '".$_POST['etude']."');");
        
        
    }

?> 
    </form>
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
    

<!-- on inclut la bibliothèque depuis les serveurs de Google -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
    <script>
    
var countelement=0;
var mdr=-2;
function next_quizz(){
    
    
    $("#i" + countelement).css('display','block');
    window.location.replace("#i" + mdr);
                               
    countelement ++;
    mdr++;
    
  if (countelement==6){
      document.getElementById("envoyer").style.display="unset";
      document.getElementById("byebye").style.display="none";
       
  }  
    else{
       
    };
    
}
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