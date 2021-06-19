<?php
require_once '../cookie_tool/cookie_tool.php';
require_once '../cookie_tool/config.php';
$cookie_tool = new CookieTool($cookie_tool); 
?>

<!doctype html>
<html lang="en">
<head>
	<!-- Google Tag Manager -->
	<script>
		(function(w,d,s,l,i){
			w[l]=w[l]||[];w[l].push({'gtm.start':new Date().getTime(),event:'gtm.js'});
			var f = d.getElementsByTagName(s)[0],j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;
			j.src='https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
		})
		(window,document,'script','dataLayer','GTM-NLXJM2G');
	</script>

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-167544124-1"></script>
	<script>
  		window.dataLayer = window.dataLayer || [];
  		function gtag(){dataLayer.push(arguments);}
  		gtag('js', new Date());
  		gtag('config', 'UA-167544124-2');
  		gtag('set', {'user_id': 'USER_ID'}); // De gebruikers-ID instellen op basis van de ingelogde user_id.
	</script>

	<!--cookies-->
	<link rel="stylesheet" type="text/css" href="../cookie_tool/style.css">
	<script type="text/javascript" src="../cookie_tool/main.js"></script>

	<meta charset="utf-8" />
	<meta name='viewport' content='width=device-width, initial-scale=1'>
	<title>Portfolio - Minor VID Kleur en Grid</title>
	<link href="../styles/style.css" type="text/css" rel="stylesheet" />
	<link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700&display=swap" rel="stylesheet">
	<link rel="shortcut icon" type="image/x-icon" href="../img/favicon.svg">
	<script type="text/javascript" src="../js/global.js"></script>
	<script src="../js/lightbox.js"></script>
