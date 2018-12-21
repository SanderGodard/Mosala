<!Doctype HTML>
<html lang="nb-NO">
<head>
  <title>Registrer | Mosala</title>
	<meta name="keywords" content="Registrer">
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

  <?php
		include '../Styling/login.php';
	?>

	<!-- Innhold-->
	<div class="Body">
		<h1>
      <table>
        <tr>
          <td id="HvordanTitle">
            Registrer
          </td>
          <td>
            <a href="javascript:void(0)" class="RegisterOp" id="RegisterOpAc">
              Bedrift
            </a>
            <a href="Register.php" class="RegisterOp">
              Privatperson
            </a>
          </td>
        </tr>
      </table>
    </h1>
		<div id="RegistreringsSider">
      <iframe src="Register/Bedrift/RegStep1.php" width="100%" height="100%">
          Å nei, det har skjedd en feil!<br>
          Vennligst bruk en annen nettleser.
      </iframe>
    </div>
	</div>

</body>
<footer>
	<?php
		include '../Styling/footer.php';
	?>
</footer>
</html>
