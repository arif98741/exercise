<?php

if (isset($_POST['get'])) {

    $val = "<h1>This is paragraph ";
    $randval = rand(1, 125999990);
    $val .= $randval;
    $val .= "</h1>";
    echo $val;
}
?>