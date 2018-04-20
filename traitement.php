<?php
session_start();
$host = "localhost"; # Hôte
$dbname = "holidaydream"; # Nom de la base de donnée
$user = "root"; # Nom d'utilisateur
$password = ""; # Mot de passe

try {
    $connect = new PDO('mysql:host='. $host . ';dbname='. $dbname .';charset=utf8', $user, $password);
}catch(PDOException $e){
	die('Erreur : '.$e->getMessage());
}

		$societe=$_POST['societe'];
		$nom=$_POST['nom'];
		$prenom=$_POST['prenom'];
		$email=$_POST['email'];
		$tel=$_POST['tel'];
		$objet=$_POST['objet'];
		$presentation=$_POST['presentation'];

$s = $connect->prepare('INSERT INTO formulaire (societe, nom, prenom, email, tel, objet, presentation) VALUES (:societe, :nom, :prenom, :email, :tel, :objet, :presentation)');
				 $s->execute(array(
		            'societe'=> $societe, 
		            'nom' => $nom,
					'prenom' => $prenom,
					'email' => $email,
					'tel' => $tel,
					'objet' => $objet,
					'presentation' => $presentation, ));

				header('Location: accueil.php');
 ?>
