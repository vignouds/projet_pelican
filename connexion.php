<?php $title = 'Connexion'; ?>

<?php ob_start(); ?>

			<div class="corps" id="connexion">
				<form method="post" action="connect.php">
					<p>Pseudo <input type="text" name="pseudo"></p>
					<p>Mot de passe <input type="password" name="pass"></p>
					<input type="submit" value="Se connecter" />
				</form>
			</div>

<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>