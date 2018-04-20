<?php
session_start();
$host = "localhost"; # Hôte
$dbname = "holidaydream"; # Nom de la base de donnée
$user = "root"; # Nom d'utilisateur
$password = ""; # Mot de passe

try {
    $connect = new PDO('mysql:host='. $host . ';dbname='. $dbname, $user, $password);
}catch(PDOException $e){
	die('Erreur : '.$e->getMessage());
}

		$codeClient=$_POST['codeClient'];
		$arrive=$_POST['arrive'];
		$depart=$_POST['depart'];
		$harrive=$_POST['harrive'];
		$nbAdulte=$_POST['nbAdulte'];
		$nbEnfant=$_POST['nbEnfant'];
		$nbAnimaux=$_POST['nbAnimaux'];
		$codePromo=$_POST['codePromo'];
		$modeReglement=$_POST['modeReglement'];

$s = $connect->prepare('INSERT INTO reservation(DateDebut,DateFin,harrive, nbreAdulte, nbreEnfant, nbreAnimaux, typePaiement) VALUES (:arrive, :depart, :harrive, :nbAdulte, :nbEnfant, :nbAnimaux , :modeReglement)'); //METTRE TABLE RESERVATION
		$s->execute(array(
					'arrive' => $arrive,
					'depart' => $depart,
					'harrive' => $harrive,
					'nbAdulte' => $nbAdulte,
					'nbEnfant' => $nbEnfant,
					'nbAnimaux' => $nbAnimaux,
					'modeReglement' => $modeReglement,
				));
				 
				 header('Location: facture.html');
				 ?>
