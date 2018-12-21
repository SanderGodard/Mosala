<!Doctype html>
<html lang="nb-NO">

<head>
	<title>Stillinger | Mosala</title>
	<meta name="keywords" content="Stillinger">
	<?php
		include '../Styling/head.php';
	?>
	<script>
		function SearchFunction() {
			var input, filter, ul, li, a, i;
			input = document.getElementById("Search");
			filter = input.value.toUpperCase();
			ul = document.getElementById("StillingsListe");
			li = ul.getElementsByTagName("li");
			for (i = 0; i < li.length; i++) {
				h2 = li[i].getElementsByTagName("h2")[0];
				if (h2.innerHTML.toUpperCase().indexOf(filter) > -1) {
					li[i].style.display = "";
				} else {
					li[i].style.display = "none";
				}
			}
		}
	</script>
</head>
<nav>
	<?php
		$stillinger = "class='NavActive'";
		$hvordan = "";
		$omoss = "";
		$profile = "";
		$Mstillinger = "class='MNavActive'";
		$Mhvordan = "";
		$Momoss = "";
		$Mprofile = "";
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

	<!-- Innhold-->
	<div class="Body">
		<h1>Stillinger</h1>
		<div id="SøkBG">
		<input autofocus onkeyup="SearchFunction()" name="StillingerSøk" type="search" placeholder="Søk i forskjellige stillinger..." id="Search">
		</div>
		<div id="SøkListe"  class="BigContent">
			<ul id="StillingsListe">
        <a href="#"><li><span class="TopSLine"><h2>Web utvikler</h2><span class="BedriftHits"><sub>3</sub></span><span class="PersonHits"><sub>52</sub></span></span><span class="JobDesc">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</span><span class="ReadMore">Les mer</span></li></a>

				<a href="#"><li><span class="TopSLine"><h2>UX/UI designer</h2><span class="BedriftHits"><sub>3</sub></span><span class="PersonHits"><sub>52</sub></span></span><span class="JobDesc">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</span><span class="ReadMore">Les mer</span></li></a>

				<a href="#"><li><span class="TopSLine"><h2>Frontend programmerer</h2><span class="BedriftHits"><sub>3</sub></span><span class="PersonHits"><sub>52</sub></span></span><span class="JobDesc">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</span><span class="ReadMore">Les mer</span></li></a>

				<a href="#"><li><span class="TopSLine"><h2>Backend programmerer</h2><span class="BedriftHits"><sub>3</sub></span><span class="PersonHits"><sub>52</sub></span></span><span class="JobDesc">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</span><span class="ReadMore">Les mer</span></li></a>

				<a href=""><li><span class="TopSLine"><h2>Artist</h2><span class="BedriftHits"><sub>3</sub></span><span class="PersonHits"><sub>52</sub></span></span><span class="JobDesc">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</span><span class="ReadMore">Les mer</span></li></a>

				<a href="#"><li><span class="TopSLine"><h2>Animatør</h2><span class="BedriftHits"><sub>3</sub></span><span class="PersonHits"><sub>52</sub></span></span><span class="JobDesc">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</span><span class="ReadMore">Les mer</span></li></a>

				<a href="#"><li><span class="TopSLine"><h2>Designer</h2><span class="BedriftHits"><sub>3</sub></span><span class="PersonHits"><sub>52</sub></span></span><span class="JobDesc">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</span><span class="ReadMore">Les mer</span></li></a>

				<a href="#"><li><span class="TopSLine"><h2>Vieospill designer</h2><span class="BedriftHits"><sub>3</sub></span><span class="PersonHits"><sub>52</sub></span></span><span class="JobDesc">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</span><span class="ReadMore">Les mer</span></li></a>

				<a href="#"><li><span class="TopSLine"><h2>Mikke mus</h2><span class="BedriftHits"><sub>3</sub></span><span class="PersonHits"><sub>52</sub></span></span><span class="JobDesc">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</span><span class="ReadMore">Les mer</span></li></a>

				<a href="#"><li><span class="TopSLine"><h2>Økonomisjef</h2><span class="BedriftHits"><sub>3</sub></span><span class="PersonHits"><sub>52</sub></span></span><span class="JobDesc">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</span><span class="ReadMore">Les mer</span></li></a>

				<a href="#"><li><span class="TopSLine"><h2>HMS-sjef</h2><span class="BedriftHits"><sub>3</sub></span><span class="PersonHits"><sub>52</sub></span></span><span class="JobDesc">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</span><span class="ReadMore">Les mer</span></li></a>

				<a href="#"><li><span class="TopSLine"><h2>Norgesmestere</h2><span class="BedriftHits"><sub>3</sub></span><span class="PersonHits"><sub>52</sub></span></span><span class="JobDesc">Josué er sykt rask, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</span><span class="ReadMore">Les mer</span></li></a>

				<a href=""><li><span class="TopSLine"><h2>Sanger</h2><span class="BedriftHits"><sub>3</sub></span><span class="PersonHits"><sub>52</sub></span></span><span class="JobDesc">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</span><span class="ReadMore">Les mer</span></li></a>

      </ul>
		</div>
	</div>

</body>
<footer>
	<?php
		include '../Styling/footer.php';
	?>
</footer>
</html>
