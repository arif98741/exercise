<?php
$path = pathinfo(__FILE__);
echo '<pre>';
print_r($path);



$files = scandir(__DIR__);
echo '<pre>';
print_r($files);

echo realpath(''); die;

?>