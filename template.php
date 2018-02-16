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
	                    <li><a href="connexion.php">Connexion</a></li>
	                </ul>    
	            </nav>
	  		</header>
	    	<?= $content ?>
	    	<footer>
<?php
if (isset($_SESSION['id']) AND isset($_SESSION['pseudo']))
{
    echo 'Bonjour ' . $_SESSION['pseudo'];
}
else
{
	echo 'Bonjour invité';
}
?>
			</footer>
		</div>

        <script src="jquery-3.3.1.js"></script>
        <script src="script.js"></script>
    </body>
</html>