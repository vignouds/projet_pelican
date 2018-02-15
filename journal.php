<?php $title = 'L\'Echo du Couloir'; ?>

<?php ob_start(); ?>

			<section>
				<div id="journal">
					<div id="titre_journal">
						<h1>L'Echo du Couloir</h1>
						Numéro (10<sup>13</sup> + √28 - 5)
					</div>

					<div id="corps_journal">

						<h2>Une saison prometteuse pour le FC Bourrinou</h2>

					    <p>Le club mené par son jeune capitaine Gabriel Harris a terminé à la 7ème place de la Ligue Intersectorielle. Un résultat très honorable au regard de la légère contreperformance de la saison dernière (9ème place). <br>
					    	Son président Diogo Meriati se dit très confiant pour l’avenir du club : « Nos derniers investissements nous ont permis de moderniser nos infrastructures et nous possédons de nouvelles recrues très prometteuses. Je suis très confiant pour les saisons à venir. Le FC Bourrinou a aujourd’hui le potentiel pour monter dans le classement et se placer dans le trio de tête du championnat d’ici 5 à 6 saisons. C’est en tout cas notre objectif. » <br>
					    	Réussira-t-il son paris ? L’avenir nous le dira.</p>

					    <h2>Mon deuxième titre</h2>

					    <p>Non igitur bene. Gloriosa ostentatio in constituendo summo bono. Maximus dolor, inquit, brevis est. Quid nunc honeste dicit? Haec quo modo conveniant, non sane intellego. Haec dicuntur inconstantissime. At enim hic etiam dolore. Nunc haec primum fortasse audientis servire debemus. Nummus in Croesi divitiis obscuratur, pars est tamen divitiarum. Quae iam oratio non a philosopho aliquo, sed a censore opprimenda est. </p>

					    <p>Quae autem natura suae primae institutionis oblita est? Vitiosum est enim in dividendo partem in genere numerare. Quae in controversiam veniunt, de iis, si placet, disseramus. Nobis aliter videtur, recte secusne, postea; Quid, de quo nulla dissensio est? </p>

					</div>
					<?php include('retour_taverne.php'); ?>						
				</div>
			</section>

<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>