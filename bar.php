<?php $title = 'Bar'; ?>

<?php ob_start(); ?>

			<section class="row">

				<div class="taverne">
					<div>
						<p>Après avoir triomphé tout à la fois de l’obscurité, de la nausée et de cette foutue porte, vous pouvez enfin vous diriger d’un pas fier et vaillant vers le bar de l’établissement où vous attend votre Graal, à savoir une bonne grosse chope de bière.</br>
						Le tavernier ignore superbement votre entrée théâtrale, trop absorbé par la partie de cartes qui se déroule à la table la plus proche du comptoir. Il faut dire que la partie semble animée et les quatre fantasques joueurs particulièrement bruyants.</br>
						L’un d’eux, au physique imposant et à la voix rauque, braille si fort que tous les regards se tournent vers lui dans la taverne. Dire qu’il est en colère serait comme de dire que le fait de se retrouver seul en forêt face à une meute de loups enragés est une situation légèrement  périlleuse. </p>

						<ul>
							<li>‘tain, j’en ai marre ! s’exclame-t-il en jetant violemment ses cartes sur la table. Franchement Gareth tu devrais passer un peu plus de temps chez toi, parce que là t’as vraiment une chance de cocu ! </li>
							<li>Eh oh, surveille un peu ton langage Will !</li>
							<li>Et toi surveille plutôt ta femme ! </li>
						</ul>

						<p>Cette dernière répartie déclenche un énorme éclat de rire des deux autres joueurs, autant à cause de la phrase en elle-même que de la mine déconfite de Gareth. Pour votre part, vous vous contentez d’un petit gloussement. Ce qui semble sortir le tenancier de sa torpeur tout en l’informant de votre présence juste en face de lui.</p>

						<ul>
							<li>Bonjour étranger. Qu’est-ce que je vous sers ? </li>
						</ul>

						<p>Vous commandez une chope qui s’avère d’une qualité médiocre, vous coûtant la bagatelle de 3 Kaors et vous laissant un goût amer dans la bouche. Bah, quand on a soif…</p>

						<div class="nav">
							<p><a href="taverne.php">Retour à la taverne</a></p>
						</div>
					</div>
				</div>
			</section>

<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>