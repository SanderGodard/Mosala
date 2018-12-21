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
					<td>
						<label for="gradutdanning"><b>Grad av utdanning *</b></label><br>
						<div class="select">
							<select autofocus type="text" name="gradutdanning" required>
								<option style="display: none;">Velg en</option>
								<option value="1">Barneskole</option>
								<option value="2">Ungdomsskole</option>
								<option value="3">Videregående</option>
								<option value="4">Bachelor</option>
								<option value="5">Master</option>
						</div>

						</select><br>
					</td>
					<td style="float: right;">
						<label for="linjeutdanning"><b>Utdanningslinje *</b></label><br>
						<input type="text" name="linjeutdanning" placeholder="F.eks. Kunst og Design" spellcheck="true" required><br>
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
