<?php
$con=mysqli_connect("localhost","prolific","!raz00prolific","prolific");
// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

mysqli_query($con,"update counter set `usage` = `usage` + 1");

mysqli_close($con);
?>