<!Doctype html>
<html lang="nb-NO">
<head>
	<title>Mosala</title>
	<?php
		include 'Styling/head.php';
	?>
	<!-- Google analytics script må legges inn -->
</head>
<nav>
	<?php
		$stillinger = "";
		$hvordan = "";
		$omoss = "";
		$profile = "";
		$Mstillinger = "";
		$Mhvordan = "";
		$Momoss = "";
		$Mprofile = "";
		include 'Styling/nav.php';
		// Den siden du er på skal ha class = NavActive, resten skal være tomme,
		// da virker navactive siden hele nav ellers er i sin egen fil.
	?>
</nav>
<body>
	<!-- Background -->
	<div>
		<img class="Main-pic" src="Images/BG.jpg" alt="Background image">
	</div>
	<!-- Login -->
	<?php
		include 'Styling/login.php';
	?>
	<!-- Innhold-->
	<div class="Body">
		<!-- Call to action buttons -->
		<div id="CTA-buttons">
			<a onclick="document.getElementById('id01').style.display='block'" style="cursor: pointer;" class="Button" id="Leftbtn">Jeg søker en ansatt</a>
			<a onclick="document.getElementById('id01').style.display='block'" style="cursor: pointer;" class="Button" id="Rightbtn">Jeg søker arbeid</a>
		</div>
	</div>
</body>
<footer id="IndexFooter">
	<?php
		include 'Styling/footer.php';
	?>
</footer>
</html>
