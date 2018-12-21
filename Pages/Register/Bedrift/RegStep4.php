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
		$Step2 = 'class="StepFinished"';
		$Step3 = 'class="StepFinished"';
		$Step4 = 'id="ActiveStep"';
		include '../Steps.php';
		?>
	  <form method="post" class="register" action="../../BedriftVertification.php" target="_parent">
			<label><b>Kontaktperson</b></label><br>
			<label for="knavn"><b>Navn *</b></label><br>
			<input autofocus type="text" name="knavn" placeholder="John Smith" required><br>
			<label for="kemail"><b>E-post *</b></label><br>
			<input type="email" name="kemail" placeholder="JohnSmith@bussiness.no" autocomplete="email" required><br>
			<br>

			<table id="Personalia">
				<tr>
					<td>
						<button formnovalidate type="button" formaction="RegStep4.php" class="Tilbake"><b>Tilbake</b></button>
					</td>
					<td style="float: right;">
						<button type="sumbit" name="RegistrerBruker" id="Registrer"><b>Registrer meg</b></button>
					</td>
				</tr>
			</table>
	  </form>
	</div>
</body>
</html>
