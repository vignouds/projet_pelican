<?php $title = 'Inscription'; ?>

<?php ob_start(); ?>

			<section class="row">
				<div id="inscription">
					<p>Page d'inscription ici.</p>
				</div>
			</section>

<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>