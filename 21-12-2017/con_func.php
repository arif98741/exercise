<?php
/**
 * Created by PhpStorm.
 * User: Ariful Islam
 * Date: 21-Dec-17
 * Time: 2:55 PM
 */

function connection(){ //connection inside function for using in other places
    $connect = new mysqli("localhost","root","","test");
    // $con = new mysqli(host,username,pass,database). here test is a mysql database name in my pc
    if($connect){ //if succcess
       return $connect; //returning connection to use in other places
    }else{ //if failed this will return false
        return false;
    }

}

//we want to fetch data from database
$con = connection(); // we keep connection function in $con variable. we will use it now
$sql = 'select * from user'; //command for getting data from database
$stmt = $con->query($sql); //we are executing
if($stmt){ //if execute successfully then go inside
    $row = $stmt->num_rows; //for getting number of rows we get from database
    if($row>0){ //greater then zero means we have got minimum 1 row data
      //we will print data now
      $data = $stmt->fetch_assoc(); //we got data in format of array. now we will print
       echo $data['name']; //here name is a column of user table in test databasee
       echo "<br/>";
    }else{ //else condition will run when if condition becomes false;
       echo "No Data Found";
    }

}


