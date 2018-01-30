<?php

function connection() {
    try {
        $con = new mysqli("localhost", "root", "", "test");
        if ($con) {
            return $con;
        }
    } catch (Exception $ex) {
        
    }
}
