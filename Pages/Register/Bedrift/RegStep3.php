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
		$Step3 = 'id="ActiveStep"';
		$Step4 = '';
		include '../Steps.php';
		?>
	  <form method="post" class="register" action="RegStep4.php">
			<table id="Personalia">
				<tr>
					<td style="margin: auto;">
						<label for="lønning"><b>Lønning</b></label><br>
						<input autofocus type="text" name="lønning" placeholder="ikke bestemt"><br>
					</td>
				</tr>
			</table><br>
			<table id="Personalia">
				<tr>
					<td>
						<label for="sfrist"><b>Søknadsfrist</b></label><br>
						<input type="date" name="sfrist"><br>
					</td>
					<td style="float: right;">
						<label for="startdato"><b>Start-dato</b></label><br>
						<input type="date" name="startdato"><br>
					</td>
				</tr>
			</table><br>
			<table id="Personalia">
				<tr>
					<td>
						<label><b>Last opp søknaden din *</b></label><br>
						<input type="file" name="søknad" required placeholder="Eller dra filen hit" dropzone="copy" accept=".txt, .pdf, .doc, .docx, .odt, pptx" title="Bare vanlige tekstfiler er godtatt">
					</td>
				</tr>
			</table><br>
			<table id="Personalia">
				<tr>
					<td>
						<button formnovalidate type="button" formaction="RegStep2.php" class="Tilbake"><b>Tilbake</b></button>
					</td>
					<td style="float: right;">
						<button type="sumbit" name="Neste3" id="Registrer"><b>Neste</b></button>
					</td>
				</tr>
			</table>
	  </form>
	</div>
</body>
</html>
