<?php $title = 'Le Pélican Séché'; ?>

<?php ob_start(); ?>

			<section class="row">
				<div class="taverne">
				    <div class="taverne">
						<!-- Description de la taverne -->
						<p>Ce qui vous frappe en premier, en entrant au Pélican Séché, c'est le linteau de la porte d’entrée un peu trop basse qui surprend toujours le voyageur égaré. <br>
						Passée cette première épreuve, généralement dans un flot de jurons et imprécations étouffés, il faut habituer ses yeux à la pénombre ambiante, qu’obscurcissent encore l’épaisse fumée provenant des cigarettes, cigares et autres pipes des clients, tout en réussissant à ne pas vomir face à l’assaut olfactif mené par les odeurs de crasse et de tabac des cigarettes, cigares, pipes et clients susdits. <br>
						Fumer dans les lieux publics est en effet encore autorisé dans cette partie de l’Univers. </p>
					</div>
					<div id="vide">
							
					</div>
					
					<div class="nav">
						<!-- Liste de choix : lire le journal, lire des livres (encyclopédie), regarder les annonces, parler avec..., regarder la partie de carte... -->
						Alors, qu'allez vous faire maintenant, visiteur ?
						<ul>
							<li><a href="journal.php">Lire le journal </a></li>
							<li><a href="annonces.php">Consulter les annonces </a></li>
							<li><a href="bar.php">Commander une bière </a></li>
							<li><a href="biblio.php">Feuilleter un livre </a></li>
						</ul>
					</div>
				</div>
			</section>

<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>