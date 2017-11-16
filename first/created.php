<?php
session_start();
echo "col num ".$_SESSION[colnum]."<br>";
for ($i = 0; $i < 3; $i++) {
	for ($j = 0; $j <$_SESSION[colnum] ; $j++) {
		echo $_REQUEST[i][j]."<br>";
	}
}
?>