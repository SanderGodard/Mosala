<!Doctype html>
<html lang="nb-NO">

<head>
	<title>Glemt passord | Mosala</title>
	<meta name="keywords" content="Glemt passord">
	<?php
		include '../Styling/head.php';
	?>

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

  <?php
    $email = 'sander@godard.no';
    $telefon = '90189461';

    //$email = $_REQUEST['email'];
    //$telefon = $_REQUEST['telefon'];
  ?>

	<!-- Innhold-->
	<div class="Body">
		<h1>Registrert</h1>
		<div id="Hvordan"  class="BigContent" style="text-align: center;">
      <div class="GlemtDiv">
      <h2>Glemt passord?</h2>
        <table>
          <tr>
            <td>Vi kan sende mail til E-post adressen din:</td>
            <td class="SendTo"><?php global $email; echo $email; ?></td>
          </tr>
          <tr>
            <td>Eller sende en SMS til:</td>
            <td class="SendTo"><?php global $telefon; echo $telefon; ?></td>
          </tr>
          <tr class="GlemtBtn">
            <td><button type="button" href="mailto:<?php global $email; echo $email; ?>" >E-mail</button></td>
            <td class="RightButton"><button type="button" href="callto:<?php global $telefon; echo $telefon; ?>">Telefon</button></td>
          </tr>
        </table>
        <span id="Nullstill">Så kan du lett tilbakestille passordet ditt</span>
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
