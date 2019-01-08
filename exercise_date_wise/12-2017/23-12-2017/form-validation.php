<?php 

	include "connection.php";
	
	function validation($value){
		$value = trim($value);
		$value = htmlspecialchars($value);
		$value = stripslashes($value);
		$value = mysqli_real_escape_string(connection(),$value);
		return $value;
	}
	
	
	function textvalidation($value){
		$msg = '';
		if(!empty($value){
			if($value>6){
				if(filter_var($value,FILTER_VALIDATE_EMAIL)){
					$msg = "VALID EMAIL ADDRESS";
				}else{
					$msg = "Invalid Email Address";
				}
			}else{
				$msg = "You must need to use at least six characters";
			}
		}else{
			$msg = "Field Must not be empty";
		}
		
		return $msg;
	}
	

?>
