<?php 
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=projet_pelican;charset=utf8', 'root', '');
}

catch (Exception $e)
{
	die('Erreur : ' . $e->getMessage());
}

$req = $bdd->prepare('SELECT id, pseudo, pass FROM members WHERE pseudo = ?');
$req->execute(array($_POST['pseudo']));

$donnees = $req->fetch();

$mdp = $_POST['pass'];
$hash = $donnees['pass'];

if (password_verify($mdp, $hash)) 
{
    session_start();
    $_SESSION['id'] = $donnees['id'];
    $_SESSION['pseudo'] = $donnees['pseudo'];

    echo 'Connexion réussie <br> <a href="index.php">Retourner à l\'acceuil</a>';
} 
else 
{
    echo 'Mot de passe invalide <br> <a href="connexion.php">Réessayer</a>';
}

$req->closeCursor();
