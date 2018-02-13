<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title><?= $title ?></title>
        <link href="bootstrap/css/bootstrap.css" rel="stylesheet">
        <link href="style.css" rel="stylesheet" /> 
    </head>
        
    <body>
    	<div class="container">
			<header class="row">
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
        	<footer class="row">
                
    		</footer>
        </div>

        <script src="jquery-3.3.1.js"></script>
        <script src="script.js"></script>
    </body>
</html>