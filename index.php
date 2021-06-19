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
	<!--verify pinterest-->
	<meta name="p:domain_verify" content="5fb92dd93bbfd0d8487c85882cb9f3e1"/>
	<title>Portfolio - Jorn Meessen</title>
	<link href="styles/style.css" type="text/css" rel="stylesheet" />
	<link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700&display=swap" rel="stylesheet">
	<link rel="shortcut icon" type="image/x-icon" href="img/favicon.svg">
	<script type="text/javascript" src="js/global.js"></script>
</head>
<body class="home">
	
	<!-- Google Tag Manager (noscript) -->
	<noscript>
		<iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NLXJM2G" height="0" width="0" style="display:none;visibility:hidden"></iframe>
	</noscript>

	<!-- Go to top button -->
	<a id="GoToTop" title="Go to top" data-feather="arrow-up"></a>

	<nav class="flex">
        <a href="#" id="logo">J.</a>
        <span id="toggle"><i data-feather="menu"></i></span>
        <ul id="menu">
			<li><a href="#" class="active-page">Home</a></li>
		    <li><a href="pages/robotica.php">Projecten</a>
		    	<ul class="dropdown">
        			<li><a href="pages/robotica.php">Robotica festival</a></li>
        			<li><a href="pages/minorVID.php">Supermarkt Leo v.d. Drift</a></li>
        			<li><a href="pages/Centre of Expertise.php">Centre of expertise</a></li>
        			<li><a href="pages/breinpraat.php">Breinpraat</a></li>
      			</ul>
    		</li>
		   	<li><a href="pages/Over mij.php">Over mij</a></li>
		    <li><a href="#contact">Contact</a></li>
		</ul>      
    </nav>


	<header class="box">
		<h1>Hallo, ik ben Jorn</h1>
		<h4>Als beginnende interaction en user experience designer maak ik functionele ontwerpen die hopelijk leuk zijn om te gebruiken. Ik zoek naar de mogelijkheden om gebruikers en technologieën met elkaar te verbinden.</h4>
		<a href="#contact" class="button primary-button">Neem contact op</a>
		<a href="#werk" class="button ghost-button">Bekijk mijn werk</a>
	</header>

	<main>
		<section id="werk" class="box">
			<h2>Recente projecten</h2>

	 		<article class="flex">
	 			<div class="column1">
	 				<h3>Robotica festival</h3>
	 				<h5>Robotica is een festival waar nieuwe technologie aan het publiek getoond wordt.</h5>
	 				<h6>User interface</h6><h6>User experience</h6>
	 				<a href="pages/robotica.php" class="button second-button">Bekijk het project</a>
	 			</div>
	 			<div class="column2">
    				<a href="pages/robotica.php"><img src='img/robotica.jpg' alt="Project Robotica"></a>
	 			</div>
			</article>

	 		<article class="flex">
	 			<div class="column1">
	 				<h3>Supermarkt Leo v.d. Drift</h3>
	 				<h5>Een website ontwerpen en coderen voor buurtsuper Leo v.d. Drift.</h5>
	 				<h6>Interaction design</h6><h6>HTML/CSS</h6>
	 				<a href="projecten/supermarkt.php" class="button second-button">Bekijk het project</a>
	 			</div>
	 			<div class="column2">
    				<a href="projecten/supermarkt.php"><img src='img/supermarkt.jpg' alt="Project supermarkt Leo v.d Drift"></a>
	 			</div>
			</article>

	 		<article class="flex">
		  		<div class="column1">
	 				<h3>Centre of expertise</h3>
	 				<h5>Een nieuwe website voor het Centre of Expertise van de Haagse Hogeschool.</h5>
	 				<h6>User research</h6><h6>Interaction design</h6>
	 				<a href="pages/Centre of Expertise.php" class="button second-button">Bekijk het project</a>
	 			</div>
	 			<div class="column2">
    				<a href="pages/Centre of Expertise.php"><img src='img/centre of expertise.jpg' alt="Project Centre Of expertise"></a>
	 			</div>
			</article>

	 		<article class="flex">
	 			<div class="column1">
	 				<h3>Breinpraat</h3>
	 				<h5>De website Breinpraat ontwerpen voor revalidatiecentrum Basalt.</h5>
	 				<h6>User research</h6><h6>User interface</h6>
	 				<a href="pages/breinpraat.php" class="button second-button">Bekijk het project</a>
	 			</div>
	 			<div class="column2">
    				<a href="pages/breinpraat.php"><img src='img/breinpraat.jpg' alt="Project breinpraat"></a>
	 			</div>
			</article>
		</section>
	
		<section class="box" id="overMij">
			<h2>Over mij</h2>
			<p>Ik stel mij even voor. Ik ben Jorn Meessen. Ontwerper van interactieve digitale producten en woon in Den Haag. Ik studeer Communication en Multimedia Design (CMD) aan de Haagse Hogeschool. In mijn werk vind ik het belangrijk om uitdagingen te zoeken waarin ik mijn passie kan delen met anderen. Om samen tot gebruiksvriendelijke oplossingen te komen voor digitale vraagstukken. Als ontwerper vind ik het leuk om betrokken te zijn bij het hele creatieve proces, van gebruikersonderzoek tot en met het ontwerpen van het digitaal product. Mijn doel: Producten maken die mensen graag gebruiken.</p>
			<a href="pages/Over mij.php" class="button ghost-button">Meer over mij</a>
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
		<p>Deze site is met zorg en zelf gecodeerd<br>&copy; Jorn Meessen | <a href="https://jornmeessen.nl">jornmeessen.nl</a> | <a href="pages/cookieverklaring.php">Privacy- en cookieverklaring</a></p>
	</footer>
	<?php $cookie_tool->display(); ?>
</body>
</html>

<script src="https://unpkg.com/feather-icons"></script>
<script>
      //repace iconen
      feather.replace()
</script>