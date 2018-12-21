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
		$Step1 = 'class="StepFinished"';
		$Step2 = 'id="ActiveStep"';
		$Step3 = '';
		$Step4 = '';
		include '../Steps.php';
		?>
	  <form method="post" class="register" action="RegStep3.php">
			<table id="Personalia">
			  <tr>
			    <td>
			      <label for="fname"><b>Fornavn *</b></label><br>
			      <input autofocus type="text" name="fname" placeholder="John" required><br>
			    </td>
			    <td style="float: right;">
			      <label for="sname"><b>Etternavn *</b></label><br>
			      <input type="text" name="sname" placeholder="Smith" required><br>
			    </td>
			  </tr>
			</table><br>
			<table id="Personalia">
			  <tr>
			    <td>
			      <label for="telefon"><b>Telefonnr. *</b></label><br>
			      <input type="number" name="telefon" spellcheck="true" placeholder="12345678" required><br>
			    </td>
			  </tr>
			</table><br>
			<table id="Personalia">
			  <tr>
			    <td>
			      <label for="interesse"><b>Interesse</b></label><br>
			      <input type="text" name="interesse" spellcheck="true" placeholder="Design"><br>
			    </td>
			    <td style="float: right;">
			      <label for="perfinteresse"><b>Hva slags type startup ser du etter?</b></label><br>
			      <input type="text" name="perfinteresse" spellcheck="true" placeholder="..."><br>
			    </td>
			  </tr>
			</table><br>
			<table id="Personalia">
			  <tr>
			    <td>
						<button formnovalidate type="button" formaction="RegStep1.php" class="Tilbake"><b>Tilbake</b></button>
			    </td>
			    <td style="float: right;">
						<button type="sumbit" name="Neste2" id="Registrer"><b>Neste</b></button>
			    </td>
			  </tr>
			</table>
		</form>
	</div>
</body>
</html>