</head>
<body class="project" id="project">
	<!-- Google Tag Manager (noscript) -->
	<noscript>
		<iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NLXJM2G" height="0" width="0" style="display:none;visibility:hidden"></iframe>
	</noscript>

	<!-- Go to top button -->
	<a id="GoToTop" title="Go to top" data-feather="arrow-up"></a>
	
	<!-- progress bar -->
	<div class="progress-container">
  		<div class="progress-bar js-progress-bar"></div>
	</div>

	<nav class="flex">
        <a href="../minorVID.php" id="logo">J.</a>
        <span id="toggle"><i data-feather="menu"></i></span>
        <ul id="menu">
		    <li><a class="active-page" href="#">Minor VID</a>
		    	<ul class="dropdown">
        			<li><a class="active-page" href="#">Kleur en Grid</a></li>
        			<li><a href="pages/webtypografie.php">Webtypografie</a></li>
        			<li><a href="pages/beeld.php">Beeld</a></li>
        			<li><a href="pages/typografie.php">Typografie</a></li>
        			<li><a href="pages/ontwerpen_1.php">Ontwerpen 1</a></li>
        			<li><a href="pages/interface&beweging.php">Interface & Beweging</a></li>
        			<li><a href="pages/generative_art.php">Generative Art</a></li>
        			<li><a href="pages/ontwerpen_2.php">Ontwerpen 2</a></li>
      			</ul>
    		</li>
    			<li><a href="../index.php">Portfolio</a></li>
		   	<li><a href="../Over mij.php">Over mij</a></li>
		    	<li><a href="#contact">Contact</a></li>
		</ul>      
    </nav>

	<header class="box">
		<img src='../img/supermarkt.jpg' alt="Project supermarkt Leo v.d Drift">
	</header>

	<main class="js-article">
		<h1>Supermarkt Leo v.d. Drift</h1>

		<section class="box">
	 		<article class="flex omschrijving">
	 			<div class="column1">
	 				<h2>Context opdracht</h2>
	 				<p>Voor dit schoolproject heb ik de opdracht gekregen om een website te ontwerpen en coderen voor een buurtsuper. Aan de opdracht werd de eis gesteld dat de content van de supermarkt voorop moest staan. De content verschilt per device. Tevens moest de website gecodeerd worden met CSS grid en Flexbox.</p>
	 			</div>
	 			<ul class="column2">
	 				<li>
	 					<h2>Activiteit</h2>
	 					<p>Interaction design<br>HTML/CSS</p>
	 				</li>
	 			</ul>
			</article>

	 		<article>
	 			<h3>Content</h3>
	 			<p>Ik ben begonnen met het noteren van alle content die al op de bestaande website van de supermarkt staat. Dit hielp mij om een overzicht te verkrijgen van wat er allemaal op de website kan/moet komen te staan. Deze lijst heb ik aangescherpt met elementen die nog misten of weggelaten konden worden op de website. Vanuit deze lijst ben ik gaan ontwerpen.</p>
			</article>
		</section>

		<section class="backgroundColor">
	 		<article>
	 			<h3>Stijl</h3>
	 			<p>Ik wilde de dat de website modern, trendy en gezond aanvoelde. Daarom heb ik gekozen voor felle kleuren zoals blauw en geel. De sfeerafbeeldingen die ik heb gebruikt zien er smaakvol en gezond uit wat past bij de sfeer die ik wilde neerzetten. Verder wilde ik dat de supermarkt gerechten ging presenteren om mensen te enthousiasmeren voor de producten die verkocht worden in de supermarkt en het maken van heerlijke gerechten met deze producten.</p>
			</article>
		</section>

		<section>
	 		<article>
	 			<h3>Het ontwerp</h3>
	 			<p>Om visueel een beeld te geven van de producten en de sfeer in de winkel is gebruik gemaakt van diverse afbeeldingen. Verder is op de website gebruik gemaakt van strakke lijken en op de achtergrond zijn kleurvlakken geplaatst.</p>
    			<div class="hes-gallery" data-wrap="true" data-img-count="3">
    				<img class="projectImg imgshort" src="../img/supermarkt_ontwerp_desktop.jpg" alt="supermarkt ontwerp desktop" data-subtext=" Ontwerp desktop" data-alt="supermarkt ontwerp desktop">
    				<img class="projectImg imgshort" src="../img/supermarkt_ontwerp_tablet.jpg" alt="supermarkt ontwerp tablet" data-subtext="Ontwerp tablet" data-alt="supermarkt ontwerp tablet">
					<img class="projectImg imgshort" src="../img/supermarkt_ontwerp_mobile.jpg" alt="supermarkt ontwerp mobile" data-subtext=" Deel van het ontwerp voor de mobiel" data-alt="supermarkt ontwerp mobile">
				</div>
			</article>
	
	 		<article>
	 			<h3>Coderen</h3>
	 			<p>Tevens is voor de opdracht de website gecodeerd door gebruik te maken van HTML, CSS en Javascript. Aan de eis van een responsieve website is voldaan door gebruik te maken frameworks zoals CSS grid en Flexbox. Op de mobiele versie zijn de volgorde van de content blokken veranderd, omdat de gebruiker via de mobiele telefoon sneller andere informatie wil vinden dan op de desktop. Zoals bijvoorbeeld de route van het zoeken of het bestellen van producten.</p>
			</article>
		</section>

		<section class="backgroundColor">
			<article>
				<h3>Reflectie</h3>
				<p>Tijdens dit project heb ik geleerd om de responsive ontwerpen te maken om deze vervolgens te gaan coderen. Dit betekent dat ik door dit leerproces van coderen met behulp van HTML, CSS en Javascript niet beperkt word in het ontwerpen van digitale producten.</p>
			</article>
		</section>

		<section class="box other-projects">
			<h2>Andere projecten van de minor</h2>
			<div class="flex" id="projects">
				<article class="hover" onclick="location.href='robotica.php';" >
						<img src='../img/robotica.jpg' alt="Project robotica">
						<div>
							<h5>Robotica festival</h5>
							<h6>User interface</h6><h6>User experience</h6>
						</div>
				</article>
				<article class="hover" onclick="location.href='Centre of Expertise.php';">
						<img src='../img/centre of expertise.jpg' alt="Project Centre of expertise">
						<div>
							<h5>Centre of expertise</h5>
							<h6>User research</h6><h6>Interaction design</h6>
						</div>
				</article>
			</div>
		</section>
	</main>

	<footer class="box" id="contact">
		<h2 id="contactTitel">Contact</h2>
		<h3><a class="mail" href="mailto:info@jornmeessen.nl">info@jornmeessen.nl</a></h3>
		<h5>Wilt u een project starten of heeft u een vraag?<br> Neem dan gerust contact met mij op. </h5>
		<ul id="socials">
			<li><a href="mailto:info@jornmeessen.nl"><i data-feather="mail"></i></a></li>
			<li><a href="https://www.linkedin.com/in/jornmeessen/" target="_blank"><i data-feather="linkedin"></i></a></li>
			<li><a href="https://www.instagram.com/jornmeessen/" target="_blank"><i data-feather="instagram"></i></a></li>
		</ul>
		<p>Deze site is met zorg en zelf gecodeerd<br>&copy; Jorn Meessen | <a href="https://jornmeessen.nl">jornmeessen.nl</a> | <a href="cookieverklaring.php">Privacy- en cookieverklaring</a></p>
	</footer>
</body>
</html>

<script src="https://unpkg.com/feather-icons"></script>
<script>
      //repace iconen
      feather.replace()
</script>