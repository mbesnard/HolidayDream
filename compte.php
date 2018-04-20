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

      <h1 align="center"> Mon Compte </h1>
      <p align="center"> En vous connectant, vous pourrez <u>réserver</u> et bénéficier <u>d'offres promotionnelles</u>. </p>

	    <form id="form" action="config.php" method="post"> <!-- formulaire de co-->
        <img src="img/perso.jpg" align="right" width="150" height="150"/>

        <label for="login"> Adresse mail<br />
        <input type="email" name="login" required/></label>
    </p> 
    <p>
        <label for="pwd">Mot de passe<br />
        <input type="password" name="mdp" required/></label>
    </p>
        <input type="checkbox" checked='checked' /> Se souvenir de Moi </label></p>
        <input type="submit" value="Se connecter" />
    </p>
        <a href=""> Mot de passe oublié ? </a>

      </form>

        <p align="center"> Vous n'avez pas encore de compte ? Alors inscrivez-vous <a href="inscription.php"> ici </a>. </p> <!-- lien hypertext-->

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
  