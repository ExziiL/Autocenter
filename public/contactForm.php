<?php

if (isset($_POST["submit"])) {
  $name = $_POST["name"];
  $emailFrom = $_POST["email"];
  $message = $_POST["message"];

  $mailTo = "andrederjagin@live.de";
  $headers = "From: " . $emailFrom;
  $txt = "You have recieved an e-mail from " . $name . ".\n\n" . $message;

  mail($mailTo, $subject, $txt, $headers);
  header("Location: ../index.html");
}
