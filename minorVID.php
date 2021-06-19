<?php
require_once 'cookie_tool/cookie_tool.php';
require_once 'cookie_tool/config.php';
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
	<link rel="stylesheet" type="text/css" href="cookie_tool/style.css">
	<script type="text/javascript" src="cookie_tool/main.js"></script>

	<meta charset="utf-8" />
	<meta name='viewport' content='width=device-width, initial-scale=1'>
	<title>Portfolio - Minor Visual Interface Design</title>
	<link href="styles/style.css" type="text/css" rel="stylesheet" />
	<link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700&display=swap" rel="stylesheet">
	<link rel="shortcut icon" type="image/x-icon" href="img/favicon.svg">
	<script type="text/javascript" src="js/global.js"></script>
	<!-- <script src="../js/lightbox.js"></script> -->
</head>
<body class="home minor">
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
        <a href="#" id="logo">J.</a>
        <span id="toggle"><i data-feather="menu"></i></span>
        <ul id="menu">
		    <li><a class="active-page" href="#">Minor VID</a>
		    	<ul class="dropdown">
        			<li><a href="pages/kleur&grid.php">Kleur en Grid</a></li>
        			<li><a href="pages/webtypografie.php">Webtypografie</a></li>
        			<li><a href="pages/beeld.php">Beeld</a></li>
        			<li><a href="pages/typografie.php">Typografie</a></li>
        			<li><a href="pages/ontwerpen_1.php">Ontwerpen 1</a></li>
        			<li><a href="pages/interface&beweging.php">Interface & Beweging</a></li>
        			<li><a href="pages/generative_art.php">Vorm & Detail</a></li>
        			<li><a href="pages/ontwerpen_2.php">Ontwerpen 2</a></li>
      			</ul>
    		</li>
    			<li><a href="index.php">Portfolio</a></li>
		   	<li><a href="pages/Over mij.php">Over mij</a></li>
		    	<li><a href="#contact">Contact</a></li>
		</ul>      
    	</nav>

	<header class="box">
		<h1>Minor Visual Interface Design</h1>
		<h4>Als beginnende interaction en user experience designer maak ik functionele ontwerpen die hopelijk leuk zijn om te gebruiken. Ik zoek naar de mogelijkheden om gebruikers en technologieën met elkaar te verbinden.</h4>
		<a href="#contact" class="button primary-button">Neem contact op</a>
		<a href="#werk" class="button ghost-button">Bekijk mijn werk</a>
	</header>

	<main>
		<section id="werk" class="box">
			<h2>Projecten tijdens de minor</h2>

	 		<article class="flex">
	 			<div class="column1">
	 				<h3>Kleur en Grid</h3>
	 				<h5>Robotica is een festival waar nieuwe technologie aan het publiek getoond wordt.</h5>
	 				<h6>User interface</h6><h6>User experience</h6>
	 				<a href="pages/kleur&grid.php" class="button second-button">Bekijk het project</a>
	 			</div>
	 			<div class="column2">
    				<a href="pages/kleur&grid.php"><img src='../img/postcard_grid&kleur.jpg' alt="Project Kleur en Grid"></a>
	 			</div>
			</article>

	 		<article class="flex">
	 			<div class="column1">
	 				<h3>Webtypografie</h3>
	 				<h5>Een persoonlijke en authentieke ontwerpshouding ontwikkeld en visuele vaardigheden aangeleerd.</h5>
	 				<h6>Visual design</h6><h6>Concepting</h6>
	 				<a href="pages/webtypografie.php" class="button second-button">Bekijk het project</a>
	 			</div>
	 			<div class="column2">
    				<a href="pages/webtypografie.php"><img src='../img/postcard_webtypografie.jpg' alt="Project Webtypografie"></a>
	 			</div>
			</article>

	 		<article class="flex">
		  		<div class="column1">
	 				<h3>Beeld</h3>
	 				<h5>Een nieuwe website voor het Centre of Expertise van de Haagse Hogeschool.</h5>
	 				<h6>User research</h6><h6>Interaction design</h6>
	 				<a href="pages/beeld.php" class="button second-button">Bekijk het project</a>
	 			</div>
	 			<div class="column2">
    				<a href="pages/beeld.php"><img src='../img/postcard_beeld.jpg' alt="Project Beeld"></a>
	 			</div>
			</article>

	 		<article class="flex">
	 			<div class="column1">
	 				<h3>Typografie</h3>
	 				<h5>De website Breinpraat ontwerpen voor revalidatiecentrum Basalt.</h5>
	 				<h6>User research</h6><h6>User interface</h6>
	 				<a href="pages/typografie.php" class="button second-button">Bekijk het project</a>
	 			</div>
	 			<div class="column2">
    				<a href="pages/typografie.php"><img src='../img/postcard_typografie.jpg' alt="Project Typografie"></a>
	 			</div>
			</article>

			<article class="flex">
	 			<div class="column1">
	 				<h3>Ontwerpen 1</h3>
	 				<h5>De website Breinpraat ontwerpen voor revalidatiecentrum Basalt.</h5>
	 				<h6>User research</h6><h6>User interface</h6>
	 				<a href="pages/ontwerpen_1.php" class="button second-button">Bekijk het project</a>
	 			</div>
	 			<div class="column2">
    				<a href="pages/ontwerpen_1.php"><img src='../img/postcard_ontwerpen1.jpg' alt="Project Ontwerpen 1"></a>
	 			</div>
			</article>

			<article class="flex">
	 			<div class="column1">
	 				<h3>Interface & Beweging</h3>
	 				<h5>De website Breinpraat ontwerpen voor revalidatiecentrum Basalt.</h5>
	 				<h6>User research</h6><h6>User interface</h6>
	 				<a href="pages/interface&beweging.php" class="button second-button">Bekijk het project</a>
	 			</div>
	 			<div class="column2">
    				<a href="pages/interface&beweging.php"><img src='../img/postcard_interface&beweging.jpg' alt="Project Interface & Beweging"></a>
	 			</div>
			</article>

			<article class="flex">
	 			<div class="column1">
	 				<h3>Vorm & Detail</h3>
	 				<h5>De website Breinpraat ontwerpen voor revalidatiecentrum Basalt.</h5>
	 				<h6>User research</h6><h6>User interface</h6>
	 				<a href="pages/generative_art.php" class="button second-button">Bekijk het project</a>
	 			</div>
	 			<div class="column2">
    				<a href="pages/generative_art.php"><img src='../img/postcard_vorm&detail.jpg' alt="Project Generative Art"></a>
	 			</div>
			</article>

			<article class="flex">
	 			<div class="column1">
	 				<h3>Meesterproef</h3>
	 				<h5>De website Breinpraat ontwerpen voor revalidatiecentrum Basalt.</h5>
	 				<h6>User research</h6><h6>User interface</h6>
	 				<a href="pages/ontwerpen_2.php" class="button second-button">Bekijk het project</a>
	 			</div>
	 			<div class="column2">
    				<a href="pages/ontwerpen_2.php"><img src='../img/postcard_meesterproef.jpg' alt="Project Ontwerpen 2"></a>
	 			</div>
			</article>

			<article class="flex">
	 			<div class="column1">
	 				<h3>Meesterproef</h3>
	 				<h5>De website Breinpraat ontwerpen voor revalidatiecentrum Basalt.</h5>
	 				<h6>User research</h6><h6>User interface</h6>
	 				<a href="pages/ontwerpen_2.php" class="button second-button">Bekijk het project</a>
	 			</div>
	 			<div class="column2">
    				<a href="pages/ontwerpen_2.php"><img src='../img/postcard_meesterproef.jpg' alt="Project Ontwerpen 2"></a>
	 			</div>
			</article>
		</section>

		<div class="project">
			<section class="box other-projects">
				<div class="flex" id="projects">
					<article class="hover" onclick="location.href='img/pecha_kucha_presentatie.pdf';" >
						<img src='../img/postcard_pecha_kucha.jpg' alt="Project postcard Pecha Kucha">
						<div>
							<h5>Persoonliijke ontwikkeling</h5>
							<h6>Pecha Kucha</h6><h6>Presentatie</h6>
						</div>
					</article>
				</div>
			</section>
		</div>
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