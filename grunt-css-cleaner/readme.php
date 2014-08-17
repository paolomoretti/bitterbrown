<?php
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, OPTIONS');
header('Content-type: application/json');

require_once "parsedown.php";
$Parsedown = new Parsedown();

$readme = file_get_contents("https://raw.githubusercontent.com/Bitterbrown/grunt-css-cleaner/master/README.md");

echo $Parsedown->text($readme);
?>