<?php $title = 'Inscription'; ?>

<?php ob_start(); ?>

			<section class="row">
				<div id="connexion">
					<p>Page de connexion ici.</p>
				</div>
			</section>

<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>