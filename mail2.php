<?php

$recepient = "aleks@socialspice.co.za";
$sitename = "Social Spice";

$name = trim($_POST["name"]);
$email = trim($_POST["email"]);
$cell = trim($_POST["cell"]);
$text = trim($_POST["text"]);
$message = "Name: $name \nEmail: $email \nCell: $cell \nText: $text";

$pagetitle = "Contacts \"$sitename\"";
mail($recepient, $pagetitle, $message, "Content-type: text/plain; charset=\'utf-8\'\n From: $recepient");

?>
