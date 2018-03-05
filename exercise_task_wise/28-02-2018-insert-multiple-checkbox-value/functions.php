<?php  
	function check($data,$userid) //function for checking which interest was selected before 
	{
		include_once "dbconfig.php";
		$con = connection();
		$user_query = "select * from cd_interest_user where userid = '$userid'";
		$userdatas = $con->query($user_query)->fetch_assoc();
		$userdata = explode(",", $userdatas['interest']);
		$status = "";
		foreach ($userdata as $value) {
			if ($data == $value) {
				$status = 1;
			}
		}
		if($status == 1)
		{
			return "checked";
		}
	}
?>