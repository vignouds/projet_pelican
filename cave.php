<?php $title = 'Cave'; ?>

<?php ob_start(); ?>

			<div class="corps" id="cave">
				<p>Bienvenue à la cave.</p>

				<?php include('retour_taverne.php'); ?>
			</div>

<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>