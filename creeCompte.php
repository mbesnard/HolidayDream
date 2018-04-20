<?php
session_start();
$host = "localhost"; # Hôte
$dbname = "holidaydream"; # Nom de la base de donnée
$user = "root"; # Nom d'utilisateur
$password = ""; # Mot de passe

try {
    $connect = new PDO('mysql:host='. $host . ';dbname='. $dbname .';charset=utf8', $user, $password);
}catch(PDOException $e){
	die('Erreur :'.$e->getMessage());
}

		$nom=$_POST["nom"];
		$prenom=$_POST["prenom"];
		$societe=$_POST["societe"];
		$DateDeNaiss=$_POST["DateDeNaiss"];
		$natio=$_POST["natio"];
		$mail=$_POST["mail"];
		$tel=$_POST["tel"];
		$rue=$_POST["rue"];
		$cp=$_POST["cp"];
		$ville=$_POST["ville"];
		$pays=$_POST["pays"];
		
$s = $connect->prepare('INSERT INTO client (nom, prenom, societe, DateDeNaiss, natio, mail, tel, rue, cp, ville, pays) VALUES (:nom, :prenom, :societe, :DateDeNaiss, :natio, :mail, :tel, :rue, :cp, :ville, :pays)');
				 $s->execute(array(
		            'nom'=> $nom, 
		            'prenom' => $prenom, 
		            'societe'=> $societe, 
		            'DateDeNaiss' => $DateDeNaiss,
		            'natio'=> $natio, 
		            'mail' => $mail,
		            'tel'=> $tel, 
		            'rue' => $rue,
		            'cp' => $cp,
		            'ville'=> $ville, 
		            'pays' => $pays,) );
				 
		$login=$_POST["login"];
		$mdp=$_POST["mdp"];
		
$s = $connect->prepare('INSERT INTO membre (login, mdp) VALUES (:login, :mdp)');
				 $s->execute(array(
		            'login'=> $login, 
		            'mdp' => $mdp, ));

header('Location: compte.php');

				 ?>