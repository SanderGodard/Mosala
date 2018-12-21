<!Doctype HTML>
<html lang="nb-NO">
<head>
	<?php
		include '../../../Styling/head.php';
	?>
</head>
<body style="min-width: 270px !important">
  <div class="InFrame">
    <?php
    $Step1 = 'id="ActiveStep"';
    $Step2 = '';
    $Step3 = '';
    $Step4 = '';
		include '../Steps.php';
    ?>
    <form method="post" class="register" action="RegStep2.php">

      <p style="margin-block-start: 0;">
        Kom i gang med må lage en bruker.<br>
        Det er kjapt, enkelt og helt gratis!
      </p>

      <?php
				if ( isset( $_POST['Register'] ) ) {

          $registeremail = $_POST['e-mail'];
          $registerpassword = $_POST['pass'];
        }
      ?>
      <label for="email"><b>E-post *</b></label><br>
      <input autofocus type="email" autocomplete="email" placeholder="Skriv inn e-post" value="<?php global $registeremail; echo "$registeremail"; ?>" required><br><br>
      <label for="psw"><b>Passord *</b></label><br>
      <input type="password" pattern=".{6,}" title="Seks eller flere tegn" placeholder="Velg et passord" value="<?php global $registerpassword; echo "$registerpassword"; ?>" required><br><br>
    	<label style="font-size: 1.3em; font-weight: 400;">
    		<input type="checkbox" checked="checked" name="remember" style="width: 1.5em; height: 1.5em; color: rgb(66, 96, 111); margin-top: .1em; border: 1px solid #777; background-color: #EEE;"> Husk meg
    	</label>
    	<br>
      <button style="margin-bottom: 0;" type="sumbit" name="Neste1" id="Registrer"><b>Neste</b></button>
    </form>
  </div>
</body>
</html>
