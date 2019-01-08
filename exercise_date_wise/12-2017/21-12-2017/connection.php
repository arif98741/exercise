<?php
/**
 * Created by PhpStorm.
 * User: Ariful Islam
 * Date: 21-Dec-17
 * Time: 2:50 PM
 */

        $con = new mysqli("localhost","root","","database");
        // $con = new mysqli(host,username,pass,database)
        if($con){ //if succcess
            echo "Connection successful";
        }else{ //if failed
            echo "Connection failed";
        }
