<?php $title = 'Inscription'; ?>

<?php ob_start(); ?>

			<section>
				<div id="inscription">
					<p>Page d'inscription ici.</p>
				</div>
			</section>

<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>