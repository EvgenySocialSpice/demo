<?php

$recepient = "aleks@socialspice.co.za";
$sitename = "Social Spice";

$email = trim($_POST["email"]);

$message = "Email: $email \nText: $text";

$pagetitle = "Sign Up \"$sitename\"";
mail($recepient, $pagetitle, $message, "Content-type: text/plain; charset=\'utf-8\'\n From: $recepient");

?>
