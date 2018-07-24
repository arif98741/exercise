<?php 

	//fetch data from database by using fetch object
	$db = new mysqli("localhost","root","","database");
	if($db){
		$sql = "select * from comments where post_id='$id' order by comments_id desc";
		$stmt = $db->query($sql);
		if($stmt){
			if($stmt->num_rows>0){
				while($row = $stmt->fetch_object()){
				echo "<div>";
					echo "<h5>".$row->name."</h5>";
					echo "<h5>".$row->address."</h5>";
					echo "<h5>".$row->mobile."</h5>";
					echo "<blockquote>".$row->name."</blockquote>";
				echo "<div>";
				}
			}else{
				echo "No data found";
			}
		}else{
			echo "Query failed";
		}
	}else{
		echo "Connection failed";
	}


?>