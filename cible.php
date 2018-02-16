<?php
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=projet_pelican;charset=utf8', 'root', '');
}

catch (Exception $e)
{
	die('Erreur : ' . $e->getMessage());
}

/* Vérification de la validité des informations

    Le pseudonyme demandé par le visiteur est-il libre ? S'il est déjà présent en base de données, il faudra demander au visiteur d'en choisir un autre.

    Les deux mots de passe saisis sont-ils identiques ? S'il y a une erreur, il faut inviter le visiteur à rentrer à nouveau le mot de passe.

    L'adresse e-mail a-t-elle une forme valide ? Vous pouvez utiliser une expression régulière pour le vérifier.*/

// Hachage du mot de passe

$pass_hache = password_hash($_POST['pass'], PASSWORD_DEFAULT);


// Insertion

$pseudo = $_POST['pseudo'];
$email = $_POST['email'];

$req = $bdd->prepare('INSERT INTO members(pseudo, pass, email, signup_date) VALUES(:pseudo, :pass, :email, CURDATE())');

$req->execute(array(

    'pseudo' => $pseudo,

    'pass' => $pass_hache,

    'email' => $email));