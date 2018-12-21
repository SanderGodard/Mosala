<!Doctype HTML>
<html lang="nb-NO">
<head>
	<?php
		include '../../../Styling/head.php';
	?>
	<script>
	  function inputLimiter(e,allow) {
	      var AllowableCharacters = '';

	      if (allow == 'custom'){AllowableCharacters=' 1234567890';}


	      var k = document.all?parseInt(e.keyCode): parseInt(e.which);
	      if (k!=13 && k!=8 && k!=0){
	          if ((e.ctrlKey==false) && (e.altKey==false)) {
	          return (AllowableCharacters.indexOf(String.fromCharCode(k))!=-1);
	          } else {
	          return true;
	          }
	      } else {
	          return true;
	      }

	      }
	</script>
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.22/angular.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
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
        Kom i gang med må lage en bruker for din bedrift.<br>
        Det er kjapt, enkelt og helt gratis!
      </p>
      <table id="Personalia">
        <tr>
          <td>
            <label for="B-navn"><b>Bedriftnavn *</b></label><br>
            <input autofocus type="text" name="B-navn" placeholder="Mosala AS" required autocomplete="organization-title"><br>
          </td>
          <td style="float: right;">
            <label for="org"><b>Org.nummer *</b></label><br>
            <input type="text" id="NameCharacters" onkeypress="return inputLimiter(event,'custom')" value="" maxlength="9" name="org" placeholder="123456789" required><br>
          </td>
        </tr>
      </table><br>
      <table id="Personalia">
        <tr>
          <td>
            <label for="stilling"><b>Stilling *</b></label><br>
            <input type="text" name="stilling" placeholder="Lag 'autocomplete' felt" spellcheck="true" required autocomplete="work"><br>
          </td>
          <td style="float: right;">
            <label for="industry"><b>Industri *</b></label><br>
            <input type="text" name="industry" placeholder="Lag 'autocomplete' felt" spellcheck="true" required><br>
          </td>
        </tr>
      </table><br>
      <button style="margin-bottom: 0;" type="sumbit" name="Neste1" id="Registrer"><b>Neste</b></button>
    </form>
  </div>
</body>
</html>
