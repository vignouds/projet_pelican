<?php $title = 'Le Pélican Séché'; ?>

<?php ob_start(); ?>

			<section class="row">
				<div class="taverne">
					<div>
						<p>Bienvenue à la biliothèque.</p>
					</div>

					<div class="nav">
					<p><a href="taverne.php">Retour à la taverne</a></p>
					</div>
				</div>
			</section>

<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>