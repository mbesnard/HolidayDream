<!DOCTYPE html>
<html>
	<head>
		<meta content="text/html; charset=UTF-8" http-equiv="Content-Type"> <!--accent lisible par les navigateurs-->
		<meta name="viewport" content="width=device-width"/> <!--accessible sur mobile -->

		<link type="text/css" rel="stylesheet" href="style.css" /> <!-- lien vers le CSS-->
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

				<div id="contenu"> <!--3ème bloc-->	
					<p> Vous souhaitez nous contacter ? Répondez au formulaire et nous vous répondrons le plus vite possible. </p> 	

				<form id="form"  action="traitement.php" method="post"> <!-- formulaire-->
					<fieldset> <!-- contour-->
						<legend>Formulaire de Contact :</legend>

				<p><label for="nom"> Civilité : </label>
				<input type="radio" name="civi" value="Mlle" /> Monsieur
   				<input type="radio" name="civi" value="Mr" /> Madame
				</p>
			
				<label for="nom"> Société : </label> <!--titre du champs-->
				<input type="text" name="societe" id="societe" placeholder="Ex : HolidayDream" size="30" maxlength="20" autofocus  required/><br><br> <!-- champs a completer-->

		 		<label for="nom"> Nom* : </label>
				<input type="text" name="nom" id="nom" placeholder="Ex : Imen" size="30" maxlength="20" autofocus  required/><br><br>
			
		 	 	<label for="prenom"> Prénom* : </label>
				<input type="text" name="prenom" id="prenom" placeholder="Ex : Maureen" size="30" maxlength="20" required/><br><br>

				<label for="email"> @ mail : </label><input name="email" type="email" placeholder="Ex : maureen.imen@holidaydream.fr" size="30" maxlength="50"/><br><br>
				
				<label for="tel"> Téléphone : </label> <input name="tel" type="tel" placeholder="Ex : 0120304050" size="30" maxlength="14"/><br><br>
				
			 	<label for="objet"> Objet* : </label>
			 	<input type="text" name="objet" id="objet" placeholder="Ex : Objet" size="30" maxlength="20" required/><br><br>
			 		
			 	<label for="presentation"> Votre Message* : </label>
			 	<textarea name="presentation" id="presentation" required ></textarea><br>

			<p> * champs obligatoires </p>

			<input type="submit" value="Envoyer"> 	<!-- bouton-->
			<input type="reset" value="Annuler">

			<p> Merci de votre visite et à bientôt !  </p>

			</fieldset>

			</div>

	</body>			

</html> 