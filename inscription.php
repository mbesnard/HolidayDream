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
        <img src="img/ideelogo.jpg" width="350" height="250"/> <!--logo-->
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

            <h1 align="center"> Inscription </h1>
                    
        <form id="connexion" action="creeCompte.php" method="post"> <!-- formulaire d'inscription-->
            <fieldset>
            <legend> <i> Coordonnées </i> </legend>
        <p><label for="nom"> Civilité* : </label>
            <input type="radio" name="civi" value="Mr" /> Monsieur
            <input type="radio" name="civi" value="Mme" /> Madame
        </p>
        <label for="nom"> Société : </label> <!--champs demande-->
        <input type="text" name="societe" id="societe" placeholder="Ex : Hotel" size="30" maxlength="30" autofocus  /><br><br> <!-- champs a complete-->

        <label for="nom"> Nom* : </label>
        <input type="text" name="nom" id="nom" placeholder="Ex : Holiday" size="30" maxlength="30" required/><br><br>

        <label for="prenom"> Prénoms* : </label>
        <input type="text" name="prenom" id="prenom" placeholder="Ex : Dream" size="30" maxlength="30" required/><br><br>

        <label for="age"> Date De Naissance* : </label>
        <input type="date" name="DateDeNaiss" id="date" placeholder="Ex : 03/03/2017 " size="30"required/><br><br>

         <label for="age"> Nationalité* : </label>
        <input type="text" name="natio" id="natio" placeholder="Ex : française " size="30" maxlength="30" required/><br><br>

        <label for="email"> Email* : </label>
        <input type="text" name="mail" id="mail" placeholder="Ex : holidaysdream@orange.fr " size="30" maxlength="50" required/><br><br>

        <label for="tel"> Téléphone* : </label>
        <input type="text" name="tel" id="tel" placeholder="Ex : 0160502030 " size="30" maxlength="10" required/><br><br>

    <fieldset>
    <legend> <i> Adresse </i> </legend>
        <label for="Rue"> Rue* : </label>
        <input type="text" name="rue" id="rue" placeholder="Ex : Grande Rue" size="30" maxlength="30" required/><br><br>

        <label for="CP"> CP* : </label>
        <input type="text" name="cp" id="cp" placeholder="Ex : 33000" size="30" maxlength="5" required/><br><br>

        <label for="ville"> Ville* : </label>
        <input type="text" name="ville" id="ville" placeholder="Ex : Bordeaux" size="30" maxlength="30" required/><br><br>

        <label for="ville"> Pays* : </label>
        <input type="text" name="pays" id="pays" placeholder="Ex : FRANCE" size="30" maxlength="30" required/><br><br>
    </fieldset> </br>
        
    </fieldset> </br>

    <fieldset> <!--bulletin pour la connection-->
    <legend> <i> Données de Connection </i> </legend>
        <p>Renseigner une photo de profil:
        <input type="file" name="monfichier"/> 
    </p>
        <label for="login"> Adresse mail<br />
        <input type="email" name="login" id="login" size="20" /></label>
    </p> 
    <p>
        <label for="pwd">Mot de passe<br />
        <input type="password" name="mdp" id="mdp" size="20" /></label>
    </p>

    </fieldset> </br> 

    <div class="g-recaptcha" data-sitekey="6LdH5gsUAAAAAOYpAJtfhHJ31uVpAMiGga-_JwEq"><div style="width: 304px; height: 78px;"><div><iframe src="https://www.google.com/recaptcha/api2/anchor?k=6LdH5gsUAAAAAOYpAJtfhHJ31uVpAMiGga-_JwEq&amp;co=aHR0cDovL3ZvZXV4LmxhcG9zdGUuZnI6ODA.&amp;hl=fr&amp;v=r20170109113303&amp;size=normal&amp;cb=fl50turggvui" title="widget recaptcha" width="304" height="78" frameborder="0" scrolling="no" name="undefined"></iframe></div><textarea id="g-recaptcha-response" name="g-recaptcha-response" class="g-recaptcha-response" style="width: 250px; height: 40px; border: 1px solid #c1c1c1; margin: 10px 25px; padding: 0px; resize: none;  display: none; "></textarea></div></div>
        <input type="checkbox" name="choix" value="Accept" />J'accepte les conditions de l'inscription
        <p align="center"> * champs obligatoires </p>

    <div align="center">
        <input type="submit" name="inscription" value="inscription">     
    </div>
        
    </form>
    
    </body>

</html>  