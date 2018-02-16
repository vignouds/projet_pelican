<?php $title = 'Petites annonces'; ?>

<?php ob_start(); ?>

			<div class="corps" id="annonces">
				<div id="menu_annonces">
<?php 
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=projet_pelican;charset=utf8', 'root', '');
}

catch (Exception $e)
{
	die('Erreur : ' . $e->getMessage());
}

$reponse = $bdd->query('SELECT * FROM adverts');

while($donnees = $reponse->fetch())
{
?>
					<p class="annonce"><?php echo nl2br(htmlentities($donnees['content'])); ?></p>
<?php
}

$reponse->closeCursor();

?>
				</div>
				<?php include('retour_taverne.php'); ?>
			</div>

<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>