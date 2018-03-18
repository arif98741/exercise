<?php
/* Database connection settings */
$host = "localhost";
$username = "";
$password = "";
$db = "sanroquemed";
$mysqli = new mysqli($host,$username,$password,$db) or die($mysqli->error);
?>