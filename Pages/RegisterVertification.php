<!Doctype html>
<html lang="nb-NO">

<head>
	<title>Registrert | Mosala</title>
	<meta name="keywords" content="om oss">
	<?php
		include '../Styling/head.php';
	?>

</head>
<nav>
	<?php
		$stillinger = "";
		$hvordan = "";
		$omoss = "";
		$profile = "class='NavActive'";
		$Mstillinger = "";
		$Mhvordan = "";
		$Momoss = "";
		$Mprofile = "class='MNavActive'";
		include '../Styling/nav.php';
	?>
</nav>

<body>
	<!-- Background -->
	<div>
		<img class="Main-pic" src="../Images/BG.jpg" alt="Background image">
	</div>


	<!-- Loginn -->
	<?php
		include '../Styling/login.php';
	 ?>

	<!-- Send-Email -->
	<?php
		include 'Register/Person/PersonEmail.php';
	 ?>
	<!-- Innhold-->
	<div class="Body">
		<h1>Registrert</h1>
		<div id="Hvordan"  class="BigContent" style="text-align: center;">
			<div id="Vertification">
				<p>
					Da har du blitt registrert.<br>
					<b>Bekreft e-post adressen din for å kunne logge på.</b><br>
					Derfra kan du endre profilen din, og se hvordan andre ser profilen din.
				</p>
				<p>
					Arbeidsgivere kan da se om de er interreserte i å jobbe med deg, og ta kontakt.<br>
					Du kan også se gjennom alle ledige stillinger og bestemme om du vil ta kontakt med de selv.
				</p>
			</div>
		</div>
	</div>

</body>
<footer>
	<?php
		include '../Styling/footer.php';
	?>
</footer>
</html>
