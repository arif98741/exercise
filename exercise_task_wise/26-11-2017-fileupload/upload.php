<?php 

$name = $_FILES['file']['name'];
$size = $_FILES['file']['size'];
$type = $_FILES['file']['type'];
echo $name;
echo "<pre>";
print_r($_FILES);
echo "</pre>";
?>