<?php
	
	function connection()
	{
		$con = new mysqli("localhost","root","","interest");
		if($con)
			return $con;
		else
			return false;	
	}
 ?>