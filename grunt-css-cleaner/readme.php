<?php
require_once "parsedown.php";
$Parsedown = new Parsedown();

$readme = file_get_contents("https://raw.githubusercontent.com/Bitterbrown/grunt-css-cleaner/master/README.md");

echo $Parsedown->text($readme);
?>