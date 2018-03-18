<?php
$mysqli_hostname = "localhost";
$mysqli_user = "root";
$mysqli_password = "";
$mysqli_database = "hms";
$bd = mysqli_connect($mysqli_hostname, $mysqli_user, $mysqli_password) or die("Could not connect database");
mysqli_select_db($bd, "hms") or die("Could not select database");

?>