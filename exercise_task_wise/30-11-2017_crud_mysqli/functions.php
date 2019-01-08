<?php 

function connection(){
	$con = new mysqli("localhost","root","","test");	
	return $con;
}
