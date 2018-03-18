<?php
	function connection()
	{
		$conn = new mysqli("localhost", "root", "", "sanroquemed") or die(mysqli_error());
		if($conn)
		{
			return $conn;
		}else{
			return false;
		}
	}

	function query($q)
	{
		$stmt = connection()->query($q);
		if ($stmt) {
			return $stmt;
		}else{
			return die(mysqli_error());
		}
	}	

 ?>