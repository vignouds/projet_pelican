<?php $title = 'Inscription'; ?>

<?php ob_start(); ?>

			<div class="corps" id="inscription">
				<p>Inscrivez-vous ici.</p>
				<form method="post" action="cible.php">
				    <p>Pseudo : <input type="text" name="pseudo" /></p>
				    <p>Mot de passe : <input type="password" name="pass" /></p>
				    <p>Répétez votre mot de passe : <input type="password" name="passVerif" /></p>
				    <p>Adresse email : <input type="text" name="email" /></p>
				    <input type="submit" value="Valider" />
				</form>
			</div>

<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>