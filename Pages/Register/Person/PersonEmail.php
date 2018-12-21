<?php
  $email = $_POST['email'];
  $subject = 'Fullfør registreringen';
  $message = '
   Test, for å se om dette virker <br>
   5+8 <br>
   <p style="background-color: red;">
   lorem dwabhodbwa  dbw jap bdwap pw andpaw np
   </p>
   ';

  mail($email, $subject, $message);
 ?>
