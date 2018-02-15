<?php $title = 'Bienvenue sur le Pélican Séché'; ?>

<?php ob_start(); ?>

			<section>
				<div id="index">
					<p>Bienvenue voyageur égaré.</p>
					<p>Laissez-moi vous guider dans cet univers de divertissements. Plusieurs options s'offrent à vous.</p>
					<p>Une soif à étancher ? Rendez-vous dans la fameuse taverne <a href="taverne.php">Le Pélican Séché</a>. Outre y boire un breuvage aussi amer que raffréchissant, vous pourrez tromper votre ennui en lisant le journal, consultant les petites annonces et bien d'autres choses encore.</p>
					<p>Soif de coniassances ou avide de nourritures spirituelles ? Les archivistes du Couloir mettent à votre disposition des ouvrages en tous genres dans leur antique <a href="biblio.php">biliothèque.</a></p>					
					<p>Enfin, si c'est votre première visite en ces lieux, n'oubliez pas d'aller vous faire inscrire sur le registre au <a href="inscription.php">bureau des enregistrements</a>. Tout contrevenant non identifié est passible d'une amende ! On ne rigole pas avec la sécurité, dans le Couloir des Mondes...</p>

				</div>
			</section>

<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>