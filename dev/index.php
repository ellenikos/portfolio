<?php
	header("Content-Type: text/html; charset=utf-8");
	$result = '';
	if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['message'])) {
		$myEmail = 'jonathan.levaillant@outlook.com';
		$name = $_POST['name'];
		$email = $_POST['email'];
		$message = $_POST['message'];
		if(empty($name) || empty($email) || empty($message)) {
			$result = "<p class='alert alert--warning' role='alert'>Vous n'avez pas rempli tous les champs</p>";
		}
		elseif (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
			$result = "<p class='alert alert--warning' role='alert'>Votre email n'est pas valide</p>";
		}
		else {
			$to = $myEmail;
			$subject = 'Portfolio : Nouveau message';
			$message = "Bonjour Jonathan, vous venez de recevoir un email de $name\n\n".
			"Email: $email\n\n Message:\n $message";
			$headers  = 'MIME-Version: 1.0' . "\r\n";
			$headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
			$headers .= 'From: contact@jonathanlevaillant.fr' . "\r\n";
			mail($to,$subject,$message,$headers);
			$result = "<p class='alert alert--success' role='status'>Votre message a bien été envoyé</p>";
			unset($_POST);
		}
	}
?>
<!doctype html>
<html lang="fr">
	<head>
		<meta charset="UTF-8" />
		<title>Jonathan Levaillant - Web Designer Intégrateur à Paris</title>
		<meta name="description" content="Portfolio One-Page de Jonathan Levaillant, Web Designer Intégrateur, geek assumé, passionné de graphisme, d'HTML5 et de CSS. Bonne visite !" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="canonical" href="http://jonathanlevaillant.fr" />
		<link rel="apple-touch-icon" sizes="57x57" href="/apple-touch-icon-57x57.png" />
		<link rel="apple-touch-icon" sizes="60x60" href="/apple-touch-icon-60x60.png" />
		<link rel="apple-touch-icon" sizes="72x72" href="/apple-touch-icon-72x72.png" />
		<link rel="apple-touch-icon" sizes="76x76" href="/apple-touch-icon-76x76.png" />
		<link rel="apple-touch-icon" sizes="114x114" href="/apple-touch-icon-114x114.png" />
		<link rel="apple-touch-icon" sizes="120x120" href="/apple-touch-icon-120x120.png" />
		<link rel="apple-touch-icon" sizes="144x144" href="/apple-touch-icon-144x144.png" />
		<link rel="apple-touch-icon" sizes="152x152" href="/apple-touch-icon-152x152.png" />
		<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon-180x180.png" />
		<link rel="icon" type="image/png" href="/favicon-32x32.png" sizes="32x32" />
		<link rel="icon" type="image/png" href="/favicon-194x194.png" sizes="194x194" />
		<link rel="icon" type="image/png" href="/favicon-96x96.png" sizes="96x96" />
		<link rel="icon" type="image/png" href="/android-chrome-192x192.png" sizes="192x192" />
		<link rel="icon" type="image/png" href="/favicon-16x16.png" sizes="16x16" />
		<link rel="manifest" href="/manifest.json" />
		<meta name="msapplication-TileColor" content="#ffcc00" />
		<meta name="msapplication-TileImage" content="/mstile-144x144.png" />
		<meta name="theme-color" content="#ffcc00" />
		<link rel="author" href="//plus.google.com/118128876926116272035" />
		<meta property="og:locale" content="fr_FR" />
		<meta property="og:type" content="website" />
		<meta property="og:title" content="Jonathan Levaillant - Web Designer Intégrateur à Paris" />
		<meta property="og:description" content="Portfolio One-Page de Jonathan Levaillant, Web Designer Intégrateur, geek assumé, passionné de graphisme, d'HTML5 et de CSS. Bonne visite !" />
		<meta property="og:url" content="http://jonathanlevaillant.fr" />
		<meta property="og:site_name" content="Jonathan Levaillant" />
		<meta property="og:image" content="http://jonathanlevaillant.fr/img/logo-social.png" />
		<meta name="twitter:card" content="summary" />
		<meta name="twitter:title" content="Jonathan Levaillant - Web Designer Intégrateur à Paris" />
		<meta name="twitter:description" content="Portfolio One-Page de Jonathan Levaillant, Web Designer Intégrateur, geek assumé, passionné de graphisme, d'HTML5 et de CSS. Bonne visite !" />
		<meta name="twitter:site" content="@jlwebart" />
		<meta name="twitter:image" content="http://jonathanlevaillant.fr/img/logo-social.png" />
		<link rel="stylesheet" href="css/main.css" media="all" />
		<script>(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)})(window,document,'script','//www.google-analytics.com/analytics.js','ga');ga('create','UA-69129251-1','auto');ga('send','pageview');</script>
	</head>
	<body id="top" class="page">
		<header>
			<nav class="nav">
				<input type="checkbox" id="toggle" class="nav__toggle" hidden />
				<label class="burger nav__burger" for="toggle" onclick hidden><span class="burger__icon nav__burger-icon"><span class="burger__label nav__burger-label">menu</span></span></label>
				<div class="wrapper"><a href="#top" class="logo nav__logo"><abbr title="Jonathan Levaillant" class="logo__title">JL</abbr></a></div>
				<ul class="nav__list wrapper">
					<li class="nav__item"><a href="#top" class="nav__link">Hello !</a></li>
					<li class="nav__item"><a href="#profil" class="nav__link">Mon profil</a></li>
					<li class="nav__item"><a href="#realisations" class="nav__link">Mes réalisations web</a></li>
					<li class="nav__item"><a href="#contact" class="nav__link">Contact</a></li>
				</ul>
			</nav>
			<article class="box box--primary">
				<div class="wrapper">
					<div class="grid grid--2-3">
						<div class="grid__item" itemscope itemtype="http://schema.org/Person">
							<h1 class="box__title">
								<span class="h3 box__subtitle" itemprop="name">
									<span itemprop="givenName">Jonathan</span>
									<span itemprop="familyName">Levaillant</span>
								</span>
								<strong itemprop="jobtitle">Web Designer & Intégrateur</strong>
							</h1>
							<div class="p" itemprop="description">
								<p>Bienvenue sur mon portfolio.<br />Je me présente, Jonathan Levaillant, Web Designer & Intégrateur basé à Paris.</p>
								<p>À travers ce site, je vous présenterai mes compétences, mon parcours ainsi que mes principales créations graphiques et intégrations.</p>
								<p>Ce portfolio a été réalisé en <abbr title="HyperText Markup Language 5">HTML5</abbr>, <abbr title="Cascading Style Sheets">CSS</abbr> orienté objet (<abbr title="Object-Oriented CSS">OOCSS</abbr>) sans <abbr title="Content Management System">CMS</abbr>.<br />Bonne visite !</p>
							</div>
							<meta itemprop="gender" content="male" />
							<meta itemprop="nationality" content="french" />
							<link itemprop="url" href="http://jonathanlevaillant.fr" />
							<ul class="social">
								<li class="social__item"><a href="//fr.linkedin.com/in/jonathanlevaillant" class="social__link icon icon--linkedin" title="LinkedIn"><span class="visually-hidden">LinkedIn</span></a></li>
								<li class="social__item"><a href="//codepen.io/jlwebart" class="social__link icon icon--codepen" title="CodePen"><span class="visually-hidden">CodePen</span></a></li>
								<li class="social__item"><a href="//twitter.com/jlwebart" class="social__link icon icon--twitter" title="Twitter"><span class="visually-hidden">Twitter</span></a></li>
								<li class="social__item"><a href="//plus.google.com/118128876926116272035/about" class="social__link icon icon--google" title="Google+"><span class="visually-hidden">Google+</span></a></li>
							</ul>
						</div>
						<div class="grid__item">
							<p class="avatar box__avatar right">
								<q class="tshirt avatar__tshirt">
									<span class="tshirt__txt tshirt__txt--big">I</span><span class="heart tshirt__heart"><span class="visually-hidden">love</span></span>
									<abbr title="Cascading Style Sheets" class="tshirt__txt tshirt__txt--medium">CSS</abbr>
									<span class="tshirt__txt tshirt__txt--regular"><abbr title="Block, Element, Modifier" class="tshirt__txt">BEM</abbr>, <abbr title="Object-Oriented CSS" class="tshirt__txt">OOCSS</abbr></span>
									<span class="tshirt__txt tshirt__txt--small">Vertical Rythm</span>
									<span class="tshirt__txt tshirt__txt--tiny">Flex, CSS3 Selectors</span>
								</q>
							</p>
						</div>
					</div>
				</div>
			</article>
		</header>
		<main id="profil" class="anchor">
			<article class="box box--secondary box--media box--potion">
				<div class="wrapper">
					<div class="grid grid--2 grid--gl">
						<div class="grid__item">
							<h2 class="box__title">Mes formations</h2>
							<p>Aujourd'hui spécialiste dans le domaine du Web Design et du développement Front-End, j'ai débuté en tant que développeur Back-End avec un <abbr title="Diplôme Universitaire de Technologie">DUT</abbr> "Informatique Répartie et Réseaux" puis une licence "Intégrateur Réseaux locaux et Services".</p>
							<p>Après ma licence, j'ai suivi une formation de graphiste, intégrateur à <a href="//ecole-multimedia.com">l'Ecole Multimédia</a> ce qui m'a permis d'améliorer et de mettre en application mes compétences dans le domaine du web (<abbr title="Hyper Text Markup Language">HTML</abbr>, <abbr title="Cascading Style Sheets">CSS</abbr>, JavaScript, Web Design).</p>
						</div>
						<div class="grid__item">
							<h2 class="box__title">Mes compétences</h2>
							<p>Au quotidien j'utilise les nouvelles méthodologies d'intégration (design atomique, intégration modulaire <abbr title="Object-Oriented CSS">OOCSS</abbr>, méthodologie <abbr title="Block, Element, Modifier">BEM</abbr>, design fluide en "em") ainsi que les dernières recommandations en matière de Web Design (grilles, rythme vertical, mobile first).</p>
							<p>J'ai également un intérêt marqué pour le futur du <abbr title="Cascading Style Sheets">CSS</abbr> en matière de 3D, de nouveaux modèles de grilles (flexbox) et de <abbr title="Cascading Style Sheets 4">CSS4</abbr> (sélecteurs parents, fonctions element() et filter(), variables).</p>
						</div>
					</div>
					<span class="potion potion--invert box__media box__media--potion"><span class="potion__bubbles"></span></span>
				</div>
			</article>
			<article id="realisations" class="article anchor">
				<header class="article__header wrapper">
					<h2 class="h1 article__title"><span class="article__title-skin">Mes</span> réalisations web</h2>
					<div class="big"><em>Les projets les plus récents ont été réalisés au sein du <a href="//groupe-pratique.com">Groupe Pratique</a> (spécialiste de la vie pratique sur Internet qui comptabilise 8 millions de visiteurs chaque mois). Il s'agit de refontes "from scratch" (étude marketing, Web Design, intégration <abbr title="HyperText Markup Language">HTML</abbr> / <abbr title="Cascading Style Sheets">CSS</abbr>, responsive et optimisation <abbr title="Search Engine Optimization">SEO</abbr>). Ces projets durent entre 6 mois et 8 mois, de l'étude marketing à la mise en production.</em></div>
				</header>
				<section class="box box--spacer" itemscope itemtype="http://schema.org/CreativeWork">
					<div class="wrapper">
						<header class="grid grid--3-4 grid--hr small-txt-center">
							<div class="grid__item"><h3 class="box__title" itemprop="name">id2sorties.com</h3></div>
							<div class="grid__item"><strong class="tag tag--id2" itemprop="keywords">Web</strong></div>
						</header>
						<div class="grid grid--1-4 p">
							<div class="grid__item small-hidden"><time datetime="2015-03" itemprop="datePublished">Mars 2015</time></div>
							<div class="grid__item" itemprop="text">
								<p>Site concurrent de TimeOut proposant des idées de sorties géolocalisées en France.</p>
								<p>En collaboration avec l'équipe marketing, j'ai réalisé le design et l'intégration des principales pages et modules en prenant compte de fortes contraintes <abbr title="Search Engine Optimization">SEO</abbr> et commerciales, notamment pour la gestion des emplacements publicitaires.</p>
								<p>L'intégration a été réalisée sans <abbr title="Content Management System">CMS</abbr>, en <abbr title="Cascading Style Sheets">CSS</abbr> orienté objet (<abbr title="Object-Oriented CSS">OOCSS</abbr>) / <abbr title="Block, Element, Modifier">BEM</abbr>.</p>
								<p>Chaque module ou objet est conçu indépendamment des autres, ce qui présente trois avantages majeurs :</p>
								<ul>
									<li>Le code est plus facilement maintenable: le fait de modifier un module n'a aucune répercussion sur le reste de la page.</li>
									<li>Le comportement responsive peut être géré pour chaque module.</li>
									<li>Le code est plus léger.</li>
								</ul>
							</div>
						</div>
						<figure class="screenshots">
							<div class="device device--id2">
								<a href="img/id2sorties-desktop-full.jpg" class="rollover icon icon--zoom">
									<picture>
										<source media="(min-width: 40.0625em)" srcset="img/id2sorties-desktop-preview.jpg" />
										<img src="img/id2sorties-desktop-preview-small.jpg" width="944" height="512" alt="Page d'accueil des idées de sorties" itemprop="image" />
									</picture>
								</a>
							</div>
							<div class="device device--smartphone device--id2 screenshots__smartphone">
								<a href="img/id2sorties-mobile-full.jpg" class="rollover icon icon--zoom">
									<picture>
										<source media="(min-width: 64.0625em)" srcset="img/id2sorties-mobile-preview.jpg" />
										<img src="img/id2sorties-mobile-preview-small.jpg" width="240" height="352" alt="Version mobile des idées de sorties" itemprop="image" />
									</picture>
								</a>
							</div>
						</figure>
					</div>
				</section>
				<section class="box box--spacer" itemscope itemtype="http://schema.org/CreativeWork">
					<div class="wrapper">
						<header class="grid grid--3-4 grid--hr small-txt-center">
							<div class="grid__item"><h3 itemprop="name"><a href="//pratique.fr" class="box__title box__title--icon icon icon-after icon--link" itemprop="url">pratique.fr</a></h3></div>
							<div class="grid__item"><strong class="tag tag--prat" itemprop="keywords">Web</strong></div>
						</header>
						<div class="grid grid--1-4 p">
							<div class="grid__item small-hidden"><time datetime="2014-09" itemprop="datePublished">Septembre 2014</time></div>
							<div class="grid__item" itemprop="text">
								<p>Site proposant des guides et des actualités journalières.</p>
								<p>L'équipe de développement et moi même avons été confronté à différentes problématiques sur ce projet, notamment pour la gestion de l'affichage des milliers d'images existantes. L'utilisation de l'attribut "srcset" nous aura été d'une grande aide pour pallier à cette difficulté.</p>
								<p>De plus, les articles ayant des formats très différents les uns des autres (recettes de cuisine, actualités, guides, modèles de lettres, etc.), le <abbr title="Cascading Style Sheets">CSS</abbr> devait être extrêmement modulable.</p>
							</div>
						</div>
						<figure class="screenshots">
							<div class="device device--prat">
								<a href="img/pratique-desktop-full.jpg" class="rollover icon icon--zoom">
									<picture>
										<source media="(min-width: 40.0625em)" srcset="img/pratique-desktop-preview.jpg" />
										<img src="img/pratique-desktop-preview-small.jpg" width="944" height="512" alt="Page d'accueil des guides pratiques" itemprop="image" />
									</picture>
								</a>
							</div>
							<div class="device device--smartphone device--prat screenshots__smartphone">
								<a href="img/pratique-mobile-full.jpg" class="rollover icon icon--zoom">
									<picture>
										<source media="(min-width: 64.0625em)" srcset="img/pratique-mobile-preview.jpg" />
										<img src="img/pratique-mobile-preview-small.jpg" width="240" height="352" alt="Version mobile des guides pratiques" itemprop="image" />
									</picture>
								</a>
							</div>
						</figure>
					</div>
				</section>
				<section class="box box--spacer" itemscope itemtype="http://schema.org/CreativeWork">
					<div class="wrapper">
						<header class="grid grid--3-4 grid--hr small-txt-center">
							<div class="grid__item"><h3 itemprop="name"><a href="//118000.fr" class="box__title box__title--icon icon icon-after icon--link" itemprop="url">118000.fr</a></h3></div>
							<div class="grid__item"><strong class="tag tag--118" itemprop="keywords">Web</strong></div>
						</header>
						<div class="grid grid--1-4 p">
							<div class="grid__item small-hidden"><time datetime="2014-02" itemprop="datePublished">Février 2014</time></div>
							<div class="grid__item" itemprop="text">
								<p>Le 118000 est un annuaire en ligne, le principal concurrent des Pages Jaunes.</p>
								<p>Ce fut mon premier projet au sein du Groupe Pratique. Avec l'équipe de développement, nous avons procédé à la mise à niveau du site aussi bien graphiquement qu'en terme de référencement <abbr title="Search Engine Optimization">SEO</abbr>.</p>
								<p>L'optimisation <abbr title="Search Engine Optimization">SEO</abbr> est la problématique la plus importante pour un annuaire. De ce fait, j'ai pu parfaire mes connaissances dans ce domaine grâce à la relecture de mon code par un expert en Web Marketing.</p>
							</div>
						</div>
						<figure class="screenshots">
							<div class="device device--118">
								<a href="img/118000-desktop-full.jpg" class="rollover icon icon--zoom">
									<picture>
										<source media="(min-width: 40.0625em)" srcset="img/118000-desktop-preview.jpg" />
										<img src="img/118000-desktop-preview-small.jpg" width="944" height="512" alt="Page d'accueil de l'annuaire 118000" itemprop="image" />
									</picture>
								</a>
							</div>
							<div class="device device--smartphone device--118 screenshots__smartphone">
								<a href="img/118000-mobile-full.jpg" class="rollover icon icon--zoom">
									<picture>
										<source media="(min-width: 64.0625em)" srcset="img/118000-mobile-preview.jpg" />
										<img src="img/118000-mobile-preview-small.jpg" width="240" height="352" alt="Version mobile de l'annuaire 118000" itemprop="image" />
									</picture>
								</a>
							</div>
						</figure>
					</div>
				</section>
				<section class="box box--spacer" itemscope itemtype="http://schema.org/CreativeWork">
					<div class="wrapper">
						<header class="grid grid--3-4 grid--hr small-txt-center">
							<div class="grid__item"><h3 itemprop="name"><a href="//codepen.io/jlwebart/pen/mqplu" class="box__title box__title--icon icon icon-after icon--link" itemprop="url">iPhone 5</a></h3></div>
							<div class="grid__item"><strong class="tag" itemprop="keywords">Code</strong></div>
						</header>
						<div class="grid grid--1-4 p">
							<div class="grid__item small-hidden"><time datetime="2013-08" itemprop="datePublished">Août 2013</time></div>
							<div class="grid__item" itemprop="text">
								<p>Ce projet personnel est l'une de mes démos techniques publiées sur <a href="//codepen.io/jlwebart">Codepen</a>.<br />
								Je me suis lancé le défi de reproduire et d'animer un iPhone 5 en <abbr title="Cascading Style Sheets">CSS</abbr> 3D sans utiliser d'images ou de JavaScript.</p>
							</div>
						</div>
						<figure class="device device--full">
							<picture>
								<source media="(min-width: 40.0625em)" srcset="img/iphone5.jpg" />
								<img src="img/iphone5-small.jpg" width="1136" height="608" alt="Démo technique d'un iPhone 5 en CSS 3D" itemprop="image" />
							</picture>
						</figure>
					</div>
				</section>
				<section class="box box--spacer" itemscope itemtype="http://schema.org/CreativeWork">
					<div class="wrapper">
						<header class="grid grid--3-4 grid--hr small-txt-center">
							<div class="grid__item"><h3 class="box__title" itemprop="name">Finger on the Pulse</h3></div>
							<div class="grid__item"><strong class="tag tag--finger" itemprop="keywords">Web</strong></div>
						</header>
						<div class="grid grid--1-4 p">
							<div class="grid__item small-hidden"><time datetime="2012-07" itemprop="datePublished">Juillet 2012</time></div>
							<div class="grid__item" itemprop="text">
								<p>Portail communautaire américain de sondages en ligne.<br />
								Web Design et intégration <abbr title="Hyper Text Markup Language">HTML</abbr> / <abbr title="Cascading Style Sheets">CSS</abbr> via un <abbr title="Content Management System">CMS</abbr> Java Liferay.</p>
							</div>
						</div>
						<figure class="device device--full device--finger">
							<a href="img/finger-on-the-pulse-desktop-full.jpg" class="rollover icon icon--zoom">
								<picture>
									<source media="(min-width: 40.0625em)" srcset="img/finger-on-the-pulse-desktop-preview.jpg" />
									<img src="img/finger-on-the-pulse-desktop-preview-small.jpg" width="1136" height="608" alt="Page d'accueil du portail Finger on the Pulse" itemprop="image" />
								</picture>
							</a>
						</figure>
					</div>
				</section>
				<section class="article">
					<header class="article__header wrapper">
						<h3 class="h1 article__title"><span class="article__title-skin">... Et</span> bien d’autres</h3>
						<div class="big"><em>Dans mon ancienne société <a href="//fr.toluna.com">Toluna</a> (fournisseur de solutions d'enquêtes en ligne pour des instituts de sondages), j'ai pu réaliser de nombreux portails via un <abbr title="Content Management System">CMS</abbr> Java Liferay.
						J'étais en charge du Web Design et de l'intégration <abbr title="Hyper Text Markup Language">HTML</abbr> / <abbr title="Cascading Style Sheets">CSS</abbr>. Vous pourrez trouver quelques-uns de mes travaux dans le slider responsive ci-dessous, réalisé en full <abbr title="Cascading Style Sheets">CSS</abbr> !</em></div>
					</header>
					<div class="box box--light">
						<div class="slider wrapper">
							<input type="radio" id="slider__btn-1" class="slider__btn" name="slider__btn" checked hidden />
							<input type="radio" id="slider__btn-2" class="slider__btn" name="slider__btn" hidden />
							<input type="radio" id="slider__btn-3" class="slider__btn" name="slider__btn" hidden />
							<input type="radio" id="slider__btn-4" class="slider__btn" name="slider__btn" hidden />
							<input type="radio" id="slider__btn-5" class="slider__btn" name="slider__btn" hidden />
							<input type="radio" id="slider__btn-6" class="slider__btn" name="slider__btn" hidden />
							<input type="radio" id="slider__btn-7" class="slider__btn" name="slider__btn" hidden />
							<input type="radio" id="slider__btn-8" class="slider__btn" name="slider__btn" hidden />
							<input type="radio" id="slider__btn-9" class="slider__btn" name="slider__btn" hidden />
							<label for="slider__btn-1" class="slider__btn-nav" hidden><span class="visually-hidden">1</span></label>
							<label for="slider__btn-2" class="slider__btn-nav" hidden><span class="visually-hidden">2</span></label>
							<label for="slider__btn-3" class="slider__btn-nav" hidden><span class="visually-hidden">3</span></label>
							<label for="slider__btn-4" class="slider__btn-nav" hidden><span class="visually-hidden">4</span></label>
							<label for="slider__btn-5" class="slider__btn-nav" hidden><span class="visually-hidden">5</span></label>
							<label for="slider__btn-6" class="slider__btn-nav" hidden><span class="visually-hidden">6</span></label>
							<label for="slider__btn-7" class="slider__btn-nav" hidden><span class="visually-hidden">7</span></label>
							<label for="slider__btn-8" class="slider__btn-nav" hidden><span class="visually-hidden">8</span></label>
							<label for="slider__btn-9" class="slider__btn-nav" hidden><span class="visually-hidden">9</span></label>
							<div class="slider__box">
								<ul class="slider__list">
									<li class="slider__item">
										<figure class="grid grid--vr" itemscope itemtype="http://schema.org/CreativeWork">
											<figcaption class="grid__item">
												<h4 class="box__title" itemprop="name">The Sandbox</h4>
												<p class="small icon icon--small icon--yellow icon--arrow" itemprop="text">Portail consommateur américain pour Carter's et OshKosh (Mode et vêtements pour enfants).</p>
											</figcaption>
											<p class="grid__item">
												<a href="img/the-sandbox-desktop-full.jpg" class="rollover icon icon--zoom">
													<picture>
														<source media="(min-width: 64.0625em)" srcset="img/the-sandbox-desktop-preview.jpg" />
														<img src="img/the-sandbox-desktop-preview-small.jpg" width="368" height="368" alt="The Sandbox" itemprop="image" />
													</picture>
												</a>
											</p>
										</figure>
									</li>
									<li class="slider__item">
										<figure class="grid grid--vr" itemscope itemtype="http://schema.org/CreativeWork">
											<figcaption class="grid__item">
												<h4 class="box__title" itemprop="name">The Macca's Playground</h4>
												<p class="small icon icon--small icon--yellow icon--arrow" itemprop="text">Portail consommateur australien pour McDonald’s (Suggestions et discussions autour des produits McDonald's).</p>
											</figcaption>
											<p class="grid__item">
												<a href="img/the-maccas-playground-desktop-full.jpg" class="rollover icon icon--zoom">
													<picture>
														<source media="(min-width: 64.0625em)" srcset="img/the-maccas-playground-desktop-preview.jpg" />
														<img src="img/the-maccas-playground-desktop-preview-small.jpg" width="368" height="368" alt="The Macca's Playground" itemprop="image" />
													</picture>
												</a>
											</p>
										</figure>
									</li>
									<li class="slider__item">
										<figure class="grid grid--vr" itemscope itemtype="http://schema.org/CreativeWork">
											<figcaption class="grid__item">
												<h4 class="box__title" itemprop="name">Shoppers Perspective Community</h4>
												<p class="small icon icon--small icon--yellow icon--arrow" itemprop="text">Portail communautaire américain pour SPC (Shopping, épicerie).</p>
											</figcaption>
											<p class="grid__item">
												<a href="img/spc-desktop-full.jpg" class="rollover icon icon--zoom">
													<picture>
														<source media="(min-width: 64.0625em)" srcset="img/spc-desktop-preview.jpg" />
														<img src="img/spc-desktop-preview-small.jpg" width="368" height="368" alt="Shoppers Perspective Community" itemprop="image" />
													</picture>
												</a>
											</p>
										</figure>
									</li>
									<li class="slider__item">
										<figure class="grid grid--vr" itemscope itemtype="http://schema.org/CreativeWork">
											<figcaption class="grid__item">
												<h4 class="box__title" itemprop="name">H2Opinion</h4>
												<p class="small icon icon--small icon--yellow icon--arrow" itemprop="text">Portail consommateur américain pour Hint Water (Habitudes de consommation autour des boissons aromatisées).</p>
											</figcaption>
											<p class="grid__item">
												<a href="img/h2opinion-desktop-full.jpg" class="rollover icon icon--zoom">
													<picture>
														<source media="(min-width: 64.0625em)" srcset="img/h2opinion-desktop-preview.jpg" />
														<img src="img/h2opinion-desktop-preview-small.jpg" width="368" height="368" alt="H2Opinion" itemprop="image" />
													</picture>
												</a>
											</p>
										</figure>
									</li>
									<li class="slider__item">
										<figure class="grid grid--vr" itemscope itemtype="http://schema.org/CreativeWork">
											<figcaption class="grid__item">
												<h4 class="box__title" itemprop="name">City of Ryde</h4>
												<p class="small icon icon--small icon--yellow icon--arrow" itemprop="text">Portail communautaire australien pour la zone d'administration locale Ryde au nord-ouest de Sydney (Qualité de vie, services, etc.).</p>
											</figcaption>
											<p class="grid__item">
												<a href="img/city-of-ryde-desktop-full.jpg" class="rollover icon icon--zoom">
													<picture>
														<source media="(min-width: 64.0625em)" srcset="img/city-of-ryde-desktop-preview.jpg" />
														<img src="img/city-of-ryde-desktop-preview-small.jpg" width="368" height="368" alt="City of Ryde" itemprop="image" />
													</picture>
												</a>
											</p>
										</figure>
									</li>
									<li class="slider__item">
										<figure class="grid grid--vr" itemscope itemtype="http://schema.org/CreativeWork">
											<figcaption class="grid__item">
												<h4 class="box__title" itemprop="name">Condé Nast</h4>
												<p class="small icon icon--small icon--yellow icon--arrow" itemprop="text">Portail consommateur américain pour l'éditeur de presse Condé Nast détenant entre autres Vogue, GQ et Vanity Fair.</p>
											</figcaption>
											<p class="grid__item">
												<a href="img/conde-nast-desktop-full.jpg" class="rollover icon icon--zoom">
													<picture>
														<source media="(min-width: 64.0625em)" srcset="img/conde-nast-desktop-preview.jpg" />
														<img src="img/conde-nast-desktop-preview-small.jpg" width="368" height="368" alt="Condé Nast" itemprop="image" />
													</picture>
												</a>
											</p>
										</figure>
									</li>
									<li class="slider__item">
										<figure class="grid grid--vr" itemscope itemtype="http://schema.org/CreativeWork">
											<figcaption class="grid__item">
												<h4 class="box__title" itemprop="name">Sita Ricerca</h4>
												<p class="small icon icon--small icon--yellow icon--arrow" itemprop="text">Portail communautaire italien pour Sita Ricerca (Discussions sur l'influence de la mode dans le monde).</p>
											</figcaption>
											<p class="grid__item">
												<a href="img/sita-ricerca-desktop-full.jpg" class="rollover icon icon--zoom">
													<picture>
														<source media="(min-width: 64.0625em)" srcset="img/sita-ricerca-desktop-preview.jpg" />
														<img src="img/sita-ricerca-desktop-preview-small.jpg" width="368" height="368" alt="Sita Ricerca" itemprop="image" />
													</picture>
												</a>
											</p>
										</figure>
									</li>
									<li class="slider__item">
										<figure class="grid grid--vr" itemscope itemtype="http://schema.org/CreativeWork">
											<figcaption class="grid__item">
												<h4 class="box__title" itemprop="name">Military Shopper Community</h4>
												<p class="small icon icon--small icon--yellow icon--arrow" itemprop="text">Portail communautaire américain pour MSC (Discussions autour des habitudes de consommation des familles de militaires).</p>
											</figcaption>
											<p class="grid__item">
												<a href="img/msc-desktop-full.jpg" class="rollover icon icon--zoom">
													<picture>
														<source media="(min-width: 64.0625em)" srcset="img/msc-desktop-preview.jpg" />
														<img src="img/msc-desktop-preview-small.jpg" width="368" height="368" alt="Military Shopper Community" itemprop="image" />
													</picture>
												</a>
											</p>
										</figure>
									</li>
									<li class="slider__item">
										<figure class="grid grid--vr" itemscope itemtype="http://schema.org/CreativeWork">
											<figcaption class="grid__item">
												<h4 class="box__title" itemprop="name">Aviva</h4>
												<p class="small icon icon--small icon--yellow icon--arrow" itemprop="text">Portail consommateur anglais pour Aviva (Assurance auto, habitation, santé, assurance vie).</p>
											</figcaption>
											<p class="grid__item">
												<a href="img/aviva-desktop-full.jpg" class="rollover icon icon--zoom">
													<picture>
														<source media="(min-width: 64.0625em)" srcset="img/aviva-desktop-preview.jpg" />
														<img src="img/aviva-desktop-preview-small.jpg" width="368" height="368" alt="Aviva" itemprop="image" />
													</picture>
												</a>
											</p>
										</figure>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</section>
			</article>
		</main>
		<footer id="contact" class="anchor">
			<div class="box box--secondary box--media">
				<div class="wrapper">
					<p class="box__title h2">Contact</p>
					<div class="grid grid--2 grid--gl p">
						<div class="grid__item">
							<form method="post" action="#submit">
								<p><label for="name" class="visually-hidden">Votre nom</label><input type="text" placeholder="Votre nom" class="w100" id="name" name="name" value="<?php if(isset($_POST['name'])) echo $_POST['name']; ?>" required /></p>
								<p class="mts"><label for="email" class="visually-hidden">Votre email</label><input type="email" placeholder="Votre email" class="w100" id="email" pattern="^([0-9a-zA-Z]+[-._+&amp;])*[0-9a-zA-Z]+@([-0-9a-zA-Z]+[.])+[a-zA-Z]{2,6}$" name="email" value="<?php if(isset($_POST['email'])) echo $_POST['email']; ?>" required /></p>
								<p class="mts"><label for="message" class="visually-hidden">Votre message</label><textarea placeholder="Votre message" class="w100" id="message" name="message" required><?php if(isset($_POST['message'])) echo $_POST['message']; ?></textarea></p>
								<p class="mtn"><button type="submit" id="submit" class="btn icon icon--plane w100"><span class="btn__label">Envoyer</span></button></p>
							</form>
							<?php echo $result; ?>
						</div>
						<div class="grid__item">
							<p>Je travaille actuellement chez le Groupe Pratique en tant que Web Designer & Intégrateur.</p>
							<p>Je reste à l'écoute de tout conseil, suggestion ou proposition. Contactez-moi ici-même ou retrouvez-moi sur vos réseaux sociaux favoris.</p>
							<p>A bientôt !</p>
							<ul class="social">
								<li class="social__item"><a href="//fr.linkedin.com/in/jonathanlevaillant" class="social__link icon icon--linkedin" title="LinkedIn"><span class="visually-hidden">LinkedIn</span></a></li>
								<li class="social__item"><a href="//codepen.io/jlwebart" class="social__link icon icon--codepen" title="CodePen"><span class="visually-hidden">CodePen</span></a></li>
								<li class="social__item"><a href="//twitter.com/jlwebart" class="social__link icon icon--twitter" title="Twitter"><span class="visually-hidden">Twitter</span></a></li>
								<li class="social__item"><a href="//plus.google.com/118128876926116272035/about" class="social__link icon icon--google" title="Google+"><span class="visually-hidden">Google+</span></a></li>
							</ul>
						</div>
					</div>
					<span class="map box__media box__media--map"><span class="map__pin"></span></span>
				</div>
			</div>
		</footer>
		<script async src="js/main.js"></script>
		<script>window.onload=function(){$(function(){$("a[href*=#]:not([href=#])").click(function(){if(location.pathname.replace(/^\//,"")==this.pathname.replace(/^\//,"")&&location.hostname==this.hostname){var t=$(this.hash);if(t=t.length?t:$("[name="+this.hash.slice(1)+"]"),t.length)return $("html,body").animate({scrollTop:t.offset().top},800,"easeInOutQuint"),!1}})})};</script>
	</body>
</html>
