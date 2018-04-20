<!DOCTYPE html>
<html>
	<head> <!--en-tête-->
		<meta name="viewport" content="width=device-width"/> <!--accessible sur mobile -->
    <meta content="text/html; charset=UTF-8" http-equiv="Content-Type"> <!--accent lisible par les navigateurs-->

		<title> Holiday Dream </title> <!--titre de la page -->
		<link type="text/css" rel="stylesheet" href="style.css" />  <!--lien avec le CSS -->
	</head>

		<body> <!--corps du site-->

      <div id="banniere1"> <!--1er bloc-->
        <img src="img/ideelogo.jpg" width="350" height="250"/>
      </div> 

        <nav id="menu"> <!--2ème bloc-->
          <ul> <!--liste désordonnée-->
            <li><a href="accueil.php">Accueil</a></li> <!--liste ordonnée-->
            <li><a href="chambres.html">Chambres</a></li>   <!-- accompagne d'un lien hypertexte--> 
            <li><a href="salles.html"> Salles </a></li>
            <li><a href="loisirs.php"> Loisirs </a></li>
            <li><a href="evenements.php"> Evènements </a></li> 
            <li><a href="info.php">Plans & Accès</a></li>
            <li><a href="formulaire.php"> Nous Contacter </a></li>
            <li style="float:right"><a href="forum.php"> Avis </a>
            <li style="float:right"><a href="compte.php"> Mon Compte </a>
          </ul> 
        </nav> 

        <h3 align="center"> Bienvenue </h3>	
          <p align="center"> Notre hôtel situé au bord de la Garonne, rend l’accès facile à notre établissement grâce à de nombreux transports en communs. Ainsi nous pouvons vous offrir une base accessible (handicapés acceptés), confortable (animaux admis) et calme pour les séjours d’affaires ou de vacances.
          Alors venez profiter de nos 36 chambres insonorisées et climatisées ainsi que de nos 4 suites, avec un service de qualité (aimable et chaleureux) qui vous donnera le sentiment d’être chez vous au sein de <B>Holiday Dream</B>. Tout en profitant de nos extras (bar, restauration, évènements et loisirs divers) pour vous divertir. </p>		
   
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>  <!--bootstrap-->

  <style> /*css carousel*/
  .carousel-inner > .item > img,
  .carousel-inner > .item > a > img {
      width: 100%;
      margin: auto;
  }
  </style>

  <div class="container"> <!--carousel photo-->
    <br>
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
    
    <div class="carousel-inner" role="listbox">

      <div class="item active"> <!--photo par photo -->
        <img src="img/chambre-simple3.jpg" alt="Chania" width="460" height="345">
        <div class="carousel-caption">
          <h3>Chambre Simple</h3>
          
        </div>
      </div>

      <div class="item">
        <img src="img/Chambre-Twin.jpg" alt="Chania" width="460" height="345">
        <div class="carousel-caption">
          <h3>Chambre Twin</h3>
         
        </div>
      </div>
    
      <div class="item">
        <img src="img/chambre-double2.jpg" alt="Flower" width="460" height="345">
        <div class="carousel-caption">
          <h3>Chambre Double</h3>
         
        </div>
      </div>

      <div class="item">
        <img src="img/suite.jpg" alt="Flower" width="460" height="345">
        <div class="carousel-caption">
          <h3>Suite</h3>
         
        </div>
      </div>

      <div class="item">
        <img src="img/anniversaire.jpg" alt="Flower" width="460" height="345">
        <div class="carousel-caption">
          <h3>Salles</h3>
         
        </div>
      </div>

      <div class="item">
        <img src="img/bar2.jpg" alt="Flower" width="460" height="345">
        <div class="carousel-caption">
          <h3>Bar</h3>
         
        </div>
      </div>

      <div class="item">
        <img src="img/restaurant.jpg" alt="Flower" width="460" height="345">
        <div class="carousel-caption">
          <h3>Restaurant (midi, soir, petit-déjeuner)</h3>
         
        </div>
      </div>

       <div class="item">
        <img src="img/spa.jpg" alt="Flower" width="460" height="345">
        <div class="carousel-caption">
          <h3>Spa</h3>
         
        </div>
      </div>

      <div class="item">
        <img src="img/paques.jpg" alt="Flower" width="460" height="345">
        <div class="carousel-caption">
          <h3>Offre de Pâques le 16.04.17, <br>nous convions tous les enfants (avec leurs parents) à une chasse ux oeufs dans les jardins de l'hôtel</h3>
         
        </div>
      </div>

    </div>

    <!-- controle du carousel -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Précedent</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Suivant</span>
    </a>
  </div>
</div>

<br>

  </body>

  <footer>
    <div id="piedDePage" align="center"> <!--pied de page-->
      <ul>
        <li><div class="div">
        <h3>Holiday Dream</h3>
        <p> 151 Rue Bouthier, 33100 Bordeaux </p>
        <p><img src="img/tel.png" width="15" height="15"/> 01.05.99.58.72</p>
        <p> <a href="mailto:holiday@dream.fr"> holiday@dream.fr </a></p>
        </div></li>

        <li><div class="div">
        <h4>Réseaux Sociaux</h4>
        <a href="https://www.facebook.com/"><img src="img/fb.png" width="30" height="30"/></a>
        <a href="https://twitter.com/?lang=fr#"><img src="img/twitter.png" width="30" height="30"/></a>
        <a href="https://www.instagram.com/?hl=fr"><img src="img/insta.jpg" width="30" height="30"/></a> <br>
        </div></li>

        <li> <div class="div">
        <h4>Newsletter</h4>
        <p>Tenez-vous au courant des dernières informations du site.</p>
        <div class="input-group">
          <input type="text" class="form-control" placeholder="Search for..." size="20">
          <span class="input-group-btn"><button class="btn btn-default" type="button"><span class="glyphicon glyphicon-envelope"></span></button></span>
        </div>
        </div></li>    
      </ul>
    </div>

  <div align="center">
    Tous droits réservés © 2017 | <a href="">Politique de Confidentialité</a> | <a href="">Conditions Générales d'Utilisations</a> | <a href="">Mentions Légales</a> | <a href="">FAQ </a> | <a href="">Plan du site</a> 
  </div> 

  </footer>
       
</html>