<?
$conn = mysql_connect ("localhost", "prolific", "!raz00prolific") or die ("Could not connect to database");
mysql_select_db ("prolific") or die ("non trovo il database");

var_dump($conn);