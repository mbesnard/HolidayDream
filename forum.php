<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8"> <!--accent lisible par les navigateurs-->
    <title>Forum</title>
  
    <link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css'> <!--bootstrap-->
    <link rel="stylesheet" href="style1.css"> <!--lien css-->
  </head>

  <body>
  
    <div id="banniere1"> <!-- premier bloc-->
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
          
        <h1 align="center"> Forum </h1>

        <div class="container"> <!-- 3eme bloc-->
          <div class="row">
            <div class="col-md-offset-3 col-md-6 col-xs-12">
              <div class="well well-sm well-social-post">
        
        <form class="avis"> <!--menu-->
          <ul class="list-inline" id='list_PostActions'>
            <li class='active'><a href='#'>Ecrire un avis</a></li>
            <li><a href='#'>Ajouter Photos/Video</a></li>
          </ul>
          
        <div class="rating"><!--etoile-->
          <a href="#5" title="Donner 5 étoiles">☆</a>
          <a href="#4" title="Donner 4 étoiles">☆</a>
          <a href="#3" title="Donner 3 étoiles">☆</a>
          <a href="#2" title="Donner 2 étoiles">☆</a>
          <a href="#1" title="Donner 1 étoile">☆</a>
        </div>

        <textarea class="form-control" placeholder="Nous sommes heureux de vous avoir accueillis, ici vous pouvez noter votre séjour (la prestation, l'accueil, la disponibilité du personnel et la qualité des informations). Ainsi que de nous informer sur d'éventuelles améliorations, ou si vous avez des conseils pour nos futurs clients. A très bientot, Holiday Dream !"></textarea>
        <ul class='list-inline post-actions'> <!-- texte a completer-->
        <li><a href="#"><span class="glyphicon glyphicon-camera"></span></a></li>
        <li><a href="#" class='glyphicon glyphicon-user'></a></li>
        <li><a href="#" class='glyphicon glyphicon-map-marker'></a></li>
        <li class='pull-right'><a href="#" class='btn btn-primary btn-xs'>Publier</a></li>
        </ul>
        </form>

        </div>
    </div>
  </div>
</div>
  
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
  <script src="fb.js"></script>

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