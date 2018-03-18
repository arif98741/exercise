<?php

	if($_SERVER['REQUEST_METHOD']=='POST'){
		echo print_r($_POST);
		$username = $_POST['username']; 
		$password = $_POST['password']; 
		$firstname = $_POST['firstname']; 
		$middlename = $_POST['middlename']; 
		$lastname = $_POST['lastname']; 
		$conn = new mysqli("localhost", "root", "", "sanroquemed");
		$q1 = $conn->query("SELECT * FROM `admin` WHERE `username` = '$username'") or die(mysqli_error());
		$f1 = $q1->fetch_array();
		$c1 = $q1->num_rows;
			if($c1 > 0){
				echo "<script>alert('Username already taken')</script>";
			}else{
				$conn->query("INSERT INTO `admin` VALUES('', '$username', '$password', '$firstname', '$middlename', '$lastname')") or die(mysqli_error());
				header("location: admin.php");
			}				
	}
?>		
