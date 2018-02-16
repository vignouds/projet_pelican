<?php 
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=projet_pelican;charset=utf8', 'root', '');
}

catch (Exception $e)
{
	die('Erreur : ' . $e->getMessage());
}


$reponse = $bdd->query('SELECT * FROM members');

while($donnees = $reponse->fetch())
{
?>
					<p> <?php echo nl2br(htmlentities($donnees['pass'])); ?></p>
<?php
}

$reponse->closeCursor();

?>

