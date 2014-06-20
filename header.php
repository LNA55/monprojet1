<!DOCTYPE html> 
<html>

<!-- 
PARTIE HEAD
	Dans le Head, mettre les ifos sur l'encodage de la page, les balises méta pour le référencement et l'identitié de la page, les liens vers les éléments à implémenter comme Google Analytics, Bootstrap, etc. et enfin les liens pour appeler les feuilles reset puis feuilles de style
-->

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>Balise Title du projet témoin (accent ..?)</title>
	<meta name="description" content="Site temoin de Elena">
	<meta name="keywords" content="conseils en dev de site web"> <!-- les keywords ne sont plus utilisés-->
	<meta name="author" content="Elena Web">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="/css/bootstrap.min.css">
	<link href="http://netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet"> 
	<link href='http://fonts.googleapis.com/css?family=Nunito' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="/uikit.min.css" />
    <script src="jquery.js"></script>
    <script src="uikit.min.js"></script>
    <script type="text/javascript">
	 			var _gaq = _gaq || [];
	  			_gaq.push(['_setAccount', 'UA-32203429-1']);
	  			_gaq.push(['_trackPageview']);
	  			(function() {
	    		var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
				ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
				var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
				})();
	</script>
	<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");
	</script>
	<link rel="stylesheet" href="stylesheets/reset.css" type="text/css"> 
	<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
	<!-- Optional theme -->
		<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">
	<!-- Latest compiled and minified JavaScript -->
		<script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="stylesheets/style.css" type="text/css">
</head>

<!-- 
PARTIE BODY
	On va faire un scroll website, juste pour utiliser toutes les fonctions. Et expliquer comment elles sont utilisées. Donc autant de section que de sujet à traiter. Et dedans des div le detail. 
-->

<body>
	<header>
		<div class="black-mobile">
			<h1>Titre de mon site, balise H1</h1>
			<img src="images/elena.hagege-shoette-portrait.jpg" alt="Elena Hagege">
			<img src="images/elena.hagege-shoette-portrait.jpg" width="200px" class="rond">
			<nav>
				<ul class="main-nav">
					<li><a href="#machin">Section Machin</a></li>
					<li><a href="#bidule">Section bidule</a></li>
					<li><a href="#slider">Section slider</a></li>
					<li><a href="/product.php/">Page product</a>
					<li><a href="/page-text.php/">Page text</a>
				</ul>
			</nav>
		</div>
	</header>
