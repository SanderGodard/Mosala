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

    //$getemail = $_REQUEST['email'];
    $getemail = 'sander@godard.no';

    $mailreplace = '*****';

    $email0 = strstr($getemail, '@', true);
    $email1 = substr( $email0 , 0, 1);
    $email2 = $email1 . $mailreplace;
    $email3 = strstr($getemail, '@');

    $email = $email2 . $email3;

                  //

    //$telefon = $_REQUEST['telefon'];
    $gettelefon = '90189461';

    $telefon0 = strlen($gettelefon) - 2;
    $telefon1 = substr( $gettelefon , -2, 2);
    $telefon2 = '';


    $counter = 0;
    while ($counter < $telefon0) {
      $telefon2 = $telefon2 . '*';
      $counter++;
    }

    $telefon = $telefon2 . $telefon1;

  ?>

	<!-- Innhold-->
	<div class="Body">
		<h1>Registrert</h1>
		<div id="Hvordan"  class="BigContent" style="text-align: center;">
      <div class="GlemtDiv">
      <h2>Glemt passord?</h2>
        <table>
          <tr>
            <td>Vi kan sende mail til E-post adressen din: </td>
            <td class="SendTo"><span title="Viser ikke nøyaktig antall *"> <?php global $email; echo $email; ?></span></td>
          </tr>
          <tr>
            <td>Eller sende en SMS til: </td>
            <td class="SendTo"> <?php global $telefon; echo $telefon; ?></td>
          </tr>
          <tr class="GlemtBtn">
            <td><button tabindex="1" type="button" href="mailto:<?php global $email; echo $email; ?>" >E-mail</button></td>
            <td class="RightButton"><button tabindex="2" type="button" href="callto:<?php global $telefon; echo $telefon; ?>">Telefon</button></td>
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
