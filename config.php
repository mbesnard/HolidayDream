<?php
$host = "localhost"; # Hôte
$dbname = "holidaydream"; # Nom de la base de donnée
$user = "root"; # Nom d'utiliseur
$password = ""; # Mot de passe

try {
	$connect = new PDO('mysql:host='. $host . ';dbname='. $dbname .';charset=utf8', $user, $password);
}catch(PDOException $e){
	die('Erreur : '.$e->getMessage());
}

$query=$connect->prepare('SELECT login, mdp FROM membre WHERE login= :login');
$query->bindvalue(':login',$_POST['login'], PDO::PARAM_STR);
$query->execute();
$data=$query->fetch();
if ($data['mdp'] == $_POST['mdp']){
	session_start();
	$_SESSION['login'] = $data['login'];
	$_SESSION['login'] = $_POST['login'];

header('Location: reservation.php');
exit;
}
else { 
echo "combinaison mot de pass/login incorrect"; 
}


?>



				
