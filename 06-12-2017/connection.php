<?php

function connection() {

    $con = new mysqli("localhost", "root", "", "test");
    if ($con) {
        return $con;
    } else {
        return false;
    }
}
