<?php include 'header.php'; ?>

	<section id="test" class="machin">
		ici les éléments de la section <br>
		ici les éléments de la section <br>
		ici les éléments de la section <br>
	</section>
	<section id="2" class="truc">
		ici les éléments de la section <br>
		ici les éléments de la section <br>
		ici les éléments de la section <br>
	</section>
	<section id="3" class="bidule">
		ici les éléments de la section <br>
		ici les éléments de la section <br> 
		ici les éléments de la section <br>
	</section>
	<section id="3" class="slider">
		ici les éléments de la section slider<br>
		ici les éléments de la section <br> 
		ici les éléments de la section <br>
	</section>
	<section id="4" class="chose">
		ici les éléments de la section <br>
		ici les éléments de la section <br>
		ici les éléments de la section <br>
	</section>
	<section id="5" class="truc">
		ici les éléments de la section <br>
		ici les éléments de la section <br>
		ici les éléments de la section <br>
	</section>
	<section id="6" class="bidule">
		<p>Voici un exte dans une balise p. Créons des listes. Il en existe des ordonnées et des non ordornées</p>
			<ol>
				<li>les listes ordonnées sont crées avec la balise "ol"</li>
				<li>chaque élément est dans une balise "li"</li>
			</ol>
			<p>Nouvelle liste pas ordonnée</p>
			<ul>
				<li>les listes non ordonnées sont crées avec la balise "ul"</li>
				<li>chaque élément est dans une balise "li"</li>
			</ul>
	</section>
	<section id="7" class="chose">
		<p>Pour insérer une image, je dois entrer l'image dans le dossier dédié dans le serveur, puis l'intégrer au code avec la balise img src</p>
			<img src="images/image1.jpg">
		<p>Par défaut, l'image s'affiche dans sa taille initiale. Pour modifier sa taille, il suffit de préciser la largeur ou la hauteur souhaitée. Si on forçait les deux, ça déformerait l'image. Il vaut mieux éviter les pourcentages : ça prendra en compte les pourcentages de la page et non les pourcentages de l'image source. Du coup, il y a risque de bug selon les navigateurs, la taille du div, etc. Il vaut mieux les optimiser depuis le dbut pour qu'elles fassent toutes 500Ko par exemple, et la taille souhaitée. Il vaut mieux avoir des images en png, sur le web elles ne sont pas déformée et on garde une bonne qualité.<br>
			<img src="images/image1.jpg" width="100px"><br>
		<i class="fa fa-taxi"></i>Nous pouvons intégrer des petites icones. Pour cela, mettre le lien dans le header, et intégrer dans le body le code de l'icone à l'endroit souhaité. Comme ça. </p>
	</section>
	<section id="8" class="slider">
		<div> j'ai surtout travaillé sur le site <a href="http://lamaisondelaboutargue.com/">ICI</a></div>
	</section>
	<section id="9" class="chose">
		<div> Vous tous les conseils en vrac</div>
			<p> Parlons CSS. L'id est unique et la classe ne l'est pas. Trois moyens d'intégrer du CSS dans un site : à l'intéreiru du body, pour chaque texte à styliser (pas bien), en haut de la feuille HTML, dans le header (mouai) et à part, dans une feuille de style séparée.
				<ol>
					<li>Dans le header de la feuille html, on intègre le style </li>
					<li>Ou on a une feuille à part, et on rajoute dans le header de la feuille html la balise suivante : <br> 
						< link rel="stylesheet" href="stylesheets/style.css" type="text/css" ></li>
				</ol>
			</p>
			<p> le selecteur est le "h2" dans l'exemple suivant. Le style qui prévaut est celui atribué à l'id. Il est plus fort que celui de la classe. </p>
			<p> padding c'est l'espace à l'intérieur. Margin c'est l'espace à l'extérieur d'un élément. </p>
			<p> On travaille avec la console, le terminal, sublim text et la page affichée en licale sur internet. Ce n'est qu'à la fin qu'on passe en live dans mozzila. Les styles h&, hé etc sont déjà définis par le navigateur. Si nous ne spécifions rien, c'est le style du navigateur qui va prévaloir. Pour contourner ça, il faut une feuille de reset. Elle sera placée avant notre feuille cSS dans ntore index.html, et le navigateur va la lire avant de lire notre feuille de style css. Prendre la feuille de reset de Céline (la prof). Le dernier élément chargé prévaut sur ceux d'avant. 
				<br>Quand on crée une nouvelle page Sublime Text, ne pas oublier de lui dire le format dans le menu déroulant en haut à droite. Pour qu'un élément descende avec nous quand on scrool, il faut qu'il soit absolu par rapport à l'élément parent. A vérifier j'ai mal écouté.Pour qu'une image reste fixée derrière et qu'on passe sur elle, les balises sont : background: url(../images/nom.png) fixed - à recopier. 
			</p>
			<p> Les margin <br>
				On peut faire margin-top, margin-bottom etc pour tout préciser. On peut faire margin: 5px pour mettre la même margin sur tous les côtés. Ou on peut faire des racourcis. Ex1 : margin: 0 5px : ça donne les px sur les côtés (ici 0) puis les px de haut et bas (ici 5px). Pour les infos raccourcies sur les 4 côtés : margin: 0 5px 0 5px on écrit les chiffres dans le sens des aiguilles d'une montre, avec celui du haut en premier. <br>
				Si on voulaut centrer un élément, au lieu de mettre des chiffres aux margin on pourait faire comme ça: <br>
					img.center { <br>
						display: block; <br>
						margin-left: auto; <br>
						margin-right: auto; <br>
					} 
	</section>

<?php include 'footer.php'; ?>
