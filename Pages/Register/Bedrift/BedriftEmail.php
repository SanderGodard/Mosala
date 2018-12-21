<?php
  $email=$_REQUEST['kemail'];
  $subject = 'Fullfør registreringen';
  $message = '
   Test, for å se om dette virker <br>
   5+8 <br>
   <p style="background-color: blue;">
   lorem dwabhodbwa  dbw jap bdwap pw andpaw np
   </p>
   ';
  // Always set content-type when sending HTML email
  $headers = "MIME-Version: 1.0" . "\r\n";
  $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

  // More headers
  $headers .= 'From: sander@mosala.com' . "\r\n";
  //$headers .= 'Cc: myboss@example.com' . "\r\n";

  mail($email, $subject, $message);
 ?>
