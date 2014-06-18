<?php
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, OPTIONS');
header('Content-type: application/json');

$con=mysqli_connect("localhost","prolific","!raz00prolific","prolific");
// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

mysqli_query($con,"update counter set `usage` = `usage` + 1");

$result = mysqli_query($con,"SELECT `usage` FROM counter where `id` = 1");

while($row = mysqli_fetch_array($result)) {
  echo $row['usage'];
}

mysqli_close($con);
?>