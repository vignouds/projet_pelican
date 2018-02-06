<?php $title = 'Cave'; ?>

<?php ob_start(); ?>

			<section class="row">

				<div class="taverne">
					<div>
						<p>Bienvenue à la cave.</p>

						<div class="nav">
							<p><a href="taverne.php">Retour à la taverne</a></p>
						</div>
					</div>
				</div>
			</section>

<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>