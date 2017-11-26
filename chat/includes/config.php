<?php
$con = mysql_connect('localhost', '', '');
   mysql_select_db("test", $con);
   if (!$con)
   {
   die('Could not connect: ' . mysql_error());
   }
?>
