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
	  <form method="post" class="register" action="../../RegisterVertification.php" target="_parent">
			<label for="short-beskriv"><b>Beskriv deg selv med få ord *</b></label><br>
			<textarea autofocus title="Her kan du redigerre størrelsen på tekstfeltet for å skrive mer." spellcheck="true" type="text" id="BigTextArea" name="short-beskriv" placeholder="..." required></textarea><br>
			<label for="short-sterkesider"><b>Nevn noen av dine sterke sider *</b></label><br>
			<textarea title="Her kan du redigerre størrelsen på tekstfeltet for å skrive mer." spellcheck="true" type="text" id="BigTextArea" name="short-sterkesider" placeholder="..." required></textarea><br>
			<label for="short-tilbystartup"><b>Hva kan du tilby en startup-bedrift *</b></label><br>
			<textarea title="Her kan du redigerre størrelsen på tekstfeltet for å skrive mer." spellcheck="true" type="text" id="BigTextArea" name="short-tilbystartup" placeholder="..." required></textarea><br>
			<table id="Personalia">
				<tr>
					<td>
						<label><b>Last opp CV-en din *</b></label><br>
						<input type="file" dropzone="copy" title="Bare vanlige tekstfiler er godtatt" accept=".txt, .pdf, .doc, .docx, .odt, pptx" placeholder="Eller dra filen hit" name="CV" required>
					</td>
				</tr>
			</table><br>
			<table id="Personalia">
				<tr>
					<td>
						<button formnovalidate type="button" formaction="RegStep3.php" class="Tilbake"><b>Tilbake</b></button>
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
