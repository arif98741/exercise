
<?php

$handle = fopen("nex.txt", 'w');

fwrite($handle, "Hellow World1");
fclose($handle);
?>