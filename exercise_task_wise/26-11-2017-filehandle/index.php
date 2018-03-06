<?php

$handle = fopen("nex.txt", 'w');
//Writing numbers to text file  from 1 to 100
for ($i = 1; $i <= 100; $i++ . "\n ") {
    fwrite($handle, $i);
}
fclose($handle);
exit();
?>