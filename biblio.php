<?php $title = 'Le Pélican Séché'; ?>

<?php ob_start(); ?>

			<section class="row">
				<div id="corps_biblio">
					<div>
						<p>Bienvenue à la biliothèque.</p>
						<p>Nous avons à votre disposition toute une série d'ouvrages plus passionants les uns que les autres !</p>
						<ul>
							<li id="printemps">Toujours le printemps revient</li>
							<li id="murge">Hommage à Alphonse Murge</li>
						</ul>
					</div>
					<div id="biliotheque">
						
					</div>
				</div>
			</section>

<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>