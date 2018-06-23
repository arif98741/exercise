<?php 
	if (isset($_GET['gettextresponse'])) {
		$buttonvalue = $_GET['buttonvalue'];
		echo 'Button value is '.$buttonvalue;
	}


	if (isset($_GET['getjsonresponse'])) {
		$buttonvalue = $_GET['buttonvalue'];
		$con = new mysqli('localhost','root','','test'); //database coonnection
		$response = array();
		if ($con) {
			$sql = "select * from usertable where designation='$buttonvalue' order by name asc";
			$stmt = $con->query($sql) or die($con->error). "Error at line number ".__LINE__;
			if ($stmt) {
				while ($row = $stmt->fetch_assoc()) {
				    $response[] = $row;
				}
			} else {
				$response['error'] = "Failed to execute sql query";
			}
		} else {
			$response['error'] = "Database Connection Failed";
		}

		echo json_encode($response);
	}



?>