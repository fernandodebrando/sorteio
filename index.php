<!DOCTYPE HTML>

<html>
	<head>
		<title>Comunidade PHPRS</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body>

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header">
						<nav>
							<ul>
								<li><a href="#lista">Lista</a></li>
								<li><a href="#sorteio" onclick="location.reload()">Sorteio</a></li>
							</ul>
						</nav>
					</header>
					<?php
					$json_file = file_get_contents("participantes.json");

						$json_str = json_decode($json_file, true);
						$participantes = $json_str['participantes'];
						$randomInt = random_int(0, count($participantes));
					?>
				<!-- Main -->
					<div id="main" style="width: 800px;">

							<article id="lista" style="width: 800px;">
								<h2 class="major">Lista sorteio - <?=count($participantes)?> participantes</h2>
								<ul style="font-size: 20px;">
								<?php
									foreach ($participantes as $participante) {
										echo "<li><strong>{$participante['name']}</strong></li>";
									}
								?>
								</ul>
							</article>

							<article id="sorteio" style="width: 800px;">
								<h2 class="major">Ganhador</h2>
								<h1 class="major"><strong><?= $participantes[$randomInt]['name']; ?></strong></h1>
							</article>

					</div>

				<!-- Footer -->
					<footer id="footer">

					</footer>

			</div>

		<!-- BG -->
			<div id="bg"></div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>
