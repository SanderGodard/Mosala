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
		include 'Register/Bedrift/BedriftEmail.php';
	 ?>

	<!-- Innhold-->
	<div class="Body">
		<h1>Registrert</h1>
		<div id="Hvordan"  class="BigContent" style="text-align: center;">
			<div id="Vertification">
				<p>
					Da har bedriften din blitt registrert.<br>
					<b>Gå til e-post adressen til kontaktpersonen for å verifisere registreringen av bedriften</b><br>
					Jobbsøkere kan da se om de er interreserte i å jobbe med deg, og ta kontakt.<br>
					Du kan også se gjennom alle jobbsøkere og bestemme om du vil ta kontakt med de selv.
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
