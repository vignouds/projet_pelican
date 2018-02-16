<?php
session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title><?= $title ?></title>
        <link href="style.css" rel="stylesheet" /> 
    </head>
        
    <body>
    	<div id="container">
			<header>
	      		<nav>
	                <ul>
	                    <li><a href="index.php">Acceuil</a></li>
	                    <li><a href="taverne.php">Taverne</a></li>
	                    <li><a href="biblio.php">Bibliothèque</a></li>
	                </ul>    
	            </nav>
	            <div>
<?php
if (isset($_SESSION['id']) AND isset($_SESSION['pseudo']))
{
    echo 'Bonjour ' . $_SESSION['pseudo'] . '. <a href="logout.php">Se déconnecter</a>';
}
else
{
?>
					Bonjour visiteur. <form method="post" action="connect.php">Pseudo <input type="text" name="pseudo"> Mot de passe <input type="password" name="pass"> <input type="submit" value="Se connecter" /></form>
<?php
}
?>	
	            </div>
	  		</header>
	    	<?= $content ?>
	    	<footer>

			</footer>
		</div>

        <script src="jquery-3.3.1.js"></script>
        <script src="script.js"></script>
    </body>
</html>