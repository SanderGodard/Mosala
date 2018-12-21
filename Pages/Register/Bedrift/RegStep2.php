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
      <label for="short-stilling"><b>Skriv kort om stillingen *</b></label><br>
      <textarea autofocus title="Her kan du redigerre størrelsen på tekstfeltet for å skrive mer." spellcheck="true" type="text" id="BigTextArea" name="short-stilling" placeholder="..." required></textarea><br>
      <label for="short-kandidat"><b>Beskriv den perfekte kandidat med få ord *</b></label><br>
      <textarea title="Her kan du redigerre størrelsen på tekstfeltet for å skrive mer." spellcheck="true" type="text" id="BigTextArea" name="short-kandidat" placeholder="..." required></textarea><br>
      <label for="short-startup"><b>Forklar kort om startup-en *</b></label><br>
      <textarea title="Her kan du redigerre størrelsen på tekstfeltet for å skrive mer." spellcheck="true" type="text" id="BigTextArea" name="short-startup" placeholder="..." required></textarea><br>
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
