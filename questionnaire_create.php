<?php

// var_dump ($_POST);
// exit();

$name = $_POST['name'];
$company = $_POST['company'];
$flightfrom = $_POST['flightfrom'];
$flightto = $_POST['flightto'];
$date = $_POST['date'];

$write_data = "{$name}, {$company}, {$flightfrom}, {$flightto}, {$date}\n";
// $write_data =[$name, $email, $bday, $textarea];

$file = fopen('data/questionnaire.csv', 'a');
flock($file, LOCK_EX);
fwrite($file, $write_data);
flock($file, LOCK_UN);
fclose($file);

header('Location:questionnaire_read.php');

?>