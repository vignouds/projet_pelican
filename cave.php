<?php $title = 'Cave'; ?>

<?php ob_start(); ?>

			<section>

				<div class="taverne">
					<div>
						<p>Bienvenue à la cave.</p>

						<?php include('retour_taverne.php'); ?>
					</div>
				</div>
			</section>

<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>